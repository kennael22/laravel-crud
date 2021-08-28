  @extends('layout');
  @section('sidebar')
  <nav id="sidebar" class="sidebar sidebar-sticky">
			<div class="sidebar-content  js-simplebar">
				<a class="sidebar-brand" href="index.html">
          <i class="align-middle" data-feather="box"></i>
          <span class="align-middle">AppStack</span>
        </a>

				<ul class="sidebar-nav">
					<li class="sidebar-header">
						Main
					</li>
					<li class="sidebar-item">
						<a href="#dashboards" data-toggle="collapse" class="sidebar-link collapsed">
              <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboard</span>
            </a>
						<ul id="dashboards" class="sidebar-dropdown list-unstyled collapse " data-parent="#sidebar">
							<li class="sidebar-item"><a class="sidebar-link" href="#">test</a></li>
							<li class="sidebar-item"><a class="sidebar-link" href="#">dashboard</a></li>
							<li class="sidebar-item"><a class="sidebar-link" href="dashboard-e-commerce.html">E-commerce</a></li>
							<li class="sidebar-item"><a class="sidebar-link" href="dashboard-social.html">Social</a></li>
							<li class="sidebar-item"><a class="sidebar-link" href="dashboard-crypto.html">Crypto <span class="sidebar-badge badge badge-primary">New</span></a></li>
						</ul>
					</li>
					<li class="sidebar-item">
						<a href="#pages" data-toggle="collapse" class="sidebar-link collapsed">
              <i class="align-middle" data-feather="layout"></i> <span class="align-middle">Pages</span>
            </a>
						<ul id="pages" class="sidebar-dropdown list-unstyled collapse " data-parent="#sidebar">
							<li class="sidebar-item"><a class="sidebar-link" href="pages-profile.html">Profile</a></li>
							<li class="sidebar-item"><a class="sidebar-link" href="pages-settings.html">Settings</a></li>
							<li class="sidebar-item"><a class="sidebar-link" href="pages-clients.html">Clients</a></li>
							<li class="sidebar-item"><a class="sidebar-link" href="pages-projects.html">Projects <span class="sidebar-badge badge badge-primary">New</span></a></li>
							<li class="sidebar-item"><a class="sidebar-link" href="pages-invoice.html">Invoice</a></li>
							<li class="sidebar-item"><a class="sidebar-link" href="pages-pricing.html">Pricing</a></li>
							<li class="sidebar-item"><a class="sidebar-link" href="pages-tasks.html">Tasks <span class="sidebar-badge badge badge-primary">New</span></a></li>
							<li class="sidebar-item"><a class="sidebar-link" href="pages-blank.html">Blank Page</a></li>
						</ul>
					</li>
					<li class="sidebar-item">
						<a href="#auth" data-toggle="collapse" class="sidebar-link collapsed">
              <i class="align-middle" data-feather="users"></i> <span class="align-middle">Auth</span>
              <span class="sidebar-badge badge badge-secondary">12/24</span>
            </a>
						<ul id="auth" class="sidebar-dropdown list-unstyled collapse " data-parent="#sidebar">
							<li class="sidebar-item"><a class="sidebar-link" href="pages-sign-in.html">Sign In</a></li>
							<li class="sidebar-item"><a class="sidebar-link" href="pages-sign-up.html">Sign Up</a></li>
							<li class="sidebar-item"><a class="sidebar-link" href="pages-reset-password.html">Reset Password</a></li>
							<li class="sidebar-item"><a class="sidebar-link" href="pages-404.html">404 Page</a></li>
							<li class="sidebar-item"><a class="sidebar-link" href="pages-500.html">500 Page</a></li>
						</ul>
					</li>
					<li class="sidebar-item active">
						<a href="#layouts" data-toggle="collapse" class="sidebar-link">
              <i class="align-middle" data-feather="monitor"></i> <span class="align-middle">Layouts</span>
            </a>
						<ul id="layouts" class="sidebar-dropdown list-unstyled collapse show" data-parent="#sidebar">
							<li class="sidebar-item active"><a class="sidebar-link" href="layouts-sidebar-sticky.html">Sticky Sidebar</a></li>
							<li class="sidebar-item"><a class="sidebar-link" href="layouts-sidebar-collapsed.html">Collapsed Sidebar</a></li>
							<li class="sidebar-item"><a class="sidebar-link" href="layouts-boxed.html">Boxed Layout</a></li>
							<li class="sidebar-item"><a class="sidebar-link" href="dashboard-analytics7743.html?theme=classic">Classic Theme</a></li>
							<li class="sidebar-item"><a class="sidebar-link" href="dashboard-analytics8a2a.html?theme=corporate">Corporate Theme <span class="sidebar-badge badge badge-primary">New</span></a></li>
							<li class="sidebar-item"><a class="sidebar-link" href="dashboard-analytics2a29.html?theme=modern">Modern Theme <span class="sidebar-badge badge badge-primary">New</span></a></li>
						</ul>
					</li>
					<li class="sidebar-item">
						<a href="#documentation" data-toggle="collapse" class="sidebar-link collapsed">
              <i class="align-middle" data-feather="book-open"></i> <span class="align-middle">Documentation</span>
            </a>
						<ul id="documentation" class="sidebar-dropdown list-unstyled collapse " data-parent="#sidebar">
							<li class="sidebar-item"><a class="sidebar-link" href="docs-introduction.html">Introduction</a></li>
							<li class="sidebar-item"><a class="sidebar-link" href="docs-installation.html">Getting Started</a></li>
							<li class="sidebar-item"><a class="sidebar-link" href="docs-plugins.html">Plugins</a></li>
							<li class="sidebar-item"><a class="sidebar-link" href="docs-changelog.html">Changelog</a></li>
						</ul>
					</li>

					<li class="sidebar-header">
						Components
					</li>
					<li class="sidebar-item">
						<a href="#ui" data-toggle="collapse" class="sidebar-link collapsed">
              <i class="align-middle" data-feather="grid"></i> <span class="align-middle">UI Elements</span>
            </a>
						<ul id="ui" class="sidebar-dropdown list-unstyled collapse " data-parent="#sidebar">
							<li class="sidebar-item"><a class="sidebar-link" href="ui-alerts.html">Alerts</a></li>
							<li class="sidebar-item"><a class="sidebar-link" href="ui-buttons.html">Buttons</a></li>
							<li class="sidebar-item"><a class="sidebar-link" href="ui-cards.html">Cards</a></li>
							<li class="sidebar-item"><a class="sidebar-link" href="ui-general.html">General</a></li>
							<li class="sidebar-item"><a class="sidebar-link" href="ui-grid.html">Grid</a></li>
							<li class="sidebar-item"><a class="sidebar-link" href="ui-modals.html">Modals</a></li>
							<li class="sidebar-item"><a class="sidebar-link" href="ui-notifications.html">Notifications</a></li>
							<li class="sidebar-item"><a class="sidebar-link" href="ui-tabs.html">Tabs</a></li>
							<li class="sidebar-item"><a class="sidebar-link" href="ui-typography.html">Typography</a></li>
						</ul>
					</li>
					<li class="sidebar-item">
						<a href="#charts" data-toggle="collapse" class="sidebar-link collapsed">
              <i class="align-middle" data-feather="pie-chart"></i> <span class="align-middle">Charts</span>
              <span class="sidebar-badge badge badge-primary">New</span>
            </a>
						<ul id="charts" class="sidebar-dropdown list-unstyled collapse " data-parent="#sidebar">
							<li class="sidebar-item"><a class="sidebar-link" href="charts-chartjs.html">Chart.js</a></li>
							<li class="sidebar-item"><a class="sidebar-link" href="charts-apexcharts.html">ApexCharts <span class="sidebar-badge badge badge-primary">New</span></a></li>
						</ul>
					</li>
					<li class="sidebar-item">
						<a href="#forms" data-toggle="collapse" class="sidebar-link collapsed">
              <i class="align-middle" data-feather="check-square"></i> <span class="align-middle">Forms</span>
            </a>
						<ul id="forms" class="sidebar-dropdown list-unstyled collapse " data-parent="#sidebar">
							<li class="sidebar-item"><a class="sidebar-link" href="forms-layouts.html">Layouts</a></li>
							<li class="sidebar-item"><a class="sidebar-link" href="forms-basic-elements.html">Basic Elements</a></li>
							<li class="sidebar-item"><a class="sidebar-link" href="forms-advanced-elements.html">Advanced Elements</a></li>
							<li class="sidebar-item"><a class="sidebar-link" href="forms-input-groups.html">Input Groups</a></li>
							<li class="sidebar-item"><a class="sidebar-link" href="forms-editors.html">Editors</a></li>
							<li class="sidebar-item"><a class="sidebar-link" href="forms-validation.html">Validation</a></li>
							<li class="sidebar-item"><a class="sidebar-link" href="forms-wizard.html">Wizard</a></li>
						</ul>
					</li>
					<li class="sidebar-item">
						<a href="#tables" data-toggle="collapse" class="sidebar-link collapsed">
              <i class="align-middle" data-feather="list"></i> <span class="align-middle">Tables</span>
            </a>
						<ul id="tables" class="sidebar-dropdown list-unstyled collapse " data-parent="#sidebar">
							<li class="sidebar-item"><a class="sidebar-link" href="tables-bootstrap.html">Bootstrap</a></li>
							<li class="sidebar-item"><a class="sidebar-link" href="tables-datatables.html">DataTables</a></li>
						</ul>
					</li>
					<li class="sidebar-item">
						<a href="#icons" data-toggle="collapse" class="sidebar-link collapsed">
              <i class="align-middle" data-feather="heart"></i> <span class="align-middle">Icons</span>
              <span class="sidebar-badge badge badge-info">Special</span>
            </a>
						<ul id="icons" class="sidebar-dropdown list-unstyled collapse " data-parent="#sidebar">
							<li class="sidebar-item"><a class="sidebar-link" href="icons-feather.html">Feather</a></li>
							<li class="sidebar-item"><a class="sidebar-link" href="icons-font-awesome.html">Font Awesome</a></li>
						</ul>
					</li>
					<li class="sidebar-item">
						<a class="sidebar-link" href="calendar.html">
              <i class="align-middle" data-feather="calendar"></i> <span class="align-middle">Calendar</span>
              <span class="sidebar-badge badge badge-primary">New</span>
            </a>
					</li>
					<li class="sidebar-item">
						<a href="#maps" data-toggle="collapse" class="sidebar-link collapsed">
              <i class="align-middle" data-feather="map-pin"></i> <span class="align-middle">Maps</span>
            </a>
						<ul id="maps" class="sidebar-dropdown list-unstyled collapse " data-parent="#sidebar">
							<li class="sidebar-item"><a class="sidebar-link" href="maps-google.html">Google Maps</a></li>
							<li class="sidebar-item"><a class="sidebar-link" href="maps-vector.html">Vector Maps</a></li>
						</ul>
					</li>
					<li class="sidebar-item">
						<a href="#multi" data-toggle="collapse" class="sidebar-link">
              <i class="align-middle" data-feather="share-2"></i> <span class="align-middle">Multi Level</span>
            </a>
						<ul id="multi" class="sidebar-dropdown list-unstyled collapse" data-parent="#sidebar">
							<li class="sidebar-item">
								<a href="#multi-2" data-toggle="collapse" class="sidebar-link collapsed">
                  Two Levels
                </a>
								<ul id="multi-2" class="sidebar-dropdown list-unstyled collapse">
									<li class="sidebar-item">
										<a class="sidebar-link" href="#">Item 1</a>
										<a class="sidebar-link" href="#">Item 2</a>
									</li>
								</ul>
							</li>
							<li class="sidebar-item">
								<a href="#multi-3" data-toggle="collapse" class="sidebar-link collapsed">
                  Three Levels
                </a>
								<ul id="multi-3" class="sidebar-dropdown list-unstyled collapse">
									<li class="sidebar-item">
										<a href="#multi-3-1" data-toggle="collapse" class="sidebar-link collapsed">
                      Item 1
                    </a>
										<ul id="multi-3-1" class="sidebar-dropdown list-unstyled collapse">
											<li class="sidebar-item">
												<a class="sidebar-link" href="#">Item 1</a>
												<a class="sidebar-link" href="#">Item 2</a>
											</li>
										</ul>
									</li>
									<li class="sidebar-item">
										<a class="sidebar-link" href="#">Item 2</a>
									</li>
								</ul>
							</li>
						</ul>
					</li>
				</ul>

			</div>
		</nav>

  @endsection
  @section('content')
  <main class="content"> <!-- startofcontentpage -->
				<div class="container-fluid p-0">

					<div class="row">
    	<h1>Create, Read, Update, Delete</h1>
    	<div class="col-12">
							<div class="card">

								<div class="card-header">
									<h5 class="card-title">Table with Buttons</h5>
									<h6 class="card-subtitle text-muted">This extension provides a framework with common options that can be used with DataTables.</h6>

    	<button type="button" id="btnadd" class="btn btn-primary">ADD</button>
								</div>

								<div class="card-body">
									<div  id="main_msg" role="alert">
											
											<div id="message">
														<span   id="success_msg"></span>
									
											</div>
										</div>
									<div id="mytbl">
									<table id="datatables-basic" class="table table-striped" style="width:100%">
										<thead>
											<tr>
												<th>Name</th>
												<th>Email</th>
												<th>Username</th>
												<th>Phone</th>
												<th>DOB</th>
												<th>action</th>
												
											</tr>
										</thead>
										<tbody>
											
										
										</tbody>
									</table>
								</div>
								</div>
							</div>
						</div>
    	</div>
	</div>
</main>

    <!-- BEGIN success modal -->
									<!-- <button type="button" class="btn btn-success" data-toggle="modal" data-target="#defaultModalSuccess">
              Success
            </button> -->
									<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-hidden="true">
										<div class="modal-dialog" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title
													"></h5>
													<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
												</div>
												<div class="modal-body m-3">
													<div class="col-12 col-xl-12">
							<div class="card">
								<div class="card-header">
									<h5 class="card-title">Basic form</h5>
									<h6 class="card-subtitle text-muted">Default Bootstrap form layout.</h6>
								</div>
								<div class="card-body">
									<form method="POST" id="frmadd">
										<input type="text" name="id" id="id" hidden=true>
   
										<div class="form-group">
											<label class="form-label">Name</label>
											<input type="text" name="name" id="name" class="form-control" placeholder="Name">
											<label id="validation-name-error" class="error jquery-validation-error small form-text invalid-feedback" for="name"></label>
										</div>
										<div class="form-group">
											<label class="form-label">Email address</label>
											<input type="email" name="email" id="email" class="form-control" placeholder="Email">
											<label id="validation-email-error" class="error jquery-validation-error small form-text invalid-feedback" for="email"></label>
										</div>
										<div class="form-group">
											<label class="form-label">Username</label>
											<input type="text" name="username" id="username" class="form-control" placeholder="Username">
											<label id="validation-username-error" class="error jquery-validation-error small form-text invalid-feedback" for="username"></label>
										</div>
										<div class="form-group">
											<label class="form-label">Phone</label>
											<input type="text" name="phone" id="phone" class="form-control" placeholder="phone">
											<label id="validation-phone-error" class="error jquery-validation-error small form-text invalid-feedback" for="phone"></label>
										</div>
										<div class="form-group">
											<label class="form-label">Date of birth</label>
											<input type="text" name="dob" id="dob" class="form-control" placeholder="dob">
											<label id="validation-dob-error" class="error jquery-validation-error small form-text invalid-feedback" for="dob"></label>
										</div>
										
										<div id="type"></div>
									</form>
								</div>
							</div>
						</div>
												</div>
												<!-- <div class="modal-footer">
													<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
													<button type="button" class="btn btn-success">Save changes</button>
												</div> -->
											</div>
										</div>
									</div>
									<!-- END success modal -->
@endsection
