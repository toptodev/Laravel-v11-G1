@extends('layouts.admin.master')

@section('app-content')
		<div class="tile">
				<div class="tile-title-w-btn">
						<h3 class="title">ข้อมูลรายการ</h3>
						<p>
								<a class="btn btn-secondary icon-btn"
										href="{{ url()->current() }}"><i class="fas fa-sync fa-fw"></i>Refresh </a>
						</p>
				</div>
				<div class="tile-body">
						<div class="table-responsive">
								<table class="table-hover table-sm table">
										<thead>
												<tr>
														<th class="text-nowrap text-center">#</th>
														<th class="text-nowrap text-center">เลขที่สั่งซื้อ</th>
														<th class="text-nowrap text-center"
																scope="col">ชื่อ-สกุล</th>
														<th class="text-nowrap text-center"
																scope="col">เบอร์โทรศัพท์</th>
														<th class="text-nowrap text-center"
																scope="col">รูปแบบการชำระเงิน</th>
														<th class="text-nowrap text-center"
																scope="col">จำนวนเงิน</th>
														<th class="text-nowrap text-center"
																scope="col">แจ้งชำระเงิน</th>
														<th class="text-nowrap text-center"
																scope="col">สถานะ</th>
														<th class="text-nowrap text-center"
																scope="col">สร้างเมื่อ</th>
														<th class="text-nowrap text-center"
																scope="col">จัดการ</th>
												</tr>
										</thead>
										<tbody>
												@foreach ($orders as $index => $value)
														<tr>
																<td width="1">{{ $orders->firstItem() + $index }}</td>
																<td class="text-nowrap text-capitalize"
																		width="100">{{ $value->code }}</td>
																<td class="text-nowrap">{{ $value->name }}</td>
																<td>{{ $value->tel }}</td>
																<td class="text-nowrap"
																		width="100">{!! $value->payment_type !!}</td>
																<td class="text-nowrap text-end"
																		width="150">{{ number_format($value->amount, 2) }}</td>
																<td class="text-nowrap text-center"
																		width="100">
																		@if ($value->notify != '')
																				<a href="#"
																						onclick="popupwindow('{{ route('admin.orders.notif-payment', [$value->id]) }}', 'Payment Notification', 430, 500)">
																						ไฟล์แนบ
																				</a>
																		@endif
																</td>
																<td class="text-nowrap text-center"
																		width="100">
																		@if ($value->cancel)
																				@if ($value->status == 1)
																						<span class="badge bg-light px-2">รอดำเนินการ</span>
																				@elseif($value->status == 2)
																						<span class="badge bg-light px-3">เรียบร้อย</span>
																				@endif
																		@else
																				@if ($value->status == 1)
																						<a href="{{ route('admin.orders.status', [$value->id, 2]) }}">
																								<span class="badge bg-warning px-2">รอดำเนินการ</span>
																						</a>
																				@elseif($value->status == 2)
																						<a href="{{ route('admin.orders.status', [$value->id, 1]) }}">
																								<span class="badge bg-success px-3">เรียบร้อย</span>
																						</a>
																				@endif
																		@endif
																</td>
																<td class="text-nowrap"
																		width="100">
																		{{ $value->created_at }}
																</td>
																<td width="1">
																		<div class="option-link">
																				<form action="{{ route('admin.orders.destroy', [$value->id]) }}"
																						method="POST">
																						@csrf
																						{{ method_field('DELETE') }}
																						<a class="btn btn-sm btn-info"
																								href="{{ route('admin.orders.show', [$value->id]) }}">
																								ดูรายละเอียด
																						</a>
																						@if ($value->cancel)
																								<button class="btn btn-sm btn-danger disabled"
																										type="button">
																										ยกเลิก
																								</button>
																						@else
																								<button class="btn btn-sm btn-danger"
																										onclick="return confirm('ท่านต้องการลบรายการนี้ใช่หรือไม่ ?')"
																										type="submit">
																										ยกเลิก
																								</button>
																						@endif
																				</form>
																		</div>
																</td>
														</tr>
												@endforeach
										</tbody>
								</table>
						</div>
				</div>
				<div class="tile-footer">
						{{ $orders->render() }}
				</div>
		</div>
@endsection
@section('script-content')
		<script type="text/javascript">
				$(function() {
						var vals = [];

						$('#checked-all').click(function() {
								$('.checked').not(this).prop('checked', this.checked);
								$('.checked').each(function() {
										var v = $(this).val();
										if ($(this).is(':checked')) {
												vals.push(v);
										} else {
												vals = $.grep(vals, function(value) {
														return value != v;
												});
										}
								});

								if (vals.length > 0) {
										var uri = `url?id=${vals.join()}`;
										$('.btn-card-print').attr('href', `${uri}`);
								}
						});

						$('.checked').click(function() {
								var v = $(this).val();
								if ($(this).is(':checked')) {
										vals.push(v);
								} else {
										vals = $.grep(vals, function(value) {
												return value != v;
										});
								}

								if (vals.length > 0) {
										var uri = `url?id=${vals.join()}`;
										$('.btn-card-print').attr('href', `${uri}`);
								}
						});
				});
		</script>
@endsection
