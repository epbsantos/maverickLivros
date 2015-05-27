<?php

$handle = fopen ("../livros_db.csv","r");
$row = 1;
while (($data = fgetcsv($handle)) !== FALSE) {
   if ($row > 1) { // Retira o indice - Linha 1
       //echo $data[0] . '<br>';
       
       
       $dir = $data[0];

       if ( ! is_dir($dir)) {
         mkdir($dir);
       }
       
       
       $dados = '<html>
  <head>
    <title>'.$data[1].'</title>
    <style type="text/css">
      html {margin: 10px;}
    </style>
  </head>
  <body>
    <div id="disqus_thread"></div>
    <script type="text/javascript">
        var disqus_shortname = "livrosutfprtoledo"; // required: replace example with your forum shortname
        (function() {
            var dsq = document.createElement("script"); dsq.type = "text/javascript"; dsq.async = true;
            dsq.src = "//" + disqus_shortname + ".disqus.com/embed.js";
            (document.getElementsByTagName("head")[0] || document.getElementsByTagName("body")[0]).appendChild(dsq);
        })();
    </script>
    <noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
  </body>
</html>';
       
       
       $var = var_export($dados, true);
       //$var = preg_replace('\'', '', $var);
       file_put_contents($dir . '/index.html', $var);

   }
   
   $row++;
}

echo "Criou!!";

?>
