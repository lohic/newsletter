<?php
header('Content-type: text/html; charset=UTF-8');



include_once("../classe/classe_newsletter.php");
include_once("../classe/classe_dest.php");
include_once('../vars/statics_vars.php');

$dest	= new dest();

echo 'état : ';

$reponse = '';


if(!empty($_POST['id'])){
	
	$id_newsletter = $_POST['id'];

	if(!isset($news)){
		$news = new newsletter($id_newsletter);
	}
	if(empty($_POST['liste_destinataire']) && empty($_POST['dest'])&& empty($_POST['group'])){
		echo 'aucun destinataire n\'a été selectionné';
	}else{
		$find = array("\r\n", "\n", "\r", "\t", " ");
		
		$temp_liste = !empty($_POST['liste_destinataire'])?explode(',',str_replace($find,',',$_POST['liste_destinataire'])):array();
		$temp_sql	= !empty($_POST['dest'])?$_POST['dest']:array();
	
		//$mail_liste = array_unique(arraytolower(array_merge($temp_liste,$temp_sql)));
		
		if(!empty($_FILES['fichier_destinataire']['tmp_name'])){
			
			$temp_file = explode(',',str_replace($find, ',',file_get_contents($_FILES['fichier_destinataire']['tmp_name'])));
			
			$temp_liste = array_merge($temp_liste,$temp_file);
		}
		
		$mail_liste = $dest->unify_dest($_POST['dest'],$_POST['group'],$temp_liste);
		
		
		
		$news->send_newsletter('newsletter@sciences-po.fr',$mail_liste,$id_newsletter);
		
		
		//echo implode(', ',$dest->unify_dest($_POST['dest'],$_POST['group'],$temp_liste));
	
		echo 'la newsletter a bien été envoyée à : '.implode(', ',$mail_liste);
	}
}else{
	echo 'aucune newsletter sélectionnée';
}
 

?>