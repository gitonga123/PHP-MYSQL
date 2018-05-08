<?php 
	use Bookstore\foomysqli\Foo_mysqli;
	require_once __DIR__ . '/Foomysql.php';
	

	$db = new Foo_mysqli('localhost','root','daniel123','single_signon');

	var_dump('Success ...' . $db->host_info . "\n");

	$db->close();
	

?>