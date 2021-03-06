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

              

                 @if(count($users) > 0)
                    @foreach($users as $user)
    <div class="row">
    <div class="col-sm-12">
      <div class="card">
        <div class="card-header">
          <h5>EDIT USER</h5>
        </div>
        <div class="card-body" style="background-color: #ccdcff;">
        	<form method="post" action="{{url('/')}}/admin/user/store" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}   
                      @include('flash')

            <div class="form-row">
              <div class="col-md-4 mb-3">
                <label for="validationCustom01">ASSOCIATE</label>
                <select class="form-control" name="is_associate">
                  <option>Select</option>

                	<option value="2">YES</option>
                	<option value="0">NO</option>
                </select>
                              </div>

                               <div class="col-md-4 mb-3">
                <label for="validationCustom01">CLIENT</label>
                <select class="form-control" name="is_client">
                  <option >Select</option>

                  <option value="3">YES</option>
                  <option value="0">NO</option>
                </select>
                              </div>

                               @endforeach
                               @endif

  
 
               <div class="col-md-4 mb-3">
                <label for="validationCustom01">Sponer ID</label>
      
                <select class="form-control myselect2" style="width: 330px;" name="sponser_id" id="sponser_id">
                  <option>Select</option>
                   @if(count($users_two) > 0)
                    @foreach($users_two as $users_two)
                   
                  <option value="{{$users_two->sponser_id}}"  @if($user->sponser_id==$users_two->sponser_id) selected='selected' @endif  >

                  {{$users_two->sponser_id}}

                   </option>

         @endforeach
         @endif
                   
                </select>
                              </div>


     @if(count($users) > 0)
                    @foreach($users as $user)

               <div class="col-md-4 mb-3">
                <label for="validationCustom02">User ID</label>
                <input class="form-control" id="user_id" type="text" placeholder="User ID" name="user_id" value="{{$user->user_id}}" >
                <span class="text-danger">{{ $errors->first('user_id') }}</span>

                              </div>

               <div class="col-md-4 mb-3">
                <label for="validationCustom02">password</label>
                <input class="form-control" id="password" type="text" placeholder="password" name="password" >
                <span class="text-danger">{{ $errors->first('user_id') }}</span>

                              </div>

              <div class="col-md-4 mb-3">
                <label >Joining Date</label>
                <input class="form-control" id="joining_date" name="joining_date" type="date" value="{{$user->joining_date}}">
              </div>


              <div class="col-md-4 mb-3">
                <label >Full Name</label>
                <input class="form-control" id="name" name="name" type="text" placeholder="Full name" value="{{$user->name}}">
                <span class="text-danger">{{ $errors->first('name') }}</span>
              </div>


               <div class="col-md-4 mb-3">
                <label for="validationCustom01">Gender</label>
                <select class="form-control" name="gender" id="gender">
                	<option value="male">Male</option>
                	<option value="female">Female</option>
                </select>
                              </div>

              <div class="col-md-4 mb-3">
                <label for="validationCustomUsername">Email</label>
                <div class="input-group">
                  <div class="input-group-prepend"><span class="input-group-text" id="inputGroupPrepend">@</span></div>
                  <input class="form-control" id="validationCustomUsername" name="email" type="text" placeholder="Email" aria-describedby="inputGroupPrepend" value="{{$user->email}}" >
                  
                </div>
                <span class="text-danger">{{ $errors->first('email') }}</span>

              </div>


              <div class="col-md-4 mb-3">
                <label for="validationCustom03">Pan No.</label>
                <input class="form-control" id="validationCustom03" type="text" placeholder="pan"  name="pan_no" value="{{$user->pan_no}}">
                <div class="invalid-feedback">Please provide a valid city.</div>
              </div>

              <div class="col-md-4 mb-3">
                <label for="validationCustom04">Phone No.</label>
                <input class="form-control" id="validationCustom04" type="text" placeholder="Phoen No." name="phone_no" value="{{$user->phone_no}}">
                <div class="invalid-feedback">Please provide a valid state.</div>
              </div>

               <div class="col-md-4 mb-3">
                <label for="validationCustom05">Address</label>
                <input class="form-control" id="validationCustom05" type="text" placeholder="Address" name="address" value="{{$user->address}}">
                <div class="invalid-feedback">Please provide a valid zip.</div>
              </div>

               <div class="col-md-4 mb-3">
                <label for="validationCustom05">State</label>
                <input class="form-control" id="validationCustom05" type="text" name="state" placeholder="State" value="{{$user->state}}">
                <div class="invalid-feedback">Please provide a valid zip.</div>
              </div>

               <div class="col-md-4 mb-3">
                <label for="validationCustom05">City</label>
                <input class="form-control" id="validationCustom05" type="text" name="city" placeholder="State" value="{{$user->city}}">
                <div class="invalid-feedback">Please provide a valid zip.</div>
               </div>

               <div class="col-md-4 mb-3">
                <label for="validationCustomUsername">Nominee Name</label>
                <div class="input-group">
                  <input class="form-control" id="validationCustomUsername" type="text" name="nominee_name" placeholder="Nominee Name" aria-describedby="inputGroupPrepend" value="{{$user->nominee_name}}">
             
                </div>
              </div>

                <div class="col-md-4 mb-3">
                <label for="validationCustomUsername">Nominee Age</label>
                <div class="input-group">
                  <input class="form-control" id="validationCustomUsername" type="number" name="nominee_age" placeholder="Nominee Age" aria-describedby="inputGroupPrepend" value="{{$user->nominee_age}}">
             
                </div>
              </div>

               <div class="col-md-4 mb-3">
                <label for="validationCustomUsername">Bank Name</label>
                <div class="input-group">
                  <input class="form-control" id="validationCustomUsername" type="text" name="bank_name" placeholder="Bank Name" aria-describedby="inputGroupPrepend" value="{{$user->bank_name}}">
             
                </div>
              </div>

               <div class="col-md-4 mb-3">
                <label for="validationCustomUsername">Branch</label>
                <div class="input-group">
                  <input class="form-control" id="validationCustomUsername" type="text" name="branch" placeholder="Branch" aria-describedby="inputGroupPrepend" value="{{$user->branch}}">
             
                </div>
              </div>


               <div class="col-md-4 mb-3">
                <label for="validationCustomUsername">Account Number</label>
                <div class="input-group">
                  <input class="form-control" id="validationCustomUsername" type="text" name="account_number" placeholder="Account Number" aria-describedby="inputGroupPrepend" value="{{$user->account_number}}">
             
                </div>
              </div>


               <div class="col-md-4 mb-3">
                <label for="validationCustomUsername">Account Type</label>
                <div class="input-group">
                  <input class="form-control" id="validationCustomUsername" type="text" name="account_type" placeholder="Account Type" aria-describedby="inputGroupPrepend" value="{{$user->account_type}}">
             
                </div>
              </div>

              <div class="col-md-4 mb-3">
                <label for="validationCustomUsername">IFCS Code</label>
                <div class="input-group">
                  <input class="form-control" id="validationCustomUsername" type="text" name="ifcs_code" placeholder="IFCS Code" aria-describedby="inputGroupPrepend" value="{{$user->ifcs_code}}">
             
                </div>
              </div>


                <div class="col-md-4 mb-3">
                <label for="validationCustomUsername">Joining Fee</label>
                <div class="input-group">
                  <input class="form-control" id="validationCustomUsername" type="text" name="joining_fee" placeholder="Joining Fee" aria-describedby="inputGroupPrepend" value="{{$user->joining_fee}}">
             
                </div>
                </div>  


                <div class="col-md-4 mb-3">
                <label for="validationCustomUsername">Investment</label>
                <div class="input-group">
                  <input class="form-control" id="validationCustomUsername" type="text" name="investment" placeholder="investment" aria-describedby="inputGroupPrepend" value="{{$user->investment}}">
             
                </div>
                </div>


                 <div class="col-md-4 mb-3">
                <label for="validationCustomUsername">Profile Image</label>
                <div class="input-group">
                  <input class="form-control" id="validationCustomUsername" type="file" name="profile_image" placeholder="IFCS Code" aria-describedby="inputGroupPrepend" value="{{$user->profile_image}}">
             
                </div>
                <span class="text-danger">{{ $errors->first('profile_image') }}</span>

                </div>

               <div class="col-md-4 mb-3">
                <label for="validationCustomUsername">Pan Card Image</label>
                <div class="input-group">
                  <input class="form-control" id="validationCustomUsername" type="file" name="pancard_img" placeholder="IFCS Code" aria-describedby="inputGroupPrepend" value="{{$user->pancard_img}}">
             
                </div>
                <span class="text-danger">{{ $errors->first('pancard_img') }}</span>
              </div>
 
                <div class="col-md-4 mb-3">
                <label for="validationCustomUsername">Adhar Card Image(Front)</label>
                <div class="input-group">
                  <input class="form-control" id="validationCustomUsername" type="file" name="ad_front" placeholder="IFCS Code" aria-describedby="inputGroupPrepend" value="{{$user->ad_front}}">
             
                </div>
                <span class="text-danger">{{ $errors->first('ad_front') }}</span>
              </div>


                <div class="col-md-4 mb-3">
                <label for="validationCustomUsername">Adhar Card Image(Back)</label>
                <div class="input-group">
                  <input class="form-control" id="validationCustomUsername" type="file" name="ad_back" placeholder="IFCS Code" aria-describedby="inputGroupPrepend" value="{{$user->ad_back}}">
             
                </div>
                <span class="text-danger">{{ $errors->first('ad_back') }}</span>
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

         @endforeach
         @endif


@include('footer')
 