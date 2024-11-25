<?php

/*Problema de Ordenar Lista con Bubble Sort:
Escribe un programa que ordene una lista de 
números de forma descendente utilizando el algoritmo Bubble Sort. 
La lista puede contener duplicados y valores negativos. 
Asegúrate de manejar estos casos y muestra la lista antes y
 después de aplicar el algoritmo.
 */


//Lista de numeros a ordenar
$listaN = [0, 34, 51, 90, -5, 39, 10, 55, 21, 100];

function ordenBurbujaDescendente(&$lista)
{
    //inicializamos, obteniendo la cantidad de elementos de la lista count(lista)
    $n = count($lista);

    //Buble Externo. Bucle para recorrer la lista de elementos, menos el ultimo
    //despues de cada pasada, el elemento mas grande se coloca en la poscion correcta.
    for ($i = 0; $i < $n - 1; $i++) {

        //Buble _Interno. Compara cada par de elementos adyacentes. Si el ele,ento actual es menor que se
        //siguiente, se intercambian.
        for ($j = 0; $j < $n - $i - 1; $j++) {

            //elemento actual es menor que el siguiente, se cambian.
            if ($lista[$j] < $lista[$j + 1]) {
                $temporal = $lista[$j];
                $lista[$j] = $lista[$j + 1];
                $lista[$j + 1] = $temporal; // Intercambio.utilizo la variable $temp para hacer el intercambio de valores.
            }
        }
    }
}



//Pintar lista deshordenada
print_r("Lista de numeros sin ordenar :'\n");
print_r($listaN);

//Llamar ordenBurbujaDescendente 
ordenBurbujaDescendente($listaN);

//Pintar $lista despues de ordenar.
print_r("Lista ordenada :\n");
print_r($listaN);

?>
