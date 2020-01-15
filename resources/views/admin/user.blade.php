 @include('header')
@include('sidebar') 
<!-- Right sidebar Start-->
        <div class="page-body">
          <!-- breadcrumb  Start -->
          <div class="container-fluid">
            <div class="page-header">
    <div class="row">
    <div class="col-sm-12">
      <div class="card">
        <div class="card-header" style="background-color: #ccdcff;">
          <h5>Add User</h5>
        </div>
        <div class="card-body">
        	<form method="post" action="{{url('/')}}/admin/pins/create">
            <div class="form-row">


              <div class="col-md-4 mb-3">
                <label for="validationCustom01">Member Type</label>
                <select class="form-control">
                	<option value="associate">Associate</option>
                	<option value="client">Client</option>
                </select>
                <div class="valid-feedback">Looks good!</div>
              </div>


               <div class="col-md-4 mb-3">
                <label for="validationCustom01">Sponer ID</label>
                <select class="form-control">
                	<option value="associate">Admin</option>
                	<option value="client">ST1233FTYHF</option>
                	<option value="client">ST123356TYHF</option>
                	<option value="client">ST1233FTYHF</option>
                	<option value="client">ST1233FTYHF</option>
                	<option value="client">ST1233FTYHF</option>
                	<option value="client">ST1233FTYHF</option>
                	<option value="client">ST1233FTYHF</option>
                </select>
                <div class="valid-feedback">Looks good!</div>
              </div>

               <div class="col-md-4 mb-3">
                <label for="validationCustom02">User ID</label>
                <input class="form-control" id="validationCustom02" type="text" placeholder="User ID" required="">
                <div class="valid-feedback">Looks good!</div>
              </div>


              <div class="col-md-4 mb-3">
                <label for="validationCustom02">Full Name</label>
                <input class="form-control" id="validationCustom02" type="text" placeholder="Full name" required="">
                <div class="valid-feedback">Looks good!</div>
              </div>


               <div class="col-md-4 mb-3">
                <label for="validationCustom01">Gender</label>
                <select class="form-control">
                	<option value="male">Male</option>
                	<option value="female">Female</option>
                </select>
                <div class="valid-feedback">Looks good!</div>
              </div>

              <div class="col-md-4 mb-3">
                <label for="validationCustomUsername">Email</label>
                <div class="input-group">
                  <div class="input-group-prepend"><span class="input-group-text" id="inputGroupPrepend">@</span></div>
                  <input class="form-control" id="validationCustomUsername" type="text" placeholder="Email" aria-describedby="inputGroupPrepend" required="">
                  <div class="invalid-feedback">Please choose a username.</div>
                </div>
              </div>


              <div class="col-md-4 mb-3">
                <label for="validationCustom03">Pan No.</label>
                <input class="form-control" id="validationCustom03" type="text" placeholder="pan" required="">
                <div class="invalid-feedback">Please provide a valid city.</div>
              </div>

              <div class="col-md-4 mb-3">
                <label for="validationCustom04">Phone No.</label>
                <input class="form-control" id="validationCustom04" type="text" placeholder="Phoen No." required="">
                <div class="invalid-feedback">Please provide a valid state.</div>
              </div>

               <div class="col-md-4 mb-3">
                <label for="validationCustom05">Address</label>
                <input class="form-control" id="validationCustom05" type="text" placeholder="Address" required="">
                <div class="invalid-feedback">Please provide a valid zip.</div>
              </div>

               <div class="col-md-4 mb-3">
                <label for="validationCustom05">State</label>
                <input class="form-control" id="validationCustom05" type="text" placeholder="State" required="">
                <div class="invalid-feedback">Please provide a valid zip.</div>
              </div>

               <div class="col-md-4 mb-3">
                <label for="validationCustom05">City</label>
                <input class="form-control" id="validationCustom05" type="text" placeholder="State" required="">
                <div class="invalid-feedback">Please provide a valid zip.</div>
               </div>

               <div class="col-md-4 mb-3">
                <label for="validationCustomUsername">Nominee Name</label>
                <div class="input-group">
                  <input class="form-control" id="validationCustomUsername" type="text" placeholder="Nominee Name" aria-describedby="inputGroupPrepend" required="">
                  <div class="invalid-feedback">Please choose a username.</div>
                </div>
              </div>

                <div class="col-md-4 mb-3">
                <label for="validationCustomUsername">Nominee Age</label>
                <div class="input-group">
                  <input class="form-control" id="validationCustomUsername" type="text" placeholder="Nominee Age" aria-describedby="inputGroupPrepend" required="">
                  <div class="invalid-feedback">Please choose a username.</div>
                </div>
              </div>

               <div class="col-md-4 mb-3">
                <label for="validationCustomUsername">Bank Name</label>
                <div class="input-group">
                  <input class="form-control" id="validationCustomUsername" type="text" placeholder="Bank Name" aria-describedby="inputGroupPrepend" required="">
                  <div class="invalid-feedback">Please choose a username.</div>
                </div>
              </div>

               <div class="col-md-4 mb-3">
                <label for="validationCustomUsername">Branch</label>
                <div class="input-group">
                  <input class="form-control" id="validationCustomUsername" type="text" placeholder="Branch" aria-describedby="inputGroupPrepend" required="">
                  <div class="invalid-feedback">Please choose a username.</div>
                </div>
              </div>


               <div class="col-md-4 mb-3">
                <label for="validationCustomUsername">Account Number</label>
                <div class="input-group">
                  <input class="form-control" id="validationCustomUsername" type="text" placeholder="Account Number" aria-describedby="inputGroupPrepend" required="">
                  <div class="invalid-feedback">Please choose a username.</div>
                </div>
              </div>


               <div class="col-md-4 mb-3">
                <label for="validationCustomUsername">Account Type</label>
                <div class="input-group">
                  <input class="form-control" id="validationCustomUsername" type="text" placeholder="Account Type" aria-describedby="inputGroupPrepend" required="">
                  <div class="invalid-feedback">Please choose a username.</div>
                </div>
              </div>

              <div class="col-md-4 mb-3">
                <label for="validationCustomUsername">IFCS Code</label>
                <div class="input-group">
                  <input class="form-control" id="validationCustomUsername" type="text" placeholder="IFCS Code" aria-describedby="inputGroupPrepend" required="">
                  <div class="invalid-feedback">Please choose a username.</div>
                </div>
              </div>


                <div class="col-md-4 mb-3">
                <label for="validationCustomUsername">Joining Fee</label>
                <div class="input-group">
                  <input class="form-control" id="validationCustomUsername" type="text" placeholder="Joining Fee" aria-describedby="inputGroupPrepend" required="">
                  <div class="invalid-feedback">Please choose a username.</div>
                </div>
                </div>  


                <div class="col-md-4 mb-3">
                <label for="validationCustomUsername">Investment</label>
                <div class="input-group">
                  <input class="form-control" id="validationCustomUsername" type="text" placeholder="investment" aria-describedby="inputGroupPrepend" required="">
                  <div class="invalid-feedback">Please choose a username.</div>
                </div>
                </div>

               <div class="col-md-4 mb-3">
                <label for="validationCustomUsername">Pan Card Image</label>
                <div class="input-group">
                  <input class="form-control" id="validationCustomUsername" type="file" placeholder="IFCS Code" aria-describedby="inputGroupPrepend" required="">
                  <div class="invalid-feedback">Please choose a username.</div>
                </div>
              </div>
 
                <div class="col-md-4 mb-3">
                <label for="validationCustomUsername">Adhar Card Image(Front)</label>
                <div class="input-group">
                  <input class="form-control" id="validationCustomUsername" type="file" placeholder="IFCS Code" aria-describedby="inputGroupPrepend" required="">
                  <div class="invalid-feedback">Please choose a username.</div>
                </div>
              </div>


                <div class="col-md-4 mb-3">
                <label for="validationCustomUsername">Adhar Card Image(Back)</label>
                <div class="input-group">
                  <input class="form-control" id="validationCustomUsername" type="file" placeholder="IFCS Code" aria-describedby="inputGroupPrepend" required="">
                  <div class="invalid-feedback">Please choose a username.</div>
                </div>
                </div>

            </div>

            <br>

<!-- 

            <div class="form-group">
              <div class="form-check">
                <div class="checkbox p-0">
                  <input class="form-check-input" id="invalidCheck" type="checkbox" required="">
                  <label class="form-check-label" for="invalidCheck">Agree to terms and conditions</label>
                </div>
                <div class="invalid-feedback">You must agree before submitting.</div>
              </div>
            </div> -->
            <button class="btn btn-primary" type="submit">Submit form</button>
          </form>
        </div>
      </div>

      
      
     
    </div>
  </div>
            </div>
          </div>                    
      
        </div>

@include('footer')
 