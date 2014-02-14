<!-- //////////////// -->
<!-- BLOC DE NEWS     -->
<!-- //////////////// -->
<div style="clear:both; margin-bottom:20px;width:450px;margin-left:20px;" class="bloc">
    <a name="item-<?php echo $id;?>" id="item-<?php echo $id;?>"></a>
    <div>
    <?php if(isset($image)){?><img src="<?php echo $image?>" width="170" alt="photo" style="float:left; margin:0 10px 5px 0;border:0;" /><?php } ?>
    <h2 style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;color:#0947a3"><?php echo $linkToActu ?"<a href='$itemURL' target='_blank' style='color:#font-size:10px;color:#0947a3'>$titre</a>":$titre;?></h2>
    <p style="text-align:justify;font-size:10px" class="texte">
	<?php echo !empty($soustitre)?'<p>'.$soustitre.'</p>':$texte;?></p>
    
    <div style="width:540px;height:1px;clear:both;"></div>
    
    <?php if($origine == "evenement_db" || $origine == "evenement_new_db"){ ?>
    
    <p style="font-size:10px;color:#0947a3">&gt;&gt; <a href="<?php echo $itemURL;?>&fromnews=<?php echo $news_id; ?>" target="_blank" style="color:#0947a3">+ d'infos</a></p>
    
    <?php if($isInscription == '1'){?>
    <p style="font-size:10px;color:#0947a3">
    <a href="http://www.sciencespo.fr/evenements/inscription/inscription_multiple.php?id=<?php echo $id_event;?>&fromnews=<?php echo $news_id; ?>" target="_blank">
    <img src="<?php echo $template?>images/inscription.gif" />
    </a>
    </p>
    <?php } ?>
    
    <?php }else if(isset($URL) || $linkToActu){ ?>
    
    <p style="font-size:10px;color:#0947a3" class="texte">&gt;&gt; <a href="<?php echo $linkToActu ? $itemURL : $URL;?>" target="_blank" style="color:#0947a3"><?php echo !empty($moreTXT)?$moreTXT:'En savoir plus';?></a></p>
    
    <?php } ?>
    
    </div>
    
    <div style=""><?php echo $info?></div>
    
    <img src="<?php echo $template;?>images/ombre.gif" width="450" height="19"/>
</div>
<!-- //////////////// -->
<!-- FIN DE BLOC DE NEWS  -->
<!-- //////////////// -->