<!DOCTYPE html>
<html lang="en">

<head>
		<meta content="Vali is a responsive and free admin theme built with Bootstrap 5, SASS and PUG.js. It's fully customizable and modular."
				name="description">
		<!-- Twitter meta-->
		<meta content="summary_large_image"
				property="twitter:card">
		<meta content="@pratikborsadiya"
				property="twitter:site">
		<meta content="@pratikborsadiya"
				property="twitter:creator">
		<!-- Open Graph Meta-->
		<meta content="website"
				property="og:type">
		<meta content="Vali Admin"
				property="og:site_name">
		<meta content="Vali - Free Bootstrap 5 admin theme"
				property="og:title">
		<meta content="http://pratikborsadiya.in/blog/vali-admin"
				property="og:url">
		<meta content="http://pratikborsadiya.in/blog/vali-admin/hero-social.png"
				property="og:image">
		<meta content="Vali is a responsive and free admin theme built with Bootstrap 5, SASS and PUG.js. It's fully customizable and modular."
				property="og:description">
		<title>Blank Page - Vali Admin</title>
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
</head>

<body class="app sidebar-mini">
		<!-- Navbar-->
		<header class="app-header"><a class="app-header__logo"
						href="index.html">Vali</a>
				<!-- Sidebar toggle button--><a aria-label="Hide Sidebar"
						class="app-sidebar__toggle"
						data-toggle="sidebar"
						href="#"></a>
				<!-- Navbar Right Menu-->
				<ul class="app-nav">
						<li class="app-search">
								<input class="app-search__input"
										placeholder="Search"
										type="search">
								<button class="app-search__button"><i class="bi bi-search"></i></button>
						</li>
						<!--Notification Menu-->
						<li class="dropdown"><a aria-label="Show notifications"
										class="app-nav__item"
										data-bs-toggle="dropdown"
										href="#"><i class="bi bi-bell fs-5"></i></a>
								<ul class="app-notification dropdown-menu dropdown-menu-right">
										<li class="app-notification__title">You have 4 new notifications.</li>
										<div class="app-notification__content">
												<li><a class="app-notification__item"
																href="javascript:;"><span class="app-notification__icon"><i class="bi bi-envelope fs-4 text-primary"></i></span>
																<div>
																		<p class="app-notification__message">Lisa sent you a mail</p>
																		<p class="app-notification__meta">2 min ago</p>
																</div>
														</a></li>
												<li><a class="app-notification__item"
																href="javascript:;"><span class="app-notification__icon"><i class="bi bi-exclamation-triangle fs-4 text-warning"></i></span>
																<div>
																		<p class="app-notification__message">Mail server not working</p>
																		<p class="app-notification__meta">5 min ago</p>
																</div>
														</a></li>
												<li><a class="app-notification__item"
																href="javascript:;"><span class="app-notification__icon"><i class="bi bi-cash fs-4 text-success"></i></span>
																<div>
																		<p class="app-notification__message">Transaction complete</p>
																		<p class="app-notification__meta">2 days ago</p>
																</div>
														</a></li>
												<li><a class="app-notification__item"
																href="javascript:;"><span class="app-notification__icon"><i class="bi bi-envelope fs-4 text-primary"></i></span>
																<div>
																		<p class="app-notification__message">Lisa sent you a mail</p>
																		<p class="app-notification__meta">2 min ago</p>
																</div>
														</a></li>
												<li><a class="app-notification__item"
																href="javascript:;"><span class="app-notification__icon"><i class="bi bi-exclamation-triangle fs-4 text-warning"></i></span>
																<div>
																		<p class="app-notification__message">Mail server not working</p>
																		<p class="app-notification__meta">5 min ago</p>
																</div>
														</a></li>
												<li><a class="app-notification__item"
																href="javascript:;"><span class="app-notification__icon"><i class="bi bi-cash fs-4 text-success"></i></span>
																<div>
																		<p class="app-notification__message">Transaction complete</p>
																		<p class="app-notification__meta">2 days ago</p>
																</div>
														</a></li>
										</div>
										<li class="app-notification__footer"><a href="#">See all notifications.</a></li>
								</ul>
						</li>
						<!-- User Menu-->
						<li class="dropdown"><a aria-label="Open Profile Menu"
										class="app-nav__item"
										data-bs-toggle="dropdown"
										href="#"><i class="bi bi-person fs-4"></i></a>
								<ul class="dropdown-menu settings-menu dropdown-menu-right">
										<li><a class="dropdown-item"
														href="page-user.html"><i class="bi bi-gear fs-5 me-2"></i> Settings</a></li>
										<li><a class="dropdown-item"
														href="page-user.html"><i class="bi bi-person fs-5 me-2"></i> Profile</a></li>
										<li><a class="dropdown-item"
														href="page-login.html"><i class="bi bi-box-arrow-right fs-5 me-2"></i> Logout</a></li>
								</ul>
						</li>
				</ul>
		</header>
		<!-- Sidebar menu-->
		<div class="app-sidebar__overlay"
				data-toggle="sidebar"></div>
		<aside class="app-sidebar">
				<div class="app-sidebar__user"><img alt="User Image"
								class="app-sidebar__user-avatar"
								src="https://randomuser.me/api/portraits/men/1.jpg">
						<div>
								<p class="app-sidebar__user-name">John Doe</p>
								<p class="app-sidebar__user-designation">Frontend Developer</p>
						</div>
				</div>
				<ul class="app-menu">
						<li><a class="app-menu__item"
										href="dashboard.html"><i class="app-menu__icon bi bi-speedometer"></i><span class="app-menu__label">Dashboard</span></a></li>
						<li class="treeview"><a class="app-menu__item"
										data-toggle="treeview"
										href="#"><i class="app-menu__icon bi bi-laptop"></i><span class="app-menu__label">UI Elements</span><i class="treeview-indicator bi bi-chevron-right"></i></a>
								<ul class="treeview-menu">
										<li><a class="treeview-item"
														href="bootstrap-components.html"><i class="icon bi bi-circle-fill"></i> Bootstrap Elements</a></li>
										<li><a class="treeview-item"
														href="https://icons.getbootstrap.com/"
														rel="noopener"
														target="_blank"><i class="icon bi bi-circle-fill"></i> Font Icons</a></li>
										<li><a class="treeview-item"
														href="ui-cards.html"><i class="icon bi bi-circle-fill"></i> Cards</a></li>
										<li><a class="treeview-item"
														href="widgets.html"><i class="icon bi bi-circle-fill"></i> Widgets</a></li>
								</ul>
						</li>
						<li class="treeview"><a class="app-menu__item"
										data-toggle="treeview"
										href="#"><i class="app-menu__icon bi bi-ui-checks"></i><span class="app-menu__label">Forms</span><i class="treeview-indicator bi bi-chevron-right"></i></a>
								<ul class="treeview-menu">
										<li><a class="treeview-item"
														href="form-components.html"><i class="icon bi bi-circle-fill"></i> Form Components</a></li>
										<li><a class="treeview-item"
														href="form-samples.html"><i class="icon bi bi-circle-fill"></i> Form Samples</a></li>
								</ul>
						</li>
						<li class="treeview"><a class="app-menu__item"
										data-toggle="treeview"
										href="#"><i class="app-menu__icon bi bi-table"></i><span class="app-menu__label">Tables</span><i class="treeview-indicator bi bi-chevron-right"></i></a>
								<ul class="treeview-menu">
										<li><a class="treeview-item"
														href="table-basic.html"><i class="icon bi bi-circle-fill"></i> Basic Tables</a></li>
										<li><a class="treeview-item"
														href="table-data-table.html"><i class="icon bi bi-circle-fill"></i> Data Tables</a></li>
								</ul>
						</li>
						<li class="treeview is-expanded"><a class="app-menu__item"
										data-toggle="treeview"
										href="#"><i class="app-menu__icon bi bi-file-earmark"></i><span class="app-menu__label">Pages</span><i class="treeview-indicator bi bi-chevron-right"></i></a>
								<ul class="treeview-menu">
										<li><a class="treeview-item active"
														href="blank-page.html"><i class="icon bi bi-circle-fill"></i> Blank Page</a></li>
										<li><a class="treeview-item"
														href="page-login.html"><i class="icon bi bi-circle-fill"></i> Login Page</a></li>
										<li><a class="treeview-item"
														href="page-lockscreen.html"><i class="icon bi bi-circle-fill"></i> Lockscreen Page</a></li>
										<li><a class="treeview-item"
														href="page-user.html"><i class="icon bi bi-circle-fill"></i> User Page</a></li>
										<li><a class="treeview-item"
														href="page-invoice.html"><i class="icon bi bi-circle-fill"></i> Invoice Page</a></li>
										<li><a class="treeview-item"
														href="page-mailbox.html"><i class="icon bi bi-circle-fill"></i> Mailbox</a></li>
										<li><a class="treeview-item"
														href="page-error.html"><i class="icon bi bi-circle-fill"></i> Error Page</a></li>
								</ul>
						</li>
						<li><a class="app-menu__item"
										href="docs.html"><i class="app-menu__icon bi bi-code-square"></i><span class="app-menu__label">Docs</span></a></li>
				</ul>
		</aside>
		<main class="app-content">
				<div class="app-title">
						<div>
								<h1><i class="bi bi-speedometer"></i> Blank Page</h1>
								<p>Start a beautiful journey here</p>
						</div>
						<ul class="app-breadcrumb breadcrumb">
								<li class="breadcrumb-item"><i class="bi bi-house-door fs-6"></i></li>
								<li class="breadcrumb-item"><a href="#">Blank Page</a></li>
						</ul>
				</div>
				<div class="row">
						<div class="col-md-12">
								<div class="tile">
										<div class="tile-body">Create a beautiful dashboard</div>
								</div>
						</div>
				</div>
		</main>
		<!-- Essential javascripts for application to work-->
		<script src="{{ asset('assets/common/vali-admin/js/jquery-3.7.0.min.js') }}"></script>
		<script src="{{ asset('assets/common/vali-admin/js/bootstrap.min.js') }}"></script>
		<script src="{{ asset('assets/common/vali-admin/js/main.js') }}"></script>
</body>

</html>
