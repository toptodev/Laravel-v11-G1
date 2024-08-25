@extends('layouts.admin.master')

@section('app-content')
		<div class="row justify-content-center">
				<div class="col-11">
						<form action="{{ route('admin.products.store') }}"
								enctype="multipart/form-data"
								method="POST">
								@csrf
								<div class="tile">
										<h3 class="tile-title">สร้างรายการใหม่</h3>
										<div class="tile-body">
												<div class="row g-3 needs-validation">
														<div class="col-md-3 mb-2">
																<label>รหัสสินค้า</label>
																<input class="form-control @error('code') is-invalid @enderror"
																		name="code"
																		placeholder="ระบุรหัสสินค้า"
																		type="text"
																		value="{{ old('code') ?? '' }}">
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
																		value="{{ old('title') ?? '' }}">
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
																		value="{{ old('price_actual') ?? '' }}">
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
																		value="{{ old('price') ?? '' }}">
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
														<div class="col-md-8 mb-2">
																<label>ลิงค์เชื่อมโยง</label>
																<input class="form-control @error('url') is-invalid @enderror"
																		name="url"
																		placeholder="ระบุลิงค์เชื่อมโยง"
																		type="text"
																		value="{{ old('url') ?? '' }}">
														</div>
														<div class="col-md-4 mb-2">
																<label>การแสดง (Target)</label>
																<select class="form-control @error('target') is-invalid @enderror"
																		name="target">
																		<option value="">-เลือก-</option>
																		<option value="_parent">_parent (เปิดหน้าต่างที่เป็นหน้าต่างระดับ Parent)</option>
																		<option value="_blank">_blank (เปิดหน้าต่างใหม่ทุกครั้ง)</option>
																		<option value="_self">_self (เปิดหน้าต่างเดิม)</option>
																		<option value="_top">_top (เปิดหน้าต่างในระดับบนสุด)</option>
																</select>
														</div>
														<div class="col-md-12 mb-2">
																<label>รายละเอียด</label>
																<textarea class="form-control @error('detail') is-invalid @enderror"
																  id="summernote"
																  name="detail"
																  placeholder="ระบุรายละเอียด..."
																  rows="8">{{ old('detail') ?? '' }}</textarea>
														</div>
														<div class="col-md-12 mb-2">
																<label>รูปภาพประกอบเพิ่มเติม</label>
																<div class="file-loading">
																		<input accept="image/*"
																				class="form-control"
																				id="input-slider"
																				multiple
																				name="slider[]"
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
@endsection
