<?php
/**
 * Customer Reset Password email
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/emails/customer-reset-password.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates/Emails
 * @version 4.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$theme_path		= get_stylesheet_directory_uri().'/woocommerce/emails/images'; // Image Path
$hero_bg_img 	= $theme_path . '/hero-customer-reset-password.png';

$regards_show 	= "YES"; // Team Regards Show 'YES' or 'NO', Case Sensitive

?>

<?php do_action( 'woocommerce_email_header', $email_heading, $email ); ?>

<!-- Hero BG : Left Text Open -->
<table cellpadding="0" cellspacing="0" align="center" width="100%" class="table-100pc bg-F9F9F9">
	<tr>
		<td align="center">
			<table cellpadding="0" cellspacing="0" align="center" class="table-700 bg-FFFFFF">
				<tr>
					<td align="center">
						<table cellpadding="0" cellspacing="0" align="center" width="100%">
							<tr>
								<td align="center" class="mo-px-25" bgcolor="#F5F5F5" style="background-image: url(https://editor.liramail.com/images/feshto/feshto_pre/denim-1@hero.png);background-color:#F5F5F5;background-position:center top;background-size:cover;background-repeat: no-repeat;">
								
									<?php
										echo '<!--[if gte mso 9]>
										<v:rect xmlns:v="urn:schemas-microsoft-com:vml" fill="true" stroke="false" style="width:700px;height:430px;">
										<v:fill type="frame" src="'. $hero_bg_img .'" color="#F5F5F5"></v:fill>
										<v:textbox style="v-text-anchor:middle;" inset="0,0,0,0">
										<![endif]-->'
									?>
										<table cellspacing="0" cellpadding="0" align="center" class="table-640">
											<tr>
												<td class="h-100"> </td>
											</tr>
											
											<tr>
												<td align="left" class="font-000000 font-secondary font-italic font-42 font-weight-400 font-space-2 mo-text-center">
													<?php echo $email_heading ?>
												</td>
											</tr>
											<tr>
												<td class="h-100"> </td>
											</tr>
										</table>
										<!--[if (gte mso 9)|(IE)]></v:textbox></v:rect><![endif]-->

								</td>
							</tr>
						</table>
					</td>
				</tr>
			</table>
		</td>
	</tr>
</table>
<!-- Hero BG : Left Text Close -->

<!-- Notification : Title : Subtitle Btn Open -->
<table cellpadding="0" cellspacing="0" align="center" width="100%" class="table-100pc bg-F9F9F9">
	<tr>
		<td align="center">

			<table cellpadding="0" cellspacing="0" align="center" class="table-700 bg-FFFFFF">
				<tr>
					<td class="spacer-60"> </td>
				</tr>
				<tr>
					<td align="center" class="mo-px-25">

						<table cellpadding="0" cellspacing="0" align="center" class="table-640">
							<tr>
								<td align="center">

									<table cellpadding="0" cellspacing="0" align="center" width="100%">
										<tr>
											<td align="left" class="font-000000 font-secondary font-italic font-24 font-weight-700 font-space-2 pb-20 mo-text-center" style="text-transform: capitalize;">
												<?php printf( __( 'Hi There!', 'woocommerce' ), esc_html( $user_login ) ); ?>
											</td>
										</tr>
										<tr>
											<td align="left" class="font-777777 font-secondary font-italic font-18 font-weight-400 font-space-1 pb-20 mo-text-center">
												<?php printf(  __( 'Click on the button below to reset your password, you have 24 hours to pick your password. After that, you\'ll have to ask for a new one.', 'woocommerce' ) ); ?>
											</td>
										</tr>
										<tr>
											<td align="left" class="font-777777 font-secondary font-italic font-18 font-weight-400 font-space-1 pb-60 mo-text-center">
												<?php printf(  __( 'Or using this Link:', 'woocommerce' ) ); ?>
												<a href="<?php echo esc_url( add_query_arg( array( 'key' => $reset_key, 'login' => rawurlencode( $user_login ) ), wc_get_endpoint_url( 'lost-password', '', wc_get_page_permalink( 'myaccount' ) ) ) ); ?>" class="font-777777 font-underline">
													<?php printf(  __( 'Click here to reset your password', 'woocommerce' ) ); ?>
												</a>
											</td>
										</tr>
										<tr>
											<td align="center">
												<table cellspacing="0" cellpadding="0" align="center" class="mo-btn-full mo-center">
													<tr>
														<td align="center" class="bg-000000 btn-l block">
															<a href="<?php echo esc_url( add_query_arg( array( 'key' => $reset_key, 'login' => rawurlencode( $user_login ) ), wc_get_endpoint_url( 'lost-password', '', wc_get_page_permalink( 'myaccount' ) ) ) ); ?>" class="font-btn font-primary font-14 font-weight-600 font-space-1 block">
															<?php printf(  __( 'RESET PASSWORD', 'woocommerce' ) ); ?>
															</a>
														</td>
													</tr>
												</table>
											</td>
										</tr>
									</table>

								</td>
							</tr>
						</table>
						
					</td>
				</tr>
				<tr>
					<td class="spacer-30"> </td>
				</tr>
			</table>

		</td>
	</tr>
</table>
<!-- Notification : Title : Subtitle Btn Close -->

<!-- Notification : Title Regards Open -->
<?php if( $regards_show == "YES") :?>
<table cellpadding="0" cellspacing="0" align="center" width="100%" class="table-100pc bg-F9F9F9">
	<tr>
		<td align="center">
			<table cellpadding="0" cellspacing="0" align="center" class="table-700 bg-FFFFFF">
				<tr>
					<td class="spacer-30"> </td>
				</tr>
				<tr>
					<td align="center" class="mo-px-25">
						<table cellpadding="0" cellspacing="0" align="center" class="table-640">
							<tr>
								<td align="center">
									<table cellpadding="0" cellspacing="0" align="center" width="100%">
										<tr>
											<td align="left" class="font-000000 font-secondary font-italic font-22 font-weight-700 font-space-2 mo-text-center">
												<?php printf(  __( 'Thank You,', 'woocommerce' ) ); ?>
											</td>
										</tr>
										<tr>
											<td align="left" class="font-000000 font-secondary font-italic font-20 font-weight-400 font-space-1 mo-text-center">
												<?php printf( esc_html__( 'Team %1$s.', 'woocommerce' ), esc_html( $blogname )); ?>
											</td>
										</tr>
									</table>
								</td>
							</tr>
						</table>
						
					</td>
				</tr>
				<tr>
					<td class="spacer-15"> </td>
				</tr>
			</table>
		</td>
	</tr>
</table>
<?php endif; ?>
<!-- Notification : Title Regards Close -->

<!-- Divider : Open -->
<table cellspacing="0" cellpadding="0" align="center" width="100%" class="table-100pc bg-F9F9F9">
	<tr>
		<td align="center">
			<table cellspacing="0" cellpadding="0" align="center" class="table-700 bg-FFFFFF">
				<tr>
					<td class="spacer-15"> </td>
				</tr>
				<tr>
					<td align="center">
						<table cellspacing="0" cellpadding="0" align="center" class="table-640">
							<tr>
								<td class="h-1 bg-F1F1F1"> </td>
							</tr>
						</table>
					</td>
				</tr>
				<tr>
					<td class="spacer-15"> </td>
				</tr>
			</table>
		</td>
	</tr>
</table>
<!-- Divider : Close -->

<!-- Notification : Title Description Open -->
<table cellpadding="0" cellspacing="0" align="center" width="100%" class="table-100pc bg-F9F9F9">
	<tr>
		<td align="center">
			<table cellpadding="0" cellspacing="0" align="center" class="table-700 bg-FFFFFF">
				<tr>
					<td class="spacer-15"> </td>
				</tr>
				<tr>
					<td align="center" class="mo-px-25">
						<table cellpadding="0" cellspacing="0" align="center" class="table-640">
							<tr>
								<td align="center">
									<table cellpadding="0" cellspacing="0" align="center" width="100%">
										<tr>
											<td align="left" class="font-777777 font-secondary font-italic font-18 font-weight-400 font-space-1 mo-text-center">
												<?php 
													/* additional content */
													if ( $additional_content ) {
														echo __( wp_kses_post( wptexturize( $additional_content )));
													}
												?>
											</td>
										</tr>
									</table>
								</td>
							</tr>
						</table>
						
					</td>
				</tr>
				<tr>
					<td class="spacer-30"> </td>
				</tr>
			</table>
		</td>
	</tr>
</table>
<!-- Notification : Title Description Close -->

<?php do_action( 'woocommerce_email_footer', $email );
