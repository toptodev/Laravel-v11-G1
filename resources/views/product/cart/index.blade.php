@extends('layouts.master')

@section('app-content')
		<section>
				<div class="container">
						<div class="row">
								<div class="col-sm-12 pt-5 text-center">
										<h2>ตะกร้าของฉัน</h2>
								</div>
						</div>
						<div class="row justify-content-center">
								<div class="col-md-10">
										<div class="card">
												<div class="card-header bg-light text-light d-flex justify-content-between">
														<a class="btn btn-outline-info btn-sm px-4"
																href="{{ route('products.index') }}">
																<i class="fas fa-long-arrow-alt-left"></i>
																ช้อปปิ้งต่อ
														</a>
														<a class="btn btn-outline-info btn-sm px-4"
																href="#">
																<i class="fas fa-ban"></i>
																Reset
														</a>
												</div>
												<div class="card-body pb-0">
														<table class="table-hover table-sm table">
																<thead>
																		<tr>
																				<th>สินค้า</th>
																				<th class="px-3 text-center">จำนวน</th>
																				<th class="px-3 text-center">ราคา</th>
																				<th class="px-3 text-center">รวมเงิน</th>
																				<th></th>
																		</tr>
																</thead>
																<tbody>
																		@for ($i = 1; $i <= 10; $i++)
																				<tr>
																						<td>Ex sint quis commodo minim sit quis ex non minim eu</td>
																						<td class="px-3 text-center"
																								width="100">1</td>
																						<td class="px-3 text-end"
																								width="100">200</td>
																						<td class="px-3 text-end"
																								width="100">200</td>
																						<td class="px-3"
																								width="1">
																								<div class="text-nowrap">
																										<div class="btn-group"
																												role="group">
																												<a class="btn btn-secondary btn-sm"
																														href="#">
																														<i class="fas fa-minus-square"></i>
																												</a>
																												<a class="btn btn-secondary btn-sm"
																														href="#">
																														<i class="fas fa-plus-square"></i>
																												</a>
																										</div>
																										<a class="btn btn-danger btn-sm"
																												href="#">
																												<i class="fas fa-trash"></i>
																										</a>
																								</div>
																						</td>
																				</tr>
																		@endfor
																</tbody>
																<tfoot>
																		<tr>
																				<td class="px-3 text-end align-middle"
																						colspan="3">รวมเงินทั้งหมด</td>
																				<td class="px-3 text-end">
																						3,000
																				</td>
																				<td></td>
																		</tr>
																		<tr>
																				<td class="px-3 text-end align-middle"
																						colspan="3">ค่าจัดส่ง</td>
																				<td class="px-3 text-end">
																						200
																				</td>
																				<td></td>
																		</tr>
																		<tr>
																				<th class="px-3 text-end align-middle"
																						colspan="3">ยอดที่ต้องชำระ</th>
																				<th class="font-x-large px-3 text-end">
																						3,200
																				</th>
																				<th></th>
																		</tr>
																</tfoot>
														</table>
												</div>
												<div class="card-footer text-end">
														<a class="btn btn-success px-4"
																href="{{ route('carts.checkout') }}">
																ดำเนินการ
																<i class="fas fa-long-arrow-alt-right"></i>
														</a>
												</div>
										</div>
								</div>
						</div>
				</div>
		</section>
@endsection
