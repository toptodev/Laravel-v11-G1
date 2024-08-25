@extends('layouts.admin.master')

@section('app-content')
		<div class="tile">
				<div class="tile-title-w-btn">
						<h3 class="title">ข้อมูลรายการ</h3>
						<p>
								<a class="btn btn-primary icon-btn"
										href="{{ route('admin.products.create') }}"><i class="fa fa-plus-circle fa-fw"></i>สร้างรายการ </a>
								<a class="btn btn-secondary icon-btn"
										href="{{ url()->current() }}"><i class="fas fa-sync fa-fw"></i>Refresh </a>
						</p>
				</div>
				<div class="tile-body">
						<div class="table-responsive">
								<table class="table-hover table-sm table">
										<thead>
												<tr>
														<th class="text-nowrap text-center"
																width="1">
																<div class="form-check">
																		<label class="form-check-label">
																				<input class="form-check-input"
																						id="checked-all"
																						type="checkbox">
																		</label>
																</div>
														</th>
														<th class="text-nowrap text-center"
																width="1">ลำดับที่</th>
														<th class="text-nowrap text-center">รหัสสินค้า</th>
														<th class="text-nowrap text-center">ชื่อสินค้า</th>
														<th class="text-nowrap text-center"
																scope="col">สร้างเมื่อ
														</th>
														<th class="text-nowrap text-center"
																scope="col">จัดการ
														</th>
												</tr>
										</thead>
										<tbody>
												{{-- @foreach ($lists as $index => $value)
														<tr>
																<th scope="row"
																		width="1">
																		<div class="form-check">
																				<label class="form-check-label">
																						<input class="form-check-input checked"
																								type="checkbox"
																								value="{{ $value->id }}">
																				</label>
																		</div>
																</th>
																<th scope="row"
																		width="1">{{ $lists->firstItem() + $index }}</th>
																<td class="text-nowrap"
																		width="100">{{ $value->code }}</td>
																<td class="text-nowrap">{{ $value->name }}</td>
																<td class="text-nowrap"
																		width="100">{{ $value->created_at }}</td>
																<td width="1">
																		<div class="option-link">
																				<form action="{{ route('admin.products.destroy', $value->id) }}"
																						method="POST">
																						<a class="btn btn-sm btn-info"
																								href="{{ route('admin.products.edit', [$value->id]) }}"> แก้ไข</a>
																						@csrf
																						{{ method_field('DELETE') }}
																						<button class="btn btn-sm btn-danger"
																								onclick="return confirm('ท่านต้องการลบรายการนี้ใช่หรือไม่ ?')"
																								type="submit">ยกเลิก
																						</button>
																				</form>
																		</div>
																</td>
														</tr>
												@endforeach --}}
										</tbody>
								</table>
						</div>
				</div>
				<div class="tile-footer">
						{{-- {{ $lists->render() }} --}}
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
										var uri = `card/print?id=${vals.join()}`;
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
										var uri = `card/print?id=${vals.join()}`;
										$('.btn-card-print').attr('href', `${uri}`);
								}
						});
				});
		</script>
@endsection
