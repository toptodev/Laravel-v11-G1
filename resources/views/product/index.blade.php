@extends('layouts.master')

@section('app-content')
		<div class="product py-5">
				<div class="container">
						<div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-3">
								@for ($i = 1; $i <= 12; $i++)
										<div class="col">
												<div class="card shadow-sm">
														<img alt="{{ Request::getHost() }}"
																class="img-fluid"
																src="https://placehold.co/600x400">
														<div class="card-body">
																<div class="card-title fw-bolder">
																		<a class="text-decoration-none text-dark"
																				href="{{ route('products.show', 1) }}">
																				Notebook Asus E410MA-EKP11W
																		</a>
																</div>
																<p class="card-text">
																		<small class="badge fw-light rounded-pill bg-success p-1">สินค้าแนะนำ</small>
																		<small class="badge fw-light rounded-pill bg-warning p-1">สินค้าที่ได้รับความนิยม</small>
																</p>
																<div class="d-flex justify-content-between align-items-center">
																		<div class="btn-group">
																				<button class="btn btn-sm btn-outline-secondary"
																						type="button"><i class="bi bi-cart-plus"></i></button>
																		</div>
																		<h4 class="m-0 p-0">฿11,900 </h4>
																</div>
														</div>
												</div>
										</div>
								@endfor
						</div>
				</div>
		</div>
@endsection
