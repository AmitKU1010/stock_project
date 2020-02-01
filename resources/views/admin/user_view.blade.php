 @include('header')
@include('sidebar')  
<div class="page-body">
@include('links')  
   <!-- Container-fluid starts-->
<div class="container-fluid">
  <div class="row">
    <div class="col-sm-12">
      <div class="card">
        <div class="card-header" style="background-color: #ccdcff;">
          <h5>Associate Details</h5>
        </div>
        <div class="card-body">
          <div class="dt-ext table-responsive">
            <table class="display" id="export-button" style="text-align: center;">
              <thead>
                <tr>
                  <th>#</th>
                  <th>USER ID</th>
                  <th>FULL NAME</th>
                  <!-- <th>IS CLIENT</th> -->
                  <th>SPONSER ID</th>
                  <th>EMAIL</th>
                  <th>INVEST</th>
                  <th>Action</th>

                </tr>
              </thead>
              <tbody>
       @php
       $i=1;
       @endphp
 
       @if(count($users) > 0)
       @foreach($users as $user)
              	<tr>
              		<td>{{$i++}}</td>
              		<td><a href="{{url('/')}}/admin/edit_profile/{{ $user->user_id}}">{{$user->user_id}}</a></td>
                  <td>{{$user->name }}</td>
               <!--    @php 
                  $role_status=$user->is_associate;
                  if($role_status=='2')
                  {
                    @endphp
                  <td>YES</td>
                  @php 

                  }
                  else
                  {
                    @endphp

                  <td>NO</td>
                  @php 

                  }
                  @endphp -->

                  <!--  @php 
                  $role_status_sec=$user->is_client;
                  if($role_status_sec=='3')
                  {
                    @endphp
                  <td>YES</td>
                  @php 

                  }
                  else
                  {
                    @endphp

                  <td>NO</td>
                  @php 
                  
                  }
                  @endphp
 -->


              		<td>{{$user->sponser_id }}</td>
              		<td>{{$user->email}}</td>
                  
                  <td>{{$user->investment}}</td>
              		<td>
                                  <a href="{{url('/')}}/admin/edit_user/{{ $user->user_id}}" class="btn btn-primary btn-xs" style="border-radius: 8px;" title="EDIT">
                                    <i class="fa fa-pencil mr-1"></i>
                                                                        
                                  </a>

                                  <a href="{{ url('/')}}/admin/userview/destroy/{{ $user->user_id}} " class="btn btn-danger btn-xs" style="border-radius: 8px;" title="DELETE" onclick="return confirm('Are you sure you want to delete this user?');">
                                    <i class="fa fa-trash-o mr-1"></i>
                                  </a>                                  
                                </td>
              	
              	</tr>
                @endforeach
                @endif

              </tbody>
              <tfoot>
                <tr>
                   <th>#</th>
                  <th>USER ID</th>
                  <th>FULL NAME</th>
                  <!-- <th>IS CLIENT</th> -->
                  <th>SPONSER ID</th>
                  <th>EMAIL</th>
                  <th>INVEST</th>
                  <th>Action</th>
                </tr>
              </tfoot>
            </table>
        </div>
      </div>
    </div>
   
    
   
  </div>
</div>
<!-- Container-fluid Ends-->
        </div>
        </div>


@include('footer')
