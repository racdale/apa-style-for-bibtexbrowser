<link rel="stylesheet" href="bibtexbrowser.css">

<div style="font-size:12pt;">
<!--<a href="#edited">Edited Special Issues</a> | <a href="#publications">Publications and Reviews</a> | <a href="#refereed">Refereed Conference Proceedings</a> | <a href="#book">Book Chapters</a> | <a href="#symposia">Symposia</a>-->
</div>

<div style="margin-top:10px;">
Documents are provided for personal or educational use only. Downloading a document is considered a request by you for a single copy. Do not circulate or disseminate.
</div>

<!--<a name="edited"></a><div class=sectionhead>Edited Special Issues</div>
<?php
$_GET['bib']='bib/book.bib';
$_GET['all']=1;
include('bibtexbrowser.apa.php');
?>

<a name="publications"></a><div class=sectionhead>Publications and Reviews</div>
<?php
$_GET['bib']='bib/article.bib';
$_GET['all']=1;
include('bibtexbrowser.apa.php');
?>

<a name="refereed"></a><div class=sectionhead>Refereed Conference Proceedings</div>
<?php
$_GET['bib']='bib/inproceedings.bib';
$_GET['all']=1;
include('bibtexbrowser.apa.php');
?>

<a name="book"></a><div class=sectionhead>Book Chapters</div>
<?php
$_GET['bib']='bib/incollection.bib';
$_GET['all']=1;
include('bibtexbrowser.apa.php');
?>

<a name="symposia"></a><div class=sectionhead>Symposia</div>
<?php
$_GET['bib']='bib/symposium.bib';
$_GET['all']=1;
include('bibtexbrowser.apa.php');
?>-->

<?php
$_GET['bib']='bib/book.bib;bib/article.bib;bib/inproceedings.bib;bib/incollection.bib;bib/symposium.bib';
$_GET['all']=1;
include('bibtexbrowser.apa.web.php');
?>