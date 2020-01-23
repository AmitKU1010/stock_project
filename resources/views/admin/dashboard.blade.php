 @include('header')
@include('sidebar')  
<!-- Right sidebar Start-->
        <div class="page-body">
          <!-- breadcrumb  Start -->
@include('links')               
          <!-- End Breadcrumb -->
          <!-- Container-fluid starts-->
<div class="container-fluid">
  <div class="row">
    <div class="col-xl-8 xl-100">
      <div class="row">
        <div class="col-md-4">
          <div class="card">
            <div class="card-body">
              <div class="chart-widget-dashboard">
                <div class="media">
                  <div class="media-body">
                    <h5 class="mt-0 mb-0 f-w-600"><i data-feather="dollar-sign"></i><span class="counter">5789</span></h5>
                    <p>Total Visits</p>
                  </div><i data-feather="tag"></i>
                </div>
                <div class="dashboard-chart-container">
                  <div class="small-chart-gradient-1"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <div class="card-body">
              <div class="chart-widget-dashboard">
                <div class="media">
                  <div class="media-body">
                    <h5 class="mt-0 mb-0 f-w-600"><i data-feather="dollar-sign"></i><span class="counter">4986</span></h5>
                    <p>Total Sale</p>
                  </div><i data-feather="shopping-cart"></i>
                </div>
                <div class="dashboard-chart-container">
                  <div class="small-chart-gradient-2"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <div class="card-body">
              <div class="chart-widget-dashboard">
                <div class="media">
                  <div class="media-body">
                    <h5 class="mt-0 mb-0 f-w-600"><i data-feather="dollar-sign"></i><span class="counter">8568</span></h5>
                    <p>Total Value</p>
                  </div><i data-feather="sun"></i>
                </div>
                <div class="dashboard-chart-container">
                  <div class="small-chart-gradient-3"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
        <h1 style="text-align: center;">Welcome Admin :  {{Auth()->user()->name}} </h1>

</div>
<!-- Container-fluid Ends-->
        </div>

@include('footer')
