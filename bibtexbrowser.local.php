<?php
function APABibliographyStyle(&$bibentry) {
  $title = $bibentry->getTitle();
  $type = $bibentry->getType();

  // later on, all values of $entry will be joined by a comma
  $entry=array();

  // title
  // usually in bold: .bibtitle { font-weight:bold; }
  $title = '<span class="bibtitle">'.$title.'</span>';

  if ($bibentry->hasField(YEAR)) $year = $bibentry->getYear();
  if ($bibentry->hasField('url')) $title = ' <a'.(BIBTEXBROWSER_BIB_IN_NEW_WINDOW?' target="_blank" ':'').' href="'.$bibentry->getField('url').'">'.$title.'</a>';
  
  // author
  $coreInfo = ' <span class="bibauthor">'.$bibentry->getFormattedAuthorsImproved().'</span> (' . $year . "). " . $title;

  // core info usually contains title + author
  $entry[] = $coreInfo;

  if ($bibentry->hasField("publisher")) {
    $publisher = $bibentry->getField("publisher");
  }

  // now the book title
  $booktitle = '';
  /*********************************************************************************/
  if ($type=="inproceedings") {
    $booktitle = $bibentry->getField("booktitle");
    $info = "";
    if ($bibentry->hasField('volume')) {
      $volume = $bibentry->getField("volume");
      #$info = ", <span class=chapterVolume>".$volume."</span>";
    }
    $info = "In ";
    $editor='';
    if ($bibentry->hasField(EDITOR)) {
      $editor = $bibentry->getFormattedEditors();
      $info .= $editor.", ";
    }
    $info .= '<span class="proceedingsBook">'.$booktitle.'</span>';
    if ($bibentry->hasField('pages')) {
      $pages = $bibentry->getField("pages");
      $info .= " (pp. <span class=proceedingsPages>".$pages."</span>)";
    }
    $entry[] = $info;
    if ($bibentry->hasField('publisher')) {
      $publisher = $bibentry->getField("publisher");
      $entry[] = $publisher;
    }
  }
  /*********************************************************************************/
  if ($type=="incollection") {
    $booktitle = $bibentry->getField("booktitle");
    $info = "";
    if ($bibentry->hasField('volume')) {
      $volume = $bibentry->getField("volume");
      #$info = ", <span class=chapterVolume>".$volume."</span>";
    }
    $info = "In ";
    $editor='';
    if ($bibentry->hasField(EDITOR)) {
      $editor = $bibentry->getFormattedEditors();
      $info .= $editor.", ";
    }
    $info .= '<span class="chapterBook">'.$booktitle.'</span>';
    if ($bibentry->hasField('pages')) {
      $pages = $bibentry->getField("pages");
      $info .= " (pp. <span class=chapterPages>".$pages."</span>)";
    }
    $entry[] = $info;
    if ($bibentry->hasField('publisher')) {
      $publisher = $bibentry->getField("publisher");
      $entry[] = $publisher;
    }
  }
  /*********************************************************************************/
  if ($type=="article") {
    $booktitle = $bibentry->getField("journal");
    $info = "";
    if ($bibentry->hasField('volume')) {
      $volume = $bibentry->getField("volume");
      $info = ", <span class=articleVolume>".$volume."</span>";
    }
    if ($bibentry->hasField('pages')) {
      $pages = $bibentry->getField("pages");
      $info .= ", <span class=articlePages>".$pages."</span>";
    }
    $entry[] = '<span class="articleJournal">'.$booktitle.'</span>'.$info;
  }




  $publisher='';
  if ($type=="phdthesis") {
      $publisher = __('PhD thesis').', '.$bibentry->getField(SCHOOL);
  }
  if ($type=="mastersthesis") {
      $publisher = __('Master\'s thesis').', '.$bibentry->getField(SCHOOL);
  }
  if ($type=="bachelorsthesis") {
      $publisher = __('Bachelor\'s thesis').', '.$bibentry->getField(SCHOOL);
  }
  if ($type=="techreport") {
      $publisher = __('Technical report').', '.$bibentry->getField("institution");
  }

  if ($type=="misc") {
      $publisher = $bibentry->getField('howpublished');
  }




  $result = implode(". ",$entry).'.';

  // some comments (e.g. acceptance rate)?
  if ($bibentry->hasField('comment')) {
      $result .=  " <span class=\"bibcomment\">(".$bibentry->getField("comment").")</span>";
  }
  if ($bibentry->hasField('note')) {
      $result .=  " (".$bibentry->getField("note").")";
  }

  // add the Coin URL
  $result .=  $bibentry->toCoins();

  return $result;}
define('BIBLIOGRAPHYSTYLE','APABibliographyStyle');
?>
