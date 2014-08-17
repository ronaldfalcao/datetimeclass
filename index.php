<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Teste de Datetime</title>
        <link rel="stylesheet" type="text/css" href="style.css" />
    </head>
    <body>
        <?php
            echo '<h1> Teste da classe padrão DateTime</h1>';
            
            $data = new DateTime(); //Pega a data corrente (atual).
            
            echo '<div class="sub-topic">';
            echo "<h2>Retornando o timestamp</h2>".'<br/>';
            echo "<label>Resultado getTimestamp()</label>: ".$data->getTimestamp().'<br/>';
            echo '</div>';
            
            echo '<div class="sub-topic">';
            echo "<h2>Retornando a data no formato padrão Brasil</h2>".'<br/>';
            echo "<label>Resultado format(): </label>".$data->format('d/m/Y - H:m:s').'<br/>';
            echo '</div>';
            
            //Comparando duas datas 
            $dataA = new DateTime("08-07-2012 11:14:15.638276");
            $dataB = new DateTime("18-07-2012 12:23:45.657443");

            echo '<div class="sub-topic">';
            echo '<h2>Comparando duas datas</h2>';    
            echo "<label>Data A: </label>".$dataA->format('d/m/Y - H:m:s').'<br/>';
            echo "<label>Data B: </label>".$dataB->format('d/m/Y - H:m:s').'<br/>';  
            
            $diferenca=$dataB->diff($dataA);
          
            echo "<label>Diferença entre as datas: </label>".$diferenca->days.' dias.'.'<br/>';
            echo "<label>Conferindo a árvore do objeto retornado</label>".'<br/>';
            var_dump($diferenca);
            echo '</div>';
            
            //Alterando uma data
            echo '<div class="sub-topic">';
            echo '<h2>Alterando Datas</h2>';
            $agora = new DateTime();
            echo '<label>Data atual: </label>'.$agora->format('d/m/Y - H:m:s').'<br/>';
                        
            $dataModificada = clone $agora;
            
            $dataModificada->modify('-1 day');
            echo '<label>Nova data (menos um dia): </label>'.$dataModificada->format('d/m/Y - H:m:s').'<br/>';
            
            $dataModificada->modify('+3 day');
            echo '<label>Nova data (mais três dias): </label>'.$dataModificada->format('d/m/Y - H:m:s').'<br/>';
            
            $dataModificada->modify('-3 hour');
            echo '<label>Nova data (Menos três horas): </label>'.$dataModificada->format('d/m/Y - H:m:s').'<br/>';
            
            $dataModificada->modify('-10 minute');
            echo '<label>Nova data (Mais 3 minutos): </label>'.$dataModificada->format('d/m/Y - H:m:s').'<br/>';
            
            $dataModificada->modify('-3 year');
            echo '<label>Nova data (Menos três anos): </label>'.$dataModificada->format('d/m/Y - H:m:s').'<br/>';
            
            $dataModificada->modify('-3 weeks');
            echo '<label>Nova data (Menos três semanas): </label>'.$dataModificada->format('d/m/Y - H:m:s').'<br/>';
            echo '</div>';
        ?>
    </body>
</html>