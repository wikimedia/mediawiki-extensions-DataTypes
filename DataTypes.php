<?php

/**
 * DataTypes extension
 *
 * @ingroup Extensions
 *
 * The license governing the extension code:
 * @license GNU General Public Licence 2.0 or later
 */

if ( function_exists( 'wfLoadExtension' ) ) {
	wfLoadExtension( 'DataTypes', __DIR__ . '/extension.json' );
	/* wfWarn(
		'Deprecated PHP entry point used for DataTypes extension. ' .
		'Please use wfLoadExtension instead, ' .
		'see https://www.mediawiki.org/wiki/Extension_registration for more details.'
	); */
	return true;
} else {
	die( 'This version of the DataTypes extension requires MediaWiki 1.25+' );
}
