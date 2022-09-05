<?php
  function connect(){
    $idc=pg_connect('host=gfraw00008110 user=postgres password=Postgre_gis dbname=BDD_PF');
    return($idc);

  }
?>
