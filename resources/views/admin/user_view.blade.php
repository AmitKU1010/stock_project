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
          <h5>User Details</h5>
        </div>
        <div class="card-body">
          <div class="dt-ext table-responsive">
            <table class="display" id="export-button">
              <thead>
                <tr>
                  <th>#</th>
                  <th>USER ID</th>
                  <th>MEM. TYPE</th>
                  <th>SPONSER ID</th>
                  <th>EMAIL</th>
                  <th>PH NO.</th>
                  <th>PAN NO.</th>
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
              		<td><a href="{{url('/')}}/edit_profile{{ $user->user_id}}">{{$user->user_id}}</a></td>
                  <td>{{$user->name}}</td>
              		<td>{{$user->sponser_id }}</td>
              		<td>{{$user->email}}</td>
                  <td>{{$user->phone_no}}</td> 
                  <td>{{$user->pan_no}}</td>
                  <td>{{$user->investment}}</td>
              		<td>
                                  <a href="" class="btn btn-primary btn-xs" style="border-radius: 8px;" title="EDIT">
                                    <i class="fa fa-pencil mr-1"></i>
                                                                        
                                  </a>

                                  <a href="{{ url('/')}}/userview/destroy/{{ $user->id}} " class="btn btn-danger btn-xs" style="border-radius: 8px;" title="DELETE" onclick="return confirm('Are you sure you want to delete this user?');">
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
                  <th>MEM. TYPE</th>
                  <th>SPONSER ID</th>
                  <th>EMAIL</th>
                  <th>PH NO.</th>
                  <th>PAN NO.</th>
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
