@extends('layouts.master')

@section('app-content')
		<div class="product bg-body-tertiary py-5">
				<div class="container">
						<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
								@for ($i = 1; $i <= 12; $i++)
										<div class="col">
												<div class="card shadow-sm">
														<svg aria-label="Placeholder: Thumbnail"
																class="bd-placeholder-img card-img-top"
																focusable="false"
																height="225"
																preserveAspectRatio="xMidYMid slice"
																role="img"
																width="100%"
																xmlns="http://www.w3.org/2000/svg">
																<title>Placeholder</title>
																<rect fill="#55595c"
																		height="100%"
																		width="100%"></rect><text dy=".3em"
																		fill="#eceeef"
																		x="50%"
																		y="50%">Thumbnail</text>
														</svg>
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
