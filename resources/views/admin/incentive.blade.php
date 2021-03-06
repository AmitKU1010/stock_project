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
              <th>PAY OUT</th>
              <th>STATUS</th>

                </tr>
              </thead>
              <tbody> 
         @php 
         $i=1;
         @endphp
         @if(count($incentives) > 0)
         @foreach($incentives as $incentive)
                	<tr>
                	  <td>{{$i++}}</td>
                    <td><a href="{{url('/')}}/admin/monthwise_incentive/{{ $incentive->user_id}}">{{$incentive->user_id}}</a></td>
                	  <td>{{$incentive->name}}</td>
                    <td>{{$incentive->inv}} Rs.</td>
                    <td>{{$incentive->inc}} Rs.</td>
                    <td>0 Rs.</td>
                    <td>HOLD</td>
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
                   <th>PAY OUT</th>
                  <th>STATUS</th>
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
