<?php
/**
 * Twenty Twenty-Four functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Twenty Twenty-Four
 * @since Twenty Twenty-Four 1.0
 */

/**
 * Register block styles.
 */

if ( ! function_exists( 'twentytwentyfour_block_styles' ) ) :
	/**
	 * Register custom block styles
	 *
	 * @since Twenty Twenty-Four 1.0
	 * @return void
	 */
	function twentytwentyfour_block_styles() {

		register_block_style(
			'core/details',
			array(
				'name'         => 'arrow-icon-details',
				'label'        => __( 'Arrow icon', 'twentytwentyfour' ),
				/*
				 * Styles for the custom Arrow icon style of the Details block
				 */
				'inline_style' => '
				.is-style-arrow-icon-details {
					padding-top: var(--wp--preset--spacing--10);
					padding-bottom: var(--wp--preset--spacing--10);
				}

				.is-style-arrow-icon-details summary {
					list-style-type: "\2193\00a0\00a0\00a0";
				}

				.is-style-arrow-icon-details[open]>summary {
					list-style-type: "\2192\00a0\00a0\00a0";
				}',
			)
		);
		register_block_style(
			'core/post-terms',
			array(
				'name'         => 'pill',
				'label'        => __( 'Pill', 'twentytwentyfour' ),
				/*
				 * Styles variation for post terms
				 * https://github.com/WordPress/gutenberg/issues/24956
				 */
				'inline_style' => '
				.is-style-pill a,
				.is-style-pill span:not([class], [data-rich-text-placeholder]) {
					display: inline-block;
					background-color: var(--wp--preset--color--base-2);
					padding: 0.375rem 0.875rem;
					border-radius: var(--wp--preset--spacing--20);
				}

				.is-style-pill a:hover {
					background-color: var(--wp--preset--color--contrast-3);
				}',
			)
		);
		register_block_style(
			'core/list',
			array(
				'name'         => 'checkmark-list',
				'label'        => __( 'Checkmark', 'twentytwentyfour' ),
				/*
				 * Styles for the custom checkmark list block style
				 * https://github.com/WordPress/gutenberg/issues/51480
				 */
				'inline_style' => '
				ul.is-style-checkmark-list {
					list-style-type: "\2713";
				}

				ul.is-style-checkmark-list li {
					padding-inline-start: 1ch;
				}',
			)
		);
		register_block_style(
			'core/navigation-link',
			array(
				'name'         => 'arrow-link',
				'label'        => __( 'With arrow', 'twentytwentyfour' ),
				/*
				 * Styles for the custom arrow nav link block style
				 */
				'inline_style' => '
				.is-style-arrow-link .wp-block-navigation-item__label:after {
					content: "\2197";
					padding-inline-start: 0.25rem;
					vertical-align: middle;
					text-decoration: none;
					display: inline-block;
				}',
			)
		);
		register_block_style(
			'core/heading',
			array(
				'name'         => 'asterisk',
				'label'        => __( 'With asterisk', 'twentytwentyfour' ),
				'inline_style' => "
				.is-style-asterisk:before {
					content: '';
					width: 1.5rem;
					height: 3rem;
					background: var(--wp--preset--color--contrast-2, currentColor);
					clip-path: path('M11.93.684v8.039l5.633-5.633 1.216 1.23-5.66 5.66h8.04v1.737H13.2l5.701 5.701-1.23 1.23-5.742-5.742V21h-1.737v-8.094l-5.77 5.77-1.23-1.217 5.743-5.742H.842V9.98h8.162l-5.701-5.7 1.23-1.231 5.66 5.66V.684h1.737Z');
					display: block;
				}

				/* Hide the asterisk if the heading has no content, to avoid using empty headings to display the asterisk only, which is an A11Y issue */
				.is-style-asterisk:empty:before {
					content: none;
				}

				.is-style-asterisk:-moz-only-whitespace:before {
					content: none;
				}

				.is-style-asterisk.has-text-align-center:before {
					margin: 0 auto;
				}

				.is-style-asterisk.has-text-align-right:before {
					margin-left: auto;
				}

				.rtl .is-style-asterisk.has-text-align-left:before {
					margin-right: auto;
				}",
			)
		);
	}
endif;

add_action( 'init', 'twentytwentyfour_block_styles' );

/**
 * Enqueue block stylesheets.
 */

if ( ! function_exists( 'twentytwentyfour_block_stylesheets' ) ) :
	/**
	 * Enqueue custom block stylesheets
	 *
	 * @since Twenty Twenty-Four 1.0
	 * @return void
	 */
	function twentytwentyfour_block_stylesheets() {
		/**
		 * The wp_enqueue_block_style() function allows us to enqueue a stylesheet
		 * for a specific block. These will only get loaded when the block is rendered
		 * (both in the editor and on the front end), improving performance
		 * and reducing the amount of data requested by visitors.
		 *
		 * See https://make.wordpress.org/core/2021/12/15/using-multiple-stylesheets-per-block/ for more info.
		 */
		wp_enqueue_block_style(
			'core/button',
			array(
				'handle' => 'twentytwentyfour-button-style-outline',
				'src'    => get_parent_theme_file_uri( 'assets/css/button-outline.css' ),
				'ver'    => wp_get_theme( get_template() )->get( 'Version' ),
				'path'   => get_parent_theme_file_path( 'assets/css/button-outline.css' ),
			)
		);
	}
endif;

add_action( 'init', 'twentytwentyfour_block_stylesheets' );

/**
 * Register pattern categories.
 */

if ( ! function_exists( 'twentytwentyfour_pattern_categories' ) ) :
	/**
	 * Register pattern categories
	 *
	 * @since Twenty Twenty-Four 1.0
	 * @return void
	 */
	function twentytwentyfour_pattern_categories() {

		register_block_pattern_category(
			'twentytwentyfour_page',
			array(
				'label'       => _x( 'Pages', 'Block pattern category', 'twentytwentyfour' ),
				'description' => __( 'A collection of full page layouts.', 'twentytwentyfour' ),
			)
		);
	}
endif;

add_action( 'init', 'twentytwentyfour_pattern_categories' );


/* Display Form Function */
if ( ! function_exists( 'display_phone_form' ) ) :
	function display_phone_form() {
		ob_start(); ?>
		<!DOCTYPE html>
		<html lang="en">
		  <head>
			<title>International Telephone Input</title>
			<meta name="viewport" content="width=device-width, initial-scale=1" />
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css" />
			<style>
			  body {
				font-family: Arial, sans-serif;
				background-color: #f4f4f4;
			  }
			  form {
				max-width: 400px;
				margin: 20px auto;
				padding: 20px;
				background-color: #fff;
				border-radius: 8px;
				box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
			  }
			  label {
				display: block;
				margin-bottom: 5px;
				font-weight: bold;
			  }
			  input[type="text"], input[type="email"], input[type="tel"] {
				width: 90%;
				padding: 10px;
				margin-bottom: 15px;
				border: 1px solid #ddd;
				border-radius: 4px;
				font-size: 16px;
			  }
			  #submit_form {
				background-color: #007bff;
				color: white;
				padding: 10px;
				border: none;
				border-radius: 4px;
				cursor: pointer;
				font-size: 16px;
			  }
			  #submit_form:hover {
				background-color: #0056b3;
			  }
			</style>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
		  </head>
		  <body>
		  	<form method="POST" action="">
				<div>
					<label for="email">Email:</label>
					<input type="text" id="email" name="email" required value="<?php echo isset($_POST['email']) ? esc_attr($_POST['email']) : ''; ?>">
					<?php if (isset($_POST['submit_form']) && !is_email($_POST['email'])): ?>
						<span style="color: red;">Please enter a valid email address.</span>
					<?php endif; ?>
				</div>
				<div>
					<label for="phone">Phone Number:</label>
					<input id="phone" type="tel" name="phone" required value="<?php echo isset($_POST['phone']) ? esc_attr($_POST['phone']) : ''; ?>">
					<?php if (isset($_POST['submit_form']) && !preg_match('/^\+[1-9]{1}[0-9]{3,14}$/', sanitize_text_field($_POST['full_phone']))): ?>
						<span style="color: red;">Please enter a valid phone number.</span>
					<?php endif; ?>
				</div>
				<input type="hidden" name="full_phone" id="full_phone" value="<?php echo isset($_POST['full_phone']) ? esc_attr($_POST['full_phone']) : ''; ?>">
				<br/>
				<div>
					<button type="submit" name="submit_form" id="submit_form">Submit</button>
				</div>
			</form>
		  </body>
		  <script>
				const phoneInputField = document.querySelector("#phone");
				const phoneInput = window.intlTelInput(phoneInputField, {
					utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
				});

				document.querySelector('form').addEventListener('submit', function (e) {
					const fullPhoneNumber = phoneInput.getNumber();
					document.querySelector('#full_phone').value = fullPhoneNumber;
				});
		  </script>
		</html>
		<?php
		return ob_get_clean();
	}
endif;

add_shortcode('phone_form', 'display_phone_form');

/* Process to save data into database */
if ( ! function_exists( 'process_phone_form' ) ) :
	function process_phone_form() {
		if (isset($_POST['submit_form'])) {
			global $wpdb;
	
			$email = sanitize_email($_POST['email']);
			$full_phone = sanitize_text_field($_POST['full_phone']);
	
			$has_error = false;
	
			if (!is_email($email)) {
				$has_error = true;
			}
	
			if (!preg_match('/^\+[1-9]{1}[0-9]{3,14}$/', $full_phone)) {
				$has_error = true;
			}
	
			if (!$has_error) {
				$wpdb->insert(
					$wpdb->prefix . 'phone_numbers',
					array(
						'phone' => $full_phone,
						'email' => $email
					)
				);
	
				wp_redirect(home_url('/thank-you'));
				exit;
			}
		}
	}
endif;
add_action('init', 'process_phone_form');

/* Create the phone_numbers table if not exists */
function create_custom_tables() {
    global $wpdb;
    $charset_collate = $wpdb->get_charset_collate();

    $sql2 = "CREATE TABLE IF NOT EXISTS `{$wpdb->prefix}phone_numbers` (
        id INT(11) NOT NULL AUTO_INCREMENT,
        phone VARCHAR(20) NOT NULL,
        email VARCHAR(100) NOT NULL,
        PRIMARY KEY (id)
    ) $charset_collate;";

    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    dbDelta($sql2);
}
add_action('after_setup_theme', 'create_custom_tables');

/* Display Thank You page after submitting form */
add_action('wpcf7_mail_sent', 'redirect_thank_you_page');
if ( ! function_exists( 'redirect_thank_you_page' ) ) :
	function redirect_thank_you_page($contact_form) {
		$url = home_url('/thank-you');
		echo "<script>window.location.href = '$url';</script>";
	}
endif;


/* Menu added to show User Submissions page in admin dashboard */
add_action('admin_menu', 'custom_form_submissions_page');
function custom_form_submissions_page() {
    add_menu_page('User Submissions', 'User Submissions', 'manage_options', 'user-submissions', 'view_form_submissions');
}

/* Display submitted data */
function view_form_submissions() {
    global $wpdb;
    $results = $wpdb->get_results("SELECT * FROM {$wpdb->prefix}phone_numbers");

    echo '<h2>Submitted User Data</h2>';
    echo '<table style="width: 90%; border-collapse: collapse;">';
		echo '<tr style="background-color: #f2f2f2;">
				<th style="border: 1px solid #ddd; padding: 8px;">Email</th>
				<th style="border: 1px solid #ddd; padding: 8px;">Phone Number</th>
			</tr>';

		$row_count = 0;
		foreach ($results as $row) {
			$row_color = ($row_count % 2 == 0) ? '#ffffff' : '#f9f9f9';
				echo '<tr style="background-color: ' . $row_color . ';">';
					echo '<td style="border: 1px solid #ddd; padding: 8px;">' . esc_html($row->email) . '</td>';
					echo '<td style="border: 1px solid #ddd; padding: 8px;">' . esc_html($row->phone) . '</td>';
				echo '</tr>';
			$row_count++;
		}
	echo '</table>';
}

