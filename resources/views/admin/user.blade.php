 @include('header')
@include('sidebar')  
<!-- Right sidebar Start-->
        <div class="page-body">
          <!-- breadcrumb  Start -->
@include('links')  
          <div class="container-fluid">
            <div class="page-header">
 
                      @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
    <div class="row">
    <div class="col-sm-12">
      <div class="card">
        <div class="card-header">
          <h5>Add User</h5>
        </div>
        <div class="card-body" style="background-color: #ccdcff;">
        	<form method="post" action="{{url('/')}}/admin/user/store" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}   
                      @include('flash')

            <div class="form-row">
              <div class="col-md-4 mb-3">
                <label for="validationCustom01">Member Type</label>
                <select class="form-control" name="memeber_type">
                	<option value="2">Associate</option>
                	<option value="3">Client</option>
                </select>
                <div class="valid-feedback">Looks good!</div>
              </div>
 

               <div class="col-md-4 mb-3">
                <label for="validationCustom01">Sponer ID</label>
      
                <select class="form-control myselect2" style="width: 330px;" name="sponser_id" id="sponser_id">
                  <option>Select</option>
                    @if(count($associates) > 0)
                    @foreach($associates as $associate)
                	<option value="client">{{$associate->user_id}}</option>
                    @endforeach
                    @endif
                </select>
                <div class="valid-feedback">Looks good!</div>
              </div>

               <div class="col-md-4 mb-3">
                <label for="validationCustom02">User ID</label>
                <input class="form-control" id="user_id" type="text" placeholder="User ID" name="user_id" >
                <div class="valid-feedback">Looks good!</div>
              </div>

               <div class="col-md-4 mb-3">
                <label for="validationCustom02">password</label>
                <input class="form-control" id="password" type="text" placeholder="password" name="password" >
                <div class="valid-feedback">Looks good!</div>
              </div>


              <div class="col-md-4 mb-3">
                <label for="validationCustom02">Full Name</label>
                <input class="form-control" id="name" name="name" type="text" placeholder="Full name" >
                <div class="valid-feedback">Looks good!</div>
              </div>


               <div class="col-md-4 mb-3">
                <label for="validationCustom01">Gender</label>
                <select class="form-control" name="gender" id="gender">
                	<option value="male">Male</option>
                	<option value="female">Female</option>
                </select>
                <div class="valid-feedback">Looks good!</div>
              </div>

              <div class="col-md-4 mb-3">
                <label for="validationCustomUsername">Email</label>
                <div class="input-group">
                  <div class="input-group-prepend"><span class="input-group-text" id="inputGroupPrepend">@</span></div>
                  <input class="form-control" id="validationCustomUsername" name="email" type="text" placeholder="Email" aria-describedby="inputGroupPrepend" >
                  <div class="invalid-feedback">Please choose a username.</div>
                </div>
              </div>


              <div class="col-md-4 mb-3">
                <label for="validationCustom03">Pan No.</label>
                <input class="form-control" id="validationCustom03" type="text" placeholder="pan"  name="pan_no">
                <div class="invalid-feedback">Please provide a valid city.</div>
              </div>

              <div class="col-md-4 mb-3">
                <label for="validationCustom04">Phone No.</label>
                <input class="form-control" id="validationCustom04" type="text" placeholder="Phoen No." name="phone_no" >
                <div class="invalid-feedback">Please provide a valid state.</div>
              </div>

               <div class="col-md-4 mb-3">
                <label for="validationCustom05">Address</label>
                <input class="form-control" id="validationCustom05" type="text" placeholder="Address" name="address" >
                <div class="invalid-feedback">Please provide a valid zip.</div>
              </div>

               <div class="col-md-4 mb-3">
                <label for="validationCustom05">State</label>
                <input class="form-control" id="validationCustom05" type="text" name="state" placeholder="State" >
                <div class="invalid-feedback">Please provide a valid zip.</div>
              </div>

               <div class="col-md-4 mb-3">
                <label for="validationCustom05">City</label>
                <input class="form-control" id="validationCustom05" type="text" name="city" placeholder="State" >
                <div class="invalid-feedback">Please provide a valid zip.</div>
               </div>

               <div class="col-md-4 mb-3">
                <label for="validationCustomUsername">Nominee Name</label>
                <div class="input-group">
                  <input class="form-control" id="validationCustomUsername" type="text" name="nominee_name" placeholder="Nominee Name" aria-describedby="inputGroupPrepend" >
                  <div class="invalid-feedback">Please choose a username.</div>
                </div>
              </div>

                <div class="col-md-4 mb-3">
                <label for="validationCustomUsername">Nominee Age</label>
                <div class="input-group">
                  <input class="form-control" id="validationCustomUsername" type="number" name="nominee_age" placeholder="Nominee Age" aria-describedby="inputGroupPrepend" >
                  <div class="invalid-feedback">Please choose a username.</div>
                </div>
              </div>

               <div class="col-md-4 mb-3">
                <label for="validationCustomUsername">Bank Name</label>
                <div class="input-group">
                  <input class="form-control" id="validationCustomUsername" type="text" name="bank_name" placeholder="Bank Name" aria-describedby="inputGroupPrepend" >
                  <div class="invalid-feedback">Please choose a username.</div>
                </div>
              </div>

               <div class="col-md-4 mb-3">
                <label for="validationCustomUsername">Branch</label>
                <div class="input-group">
                  <input class="form-control" id="validationCustomUsername" type="text" name="branch" placeholder="Branch" aria-describedby="inputGroupPrepend" >
                  <div class="invalid-feedback">Please choose a username.</div>
                </div>
              </div>


               <div class="col-md-4 mb-3">
                <label for="validationCustomUsername">Account Number</label>
                <div class="input-group">
                  <input class="form-control" id="validationCustomUsername" type="text" name="account_number" placeholder="Account Number" aria-describedby="inputGroupPrepend" >
                  <div class="invalid-feedback">Please choose a username.</div>
                </div>
              </div>


               <div class="col-md-4 mb-3">
                <label for="validationCustomUsername">Account Type</label>
                <div class="input-group">
                  <input class="form-control" id="validationCustomUsername" type="text" name="account_type" placeholder="Account Type" aria-describedby="inputGroupPrepend" >
                  <div class="invalid-feedback">Please choose a username.</div>
                </div>
              </div>

              <div class="col-md-4 mb-3">
                <label for="validationCustomUsername">IFCS Code</label>
                <div class="input-group">
                  <input class="form-control" id="validationCustomUsername" type="text" name="ifcs_code" placeholder="IFCS Code" aria-describedby="inputGroupPrepend" >
                  <div class="invalid-feedback">Please choose a username.</div>
                </div>
              </div>


                <div class="col-md-4 mb-3">
                <label for="validationCustomUsername">Joining Fee</label>
                <div class="input-group">
                  <input class="form-control" id="validationCustomUsername" type="text" name="joining_fee" placeholder="Joining Fee" aria-describedby="inputGroupPrepend" >
                  <div class="invalid-feedback">Please choose a username.</div>
                </div>
                </div>  


                <div class="col-md-4 mb-3">
                <label for="validationCustomUsername">Investment</label>
                <div class="input-group">
                  <input class="form-control" id="validationCustomUsername" type="text" name="investment" placeholder="investment" aria-describedby="inputGroupPrepend" >
                  <div class="invalid-feedback">Please choose a username.</div>
                </div>
                </div>


                 <div class="col-md-4 mb-3">
                <label for="validationCustomUsername">Profile Image</label>
                <div class="input-group">
                  <input class="form-control" id="validationCustomUsername" type="file" name="profile_image" placeholder="IFCS Code" aria-describedby="inputGroupPrepend" >
                  <div class="invalid-feedback">Please choose a username.</div>
                </div>
                </div>

               <div class="col-md-4 mb-3">
                <label for="validationCustomUsername">Pan Card Image</label>
                <div class="input-group">
                  <input class="form-control" id="validationCustomUsername" type="file" name="pancard_img" placeholder="IFCS Code" aria-describedby="inputGroupPrepend" >
                  <div class="invalid-feedback">Please choose a username.</div>
                </div>
              </div>
 
                <div class="col-md-4 mb-3">
                <label for="validationCustomUsername">Adhar Card Image(Front)</label>
                <div class="input-group">
                  <input class="form-control" id="validationCustomUsername" type="file" name="ad_front" placeholder="IFCS Code" aria-describedby="inputGroupPrepend" >
                  <div class="invalid-feedback">Please choose a username.</div>
                </div>
              </div>


                <div class="col-md-4 mb-3">
                <label for="validationCustomUsername">Adhar Card Image(Back)</label>
                <div class="input-group">
                  <input class="form-control" id="validationCustomUsername" type="file" name="ad_back" placeholder="IFCS Code" aria-describedby="inputGroupPrepend" >
                  <div class="invalid-feedback">Please choose a username.</div>
                </div>
                </div>

                 

            </div>

            <br>

<!-- 

            <div class="form-group">
              <div class="form-check">
                <div class="checkbox p-0">
                  <input class="form-check-input" id="invalidCheck" type="checkbox" >
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
 