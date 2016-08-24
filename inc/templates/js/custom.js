jQuery(document).ready(function ($) {
    var style = '\f142';
    jQuery(function () {
        jQuery("#tabs").tabs();
        jQuery('.handle').click(function () {
            jQuery(this).next('.accordion-section-content').slideToggle();
            var arrow = jQuery(this).find('span');
            if (arrow.hasClass("arrow-down")) {
                arrow.removeClass("arrow-down");
                arrow.addClass("arrow-up");
            } else if (arrow.hasClass("arrow-up")) {
                arrow.removeClass("arrow-up");
                arrow.addClass("arrow-down");
            }
        })
    });




    $("#form-tamplate_1").submit(function (event) {
        event.preventDefault();
        var url_valid = validateForm();
        if (url_valid == true) {
            var data = jQuery(this).serialize();
            var data = {
                'action': 'my_action_template_one',
                'template_1': data
            };

            // since 2.8 ajaxurl is always defined in the admin header and points to admin-ajax.php
            jQuery.post(ajaxurl, data, function (response) {
                alert(response);
                return false;
            });
        } else {
            alert("URL not valid");
            return false;
        }

    });
    $("#form-tamplate_2").submit(function (event) {
        event.preventDefault();
        var data = jQuery(this).serialize();
        var data = {
            'action': 'my_action_template_two',
            'template_2': data
        };

        // since 2.8 ajaxurl is always defined in the admin header and points to admin-ajax.php
        jQuery.post(ajaxurl, data, function (response) {
            alert(response);
        });
    });


    function validateForm() {
        var url = jQuery('#siteurl').val();
        var urlregex = new RegExp(
                "^(http:\/\/www.|https:\/\/www.|ftp:\/\/www.|www.){1}([0-9A-Za-z]+\.)");
        return urlregex.test(url);
    }
});





