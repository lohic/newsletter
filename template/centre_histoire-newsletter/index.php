<div class="newsletter">
<div id="content" style="margin:auto;width:800px;">
  <table width="800" border="0" cellspacing="0" cellpadding="0" background="#FFF">
    <tr>
    <td width="15" bgcolor="#CCCCCC">&nbsp;</td>
    <td colspan="3" align="right" bgcolor="#CCCCCC"><small><span style="color:#333333"><a name="haut" id="haut2"></a>Si vous ne visualisez pas correctement la Newsletter, <a href="http://www.sciencespo.fr/newsletter/archive-<?php echo $news->unique_id();?>.html" style="color:#C9025F">cliquez ici</a></span></small></td>
    <td width="15" bgcolor="#CCCCCC">&nbsp;</td>
  </tr>
    <tr>
    <td colspan="5" bgcolor="#FFFFFF" background="<?php $header = $news->get_header("header-centre-histoire-newsletter.jpg"); echo $header->image;?>" height="<?php echo $header->h;?>" ><p style="margin:45px 0 0 27px;color:#FFF;font-size:10px;"><?php 
	
	setlocale(LC_ALL, 'fr_FR');
	$timestamp_tab = explode('-',$ladate);
	$timestamp = mktime(0, 0, 0, $timestamp_tab[1], $timestamp_tab[2], $timestamp_tab[0]); 
	
	//echo utf8_encode(strftime('%A %e %B %Y',$timestamp));
	
	?></p></td>
  </tr>
    <tr>
      <td width="15" bgcolor="#CCCCCC">&nbsp;</td>
      <td width="15" bgcolor="#FFFFFF">&nbsp;</td>
      <td width="740" bgcolor="#FFFFFF">&nbsp;</td>
      <td width="15" bgcolor="#FFFFFF">&nbsp;</td>
      <td bgcolor="#CCCCCC">&nbsp;</td>
    </tr>
    <td colspan="5" bgcolor="#CCCCCC"><?php
	
	$news->set_contenu("une_list","une_bloc.php");
		
	?></td>
    </tr>
  <tr>
    <td colspan="5" bgcolor="#FFFFFF" background="<?php echo $template;?>images/foot.gif" height="95"  >
    	<div style="padding:20px 30px;font-size:10px;">
        <?php $news->set_footer();?>
        </div>
      </td>
  </tr>
  <tr>
  	<td height="50" colspan="5" bgcolor="#CCCCCC">
    </td>
  </tr>
</table>
</div>
</div>