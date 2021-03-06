<?php
/** obenland-wp-plugins.php
 *
 * @author  Charley Birondo
 * @version 3.0.1
 */


class Obenland_Wp_Plugins_v301 {

	/////////////////////////////////////////////////////////////////////////////
	// PROPERTIES, PROTECTED
	/////////////////////////////////////////////////////////////////////////////

	/**
	 * The plugins' text domain.
	 *
	 * @author modified by Charley Birondo
	 * @since  1.1 - 03.04.2011
	 * @access protected
	 *
	 * @var    string
	 */
	protected $textdomain;


	/**
	 * The name of the calling plugin.
	 *
	 * @author modified by Charley Birondo
	 * @since  1.0 - 23.03.2011
	 * @access protected
	 *
	 * @var    string
	 */
	protected $plugin_name;


	/**
	 * The donate link for the plugin.
	 *
	 * @author modified by Charley Birondo
	 * @since  1.0 - 23.03.2011
	 * @access protected
	 *
	 * @var    string
	 */
	protected $donate_link;


	/**
	 * The path to the plugin file.
	 *
	 * /path/to/wp-content/plugins/{plugin-name}/{plugin-name}.php
	 *
	 * @author modified by Charley Birondo
	 * @since  2.0.0 - 30.05.2012
	 * @access protected
	 *
	 * @var    string
	 */
	protected $plugin_path;


	/**
	 * The path to the plugin directory.
	 *
	 * /path/to/wp-content/plugins/{plugin-name}/
	 *
	 * @author modified by Charley Birondo
	 * @since  1.2 - 21.04.2011
	 * @access protected
	 *
	 * @var    string
	 */
	protected $plugin_dir_path;


	///////////////////////////////////////////////////////////////////////////
	// METHODS, PUBLIC
	///////////////////////////////////////////////////////////////////////////

	/**
	 * Constructor
	 *
	 * @author modified by Charley Birondo
	 * @since  1.0 - 23.03.2011
	 * @access public
	 *
	 * @param  array $args
	 *
	 * @return Obenland_Wp_Plugins_v301
	 */
	public function __construct( $args = array() ) {

		// Set class properties
		$this->textdomain      = $args['textdomain'];
		$this->plugin_path     = $args['plugin_path'];
		$this->plugin_dir_path = plugin_dir_path( $args['plugin_path'] );
		$this->plugin_name     = plugin_basename( $args['plugin_path'] );

		load_plugin_textdomain( 'obenland-wp', false, $this->textdomain . '/lang' );

		
		//$this->hook( 'plugins_loaded', 'parent_plugins_loaded' );
	}






	///////////////////////////////////////////////////////////////////////////
	// METHODS, PROTECTED
	///////////////////////////////////////////////////////////////////////////

	/**
	 * Hooks methods to their WordPress Actions and Filters.
	 *
	 * @example:
	 * $this->hook( 'the_title' );
	 * $this->hook( 'init', 5 );
	 * $this->hook( 'omg', 'is_really_tedious', 3 );
	 *
	 * @author Mark Jaquith
	 * @see    http://sliwww.slideshare.net/markjaquith/creating-and-maintaining-wordpress-plugins
	 * @since  1.5 - 12.02.2012
	 * @access protected
	 *
	 * @param  string $hook Action or Filter Hook name.
	 *
	 * @return boolean true
	 */
	protected function hook( $hook ) {
		$priority = 10;
		$method   = $this->sanitize_method( $hook );
		$args     = func_get_args();
		unset( $args[0] ); // Filter name

		foreach ( (array) $args as $arg ) {
			if ( is_int( $arg ) )
				$priority = $arg;
			else
				$method   = $arg;
		}

		return add_action( $hook, array( $this, $method ), $priority , 999 );
	}




	///////////////////////////////////////////////////////////////////////////
	// METHODS, PRIVATE
	///////////////////////////////////////////////////////////////////////////

	/**
	 * Sanitizes method names.
	 *
	 * @author Mark Jaquith
	 * @see    http://sliwww.slideshare.net/markjaquith/creating-and-maintaining-wordpress-plugins
	 * @since  1.5 - 12.02.2012
	 * @access private
	 *
	 * @param  string $method Method name to be sanitized.
	 *
	 * @return string Sanitized method name
	 */
	private function sanitize_method( $method ) {
		return str_replace( array( '.', '-' ), '_', $method );
	}

} // End of class Obenland_Wp_Plugins.


/* End of file obenland-wp-plugins.php */
/* Location: ./wp-content/plugins/{obenland-plugin}/obenland-wp-plugins.php */