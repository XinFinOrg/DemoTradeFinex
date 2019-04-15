<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*!
* HybridAuth
* http://hybridauth.sourceforge.net | http://github.com/hybridauth/hybridauth
* (c) 2009-2012, HybridAuth authors | http://hybridauth.sourceforge.net/licenses.html
*/

// ----------------------------------------------------------------------------------------
//	HybridAuth Config file: http://hybridauth.sourceforge.net/userguide/Configuration.html
// ----------------------------------------------------------------------------------------

$config =
	array(
		// set on "base_url" the relative url that point to HybridAuth Endpoint
		'base_url' => '/hauth/endpoint',

		"providers" => array (
			// openid providers
			// "OpenID" => array (
			// 	"enabled" => true
			// ),

			// "Yahoo" => array (
			// 	"enabled" => true,
			// 	"keys"    => array ( "id" => "", "secret" => "" ),
			// ),

			// "AOL"  => array (
			// 	"enabled" => true
			// ),

			"Google" => array (
				"enabled" => true,
				"keys"    => array ( "id" => "974340167294-4tm547181uu7v0gtqj4d1bv4gp1ffugq.apps.googleusercontent.com", "secret" => "s1gEY7eIayJBjcYHbsvnA8Ha" ),
				"redirect_uri"=> "https://demo.tradefinex.org/hauth/?hauth.done=google",

			),

			"Facebook" => array (
				"enabled" => true,
				"keys"    => array ( "id" => "2080555445396680", "secret" => "e169cd179a489dfc3901a69f9771d29e" ),
				"redirect_uri"=> "https://demo.tradefinex.org/hauth",
			),

			"GitHub" => array (
				"enabled" => true,
				"keys" => array("id" => "9165e7bb6bc76709e42e", "secret" =>"587a7cb2b2901967518ff28cfde11cf89b37ece4"),
				"redirect_uri"=>"http://localhost/demotrade/hauth/?hauth.done=github",

			),

			// "Twitter" => array (
			// 	"enabled" => true,
			// 	"keys"    => array ( "key" => "", "secret" => "" )
			// ),

			// windows live
			// "Live" => array (
			// 	"enabled" => true,
			// 	"keys"    => array ( "id" => "", "secret" => "" )
			// ),

			// "MySpace" => array (
			// 	"enabled" => true,
			// 	"keys"    => array ( "key" => "", "secret" => "" )
			// ),

			// "LinkedIn" => array (
			// 	"enabled" => true,
			// 	"keys"    => array ( "key" => "", "secret" => "" )
			// ),

			// "Foursquare" => array (
			// 	"enabled" => true,
			// 	"keys"    => array ( "id" => "", "secret" => "" )
			// ),
		),

		// if you want to enable logging, set 'debug_mode' to true  then provide a writable file by the web server on "debug_file"
		"debug_mode" => (ENVIRONMENT == 'development'),

		"debug_file" => APPPATH.'/logs/hybridauth.log',
	);


/* End of file hybridauthlib.php */
/* Location: ./application/config/hybridauthlib.php */