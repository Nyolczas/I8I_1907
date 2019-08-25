<?php
$current_data = file_get_contents('./data/savings/savingsCurrent.json');
$savingsCurrent = json_decode($current_data, true);
$current_data = file_get_contents('./data/savings/savings.json');
$savings = json_decode($current_data, true);
$kiadasokAktual = 0;

function uploadData($id)
{
    global $savings;
    global $savingsCurrent;
    $res = [];
    foreach ($savings as $saving) {
        array_push($res, $saving[$id]);
    }
    array_push($res, $savingsCurrent[$id]);
    return $res;
}

function uploadAverageData($id)
{
    global $savings;
    $res = [];
    foreach ($savings as $saving) {
        array_push($res, $saving[$id]);
    }
    array_push($res, null);
    return $res;
}

function calcAverage($id)
{
    $res = 0;
    global $savings;
    global $savingsCurrent;
    $sum = 0;
    $length = 12;
    if (sizeof($savings) < 12) {
        global $length;
        $length = sizeof($savings);
    }
    for ($i = 0; $i < $length; $i++) {
        $sum += $savings[$i][$id];
    }
    $sum += $savingsCurrent[$id];
    $dataCnt = sizeof($savings) + 1;
    $res = $sum / $dataCnt;
    return $res;
}

$osszetetelListaItemArray = [
    'bankKoltseg' => [
        'kategoria' => 'Bank költség',
        'aktual' => uploadData('bankKoltseg'),
        'atlag' =>  uploadAverageData('bankKoltsegAvr'),
        'atlagCurrent' => calcAverage('bankKoltseg')
    ], 'befektetesek' => [
        'kategoria' => 'Befektetések',
        'aktual' => uploadData('befektetesek'),
        'atlag' =>  uploadAverageData('befektetesekAvr'),
        'atlagCurrent' => calcAverage('befektetesek')
    ], 'lakasElotak' => [
        'kategoria' => 'Lakás előtakarékosság',
        'aktual' => uploadData('lakasElotak'),
        'atlag' =>  uploadAverageData('lakasElotakAvr'),
        'atlagCurrent' => calcAverage('lakasElotak')
    ], 'lakas' => [
        'kategoria' => 'Lakás, lakhatás',
        'aktual' => uploadData('lakas'),
        'atlag' =>  uploadAverageData('lakasAvr'),
        'atlagCurrent' => calcAverage('lakas')
    ], 'csalad' => [
        'kategoria' => 'Család',
        'aktual' => uploadData('csalad'),
        'atlag' =>  uploadAverageData('csaladAvr'),
        'atlagCurrent' => calcAverage('csalad')
    ], 'egeszseg' => [
        'kategoria' => 'Egészség, pihenés',
        'aktual' => uploadData('egeszseg'),
        'atlag' =>  uploadAverageData('egeszsegAvr'),
        'atlagCurrent' => calcAverage('egeszseg')
    ], 'szorakozas' => [
        'kategoria' => 'Szórakozás, ünnep',
        'aktual' => uploadData('szorakozas'),
        'atlag' =>  uploadAverageData('szorakozasAvr'),
        'atlagCurrent' => calcAverage('szorakozas')
    ], 'etkezes' => [
        'kategoria' => 'Étkezés',
        'aktual' => uploadData('etkezes'),
        'atlag' =>  uploadAverageData('etkezesAvr'),
        'atlagCurrent' => calcAverage('etkezes')
    ], 'ado' => [
        'kategoria' => 'Adó, könyvelés',
        'aktual' => uploadData('ado'),
        'atlag' =>  uploadAverageData('adoAvr'),
        'atlagCurrent' => calcAverage('ado')
    ], 'keszpenz' => [
        'kategoria' => 'Készpénzes költés',
        'aktual' => uploadData('keszpenz'),
        'atlag' =>  uploadAverageData('keszpenzAvr'),
        'atlagCurrent' => calcAverage('keszpenz')
    ], 'trade' => [
        'kategoria' => 'Tréd',
        'aktual' => uploadData('trade'),
        'atlag' =>  uploadAverageData('tradeAvr'),
        'atlagCurrent' => calcAverage('trade')
    ], 'ajandek' => [
        'kategoria' => 'Ajándék',
        'aktual' => uploadData('ajandek'),
        'atlag' =>  uploadAverageData('ajandekAvr'),
        'atlagCurrent' => calcAverage('ajandek')
    ], 'kozlekedes' => [
        'kategoria' => 'Közlekedés, bringa, autó',
        'aktual' => uploadData('kozlekedes'),
        'atlag' =>  uploadAverageData('kozlekedesAvr'),
        'atlagCurrent' => calcAverage('kozlekedes')
    ], 'internet' => [
        'kategoria' => 'Internet, telefon, gép',
        'aktual' => uploadData('internet'),
        'atlag' =>  uploadAverageData('internetAvr'),
        'atlagCurrent' => calcAverage('internet')
    ], 'ruhazkodas' => [
        'kategoria' => 'Ruházkodás',
        'aktual' => uploadData('ruhazkodas'),
        'atlag' =>  uploadAverageData('ruhazkodasAvr'),
        'atlagCurrent' => calcAverage('ruhazkodas')
    ], 'onkepzes' => [
        'kategoria' => 'Önképzés, könyv',
        'aktual' => uploadData('onkepzes'),
        'atlag' =>  uploadAverageData('onkepzesAvr'),
        'atlagCurrent' => calcAverage('onkepzes')
    ], 'onmegvalositas' => [
        'kategoria' => 'Önmegvalósítás',
        'aktual' => uploadData('onmegvalositas'),
        'atlag' =>  uploadAverageData('onmegvalositasAvr'),
        'atlagCurrent' => calcAverage('onmegvalositas')
    ],
];

$foListaArray = [
    'merleg' => [
        'clr' => 'primary',
        'bjuti' => 'Mérleg',
        'aktual' => uploadData('merleg'),
        'atlag' =>  uploadAverageData('merlegAvr'),
        'atlagCurrent' => calcAverage('merleg')
    ], 'megtakaritas' => [
        'clr' => 'warning',
        'bjuti' => 'Megtakarítás',
        'aktual' => uploadData('megtakaritas'),
        'atlag' =>  uploadAverageData('megtakaritasAvr'),
        'atlagCurrent' => calcAverage('megtakaritas')
    ], 'kpAllomany' => [
        'clr' => 'info',
        'bjuti' => 'KP állomány',
        'aktual' => uploadData('kpAllomany'),
        'atlag' =>  uploadAverageData('kpAllomanyAvr'),
        'atlagCurrent' => calcAverage('kpAllomany')
    ], 'bevetel' => [
        'clr' => 'success',
        'bjuti' => 'Bevétel',
        'aktual' => uploadData('bevetel'),
        'atlag' =>  uploadAverageData('bevetelAvr'),
        'atlagCurrent' => calcAverage('bevetel')
    ], 'kiadas' => [
        'clr' => 'danger',
        'bjuti' => 'Kiadás',
        'aktual' => uploadData('kiadas'),
        'atlag' =>  uploadAverageData('kiadasAvr'),
        'atlagCurrent' => calcAverage('kiadas')
    ]
];
$currentJson = file_get_contents('./data/savings/savingsCurrent.json');
$savingsCurrent = json_decode($currentJson, true);

// átlagok visszaírása jsonba
$savingsCurrent['merlegAvr'] = calcAverage('merleg');
$savingsCurrent['megtakaritasAvr'] = calcAverage('megtakaritas');
$savingsCurrent['kpAllomanyAvr'] = calcAverage('kpAllomany');
$savingsCurrent['bevetelAvr'] = calcAverage('bevetel');
$savingsCurrent['kiadasAvr'] = calcAverage('kiadas');
$savingsCurrent['bankKoltsegAvr'] = calcAverage('bankKoltseg');
$savingsCurrent['befektetesekAvr'] = calcAverage('befektetesek');
$savingsCurrent['lakasElotakAvr'] = calcAverage('lakasElotak');
$savingsCurrent['lakasAvr'] = calcAverage('lakas');
$savingsCurrent['csaladAvr'] = calcAverage('csalad');
$savingsCurrent['egeszsegAvr'] = calcAverage('egeszseg');
$savingsCurrent['szorakozasAvr'] = calcAverage('szorakozas');
$savingsCurrent['etkezesAvr'] = calcAverage('etkezes');
$savingsCurrent['adoAvr'] = calcAverage('ado');
$savingsCurrent['keszpenzAvr'] = calcAverage('keszpenz');
$savingsCurrent['tradeAvr'] = calcAverage('trade');
$savingsCurrent['ajandekAvr'] = calcAverage('ajandek');
$savingsCurrent['kozlekedesAvr'] = calcAverage('kozlekedes');
$savingsCurrent['internetAvr'] = calcAverage('internet');
$savingsCurrent['ruhazkodasAvr'] = calcAverage('ruhazkodas');
$savingsCurrent['onkepzesAvr'] = calcAverage('onkepzes');
$savingsCurrent['onmegvalositasAvr'] = calcAverage('onmegvalositas');

$newData = json_encode($savingsCurrent, JSON_UNESCAPED_UNICODE);
file_put_contents('./data/savings/savingsCurrent.json', $newData);


