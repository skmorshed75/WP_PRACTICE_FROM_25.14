<?php
//Class 25.2
//Class 25.7
require_once get_theme_file_path("/lib/csf/cs-framework.php");
require_once get_theme_file_path("/inc/metaboxes/section.php");
//Class 25.14
require_once get_theme_file_path("/inc/metaboxes/recipe.php");
require_once get_theme_file_path("/inc/metaboxes/page.php");
//Class 25.9
require_once get_theme_file_path("/inc/metaboxes/section-banner.php");
//Class 25.10
require_once get_theme_file_path("/inc/metaboxes/section-featured.php");
//Class 25.11
require_once get_theme_file_path("/inc/metaboxes/section-gallery.php");
//Class 25.12
require_once get_theme_file_path("/inc/metaboxes/section-chef.php");
//Class 25.13
require_once get_theme_file_path("/inc/metaboxes/section-services.php");
//Class 25.14
require_once get_theme_file_path("/inc/metaboxes/taxonomy-featured.php");

define('CS_ACTIVE_FRAMEWORK', false);
define('CS_ACTIVE_METABOX', true);
define('CS_ACTIVE_TAXONOMY', true);
define('CS_ACTIVE_SHORTCODE', false);
define('CS_ACTIVE_CUSTOMIZE', false);

//End Class 25.7
//echo site_url();
if(site_url() == "http://hellodolly.local"){
    define("VERSION", time());
} else {
    define("VERSION", wp_get_theme()->get("Version"));
}
function meal_theme_setup(){    
    load_theme_textdomain('meal', get_template_directory()."/languages");
    //Create a directory LANGUAGES in meal folder
    add_theme_support('post-thumbnails');
    add_theme_support('title-tags');
    add_theme_support('automatic-feed-links');
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'gallery',
        'caption',
        'comment-list'    
    ));
    add_theme_support('custom-logo');
    
    //Class 25.22
    register_nav_menu('primary',__('Main Menu Meal','meal'));
    //End of Class 25.22
}
add_action('after_setup_theme','meal_theme_setup');


function meal_theme_assets(){
    //FONTS
    wp_enqueue_style('meal-fonts','//fonts.googleapis.com/css?family=Playfair+Display:300,400,700,800|Open+Sans:300,400,700"');
    wp_enqueue_style('ionicons',get_theme_file_uri('/assets/fonts/ionicons/css/ionicons.min.css'), null, 1.0);
    wp_enqueue_style('fontawesome',get_theme_file_uri('/assets/fonts/fontawesome/css/font-awesome.min.css'),null, 1.0);
    wp_enqueue_style('flaticon',get_theme_file_uri('/assets/fonts/flaticon/font/flaticon.css'),null, 1.0);
    
    //CSS FILES
    wp_enqueue_style('bootstrap-css',get_theme_file_uri('/assets/css/bootstrap.css'),null,1.0);
    wp_enqueue_style('animate-css',get_theme_file_uri('/assets/css/animate.css'),null,1.0);
    wp_enqueue_style('owl.carousel.min.css',get_theme_file_uri('/assets/css/owl.carousel.min.css'),null, 1.0);
    wp_enqueue_style('magnific-popup-css',get_theme_file_uri('/assets/css/magnific-popup.css'),null, 1.0);
    wp_enqueue_style('aos-css',get_theme_file_uri('/assets/css/aos.css'),null,1.0);
    wp_enqueue_style('boostrap-datepicker-css',get_theme_file_uri('/assets/css/bootstrap-datepicker.css'),null,1.0);
    wp_enqueue_style('timepicker-css',get_theme_file_uri('/assets/css/jquery.timepicker.css'),null, 1.0);
    wp_enqueue_style('meal-portfolio-css',get_theme_file_uri('/assets/css/portfolio.css'),null, 1.0);
    wp_enqueue_style('meal-style-css', get_theme_file_uri('/assets/css/style.css'),null, 1.0);
    wp_enqueue_style('meal-stylesheet',get_stylesheet_uri(),null, VERSION);
    
    //JS FILES
    wp_enqueue_script('popper-js',get_theme_file_uri('/assets/js/popper.min.js'),array('jquery'),1.0, true); 
    wp_enqueue_script('bootstrap-js',get_theme_file_uri('/assets/js/bootstrap.min.js'),array('jquery'),1.0, true);    
    wp_enqueue_script('owl-carousel-js',get_theme_file_uri('/assets/js/owl.carousel.min.js'),array('jquery'), 1.0, true);
    wp_enqueue_script('waypoints-js',get_theme_file_uri('/assets/js/jquery.waypoints.min.js'),array('jquery'), 1.0, true);
    wp_enqueue_script('magnific-popup-js',get_theme_file_uri('/assets/js/jquery.magnific-popup.min.js'),array('jquery'), 1.0, true);    
    wp_enqueue_script('magnific-popup-options-js',get_theme_file_uri('/assets/js/magnific-popup-options.js'),array('jquery'), 1.0, true);
    wp_enqueue_script('bootstrap-datepicker-js',get_theme_file_uri('/assets/js/bootstrap-datepicker.js'),array('jquery'), 1.0, true);
    wp_enqueue_script('timepicker-js',get_theme_file_uri('/assets/js/jquery.timepicker.min.js'),array('jquery'), 1.0, true);
    wp_enqueue_script('stellar-js',get_theme_file_uri('/assets/js/jquery.stellar.min.js'),array('jquery'), 1.0, true);    
    wp_enqueue_script('easing-js',get_theme_file_uri('/assets/js/jquery.easing.1.3.js'),array('jquery'), 1.0, true);
    wp_enqueue_script('aos-js', get_theme_file_uri('/assets/js/aos.js'),array('jquery'),1.0, true);    
    wp_enqueue_script('meal-maps','//maps.googleapis.com/maps/api/js?key=AIzaSyCjEmNUSFM03ofZueAyft6pMa9U7u7d1rU',null, 1.0, true);
    
    wp_enqueue_script('imagesloaded-js',get_theme_file_uri('/assets/js/imagesloaded.js'),array('jquery'), 1.0, true);
    wp_enqueue_script('isotope-pkgd-js',get_theme_file_uri('/assets/js/isotope.pkgd.min.js'),array('jquery'), 1.0, true);
    wp_enqueue_script('isotope-js',get_theme_file_uri('/assets/js/jquery.isotope.js'),array('jquery'), 1.0, true);
    wp_enqueue_script('portfolio-js',get_theme_file_uri('/assets/js/portfolio.js'),array('jquery','imagesloaded-js','magnific-popup-options-js','isotope-js','isotope-pkgd-js'), VERSION, true);
    wp_enqueue_script('meal-main-js',get_theme_file_uri('/assets/js/main.js'),array('jquery'), VERSION, true);    
    //Class 25.15
    
    
    if(is_page_template('page-templates/landing.php')){        
        wp_enqueue_script("meal-reservation-js",get_theme_file_uri("/assets/js/reservation.js"),array('jquery'),'1.0',true);
    	$ajaxurl = admin_url("admin-ajax.php");
    	wp_localize_script("meal-reservation-js", "mealurl",array("ajaxurl" => $ajaxurl));        
    }
}
add_action('wp_enqueue_scripts','meal_theme_assets');


//Class 25.7, 25.14
function meal_codestar_init(){
    CSFramework_Metabox::instance(array());
    CSFramework_Taxonomy::instance(array());
}
add_action('init','meal_codestar_init');


//End Class 25.7
//Class 25.10 featured.php
function get_recipe_category($recipe_id){
    $terms = wp_get_post_terms($recipe_id,"category");
    if($terms){
        $first_term = array_shift($terms);
        return $first_term->name;
    }
    return "Food";
}


//End of Class 25.10
//Class 25.15
function meal_process_reservation(){
	if (check_ajax_referer('reservation', 'rn')) {
		$name = sanitize_text_field($_POST['name']);
		$email = sanitize_text_field($_POST['email']);
		$phone = sanitize_text_field($_POST['phone']);
		$persons = sanitize_text_field($_POST['persons']);
		$date = sanitize_text_field($_POST['date']);
		$time = sanitize_text_field($_POST['time']);

		$data = array(
			'name' => $name,
			'email' => $email,
			'phone' => $phone,
			'persons' => $persons,
			'date' => $date,
			'time' => $time,

		);

		$reservation_arguments = array(
			'post_type' => 'reservation',
			'post_author' => 1,
			'post_date' => date('Y-m-d H:i:s'),
			'post_status' => 'publish',
			'post_title' => sprintf('%s - Reservation for %s persons on %s - %s',$name,$persons,$date." : ".$time,$email),
			'meta_input' => $data
		);

		$reservations = new WP_Query(array(
			'post_type' => 'reservation',
			'post_status' => 'publish',
			'meta_query' => array(
				'relation' => 'AND',
				'email_check' => array(
					'key' => 'email',
					'value' => $email
				),
				'date_check' => array(
					'key' => 'date',
					'value' => $date
				),
				'time_check' => array(
					'key' => 'time',
					'value' => $time
				)
			)
		));
		if ($reservations->found_posts > 0) {
			echo 'Duplicate';
		}else {
			$wp_error = '';
			$reservation_id = wp_insert_post( $reservation_arguments,$wp_error );

			// transient check start
			$reservation_count = get_transient( 'res_count' )?get_transient( 'res_count' ):0;
			// transient check end   

			if (!$wp_error) {
				$reservation_count++;
				set_transient('res_count',$reservation_count,0);
				$_name = explode(" ",$name);
				$order_data = array(
					'first_name' => $_name[0],
					'last_name' => isset($_name[1])?$_name[1] : '',
					'email' => $email,
					'phone' => $phone,
				);
				$order = wc_create_order();
				$order->set_address($order_data);
				$order->add_product(wc_get_product(530),1);
				$order->set_customer_note($reservation_id);
				$order->calculate_totals();

				add_post_meta($reservation_id, 'order_id', $order->get_id());

				echo $order->get_checkout_payment_url();
			}
		}

	}else {
		echo 'Not allowed';
	}

	die();
}
add_action('wp_ajax_reservation','meal_process_reservation');
add_action('wp_ajax_nopriv_reservation','meal_process_reservation');
//end Class 25.15

//Class 25.18
function meal_checkout_fields($fields){
    //remove billing fields
    unset($fields['billing']['billing_company']);
    unset($fields['billing']['billing_address_1']);
    unset($fields['billing']['billing_address_2']);
    unset($fields['billing']['billing_city']);
    unset($fields['billing']['billing_postcode']);
    unset($fields['billing']['billing_country']);
    unset($fields['billing']['billing_state']);
    
    //remove shipping fields
    unset($fields['shipping']['shipping_first_name']);
    unset($fields['shipping']['shipping_last_name']);
    unset($fields['shipping']['shipping_company']);
    unset($fields['shipping']['shipping_address_1']);
    unset($fields['shipping']['shipping_address_2']);
    unset($fields['shipping']['shipping_city']);
    unset($fields['shipping']['shipping_postcode']);
    unset($fields['shipping']['shipping_country']);
    unset($fields['shipping']['shipping_state']);
    
    //remove order comments
    unset($fields['order']['order_comments']);
    
    return $fields;
}
add_filter('woocommerce_checkout_fields','meal_checkout_fields');

function meal_order_status_processing($order_id){
    $order = wc_get_order($order_id);
    $reservation_id = $order->get_customer_note();
    if($reservation_id){
        $reservation = get_post($reservation_id);
        wp_update_post(array(
            'ID' => $reservation_id,
            'post_title' => "[PAID] - ".$reservation->post_title
        ));
        add_post_meta($reservation_id, 'paid', 1);
    }
    
}
add_filter('woocommerce_order_status_processing','meal_order_status_processing');
//End of Class 25.18

//Class 25.20
function meal_change_menu($menu){
    /*
    echo '<pre>';
    print_r($menu);
    echo '</pre>';
    die();
    */
    
    /*
    $menu[5][0] = "Reservation WOW";
    return $menu;
    */
    
    // transient check start
    $reservation_count = get_transient( 'res_count' )?get_transient( 'res_count' ):0;
    // transient check end
    //$reservation_count = 0;
    
    if($reservation_count > 0){
        $menu[5][0] = "Reservation <span class='awaiting-mod'>{$reservation_count}</span>";   
    }
    return $menu;
    
}
add_filter('add_menu_classes','meal_change_menu');
//End of Class 25.20

function meal_admin_scripts($screen){
    $_screen = get_current_screen();
    if('edit.php' == $screen && 'reservation' == $_screen->post_type){
        //die('OnSpot');
        delete_transient('res_count');
    }
}
add_filter('admin_enqueue_scripts','meal_admin_scripts');