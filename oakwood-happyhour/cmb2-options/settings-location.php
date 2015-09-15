<?php
/**
 * Location Settings
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

class Location_Admin {

	/**
 	 * Option key, and option page slug
 	 * @var string
 	 */
	private $key = 'location_options';

	/**
 	 * Options page metabox id
 	 * @var string
 	 */
	private $metabox_id = 'location_option_metabox';

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
		$this->title = __( 'Location Options', 'happyhour' );
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

		$prefix = 'location_';


{/*	$cmb->add_field( array(
		'name' => __( 'Mon-Fri Open', 'happyhour' ),
		'id' => $prefix . 'week_open',
		'type' => 'text_time',
	) );

	$cmb->add_field( array(
		'name' => __( 'Saturday Open', 'happyhour' ),
		'id' => $prefix . 'sat_open',
		'type' => 'text_time',
	) );

	$cmb->add_field( array(
		'name' => __( 'Sunday Open', 'happyhour' ),
		'id' => $prefix . 'sun_open',
		'type' => 'text_time',
	) );

	$cmb->add_field( array(
		'name' => __( 'Club Close', 'happyhour' ),
		'id' => $prefix . 'club_close',
		'type' => 'text_time',
	) );
*/}
		// Set our CMB2 fields
		$group_field_id = $cmb->add_field( array(
			'name' => 'Special and holiday hours, etc',
		    'id'          => $prefix . 'special_hours',
		    'type'        => 'group',
		    'description' => __( 'Add special and holiday hours, etc', 'cmb' ),
		    'options'     => array(
		        'group_title'   => __( 'Day {#}', 'cmb' ), // since version 1.1.4, {#} gets replaced by row number
		        'add_button'    => __( 'Add Another Day', 'cmb' ),
		        'remove_button' => __( 'Remove Day', 'cmb' ),
		        'sortable'      => true, // beta
		    ),
		) );

		// Id's for group's fields only need to be unique for the group. Prefix is not needed.

		$cmb->add_group_field( $group_field_id, array(
			'name' => __( 'Title', 'happyhour' ),
			'id' => 'title',
			'type' => 'text',
			'desc' => __( 'ex: Labor Day', 'happyhour' ),
		) );

		$cmb->add_group_field( $group_field_id, array(
			'name' => __( 'Date from', 'happyhour' ),
			'id' => 'datefrom',
			'type' => 'text_date',
		) );

		$cmb->add_group_field( $group_field_id, array(
			'name' => __( 'Date until', 'happyhour' ),
			'id' => 'dateto',
			'type' => 'text_date',
		) );

		$cmb->add_group_field( $group_field_id, array(
			'name' => __( 'Open Time', 'happyhour' ),
			'id' => 'open',
			'type' => 'text_time',
		) );

		$cmb->add_group_field( $group_field_id, array(
			'name' => __( 'Close Time', 'happyhour' ),
			'id' => 'close',
			'type' => 'text_time',
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
 * Helper function to get/return the Location_Admin object
 * @since  0.1.0
 * @return Location_Admin object
 */
function location_admin() {
	static $object = null;
	if ( is_null( $object ) ) {
		$object = new Location_Admin();
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
function location_get_option( $key = '' ) {
	return cmb2_get_option( location_admin()->key, $key );
}

// Get it started
location_admin();