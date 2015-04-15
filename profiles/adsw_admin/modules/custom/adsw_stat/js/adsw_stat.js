Drupal.behaviors.statDatePickerAdmin = {
    attach: function(context) {
        jQuery('.form-item-date input', context).datepicker({dateFormat:'yy-mm-dd'});
    }
}
