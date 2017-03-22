<?php /*

<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="//cdn.datatables.net/1.10.9/js/jquery.dataTables.min.js"></script>
<script src="https://code.jquery.com/ui/1.11.3/jquery-ui.min.js"></script>
<script src="{{ url('quickadmin/js') }}/timepicker.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-ui-timepicker-addon/1.4.5/jquery-ui-timepicker-addon.min.js"></script>
<script src="//cdn.ckeditor.com/4.5.4/full/ckeditor.js"></script>
<script src="{{ url('quickadmin/js') }}/bootstrap.min.js"></script>
<script src="{{ url('quickadmin/js') }}/main.js"></script>



<script>

    $('.datepicker').datepicker({
        autoclose: true,
        dateFormat: "{{ config('quickadmin.date_format_jquery') }}"
    });

    $('.datetimepicker').datetimepicker({
        autoclose: true,
        dateFormat: "{{ config('quickadmin.date_format_jquery') }}",
        timeFormat: "{{ config('quickadmin.time_format_jquery') }}"
    });

    $('#datatable').dataTable( {
        "language": {
            "url": "{{ trans('quickadmin::strings.datatable_url_language') }}"
        }
    });

</script>

*/ ?>

 <script src="//cdn.ckeditor.com/4.5.4/full/ckeditor.js"></script>
 
<!-- Javascripts -->
<script src="{{ url('quickadmin/assets') }}/plugins/jquery/jquery-3.1.0.min.js"></script>
<script src="{{ url('quickadmin/assets') }}/plugins/jquery-ui/jquery-ui.min.js"></script>
<script src="{{ url('quickadmin/assets') }}/plugins/pace-master/pace.min.js"></script>
<script src="{{ url('quickadmin/assets') }}/plugins/jquery-blockui/jquery.blockui.js"></script>
<script src="{{ url('quickadmin/assets') }}/plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="{{ url('quickadmin/assets') }}/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<script src="{{ url('quickadmin/assets') }}/plugins/switchery/switchery.min.js"></script>
<script src="{{ url('quickadmin/assets') }}/plugins/uniform/js/jquery.uniform.standalone.js"></script>
<script src="{{ url('quickadmin/assets') }}/plugins/offcanvasmenueffects/js/classie.js"></script>
<script src="{{ url('quickadmin/assets') }}/plugins/waves/waves.min.js"></script>
<script src="{{ url('quickadmin/assets') }}/plugins/3d-bold-navigation/js/main.js"></script>
<script src="{{ url('quickadmin/assets') }}/plugins/waypoints/jquery.waypoints.min.js"></script>
<script src="{{ url('quickadmin/assets') }}/plugins/toastr/toastr.min.js"></script>
<script src="{{ url('quickadmin/assets') }}/plugins/flot/jquery.flot.min.js"></script>
<script src="{{ url('quickadmin/assets') }}/plugins/flot/jquery.flot.time.min.js"></script>
<script src="{{ url('quickadmin/assets') }}/plugins/flot/jquery.flot.symbol.min.js"></script>
<script src="{{ url('quickadmin/assets') }}/plugins/flot/jquery.flot.resize.min.js"></script>
<script src="{{ url('quickadmin/assets') }}/plugins/flot/jquery.flot.tooltip.min.js"></script>
<script src="{{ url('quickadmin/assets') }}/plugins/curvedlines/curvedLines.js"></script>
<script src="{{ url('quickadmin/assets') }}/plugins/chartjs/Chart.bundle.min.js"></script>
<script src="{{ url('quickadmin/assets') }}/js/meteor.min.js"></script>
<script src="{{ url('quickadmin/assets') }}/js/pages/dashboard.js"></script>