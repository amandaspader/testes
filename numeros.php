<?php

    echo "<h2> Teste de números </h2>";
    echo "<h3> Números Inteiros </h3>";
    echo "Número: ";
    echo 1;
    echo "<br>";
    echo "Soma de 2+2 = ";
    echo 2+2;

    echo "<br>";

    echo "<h4>Verificando se um dado é inteiro</h4>";
    echo "5 é um número? <br>";

    $numero = 5;

    if(is_int($numero)){
        echo "Sim. 5 é um número. <br>";
    } else {
        echo "5 não é número. <br>";
    }
    
    echo "<br>";

    echo "<h3> Números Float </h3>";
    echo "Número: ";
    echo 2.5;
    
    $floatA = 'Amanda';
    $floatB = 2.5;
    $floatC = 5.4;

    echo "<br>";

    echo "<h4>Verificando se um dado é float</h4>";

    echo "Float A = ", $floatA;
    echo "<br>";
    echo "Float B = ", $floatB;
    echo "<br>";
    echo "Float C = ", $floatC;

    echo "<br>";
    echo "<br>";

    echo "O Float A é um float?";

    echo "<br>";

    if(is_float($floatA)){
        echo "Sim, é um Float";
    } else {
        echo "Não, não é um Float";
    }

    echo "<br>";
    echo "<br>";

    echo "<h3> Dados em String </h3>";
    echo "Nome com variável: ";
    $nome = 'Amanda Spader';
    echo $nome;

    echo "<br>";

    echo "Esse é um exemplo de impressão do meu nome ($nome) dentro de uma frase com aspas duplas.";
    echo "<br>";
    echo 'Esse é um exemplo de impressão do meu nome ($nome) dentro de uma frase com aspas duplas.';

    echo "<br>";

    echo "<h4>Verificando se um dado é String</h4>";
    echo "$nome é uma String?";

    echo "<br>";

    if(is_string($nome)){
        echo "Sim, é uma String.";
    } else {
        echo "Não, não é uma String";
    }

?>