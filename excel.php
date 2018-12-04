<?php
// Test CVS
ini_set("display_errors",1);
$inputFileName = '/home/otbafrica/Documents/data/sportpesa.xml';

$dom = DOMdocument::load($inputFileName);
$rows = $dom->getElementsByTagName('Row');
var_dump($rows);
 $first_row = true;
  foreach ($rows as $row)
  {
	  if ( !$first_row )
	  {
		  $date = "";
		  $middle = "";
		  $last = "";
		  $email = "";
		  
		  $index = 1;
		  $name = array();
		  $first_name = array();


		  $cells = $row->getElementsByTagName('Cell');
		  foreach( $cells as $cell )
		  { 
			  $ind = $cell->getAttribute('Index');
			  if ( $ind != null ) $index = $ind;
			  if ( $index == 1 ) { 
			  	if (!empty($cell->nodeValue)) {
			  		$league_details[] = $cell->nodeValue;
			  	}
			  }
			  if ( $index == 2 ) {
			  	if (!empty($cell->nodeValue)) {
			       $team_details[] = $cell->nodeValue;
			  	}
			   
			 }
			  if ( $index == 3 ) {
			  	if (!empty($cell->nodeValue)) {
			        $draw [] = $cell->nodeValue;
			  	}
			 }
			  if ( $index == 4 ) {
			  	if (!empty($cell->nodeValue)) {
			        $away [] = $cell->nodeValue;
			  	}
			   
			 }
			  $index += 1;
		  }
	  }
	  $first_row = false;
  }
echo $league_details[1] . " " . $league_details[2] . " " .$league_details[0] . " " . $team_details[0] . " " . $team_details[1]. " " . $draw[0]. " " . $away[0] ;
echo "<br />" . "<br />";



