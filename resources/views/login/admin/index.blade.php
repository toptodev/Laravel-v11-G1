<!DOCTYPE html>
<html>

<head>
		<meta charset="utf-8">
		<title>Ranprajum</title>
		<meta content="IE=edge"
				http-equiv="X-UA-Compatible">
		<meta content="width=device-width, initial-scale=1"
				name="viewport">
		<!-- Main CSS-->
		<link href="{{ asset('assets/common/vali-theme/css/main.min.css') }}"
				rel="stylesheet"
				type="text/css">
		<!-- Font-icon css-->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css"
				rel="stylesheet"
				type="text/css">
		<link href="{{ asset('assets/plugins/node_modules/@fortawesome/fontawesome-free/css/all.min.css') }}"
				rel="stylesheet"
				type="text/css">
		<link href="{{ asset('assets/plugins/node_modules/bootstrap-icons/font/bootstrap-icons.css') }}"
				rel="stylesheet"
				type="text/css">
		<link href="{{ asset('assets/common/css/backoffice.style.css') }}"
				rel="stylesheet"
				type="text/css">
</head>


<body class="app sidebar-mini">

		<section class="material-half-bg">
				<div class="cover"></div>
		</section>

		<section class="login-content">
				<div class="logo">
						<h1>ร้านประจำ</h1>
				</div>
				<div class="login-box">
						<form action="{{ route('admin.login') }}"
								class="login-form"
								method="POST">
								@csrf
								<h3 class="login-head"><i class="bi bi-person me-2"></i>เข้าสู่ระบบ</h3>
								<div class="mb-3">
										<label class="form-label">ชื่อผู้ใช้งาน</label>
										<input autofocus
												class="form-control @error('username') is-invalid @enderror"
												name="username"
												placeholder="ระบุชื่อผู้ใช้งาน"
												required
												type="text"
												value="{{ old('username') ?? 'admin' }}">
								</div>
								<div class="mb-3">
										<label class="form-label">รหัสผ่าน</label>
										<input class="form-control @error('password') is-invalid @enderror"
												name="password"
												placeholder="ระบุรหัสผ่าน"
												type="password"
												value="password">
								</div>
								<div class="mb-3">
										<div class="utility">
												<div class="form-check">
														<label class="form-check-label">
																<input {{ old('remember') ? 'checked' : '' }}
																		class="form-check-input"
																		id="remember"
																		name="remember"
																		type="checkbox"><span class="label-text">จำฉันในระบบ</span>
														</label>
												</div>
										</div>
								</div>
								<div class="btn-container d-grid mb-3">
										<button class="btn btn-primary btn-block">
												<i class="bi bi-box-arrow-in-right fs-5 me-2"></i>เข้าสู่ระบบ
										</button>
								</div>
						</form>
				</div>
		</section>
</body>

</html>
