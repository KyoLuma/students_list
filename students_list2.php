
<?php
{
    $students = array (
        "Emmanuel" => 42,
        "Thierry" => 51,
        "Pascal" => 45,
        "Eric" => 48,
        "Nicolas" => 19
    );
    foreach ($students as $prenom => $age) {
        echo "Eleve " . $prenom . ", Age " . $age . "<br/ >";
    }
    // $moyenne = (42+51+45+48+19)/5;
    //  echo "Les élèves sont agés en moyenne de " . $moyenne . " ans";
    echo "Les élèves sont âgés en moyenne de " . array_sum($students)/count($students) . " balais";
}
