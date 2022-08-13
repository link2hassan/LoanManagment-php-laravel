@include('layouts.components.header')
@include('layouts.components.sidebar')
<div class="dashboard-wrapper">
    <div class="dashboard-finance">
        <div class="container-fluid dashboard-content">
            <!-- ============================================================== -->
            <!-- pageheader  -->
            <!-- ============================================================== -->
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="padding: 0px;">
                 
                  
                </div>
            </div>
        </div>
    </div>
    <div class="yield" style="min-height: 100vh;">
        @yield('content')
    </div>

    @include('layouts.components.footer')
