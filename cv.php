<link rel="stylesheet" href="bibtexbrowser.css">

<div class=sectionhead>Edited Special Issues</div>
<?php
$_GET['bib']='bib/book.bib';
$_GET['all']=1;
include('bibtexbrowser.apa.php');
?>

<div class=sectionhead>Publications and Reviews</div>
<?php
$_GET['bib']='bib/article.bib';
$_GET['all']=1;
include('bibtexbrowser.apa.php');
?>

<div class=sectionhead>Refereed Conference Proceedings</div>
<?php
$_GET['bib']='bib/inproceedings.bib';
$_GET['all']=1;
include('bibtexbrowser.apa.php');
?>

<div class=sectionhead>Book Chapters</div>
<?php
$_GET['bib']='bib/incollection.bib';
$_GET['all']=1;
include('bibtexbrowser.apa.php');
?>

<div class=sectionhead>Symposia</div>
<?php
$_GET['bib']='bib/symposium.bib';
$_GET['all']=1;
include('bibtexbrowser.apa.php');
?>

<div class=sectionhead>Invited Talks</div>
<?php
$_GET['bib']='bib/talk.bib';
$_GET['all']=1;
include('bibtexbrowser.apa.php');
?>