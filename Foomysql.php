<?php 

namespace Bookstore\foomysqli;
/**
 * mysql connection
 */
class Foo_Mysqli extends mysqli
{
	
	function __construct($host,$user,$pass,$db)
	{
		parent::__construct($host,$user,$pass,$db);

		if(mysqli_connect_error()){
			die('connection Error (' . mysqli_connect_errno() . ')' . mysqli_connect_error()) ;
		}
	}
}

?>