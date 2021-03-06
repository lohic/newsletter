newsletter
==========

Système de gestion de newsletters

Le système est une web-app PHP/HTML/CSS/JAVASCRIPT.


Structure d'un gabarit de newsletter :

- index.php *
- style.css *
- images/ *
- bloc1.php
- bloc2.php
- …

###index.php
Le fichier index sert de structure globale.
Voici les fonctions et variables que l'on peux récupérer dans index.php :

- l'url de l'archive :
```html
<a href="http://www.newsletter.fr/newsletter/archive-<?php echo $news->unique_id();?>.html">Cliquer ici</a>
``` 
- id de la newsletter :
```php
<?php echo $news_id; ?>
```
- écrire la date
```php
<?php
setlocale(LC_ALL, 'en_EN');
$timestamp_tab = explode('-',$ladate);
$timestamp = mktime(0, 0, 0, $timestamp_tab[1], $timestamp_tab[2], $timestamp_tab[0]); 
echo utf8_encode(strftime('%b %d, %Y',$timestamp));
?>
```
- adresse des images du dossier template
```php
<?php echo $template;?>images/
```
- insérer un sommaire
```php
<?php
  $style['li']   = "font-weight:bold;font-size:14px;";
	$style['date'] = "";
	$style['ul']   = "color:#cc0099;margin:0;";
	$news->set_sommaire("nom_de_la_liste",false,$style,4);
?>
```
- insérer une liste d'actualités/événements/item RSS
```php
<?php $news->set_contenu("nom_de_la_liste","fichier_bloc.php"); ?>
```
- pour récupérer l'image d'entête :
```php
<?php $header = $news->get_header("image_par_defaut.jpg"); echo $header->image;?>
```
- et la hauteur de l'image :
```php
<?php echo $header->h;?>
```


###fichier_bloc.php
Un fichier de bloc, est l'élément qui va être répété pour chaque item actualités/événements/item. Il peut être différent pour chaque ```$news->set_contenu ```.
Voici les fonctions et variables que l'on peux récupérer dans un bloc :

ref | code | valeurs attendues (si nécéssaire)
----|------|-----
id de l'item | ```<?php echo $id?>``` | int
titre de l'item | ```<?php echo $titre?>``` | texte
url de l'image | ```<?php echo $image?>``` | url ou empty
le sous-titre | ```<?php echo $soustitre?>``` | texte ou empty
le texte | ```<?php echo $texte?>``` | html / tinymce
origine de l'item | ```<?php echo $origine?>```| evenement_db, evenement_new_db, actu, rss
inscription ouvertes ou fermées | ```<?php $isInscription?>``` | 1 ou 0
lien pour s'inscrire à l'événement | ```http://www.newsletters.fr/evenements/inscription/inscription_multiple.php?id=<?php echo $id_event;?>``` | 
informations additionelles pour les actualités | ```<?php echo $info?>``` | html
url de l'item | ```<?php echo $URL?>``` | url ou empty
champ lien de l'actualité | ```<?php echo $linkToActu?>```| url ou empty
texte du lien de l'atualité | ```<?php echo $moreTXT?>``` | texte ou empty




