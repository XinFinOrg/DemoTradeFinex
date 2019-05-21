<?php
defined('BASEPATH') OR exit('No direct script access allowed');
session_start();
require_once APPPATH.'libraries/facebook-php-sdk/autoload.php';

class User_Authentication extends CI_Controller
{
	public function __construct()
	{
        parent::__construct();
        $this->load->library('facebook');
	}
	
	public function index()
	{
		$this->load->view('login_view');

	}
	public function fblogin()
	{
	  //   $fb = new Facebook\Facebook([
		// 	'app_id' => '2080555445396680',
		// 	'app_secret' => 'e169cd179a489dfc3901a69f9771d29e',
		// 	'default_graph_version' => 'v3.2',
		// 	'persistent_data_handler' => 'session'
			
		//   ]);
  
		// $helper = $fb->getRedirectLoginHelper();
		
		$fb = new \Facebook\Facebook([ 'app_id' => '2080555445396680', 'app_secret' => 'e169cd179a489dfc3901a69f9771d29e', 'default_graph_version' => 'v3.2', 'persistent_data_handler' => 'session' ]);
		$helper = $fb->getRedirectLoginHelper(); if (isset($_GET['state'])) { $helper->getPersistentDataHandler()->set('state', $_GET['state']); }
		$permissions = ['email']; 
	// For more permissions like user location etc you need to send your application for review
	
		$loginUrl = $helper->getLoginUrl('https://demo.tradefinex.org/publicv/bond_create', $permissions);
		header("location: ".$loginUrl);
	}	

	public function fbcallback()
	{
		// $fb = new Facebook\Facebook([
		// 	'app_id' => '2080555445396680',
		// 	'app_secret' => 'e169cd179a489dfc3901a69f9771d29e',
		// 	'default_graph_version' => 'v3.2',
		// 	'persistent_data_handler' => 'session'
			
		// 	]);
		$fb = new \Facebook\Facebook([ 'app_id' => '2080555445396680', 'app_secret' => 'e169cd179a489dfc3901a69f9771d29e', 'default_graph_version' => 'v3.2', 'persistent_data_handler' => 'session' ]);
		$helper = $fb->getRedirectLoginHelper(); if (isset($_GET['state'])) { $helper->getPersistentDataHandler()->set('state', $_GET['state']); }
			
			// $helper = $fb->getRedirectLoginHelper();  
	  
				if(isset($session)) {
					$accessToken = $session->getToken();
				} else {
					$accessToken = $helper->getAccessToken('https://demo.tradefinex.org/publicv/bond_create');
				}	 
	 
			  $response = $fb->get('/me?fields=id,name,email,first_name,last_name,birthday,location,gender', $accessToken);
			 	
			// User Information Retrival begins................................................
			$me = $response->getGraphUser();
			echo $me;
			die;
			$location = $me->getProperty('location');
			echo "Full Name: ".$me->getProperty('name')."<br>";
			echo "First Name: ".$me->getProperty('first_name')."<br>";
			echo "Last Name: ".$me->getProperty('last_name')."<br>";
			echo "Gender: ".$me->getProperty('gender')."<br>";
			echo "Email: ".$me->getProperty('email')."<br>";
			echo "location: ".$location['name']."<br>";
			echo "Facebook ID: <a href='https://www.facebook.com/".$me->getProperty('id')."' target='_blank'>".$me->getProperty('id')."</a>"."<br>";
			$profileid = $me->getProperty('id');
			echo "</br><img src='//graph.facebook.com/$profileid/picture?type=large'> ";
			echo "</br></br>Access Token : </br>".$accessToken; 
	}
}
?>
