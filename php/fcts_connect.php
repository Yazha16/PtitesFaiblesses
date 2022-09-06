<?php
  function connect(){
    $idc= new mysqli("localhost", "root", "","bdd_ptites");
    return($idc);
  }
?>