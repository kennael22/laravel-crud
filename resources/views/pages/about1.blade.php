  @extends('layout')
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
