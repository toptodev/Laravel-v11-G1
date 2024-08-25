<!-- Navbar-->
<header class="app-header">
		<a class="app-header__logo">
				<span class="text-lowercase"></span>
				ร้านประจำ
		</a>
		<a aria-label="Hide Sidebar"
				class="app-sidebar__toggle"
				data-toggle="sidebar"
				href="#"></a>
		<ul class="app-nav">
				<li class="app-search">
						@if ($controller == 'StudentController')
								<form action="{{ route('admin.student.index') }}"
										method="GET">
										<label class="text-white">ค้นหา</label>
										<input class="app-search__input"
												name="search"
												placeholder="ระบุรหัส/ชื่อ น.ศ."
												type="text"
												value="{{ request()->input('search') }}">
										<button class="app-search__button"
												type="submit"><i class="fa fa-search"></i></button>
								</form>
						@endif
				</li>
				<li>
						<a class="app-nav__item"
								data-placement="left"
								data-toggle="tooltip"
								href="{{ url('/') }}"
								target="_blank"
								title="ดูหน้าเว็บไซต์"><i class="fa fa-globe fa-lg"></i></a>
				</li>
				<!--Notification Menu-->
				<li class="dropdown">
						<a aria-label="Show notifications"
								class="app-nav__item"
								data-toggle="dropdown"
								href="#"><i class="fas fa-bell fa-lg"></i></a>
						<ul class="app-notification dropdown-menu dropdown-menu-right">
								<li class="app-notification__title">You have 4 new notifications.</li>
								<div class="app-notification__content">
										<li>
												<a class="app-notification__item"
														href="javascript:;">
														<span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-primary"></i><i class="fa fa-envelope fa-stack-1x fa-inverse"></i></span></span>
														<div>
																<p class="app-notification__message">Lisa sent you a mail</p>
																<p class="app-notification__meta">2 min ago</p>
														</div>
												</a>
										</li>
										<li>
												<a class="app-notification__item"
														href="javascript:;">
														<span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-danger"></i><i class="fa fa-hdd-o fa-stack-1x fa-inverse"></i></span></span>
														<div>
																<p class="app-notification__message">Mail server not working</p>
																<p class="app-notification__meta">5 min ago</p>
														</div>
												</a>
										</li>
										<li>
												<a class="app-notification__item"
														href="javascript:;">
														<span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-success"></i><i class="fa fa-money fa-stack-1x fa-inverse"></i></span></span>
														<div>
																<p class="app-notification__message">Transaction complete</p>
																<p class="app-notification__meta">2 days ago</p>
														</div>
												</a>
										</li>
										<div class="app-notification__content">
												<li>
														<a class="app-notification__item"
																href="javascript:;">
																<span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-primary"></i><i class="fa fa-envelope fa-stack-1x fa-inverse"></i></span></span>
																<div>
																		<p class="app-notification__message">Lisa sent you a mail</p>
																		<p class="app-notification__meta">2 min ago</p>
																</div>
														</a>
												</li>
												<li>
														<a class="app-notification__item"
																href="javascript:;">
																<span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-danger"></i><i class="fa fa-hdd-o fa-stack-1x fa-inverse"></i></span></span>
																<div>
																		<p class="app-notification__message">Mail server not working</p>
																		<p class="app-notification__meta">5 min ago</p>
																</div>
														</a>
												</li>
												<li>
														<a class="app-notification__item"
																href="javascript:;">
																<span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-success"></i><i class="fa fa-money fa-stack-1x fa-inverse"></i></span></span>
																<div>
																		<p class="app-notification__message">Transaction complete</p>
																		<p class="app-notification__meta">2 days ago</p>
																</div>
														</a>
												</li>
										</div>
								</div>
								<li class="app-notification__footer"><a href="#">See all notifications.</a></li>
						</ul>
				</li>
				<!-- User Menu-->
				<li class="dropdown">
						<a aria-label="Open Profile Menu"
								class="app-nav__item"
								data-toggle="dropdown"
								href="#"><i class="fa fa-user fa-lg"></i></a>
						<ul class="dropdown-menu settings-menu dropdown-menu-right">
								<li><a class="dropdown-item"
												href="#"><i class="fas fa-pen-square"></i> เปลี่ยนรหัสผ่าน</a></li>
								<li><a class="dropdown-item"
												href="#"><i class="fas fa-user-circle"></i> โปรไฟล์</a></li>
								<li>
										<a class="dropdown-item"
												href="{{ route('admin.logout') }}"
												onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fas fa-sign-out-alt fa-lg"></i> ออกจากระบบ</a>
										<form action="{{ route('admin.logout') }}"
												id="logout-form"
												method="POST"
												style="display: none;">
												@csrf
										</form>
								</li>
						</ul>
				</li>
		</ul>
</header>
@include('layouts.admin.aside')
