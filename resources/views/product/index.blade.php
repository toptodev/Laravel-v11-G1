@extends('layouts.master')

@section('app-content')
		<div class="page-header mt-5">
				<div class="container">

						<nav aria-label="breadcrumb">
								<ol class="breadcrumb">
										<li class="breadcrumb-item"><a href="{{ route('index') }}">หน้าแรก</a></li>
										<li aria-current="page"
												class="breadcrumb-item active">สินค้าทั้งหมด</li>
								</ol>
						</nav>

						<div class="row justify-content-center">
								<div class="col-sm-12">
										<h2>สินค้าทั้งหมด</h2>
								</div>
						</div>
				</div>
		</div>

		<div class="product pb-5 pt-2">
				<div class="container">
						<div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-3">
								@foreach ($products as $product)
										<div class="col">
												<div class="card product-box shadow-sm">
														<img alt="{{ Request::getHost() }}"
																class="img-fluid"
																src="https://placehold.co/600x400">
														<div class="card-body">
																<div class="card-title fw-bolder">
																		<a class="text-decoration-none text-dark"
																				href="{{ route('products.show', $product->id) }}">
																				{{ $product->title }}
																		</a>
																</div>
																<p class="card-text">
																		<small class="badge fw-light rounded-pill bg-success p-1">สินค้าแนะนำ</small>
																</p>
																<div class="d-flex justify-content-between align-items-center">
																		<div class="text-price">
																				<h4 class="m-0 p-0">฿{{ number_format($product->price) }} </h4>
																				<del class="text-danger">฿{{ number_format($product->price_actual) }} </del>
																		</div>
																		<a class="btn btn-sm btn-outline-primary"
																				href="#">
																				<i class="fas fa-cart-plus"></i>
																		</a>
																</div>
														</div>
												</div>
										</div>
								@endforeach
						</div>
						<div class="my-5 text-center">
								{{ $products->render() }}
						</div>
				</div>
		</div>
@endsection
