<!DOCTYPE html>
<html>

<head>
		<meta charset="utf-8">
		<meta content="IE=edge"
				http-equiv="X-UA-Compatible">
		<meta content="width=device-width, initial-scale=1"
				name="viewport">
		<!-- Main CSS-->
		<link href="{{ asset('assets/common/vali-admin/css/main.min.css') }}"
				rel="stylesheet"
				type="text/css">
		<!-- Font-icon css-->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css"
				rel="stylesheet"
				type="text/css">
		<title>Login - Vali Admin</title>
</head>

<body>
		<section class="material-half-bg">
				<div class="cover"></div>
		</section>
		<section class="login-content">
				<div class="logo">
						<h1>Vali</h1>
				</div>
				<div class="login-box">
						<form action="index.html"
								class="login-form">
								<h3 class="login-head"><i class="bi bi-person me-2"></i>SIGN IN</h3>
								<div class="mb-3">
										<label class="form-label">USERNAME</label>
										<input autofocus
												class="form-control"
												placeholder="Email"
												type="text">
								</div>
								<div class="mb-3">
										<label class="form-label">PASSWORD</label>
										<input class="form-control"
												placeholder="Password"
												type="password">
								</div>
								<div class="mb-3">
										<div class="utility">
												<div class="form-check">
														<label class="form-check-label">
																<input class="form-check-input"
																		type="checkbox"><span class="label-text">Stay Signed in</span>
														</label>
												</div>
												<p class="semibold-text mb-2"><a data-toggle="flip"
																href="#">Forgot Password ?</a></p>
										</div>
								</div>
								<div class="btn-container d-grid mb-3">
										<button class="btn btn-primary btn-block"><i class="bi bi-box-arrow-in-right fs-5 me-2"></i>SIGN IN</button>
								</div>
						</form>
						<form action="index.html"
								class="forget-form">
								<h3 class="login-head"><i class="bi bi-person-lock me-2"></i>Forgot Password ?</h3>
								<div class="mb-3">
										<label class="form-label">EMAIL</label>
										<input class="form-control"
												placeholder="Email"
												type="text">
								</div>
								<div class="btn-container d-grid mb-3">
										<button class="btn btn-primary btn-block"><i class="bi bi-unlock fs-5 me-2"></i>RESET</button>
								</div>
								<div class="mb-3 mt-3">
										<p class="semibold-text mb-0"><a data-toggle="flip"
														href="#"><i class="bi bi-chevron-left me-1"></i> Back to Login</a></p>
								</div>
						</form>
				</div>
		</section>
		<!-- Essential javascripts for application to work-->
		<script src="{{ asset('assets/common/vali-admin/js/jquery-3.7.0.min.js') }}"></script>
		<script src="{{ asset('assets/common/vali-admin/js/bootstrap.min.js') }}"></script>
		<script src="{{ asset('assets/common/vali-admin/js/main.js') }}"></script>
		<script type="text/javascript">
				// Login Page Flipbox control
				$('.login-content [data-toggle="flip"]').click(function() {
						$('.login-box').toggleClass('flipped');
						return false;
				});
		</script>
</body>

</html>
