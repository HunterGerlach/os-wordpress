<?php 
	$premium_url = esc_url( tempo_core::theme( 'premium_url' ) );

	if( empty( $premium_url ) )
		return;
?>

<img src="<?php echo esc_url( get_template_directory_uri() . '/media/admin/img/tempo+zeon.png' ); ?>" alt="<?php _e( 'Zeon is a premium WordPress Plugin that extends the core functionality of the Tempo free WordPress theme and Tempo child themes.', 'tempo' ); ?>" style="margin: 0px auto; display: block; max-width: 100%;"/>

<div class="tempo-features-diff-wrapper">
	<table class="tempo-features-diff">
		<tbody>
			<tr>
				<th class="tempo-feature"><?php _e( 'Features', 'tempo' ); ?></th>
				<th class="tempo-free"><?php _e( 'Tempo', 'tempo' ); ?>
					<div>
						<small><?php _e( 'without plugin Zeon', 'tempo' ); ?></small>
					</div>
				</th>
				<th class="tempo-premium"><?php _e( 'Zeon', 'tempo' ); ?>
					<div>
						<a href="<?php echo esc_url( $premium_url ); ?>" target="_blank">
							<small><?php _e( 'upgrade to premium', 'tempo' ); ?></small>
						</a>
					</div>
				</th>
			</tr>

			<tr>
				<td class="tempo-feature"><?php _e( 'Support', 'tempo' ); ?></td>
				<td class="tempo-free"><i class="tempo-icon-ok-circle-1"></i></td>
				<td class="tempo-free"><i class="tempo-icon-ok-circle-1"></i></td>
			</tr>

			<tr>
				<td class="tempo-feature"><?php _e( 'Premium Support', 'tempo' ); ?></td>
				<td class="tempo-free"><i class="tempo-icon-cancel-circled-2"></i></td>
				<td class="tempo-free"><i class="tempo-icon-ok-circle-1"></i></td>
			</tr>

			<tr>
				<td class="tempo-feature"><?php _e( 'Custom Favicon', 'tempo' ); ?></td>
				<td class="tempo-free"><i class="tempo-icon-ok-circle-1"></i></td>
				<td class="tempo-free"><i class="tempo-icon-ok-circle-1"></i></td>
			</tr>

			<tr>
				<td class="tempo-feature"><?php _e( 'Custom Logo ( sample )', 'tempo' ); ?></td>
				<td class="tempo-free"><i class="tempo-icon-ok-circle-1"></i></td>
				<td class="tempo-free"><i class="tempo-icon-ok-circle-1"></i></td>
			</tr>

			<tr>
				<td class="tempo-feature"><?php _e( 'Custom Logo ( icon )', 'tempo' ); ?></td>
				<td class="tempo-free"><i class="tempo-icon-cancel-circled-2"></i></td>
				<td class="tempo-free"><i class="tempo-icon-ok-circle-1"></i></td>
			</tr>

			<tr>
				<td class="tempo-feature"><?php _e( 'Custom Colors', 'tempo' ); ?></td>
				<td class="tempo-free"><i class="tempo-icon-ok-circle-1"></i></td>
				<td class="tempo-free"><i class="tempo-icon-ok-circle-1"></i></td>
			</tr>

			<tr>
				<td class="tempo-feature"><?php _e( 'Menu Custom Colors', 'tempo' ); ?></td>
				<td class="tempo-free"><i class="tempo-icon-ok-circle-1"></i></td>
				<td class="tempo-free"><i class="tempo-icon-ok-circle-1"></i></td>
			</tr>

			<tr>
				<td class="tempo-feature"><?php _e( 'Custom Header', 'tempo' ); ?></td>
				<td class="tempo-free"><i class="tempo-icon-ok-circle-1"></i></td>
				<td class="tempo-free"><i class="tempo-icon-ok-circle-1"></i></td>
			</tr>

			<tr>
				<td class="tempo-feature"><?php _e( 'Custom Header for each Post ( one click setup )', 'tempo' ); ?></td>
				<td class="tempo-free"><i class="tempo-icon-cancel-circled-2"></i></td>
				<td class="tempo-free"><i class="tempo-icon-ok-circle-1"></i></td>
			</tr>

			<tr>
				<td class="tempo-feature"><?php _e( 'Custom Header for each Page ( one click setup )', 'tempo' ); ?></td>
				<td class="tempo-free"><i class="tempo-icon-cancel-circled-2"></i></td>
				<td class="tempo-free"><i class="tempo-icon-ok-circle-1"></i></td>
			</tr>

			<tr>
				<td class="tempo-feature"><?php _e( 'Custom Header type Sample Image ( one click setup )', 'tempo' ); ?></td>
				<td class="tempo-free"><i class="tempo-icon-cancel-circled-2"></i></td>
				<td class="tempo-free"><i class="tempo-icon-ok-circle-1"></i></td>
			</tr>

			<tr>
				<td class="tempo-feature"><?php _e( 'Custom Header type Hero Image ( one click setup )', 'tempo' ); ?></td>
				<td class="tempo-free"><i class="tempo-icon-cancel-circled-2"></i></td>
				<td class="tempo-free"><i class="tempo-icon-ok-circle-1"></i></td>
			</tr>

			<tr>
				<td class="tempo-feature"><?php _e( 'Custom Header type Portfolio ( one click setup )', 'tempo' ); ?></td>
				<td class="tempo-free"><i class="tempo-icon-cancel-circled-2"></i></td>
				<td class="tempo-free"><i class="tempo-icon-ok-circle-1"></i></td>
			</tr>

			<tr>
				<td class="tempo-feature"><?php _e( 'Custom Header type Audio ( one click setup )', 'tempo' ); ?></td>
				<td class="tempo-free"><i class="tempo-icon-cancel-circled-2"></i></td>
				<td class="tempo-free"><i class="tempo-icon-ok-circle-1"></i></td>
			</tr>

			<tr>
				<td class="tempo-feature"><?php _e( 'Custom Header type Video ( one click setup )', 'tempo' ); ?></td>
				<td class="tempo-free"><i class="tempo-icon-cancel-circled-2"></i></td>
				<td class="tempo-free"><i class="tempo-icon-ok-circle-1"></i></td>
			</tr>

			<tr>
				<td class="tempo-feature"><?php _e( 'Custom Header type Google Map ( one click setup )', 'tempo' ); ?></td>
				<td class="tempo-free"><i class="tempo-icon-cancel-circled-2"></i></td>
				<td class="tempo-free"><i class="tempo-icon-ok-circle-1"></i></td>
			</tr>

			<tr>
				<td class="tempo-feature"><?php _e( 'Responsive layout', 'tempo' ); ?></td>
				<td class="tempo-free"><i class="tempo-icon-ok-circle-1"></i></td>
				<td class="tempo-free"><i class="tempo-icon-ok-circle-1"></i></td>
			</tr>

			<tr>
				<td class="tempo-feature"><?php _e( 'Sidebars &amp; Custom Layouts', 'tempo' ); ?></td>
				<td class="tempo-free"><i class="tempo-icon-cancel-circled-2"></i></td>
				<td class="tempo-free"><i class="tempo-icon-ok-circle-1"></i></td>
			</tr>

			<tr>
				<td class="tempo-feature"><?php _e( 'Custom Sidebars builder', 'tempo' ); ?></td>
				<td class="tempo-free"><i class="tempo-icon-cancel-circled-2"></i></td>
				<td class="tempo-free"><i class="tempo-icon-ok-circle-1"></i></td>
			</tr>

			<tr>
				<td class="tempo-feature"><?php _e( 'Front Page custom Header Sidebar', 'tempo' ); ?></td>
				<td class="tempo-free"><i class="tempo-icon-cancel-circled-2"></i></td>
				<td class="tempo-free"><?php _e( '1 - 4 ( you can customize number of columns )', 'tempo' ); ?></td>
			</tr>

			<tr>
				<td class="tempo-feature"><?php _e( 'Blog custom Header Sidebar', 'tempo' ); ?></td>
				<td class="tempo-free"><i class="tempo-icon-cancel-circled-2"></i></td>
				<td class="tempo-free"><?php _e( '1 - 4 ( you can customize number of columns )', 'tempo' ); ?></td>
			</tr>

			<tr>
				<td class="tempo-feature"><?php _e( 'Footer light Section custom Sidebar', 'tempo' ); ?></td>
				<td class="tempo-free"><i class="tempo-icon-cancel-circled-2"></i></td>
				<td class="tempo-free"><?php _e( '1 - 4 ( you can customize number of columns )', 'tempo' ); ?></td>
			</tr>

			<tr>
				<td class="tempo-feature"><?php _e( 'Footer dark Section custom Sidebar', 'tempo' ); ?></td>
				<td class="tempo-free"><i class="tempo-icon-cancel-circled-2"></i></td>
				<td class="tempo-free"><?php _e( '1 - 4 ( you can customize number of columns )', 'tempo' ); ?></td>
			</tr>

			<tr>
				<td class="tempo-feature"><?php _e( 'Custom Sidebars for each Post', 'tempo' ); ?></td>
				<td class="tempo-free"><i class="tempo-icon-cancel-circled-2"></i></td>
				<td class="tempo-free"><i class="tempo-icon-ok-circle-1"></i></td>
			</tr>

			<tr>
				<td class="tempo-feature"><?php _e( 'Custom Sidebars for each Page', 'tempo' ); ?></td>
				<td class="tempo-free"><i class="tempo-icon-cancel-circled-2"></i></td>
				<td class="tempo-free"><i class="tempo-icon-ok-circle-1"></i></td>
			</tr>

			<tr>
				<td class="tempo-feature"><?php _e( 'Custom breadcrumbs settings', 'tempo' ); ?></td>
				<td class="tempo-free"><i class="tempo-icon-ok-circle-1"></i></td>
				<td class="tempo-free"><i class="tempo-icon-ok-circle-1"></i></td>
			</tr>




			<tr>
				<td class="tempo-feature"><?php _e( 'Shortcodes', 'tempo' ); ?></td>
				<td class="tempo-free"><i class="tempo-icon-ok-circle-1"></i></td>
				<td class="tempo-free"><i class="tempo-icon-ok-circle-1"></i></td>
			</tr>

			<tr>
				<td class="tempo-feature"><?php _e( 'Shortcodes Manager', 'tempo' ); ?></td>
				<td class="tempo-free"><i class="tempo-icon-cancel-circled-2"></i></td>
				<td class="tempo-free"><i class="tempo-icon-ok-circle-1"></i></td>
			</tr>





			<tr>
				<td class="tempo-feature"><?php _e( 'Custom Page Template', 'tempo' ); ?></td>
				<td class="tempo-free"><i class="tempo-icon-cancel-circled-2"></i></td>
				<td class="tempo-free"><i class="tempo-icon-ok-circle-1"></i></td>
			</tr>

			<tr>
				<td class="tempo-feature"><?php _e( 'Classic Blog View ( + custom page template )', 'tempo' ); ?></td>
				<td class="tempo-free"><i class="tempo-icon-ok-circle-1"></i></td>
				<td class="tempo-free"><i class="tempo-icon-ok-circle-1"></i></td>
			</tr>

			<tr>
				<td class="tempo-feature"><?php _e( 'Grid Blog View ( + custom page template )', 'tempo' ); ?></td>
				<td class="tempo-free"><i class="tempo-icon-cancel-circled-2"></i></td>
				<td class="tempo-free"><i class="tempo-icon-ok-circle-1"></i></td>
			</tr>

			<tr>
				<td class="tempo-feature"><?php _e( 'Portfolio Blog View ( + custom page template )', 'tempo' ); ?></td>
				<td class="tempo-free"><i class="tempo-icon-cancel-circled-2"></i></td>
				<td class="tempo-free"><i class="tempo-icon-ok-circle-1"></i></td>
			</tr>

			<tr>
				<td class="tempo-feature"><?php _e( 'Custom page template filter posts by tags', 'tempo' ); ?></td>
				<td class="tempo-free"><i class="tempo-icon-cancel-circled-2"></i></td>
				<td class="tempo-free"><i class="tempo-icon-ok-circle-1"></i></td>
			</tr>

			<tr>
				<td class="tempo-feature"><?php _e( 'Custom page template filter posts by categories', 'tempo' ); ?></td>
				<td class="tempo-free"><i class="tempo-icon-cancel-circled-2"></i></td>
				<td class="tempo-free"><i class="tempo-icon-ok-circle-1"></i></td>
			</tr>



			<tr>
				<td class="tempo-feature"><?php _e( 'Footer copyright control', 'tempo' ); ?></td>
				<td class="tempo-free"><?php _e( 'PARTIAL', 'tempo' ); ?></td>
				<td class="tempo-free"><?php _e( 'FULL', 'tempo' ); ?></td>
			</tr>

			<tr>
				<td class="tempo-feature"><?php _e( 'Footer custom Menu', 'tempo' ); ?></td>
				<td class="tempo-free"><i class="tempo-icon-cancel-circled-2"></i></td>
				<td class="tempo-free"><i class="tempo-icon-ok-circle-1"></i></td>
			</tr>

			<tr>
				<td class="tempo-feature"><?php _e( 'Footer social Items', 'tempo' ); ?></td>
				<td class="tempo-free"><i class="tempo-icon-ok-circle-1"></i></td>
				<td class="tempo-free"><i class="tempo-icon-ok-circle-1"></i></td>
			</tr>

			<tr>
				<td class="tempo-feature"><?php _e( 'Custom CSS Options', 'tempo' ); ?></td>
				<td class="tempo-free"><i class="tempo-icon-ok-circle-1"></i></td>
				<td class="tempo-free"><i class="tempo-icon-ok-circle-1"></i></td>
			</tr>

			<tr>
				<td class="tempo-feature"><?php _e( 'Plugin Contact Form 7 ( styled )', 'tempo' ); ?></td>
				<td class="tempo-free"><i class="tempo-icon-ok-circle-1"></i></td>
				<td class="tempo-free"><i class="tempo-icon-ok-circle-1"></i></td>
			</tr>

		</tbody>
	</table>

	<a href="<?php echo esc_url( $premium_url ); ?>" target="_blank" class="tempo-button tempo-premium-upgrade tempo-submit-options">
		<i class="tempo-icon-publish"></i> <?php _e( 'Upgrade to Premium', 'tempo' ) ?>
		<small><?php _e( 'compatible with free version', 'tempo' ); ?></small>
	</a>

	<div class="clear clearfix"></div>
</div>