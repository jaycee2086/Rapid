///////////////////////////////////////////////////////////////////////////////////////
//////////// Filter Bar ///////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////

(function($) {

	$( "input" ).on( "click", function() {
		// var value;
		// value = $(this).attr('data-value');
		// $( "input:checked" ).attr('data-value',value);

		rpd_start_filtering(1);



	});


})( jQuery );

function rpd_start_filtering(newpage) {
    "use strict";
    jQuery('#grid_view').addClass('icon_selected');
    jQuery('#list_view').removeClass('icon_selected');
    var action, category, city, area, order, ajaxurl,page_id;
    // get action vars
    action = jQuery('#a_filter_action').attr('data-value');
    // get category
    // category = jQuery('.rpd_category:checked').attr('data-value');
   
                
    // category = jQuery('.rpd_category:checked').map(function() {
    // 				return jQuery(this).attr('data-value');
    // 			}).get()
                

   
     category = []
                jQuery('.rpd_category:checked').each(function() {
                    category.push(jQuery(this).attr('data-value'));
                });
      // category = {}
      //           jQuery('.rpd_category:checked').each(function() {
      //               category.push(jQuery(this).attr('data-value'));
      //           });

    // get city
    city = jQuery('#a_filter_cities').attr('data-value');
    // get area
    area = jQuery('#a_filter_areas').attr('data-value');
    // get order
    order = jQuery('#a_filter_order').attr('data-value');
    ajaxurl =  ajaxcalls_vars.admin_url + 'admin-ajax.php';
    page_id =   jQuery('#page_idx').val();
    
    jQuery('#listing_ajax_container').empty();
    jQuery('#listing_loader').show();
 
 

    jQuery.ajax({
        type: 'POST',
        url: ajaxurl,
        // dataType: 'json',
        traditional: true,
        data: {
            'action'            :   'ajax_filter_listings',
            'action_values'     :   action,
            'category_values'   :   category,
            'city'              :   city,
            'area'              :   area,
            'order'             :   order,
            'newpage'           :   newpage,
            'page_id'           :   page_id
        },
        success: function (data) {
            jQuery('#listing_loader').hide();
            jQuery('#listing_ajax_container').empty().append(data);
            jQuery('.pagination_nojax').hide();
            restart_js_after_ajax();

        },
        error: function (errorThrown) {

        }
    });//end ajax


    console.log(category);
}