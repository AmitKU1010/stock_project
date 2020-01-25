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
          <h5>Brokage/Incentive Details</h5>
        </div>
        <div class="card-body">
          <div class="dt-ext table-responsive">
            <table class="display" id="export-button">
              <thead>
                <tr>
                  <th>#</th>
                  <th>USER ID</th>
                  <th>NAME</th>
                  <th>TOTAL BUSSINESS</th>
                  <th>TOTAL INCENTIVE</th>
                </tr>
              </thead>
              <tbody> 
         @php 
         $i=1;
         @endphp
         @if(count($monthwise_incentives) > 0)
         @foreach($monthwise_incentives as $monthwise_incentive)
                	<tr>
                	  <td>{{$i++}}</td>
                    <td><a href="{{url('/')}}/admin/monthwise_incentive/{{ $monthwise_incentive->user_id}}">{{$monthwise_incentive->user_id}}</a></td>
                	  <td>{{$monthwise_incentive->name}}</td>
                    <td>{{$monthwise_incentive->inv}} Rs.</td>
                    <td>{{$monthwise_incentive->inc}} Rs.</td>
                	</tr>
                  @endforeach
                  @endif
 
              </tbody>
              <tfoot>
                <tr>
                   <th>#</th>
                  <th>USER ID</th>
                  <th>NAME</th>
                  <th>TOTAL BUSSINESS</th>
                  <th>TOTAL INCENTIVE</th>
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
