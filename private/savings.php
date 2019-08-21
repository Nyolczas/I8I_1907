<?php
$pageNr = 1;
include './includes/menuArray.php';
$page = $menuArray[$pageNr]['pageName'];
$title = $menuArray[$pageNr]['bjutiName'];
include './includes/head.php';
include './includes/navbar.php';
include './includes/savings/osszetetelLista.php';
require_once './includes/savings/processSavings.php';

?>

<div class="jumbotron">
<div class="container">
        <h1><?php echo $menuArray[$pageNr]['bjutiName']; ?></h1>
    </div>
</div>

<!-- savings page content START -->
<div class="container">
        <div class="d-flex flex-row-reverse">
            <div class="col-12 col-md-6 col-lg-4 col-xl-3 mb-4 oszlop oszlop-top oszlop-1">
                <div class="card border-secondary">
                    <table class="table">
                        <tbody>
                            <tr class=" table-primary">
                                <th scope="row" class="pt-3">
                                    <div class="clr-round align-middle"></div>
                                </th>
                                <td class="align-middle">Mérleg</td>
                                <td><strong>280 000</strong> <br>
                                    <small>(265 000)</small>
                                </td>
                            </tr>
                            <tr class="table-danger">
                                <th scope="row" class="pt-3">
                                    <div class="clr-round align-middle"></div>
                                </th>
                                <td class="align-middle">Kiadás</td>
                                <td><strong>350 000</strong> <br>
                                    <small>(360 000)</small>
                                </td>
                            </tr>
                            <tr class="table-success">
                                <th scope="row" class="pt-3">
                                    <div class="clr-round align-middle"></div>
                                </th>
                                <td class="align-middle">Bevétel</td>
                                <td><strong>680 000</strong> <br>
                                    <small>(565 000)</small>
                                </td>
                            </tr>
                            <tr class="table-info">
                                <th scope="row" class="pt-3">
                                    <div class="clr-round align-middle"></div>
                                </th>
                                <td class="align-middle">Kp állomány</td>
                                <td><strong>1 840 000</strong> <br>
                                    <small>(1 620 000)</small>
                                </td>
                            </tr>
                            <tr class="table-warning">
                                <th scope="row" class="pt-3">
                                    <div class="clr-round align-middle"></div>
                                </th>
                                <td class="align-middle">Havi megtakarítás</td>
                                <td><strong>320 000</strong> <br>
                                    <small>(240 000)</small>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="w-100 px-3 mt-1">
                        <div id="chart-kiadas-bevetel-preview"></div>
                        <div class="p3 d-flex justify-content-around">
                            <p class="text-danger text-center flex-fill mr-2"><small>kiadás</small></p>
                            <p class="text-success text-center flex-fill ml-2"><small>bevétel</small></p>
                        </div>
                    </div>
                    <form action="./includes/savings/processSavings.php" method="POST" class="card bg-light">
                        <fieldset class="p-3">
                            <legend class="pt-3">Új számlaesemény rögzítése</legend>
                            <input type="hidden" name="id" value="">
                            <input type="hidden" name="position" value="">
                            <div class="form-group">
                                <label for="datum">Gyűjtő hónap</label>
                                <input type="text" name="datum" id="datum" class="form-control" value="<? echo date('Y') . ' ' . date('m'); ?>">
                            </div>
                            <div class="form-group">
                                <label for="osszeg">Összeg</label>
                                <input type="text" name="osszeg" id="osszeg" class="form-control" value=""
                                    placeholder="8 888 888">
                            </div>
                            <div class="form-group">
                                <label for="tetel">Tétel:</label>
                                <select class="form-control" id="tetel">
                                    <option value="1">Bevétel</option>
                                    <? foreach($osszetetelListaItemArray as $key => $value): ?>
                                    <option value="<? echo $key; ?>"><? echo $value['kategoria']; ?></option>
                                    <? endforeach; ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <button type="submit" name="save"
                                    class="btn btn-secondary btn-lg btn-block my-4">Mentés</button>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 col-xl-3 mb-4 oszlop oszlop-top oszlop-2">
                <div class="card card border-secondary">
                    <div class="card-header bg-primary text-white d-flex justify-content-between">
                        <h4>19 / Szeptember</h4>
                        <div class="icon-check"></div>
                    </div>
                    <div class="kiadasok-lista-wrapper">
                        <ul class="list-group">
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <span class="badge badge-danger badge-pill">-1 200</span>
                                Étkezés
                                <div class="icon-trash"></div>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <span class="badge badge-success badge-pill">961 200</span>
                                Fizetés
                                <div class="icon-trash"></div>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <span class="badge badge-danger badge-pill">-14 200</span>
                                Ajándék
                                <div class="icon-trash"></div>
                            </li>
                        </ul>
                    </div>
               </div>
            </div>
            <div class="col-12 col-lg-4 col-xl-6 oszlop oszlop-3 mb-4">
                <div id="megtakaritasBarChart" class="chart"></div>
                <div id="bevetelkiadasLineChart" class="chart"></div>
            </div>
        </div>
        <div class="d-flex">
            <div class="col-12 col-lg-6">
                <div id="keszpenzChart" class="chart"></div>
            </div>
            <div class="col-12 col-lg-6">
                <div id="merlegChart" class="chart"></div>
            </div>
        </div>
        <div class="d-flex flex-row-reverse">
            <div class="col-12 col-md-6 col-lg-4 col-xl-3 mb-4 oszlop oszlop-4">
                    <div id="osszetetelPieChart" class="chart"></div>
                    <div class="osszetetel-lista">
                        <? foreach($osszetetelListaItemArray as $key => $value): ?>
                        <div class="osszetetel-lista-item d-flex justify-content-between align-items-center">
                            <div class="col-1">
                                <div class="clr clr-<? echo $key; ?>"></div>
                            </div>
                            <div class="col-5 kategoria"><? echo $value['kategoria']; ?></div>
                            <div class="col-3 aktual"><? echo $value['aktual']; ?></div>
                            <div class="col-3 atlag"><? echo $value['atlag']; ?></div>
                        </div>
                        <? endforeach; ?>
                    </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/d3/3.5.17/d3.min.js"></script>

    <script>
        var bevetelKiadasDataset = [380000, 250000, 0, 580000, 650000];
    </script>
    <script src="js/bevetelkiadasBars.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script>
        var box = document.querySelector(".oszlop-3");
        var chartheight = box.offsetHeight / 2;

        var options = {
            chart: {
                height: chartheight,
                type: 'line',
            },
            series: [{
                name: 'Havi megtakarítás',
                type: 'column',
                data: [270600, 300600, 105600, 243841, 97993, 165600, 210516, 240718, 276881, 156872,
                    120750, 135750, 80600, 80600, 40300, -331487, 20150, 20150, 20150
                ]
            }, {
                name: '12 havi átlag',
                type: 'line',
                data: [null, null, null, null, null, null, null, null, null, null, null, 193810, 177977,
                    159643, 154202, 106258, 99771, 87650, 71786
                ]
            }],
            stroke: {
                width: [0, 4]
            },
            title: {
                text: 'Havi megtakarítások'
            },
            labels: [
                '2018 01', '2018 02', '2018 03', '2018 04', '2018 05', '2018 06', '2018 07', '2018 08',
                '2018 09', '2018 10', '2018 11', '2018 12', '2019 01', '2019 02', '2019 03', '2019 04',
                '2019 05', '2019 06', '2019 07'
            ],
            colors: ['#F39C12', '#212529'],
            xaxis: {
                type: 'datetime'
            }
        }

        var chart = new ApexCharts(
            document.querySelector("#megtakaritasBarChart"),
            options
        );

        chart.render();

        //--- bevétel kiadás line chart
        var options = {
            chart: {
                height: chartheight,
                type: 'line',
            },
            series: [{
                name: 'Bevétel',
                data: [529100, 582448, 493390, 538030, 526930, 586300, 580990, 600000, 606370, 975000,
                    645000, 630640, 649000, 611000, 489000, 0, 118370, 295925, 437454
                ]
            }, {
                name: 'Kiadás',
                data: [532614.55, 610756.04, 601673.67, 520782.64, 461387.77, 652037.76, 503013.14,
                    612869.39, 559061.21, 884397.46, 601612.79, 772540.72, 399508.56, 582321.92,
                    302619.96, 105704.97, 311364.07, 107939.23, 279184.15
                ]
            }],
            stroke: {
                width: [4, 4]
            },
            title: {
                text: 'Bevétel - Kiadás'
            },
            labels: [
                '2018 01', '2018 02', '2018 03', '2018 04', '2018 05', '2018 06', '2018 07', '2018 08',
                '2018 09', '2018 10', '2018 11', '2018 12', '2019 01', '2019 02', '2019 03', '2019 04',
                '2019 05', '2019 06', '2019 07'
            ],
            colors: ['#18BC9C', '#E74C3C'],
            xaxis: {
                type: 'datetime'
            }
        }

        var chart = new ApexCharts(
            document.querySelector("#bevetelkiadasLineChart"),
            options
        );

        chart.render();

        //--- készpénz chart
        var options = {
            chart: {
                type: 'line',
            },
            series: [{
                name: 'Készpénz állomány',
                type: 'column',
                data: [138585.59, 110277.55, 1993.88, 19241.24, 84783.47, 19045.71, 97022.57, 84153.18,
                    131461.97, 216664.51, 260051.72, 118151, 421583, 421584, 584507, 570833, 285808,
                    473793.77, 632063.62
                ]
            }, {
                name: '12 havi átlag',
                type: 'line',
                data: [null, null, null, null, null, null, null, null, null, null, null, 106786, 130369,
                    156311, 204854, 250820, 267572, 305468, 350055
                ]
            }],
            stroke: {
                width: [0, 4]
            },
            title: {
                text: 'Havi készpénz állomány'
            },
            labels: [
                '2018 01', '2018 02', '2018 03', '2018 04', '2018 05', '2018 06', '2018 07', '2018 08',
                '2018 09', '2018 10', '2018 11', '2018 12', '2019 01', '2019 02', '2019 03', '2019 04',
                '2019 05', '2019 06', '2019 07'
            ],
            colors: ['#3498DB', '#212529'],
            xaxis: {
                type: 'datetime'
            }
        }

        var chart = new ApexCharts(
            document.querySelector("#keszpenzChart"),
            options
        );

        chart.render();

        //--- mérleg chart
        var options = {
            chart: {
                type: 'line',
            },
            series: [{
                name: 'mérleg',
                type: 'column',
                data: [138585.59, 110277.55, 1993.88, 19241.24, 84783.47, 19045.71, 97022.57, 84153.18,
                    131461.97, 216664.51, 260051.72, 118151, 421583, 421584, 584507, 570833, 285808,
                    473793.77, 632063.62
                ]
            }, {
                name: '12 havi átlag',
                type: 'line',
                data: [null, null, null, null, null, null, null, null, null, null, null, 106786, 130369,
                    156311, 204854, 250820, 267572, 305468, 350055
                ]
            }],
            stroke: {
                width: [0, 4]
            },
            title: {
                text: 'Havi készpénz állomány'
            },
            labels: [
                '2018 01', '2018 02', '2018 03', '2018 04', '2018 05', '2018 06', '2018 07', '2018 08',
                '2018 09', '2018 10', '2018 11', '2018 12', '2019 01', '2019 02', '2019 03', '2019 04',
                '2019 05', '2019 06', '2019 07'
            ],
            colors: ['#212529', '#212529'],
            xaxis: {
                type: 'datetime'
            }
        }

        var chart = new ApexCharts(
            document.querySelector("#merlegChart"),
            options
        );

        chart.render();

        //--- összetétel pie chart
        var options = {
            chart: {
                width: 380,
                type: 'pie',
            },
            labels: ['Team A', 'Team B', 'Team C', 'Team D', 'Team E'],
            series: [44, 55, 13, 43, 22],
            responsive: [{
                breakpoint: 480,
                options: {
                    legend: {
                        show: false
                    }
                }
            }]
        }

        var chart = new ApexCharts(
            document.querySelector("#osszetetelPieChart"),
            options
        );

        chart.render();
    </script>

<!-- savings page content END -->

<?php include 'includes/foot.php'; ?>