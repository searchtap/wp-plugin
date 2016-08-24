jQuery(document).ready(function ($) {
    jQuery(function () {
        jQuery("#tabs").tabs();
        jQuery('.handle').click(function () {
            jQuery(this).next('.accordion-section-content').slideToggle();
            var arrow = jQuery(this).find('span');
            if (arrow.hasClass("arrow-down")) {
                jQuery(this).find('span').removeClass("arrow-down");
                jQuery(this).find('span').addClass("arrow-up");
            } else if (jQuery(this).find('span').hasClass("arrow-up")) {
                jQuery(this).find('span').removeClass("arrow-up");
                jQuery(this).find('span').addClass("arrow-down");
            }

        })


//FOR ERMANING THE SAME TAB OPEN AFTER RELOAD
        jQuery(function ($) {
            var index = 'qpsstats-active-tab';
            //  Define friendly data store name
            var dataStore = window.sessionStorage;
            var oldIndex = 0;
            //  Start magic!
            try {
                // getter: Fetch previous value
                oldIndex = dataStore.getItem(index);
            } catch (e) {
            }

            jQuery("#tabs").tabs({
                active: oldIndex,
                activate: function (event, ui) {
                    //  Get future value
                    var newIndex = ui.newTab.parent().children().index(ui.newTab);
                    //  Set future value
                    try {
                        dataStore.setItem(index, newIndex);
                    } catch (e) {
                    }
                }
            });
        });
    });

});




