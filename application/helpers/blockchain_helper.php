<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/* Written by Mansi */
/* Dated : 09-12-2019 */

if (!function_exists('createAddress'))
{
    function createAddress()
    {
        try{
            $output = array();
            $value = "createAcnt";
            
            $node = exec('cd && node test.js --func='.$value,$output);
            // var_dump($output);
            log_message('info','Get Address and Private Key'.$output.$value);
            return $output;
        
        }
        catch (Exception $e) {
            log_message("error".$e->getMessage());
            return '0';
        }
        
    }
}
if (!function_exists('getBalance'))
{
    function getBalance($addr)
    {
        try{
            $output = array();
            $value = "getBal";
            $node = exec('cd && node test.js --func='.$value.' --addr='.$addr,$output);
            // var_dump($output);
            log_message('info','Get Balance of>>'.$addr);
            return $node;
        
        }
        catch (Exception $e) {
            log_message("error".$e->getMessage());
            return '0';
        }
        
    }
}
if (!function_exists('sendTokens'))
{
    function sendTokens($privKey,$toAddr,$value)
    {
        try{
            $output = array();
            $func = "signTx";
            $node = exec('cd && node test.js --func='.$func.' --privKey='.$privKey.' --to='.$toAddr.' --value='.$value,$output);
            // var_dump($output);
            log_message('info','send Tokens>>'.$output);
            return $output;
        
        }
        catch (Exception $e) {
            log_message("error".$e->getMessage());
            return '0';
        }
        
    }
}

if (!function_exists('uploadDoc'))
{
	function uploadDoc($options = array())
    {
        $CI =& get_instance();
		$CI->load->library('curl');
		
		$ipfshash = '';
		
		$rcurlpfstatus = $CI->curl->simple_post('http://90.0.0.84:3110/api/uploadDoc', $options);
		
		if($rcurlpfstatus){
            log_message("info",">>>>".$rcurlpfstatus.$$rcurlpfstatus->hash);
			$ipfshash = $rcurlpfstatus->hash;
		}
		
		return $ipfshash;
    }
}

if (!function_exists('generateContract'))
{
	function generateContract($options = array())
    {
        $CI =& get_instance();
		$CI->load->library('curl');
		
		$ipfshash = '';
		
		$rcurlpfstatus = $CI->curl->simple_post('http://90.0.0.84:3110/api/uploadDoc', $options);
		
		if($rcurlpfstatus){
            log_message("info",">>>>".$rcurlpfstatus.$$rcurlpfstatus->hash);
			$ipfshash = $rcurlpfstatus->hash;
		}
		
		return $ipfshash;
    }
}


