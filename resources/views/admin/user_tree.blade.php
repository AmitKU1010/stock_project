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
                  <!-- <th>PHONE NO</th> -->
                  <th>SPONSER ID</th>
                  <!-- <th>STATE</th> -->
                  <th>STATUS</th>
                  <th>KYC</th>
                  <th>INVEST</th>
                  <th>IS ASSOCIATE</th>
                  <th>IS CLIENT</th>
                  <th>ACTION</th>
                </tr>
              </thead>
              <tbody>
       @php
       $i=1; 
       @endphp
  
       @foreach($user_trees as $user_tree)
              	<tr>
              		<td>{{$i++}}</td>
              		<td><a href="{{url('/')}}/admin/edit_profile/{{ $user_tree->user_id}}">{{$user_tree->user_id}}</a></td>
                  <td>{{$user_tree->name }}</td>
              		<!-- <td>{{$user_tree->phone_no }}</td> -->
                  <td>{{$user_tree->sponser_id }}</td>
                  <!-- <td>{{$user_tree->state }}</td> -->
              		<td>ACTIVE</td>
                  <td>APPROVED</td>
                  <td>{{$user_tree->investment }}</td>
                  @php
                  if($user_tree->is_associate==2)
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

                   @php
                  if($user_tree->is_client==3)
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


              		<td>
                                   
                                  <a href="{{url('/')}}/admin/show_user_tree/{{ $user_tree->user_id}}" class="btn btn-primary btn-xs" id="createNew" style="border-radius: 8px;" title="SHOW USER TREE">
                                    <i class="fa fa-user-circle"></i>
                                  </a>                                 
                                </td>
              	
              	</tr>
                @endforeach

              </tbody>
              <tfoot>
                <tr>
                  <th>#</th>
                  <th>USER ID</th>
                  <th>FULL NAME</th>
                  <!-- <th>PHONE NO</th> -->
                  <th>SPONSER ID</th>
                  <!-- <th>STATE</th> -->
                  <th>STATUS</th>
                  <th>KYC</th>
                  <th>INVEST</th>
                  <th>IS ASSOCIATE</th>
                  <th>IS CLIENT</th>
                  <th>ACTION</th>

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
