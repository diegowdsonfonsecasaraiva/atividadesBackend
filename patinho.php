<?php

function imprimir_musica($num_patinhos) {

    for ($n = $num_patinhos; $n > 0; $n--) {

        echo "$n patinhos foram passear\n";"<br>";

        echo "Além das montanhas\n";"<br>";

        echo "Para brincar\n";"<br>";

        echo "A mamãe gritou: Quá, quá, quá, quá\n";"<br>";

        if ($n > 1) {

            echo "Mas só " . ($n - 1) . " patinhos voltaram de lá.\n";"<br>";

        } else {

            echo "Mas nenhum patinho voltou de lá.\n";"<br>";

        }

    }

 

    echo "A mamãe patinha foi procurar\n <br>";

    echo "Além das montanhas\n <br>";

    echo "Na beira do mar\n <br>";

    echo "A mamãe gritou: Quá, quá, quá, quá\n <br>";

    echo "E os $num_patinhos patinhos voltaram de lá.\n <br>";

}

 

imprimir_musica(5);

?>

