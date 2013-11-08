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

	<table class="table table-striped">
		<tr>
			<th><?php _e( 'Disk Space' ); ?></th>
			<td><?php echo hj_table_format_values( $disk ); ?></td>
		</tr>

		<tr>
			<th><?php _e( 'Bandwidth' ); ?></th>
			<td><?php echo hj_table_format_values( $bandwidth ); ?></td>
		</tr>
		<tr>
			<th><?php _e( 'cPanel' ); ?></th>
			<td><?php echo hj_table_format_values( $cpanel, 'check' ); ?></td>
		</tr>

		<tr>
			<th><?php _e( 'Databases' ); ?></th>
			<td><?php echo hj_table_format_values( $databases ); ?></td>
		</tr>

		<tr>
			<th><?php _e( 'E-mail Accounts' ); ?></th>
			<td><?php echo hj_table_format_values( $emailsnr ); ?></td>
		</tr>

		<tr>
			<th><?php _e( 'Softaculous' ); ?></th>
			<td><?php echo hj_table_format_values( $softaculous, 'check' ); ?></td>
		</tr>

		<tr>
			<th><?php _e( 'Fantastico' ); ?></th>
			<td><?php echo hj_table_format_values( $fantastico, 'check' ); ?></td></tr>

		<tr>
			<th><?php _e( 'Addon Domains' ); ?></th>
			<td><?php echo hj_table_format_values( $addondomain ); ?></td>
		</tr>

		<tr>
			<th><?php _e( 'Parked Domains' ); ?></th>
			<td><?php echo hj_table_format_values( $parkdomains ); ?></td>
		</tr>

		<tr>
			<th><?php _e( 'Free Domain' ); ?></th>
			<td><?php echo hj_table_format_values( $freedomain, 'check' ); ?></td>
		</tr>

		<tr>
			<th><?php _e( 'Sub-Domains' ); ?></th>
			<td><?php echo hj_table_format_values( $subdomains ); ?></td>
		</tr>

		<tr>
			<th><?php _e( 'FTP Access' ); ?></th>
			<td><?php echo hj_table_format_values( $ftp, 'check' ); ?></td></tr>

		<tr>
			<th><?php _e( '99.9% Uptime Guarantee' ); ?></th>
			<td><?php echo hj_table_format_values( $uptimeguara, 'check' ); ?></td>
		</tr>

		<tr>
			<th><?php _e( '24/7 Support' ); ?></th>
			<td><?php echo hj_table_format_values( $support247, 'check' ); ?></td>
		</tr>

		<tr>
			<th><?php _e( '30-Day Money Back Guarantee' ); ?></th>
			<td><?php echo hj_table_format_values( $moneyback, 'check' ); ?></td>
		</tr>

		<tr>
			<th><?php _e( 'Spam Filters' ); ?></th>
			<td><?php echo hj_table_format_values( $spamfilter, 'check' ); ?></td>
		</tr>

		<tr>
			<th><?php _e( 'Virus Protection' ); ?></th>
			<td><?php echo hj_table_format_values( $antivirus, 'check' ); ?></td>
		</tr>

		<tr>
			<th><?php _e( 'Boxtrappers' ); ?></th>
			<td><?php echo hj_table_format_values( $boxtrappers, 'check' ); ?></td>
		</tr>

		<tr>
			<th><?php _e( 'Horde' ); ?></th>
			<td><?php echo hj_table_format_values( $horde, 'check' ); ?></td>
		</tr>

		<tr>
			<th><?php _e( 'SquirrelMail' ); ?></th>
			<td><?php echo hj_table_format_values( $squirrel, 'check' ); ?></td>
		</tr>

		<tr>
			<th><?php _e( 'roundcube' ); ?></th>
			<td><?php echo hj_table_format_values( $roundcube, 'check' ); ?></td>
		</tr>

		<tr>
			<th><?php _e( 'IMAP Support' ); ?></th>
			<td><?php echo hj_table_format_values( $imap, 'check' ); ?></td>
		</tr>

		<tr>
			<th><?php _e( 'Unlimited! E-mail Forwarders' ); ?></th>
			<td><?php echo hj_table_format_values( $forwarder, 'check' ); ?></td>
		</tr>

		<tr>
			<th><?php _e( 'Unlimited! E-mail Responders' ); ?></th>
			<td><?php echo hj_table_format_values( $responder, 'check' ); ?></td>
		</tr>

		<tr>
			<th><?php _e( 'SMTP' ); ?></th>
			<td><?php echo hj_table_format_values( $smtp, 'check' ); ?></td></tr>

		<tr>
			<th><?php _e( 'PHP 5' ); ?></th>
			<td><?php echo hj_table_format_values( $php5, 'check' ); ?></td>
		</tr>

		<tr>
			<th><?php _e( 'PERL' ); ?></th>
			<td><?php echo hj_table_format_values( $perl, 'check' ); ?></td>
		</tr>

		<tr>
			<th><?php _e( 'MySQL' ); ?></th>
			<td><?php echo hj_table_format_values( $mysql, 'check' ); ?></td>
		</tr>

		<tr>
			<th><?php _e( 'PostgreSQL' ); ?></th>
			<td><?php echo hj_table_format_values( $postgresql, 'check' ); ?></td>
		</tr>

		<tr>
			<th><?php _e( 'Javascript' ); ?></th>
			<td><?php echo hj_table_format_values( $js, 'check' ); ?></td>
		</tr>

		<tr>
			<th><?php _e( 'CGI-Bin' ); ?></th>
			<td><?php echo hj_table_format_values( $cgibin, 'check' ); ?></td>
		</tr>

		<tr>
			<th><?php _e( 'GD Library' ); ?></th>
			<td><?php echo hj_table_format_values( $gd, 'check' ); ?></td>
		</tr>

		<tr>
			<th><?php _e( 'Directory Protection' ); ?></th>
			<td><?php echo hj_table_format_values( $dirprotect, 'check' ); ?></td>
		</tr>

		<tr>
			<th><?php _e( 'Sendmail' ); ?></th>
			<td><?php echo hj_table_format_values( $sendmail, 'check' ); ?></td>
		</tr>

		<tr>
			<th><?php _e( 'Shopping Carts' ); ?></th>
			<td><?php echo hj_table_format_values( $carts, 'check' ); ?></td>
		</tr>

		<tr>
			<th><?php _e( 'Zend Optimizer' ); ?></th>
			<td><?php echo hj_table_format_values( $zend, 'check' ); ?></td>
		</tr>

		<tr>
			<th><?php _e( 'Cronjobs' ); ?></th>
			<td><?php echo hj_table_format_values( $crons, 'check' ); ?></td>
		</tr>

		<tr>
			<th><?php _e( 'Ioncube' ); ?></th>
			<td><?php echo hj_table_format_values( $ioncube, 'check' ); ?></td>
		</tr>

		<tr>
			<th><?php _e( 'Ability to Backup/Restore' ); ?></th>
			<td><?php echo hj_table_format_values( $backups, 'check' ); ?></td>
		</tr>

		<tr>
			<th><?php _e( 'Analog Stats' ); ?></th>
			<td><?php echo hj_table_format_values( $anstats, 'check' ); ?></td>
		</tr>

		<tr>
			<th><?php _e( 'Awstats' ); ?></th>
			<td><?php echo hj_table_format_values( $awstats, 'check' ); ?></td>
		</tr>

		<tr>
			<th><?php _e( 'Webalizer' ); ?></th>
			<td><?php echo hj_table_format_values( $webalizer, 'check' ); ?></td></tr>
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