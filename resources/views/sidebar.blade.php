<!-- Page Body Start-->
<div class="page-body-wrapper">
        <!-- Page Sidebar Start-->
<div class="page-sidebar">
  <div class="main-header-left d-none d-lg-block">
    <div class="logo-wrapper"><a href="http://laravel.pixelstrap.com/endless"><img src="{{ asset('assets/images/endless-logo.png') }}" alt=""></a></div>
  </div>
  <div class="sidebar custom-scrollbar">
    <div class="sidebar-user text-center">
      <div><img class="img-60 rounded-circle" src="{{ asset('assets/images/user/1.jpg') }}" alt="#">
        <div class="profile-edit"><a href="{{url('/')}}/edit_profile" target="_blank"><i data-feather="edit"></i></a></div>
      </div>
      <h6 class="mt-3 f-14">{{ Auth::user()->name }} </h6>
      <p>({{ Auth::user()->role }})</p>
    </div>
    <ul class="sidebar-menu"> 

         @php
         $auth_id=Auth::user()->is_office;

         if($auth_id=='1')
         {
      @endphp
 
      <li><a class="sidebar-header " href="{{url('/')}}/admin/dashboard"><i data-feather="menu"></i><span>DASHBOARD</span></a></li>

             @php
       }
       @endphp
 
           @php
         $auth_id=Auth::user()->is_office;

         if($auth_id=='2')
         {
      @endphp
 
      <li><a class="sidebar-header " href="{{url('/')}}/associate/dashboard"><i data-feather="menu"></i><span>DASHBOARD</span></a></li>

             @php
       }
       @endphp

 
           @php
         $auth_id=Auth::user()->is_office;

         if($auth_id=='3')
         {
      @endphp
 
      <li><a class="sidebar-header " href="{{url('/')}}/client/dashboard"><i data-feather="menu"></i><span>DASHBOARD</span></a></li>

             @php
       }
       @endphp


          @php
         $auth_id=Auth::user()->is_office;

         if($auth_id=='1')
         {
      @endphp
        
      <li><a class="sidebar-header" href="{{url('/')}}/admin/user" class="" ><i data-feather="settings"></i><span> ADD USER</span></a></li>

       <li><a class="sidebar-header" href="{{url('/')}}/admin/userview" class="" ><i data-feather="settings"></i><span>ASSOCIATES</span></a></li>

       <li><a class="sidebar-header" href="{{url('/')}}/admin/client_list" class="" ><i data-feather="settings"></i><span>CLIENTS</span></a></li>

       <li><a class="sidebar-header" href="{{url('/')}}/admin/incentive" class="" ><i data-feather="settings"></i><span>BALANCE-SHEET</span></a></li>

       <li><a class="sidebar-header" href="{{url('/')}}/admin/incentive" class="" ><i data-feather="settings"></i><span>BROKAGE/INCENTIVE</span></a></li>

       <li><a class="sidebar-header" href="{{url('/')}}/admin/incentive" class="" ><i data-feather="settings"></i><span>REQUEST A PAYOUT</span></a></li>

       <li><a class="sidebar-header" href="{{url('/')}}/admin/incentive" class="" ><i data-feather="settings"></i><span>REQUEST HISTORY</span></a></li>

<!-- 
      <li class="">
        <a class="sidebar-header" href="#"><i data-feather="airplay"></i><span>MEMBERS</span><i class="fa fa-angle-right pull-right"></i></a>
        <ul class="sidebar-submenu">
          <li><a href="{{url('/')}}/admin/user" class=""><i class="fa fa-circle"></i>ADD USERS</a></li>
          <li><a href="{{url('/')}}/admin/userview" class=""><i class="fa fa-circle"></i>LIST USERS</a></li>
        </ul>
      </li>


      <li class="">
        <a class="sidebar-header" href="#"><i data-feather="airplay"></i><span>ACCOUNTS</span><i class="fa fa-angle-right pull-right"></i></a>
        <ul class="sidebar-submenu">
          <li><a href="{{url('/')}}/admin/incentive" class=""><i class="fa fa-circle"></i>BROKAGE/INCENTIVES</a></li>
          <li><a href="{{url('/')}}/admin/userview" class=""><i class="fa fa-circle"></i>REQUEST A PAYOUT</a></li>

          <li><a href="{{url('/')}}/admin/userview" class=""><i class="fa fa-circle"></i>REQUEST HISTORY</a></li>
        </ul>
      </li> -->

      <li class="">
        <a class="sidebar-header" href="#"><i data-feather="airplay"></i><span>SETTINGS</span><i class="fa fa-angle-right pull-right"></i></a>
        <ul class="sidebar-submenu">
          <li><a href="{{url('/')}}/admin/incentive" class=""><i class="fa fa-circle"></i>MY PROFILE</a></li>
          <li><a href="{{url('/')}}/admin/userview" class=""><i class="fa fa-circle"></i>CHANGE PASSWORD</a></li>

          <li><a href="{{url('/')}}/admin/userview" class=""><i class="fa fa-circle"></i>LOGOUT</a></li>
        </ul>
      </li>

       @php
       }
       @endphp







       <!--Associate Starts Here  -->


         @php
         $auth_id=Auth::user()->is_office;

         if($auth_id=='2')
         {
      @endphp

       <li><a class="sidebar-header" href="{{url('/')}}/admin/incentive" class="" ><i data-feather="settings"></i><span>BALANCE-SHEET</span></a></li>

       <li><a class="sidebar-header" href="{{url('/')}}/associate/incentive" class="" ><i data-feather="settings"></i><span>BROKAGE/INCENTIVE</span></a></li>

       <li><a class="sidebar-header" href="{{url('/')}}/admin/incentive" class="" ><i data-feather="settings"></i><span>REQUEST A PAYOUT</span></a></li>

       <li><a class="sidebar-header" href="{{url('/')}}/admin/incentive" class="" ><i data-feather="settings"></i><span>REQUEST HISTORY</span></a></li>

<!-- 
      <li class="">
        <a class="sidebar-header" href="#"><i data-feather="airplay"></i><span>MEMBERS</span><i class="fa fa-angle-right pull-right"></i></a>
        <ul class="sidebar-submenu">
          <li><a href="{{url('/')}}/admin/user" class=""><i class="fa fa-circle"></i>ADD USERS</a></li>
          <li><a href="{{url('/')}}/admin/userview" class=""><i class="fa fa-circle"></i>LIST USERS</a></li>
        </ul>
      </li>


      <li class="">
        <a class="sidebar-header" href="#"><i data-feather="airplay"></i><span>ACCOUNTS</span><i class="fa fa-angle-right pull-right"></i></a>
        <ul class="sidebar-submenu">
          <li><a href="{{url('/')}}/admin/incentive" class=""><i class="fa fa-circle"></i>BROKAGE/INCENTIVES</a></li>
          <li><a href="{{url('/')}}/admin/userview" class=""><i class="fa fa-circle"></i>REQUEST A PAYOUT</a></li>

          <li><a href="{{url('/')}}/admin/userview" class=""><i class="fa fa-circle"></i>REQUEST HISTORY</a></li>
        </ul>
      </li> -->

      <li class="">
        <a class="sidebar-header" href="#"><i data-feather="airplay"></i><span>SETTINGS</span><i class="fa fa-angle-right pull-right"></i></a>
        <ul class="sidebar-submenu">
          <li><a href="{{url('/')}}/admin/incentive" class=""><i class="fa fa-circle"></i>MY PROFILE</a></li>
          <li><a href="{{url('/')}}/admin/userview" class=""><i class="fa fa-circle"></i>CHANGE PASSWORD</a></li>

          <li><a href="{{url('/')}}/admin/userview" class=""><i class="fa fa-circle"></i>LOGOUT</a></li>
        </ul>
      </li>

       @php
       }
       @endphp

    </ul>
  </div>
</div>
<!-- Right sidebar Ends-->

<!--Associate Starts Here  -->



      