<h2>Exercício 2</h2>

<p>
    Crie um vetor com os nomes, conforme exemplo abaixo:
        <pre>
          --------- 
       0 |Murilo   | 
          --------- 
       1 |Poliana  |
          --------- 
       2 |Dalva    |
          --------- 
       3 |Lavinia  |
          --------- 
       4 |Kaua     |
          --------- 
    </pre>
</p>
<p>
    Imprima os nomes do vetor em formato de lista ordenada: ex:
        <br>
        1. Murilo <br>
        2. Poliana <br>
        3. .... <br>
</p>
<?php
$nome[0]="Murilo";
$nome[1]="Poliana";
$nome[2]="Alice";
$nome[3]="Davi";
$nome[4]="Rafa";

for($contador=0; $contador<=4; $contador++){
    echo "<li>$nome[$contador]</li>";
    }
?>
</ol>