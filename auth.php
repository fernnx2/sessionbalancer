<?php

require("session.php");
session_start();
function auth($user,$password,$type){

$config['version'] = '3.0';
$config['urlLdap'] = 'ldap://172.17.0.5:389';
$config['baseLdap'] = 'dc=paneschucos,dc=occ,dc=ues,dc=edu,dc=sv';
$config['usernameConsultaLdap'] = 'cn='.$user.',dc=paneschucos,dc=occ,dc=ues,dc=edu,dc=sv';
$config['passwordConsultaLdap'] = $password;
$config['baseSearch'] = 'ou=usuarios,dc=paneschucos,dc=occ,dc=ues,dc=edu,dc=sv';

	if($type=='cookie'){
	sessionStartCookie($user,$password,$config);
	}
	else{
	sessionStart($user,$password,$config);
	}
    	header("location:dashboard.php");
}
?>
