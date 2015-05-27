<?php
  header('Content-Type: text/css');
?>

/****** Custom book colors and borders *****/

<?php
if ($handle = opendir('../img')) {
                      
  while (false !== ($file = readdir($handle)))
  {
    $type = strpos($file, '.jpg');
    
    if ($type !== false) { // Filta apenas os arquivos .svg
      if (substr($file, 0, 1) == 'c') $list_c[] = $file; // cover
      if (substr($file, 0, 1) == 's') $list_s[] = $file; // spine
    }  
  }

  closedir($handle);
}

sort($list_c);
sort($list_s);

//var_dump($list_c);
//var_dump($list_s);

//$i = 1;
foreach ($list_c as $c){
    
//preg_match_all('!\d+!', $c, $matches);
//print_r($matches[0]);

preg_match("|\d+|", $c, $n);
//var_dump($n[0]);
    
  echo '.no-csstransforms3d .book[data-book="book-'. $n[0] .'"],
        .no-js .book[data-book="book-'. $n[0] .'"],
        .book[data-book="book-'. $n[0] .'"] .front.inview {
          background: url(../img/'. $c .') no-repeat left top;
        }
        ';
  //$i++;
}

//$i = 1;
foreach ($list_s as $s){
  preg_match("|\d+|", $s, $n);
    echo '.book[data-book="book-'. $n[0] .'"] .cover::before{
          background: url(../img/'.$s.') no-repeat left top;
        }
        ';
  //$i++;
}


?>
