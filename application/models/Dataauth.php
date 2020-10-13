<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dataauth extends CI_Model {

	function auth_user($username,$password){
		$sql = $this->db->query("SELECT * FROM user WHERE username = '$username' AND password = md5('$password') LIMIT 1");
		return $sql;
	}

}
