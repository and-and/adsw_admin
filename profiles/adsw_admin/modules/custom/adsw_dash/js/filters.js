jQuery(document).ready(function(){
    jQuery('#data_5 .input-daterange').datepicker({
        keyboardNavigation: false,
        forceParse: false,
        autoclose: true,
        format: 'yyyy-mm-dd',
    });
    jQuery('.select-filter-type label').click(function(){
        jQuery(this).find('input').attr('checked', 'checked');
    });
    jQuery('.select-filter-type label input:checked').parents('label').click();
});
