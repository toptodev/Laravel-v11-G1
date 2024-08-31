@extends('layouts.master')

@section('app-content')
		<section class="page-contents">
				<div class="page-header mt-5">
						<div class="container">

								<nav aria-label="breadcrumb">
										<ol class="breadcrumb">
												<li class="breadcrumb-item"><a href="{{ route('index') }}">หน้าแรก</a></li>
												<li class="breadcrumb-item"><a href="{{ route('banners.index') }}">สินค้าทั้งหมด</a></li>
												<li aria-current="page"
														class="breadcrumb-item active">{{ $banner->title }}</li>
										</ol>
								</nav>

								<div class="row justify-content-center">
										<div class="col-sm-12">
												<h2>{{ $banner->title }}</h2>
												<div class="text-muted">
														{{ $banner->category }}
												</div>
										</div>
								</div>
						</div>
				</div>

				<div class="page-detail">
						<div class="container">
								<div class="row justify-content-center">
										<div class="col-sm-12 col-md-12">
												<div class="py-5">
														<p class="text-center">
																<img class="img-fluid"
																		src="{{ Storage::url('banner/' . gen_folder($banner->id) . '/' . $banner->cover) }}">
														</p>
														<table class="table-striped table">
																<tr>
																		<td width="200">รหัสสินค้า</td>
																		<td>{{ $banner->code }}</td>
																</tr>
																<tr>
																		<td>ชื่อสินค้า</td>
																		<td>{{ $banner->title }}</td>
																</tr>
																<tr>
																		<td>ราคาจริง</td>
																		<td>{{ number_format($banner->price_actual, 2) }}</td>
																</tr>
																<tr>
																		<td>ราคาขาย</td>
																		<td>{{ number_format($banner->price, 2) }}</td>
																</tr>
																<tr>
																		<td>ประเภท</td>
																		<td>
																				@if ($banner->types)
																						@foreach ($banner->types as $type)
																								{{ $type == 'recommand' ? '🫢 สินค้าแนะนำ' : '' }}
																								{{ $type == 'new' ? '🧐 สินค้าใหม่' : '' }}
																								{{ $type == 'hot' ? '😋 สินค้าที่ได้รับความนิยม' : '' }}
																						@endforeach
																				@endif
																		</td>
																</tr>
																<tr>
																		<td>รายละเอียด</td>
																		<td>{{ $banner->detail }}</td>
																</tr>
																<tr>
																		<td colspan="2">
																				รูปภาพประกอบเพิ่มเติม <br />
																				<div class="row g-3 g-c">
																						@if (!empty($banner->images))
																								@foreach ($banner->images as $image)
																										<div class="col-md-4">
																												<img class="img-fluid"
																														src="{{ Storage::url('banner/' . gen_folder($banner->id) . '/' . $image['name_uploaded']) }}">
																										</div>
																								@endforeach
																						@endif
																				</div>
																		</td>
																</tr>
														</table>
												</div>
												<div class="d-flex justify-content-center pb-3">
														<a class="btn btn-lg btn-outline-primary"
																href="{{ route('carts.addToCart', $banner->id) }}">
																<i class="fas fa-cart-plus"></i> หยิบใส่ตะกร้า
														</a>
												</div>
										</div>
								</div>
						</div>
				</div>
		</section>
@endsection
