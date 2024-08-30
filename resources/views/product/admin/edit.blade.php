@extends('layouts.admin.master')

@section('app-content')
		<div class="row justify-content-center">
				<div class="col-11">
						<form action="{{ route('admin.products.update', $product->id) }}"
								enctype="multipart/form-data"
								method="POST">
								@csrf
								@method('PUT')
								<div class="tile">
										<h3 class="tile-title">แก้ไขรายการ</h3>
										<div class="tile-body">
												<div class="row g-3 needs-validation">
														<div class="col-md-3 mb-2">
																<label>รหัสสินค้า</label>
																<input class="form-control @error('code') is-invalid @enderror"
																		name="code"
																		placeholder="ระบุรหัสสินค้า"
																		type="text"
																		value="{{ old('code') ?? $product->code }}">
																@error('code')
																		<p class="invalid-feedback">{{ $message }}</p>
																@enderror
														</div>
														<div class="col-md-5 mb-2">
																<label>ชื่อสินค้า</label>
																<input class="form-control @error('title') is-invalid @enderror"
																		name="title"
																		placeholder="ระบุชื่อสินค้า"
																		type="text"
																		value="{{ old('title') ?? $product->title }}">
																@error('title')
																		<p class="invalid-feedback">{{ $message }}</p>
																@enderror
														</div>
														<div class="col-md-4 mb-2">
																<label>หน้าปก</label>
																<input accept="image/*"
																		class="form-control @error('cover') is-invalid @enderror krajee-input"
																		data-msg-placeholder="เลือกไฟล์หน้าปก"
																		name="cover"
																		type="file">
																<small class="form-text text-muted">ขนาดรูปภาพที่เหมาะสม 440 x 440 pixel (กว้าง x สูง)</small>
														</div>
														<div class="col-md-2 mb-2">
																<label>ราคาจริง</label>
																<input class="form-control @error('price_actual') is-invalid @enderror"
																		name="price_actual"
																		placeholder="ระบุจำนวน"
																		type="number"
																		value="{{ old('price_actual') ?? $product->price_actual }}">
																@error('price_actual')
																		<p class="invalid-feedback">{{ $message }}</p>
																@enderror
														</div>
														<div class="col-md-2 mb-2">
																<label>ราคาขาย</label>
																<input class="form-control @error('price') is-invalid @enderror"
																		name="price"
																		placeholder="ระบุจำนวน"
																		type="number"
																		value="{{ old('price') ?? $product->price }}">
																@error('price')
																		<p class="invalid-feedback">{{ $message }}</p>
																@enderror
														</div>
														<div class="col-md-4 mb-2">
																<label>ประเภท</label>
																<div class="d-flex justify-content-start ml-3">
																		<div class="form-check form-check-inline">
																				<input class="form-check-input"
																						id="checkbox1"
																						name="types[]"
																						type="checkbox"
																						value="1">
																				<label class="form-check-label"
																						for="checkbox1">สินค้าแนะนำ</label>
																		</div>
																		<div class="form-check form-check-inline">
																				<input class="form-check-input"
																						id="checkbox2"
																						name="types[]"
																						type="checkbox"
																						value="2">
																				<label class="form-check-label"
																						for="checkbox2">สินค้าใหม่</label>
																		</div>
																		<div class="form-check form-check-inline">
																				<input class="form-check-input"
																						id="checkbox3"
																						name="types[]"
																						type="checkbox"
																						value="3">
																				<label class="form-check-label"
																						for="checkbox3">สินค้าที่ได้รับความนิยม</label>
																		</div>
																</div>
														</div>
														<div class="col-md-12 mb-2">
																<label>รายละเอียด</label>
																<textarea class="form-control @error('detail') is-invalid @enderror"
																  id="summernote"
																  name="detail"
																  placeholder="ระบุรายละเอียด..."
																  rows="8">{{ old('detail') ?? $product->detail }}</textarea>
														</div>
														<div class="col-md-12 mb-2">
																<label>รูปภาพประกอบเพิ่มเติม</label>
																<div class="file-loading">
																		<input accept="image/*"
																				id="input-images"
																				multiple
																				name="images[]"
																				type="file">
																</div>
														</div>
												</div>
										</div>
										<div class="tile-footer">
												<button class="btn btn-primary"
														type="submit">
														<i class="fas fa-check-circle fa-fw"></i>บันทึก
												</button>
												<button class="btn btn-light"
														type="reset">
														<i class="fa fa-times-circle fa-fw"></i>ยกเลิก
												</button>
										</div>
								</div>
						</form>
				</div>
		</div>
@endsection
@section('script-content')
		<script>
				$.ajaxSetup({
						headers: {
								'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
						}
				});

				$(document).ready(function() {
						$("#input-images").fileinput({
								language: "th",
								initialPreview: @php echo $product->initialPreview; @endphp,
								initialPreviewAsData: true,
								initialPreviewConfig: @php echo $product->initialPreviewConfig; @endphp,
								deleteUrl: "@php echo route('admin.products.images-destroy', $product->id)  @endphp",
								overwriteInitial: false,
								initialPreviewFileType: 'image',
								uploadAsync: false,
								browseClass: "btn btn-secondary btn-block",
								showCaption: false,
								showRemove: false,
								showUpload: false,
								allowedFileExtensions: ["jpg", "jpeg", "png", "gif", "webp"],
								fileActionSettings: {
										showDrag: true,
										showZoom: true,
										showUpload: false,
										showDelete: true,
								},
								maxFileSize: 300,
								purifyHtml: true,
						}).on('filesorted', function(event, params) {
								// console.log('File sorted ', params.previewId, params.oldIndex, params.newIndex, params.stack);
								$.post("@php echo route('admin.products.images-sort', $product->id) @endphp", {
										stack: params.stack
								}, function(data, textStatus, jqXHR) {
										console.log(data, textStatus, jqXHR);
								}, "JSON");
						});

				});
		</script>
@endsection
