<!-- //////////////// -->
<!-- BLOC DE NEWS     -->
<!-- //////////////// -->
<div style="width:155px" class="bloc">
    <a name="item-<?php echo $id;?>" id="item-<?php echo $id;?>"></a>
    <?php if(isset($image)){?><img src="<?php echo $image?>" width="155" alt="photo"/><?php } ?>
    <div style="background:#CCC;padding:2px;text-align:right;" class="date"><strong><?php echo $date?></strong></div>
    
    <h2 style="color:#66cc33"><?php echo $titre?></h2>
    
    <div style="width:155px;height:1px;clear:both;"></div>
   
    <?php if($origine == "evenement_db" || $origine == "evenement_new_db"){ ?>
    
    <p style="" class="texte">
		<?php if($isInscription == '1'){?>
        	<a href="http://www.sciencespo.fr/evenements/inscription/inscription_multiple.php?id=<?php echo $id_event;?>&fromnews=<?php echo $news_id; ?>" target="_blank">
            <img src="<?php echo $template?>images/inscription.gif" />
            </a>
			<?php } ?> 
            <a style="float:right;font-size:10px;" href="<?php echo $item['URL']; ?>">+ d'infos</a></p>
    
    <?php }else if(isset($URL) || $linkToActu){ ?>    
    
    <p style="" class="texte"><span class="evenements" style="color:#66cc00;font-weight:bold;">&gt;&gt;</span> <a href="<?php echo $linkToActu?$itemURL:$URL;?>" target="_blank">+ d'info</a></p>
    
    <?php } ?>
    
</div>
<!-- //////////////// -->
<!-- FIN DE BLOC DE NEWS  -->
<!-- //////////////// -->