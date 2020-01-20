<!-- Page Body Start-->
<div class="page-body-wrapper">
        <!-- Page Sidebar Start-->
<div class="page-sidebar">
  <div class="main-header-left d-none d-lg-block">
    <div class="logo-wrapper"><a href="http://laravel.pixelstrap.com/endless"><img src="assets/images/endless-logo.png" alt=""></a></div>
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
 
      <li><a class="sidebar-header " href="{{route('home')}}"><i data-feather="menu"></i><span>DASHBOARD</span></a></li>

          @php
         $auth_id=Auth::user()->role_id;

         if($auth_id=='1')
         {
      @endphp
       
      <li><a class="sidebar-header" href="{{url('/')}}/admin/user" class="" ><i data-feather="settings"></i><span> ADD USER</span></a></li>

       <li><a class="sidebar-header" href="{{url('/')}}/admin/userview" class="" ><i data-feather="settings"></i><span>LIST USERS</span></a></li>

       @php
       }
       @endphp

    </ul>
  </div>
</div>
<!-- Right sidebar Ends-->



      