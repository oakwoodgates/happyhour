<?php
/**
 * BoobTube Settings
 *
 * @package     Oakwood meets happyhour
 * @subpackage  CMB2
 * @copyright   Copyright (c) 2015, OakwoodGates
 * @license     GPL-2.0+
 * @link        https://github.com/oakwoodgates/
 * @see  		https://github.com/WebDevStudios/CMB2-Snippet-Library CMB2 Snippet Library
 * @see 		https://github.com/WebDevStudios/CMB2/wiki CMB2 Wiki
 * @since       1.0.0
 */

class Status_Admin {

	/**
 	 * Option key, and option page slug
 	 * @var string
 	 */
	private $key = 'happyhour_status';

	/**
 	 * Options page metabox id
 	 * @var string
 	 */
	private $metabox_id = 'happyhour_status_metabox';

	/**
	 * Options Page title
	 * @var string
	 */
	protected $title = '';

	/**
	 * Options Page hook
	 * @var string
	 */
	protected $options_page = '';

	/**
	 * Constructor
	 * @since 0.1.0
	 */
	public function __construct() {
		// Set our title
		$this->title = __( 'Permanent Options', 'happyhour' );
	}

	/**
	 * Initiate our hooks
	 * @since 0.1.0
	 */
	public function hooks() {
		add_action( 'admin_init', array( $this, 'init' ) );
		add_action( 'admin_menu', array( $this, 'add_options_page' ) );

		// To replace line below
		// add_action( 'cmb2_admin_init', array( $this, 'add_options_page_metabox' ) );
		add_action( 'cmb2_init', array( $this, 'add_options_page_metabox' ) );
	}


	/**
	 * Register our setting to WP
	 * @since  0.1.0
	 */
	public function init() {
		register_setting( $this->key, $this->key );
	}

	/**
	 * Add menu options page
	 * @since 0.1.0
	 */
	public function add_options_page() {
		$this->options_page = add_submenu_page( 'happyhour_options', $this->title, $this->title, 'manage_options', $this->key, array( $this, 'admin_page_display' ) );

		// Include CMB CSS in the head to avoid FOUT
		add_action( "admin_print_styles-{$this->options_page}", array( 'CMB2_hookup', 'enqueue_cmb_css' ) );
	}

	/**
	 * Admin page markup. Mostly handled by CMB2
	 * @since  0.1.0
	 */
	public function admin_page_display() {
		?>
		<div class="wrap cmb2-options-page <?php echo $this->key; ?>">
			<h2><?php echo esc_html( get_admin_page_title() ); ?></h2>
			<?php cmb2_metabox_form( $this->metabox_id, $this->key ); ?>
		</div>
		<?php
	}

	/**
	 * Add the options metabox to the array of metaboxes
	 * @since  0.1.0
	 */
	function add_options_page_metabox() {

		$cmb = new_cmb2_box( array(
			'id'         => $this->metabox_id,
			'hookup'     => false,
			'cmb_styles' => false,
			'show_on'    => array(
				// These are important, don't remove
				'key'   => 'options-page',
				'value' => array( $this->key, )
			),
		) );

		$prefix = 'happyhour_status_';

		// Set our CMB2 fields
		$cmb->add_field( array(
		    'name'        => __( 'Happy Hour post' ),
		    'id'          => $prefix . 'happy_hour_post',
		    'type'        => 'post_search_text', // This field type
		    // post type also as array
		    'post_type'   => 'promos',
		    // Default is 'checkbox', used in the modal view to select the post type
		    'select_type' => 'radio',
		    // Will replace any selection with selection from modal. Default is 'add'
		    'select_behavior' => 'replace'
		) );

		$cmb->add_field( array(
			'name' => __( 'Where am I?', 'cmb2' ),
			'id' => $prefix . 'where_am_i',
			'type' => 'radio',
			'options' => array(
				'1' => __( 'Tulsa', 'cmb2' ),
				'2' => __( 'OKC', 'cmb2' ),
			),
		) );

		$cmb->add_field( array(
		    'name' => __( 'Inside View', 'cmb' ),
		    'desc'    => 'Enter the embed code from google maps for the inside view of the club. This must be an iframe.',
		    'id'   => $prefix . 'inside_view',
		    'type' => 'textarea_code',
		    // 'protocols' => array( 'http', 'https', 'ftp', 'ftps', 'mailto', 'news', 'irc', 'gopher', 'nntp', 'feed', 'telnet' ), // Array of allowed protocols
		) );

		$cmb->add_field( array(
		    'name'        => __( 'VIP page' ),
		    'id'          => $prefix . 'vip_post',
		    'type'        => 'post_search_text', // This field type
		    // post type also as array
		    'post_type'   => 'page',
		    // Default is 'checkbox', used in the modal view to select the post type
		    'select_type' => 'radio',
		    // Will replace any selection with selection from modal. Default is 'add'
		    'select_behavior' => 'replace'
		) );

		$cmb->add_field( array(
		    'name'        => __( 'Menu page' ),
		    'id'          => $prefix . 'menu_post',
		    'type'        => 'post_search_text', // This field type
		    // post type also as array
		    'post_type'   => 'page',
		    // Default is 'checkbox', used in the modal view to select the post type
		    'select_type' => 'radio',
		    // Will replace any selection with selection from modal. Default is 'add'
		    'select_behavior' => 'replace'
		) );

		$cmb->add_field( array(
		    'name'        => __( 'Location page' ),
		    'id'          => $prefix . 'location_post',
		    'type'        => 'post_search_text', // This field type
		    // post type also as array
		    'post_type'   => 'jsg_organization',
		    // Default is 'checkbox', used in the modal view to select the post type
		    'select_type' => 'radio',
		    // Will replace any selection with selection from modal. Default is 'add'
		    'select_behavior' => 'replace'
		) );

		$cmb->add_field( array(
		    'name'        => __( 'Venue post' ),
		    'id'          => $prefix . 'venue_post',
		    'type'        => 'post_search_text', // This field type
		    // post type also as array
		    'post_type'   => 'tribe_venue',
		    // Default is 'checkbox', used in the modal view to select the post type
		    'select_type' => 'radio',
		    // Will replace any selection with selection from modal. Default is 'add'
		    'select_behavior' => 'replace'
		) );

		$cmb->add_field( array(
			'name'    => __( 'Promo List', 'cmb2' ),
			'desc'    => __( 'Drag posts from the left column to the right column to attach them to this page.<br />You may rearrange the order of the posts in the right column by dragging and dropping.', 'cmb2' ),
			'id'      => $prefix . 'events_list',
			'type'    => 'custom_attached_posts',
			'options' => array(
				'show_thumbnails' => true, // Show thumbnails on the left
				'filter_boxes'    => true, // Show a text box for filtering the results
				'query_args'      => array( 
										'posts_per_page' => 10,
										'post_type' => 'promos'
									 ), // override the get_posts args
			)
		) );

	}

	/**
	 * Public getter method for retrieving protected/private variables
	 * @since  0.1.0
	 * @param  string  $field Field to retrieve
	 * @return mixed          Field value or exception is thrown
	 */
	public function __get( $field ) {
		// Allowed fields to retrieve
		if ( in_array( $field, array( 'key', 'metabox_id', 'title', 'options_page' ), true ) ) {
			return $this->{$field};
		}

		throw new Exception( 'Invalid property: ' . $field );
	}

}

/**
 * Helper function to get/return the Boobtube_Admin object
 * @since  0.1.0
 * @return Boobtube_Admin object
 */
function status_admin() {
	static $object = null;
	if ( is_null( $object ) ) {
		$object = new Status_Admin();
		$object->hooks();
	}

	return $object;
}

/**
 * Wrapper function around cmb2_get_option
 * @since  0.1.0
 * @param  string  $key Options array key
 * @return mixed        Option value
 */
function status_get_option( $key = '' ) {
	return cmb2_get_option( status_admin()->key, $key );
}

// Get it started
status_admin();