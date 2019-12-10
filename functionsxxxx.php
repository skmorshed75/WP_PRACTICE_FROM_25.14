<?php

require_once get_theme_file_path('/lib/csf/cs-framework.php'); 
require_once get_theme_file_path('/inc/metaboxes/section.php');
require_once get_theme_file_path('/inc/metaboxes/recipe.php');
require_once get_theme_file_path('/inc/metaboxes/page.php');
require_once get_theme_file_path('/inc/metaboxes/pricing.php');
require_once get_theme_file_path('/inc/metaboxes/section-banner.php');
require_once get_theme_file_path('/inc/metaboxes/section-featured.php');
require_once get_theme_file_path('/inc/metaboxes/section-gallery.php');
require_once get_theme_file_path('/inc/metaboxes/section-chef.php');
require_once get_theme_file_path('/inc/metaboxes/section-services.php');
require_once get_theme_file_path('/inc/metaboxes/taxomomy-featured.php');


define( 'CS_ACTIVE_FRAMEWORK',   false  ); // default true
define( 'CS_ACTIVE_METABOX',     true ); // default true
define( 'CS_ACTIVE_TAXONOMY',    true ); // default true
define( 'CS_ACTIVE_SHORTCODE',   false ); // default true
define( 'CS_ACTIVE_CUSTOMIZE',   false ); // default true 


function meal_theme_setup(){
	load_theme_textdomain( 'meal', get_template_directory().'/languages' );
	add_theme_support('post-thumbnails');
	add_theme_support('title-tag');
	add_theme_support('automatic-feed-links');

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		)
	);

	/**
	 * Add support for core custom logo.
	 *
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 190,
			'width'       => 190,
			'flex-width'  => false,
			'flex-height' => false,
		)
	);

	// Register a menu
	register_nav_menu( 'primary', __('Main Menu','meal') );
}

add_action( 'after_setup_theme','meal_theme_setup' );



// Assets
function meal_assets(){
	//CSS assets
	wp_enqueue_style('fonts-css','//fonts.googleapis.com/css?family=Playfair+Display:300,400,700,800|Open+Sans:300,400,700',null,'1.0');
	wp_enqueue_style('bootstrap-css',get_template_directory_uri().'/assets/css/bootstrap.css',null,'1.0');
	wp_enqueue_style('animate-css',get_template_directory_uri().'/assets/css/animate.css',null,'1.0');
	wp_enqueue_style('owl.carousel-css',get_template_directory_uri().'/assets/css/owl.carousel.min.css',null,'1.0');
	// wp_enqueue_style('magnific-popup-css',get_template_directory_uri().'/assets/css/magnific-popup.css',null,'1.0');
	wp_enqueue_style('aos-css',get_template_directory_uri().'/assets/css/aos.css',null,'1.0');
	wp_enqueue_style('bootstrap-datepicker-css',get_template_directory_uri().'/assets/css/bootstrap-datepicker.css',null,'1.0');
	wp_enqueue_style('jquery.timepicker-css',get_template_directory_uri().'/assets/css/jquery.timepicker.css',null,'1.0');
	wp_enqueue_style('ionicons-css',get_theme_file_uri().'/assets/fonts/ionicons/css/ionicons.min.css',null,'1.0');
	wp_enqueue_style('fontawesome-css',get_theme_file_uri().'/assets/fonts/fontawesome/css/font-awesome.min.css',null,'1.0');
	wp_enqueue_style('flaticon-css',get_theme_file_uri().'/assets/fonts/flaticon/font/flaticon.css',null,'1.0');

	// wp_enqueue_script("meal-bootstrapcdn-css","//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css",null,'1.11.1');

	wp_enqueue_style('meal-style-css',get_template_directory_uri().'/assets/css/style.css',null,'1.0');
	wp_enqueue_style('meal-portfioio-css',get_template_directory_uri().'/assets/css/portfioio.css',null,'1.0');
	wp_enqueue_style('meal-style',get_stylesheet_uri());



	//JS enqueue assets
    wp_enqueue_script("popper-js",get_theme_file_uri("/assets/js/popper.min.js"),array('jquery'),'1.0',true);
    wp_enqueue_script("bootstrap-js",get_theme_file_uri("/assets/js/bootstrap.min.js"),array('jquery'),'1.0',true);
    wp_enqueue_script("owl.carousel-js",get_theme_file_uri("/assets/js/owl.carousel.min.js"),array('jquery'),'1.0',true);
    wp_enqueue_script("jquery.waypoints-js",get_theme_file_uri("/assets/js/jquery.waypoints.min.js"),array('jquery'),'1.0',true);

    wp_enqueue_script("jquery.magnific-popup-js",get_theme_file_uri("/assets/js/jquery.magnific-popup.min.js"),array('jquery'),'1.3',true);
    // wp_enqueue_script("jquery.magnific-popup-options-js",get_theme_file_uri("/assets/js/magnific-popup-options.js"),array('jquery'),'1.3',true);
    wp_enqueue_script("bootstrap-datepicker-js",get_theme_file_uri("/assets/js/bootstrap-datepicker.js"),array('jquery'),'1.0',true);
    wp_enqueue_script("jquery-timepicker-js",get_theme_file_uri("/assets/js/jquery.timepicker.min.js"),array('jquery'),'1.0',true);
    wp_enqueue_script("jquery-stellar-js",get_theme_file_uri("/assets/js/jquery.stellar.min.js"),array('jquery'),'1.0',true);
    wp_enqueue_script("jquery-easing-js",get_theme_file_uri("/assets/js/jquery.easing.1.3.js"),array('jquery'),'1.3',true);
    wp_enqueue_script("aos-js",get_theme_file_uri("/assets/js/aos.js"),array('jquery'),'1.0',true);

    // isotop internel file link
    wp_enqueue_script("isotope-js",get_theme_file_uri("/assets/js/isotope-3.0.6.pkgd.min.js"),array('jquery'),'1.0',true);
    /*isotop externel file link
    wp_enqueue_script("isotope-js",'https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js',array('jquery'));*/

    // Google map
    wp_enqueue_script("google-map-js",'//maps.googleapis.com/maps/api/js?key=AIzaSyDPUMolq8BwAX00VnlQQy2ko-D6JEOGIz0',null,'1.0',true);
    
    wp_enqueue_script("magnific-popup-options-js",get_theme_file_uri("/assets/js/magnific-popup-options.js"),array('jquery'),'1.0',true);


    
    wp_enqueue_script("meal-bootstrapcdn-js","//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js",array('jquery'),null,'3.3.0',true);
    
    // wp_enqueue_script("meal-jquery-js","//code.jquery.com/jquery-1.11.1.min.js",null,'1.11.1',true);


    


    if (is_page_template( "page-templates/landing.php" )) {
    	// Reservation Form Js and ajax
    	wp_enqueue_script("meal-reservation-js",get_theme_file_uri("/assets/js/reservation.js"),array('jquery'),'1.0',true);
    	$ajaxurl = admin_url("admin-ajax.php");
    	wp_localize_script("meal-reservation-js", "mealurl",array("ajaxurl" => $ajaxurl));

    	// Contact Form Js and ajax
    	wp_enqueue_script("meal-contact-js",get_theme_file_uri("/assets/js/contact.js"),array('jquery'),'1.0',true);
    	wp_localize_script("meal-contact-js", "mealurl",array("ajaxurl" => $ajaxurl));


    	wp_enqueue_script("meal-portfolio-js",get_theme_file_uri("/assets/js/portfolio.js"),array('jquery'),'1.0',true);
    	wp_localize_script("meal-portfolio-js", "mealurl",array("ajaxurl" => $ajaxurl));
    }

    wp_enqueue_script("meal-loadmore-js",get_theme_file_uri("/assets/js/loadmore.js"),array('jquery'),'1.0',true);
    wp_enqueue_script("meal-main-js",get_theme_file_uri("/assets/js/main.js"),array('jquery'),'1.0',true);
}
add_action('wp_enqueue_scripts','meal_assets');


/*Google Api key
==== AIzaSyCpQvmRnDaLqPs9nn3o7p3dPts7FBp5HMA ====*/



function get_recipe_category($recipe_id){
	$terms = wp_get_post_terms( $recipe_id,'category' );
	if ($terms) {
		$first_term = array_shift($terms);
		return $first_term->name;
	}
	return 'Food';
}




// 2nd time write ajax related code
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
		if ($reservations->found_posts>0) {
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
				$order->add_product(wc_get_product(133),1);
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


function meal_checkout_fields($fields){
	// remove biling fields
	unset($fields['billing']['billing_company']);
	unset($fields['billing']['billing_address_1']);
	unset($fields['billing']['billing_address_2']);
	unset($fields['billing']['billing_city']);
	unset($fields['billing']['billing_postcode']);
	unset($fields['billing']['billing_country']);
	unset($fields['billing']['billing_state']);



	// remove Shipping fields
	unset($fields['billing']['shipping_first_name']);
	unset($fields['billing']['shipping_last_name']);
	unset($fields['billing']['shipping_company']);
	unset($fields['billing']['shipping_address_1']);
	unset($fields['billing']['shipping_address_2']);
	unset($fields['billing']['shipping_city']);
	unset($fields['billing']['shipping_postcode']);
	unset($fields['billing']['shipping_country']);
	unset($fields['billing']['shipping_state']);

	// remove order comment fields
	unset($fields['billing']['order_comments']);

	return $fields;
}
add_filter( 'woocommerce_checkout_fields', 'meal_checkout_fields' );

function meal_order_status_processing($order_id){
	$order = wc_get_order($order_id);
	$reservation_id = $order->get_customer_note();
	if ($reservation_id) {
		$reservation = get_post($reservation_id);
		wp_update_post(array(
			'ID' => $reservation_id,
			'post_title' => "[Paid] - ".$reservation->post_title
		));

		add_post_meta($reservation_id,'paid', 1);
	}
}
add_filter( 'woocommerce_order_status_processing','meal_order_status_processing');



function meal_change_menu($menu){
	$reservation_count = get_transient( 'res_count' )?get_transient( 'res_count' ):0;
	if ($reservation_count>0) {
		$menu[5][0] = "Reservation <span class='awaiting-mod'>{$reservation_count}</span>";
	}
	return $menu;
}
add_filter('add_menu_classes','meal_change_menu');


function meal_admin_scripts($screen){
	$_screen = get_current_screen();
	if ('edit.php'==$screen && 'reservation' == $_screen->post_type) {
		delete_transient('res_count');
	}
}
add_action('admin_enqueue_scripts','meal_admin_scripts');





function meal_contact_email(){
	$name = isset($_POST['name'])?$_POST['name']:'';
	$email = isset($_POST['email'])?$_POST['email']:'';
	$phone = isset($_POST['phone'])?$_POST['phone']:'';
	$message = isset($_POST['message'])?$_POST['message']:'';


	$_message = sprintf("%s \nFrom: %s\nEmail: %s\nPhone: %s",$message,$name,$email,$phone);
	$admin_email = get_option('admin_email');
	wp_mail($admin_email,__('Someone tried to contact you','meal'),$_message,"From:{$admin_email}\r\n");
	die('Successful');
}
add_action('wp_ajax_contact','meal_contact_email');
add_action('wp_ajax_nopriv_contact','meal_contact_email');



// Comment form for
/*function meal_comment_form_fields($fields){
	echo "<pre>";
	print_r($fields);
	echo "</pre>";

	$comment_field = $fields['comment'];
	unset($fields['comment']);
	$fields['comment'] = $comment_field;
	return $fields;
}
add_filter( 'comment_form_fields','meal_comment_form_fields' );*/




function meal_comment_form_fields($fields){
	/*echo "<pre>";
	print_r($fields);
	echo "</pre>";*/

	// Unset comment and readd
	$comment_field = $fields['comment'];
	unset($fields['comment']);
	$fields['comment'] = $comment_field;

	// Unset email and readd
	/*$email_field = $fields['email'];
	unset($fields['email']);
	$fields['email'] = $email_field;*/


	unset($fields['comment_notes_before']);
	return $fields;
}
add_filter('comment_form_fields','meal_comment_form_fields');



function crunchify_comments_form_defaults($default) {
	unset($default['comment_notes_after']);
	return $default;
}


function meal_process_pricing_item($item){
	if (trim($item)=='1') {
		return '<i class="fa fa-check plan-active-color fa-2x">';
	}else if(trim($item)=='0'){
		return '<i class="fa fa-ellipsis-h plan-inactive-color fa-2x">';
	}

	return $item;
}
add_filter('meal_pricing_item','meal_process_pricing_item');


function get_max_page_number(){
	global $wp_query;
	return $wp_query->max_num_pages;
}


function meal_load_portfolio_items(){
	if (wp_verify_nonce($_POST['nonce'],'loadmorep')) {
		$meal_section_id = $_POST['sid'];
		$meal_offset = $_POST['offset'];
		$meal_section_meta = get_post_meta( $meal_section_id,'meal-section-gallery',true );
		$meal_number_of_images = $meal_section_meta['nimages'];
		$meal_gallery_items = $meal_section_meta['portfolio'];
		$meal_gallery_items = array_slice($meal_gallery_items, $meal_offset);
        $meal_counter=0;
        echo "<div class='portfolio'>";
		foreach ($meal_gallery_items as $meal_gallery_item) :
            if ($meal_counter >= $meal_number_of_images) {
                break;
            }
			$meal_item_class = str_replace(","," ", $meal_gallery_item['categories']);
			$meal_item_image_id = $meal_gallery_item['image'];
			$meal_item_thumbnail = wp_get_attachment_image_src($meal_item_image_id,'medium');
			$meal_item_categories_array = explode(",",$meal_gallery_item['categories']);
    		?>

            <div class="col-md-4 single-portfolio-item <?php echo esc_attr($meal_item_class); ?>">
                <div class="single-portfolio-image" style="background-image: url(<?php echo esc_url($meal_item_thumbnail[0]) ; ?>);">
                    <div class="portfolio-hover">
                        <div class="portfolio-hover-table">
                            <div class="portfolio-hover-tablecell">
                                <h4><?php echo esc_html($meal_gallery_item['title']) ?></h4>
                                <?php
                                foreach ($meal_item_categories_array as $meal_item_categorie) :
                                printf("<span>%s </span>",trim($meal_item_categorie));
                                endforeach;
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        	<?php
                $meal_counter++;
    	    	endforeach;
    	    	echo "</div>";
	}
	die();
}
add_action('wp_ajax_loadmorep','meal_load_portfolio_items');
add_action('wp_ajax_nopriv_loadmorep','meal_load_portfolio_items');


// codestar_framwork start

function meal_codestar_init() {
	CSFramework_Metabox::instance(array());
	CSFramework_Taxonomy::instance(array());

	$settings = array(
		'menu_title' => __('Meal Options','meal'),
		'menu_type' => 'submenu',
		'menu_parent' => 'themes.php',
		'menu_slug' => 'meal_option_panel',
		'framework_title' => __('Meal Options','meal'),
		'menu_icon' => 'dashicons-dashboard',
		'menu_position' => 20,
		'ajax_save' => false,
		'show_reset_all' => true		
	);

	new CSFramework( $settings, meal_get_theme_options() );
}
add_action('init', 'meal_codestar_init');


function meal_get_theme_options() {
	$options = array();
	$options[] = array(
		'name' => 'meal_theme_activation',
		'tiele' => __('Theme Activation','meal'),
		'icon' => 'fa fa-heart',
		'fields' => array(
			array(
				'id' => 'meal_username',
				'type' => 'text',
				'title' => __('Username','meal'),
			),
			array(
				'id' => 'meal_purchase_code',
				'type' => 'text',
				'title' => __('Purchase Code','meal'),
			),
		)
	);

	$username = cs_get_option('meal_username');
	$purchase_code = cs_get_option('meal_purchase_code');
	$token = get_option('meal_theme_token');

	if (get_option('meal_theme_activation')==1) {

		$theme_demo_url = "http://meal.local/test/deliver.php?u={$username}&pc={$purchase_code}&token=$token&file=duplicat-post";
		$options[count($options)-1]['fields'][] = array(
			'id' => 'meal_download_file',
			'type' => 'notice',
			'class' => 'success',
			'content' => "Download <a target='_blank' href='{$theme_demo_url}'>From Here</a>",
		);
	}

	return $options;
}

function meal_verify_purchase(){
	$username = cs_get_option('meal_username');
	$purchase_code = cs_get_option('meal_purchase_code');
	// $activated = get_option();
	if ($username != '' && $purchase_code != '') {
		$url = "http://meal.local/test/verify.php?u={$username}&pc={$purchase_code}";
		$response = wp_remote_get( $url);
		$body = $response['body'];
		if ('error' != $body) {
			update_option('meal_theme_activation',1);
			update_option('meal_theme_token', $body);
			require_once(get_theme_file_path('/inc/tgm.php'));
		}else {
			update_option('meal_theme_activation',0);
			update_option('meal_theme_token', '');
		}
	}else {
		update_option('meal_theme_activation',0);
		update_option('meal_theme_token', '');
	}
}
add_action('after_setup_theme','meal_verify_purchase');
// codestar_framwork end


function meal_allow_external_host() {
	if ('meal.local' == $host) {
		return true;
	}
}
add_filter('http_request_host_is_external','meal_allow_external_host',10,3);