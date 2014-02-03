<?php


function hj_hosting_after_hosting() {
	global $post;

	$type        = get_post_meta( $post->ID, '_hj_type', true );
	$disk        = get_post_meta( $post->ID, '_hj_disk', true );
	$bandwidth   = get_post_meta( $post->ID, '_hj_bandwidth', true );
	$accountsnr	 = get_post_meta( $post->ID, '_hj_accountsnr', true );
	$cpanel      = get_post_meta( $post->ID, '_hj_cpanel', true );
	$databases 	 = get_post_meta( $post->ID, '_hj_databases', true );
	$emailsnr 	 = get_post_meta( $post->ID, '_hj_emailsnr', true );
	$softaculous = get_post_meta( $post->ID, '_hj_softaculous', true );
	$fantastico  = get_post_meta( $post->ID, '_hj_fantastico', true );
	$addondomain = get_post_meta( $post->ID, '_hj_addondomain', true );
	$parkdomains = get_post_meta( $post->ID, '_hj_parkdomains', true );
	$freedomain  = get_post_meta( $post->ID, '_hj_freedomain', true );
	$subdomains  = get_post_meta( $post->ID, '_hj_subdomains', true );
	$ftp         = get_post_meta( $post->ID, '_hj_ftp', true );

	// $support     = get_post_meta( $post->ID, '_hj_support', true );
	$uptimeguara = get_post_meta( $post->ID, '_hj_uptimeguara', true );
	$support247  = get_post_meta( $post->ID, '_hj_support247', true );
	$moneyback   = get_post_meta( $post->ID, '_hj_moneyback', true );

	// $email       = get_post_meta( $post->ID, '_hj_email', true );
	$spamfilter  = get_post_meta( $post->ID, '_hj_spamfilter', true );
	$antivirus   = get_post_meta( $post->ID, '_hj_antivirus', true );
	$boxtrappers = get_post_meta( $post->ID, '_hj_boxtrappers', true );
	$horde       = get_post_meta( $post->ID, '_hj_horde', true );
	$squirrel    = get_post_meta( $post->ID, '_hj_squirrel', true );
	$roundcube   = get_post_meta( $post->ID, '_hj_roundcube', true );
	$imap        = get_post_meta( $post->ID, '_hj_imap', true );
	$forwarder   = get_post_meta( $post->ID, '_hj_forwarder', true );
	$responder   = get_post_meta( $post->ID, '_hj_responder', true );
	$smtp        = get_post_meta( $post->ID, '_hj_smtp', true );

	// $features    = get_post_meta( $post->ID, '_hj_features', true );
	$php5        = get_post_meta( $post->ID, '_hj_php5', true );
	$perl        = get_post_meta( $post->ID, '_hj_perl', true );
	$mysql       = get_post_meta( $post->ID, '_hj_mysql', true );
	$postgresql  = get_post_meta( $post->ID, '_hj_postgresql', true );
	$js          = get_post_meta( $post->ID, '_hj_js', true );
	$cgibin      = get_post_meta( $post->ID, '_hj_cgibin', true );
	$gd          = get_post_meta( $post->ID, '_hj_gd', true );
	$dirprotect  = get_post_meta( $post->ID, '_hj_dirprotect', true );
	$sendmail    = get_post_meta( $post->ID, '_hj_sendmail', true );
	$carts       = get_post_meta( $post->ID, '_hj_carts', true );
	$zend        = get_post_meta( $post->ID, '_hj_zend', true );
	$crons       = get_post_meta( $post->ID, '_hj_crons', true );
	$ioncube     = get_post_meta( $post->ID, '_hj_ioncube', true );
	$backups     = get_post_meta( $post->ID, '_hj_backups', true );
	$anstats     = get_post_meta( $post->ID, '_hj_anstats', true );
	$awstats     = get_post_meta( $post->ID, '_hj_awstats', true );
	$webalizer   = get_post_meta( $post->ID, '_hj_webalizer', true );

	?>

	<?php
		/*
		 * The FEATURES table
		 */
	?>
	<table class="table table-bordered table-striped">

		<tr class="info"><td colspan="2">Features</td></tr>

		<?php if ( isset( $disk ) && !empty( $disk ) ) : ?>
			<tr>
				<th class="col-md-10"><?php _e( 'Disk Space' ); ?></th>
				<td class="col-md-2"><?php echo hj_table_format_values( $disk ); ?></td>
			</tr>
		<?php endif; ?>

		<?php if ( isset( $bandwidth ) && !empty( $bandwidth ) ) : ?>
			<tr>
				<th class="col-md-10"><?php _e( 'Bandwidth' ); ?></th>
				<td class="col-md-2"><?php echo hj_table_format_values( $bandwidth ); ?></td>
			</tr>
		<?php endif; ?>

		<?php if ( isset( $cpanel ) && !empty( $cpanel ) ) : ?>
			<tr>
				<th class="col-md-10"><?php _e( 'cPanel' ); ?></th>
				<td class="col-md-2"><?php echo hj_table_format_values( $cpanel, 'check' ); ?></td>
			</tr>
		<?php endif; ?>

		<?php if ( isset( $databases ) && !empty( $databases ) ) : ?>
			<tr>
				<th class="col-md-10"><?php _e( 'Databases' ); ?></th>
				<td class="col-md-2"><?php echo hj_table_format_values( $databases ); ?></td>
			</tr>
		<?php endif; ?>

		<?php if ( isset( $emailsnr ) && !empty( $emailsnr ) ) : ?>
			<tr>
				<th class="col-md-10"><?php _e( 'E-mail Accounts' ); ?></th>
				<td class="col-md-2"><?php echo hj_table_format_values( $emailsnr ); ?></td>
			</tr>
		<?php endif; ?>

		<?php if ( isset( $softaculous ) && !empty( $softaculous ) ) : ?>
			<tr>
				<th class="col-md-10"><?php _e( 'Softaculous' ); ?></th>
				<td class="col-md-2"><?php echo hj_table_format_values( $softaculous, 'check' ); ?></td>
			</tr>
		<?php endif; ?>

		<?php if ( isset( $fantastico ) && !empty( $fantastico ) ) : ?>
			<tr>
				<th class="col-md-10"><?php _e( 'Fantastico' ); ?></th>
				<td class="col-md-2"><?php echo hj_table_format_values( $fantastico, 'check' ); ?></td>
			</tr>
		<?php endif; ?>

		<?php if ( isset( $addondomain ) && !empty( $addondomain ) ) : ?>
			<tr>
				<th class="col-md-10"><?php _e( 'Addon Domains' ); ?></th>
				<td class="col-md-2"><?php echo hj_table_format_values( $addondomain ); ?></td>
			</tr>
		<?php endif; ?>

		<?php if ( isset( $parkdomains ) && !empty( $parkdomains ) ) : ?>
			<tr>
				<th class="col-md-10"><?php _e( 'Parked Domains' ); ?></th>
				<td class="col-md-2"><?php echo hj_table_format_values( $parkdomains ); ?></td>
			</tr>
		<?php endif; ?>

		<?php if ( isset( $freedomain ) && !empty( $freedomain ) ) : ?>
			<tr>
				<th class="col-md-10"><?php _e( 'Free Domain' ); ?></th>
				<td class="col-md-2"><?php echo hj_table_format_values( $freedomain, 'check' ); ?></td>
			</tr>
		<?php endif; ?>

		<?php if ( isset( $subdomains ) && !empty( $subdomains ) ) : ?>
			<tr>
				<th class="col-md-10"><?php _e( 'Sub-Domains' ); ?></th>
				<td class="col-md-2"><?php echo hj_table_format_values( $subdomains ); ?></td>
			</tr>
		<?php endif; ?>

		<?php if ( isset( $ftp ) && !empty( $ftp ) ) : ?>
			<tr>
				<th class="col-md-10"><?php _e( 'FTP Access' ); ?></th>
				<td class="col-md-2"><?php echo hj_table_format_values( $ftp, 'check' ); ?></td>
			</tr>
		<?php endif; ?>
	</table>


	<?php
		/*
		 * The SUPPORT table
		 */
	?>
	<table class="table table-bordered table-striped">

		<tr class="info"><td colspan="2">Support</td></tr>

		<?php if ( isset( $uptimeguara ) && !empty( $uptimeguara ) ) : ?>
			<tr>
				<th class="col-md-10"><?php _e( '99.9% Uptime Guarantee' ); ?></th>
				<td class="col-md-2"><?php echo hj_table_format_values( $uptimeguara, 'check' ); ?></td>
			</tr>
		<?php endif; ?>

		<?php if ( isset( $support247 ) && !empty( $support247 ) ) : ?>
			<tr>
				<th class="col-md-10"><?php _e( '24/7 Support' ); ?></th>
				<td class="col-md-2"><?php echo hj_table_format_values( $support247, 'check' ); ?></td>
			</tr>
		<?php endif; ?>

		<?php if ( isset( $moneyback ) && !empty( $moneyback ) ) : ?>
			<tr>
				<th class="col-md-10"><?php _e( '30-Day Money Back Guarantee' ); ?></th>
				<td class="col-md-2"><?php echo hj_table_format_values( $moneyback, 'check' ); ?></td>
			</tr>
		<?php endif; ?>
	</table>


	<?php
		/*
		 * The EMAIL FEATURES table
		 */
	?>
	<table class="table table-bordered table-striped">

		<tr class="info"><td colspan="2">email features</td></tr>

		<?php if ( isset( $spamfilter ) && !empty( $spamfilter ) ) : ?>
			<tr>
				<th class="col-md-10"><?php _e( 'Spam Filters' ); ?></th>
				<td class="col-md-2"><?php echo hj_table_format_values( $spamfilter, 'check' ); ?></td>
			</tr>
		<?php endif; ?>

		<?php if ( isset( $antivirus ) && !empty( $antivirus ) ) : ?>
			<tr>
				<th class="col-md-10"><?php _e( 'Virus Protection' ); ?></th>
				<td class="col-md-2"><?php echo hj_table_format_values( $antivirus, 'check' ); ?></td>
			</tr>
		<?php endif; ?>

		<?php if ( isset( $boxtrappers ) && !empty( $boxtrappers ) ) : ?>
			<tr>
				<th class="col-md-10"><?php _e( 'Boxtrappers' ); ?></th>
				<td class="col-md-2"><?php echo hj_table_format_values( $boxtrappers, 'check' ); ?></td>
			</tr>
		<?php endif; ?>

		<?php if ( isset( $horde ) && !empty( $horde ) ) : ?>
			<tr>
				<th class="col-md-10"><?php _e( 'Horde' ); ?></th>
				<td class="col-md-2"><?php echo hj_table_format_values( $horde, 'check' ); ?></td>
			</tr>
		<?php endif; ?>

		<?php if ( isset( $squirrel ) && !empty( $squirrel ) ) : ?>
			<tr>
				<th class="col-md-10"><?php _e( 'SquirrelMail' ); ?></th>
				<td class="col-md-2"><?php echo hj_table_format_values( $squirrel, 'check' ); ?></td>
			</tr>
		<?php endif; ?>

		<?php if ( isset( $roundcube ) && !empty( $roundcube ) ) : ?>
			<tr>
				<th class="col-md-10"><?php _e( 'roundcube' ); ?></th>
				<td class="col-md-2"><?php echo hj_table_format_values( $roundcube, 'check' ); ?></td>
			</tr>
		<?php endif; ?>

		<?php if ( isset( $imap ) && !empty( $imap ) ) : ?>
			<tr>
				<th class="col-md-10"><?php _e( 'IMAP Support' ); ?></th>
				<td class="col-md-2"><?php echo hj_table_format_values( $imap, 'check' ); ?></td>
			</tr>
		<?php endif; ?>

		<?php if ( isset( $forwarder ) && !empty( $forwarder ) ) : ?>
			<tr>
				<th class="col-md-10"><?php _e( 'Unlimited! E-mail Forwarders' ); ?></th>
				<td class="col-md-2"><?php echo hj_table_format_values( $forwarder, 'check' ); ?></td>
			</tr>
		<?php endif; ?>

		<?php if ( isset( $responder ) && !empty( $responder ) ) : ?>
			<tr>
				<th class="col-md-10"><?php _e( 'Unlimited! E-mail Responders' ); ?></th>
				<td class="col-md-2"><?php echo hj_table_format_values( $responder, 'check' ); ?></td>
			</tr>
		<?php endif; ?>

		<?php if ( isset( $smtp ) && !empty( $smtp ) ) : ?>
			<tr>
				<th class="col-md-10"><?php _e( 'SMTP' ); ?></th>
				<td class="col-md-2"><?php echo hj_table_format_values( $smtp, 'check' ); ?></td>
			</tr>
		<?php endif; ?>
	</table>


	<?php
		/*
		 * The OTHER FEATURES table
		 */
	?>
	<table class="table table-bordered table-striped">

		<tr class="info"><td colspan="2">Other Features</td></tr>

		<?php if ( isset( $php5 ) && !empty( $php5 ) ) : ?>
			<tr>
				<th class="col-md-10"><?php _e( 'PHP 5' ); ?></th>
				<td class="col-md-2"><?php echo hj_table_format_values( $php5, 'check' ); ?></td>
			</tr>
		<?php endif; ?>

		<?php if ( isset( $perl ) && !empty( $perl ) ) : ?>
			<tr>
				<th class="col-md-10"><?php _e( 'PERL' ); ?></th>
				<td class="col-md-2"><?php echo hj_table_format_values( $perl, 'check' ); ?></td>
			</tr>
		<?php endif; ?>

		<?php if ( isset( $mysql ) && !empty( $mysql ) ) : ?>
			<tr>
				<th class="col-md-10"><?php _e( 'MySQL' ); ?></th>
				<td class="col-md-2"><?php echo hj_table_format_values( $mysql, 'check' ); ?></td>
			</tr>
		<?php endif; ?>

		<?php if ( isset( $postgresql ) && !empty( $postgresql ) ) : ?>
			<tr>
				<th class="col-md-10"><?php _e( 'PostgreSQL' ); ?></th>
				<td class="col-md-2"><?php echo hj_table_format_values( $postgresql, 'check' ); ?></td>
			</tr>
		<?php endif; ?>

		<?php if ( isset( $js ) && !empty( $js ) ) : ?>
			<tr>
				<th class="col-md-10"><?php _e( 'Javascript' ); ?></th>
				<td class="col-md-2"><?php echo hj_table_format_values( $js, 'check' ); ?></td>
			</tr>
		<?php endif; ?>

		<?php if ( isset( $cgibin ) && !empty( $cgibin ) ) : ?>
			<tr>
				<th class="col-md-10"><?php _e( 'CGI-Bin' ); ?></th>
				<td class="col-md-2"><?php echo hj_table_format_values( $cgibin, 'check' ); ?></td>
			</tr>
		<?php endif; ?>

		<?php if ( isset( $gd ) && !empty( $gd ) ) : ?>
			<tr>
				<th class="col-md-10"><?php _e( 'GD Library' ); ?></th>
				<td class="col-md-2"><?php echo hj_table_format_values( $gd, 'check' ); ?></td>
			</tr>
		<?php endif; ?>

		<?php if ( isset( $dirprotect ) && !empty( $dirprotect ) ) : ?>
			<tr>
				<th class="col-md-10"><?php _e( 'Directory Protection' ); ?></th>
				<td class="col-md-2"><?php echo hj_table_format_values( $dirprotect, 'check' ); ?></td>
			</tr>
		<?php endif; ?>

		<?php if ( isset( $sendmail ) && !empty( $sendmail ) ) : ?>
			<tr>
				<th class="col-md-10"><?php _e( 'Sendmail' ); ?></th>
				<td class="col-md-2"><?php echo hj_table_format_values( $sendmail, 'check' ); ?></td>
			</tr>
		<?php endif; ?>

		<?php if ( isset( $carts ) && !empty( $carts ) ) : ?>
			<tr>
				<th class="col-md-10"><?php _e( 'Shopping Carts' ); ?></th>
				<td class="col-md-2"><?php echo hj_table_format_values( $carts, 'check' ); ?></td>
			</tr>
		<?php endif; ?>

		<?php if ( isset( $zend ) && !empty( $zend ) ) : ?>
			<tr>
				<th class="col-md-10"><?php _e( 'Zend Optimizer' ); ?></th>
				<td class="col-md-2"><?php echo hj_table_format_values( $zend, 'check' ); ?></td>
			</tr>
		<?php endif; ?>

		<?php if ( isset( $crons ) && !empty( $crons ) ) : ?>
			<tr>
				<th class="col-md-10"><?php _e( 'Cronjobs' ); ?></th>
				<td class="col-md-2"><?php echo hj_table_format_values( $crons, 'check' ); ?></td>
			</tr>
		<?php endif; ?>

		<?php if ( isset( $ioncube ) && !empty( $ioncube ) ) : ?>
			<tr>
				<th class="col-md-10"><?php _e( 'Ioncube' ); ?></th>
				<td class="col-md-2"><?php echo hj_table_format_values( $ioncube, 'check' ); ?></td>
			</tr>
		<?php endif; ?>

		<?php if ( isset( $backups ) && !empty( $backups ) ) : ?>
			<tr>
				<th class="col-md-10"><?php _e( 'Ability to Backup/Restore' ); ?></th>
				<td class="col-md-2"><?php echo hj_table_format_values( $backups, 'check' ); ?></td>
			</tr>
		<?php endif; ?>
	</table>


	<?php
		/*
		 * The STATISTICS table
		 */
	?>
	<table class="table table-bordered table-striped">

		<tr class="info"><td colspan="2">Statistics</td></tr>

		<?php if ( isset( $anstats ) && !empty( $anstats ) ) : ?>
			<tr>
				<th class="col-md-10"><?php _e( 'Analog Stats' ); ?></th>
				<td class="col-md-2"><?php echo hj_table_format_values( $anstats, 'check' ); ?></td>
			</tr>
		<?php endif; ?>

		<?php if ( isset( $awstats ) && !empty( $awstats ) ) : ?>
			<tr>
				<th class="col-md-10"><?php _e( 'Awstats' ); ?></th>
				<td class="col-md-2"><?php echo hj_table_format_values( $awstats, 'check' ); ?></td>
			</tr>
		<?php endif; ?>

		<?php if ( isset( $webalizer ) && !empty( $webalizer ) ) : ?>
			<tr>
				<th class="col-md-10"><?php _e( 'Webalizer' ); ?></th>
				<td class="col-md-2"><?php echo hj_table_format_values( $webalizer, 'check' ); ?></td>
			</tr>
		<?php endif; ?>
	</table>
	<?php
}
add_action( 'shoestrap_single_after_content', 'hj_hosting_after_hosting' );


function hj_table_format_values( $val, $format = '' ) {
	if ( $format == '' ) :
		if ( $val == '' || !isset( $val ) || is_null( $val ) ) :
			$return = '<i class="el-icon-minus null hosting-mark"></i>';
		else :
			$return = $val;
		endif;
	elseif ( $format == 'check' ) :
		if ( $val ) :
			$return = '<i class="el-icon-ok green hosting-mark"></i>';
		else :
			$return = '<i class="el-icon-remove red hosting-mark"></i>';
		endif;
	endif;

	return $return;
}