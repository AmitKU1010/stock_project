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
                  <th>FOR WHOM</th>
                  <th>USER ID</th>
                  <th>NAME</th>
                  <th>TOTAL INCENTIVE</th>
                  <th>PAY OUT</th>
                </tr>
              </thead> 
              <tbody>  
         @php 
         $i=1;
         @endphp
         @if(count($monthwise_incentive_details) > 0)
         @foreach($monthwise_incentive_details as $monthwise_incentive_detail)
                	<tr>
                	  <td>{{$i++}}</td>
                    <td>{{$monthwise_incentive_detail->for_whom}}</a></td>
                    <td>{{$monthwise_incentive_detail->user_id}}</a></td>
                	  <td>{{$monthwise_incentive_detail->name}}</td>

               
                    <td>{{$monthwise_incentive_detail->incentive}} Rs.</td>
                    <td>100%</td>

                	</tr>
                  @endforeach
                  @endif
  
              </tbody>
              <tfoot>
                <tr>
                 <th>#</th>
                  <th>FOR WHOM</th>
                  <th>USER ID</th>
                  <th>NAME</th>
                  <th>TOTAL INCENTIVE</th>
                  <th>PAY OUT</th>
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
