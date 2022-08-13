  <div class="footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                Copyright © 2018 Concept. All rights reserved. Dashboard by <a href="https://colorlib.com/wp/">Colorlib</a>. 
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="text-md-right footer-links d-none d-sm-block">
                    <a href="javascript: void(0);">About</a>
                    <a href="javascript: void(0);">Support</a>
                    <a href="javascript: void(0);">Contact Us</a>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

</div>
<!-- jquery 3.3.1  -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script src="https://dixeam.com/cdn/basejs/3.0/base.js"></script>
<!-- bootstap bundle js -->
<script src="{{ asset('/assets/vendor/bootstrap/js/bootstrap.bundle.js') }}"></script>
<!-- slimscroll js -->
<script src="{{ asset('/assets/vendor/slimscroll/jquery.slimscroll.js') }}"></script>
<!-- chart chartist js -->
<script src="{{ asset('/assets/vendor/charts/chartist-bundle/chartist.min.js') }}"></script>
<script src="{{ asset('/assets/vendor/charts/chartist-bundle/Chartistjs.js') }}"></script>
<script src="{{ asset('/assets/vendor/charts/chartist-bundle/chartist-plugin-threshold.js') }}"></script>
<!-- chart C3 js -->
<script src="{{ asset('/assets/vendor/charts/c3charts/c3.min.js') }}"></script>
<script src="{{ asset('/assets/vendor/charts/c3charts/d3-5.4.0.min.js') }}"></script>
<!-- chartjs js -->
<script src="{{ asset('/assets/vendor/charts/charts-bundle/Chart.bundle.js') }}"></script>
<script src="{{ asset('/assets/vendor/charts/charts-bundle/chartjs.js') }}"></script>
<!-- sparkline js -->
<script src="{{ asset('/assets/vendor/charts/sparkline/jquery.sparkline.js') }}"></script>
<!-- dashboard finance js -->

<!-- main js -->
<script src="{{ asset('/assets/libs/js/main-js.js') }}"></script>
<!-- gauge js -->
<script src="{{ asset('/assets/vendor/gauge/gauge.min.js') }}"></script>
<!-- morris js -->
<script src="{{ asset('/assets/vendor/charts/morris-bundle/raphael.min.js') }}"></script>
<script src="{{ asset('/assets/vendor/charts/morris-bundle/morris.js') }}"></script>
<!-- daterangepicker js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.4/moment.min.js"></script>
<script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<div class="modal fade bs-modal-lg" id="data_modal" role="dialog" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-lg all-modals">
        <div class="modal-content"></div>
    </div>
</div>
</body>


<script type="text/javascript">
    $(document).ready( function () {
    $('.datatable').DataTable();
} );
</script>
<script type="text/javascript">
   baseJS.init(
   {
     "site_url": "{{url('/')}}",
     "current_url":"{{URL::current()}}",
     "lang": "en"
 }
 );
   
    $('.editor').summernote({

    });
  
</script>
</html>
