<?php
/*
Problema de Ordenar Lista con Merge Sort:
Implementa una función que ordene una lista de palabras 
alfabéticamente utilizando el algoritmo Merge Sort. 
Muestra la lista antes y después de aplicar el algoritmo.
*/

//lista a ordenar:
$autos = ["toyota", "datsun", "fiat", "tuctuc", "caterpillar", "nissan", "mitsubishi"];


/*
Esta función es la que realiza la ordenación. 
Primero, verifica si el tamaño del array es menor que 2. 
Si es así, simplemente devuelve el array, ya que no necesita ordenarse. 
Luego, divide el array en dos mitades, left y right, y llama recursivamente a mergeSort en ambas mitades.
*/

function mergeSort($lista)
{
    if (count($lista) < 2) {
        return $lista;
    }

    $medio = floor(count($lista) / 2);// floor — Redondear fracciones hacia abajo
    $izq = array_slice($lista, 0, $medio); //array_slice() devuelve la secuencia de elementos del array
    $der = array_slice($lista, $medio);

    return merge(mergeSort($izq), mergeSort($der));
}

/*
Función merge: Esta función se encarga de combinar dos arrays ordenados 
(left y right) en uno solo. Utiliza un bucle while para comparar los 
elementos de ambos arrays y los añade al array result en orden. 
Finalmente, utiliza array_merge para añadir cualquier elemento restante de left o right.
*/
function merge($izq, $der)
{
    $resultado = [];
    while (count($izq) > 0 && count($der) > 0) {
        if ($izq[0] < $der[0]) {
            $resultado[] = array_shift($izq);
        } else {
            $resultado[] = array_shift($der);
        }
    }
    return array_merge($resultado, $izq, $der);
}

// Lista de palabras a ordenar

print_r("Lista antes de ordenar:\n");
print_r($autos);

$listaOrdenada = mergeSort($autos);
print_r("Lista después de ordenar:\n");
print_r($listaOrdenada);
