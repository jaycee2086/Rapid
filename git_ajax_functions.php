<?php

if( !function_exists('ajax_filter_listings') ):
    
    function ajax_filter_listings(){
        wp_suspend_cache_addition(true);
   
     
        global $currency;
        global $where_currency;
        global $post;
        global $options;
        global $prop_unit;
        global $property_unit_slider;
        global $no_listins_per_row;
        global $wpestate_uset_unit;
        global $custom_unit_structure;
        
        $custom_unit_structure    =   get_option('wpestate_property_unit_structure');        
        $wpestate_uset_unit       =   intval ( get_option('wpestate_uset_unit','') );
        $current_user             =   wp_get_current_user();
        $userID                   =   $current_user->ID;
        $user_option              =   'favorites'.$userID;
        $curent_fav               =   get_option($user_option);
        $currency                 =   esc_html( get_option('wp_estate_currency_symbol', '') );
        $where_currency           =   esc_html( get_option('wp_estate_where_currency_symbol', '') );
        $area_array               =   '';   
        $city_array               =   '';
        $action_array             =   '';
        $categ_array              =   '';
        $show_compare             =   1;
        $property_unit_slider     =   get_option('wp_estate_prop_list_slider','');
        $no_listins_per_row       =   intval( get_option('wp_estate_listings_per_row', '') );
       
        $options                  =   wpestate_page_details(intval($_POST['page_id']));
        
        
        
        $prop_unit          =   esc_html ( get_option('wp_estate_prop_unit','') );
        $prop_unit_class    =   '';
        if($prop_unit=='list'){
            $prop_unit_class="ajax12";
        }



        //////////////////////////////////////////////////////////////////////////////////////
        ///// category filters 
        //////////////////////////////////////////////////////////////////////////////////////
        $allowed_html   =   array();
        if (isset($_POST['category_values']) && trim($_POST['category_values']) != 'All Types' && $_POST['category_values']!=''&& $_POST['category_values']!='all' && $_POST['category_values']!='all-types'){
            $taxcateg_include   =   sanitize_title ( wp_kses(  $_POST['category_values'],$allowed_html  ) );
            $categ_array=array(
                'taxonomy' => 'property_category',
                'field' => 'slug',
                'terms' => $taxcateg_include
            );
        }
         
     