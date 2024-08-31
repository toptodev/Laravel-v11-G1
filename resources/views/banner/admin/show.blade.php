@extends('layouts.admin.master')

@section('app-content')
		<div class="row justify-content-center">
				<div class="col-8">
						<div class="tile">
								<h3 class="tile-title">ดูรายการ</h3>
								<div class="tile-body">
										<table class="table-striped table">
												<tr>
														<td colspan="2">
																<img class="img-fluid"
																		src="{{ Storage::url('banner/' . gen_folder($banner->id) . '/' . $banner->cover) }}">
														</td>
												</tr>
												<tr>
														<td width="200">ชื่อแบนเนอร์</td>
														<td>{{ $banner->title }}</td>
												</tr>
												<tr>
														<td>รายละเอียด</td>
														<td>{{ $banner->detail }}</td>
												</tr>
										</table>
								</div>
						</div>
				</div>
		</div>
@endsection
@section('script-content')
@endsection
