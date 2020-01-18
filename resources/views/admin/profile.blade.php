 @include('header')
@include('sidebar')  
<!-- Right sidebar Start-->
<br>
<br>
 @if(count($users) > 0)
       @foreach($users as $user)
<div class="page-body">
<div class="container emp-profile">
            <form method="post">
                <div class="row">
                    <div class="col-md-4" >
                        <div class="profile-img" >
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS52y5aInsxSm31CvHOFHWujqUx_wWTS9iM6s7BAm21oEN_RiGoog" alt=""/>
                           <!--  <div class="file btn btn-lg btn-primary">
                                Change Photo
                                <input type="file" name="file"/>
                            </div> -->
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="profile-head">
                                    <h5>
                                     
      
                                       {{ $user->name }}
                                       
                                    </h5>
                                    <h6>
                                        <!-- Web Developer and Designer -->
                                    </h6>
                                   <!--  <p class="proile-rating">RANKINGS : <span>8/10</span></p> -->
                                   <br>
                                   <br>
                                   <br>
                                   <br>
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">User Details</a>
                                </li>
                               <!--  <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Timeline</a>
                                </li> -->
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <input type="submit" class="profile-edit-btn" name="btnAddMore" value="Edit Profile"/>
                    </div>
                </div>
                <br>
                <br>
                <br>

                <div class="row">
                    <div class="col-md-3" style="border: 1px solid black;height: 120px;">
                        <div class="profile-work">
                            <!-- <p>WORK LINK</p> -->
                            <br>
                <br>
                            <h5 align="left"> Benifit Rate :</h5><br/>
                            &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;

                         <!--    <a href="">Bootsnipp Profile</a><br/>
                            <a href="">Bootply Profile</a>
                            <p>SKILLS</p>
                            <a href="">Web Designer</a><br/>
                            <a href="">Web Developer</a><br/>
                            <a href="">WordPress</a><br/>
                            <a href="">WooCommerce</a><br/>
                            <a href="">PHP, .Net</a><br/> -->
                        </div>
                    </div>
                        <div class="col-md-1" style="">
                        <div class="profile-work">
                            <!-- <p>WORK LINK</p> -->
                   <!--          <br>
                <br>
                <br>
                            <a href="">Benifit Rate</a><br/> -->
                         <!--    <a href="">Bootsnipp Profile</a><br/>
                            <a href="">Bootply Profile</a>
                            <p>SKILLS</p>
                            <a href="">Web Designer</a><br/>
                            <a href="">Web Developer</a><br/>
                            <a href="">WordPress</a><br/>
                            <a href="">WooCommerce</a><br/>
                            <a href="">PHP, .Net</a><br/> -->
                        </div>
                    </div>

                    <div class="col-md-8">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Sponser ID</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p> {{ $user->sponser_id }}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>User ID</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p> {{ $user->user_id }}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Email</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p> {{ $user->email }}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Pan</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p> {{ $user->pan_no }}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Phone</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p> {{ $user->phone_no }}</p>
                                            </div>
                                        </div>
                            </div>
                        
                        </div>
                    </div>
                </div>

                <br>

                 <div class="row">
                    <div class="col-md-3" style="border: 1px solid black;">
                        <div class="profile-work">
                        <br>
                            <div style="text-align: center;">
                                <button class="btn btn-primary" disabled style="width: 250px;">SUMMARY</button>
                            </div>
                            <br>
                       <table>
                           <tr>
                               <td><h6>Joining Fee :{{$user->joining_fee}}</h6></td>
                           </tr>

                             <tr>
                               <td><h6>Investment  :{{$user->investment}}</h6></td>
                           </tr>

                             <tr>
                               <td><h6>Member Since :{{$user->created_at}}</h6></td>
                           </tr>
                       </table>

                        </div>
                    </div>
                     <div class="col-md-1" >
                        <div class="profile-work">
                           <!--  <p>WORK LINK</p>
                            <a href="">Benifit Rate</a><br/> -->
                         <!--    <a href="">Bootsnipp Profile</a><br/>
                            <a href="">Bootply Profile</a>
                            <p>SKILLS</p>
                            <a href="">Web Designer</a><br/>
                            <a href="">Web Developer</a><br/>
                            <a href="">WordPress</a><br/>
                            <a href="">WooCommerce</a><br/>
                            <a href="">PHP, .Net</a><br/> -->
                        </div>
                    </div>

                        <div class="col-md-8">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Full Name</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{$user->name}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Gender</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{$user->gender}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Address</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{$user->address}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>State</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{$user->state}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>City</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{$user->city}}</p>
                                            </div>
                                        </div>
                            </div>
                        </div>
                    </div>
                    </div>

                    <br>


                    <!-- 3rd -->
                        <div class="row">
                    <div class="col-md-3" >
                        <div class="profile-work">
                      

                        </div>
                    </div>
                     <div class="col-md-1" >
                        <div class="profile-work">
                           <!--  <p>WORK LINK</p>
                            <a href="">Benifit Rate</a><br/> -->
                         <!--    <a href="">Bootsnipp Profile</a><br/>
                            <a href="">Bootply Profile</a>
                            <p>SKILLS</p>
                            <a href="">Web Designer</a><br/>
                            <a href="">Web Developer</a><br/>
                            <a href="">WordPress</a><br/>
                            <a href="">WooCommerce</a><br/>
                            <a href="">PHP, .Net</a><br/> -->
                        </div>
                    </div>

                        <div class="col-md-8">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Nominee Name</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{$user->nominee_name}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Nominee Age</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{$user->nominee_age}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Bank Name</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{$user->bank_name}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Branch</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{$user->branch}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Account Number</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{$user->account_number}}</p>
                                            </div>
                                        </div>
                            </div>
                        </div>
                    </div>
                    </div>
                    <!-- 3rd -->
                    <br>
                



                                        <!-- 3rd -->
                        <div class="row">
                    <div class="col-md-3" >
                        <div class="profile-work">
                      

                        </div>
                    </div>
                     <div class="col-md-1" >
                        <div class="profile-work">
                           <!--  <p>WORK LINK</p>
                            <a href="">Benifit Rate</a><br/> -->
                         <!--    <a href="">Bootsnipp Profile</a><br/>
                            <a href="">Bootply Profile</a>
                            <p>SKILLS</p>
                            <a href="">Web Designer</a><br/>
                            <a href="">Web Developer</a><br/>
                            <a href="">WordPress</a><br/>
                            <a href="">WooCommerce</a><br/>
                            <a href="">PHP, .Net</a><br/> -->
                        </div>
                    </div>

                        <div class="col-md-8">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Account Type</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{$user->account_type}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Ifcs Code</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{$user->ifcs_code}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Pan Card</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><img width="80%" class="img-circle" src="{{ URL::asset('/images/pan/'.$user->pancard_img) }}"></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Adhara Card((Front))</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><img width="80%" class="img-circle" src="{{ URL::asset('/images/adhara_f/'.$user->pancard_img) }}"></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Adhara Card(Back)</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><img width="80%" class="img-circle" src="{{ URL::asset('/images/adhara_b/'.$user->pancard_img) }}"></p>
                                            </div>
                                        </div>
                            </div>
                        </div>
                    </div> 
                    </div>
                    <!-- 3rd -->


<br>
<br>
<br>
<br>
<br>
<br>
<br>






            </form>           
        </div>                 
      
        </div>
        @endforeach
                @endif

@include('footer')
 