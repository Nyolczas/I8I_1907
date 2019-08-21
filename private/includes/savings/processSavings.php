<?php
$tetelek = '../../data/savings/tetelek.json';
if(isset($_POST['save'])) {

    $extraObj->datum = $_POST['datum'];
    $extraObj->osszeg = $_POST['osszeg'];
    $extraObj->tetel = $_POST['tetel'];

    // számlatétel kiírása 
    $current_data = file_get_contents($tetelek);
    $array_data = json_decode($current_data, true);
    array_push($array_data,$extraObj);
    $newData = json_encode($array_data, JSON_UNESCAPED_UNICODE);
    file_put_contents($tetelek, $newData);

    // utolsó rögzítés idejének mentése
    $last_data = json_encode(date('Y. m. d.'), JSON_UNESCAPED_UNICODE);
    file_put_contents('../../data/savings/utolsoRogzites.json', $last_data);

    header("location:../../savings.php");
}