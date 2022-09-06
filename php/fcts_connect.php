<?php
  function connect(){
    $idc= new mysqli("localhost", "root", "","bdd_ptites");
    return($idc);
  }

/*include('php/fcts_connect.php');
			
		$idc=connect();

		$query = "SELECT plat_nom, plat_descr FROM plat";
		$result = $idc->query($query);
		while ($row = $result->fetch_row()) {
			echo $row[0];
			echo $row[1];
		}*/
?>