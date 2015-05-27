<?php
/* 
$row = 1; 
 $handle = fopen ("livros_db.csv","r");
 while (($data = fgetcsv($handle, ";")) !== FALSE) {

   if ($row > 1) { // Retira o indice - Linha 1
     echo '<figure><div class="book" data-book="book-' . ($row - 1) . '"></div>
           <div class="buttons"><a class="hide" href="#">Olhar dentro</a></div>
           <figcaption><h2>' . $data[0] . '<span>' . $data[2] . '</span></h2></figcaption>
           <div class="details">
             <ul>
               <li>' . $data[3] . '</li>
             </ul>
           </div>
         </figure>';
   }                
   $row++; 
 }
 fclose ($handle);
 */
 
$row = 1;
$handle = fopen ("livros_db.csv","r");
$data = fgetcsv($handle);
var_dump($data);

           /*
            *  $data[0] = ID
            *  $data[1] = Título
            *  $data[2] = Autor
            *  $data[3] = Editora
            *  $data[4] = Num de páginas
            *  $data[5] = Quantidade
            *  $data[6] = Classificação
            *  $data[7] = Ref Básica
            *  $data[8] = Ref Complementar
            *  $data[9] = Sumário
            *  
            */


$row = 1;
$handle = fopen ("livros_db.csv","r");
while (($data = fgetcsv($handle)) !== FALSE) {
   if ($row > 1) { // Retira o indice - Linha 1
       
       if (strpos($data[1], ":") ) {
           $nome = explode(":", $data[1]);
           $data[1] = $nome[0] . ": <small>" . $nome[1] . "</small>";
       }
       
  
       
     echo '<figure><div class="book" data-book="book-' . $data[0] . '"></div>
           <div class="buttons"><a class="hide" href="#">Olhar dentro</a></div>
           <figcaption><h2>' . $data[1] . '<span>' . $data[2] . '</span></h2></figcaption>
           <div class="details">
             <ul>
               <li>' . $data[6] . '</li>
               <li>Editora: ' . $data[3] . '</li>
               <li>Número de páginas:  ' . $data[4] . '</li>
               <li>Quantidade: ' . $data[5] . '</li>';
     
     if ($data[7] != "") {
         $ref_basc = explode(",", $data[7]);
         
         echo '<li class="ref_basc">';
         foreach ($ref_basc as $rb) {
            if ($rb == "TSI31A") echo '<span onclick="busca(\''. $rb .'\')" class="tsi31" title="Informática e Sociedade">' . $rb . '</span>';
            if ($rb == "TSI31B") echo '<span onclick="busca(\''. $rb .'\')" class="tsi31" title="Fundamentos de Programação">' . $rb . '</span>';
            if ($rb == "TSI31C") echo '<span onclick="busca(\''. $rb .'\')" class="tsi31" title="Sítios Web 1">' . $rb . '</span>';
            if ($rb == "TSI31F") echo '<span onclick="busca(\''. $rb .'\')" class="tsi31" title="Comunicação Linguística">' . $rb . '</span>';
            if ($rb == "TSI31D") echo '<span onclick="busca(\''. $rb .'\')" class="tsi31" title="Organização e Arquitetura de Computadores">' . $rb . '</span>';
            if ($rb == "TSI31E") echo '<span onclick="busca(\''. $rb .'\')" class="tsi31" title="Fundamentos Matemáticos para Computação">' . $rb . '</span>';

            if ($rb == "TSI32A") echo '<span onclick="busca(\''. $rb .'\')" class="tsi32" title="Introdução à Programação Orientada a Objetos">' . $rb . '</span>';
            if ($rb == "TSI32B") echo '<span onclick="busca(\''. $rb .'\')" class="tsi32" title="Estrutura, Pesquisa e Ordenação de Dados">' . $rb . '</span>';
            if ($rb == "TSI32C") echo '<span onclick="busca(\''. $rb .'\')" class="tsi32" title="Sítios Web 2">' . $rb . '</span>';
            if ($rb == "TSI32D") echo '<span onclick="busca(\''. $rb .'\')" class="tsi32" title="Fundamentos de Redes de Computadores 1">' . $rb . '</span>';
            if ($rb == "TSI32E") echo '<span onclick="busca(\''. $rb .'\')" class="tsi32" title="Fundamentos de Sistemas Operacionais">' . $rb . '</span>';
            if ($rb == "TSI32F") echo '<span onclick="busca(\''. $rb .'\')" class="tsi32" title="Infraestrutura Web">' . $rb . '</span>';

            if ($rb == "TSI33A") echo '<span onclick="busca(\''. $rb .'\')" class="tsi33" title="Banco de Dados 1">' . $rb . '</span>';
            if ($rb == "TSI33B") echo '<span onclick="busca(\''. $rb .'\')" class="tsi33" title="Programação Orientada a Objetos 1">' . $rb . '</span>';
            if ($rb == "TSI33C") echo '<span onclick="busca(\''. $rb .'\')" class="tsi33" title="Sítios Web 3">' . $rb . '</span>';
            if ($rb == "TSI33D") echo '<span onclick="busca(\''. $rb .'\')" class="tsi33" title="Análise e Projeto de Sistemas 1">' . $rb . '</span>';
            if ($rb == "TSI33E") echo '<span onclick="busca(\''. $rb .'\')" class="tsi33" title="Fundamentos de Redes de Computadores 2">' . $rb . '</span>';
            if ($rb == "TSI33F") echo '<span onclick="busca(\''. $rb .'\')" class="tsi33" title="Projeto de Interfaces Web">' . $rb . '</span>';

            if ($rb == "TSI34A") echo '<span onclick="busca(\''. $rb .'\')" class="tsi34" title="Banco de Dados 2">' . $rb . '</span>';
            if ($rb == "TSI34B") echo '<span onclick="busca(\''. $rb .'\')" class="tsi34" title="Programação Orientada a Objetos 2">' . $rb . '</span>';
            if ($rb == "TSI34C") echo '<span onclick="busca(\''. $rb .'\')" class="tsi34" title="Sítios Web 4">' . $rb . '</span>';
            if ($rb == "TSI34D") echo '<span onclick="busca(\''. $rb .'\')" class="tsi34" title="Análise e Projeto de Sistemas 2">' . $rb . '</span>';
            if ($rb == "TSI34E") echo '<span onclick="busca(\''. $rb .'\')" class="tsi34" title="Metodologia da Pesquisa Científica e Tecnológica">' . $rb . '</span>';
            if ($rb == "TSI34F") echo '<span onclick="busca(\''. $rb .'\')" class="tsi34" title="Introdução à Estatística">' . $rb . '</span>';

            if ($rb == "TSI35A") echo '<span onclick="busca(\''. $rb .'\')" class="tsi35" title="Tópicos Avançados em Tecnologia da Informação">' . $rb . '</span>';
            if ($rb == "TSI35B") echo '<span onclick="busca(\''. $rb .'\')" class="tsi35" title="Programação de Dispositivos Móveis e Sem Fio">' . $rb . '</span>';
            if ($rb == "TSI35C") echo '<span onclick="busca(\''. $rb .'\')" class="tsi35" title="Comércio Eletrônico">' . $rb . '</span>';
            if ($rb == "TSI35D") echo '<span onclick="busca(\''. $rb .'\')" class="tsi35" title="Padrões de Projeto">' . $rb . '</span>';
            if ($rb == "TSI35E") echo '<span onclick="busca(\''. $rb .'\')" class="tsi35" title="Segurança em Tecnologia da Informação">' . $rb . '</span>';
            if ($rb == "TSI35F") echo '<span onclick="busca(\''. $rb .'\')" class="tsi35" title="Sistemas Multimídia e Hipermídia">' . $rb . '</span>';
            if ($rb == "TSI35G") echo '<span onclick="busca(\''. $rb .'\')" class="tsi35" title="Trabalho de Conclusão de Curso (TCC) 1">' . $rb . '</span>';

            if ($rb == "TSI36A") echo '<span onclick="busca(\''. $rb .'\')" class="tsi36" title="Empreendedorismo">' . $rb . '</span>';
            if ($rb == "TSI36B") echo '<span onclick="busca(\''. $rb .'\')" class="tsi36" title="Planejamento e Gerenciamento de Projetos">' . $rb . '</span>';
            if ($rb == "TSI36C") echo '<span onclick="busca(\''. $rb .'\')" class="tsi36" title="Processo de Software">' . $rb . '</span>';
            if ($rb == "TSI36D") echo '<span onclick="busca(\''. $rb .'\')" class="tsi36" title="Trabalho de Conclusão de Curso (TCC) 2">' . $rb . '</span>';
         }
         echo '</li>';
    }
    
     if ($data[8] != "") {
        $ref_comp = explode(",", $data[8]);
        echo '<li class="ref_comp">';
        foreach ($ref_comp as $rc) {
             if ($rc == "TSI31A") echo '<span onclick="busca(\''. $rc .'\')" class="tsi31" title="Informática e Sociedade">' . $rc . '</span>';
             if ($rc == "TSI31B") echo '<span onclick="busca(\''. $rc .'\')" class="tsi31" title="Fundamentos de Programação">' . $rc . '</span>';
             if ($rc == "TSI31C") echo '<span onclick="busca(\''. $rc .'\')" class="tsi31" title="Sítios Web 1">' . $rc . '</span>';
             if ($rc == "TSI31F") echo '<span onclick="busca(\''. $rc .'\')" class="tsi31" title="Comunicação Linguística">' . $rc . '</span>';
             if ($rc == "TSI31D") echo '<span onclick="busca(\''. $rc .'\')" class="tsi31" title="Organização e Arquitetura de Computadores">' . $rc . '</span>';
             if ($rc == "TSI31E") echo '<span onclick="busca(\''. $rc .'\')" class="tsi31" title="Fundamentos Matemáticos para Computação">' . $rc . '</span>';
             
             if ($rc == "TSI32A") echo '<span onclick="busca(\''. $rc .'\')" class="tsi32" title="Introdução à Programação Orientada a Objetos">' . $rc . '</span>';
             if ($rc == "TSI32B") echo '<span onclick="busca(\''. $rc .'\')" class="tsi32" title="Estrutura, Pesquisa e Ordenação de Dados">' . $rc . '</span>';
             if ($rc == "TSI32C") echo '<span onclick="busca(\''. $rc .'\')" class="tsi32" title="Sítios Web 2">' . $rc . '</span>';
             if ($rc == "TSI32D") echo '<span onclick="busca(\''. $rc .'\')" class="tsi32" title="Fundamentos de Redes de Computadores 1">' . $rc . '</span>';
             if ($rc == "TSI32E") echo '<span onclick="busca(\''. $rc .'\')" class="tsi32" title="Fundamentos de Sistemas Operacionais">' . $rc . '</span>';
             if ($rc == "TSI32F") echo '<span onclick="busca(\''. $rc .'\')" class="tsi32" title="Infraestrutura Web">' . $rc . '</span>';
             
             if ($rc == "TSI33A") echo '<span onclick="busca(\''. $rc .'\')" class="tsi33" title="Banco de Dados 1">' . $rc . '</span>';
             if ($rc == "TSI33B") echo '<span onclick="busca(\''. $rc .'\')" class="tsi33" title="Programação Orientada a Objetos 1">' . $rc . '</span>';
             if ($rc == "TSI33C") echo '<span onclick="busca(\''. $rc .'\')" class="tsi33" title="Sítios Web 3">' . $rc . '</span>';
             if ($rc == "TSI33D") echo '<span onclick="busca(\''. $rc .'\')" class="tsi33" title="Análise e Projeto de Sistemas 1">' . $rc . '</span>';
             if ($rc == "TSI33E") echo '<span onclick="busca(\''. $rc .'\')" class="tsi33" title="Fundamentos de Redes de Computadores 2">' . $rc . '</span>';
             if ($rc == "TSI33F") echo '<span onclick="busca(\''. $rc .'\')" class="tsi33" title="Projeto de Interfaces Web">' . $rc . '</span>';
             
             if ($rc == "TSI34A") echo '<span onclick="busca(\''. $rc .'\')" class="tsi34" title="Banco de Dados 2">' . $rc . '</span>';
             if ($rc == "TSI34B") echo '<span onclick="busca(\''. $rc .'\')" class="tsi34" title="Programação Orientada a Objetos 2">' . $rc . '</span>';
             if ($rc == "TSI34C") echo '<span onclick="busca(\''. $rc .'\')" class="tsi34" title="Sítios Web 4">' . $rc . '</span>';
             if ($rc == "TSI34D") echo '<span onclick="busca(\''. $rc .'\')" class="tsi34" title="Análise e Projeto de Sistemas 2">' . $rc . '</span>';
             if ($rc == "TSI34E") echo '<span onclick="busca(\''. $rc .'\')" class="tsi34" title="Metodologia da Pesquisa Científica e Tecnológica">' . $rc . '</span>';
             if ($rc == "TSI34F") echo '<span onclick="busca(\''. $rc .'\')" class="tsi34" title="Introdução à Estatística">' . $rc . '</span>';
             
             if ($rc == "TSI35A") echo '<span onclick="busca(\''. $rc .'\')" class="tsi35" title="Tópicos Avançados em Tecnologia da Informação">' . $rc . '</span>';
             if ($rc == "TSI35B") echo '<span onclick="busca(\''. $rc .'\')" class="tsi35" title="Programação de Dispositivos Móveis e Sem Fio">' . $rc . '</span>';
             if ($rc == "TSI35C") echo '<span onclick="busca(\''. $rc .'\')" class="tsi35" title="Comércio Eletrônico">' . $rc . '</span>';
             if ($rc == "TSI35D") echo '<span onclick="busca(\''. $rc .'\')" class="tsi35" title="Padrões de Projeto">' . $rc . '</span>';
             if ($rc == "TSI35E") echo '<span onclick="busca(\''. $rc .'\')" class="tsi35" title="Segurança em Tecnologia da Informação">' . $rc . '</span>';
             if ($rc == "TSI35F") echo '<span onclick="busca(\''. $rc .'\')" class="tsi35" title="Sistemas Multimídia e Hipermídia">' . $rc . '</span>';
             if ($rc == "TSI35G") echo '<span onclick="busca(\''. $rc .'\')" class="tsi35" title="Trabalho de Conclusão de Curso (TCC) 1">' . $rc . '</span>';
             
             if ($rc == "TSI36A") echo '<span onclick="busca(\''. $rc .'\')" class="tsi36" title="Empreendedorismo">' . $rc . '</span>';
             if ($rc == "TSI36B") echo '<span onclick="busca(\''. $rc .'\')" class="tsi36" title="Planejamento e Gerenciamento de Projetos">' . $rc . '</span>';
             if ($rc == "TSI36C") echo '<span onclick="busca(\''. $rc .'\')" class="tsi36" title="Processo de Software">' . $rc . '</span>';
             if ($rc == "TSI36D") echo '<span onclick="busca(\''. $rc .'\')" class="tsi36" title="Trabalho de Conclusão de Curso (TCC) 2">' . $rc . '</span>';          
         }
         echo '</li>';
     }
     
               echo '</ul>
           </div>
         </figure>';
   }                
   $row++; 
}


fclose ($handle);
 
 
?>
     