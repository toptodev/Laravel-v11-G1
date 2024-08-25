@extends('layouts.master')

@section('app-content')
		<section>
				<div class="container">
						<div class="row justify-content-center">
								<div class="col-md-12 text-center">
										<div class="py-5">
												<h4>ทางเราได้รับออเดอร์ของคุณแล้ว</h4>
												<div class="text-success py-3">
														<i class="fa-regular fa-circle-check fa-8x"></i>
												</div>
												<h1>ขอบคุณที่สั่งซื้อสินค้ากับเรา</h1>
												รายละเอียดการสั่งซื้อสินค้าจะถูกส่งไปให้ในอีเมลของคุณ <br />
												เลขที่ใบออเดอร์ของคุณคือ 3233
										</div>

										<a class="btn btn-outline-primary"
												href="{{ url('/') }}">กลับสู่หน้าแรก</a>
										<a class="btn btn-primary"
												href="{{ route('products.index') }}">ช็อปปิงต่อ</a>
								</div>
						</div>
				</div>
		</section>
@endsection
