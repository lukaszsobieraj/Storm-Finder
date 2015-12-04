jQuery(document).ready(function () {
    jQuery("input[name = 'direction']").on('click', function () {
        jQuery("input[name = 'result-direction']").show();
    });
    

    jQuery("input[name = 'lightnings']").on('click', function () {
        jQuery(".lightnings").toggle();
    });
    
    jQuery("input[name = 'distance']").on('click', function () {
        jQuery(".distance").toggle();
    });
    
    jQuery("input[name = 'radius']").on('click', function () {
        jQuery(".radius").toggle();
    });
    
    jQuery("input[name = 'period']").on('click', function () {
        jQuery(".period").toggle();
    });

    

});