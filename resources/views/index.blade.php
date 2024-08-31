@extends('layouts.master')

@section('app-content')
		<section>
				<div class="carousel slide"
						id="carouselExampleIndicators">
						<div class="carousel-indicators">
								@foreach ($banners as $index => $banner)
										<button aria-current="{{ $index == 0 ? true : false }}"
												aria-label="{{ $banner->title }}"
												class="{{ $index == 0 ? 'active' : '' }}"
												data-bs-slide-to="{{ $index }}"
												data-bs-target="#carouselExampleIndicators"
												type="button"></button>
								@endforeach
						</div>
						<div class="carousel-inner">
								@foreach ($banners as $banner)
										<div class="carousel-item active">
												<img class="d-block w-100"
														src="{{ $banner->cover }}">
										</div>
								@endforeach
						</div>
						<button class="carousel-control-prev"
								data-bs-slide="prev"
								data-bs-target="#carouselExampleIndicators"
								type="button">
								<span aria-hidden="true"
										class="carousel-control-prev-icon"></span>
								<span class="visually-hidden">Previous</span>
						</button>
						<button class="carousel-control-next"
								data-bs-slide="next"
								data-bs-target="#carouselExampleIndicators"
								type="button">
								<span aria-hidden="true"
										class="carousel-control-next-icon"></span>
								<span class="visually-hidden">Next</span>
						</button>
				</div>
		</section>

		<section class="sc-service py-5">
				<div class="container">
						<h1 class="text-uppercase mb-4 text-center">
								<span class="highlight-primary">เป็นที่บริการของคุณ</span>
						</h1>
						<div class="row">
								<div class="col-lg-3 col-md-6 text-center">
										<div class="service-box mx-auto mt-3">
												<i class="far fa-gem fa-5x text-danger mb-3"></i>
												<h3 class="mb-3">ผู้เชี่ยวชาญ</h3>
												<p class="text-muted mb-0">เรามีช่างผู้ชำนาญการในการซ่อม ให้บริการ และให้คำปรึกษา</p>
										</div>
								</div>
								<div class="col-lg-3 col-md-6 text-center">
										<div class="service-box mx-auto mt-3">
												<i class="fas fa-truck fa-5x text-danger mb-3"></i>
												<h3 class="mb-3">บริการส่งของ</h3>
												<p class="text-muted mb-0">เรามีบริการส่งสินค้าทันใจ เมื่อสั่งซื้อสินค้าจากทางร้าน</p>
										</div>
								</div>
								<div class="col-lg-3 col-md-6 text-center">
										<div class="service-box mx-auto mt-3">
												<i class="far fa-newspaper fa-5x text-danger mb-3"></i>
												<h3 class="mb-3">อัพเดด</h3>
												<p class="text-muted mb-0">เราอัพเดดสินค้าและเทคโนโลยีใหม่ๆตลอดเวลา</p>
										</div>
								</div>
								<div class="col-lg-3 col-md-6 text-center">
										<div class="service-box mx-auto mt-3">
												<i class="far fa-heart fa-5x text-danger mb-3"></i>
												<h3 class="mb-3">บริการด้วยใจ</h3>
												<p class="text-muted mb-0">เราดูแลและบริการลูกค้าอย่างเป็นกันเอง</p>
										</div>
								</div>
						</div>
				</div>
		</section>

		<section class="mt-5">
				<div class="container">
						<h1 class="text-uppercase mb-4 text-center">
								<span class="highlight-primary">สินค้า</span>แนะนำ
						</h1>
						<div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-3">
								@foreach ($products as $product)
										<div class="col">
												<div class="card product-box shadow-sm">
														<img alt="{{ Request::getHost() }}"
																class="img-fluid"
																src="{{ $product->cover }}">
														<div class="card-body">
																<div class="card-title fw-bolder">
																		<a class="text-decoration-none text-dark"
																				href="{{ route('products.show', $product->id) }}">
																				{{ $product->title }}
																		</a>
																</div>
																<p class="card-text">
																		@if ($product->types)
																				@foreach ($product->types as $type)
																						{!! $type == 'recommand' ? '<small class="badge fw-light rounded-pill bg-info p-1">สินค้าแนะนำ</small>' : '' !!}
																						{!! $type == 'new' ? '<small class="badge fw-light rounded-pill bg-danger p-1">สินค้าใหม่</small>' : '' !!}
																						{!! $type == 'hot' ? '<small class="badge fw-light rounded-pill bg-success p-1">สินค้าที่ได้รับความนิยม</small>' : '' !!}
																				@endforeach
																		@endif
																</p>
																<div class="d-flex justify-content-between align-items-center">
																		<div class="text-price">
																				<h4 class="m-0 p-0">฿{{ number_format($product->price) }} </h4>
																				<del class="text-danger">฿{{ number_format($product->price_actual) }} </del>
																		</div>
																		<a class="btn btn-sm btn-outline-primary"
																				href="{{ route('carts.addToCart', $product->id) }}">
																				<i class="fas fa-cart-plus"></i>
																		</a>
																</div>
														</div>
												</div>
										</div>
								@endforeach
						</div>

						<div class="row my-5">
								<div class="col text-center">
										<a class="btn btn-lg btn-primary"
												href="{{ route('products.index') }}">สินค้าทั้งหมด</a>
								</div>
						</div>
		</section>
@endsection
