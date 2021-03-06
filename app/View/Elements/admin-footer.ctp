
</div><!-- End #wrapper -->  
<?php
echo $this->Html->script(
        array(
            'jquery.min1',
            'bootstrap/bootstrap',
            'jquery.cookie',
            'jquery.mousewheel',
            '/plugins/charts/sparkline/jquery.sparkline.min.js',
            '/plugins/charts/flot/jquery.flot',
            '/plugins/charts/flot/jquery.flot.grow',
            '/plugins/charts/flot/jquery.flot.pie',
            '/plugins/charts/flot/jquery.flot.resize',
            '/plugins/charts/flot/jquery.flot.tooltip_0.4.4',
            '/plugins/charts/flot/jquery.flot.orderBars.js',
            '/plugins/charts/sparkline/jquery.sparkline.min',
            '/plugins/charts/knob/jquery.knob',
            '/plugins/misc/fullcalendar/fullcalendar.min',
            '/plugins/misc/qtip/jquery.qtip.min',
            '/plugins/misc/totop/jquery.ui.totop.min',
            '/plugins/misc/search/tipuesearch_set',
            '/plugins/misc/search/tipuesearch_data',
            '/plugins/misc/search/tipuesearch',
            '/plugins/forms/select/select2.min',
            '/plugins/forms/validate/jquery.validate.min',
            '/plugins/tables/dataTables/jquery.dataTables.min',
            '/plugins/tables/responsive-tables/responsive-tables',
            '/plugins/forms/watermark/jquery.watermark.min',
            '/plugins/forms/elastic/jquery.elastic',
            '/plugins/forms/inputlimiter/jquery.inputlimiter.1.3.min',
            '/plugins/forms/maskedinput/jquery.maskedinput-1.3.min',
            '/plugins/forms/togglebutton/jquery.toggle.buttons',
            '/plugins/forms/uniform/jquery.uniform.min',
            '/plugins/forms/globalize/globalize',
            '/plugins/forms/color-picker/colorpicker',
            '/plugins/forms/timeentry/jquery.timeentry.min',
            '/plugins/forms/select/select2.min',
            '/plugins/forms/dualselect/jquery.dualListBox-1.3.min',
            '/plugins/forms/tiny_mce/jquery.tinymce',
            '/plugins/forms/smartWizzard/jquery.smartWizard-2.0.min',
            '/plugins/fix/ios-fix/ios-orientationchange-fix',
            'jquery-ui.min',
            '/supr-theme/jquery-ui-timepicker-addon',
            '/supr-theme/jquery-ui-sliderAccess',
            '/plugins/fix/touch-punch/jquery.ui.touch-punch.min',
            'main',
            'custom.form.validation',
            'forms',
            'datatable',
            'form-validation',
            'dashboard',
            
            // datepicker range
            
            '/jquery-ui-daterangepicker-0.4.3/jquery-ui',
            '/jquery-ui-daterangepicker-0.4.3/moment.min',
            '/jquery-ui-daterangepicker-0.4.3/jquery.comiseo.daterangepicker',
        )
);
?>

<script>
    $(function() { $("#e1").daterangepicker(); });
     $("#e2").daterangepicker({
     presetRanges: [{
         text: 'Today',
         dateStart: function() { return moment() },
         dateEnd: function() { return moment() }
     }, {
         text: 'Tomorrow',
         dateStart: function() { return moment().add('days', 1) },
         dateEnd: function() { return moment().add('days', 1) }
     }, {
         text: 'Next 7 Days',
         dateStart: function() { return moment() },
         dateEnd: function() { return moment().add('days', 6) }
     }, {
         text: 'Next Week',
         dateStart: function() { return moment().add('weeks', 1).startOf('week') },
         dateEnd: function() { return moment().add('weeks', 1).endOf('week') }
     }],
     applyOnMenuSelect: false,
     datepickerOptions: {
         maxDate: null
     }
 });
</script>

<!-- TinyMCE -->

<!-- Fix plugins -->
<!-- Important Place before main.js  -->   
<!-- Unable touch for JQueryUI -->

<!-- Form plugins --> 
<!-- /TinyMCE -->
</body>
</html>
