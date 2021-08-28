@extends('layouts.app')
@section('content')


<div class="container">
    <div class="row">
        <div class="col-lg-12 col-md-12">
          <div class="card" >
            <!-- <img src="..." class="card-img-top" alt="..."> -->
            <div class="card-body">
              <h5 class="card-title">Laravel CRUD  
                <?php if(auth()->user()->type== "admin") { ?>
                  <small>Admin</small>
                <?php } else { echo "<small>User</small>";} ?>
              </h5>
              <div class="form-group">
                  <button type="button" class="btn btn-primary float-center" data-toggle="modal" data-target="#exampleModal">
                Add DATA
              </button>
              </div>
          <small class="text-danger" id="delmessage"></small>

          <small  id="err_message"></small>
            
          <small id="err_updatemessage"></small>
              <table class="table" id="tblusers">
                <thead>
                  <tr>
                    <th scope="col">id</th>
                    <th scope="col">name</th>
                    <th scope="col">email</th>
                    <th scope="col">created</th>
                    <th scope="col">updated</th>
                    <th scope="col">action</th>
                  </tr>
                </thead>
                <tbody >
                
                  
                  
                </tbody>
              </table>
            </div>
          </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Create Account</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form id="insertform">
      {{csrf_field()}}
      <div class="form-group">
    <label for="name">Name</label>
    <input type="text" id="name" name="name" class="form-control"   aria-describedby="emailHelp">
    <small class="text-danger" id="errname"></small>
    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
  </div>
  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" id="email" name="email"  aria-describedby="emailHelp">
    <small class="text-danger" id="erremail"></small>
  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control"  id="password" name="password">
    <small class="text-danger" id="errpassword"></small>
    </div>
  
  <div class="form-group">
  <button type="submit" name="submit" id="submitInsert" class="btn btn-primary">Submit</button>
  </div>
</form>
      </div>
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div> -->
    </div>
  </div>
</div> <!-- endofmodal -->

<div class="modal" tabindex="-1" role="dialog" id="deleteModal">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Delete Account</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Are you sure deleting this account?</p>
      </div>
      <div class="modal-footer">
      <form id="deleteform">
      {{csrf_field()}}
      <input type="text" id="delid" name="delid" hidden >
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Delete</button>
      </form>
      </div>
    </div>
  </div>
</div>
<!-- Modal -->
<div class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update Account</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form  id="updateform">
      {{csrf_field()}}
      <input type="text" id="id" name="id" hidden >
      <div class="form-group">
    <label for="uname">Name</label>
    <input type="text" id="uname" name="name" class="form-control"   aria-describedby="emailHelp">
    <small class="text-danger" id="errupdatename"></small>
    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
  </div>
  <div class="form-group">
    <label for="updateemail">Email</label>
    <input type="uemail" class="form-control" id="uemail" name="email"  aria-describedby="emailHelp">
    <small class="text-danger" id="errupdateemail"></small>
  </div>
  <div class="form-group">
    <label for="upassword">Password</label>
    <input type="password" class="form-control"  id="upassword" name="password">
    <small class="text-danger" id="errupdatepassword"></small>
    </div>
  
  <div class="form-group">
  <button type="submit" name="submit" id="submitUpdate" class="btn btn-primary">Submit</button>
  </div>
</form>
      </div>
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div> -->
    </div>
  </div>
</div> <!-- endofmodal -->

<!-- Modal -->
<div class="modal fade" id="userModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">User Account</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      {{-- <div class="form-group"> --}}
    <label for="uname">Name</label>
    <input type="text" id="showname" name="name" readonly class="form-control">
  {{-- </div> --}}
  <div class="form-group">
    <label for="updateemail">Email</label>
    <input type="email" class="form-control" id="showemail" readonly name="email">
    </div>
      </div>
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div> -->
    </div>
  </div>
</div> <!-- endofmodal -->

@endsection