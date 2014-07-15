<?php
/***********************************************************************************************************
* Fancy Multiple File Upload using Ajax, Jquery and PHP
* Written by Bhavesh Bodar
* Website: www.esayscript4u.com
* Blog: easyscript4u.blogspot.in
* Email: easyscript4you@gmail.com
*/
// Database Connection Setting

define ('hostnameorservername','hostname'); // Your Server or Hostname goes in here
define ('serverusername','username'); // Your database Username goes in here
define ('serverpassword','password'); // Your database Password goes in here
define ('databasenamed','databasename'); // Your Database Name goes in here

global $connection;
$connection = @mysql_connect(hostnameorservername,serverusername,serverpassword) or die('Connection could not be made to the SQL Server. Please report this system error at <font color="blue">info@vasplus.info</font>');
@mysql_select_db(databasenamed,$connection) or die('Connection could not be made to the database. Please report this system error at <font color="blue">info@vasplus.info</font>');		
?>
