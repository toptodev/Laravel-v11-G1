<!doctype html>
<html data-bs-theme="auto"
		lang="en">

<head>
		<script src="{{ asset('assets/common/js/color-modes.js') }}"></script>

		<meta charset="utf-8">
		<meta content="width=device-width, initial-scale=1"
				name="viewport">
		<meta content=""
				name="description">
		<meta content="Mark Otto, Jacob Thornton, and Bootstrap contributors"
				name="author">
		<meta content="Hugo 0.122.0"
				name="generator">
		<title>Product example · Bootstrap v5.3</title>

		<link href="https://getbootstrap.com/docs/5.3/examples/product/"
				rel="canonical">

		<link href="https://cdn.jsdelivr.net/npm/@docsearch/css@3"
				rel="stylesheet">

		<link href="{{ asset('assets/plugins/bootstrap/css/bootstrap.min.css') }}"
				rel="stylesheet">
		<link href="{{ asset('assets/plugins/bootstrap-icons/font/bootstrap-icons.min.css') }}"
				rel="stylesheet">

		<style>
				.bd-placeholder-img {
						font-size: 1.125rem;
						text-anchor: middle;
						-webkit-user-select: none;
						-moz-user-select: none;
						user-select: none;
				}

				@media (min-width: 768px) {
						.bd-placeholder-img-lg {
								font-size: 3.5rem;
						}
				}

				.b-example-divider {
						width: 100%;
						height: 3rem;
						background-color: rgba(0, 0, 0, .1);
						border: solid rgba(0, 0, 0, .15);
						border-width: 1px 0;
						box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
				}

				.b-example-vr {
						flex-shrink: 0;
						width: 1.5rem;
						height: 100vh;
				}

				.bi {
						vertical-align: -.125em;
						fill: currentColor;
				}

				.nav-scroller {
						position: relative;
						z-index: 2;
						height: 2.75rem;
						overflow-y: hidden;
				}

				.nav-scroller .nav {
						display: flex;
						flex-wrap: nowrap;
						padding-bottom: 1rem;
						margin-top: -1px;
						overflow-x: auto;
						text-align: center;
						white-space: nowrap;
						-webkit-overflow-scrolling: touch;
				}

				.btn-bd-primary {
						--bd-violet-bg: #712cf9;
						--bd-violet-rgb: 112.520718, 44.062154, 249.437846;

						--bs-btn-font-weight: 600;
						--bs-btn-color: var(--bs-white);
						--bs-btn-bg: var(--bd-violet-bg);
						--bs-btn-border-color: var(--bd-violet-bg);
						--bs-btn-hover-color: var(--bs-white);
						--bs-btn-hover-bg: #6528e0;
						--bs-btn-hover-border-color: #6528e0;
						--bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
						--bs-btn-active-color: var(--bs-btn-hover-color);
						--bs-btn-active-bg: #5a23c8;
						--bs-btn-active-border-color: #5a23c8;
				}

				.bd-mode-toggle {
						z-index: 1500;
				}

				.bd-mode-toggle .dropdown-menu .active .bi {
						display: block !important;
				}
		</style>


		<!-- Custom styles for this template -->
		<link href="{{ asset('assets/common/css/product.css') }}"
				rel="stylesheet">
</head>

<body>
		<svg class="d-none"
				xmlns="http://www.w3.org/2000/svg">
				<symbol id="check2"
						viewBox="0 0 16 16">
						<path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z" />
				</symbol>
				<symbol id="circle-half"
						viewBox="0 0 16 16">
						<path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z" />
				</symbol>
				<symbol id="moon-stars-fill"
						viewBox="0 0 16 16">
						<path
								d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z" />
						<path
								d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z" />
				</symbol>
				<symbol id="sun-fill"
						viewBox="0 0 16 16">
						<path
								d="M8 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z" />
				</symbol>
		</svg>

		<div class="dropdown position-fixed bd-mode-toggle bottom-0 end-0 mb-3 me-3">
				<button aria-expanded="false"
						aria-label="Toggle theme (auto)"
						class="btn btn-bd-primary dropdown-toggle d-flex align-items-center py-2"
						data-bs-toggle="dropdown"
						id="bd-theme"
						type="button">
						<svg class="bi theme-icon-active my-1"
								height="1em"
								width="1em">
								<use href="#circle-half"></use>
						</svg>
						<span class="visually-hidden"
								id="bd-theme-text">Toggle theme</span>
				</button>
				<ul aria-labelledby="bd-theme-text"
						class="dropdown-menu dropdown-menu-end shadow">
						<li>
								<button aria-pressed="false"
										class="dropdown-item d-flex align-items-center"
										data-bs-theme-value="light"
										type="button">
										<svg class="bi me-2 opacity-50"
												height="1em"
												width="1em">
												<use href="#sun-fill"></use>
										</svg>
										Light
										<svg class="bi d-none ms-auto"
												height="1em"
												width="1em">
												<use href="#check2"></use>
										</svg>
								</button>
						</li>
						<li>
								<button aria-pressed="false"
										class="dropdown-item d-flex align-items-center"
										data-bs-theme-value="dark"
										type="button">
										<svg class="bi me-2 opacity-50"
												height="1em"
												width="1em">
												<use href="#moon-stars-fill"></use>
										</svg>
										Dark
										<svg class="bi d-none ms-auto"
												height="1em"
												width="1em">
												<use href="#check2"></use>
										</svg>
								</button>
						</li>
						<li>
								<button aria-pressed="true"
										class="dropdown-item d-flex align-items-center active"
										data-bs-theme-value="auto"
										type="button">
										<svg class="bi me-2 opacity-50"
												height="1em"
												width="1em">
												<use href="#circle-half"></use>
										</svg>
										Auto
										<svg class="bi d-none ms-auto"
												height="1em"
												width="1em">
												<use href="#check2"></use>
										</svg>
								</button>
						</li>
				</ul>
		</div>


		<svg class="d-none"
				xmlns="http://www.w3.org/2000/svg">
				<symbol fill="none"
						id="aperture"
						stroke-linecap="round"
						stroke-linejoin="round"
						stroke-width="2"
						stroke="currentColor"
						viewBox="0 0 24 24">
						<circle cx="12"
								cy="12"
								r="10" />
						<path d="M14.31 8l5.74 9.94M9.69 8h11.48M7.38 12l5.74-9.94M9.69 16L3.95 6.06M14.31 16H2.83m13.79-4l-5.74 9.94" />
				</symbol>
				<symbol id="cart"
						viewBox="0 0 16 16">
						<path
								d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
				</symbol>
				<symbol id="chevron-right"
						viewBox="0 0 16 16">
						<path d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"
								fill-rule="evenodd" />
				</symbol>
		</svg>

		<nav class="navbar navbar-expand-md bg-dark sticky-top border-bottom"
				data-bs-theme="dark">
				<div class="container">
						<a class="navbar-brand d-md-none"
								href="#">
								<svg class="bi"
										height="24"
										width="24">
										<use xlink:href="#aperture" />
								</svg>
								Aperture
						</a>
						<button aria-controls="offcanvas"
								aria-label="Toggle navigation"
								class="navbar-toggler"
								data-bs-target="#offcanvas"
								data-bs-toggle="offcanvas"
								type="button">
								<span class="navbar-toggler-icon"></span>
						</button>
						<div aria-labelledby="offcanvasLabel"
								class="offcanvas offcanvas-end"
								id="offcanvas"
								tabindex="-1">
								<div class="offcanvas-header">
										<h5 class="offcanvas-title"
												id="offcanvasLabel">Aperture</h5>
										<button aria-label="Close"
												class="btn-close"
												data-bs-dismiss="offcanvas"
												type="button"></button>
								</div>
								<div class="offcanvas-body">
										<ul class="navbar-nav flex-grow-1 justify-content-between">
												<li class="nav-item"><a class="nav-link"
																href="#">
																<svg class="bi"
																		height="24"
																		width="24">
																		<use xlink:href="#aperture" />
																</svg>
														</a></li>
												<li class="nav-item"><a class="nav-link"
																href="#">Tour</a></li>
												<li class="nav-item"><a class="nav-link"
																href="#">Product</a></li>
												<li class="nav-item"><a class="nav-link"
																href="#">Features</a></li>
												<li class="nav-item"><a class="nav-link"
																href="#">Enterprise</a></li>
												<li class="nav-item"><a class="nav-link"
																href="#">Support</a></li>
												<li class="nav-item"><a class="nav-link"
																href="#">Pricing</a></li>
												<li class="nav-item"><a class="nav-link"
																href="#">
																<svg class="bi"
																		height="24"
																		width="24">
																		<use xlink:href="#cart" />
																</svg>
														</a></li>
										</ul>
								</div>
						</div>
				</div>
		</nav>

		<main>
				<div class="position-relative p-md-5 m-md-3 bg-body-tertiary overflow-hidden p-3 text-center">
						<div class="col-md-6 p-lg-5 mx-auto my-5">
								<h1 class="display-3 fw-bold">Designed for engineers</h1>
								<h3 class="fw-normal text-muted mb-3">Build anything you want with Aperture</h3>
								<div class="d-flex justify-content-center lead fw-normal gap-3">
										<a class="icon-link"
												href="#">
												Learn more
												<svg class="bi">
														<use xlink:href="#chevron-right" />
												</svg>
										</a>
										<a class="icon-link"
												href="#">
												Buy
												<svg class="bi">
														<use xlink:href="#chevron-right" />
												</svg>
										</a>
								</div>
						</div>
						<div class="product-device d-none d-md-block shadow-sm"></div>
						<div class="product-device product-device-2 d-none d-md-block shadow-sm"></div>
				</div>

				<div class="d-md-flex flex-md-equal w-100 my-md-3 ps-md-3">
						<div class="text-bg-dark me-md-3 pt-md-5 px-md-5 overflow-hidden px-3 pt-3 text-center">
								<div class="my-3 py-3">
										<h2 class="display-5">Another headline</h2>
										<p class="lead">And an even wittier subheading.</p>
								</div>
								<div class="bg-body-tertiary mx-auto shadow-sm"
										style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div>
						</div>
						<div class="bg-body-tertiary me-md-3 pt-md-5 px-md-5 overflow-hidden px-3 pt-3 text-center">
								<div class="my-3 p-3">
										<h2 class="display-5">Another headline</h2>
										<p class="lead">And an even wittier subheading.</p>
								</div>
								<div class="bg-dark mx-auto shadow-sm"
										style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div>
						</div>
				</div>

				<div class="d-md-flex flex-md-equal w-100 my-md-3 ps-md-3">
						<div class="bg-body-tertiary me-md-3 pt-md-5 px-md-5 overflow-hidden px-3 pt-3 text-center">
								<div class="my-3 p-3">
										<h2 class="display-5">Another headline</h2>
										<p class="lead">And an even wittier subheading.</p>
								</div>
								<div class="bg-dark mx-auto shadow-sm"
										style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div>
						</div>
						<div class="text-bg-primary me-md-3 pt-md-5 px-md-5 overflow-hidden px-3 pt-3 text-center">
								<div class="my-3 py-3">
										<h2 class="display-5">Another headline</h2>
										<p class="lead">And an even wittier subheading.</p>
								</div>
								<div class="bg-body-tertiary mx-auto shadow-sm"
										style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div>
						</div>
				</div>

				<div class="d-md-flex flex-md-equal w-100 my-md-3 ps-md-3">
						<div class="bg-body-tertiary me-md-3 pt-md-5 px-md-5 overflow-hidden px-3 pt-3 text-center">
								<div class="my-3 p-3">
										<h2 class="display-5">Another headline</h2>
										<p class="lead">And an even wittier subheading.</p>
								</div>
								<div class="bg-body mx-auto shadow-sm"
										style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div>
						</div>
						<div class="bg-body-tertiary me-md-3 pt-md-5 px-md-5 overflow-hidden px-3 pt-3 text-center">
								<div class="my-3 py-3">
										<h2 class="display-5">Another headline</h2>
										<p class="lead">And an even wittier subheading.</p>
								</div>
								<div class="bg-body mx-auto shadow-sm"
										style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div>
						</div>
				</div>

				<div class="d-md-flex flex-md-equal w-100 my-md-3 ps-md-3">
						<div class="bg-body-tertiary me-md-3 pt-md-5 px-md-5 overflow-hidden px-3 pt-3 text-center">
								<div class="my-3 p-3">
										<h2 class="display-5">Another headline</h2>
										<p class="lead">And an even wittier subheading.</p>
								</div>
								<div class="bg-body mx-auto shadow-sm"
										style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div>
						</div>
						<div class="bg-body-tertiary me-md-3 pt-md-5 px-md-5 overflow-hidden px-3 pt-3 text-center">
								<div class="my-3 py-3">
										<h2 class="display-5">Another headline</h2>
										<p class="lead">And an even wittier subheading.</p>
								</div>
								<div class="bg-body mx-auto shadow-sm"
										style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div>
						</div>
				</div>
		</main>

		<footer class="container py-5">
				<div class="row">
						<div class="col-12 col-md">
								<svg class="d-block mb-2"
										fill="none"
										height="24"
										role="img"
										stroke-linecap="round"
										stroke-linejoin="round"
										stroke-width="2"
										stroke="currentColor"
										viewBox="0 0 24 24"
										width="24"
										xmlns="http://www.w3.org/2000/svg">
										<title>Product</title>
										<circle cx="12"
												cy="12"
												r="10" />
										<path d="M14.31 8l5.74 9.94M9.69 8h11.48M7.38 12l5.74-9.94M9.69 16L3.95 6.06M14.31 16H2.83m13.79-4l-5.74 9.94" />
								</svg>
								<small class="d-block text-body-secondary mb-3">&copy; 2017–2024</small>
						</div>
						<div class="col-6 col-md">
								<h5>Features</h5>
								<ul class="list-unstyled text-small">
										<li><a class="link-secondary text-decoration-none"
														href="#">Cool stuff</a></li>
										<li><a class="link-secondary text-decoration-none"
														href="#">Random feature</a></li>
										<li><a class="link-secondary text-decoration-none"
														href="#">Team feature</a></li>
										<li><a class="link-secondary text-decoration-none"
														href="#">Stuff for developers</a></li>
										<li><a class="link-secondary text-decoration-none"
														href="#">Another one</a></li>
										<li><a class="link-secondary text-decoration-none"
														href="#">Last time</a></li>
								</ul>
						</div>
						<div class="col-6 col-md">
								<h5>Resources</h5>
								<ul class="list-unstyled text-small">
										<li><a class="link-secondary text-decoration-none"
														href="#">Resource name</a></li>
										<li><a class="link-secondary text-decoration-none"
														href="#">Resource</a></li>
										<li><a class="link-secondary text-decoration-none"
														href="#">Another resource</a></li>
										<li><a class="link-secondary text-decoration-none"
														href="#">Final resource</a></li>
								</ul>
						</div>
						<div class="col-6 col-md">
								<h5>Resources</h5>
								<ul class="list-unstyled text-small">
										<li><a class="link-secondary text-decoration-none"
														href="#">Business</a></li>
										<li><a class="link-secondary text-decoration-none"
														href="#">Education</a></li>
										<li><a class="link-secondary text-decoration-none"
														href="#">Government</a></li>
										<li><a class="link-secondary text-decoration-none"
														href="#">Gaming</a></li>
								</ul>
						</div>
						<div class="col-6 col-md">
								<h5>About</h5>
								<ul class="list-unstyled text-small">
										<li><a class="link-secondary text-decoration-none"
														href="#">Team</a></li>
										<li><a class="link-secondary text-decoration-none"
														href="#">Locations</a></li>
										<li><a class="link-secondary text-decoration-none"
														href="#">Privacy</a></li>
										<li><a class="link-secondary text-decoration-none"
														href="#">Terms</a></li>
								</ul>
						</div>
				</div>
		</footer>
		<script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

</body>

</html>
