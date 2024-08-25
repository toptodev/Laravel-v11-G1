@extends('layouts.master')

@section('app-content')
		<section class="page-contents">
				<div class="page-header mt-5">
						<div class="container">

								<nav aria-label="breadcrumb">
										<ol class="breadcrumb">
												<li class="breadcrumb-item"><a href="{{ route('index') }}">หน้าแรก</a></li>
												<li class="breadcrumb-item"><a href="{{ route('products.index') }}">สินค้าทั้งหมด</a></li>
												<li aria-current="page"
														class="breadcrumb-item active">{{ $product->title }}</li>
										</ol>
								</nav>

								<div class="row justify-content-center">
										<div class="col-sm-12">
												<h2>{{ $product->title }}</h2>
												<div class="text-muted">
														{{ $product->category }}
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
																		src="https://placehold.co/600x400">
														</p>
														<table class="table-striped table">
																<tr>
																		<td width="200">รหัสสินค้า</td>
																		<td>{{ $product->code }}</td>
																</tr>
																<tr>
																		<td>ชื่อสินค้า</td>
																		<td>{{ $product->title }}</td>
																</tr>
																<tr>
																		<td>ราคาจริง</td>
																		<td>{{ $product->price_actual }}</td>
																</tr>
																<tr>
																		<td>ราคาขาย</td>
																		<td>{{ $product->price }}</td>
																</tr>
																<tr>
																		<td>รายละเอียด</td>
																		<td>{{ $product->detail }}</td>
																</tr>
														</table>
												</div>
												<div class="d-flex justify-content-center pb-3">
														<a class="btn btn-lg btn-outline-primary">
																<i class="fas fa-cart-plus"></i> หยิบใส่ตะกร้า
														</a>
												</div>
										</div>
								</div>
						</div>
				</div>
		</section>
@endsection
