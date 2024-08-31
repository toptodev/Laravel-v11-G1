@extends('layouts.admin.master')

@section('app-content')
		<div class="row justify-content-center">
				<div class="col-8">
						<div class="tile">
								<div class="tile-title-w-btn">
										<h3 class="title">รายละเอียดการสั่งซื้อ</h3>
										<p>
												<a class="btn btn-secondary icon-btn"
														href="{{ url()->current() }}">
														<i class="fas fa-sync fa-fw"></i>Refresh
												</a>
										</p>
								</div>
								<div class="tile-body">
										<div class="bg-light mb-2 border px-2 py-3">
												<h6>เลขที่ใบสั่งซื้อ #{{ $order->code }}</h6>
												สร้างเมื่อ : {{ $order->created_at }}
										</div>
										<div class="bg-light mb-2 border px-2 py-3">
												<h6>ผู้สั่งซื้อ</h6>
												ชื่อ-สกุล : {{ $order->name }} <br>
												เบอร์โทรศัพท์ : {{ $order->tel }} <br>
												ที่อยู่อีเมล์ : {{ $order->email }} <br>
										</div>

										<div class="d-block">
												<table class="table-sm table-bordered table">
														<thead>
																<tr class="bg-light">
																		<th class="text-center">สินค้า</th>
																		<th class="text-center">จำนวน</th>
																		<th class="px-3 text-center">ราคา</th>
																		<th class="px-3 text-center">รวมเงิน</th>
																</tr>
														</thead>
														<tbody>
																@foreach ($order['items'] as $value)
																		<tr>
																				<td>{{ $value['item']['title'] }}</td>
																				<td class="text-center">{{ $value['qty'] }}</td>
																				<td class="text-right">{{ number_format($value['price'], 2) }}</td>
																				<td class="text-right">{{ number_format($value['price'] * $value['qty'], 2) }}</td>
																		</tr>
																@endforeach
														</tbody>
														<tfoot>
																<tr>
																		<th class="text-right"
																				colspan="3">รวมเงิน</th>
																		<th class="text-right"
																				width="100">
																				{{ number_format($order->amount, 2) }}
																		</th>
																</tr>
																<tr>
																		<th class="text-right"
																				colspan="3">ค่าจัดส่ง</th>
																		<th class="text-right">
																				{{ number_format($order->shipping_cost, 2) }}
																		</th>
																</tr>
																<tr>
																		<th class="text-right"
																				colspan="3">รวมยอดที่ต้องชำระ</th>
																		<th class="text-right">
																				{{ number_format($order->amount + $order->shipping_cost, 2) }}
																		</th>
																</tr>
														</tfoot>
												</table>
										</div>
								</div>
								<div class="tile-footer text-end">
										<a class="btn btn-outline-primary"
												href="#"
												target="_blank">
												<i class="fas fa-print fa-fw"></i>
												ใบเสร็จรับเงิน
										</a>
								</div>
						</div>
				</div>
		</div>
@endsection
@section('script-content')
@endsection
