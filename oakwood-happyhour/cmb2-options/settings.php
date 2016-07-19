<?php
/**
 * Settings
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
class Happyhour_Admin {

	/**
 	 * Option key, and option page slug
 	 * @var string
 	 */
	private $key = 'happyhour_options';

	/**
 	 * Options page metabox id
 	 * @var string
 	 */
	private $metabox_id = 'happyhour_option_metabox';

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
		$this->title = __( 'Site Options', 'happyhour' );
	}

	/**
	 * Initiate our hooks
	 * @since 0.1.0
	 */
	public function hooks() {
		add_action( 'admin_init', array( $this, 'init' ) );
		add_action( 'admin_menu', array( $this, 'add_options_page' ) );
		add_action( 'cmb2_admin_init', array( $this, 'add_options_page_metabox' ) );
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
		$this->options_page = add_menu_page( $this->title, $this->title, 'manage_options', $this->key, array( $this, 'admin_page_display' ) );

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

		$prefix = 'happyhour_';

		// Set our CMB2 fields
		$cmb->add_field( array(
		    'name'    => 'Home Page Banner',
		    'desc'    => 'This is the banner at the top of your Home page.',
		    'id'      => $prefix . 'home_banner',
		    'type'    => 'file',
		    // Optional:
		    'options' => array(
		        'url' => false, // Hide the text input for the url
		        'add_upload_file_text' => 'Upload Image' // Change upload button text. Default: "Add or Upload File"
		    ),
		) );

		$cmb->add_field( array(
		    'name' => 'YouTube Promo Video',
		    'desc' => 'Enter a YouTube url to your promo video. This video is meant to be a promo or commercial, not necessarily your latest boobtube video.',
		    'id'   => $prefix . 'home_youtube',
		    'type' => 'text_url',
		) );

		$cmb->add_field( array(
			'name' => __( 'Video Title', 'happyhour' ),
			'id' => $prefix . 'video_title',
			'type' => 'text',
		) );

		$cmb->add_field( array(
			'name' => __( 'Video Description', 'happyhour' ),
			'id' => $prefix . 'video_desc',
			'type' => 'text',
		) );

		$cmb->add_field( array(
		    'name' => __( 'Featured Facebook Post', 'cmb' ),
		    'desc'    => 'Enter the url of your Facebook post to appear on the home page and elsewhere.',
		    'id'   => $prefix . 'facebook_post',
		    'type' => 'text_url',
		    // 'protocols' => array( 'http', 'https', 'ftp', 'ftps', 'mailto', 'news', 'irc', 'gopher', 'nntp', 'feed', 'telnet' ), // Array of allowed protocols
		) );

		$cmb->add_field( array(
		    'name' => __( 'Featured Tweet', 'cmb' ),
		    'desc'    => 'Enter the url of a single Tweet to appear on the home page and elsewhere.',
		    'id'   => $prefix . 'twitter_post',
		    'type' => 'text_url',
		    // 'protocols' => array( 'http', 'https', 'ftp', 'ftps', 'mailto', 'news', 'irc', 'gopher', 'nntp', 'feed', 'telnet' ), // Array of allowed protocols
		) );

		$cmb->add_field( array(
		    'name' => __( 'Featured Pinterest Post', 'cmb' ),
		    'desc'    => 'Enter the url of your Pinterest post to appear on the home page and elsewhere.',
		    'id'   => $prefix . 'pinterest_post',
		    'type' => 'text_url',
		    // 'protocols' => array( 'http', 'https', 'ftp', 'ftps', 'mailto', 'news', 'irc', 'gopher', 'nntp', 'feed', 'telnet' ), // Array of allowed protocols
		) );

		$cmb->add_field( array(
		    'name'        => __( 'Drink Special post' ),
		    'id'          => $prefix . 'drink_special_post',
		    'type'        => 'post_search_text', // This field type
		    // post type also as array
		    'post_type'   => 'promos',
		    // Default is 'checkbox', used in the modal view to select the post type
		    'select_type' => 'radio',
		    // Will replace any selection with selection from modal. Default is 'add'
		    'select_behavior' => 'replace'
		) );

		$cmb->add_field( array(
		    'name'        => __( 'Featured Blog post' ),
		    'id'          => $prefix . 'featured_blog_post',
		    'type'        => 'post_search_text', // This field type
		    // post type also as array
		    'post_type'   => 'post',
		    // Default is 'checkbox', used in the modal view to select the post type
		    'select_type' => 'radio',
		    // Will replace any selection with selection from modal. Default is 'add'
		    'select_behavior' => 'replace'
		) );

		$cmb->add_field( array(
		    'name'    => 'Pluxh Callout Image',
		    'desc'    => 'Vertical image for Pluxh Bar callout',
		    'id'      => $prefix . 'pluxh_image',
		    'type'    => 'file',
		    // Optional:
		    'options' => array(
		        'url' => false, // Hide the text input for the url
		        'add_upload_file_text' => 'Upload Image' // Change upload button text. Default: "Add or Upload File"
		    ),
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
 * Helper function to get/return the Happyhour_Admin object
 * @since  0.1.0
 * @return Happyhour_Admin object
 */
function happyhour_admin() {
	static $object = null;
	if ( is_null( $object ) ) {
		$object = new Happyhour_Admin();
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
function happyhour_get_option( $key = '' ) {
	return cmb2_get_option( happyhour_admin()->key, $key );
}

// Get it started
happyhour_admin();