@extends('layouts.admin.master')

@section('app-content')
		<div class="row justify-content-center">
				<div class="col-6">
						<div class="tile">
								<h3 class="tile-title">แก้ไขรายการ</h3>
								<div class="tile-body">
										<table class="table table-striped">
												<tr>
														<td width="200">รหัสสินค้า</td>
														<td>{{ $product->code }}</td>
												</tr>
												<tr>
														<td>ชื่อสินค้า</td>
														<td>{{ $product->title }}</td>
												</tr>
												<tr>
														<td>หน้าปก</td>
														<td>

														</td>
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
														<td>ประเภท</td>
														<td></td>
												</tr>
												<tr>
														<td>ลิงค์เชื่อมโยง</td>
														<td>{{ $product->url }}</td>
												</tr>
												<tr>
														<td>การแสดง</td>
														<td></td>
												</tr>
												<tr>
														<td>รายละเอียด</td>
														<td>{{ $product->detail }}</td>
												</tr>
												<tr>
														<td>รูปภาพประกอบเพิ่มเติม</td>
														<td></td>
												</tr>
										</table>
								</div>
						</div>
				</div>
		</div>
@endsection
@section('script-content')
@endsection
