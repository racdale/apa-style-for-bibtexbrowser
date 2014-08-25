<link rel="stylesheet" href="bibtexbrowser.css">
<?php
$_GET['bib']='publications.bib;chapters.bib;refereed_conference.bib';
$_GET['all']=1;
include( 'bibtexbrowser.apa.php' );
?>