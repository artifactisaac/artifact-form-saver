<?php
/**
  * Plugin Name: Artifact Form Saver
  * Plugin URI: https://artifact.tools/artifact-form-saver
  * Description: Never let your users lose the information they were typing into forms on your site. This lightweight plugin will automatically save the information they are typing in their browser's local storage, even if they don't submit the form. Information will save even if they turn off their computer. Activating this plugin will add Form Saver to every &lt;form&lt;. If you only want to include it on certain forms or other customizations, reach out to us. We deliver quick, custom, solutions. <a href="https://artifact.tools/contact/" target="_blank">https://artifact.tools/contact/</a>
  * Version: 1.0
  * Requires at least: 4
  * Tested Up To: 5.2.2
  * Author: Isaac & Chevas Balloun - Artifact LLC
  * Author URI: https://artifact.tools/contact/
  * License: GPL v2 or Later
  * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
  */

register_activation_hook( __FILE__, 'activate_artifact_form_saver' );
register_deactivation_hook( __FILE__, 'deactivate_artifact_form_saver' );
register_uninstall_hook(__FILE__, 'uninstall_artifact_form_saver');

function activate_artifact_form_saver() { }
function deactivate_artifact_form_saver() { }
function uninstall_artifact_form_saver() { }
function artifactformsaver_queue_script() {
	wp_enqueue_script('artifactformsaver', plugins_url( 'artifactformsaver.js', __FILE__ ), array('jquery'), null, true);
}    

add_action( 'wp_enqueue_scripts', 'artifactformsaver_queue_script' );
