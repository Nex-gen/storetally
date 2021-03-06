				<aside id="sidebar-left" class="sidebar-left">
					<div class="sidebar-header">
						<div class="sidebar-title">
							Navigation
						</div>
						<div class="sidebar-toggle hidden-xs" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
							<i class="fa fa-bars" aria-label="Toggle sidebar"></i>
						</div>
					</div>
				
					<div class="nano">
						<div class="nano-content">
							<nav id="menu" class="nav-main" role="navigation">
								<ul class="nav nav-main">
									<li class="">
										<a href="index.html">
											<i class="fa fa-dashboard" aria-hidden="true"></i>
											<span>Dashboard</span>
										</a>
									</li>
									{{-- <li>
										<a href="mailbox-folder.html">
											<span class="pull-right label label-primary">182</span>
											<i class="fa fa-envelope" aria-hidden="true"></i>
											<span>Mailbox</span>
										</a>
									</li> --}}
									<li class="nav-parent nav-active">
										<a>
											<i class="fa fa-copy" aria-hidden="true"></i>
											<span>Manage Shop</span>
										</a>
										<ul class="nav nav-children">
											<li>
												<a href="#">
													Shop details
												</a>
											</li>
											<li>
												<a href="{{route('items.index')}}">
													Shop items
												</a>
											</li>
											<li>
												<a href="{{route('categories.index')}}">
													Item categories/brands
												</a>
											</li>
											<li>
												<a href="{{route('suppliers.index')}}">
													Item suppliers
												</a>
											</li>
											<li>
												<a href="#">
													Customers
												</a>
											</li>
										</ul>
									</li>
									<li class="nav-parent">
										<a>
											<i class="fa fa-tasks" aria-hidden="true"></i>
											<span>Transactions</span>
										</a>
										<ul class="nav nav-children">
											<li>
												<a href="#">
													Invoices
												</a>
											</li>
											<li>
												<a href="#">
													Payments
												</a>
											</li>
										</ul>
									</li>
									<li>
										<a href="#">
											<i class="fa fa-users" aria-hidden="true"></i>
											<span>Manage Employees</span>
										</a>
									</li>
									<li class="nav-parent">
										<a>
											<i class="fa fa-cogs" aria-hidden="true"></i>
											<span>Settings</span>
										</a>
										<ul class="nav nav-children">
											<li>
												<a href="#">
													Subscriptions
												</a>
											</li>
											<li>
												<a href="#">
													Logs
												</a>
											</li>
										</ul>
									</li>
									<li class="nav-parent">
										<a>
											<i class="fa fa-bell" aria-hidden="true"></i>
											<span>Notifications</span>
										</a>
										<ul class="nav nav-children">
											<li>
												<a href="#">
													Messages
												</a>
											</li>
											<li>
												<a href="#">
													Notifications
												</a>
											</li>
										</ul>
									</li>
								</ul>
							</nav>
				
							<hr class="separator" />
				
							<div class="sidebar-widget widget-stats">
								<div class="widget-header">
									<h6>Company Stats</h6>
									<div class="widget-toggle">+</div>
								</div>
								<div class="widget-content">
									<ul>
										<li>
											<span class="stats-title">Stat 1</span>
											<span class="stats-complete">85%</span>
											<div class="progress">
												<div class="progress-bar progress-bar-primary progress-without-number" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%;">
													<span class="sr-only">85% Complete</span>
												</div>
											</div>
										</li>
										<li>
											<span class="stats-title">Stat 2</span>
											<span class="stats-complete">70%</span>
											<div class="progress">
												<div class="progress-bar progress-bar-primary progress-without-number" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%;">
													<span class="sr-only">70% Complete</span>
												</div>
											</div>
										</li>
										<li>
											<span class="stats-title">Stat 3</span>
											<span class="stats-complete">2%</span>
											<div class="progress">
												<div class="progress-bar progress-bar-primary progress-without-number" role="progressbar" aria-valuenow="2" aria-valuemin="0" aria-valuemax="100" style="width: 2%;">
													<span class="sr-only">2% Complete</span>
												</div>
											</div>
										</li>
									</ul>
								</div>
							</div>
						</div>
				
					</div>
				</aside>