<?php 
/*  
 * 2J SlideShow		http://2joomla.net/wordpress
 * Author:            2J Team  http://2joomla.net
 * License:           GPL-2.0+
 */

 
 function eg_settings_api_init() {
 	// Add the section to reading settings so we can add our
 	// fields to it
 	add_settings_section(
		'eg_setting_section',
		'Example settings section in reading',
		'eg_setting_section_callback_function',
		'reading'
	);
 	
 	// Add the field with the names and function to use for our new
 	// settings, put it in our new section
 	add_settings_field(
		'eg_setting_name',
		'Example setting Name',
		'eg_setting_callback_function',
		'reading',
		'eg_setting_section'
	);
 	
 	// Register our setting so that $_POST handling is done for us and
 	// our callback function just has to echo the <input>
 	register_setting( 'reading', 'eg_setting_name' );
 } // eg_settings_api_init()
 
 add_action( 'admin_init', 'eg_settings_api_init' );
 
  
 // ------------------------------------------------------------------
 // Settings section callback function
 // ------------------------------------------------------------------
 //
 // This function is needed if we added a new section. This function 
 // will be run at the start of our section
 //
 
 function eg_setting_section_callback_function() {
 	echo '<p>Intro text for our settings section</p>';
 }
 
 // ------------------------------------------------------------------
 // Callback function for our example setting
 // ------------------------------------------------------------------
 //
 // creates a checkbox true/false option. Other types are surely possible
 //
 
 function eg_setting_callback_function() {
 	echo '<input name="eg_setting_name" id="eg_setting_name" type="checkbox" value="1" class="code" ' . checked( 1, get_option( 'eg_setting_name' ), false ) . ' /> Explanation text';
 }