<?php 
session_start();
	$message="";
	if(!isset($categdel))
	  {
	    header('location:dashboard');

	  }else{
	    
	    $id=$categdel;
	  }

	$id=$categdel;

	$suppression=$bd->query("DELETE FROM categorie WHERE id='$id' LIMIT 1");

	if($suppression)
	{
		$message="<span style='color:green'>Suppression categorie  réussis</sapn>";
	}else{
		$message="<span style='color:red'>Erreur de suppression</span>";
	}

 ?>