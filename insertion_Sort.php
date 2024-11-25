<?php
/*
Problema de Ordenar Lista con Insertion Sort:
Crea un script que ordene una lista de nombres en orden alfabético 
utilizando el algoritmo Insertion Sort. 
Muestra la lista antes y después de aplicar el algoritmo.
*/
//Lista de nmbres a ordenar
$nombres = ["Carmen", "Susana", "Luis", "Maximiliano", "Mateo", "Fátima", "Tammy"];

//funcion para ordenar la lista de nombres utilizanod el algoritmo Insertion Sort
function ordenarNombres(&$nombres) {
    // Obtener la longitud de la lista
    $longitud = count($nombres);
    
    // Iterar desde el segundo elemento hasta el final de la lista
    for ($i = 1; $i < $longitud; $i++) {
        // Almacenar el nombre actual
        $nombreActual = $nombres[$i];
        // Inicializar la posición para comparar
        $j = $i - 1;

        // Mover los elementos de la lista que son mayores que el nombre actual
        // a una posición adelante
        while ($j >= 0 && $nombres[$j] > $nombreActual) {
            $nombres[$j + 1] = $nombres[$j];
            $j--;
        }
        // Colocar el nombre actual en su posición correcta
        $nombres[$j + 1] = $nombreActual;
    }
}

//Pintamos la lista de nombres antes de ordenar.
echo "Lista desordenada:'\n";
print_r($nombres);

//Aplicamos el algoritmo Insertion Sort
ordenarNombres($nombres);

//Pintamos la lista de nombres despues de ordenar.

print_r("Lista ordenada:'\n");
print_r($nombres);
?>