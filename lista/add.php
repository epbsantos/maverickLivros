<?php

$livro = array();

$livro['data'] = date('d-m-Y');

foreach ( $_POST as $key => $value )
{
    $livro[$key] = $value;
}

//var_dump($livro);

$handle = fopen("compras.csv", "a+");

fputcsv($handle, $livro);

fclose($handle);

?>

<html>
  <head>
    <title>Livros UTFPR Toledo</title>
    <meta charset="UTF-8" />
    
    <style>
        .button {
  font: bold 11px Arial;
  text-decoration: none;
  background-color: #EEEEEE;
  color: #333333;
  padding: 12px 16px 12px 16px;
  border-top: 1px solid #CCCCCC;
  border-right: 1px solid #333333;
  border-bottom: 1px solid #333333;
  border-left: 1px solid #CCCCCC;
}

.center {
    text-align: center;
}
    </style>
  </head>
  <body>
    <div class="center">
        <h1>Livro Adicionado com sucesso!</h1>

        <a class="button" href="compras.csv">Baixar lista com os pedidos</a>
    </div>
  </body>
</html>
