<?php
/*
Plugin Name: √ WP Missed Schedule Gold
Plugin URI: http://slangji.wordpress.com/wp-missed-schedule/
Description: &#9733;&#9733;&#9733; WP <code>Missed Schedule</code> Fix Future Posts: find Scheduled that match this problem, and it Republish them Correctly 10 items per session, every 43200 minute. All others will be solved on next sessions, until no longer exist: 10 failed future posts every 43200 minute, 10 failed future posts every 12 hour, 1 session every 43200 minute, 1 sessions every 12 hour. The default 10 Failed Future Posts per session, was introduced for compatibility with default WordPress Items Feed Syndication. The configuration of this plugin is Automattic! Work under <a href="http://www.gnu.org/licenses/gpl-2.0.html" title"GPLv2 or later License compatible">GPLv2</a> or later License. <a href="http://www.gnu.org/prep/standards/standards.html" title"GNU Style indentation coding standard compatible">GNU Style</a> indentation compatible. | <a href="http://slangji.wordpress.com/donate/" title="Free Donation">Donate</a> | <a href="http://slangji.wordpress.com/contact/" title="Send Me Bug and Suggestion">Contact</a> | <a href="http://wordpress.org/extend/plugins/wp-overview-lite/" title="Show Dashboard Overview and Footer Memory Load Usage">WP Overview?</a> | <a href="http://wordpress.org/extend/plugins/wp-missed-schedule/" title="Fix Missed Scheduled Future Posts Cron Job">WP Missed Schedule?</a> | <a href="http://wordpress.org/extend/plugins/wp-admin-bar-removal/" title="Remove Admin Bar Frontend Backend User Profile and Code">Admin Bar Removal?</a> | <a href="http://wordpress.org/extend/plugins/wp-toolbar-removal/" title="Remove ToolBar Frontend Backend User Profile and Code">ToolBar Removal?</a> | <a href="http://wordpress.org/extend/plugins/wp-login-deindexing/" title="Total DeIndexing WordPress LogIn from all Search Engines">LogIn DeIndexing?</a> | <a href="http://wordpress.org/extend/plugins/wp-total-deindexing/" title="Total DeIndexing WordPress from all Search Engines">WP DeIndexing?</a> | <a href="http://wordpress.org/extend/plugins/wp-ie-enhancer-and-modernizer/" title="Enhancer and Modernizer IE Surfing Expirience">Enhancer IE Surfing?</a> | <a href="http://wordpress.org/extend/plugins/wp-wp-memory-db-indicator/" title="Memory Load Consumption db size Usage Indicator">Memory and db Indicator?</a> | <a href="http://wordpress.org/extend/plugins/wp-header-and-footer-log/" title="Insert Informational Text Log on Header and Footer when Plugin is Activated">Header and Footer Log?</a>
Version: 2013.0531.4444
Author: sLa
Author URI: http://slangji.wordpress.com/
Requires at least: 2.6
Tested up to: 3.6
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
Indentation: GNU Style
Indentation URI: http://www.gnu.org/prep/standards/standards.html
 *
 * DEVELOPMENT Release: Version 2013 Build 0530-BUGFIX.1840-DEVELOPMENTAL
 *
 * [WP Missed Schedule](http://wordpress.org/extend/plugins/wp-missed-schedule/) Fix Missed Scheduled Future Posts Cron Job
 *
 * Copyright (C) 2008-2013 [sLaNGjI's](http://slangji.wordpress.com/slangjis/) (email: <slangji[at]gmail[dot]com>)
 *
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the [GNU General Public License](http://wordpress.org/about/gpl/)
 * as published by the Free Software Foundation; either version 2
 * of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, see [GNU General Public Licenses](http://www.gnu.org/licenses/),
 * or write to the Free Software Foundation, Inc., 51 Franklin Street,
 * Fifth Floor, Boston, MA 02110-1301, USA.
 *
 * √ THERMS
 *
 * This uses (or it parts) code derived from
 * wp-header-footer-log.php by sLa <slangji[at]gmail[dot]com>
 * according to the terms of the GNU General Public License version 2 (or later)
 *
 * This wp-header-footer-log.php uses (or it parts) code derived from
 * wp-footer-log.php by sLa <slangji[at]gmail[dot]com>
 * sLa2sLaNGjIs.php by sLa <slangji[at]gmail[dot]com>
 * according to the terms of the GNU General Public License version 2 (or later)
 *
 * According to the Terms of the GNU General Public License version 2 (or later) part of Copyright belongs to your own author and part belongs to their respective others authors:
 *
 * Copyright (C) 2008-2013 sLa (email: <slangji[at]gmail[dot]com>)
 *
 * √ DISCLAIMER
 *
 * The license under which the WordPress software is released is the GPLv2 (or later) from the
 * Free Software Foundation. A copy of the license is included with every copy of WordPress.
 *
 * Part of this license outlines requirements for derivative works, such as plugins or themes.
 * Derivatives of WordPress code inherit the GPL license.
 *
 * There is some legal grey area regarding what is considered a derivative work, but we feel
 * strongly that plugins and themes are derivative work and thus inherit the GPL license.
 *
 * The license for this software can be found on [Free Software Foundation](http://www.gnu.org/licenses/gpl-2.0.html) and as license.txt into this plugin package.
 *
 * The author of this plugin is available at any time, to make all changes, or corrections, to respect these specifications.
 *
 * √ VIOLATIONS
 *
 * [Violations of the GNU Licenses](http://www.gnu.org/licenses/gpl-violation.en.html)
 * The author of this plugin is available at any time, to make all changes, or corrections, to respect these specifications.
 *
 * √ GUIDELINES
 *
 * This software meet [Detailed Plugin Guidelines](http://wordpress.org/extend/plugins/about/guidelines/) paragraphs 1,4,10,12,13,16,17 quality requirements.
 * The author of this plugin is available at any time, to make all changes, or corrections, to respect these specifications.
 *
 * √ CODING
 *
 * This software implement [GNU style](http://www.gnu.org/prep/standards/standards.html) coding standard indentation.
 * The author of this plugin is available at any time, to make all changes, or corrections, to respect these specifications.
 *
 * √ VALIDATION
 *
 * This readme.txt rocks. Seriously. Flying colors. It meet the specifications according to WordPress [Readme Validator](http://wordpress.org/extend/plugins/about/validator/) directives.
 * The author of this plugin is available at any time, to make all changes, or corrections, to respect these specifications.
 */

/**
 * @package WP Missed Schedule
 * @subpackage WordPress PlugIn
 * @description Fix Missed Scheduled Future Posts Cron Job
 * @since 2.6.0
 * @version 2013.0531.4444
 * @status STABLE (release)
 * @author sLa
 * @license GPLv2 or later
 * @indentation GNU Style
 * @keybit b79H8651411574J4YQCeLCQM540kT29FPANa8zFXj3lC62m78BbFMtb3g46FsK338
 * @keysum CD55116071EBB7A748520CD47560D020
 * @keytag edcb48f0d130ca1974cf9bab6cb27fc3
 */

if ( !function_exists( 'add_action' ) )
	{
		header( 'HTTP/0.9 403 Forbidden' );
		header( 'HTTP/1.0 403 Forbidden' );
		header( 'HTTP/1.1 403 Forbidden' );
		header( 'Status: 403 Forbidden' );
		header( 'Connection: Close' );
		exit();
	}

define( 'WPMS_OPTION', 'wp_missed_schedule' );

	function wpms_init()
		{
			$last = get_option( WPMS_OPTION, false );
			if ( ( $last !== false ) && ( $last > ( time() - ( 43200 * 60 ) ) ) )
					return;
			update_option( WPMS_OPTION, time() );

			global $wpdb;

			$sql = $wpdb->prepare(
			"SELECT`ID`FROM`{$wpdb->posts}`"."WHERE("."((`post_date`>0)&&(`post_date`<=%s))OR"."((`post_date_gmt`>0)&&(`post_date_gmt`<=%s))".")AND`post_status`='future'LIMIT 10",
			current_time( 'mysql' ),
			current_time( 'mysql', 1 )
			);

			$scheduledIDs=$wpdb->get_col($sql);

			if ( !count( $scheduledIDs ) )
					return;
			foreach ( $scheduledIDs as $scheduledID )
				{
					if ( !$scheduledID )
							continue;
					wp_publish_post( $scheduledID );
				}
		}
	add_action('init', 'wpms_init', 0);

function wpms_log()
	{
		echo "\n<!--Plugin WP Missed Schedule 2013.0531.4444 Gold Active - Tag: ".md5(md5("b79H8651411574J4YQCeLCQM540kT29FPANa8zFXj3lC62m78BbFMtb3g46FsK338"."CD55116071EBB7A748520CD47560D020"))."-->\n\n";
	}
add_action( 'wp_head', 'wpms_log' );
add_action( 'wp_footer', 'wpms_log' );

function wpms_db_clnp()
	{
		delete_option( WPMS_OPTION );
	}
register_deactivation_hook(__FILE__, 'wpms_db_clnp', 0);

?>