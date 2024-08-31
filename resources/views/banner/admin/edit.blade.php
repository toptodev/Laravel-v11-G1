@extends('layouts.admin.master')

@section('app-content')
		<div class="row justify-content-center">
				<div class="col-11">
						<form action="{{ route('admin.banners.update', $banner->id) }}"
								enctype="multipart/form-data"
								method="POST">
								@csrf
								@method('PUT')
								<div class="tile">
										<h3 class="tile-title">แก้ไขรายการ</h3>
										<div class="tile-body">
												<div class="row g-3 needs-validation">
														<div class="col-md-8 mb-2">
																<label>ชื่อแบนเนอร์</label>
																<input class="form-control @error('title') is-invalid @enderror"
																		name="title"
																		placeholder="ระบุชื่อแบนเนอร์"
																		type="text"
																		value="{{ old('title') ?? $banner->title }}">
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
																<small class="form-text text-muted">ขนาดรูปภาพที่เหมาะสม 600 x 400 pixel (กว้าง x สูง)</small>
														</div>
														<div class="col-md-12 mb-2">
																<label>รายละเอียด</label>
																<textarea class="form-control @error('detail') is-invalid @enderror"
																  id="summernote"
																  name="detail"
																  placeholder="ระบุรายละเอียด..."
																  rows="8">{{ old('detail') ?? $banner->detail }}</textarea>
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
