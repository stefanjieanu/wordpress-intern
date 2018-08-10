<?php
/**
 * Exit if accessed directly.
 *
 * @package custom-font-uploader
 * @version 1.0.0
 * @author  wbcomdesigns
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<div class="cfup-adming-setting">
	<div class="cfup-tab-header"><h3><?php esc_html_e( 'Have some questions?', 'cfup' ); ?></h3></div>
		<div class="cfup-admin-settings-block">
		<div id="cfup-settings-tbl">
			<div class="cfup-admin-row">
				<div>
					<button class="cfup-accordion"><?php esc_html_e( 'What plugin does this plugin require?', 'cfup' ); ?></button>
					<div class="panel">
						<p><?php esc_html_e( 'This plugin simply deals with custom fonts, thereby requires no such plugin.', 'cfup' ); ?></p>
					</div>
				</div>
			</div>

			<div class="cfup-admin-row">
				<div>
					<button class="cfup-accordion"><?php esc_html_e( 'How to go for any custom development?', 'cfup' ); ?></button>
					<div class="panel">
						<p><?php esc_html_e( 'If you need additional help you can contact us for', 'cfup' ); ?>
						<a href="https://wbcomdesigns.com/contact/" target="_blank" title="Custom Development by Wbcom Designs">
						<?php esc_html_e( 'Custom Development', 'cfup' ); ?></a></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
