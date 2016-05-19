<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_account extends CI_Model{

	function __construct()
	{
		parent::__construct();
	}

	function encryptIt($q ) {
		$cryptKey  = 'qJB0rGtIn5UB1xG03efyCp';
		$qEncoded      = base64_encode( mcrypt_encrypt( MCRYPT_RIJNDAEL_256, md5( $cryptKey ), $q, MCRYPT_MODE_CBC, md5( md5( $cryptKey ) ) ) );
		return( $qEncoded );
	}

	function checkLogin()
	{
		$username = $this->input->post('txtUsername');
		$password = $this->input->post('txtPassword');
		$password = $this::encryptIt($password);
		if ($username != '' && $password != '')
		{
			$sql = "select * from account where username = '$username' and password = '$password'";
			$query = $this->db->query($sql);
			if ($query->num_rows() > 0)
			{
				return $query->result();
			}
			else
			{
				return'login_fail';
			}
		}
		else
		{
			return NULL;
		}
	}


	function getListUsername()
	{
		$sql = "select username from account where 1";
		$query = $this->db->query($sql);
		if ($query->num_rows() > 0)
		{
			return $query->result();
		}
		else
		{
			return NULL;
		}
	}

	function checkUsername($username){
		$sql = "SELECT * FROM `account` WHERE `USERNAME` = '$username'";
		$query = $this->db->query($sql);
		if ($query->num_rows() > 0)
		{
			return 1;
		}
		else
		{
			return 0;
		}
	}

	function insertAccount($username, $password, $email)
	{	
		$sql = "INSERT INTO `account`(`USERNAME`, `PASSWORD`, `EMAIL`) VALUES ('$username','$password','$email')";
		$result = $this->db->query($sql);
		return $result;
	}
} 
?>