<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_connectionbdd = "mysql.axs-fr.net";
$database_connectionbdd = "bddapplibtp";
$username_connectionbdd = "superusersuper";
$password_connectionbdd = "looping74";
$connectionbdd = mysql_pconnect($hostname_connectionbdd, $username_connectionbdd, $password_connectionbdd) or trigger_error(mysql_error(),E_USER_ERROR); 
?>