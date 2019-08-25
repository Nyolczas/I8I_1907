<?php
$currentJson = '../../data/savings/savingsCurrent.json';
$savingsJson = '../../data/savings/savings.json';
$tetelekJson = '../../data/savings/tetelek.json';

if (isset($_POST['save'])) {
    $extraObj->datum = $_POST['datum'];
    $extraObj->osszeg = $_POST['osszeg'];
    $extraObj->tetel = $_POST['tetel'];

    // számlatétel kiírása 
    $current_data = file_get_contents($tetelekJson);
    $array_data = json_decode($current_data, true);
    array_push($array_data, $extraObj);
    $newData = json_encode($array_data, JSON_PRETTY_PRINT);
    file_put_contents($tetelekJson, $newData);

    // összeg hozzáadása a kategóriához
    $current_data = file_get_contents($currentJson);
    $savingsCurrent = json_decode($current_data, true);
    $savingsCurrent[$_POST['tetel']] += $_POST['osszeg'];
    $savingsCurrent['merleg'] += $_POST['osszeg'];
    if ($_POST['datum'] != '') {
        $savingsCurrent['datum'] = $_POST['datum'];
    }

    // fő kategóriák számolása
    if ($_POST['tetel'] != 'bevetel') {
        $savingsCurrent['kiadas'] += $_POST['osszeg'];
    }
    if ($_POST['tetel'] == 'befektetesek' || $_POST['tetel'] == 'lakasElotak') {
        $savingsCurrent['megtakaritas'] += $_POST['osszeg'];
    }
    $newData = json_encode($savingsCurrent, JSON_PRETTY_PRINT);
    file_put_contents($currentJson, $newData);

    // utolsó rögzítés idejének mentése
    $extraObj->date = date('Y. m. d.');
    $last_data = json_encode($extraObj, JSON_UNESCAPED_UNICODE);
    file_put_contents('../../data/savings/utolsoRogzites.json', $last_data);

    header("location:../../savings.php");
}

if (isset($_POST['saveKeszpenz'])) {

    // összeg hozzáadása a kategóriához
    $current_data = file_get_contents($currentJson);
    $savingsCurrent = json_decode($current_data, true);
    $savingsCurrent['kpAllomany'] = (int)$_POST['keszpenzall'];

    $newData = json_encode($savingsCurrent, JSON_UNESCAPED_UNICODE);
    file_put_contents($currentJson, $newData);

    header("location:../../savings.php");
}

if (isset($_POST['saveMonth'])) {

    // a savingsCurrent hozzáadása a saving-hez.
    $current_data = file_get_contents($savingsJson);
    $savingsArray = json_decode($current_data, true);
    $current_data = file_get_contents($currentJson);
    $current = json_decode($current_data, true);
    array_push($savingsArray, $current);
    $newData = json_encode($savingsArray, JSON_UNESCAPED_UNICODET);
    file_put_contents($savingsJson, $newData);
    fclose($currentJson);
    fclose($savingsJson);

    // a savingsCurrent ürítése
    $current_data = file_get_contents($currentJson);
    $current = json_decode($current_data, true);

    foreach ($current as $key => $value) {
        if (gettype($value) == 'string') {
            $extraObj->$key = date('Y', 'mm');
        } else {
            $extraObj->$key = 0;
        }
    }

    $newData = json_encode($extraObj, JSON_UNESCAPED_UNICODE);
    file_put_contents($currentJson, $newData);

    // a tételek ürítése
    $newData = json_encode([], JSON_UNESCAPED_UNICODE);
    file_put_contents($tetelekJson, $newData);

    header("location:../../savings.php");
}
