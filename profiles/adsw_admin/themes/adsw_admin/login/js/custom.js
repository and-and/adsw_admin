<!-- For Initializing Checkbox And Focus Event For Textbox -->
Drupal.behaviors.loginFormFocus = {
    attach: function (context, settings) {
        jQuery("input", context).iCheck({
            checkboxClass: 'icheckbox_square-blue',
            increaseArea: '20%'
        });


        //Custom Checkbox For Dark Theme
        jQuery(".dark input", context).iCheck({
            checkboxClass: 'icheckbox_polaris',
            increaseArea: '20%'
        });


        //TextBox Focus Event
        jQuery(".form-control", context).focus(function () {
            jQuery(this).closest(".textbox-wrap").addClass("focused");
        }).blur(function () {
            jQuery(this).closest(".textbox-wrap").removeClass("focused");
        });

    }
}

