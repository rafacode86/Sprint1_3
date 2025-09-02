<?php
    /*Crea un programa que llisti les notes dels/les alumnes d’una classe. Per això haurem d’utilitzar un array associatiu 
    on la clau serà el nom de cada alumne. Cada alumne tindrà 5 notes (valorades del 0 al 10).

    A més, crea una funció que, donades les notes de tots els/les alumnes, ens mostri tant la mitjana de la nota de cada 
    alumne, com la nota mitjana de la classe sencera. */

    $grades = [
        "student1" => [5, 8, 6, 4, 5],
        "student2" => [4, 4, 4, 4, 4],
        "student3" => [9, 9, 9, 10, 10],
        "student4" => [8, 8, 7, 8, 7] 
    ];

    function studentAverageGrade($arrayGrade) {
        $averages = [];

        foreach ($arrayGrade as $student => $grades) {
            $amount = array_sum($grades);
            $count = count($grades);
            $average = $amount / $count;

            $averages [$student] = $average;

        }
        return $averages;
    }

    function printStudentAverage($arrayAverages) {
        foreach ($arrayAverages as $student => $average){
            echo($student . ":" . $average . "\n");
        }
    }

    function classroomAverage($arrayGrades) {
        $totalAmount = 0;
        $totalCount = 0;

        foreach ($arrayGrades as $grades) {
            $totalAmount += array_sum($grades);
            $totalCount += count($grades);
        }

        return $totalAmount / $totalCount;
    }

    function printClassroomAverage($globalAverage) {
        echo "media global de la clase: " . $globalAverage;
    }
   
    $studentAverageGrades = studentAverageGrade($grades);
    printStudentAverage($studentAverageGrades);

    $globalAverage = classroomAverage($grades);
    printClassroomAverage($globalAverage);
    



?>