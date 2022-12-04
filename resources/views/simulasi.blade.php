<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Cabin:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.css">
    <!-- Favicons -->
    <link href="{{ asset('assets/icon-bisma.png') }}" rel="icon">
    <link href="{{ asset('assets/icon-bisma.png') }}" rel="apple-touch-icon">

    <title>Simulasi Kredit</title>


    <!-- ==========================================
      CARI APA AYO?
      HAHA.. AYO BELAJAR BERSAMA, KAMU PASTI BISA!

      Author           : I Wayan Andika Pranayoga
      Author website   : https://dikaprana.com
      Author instagram : @dikanayoga

      Copyright 2020
      ============================================= -->

    <link rel="stylesheet" href="{{ asset('assets/main10.css') }}">
</head>

<body>
    <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light navcustom">
        <a class="navbar-brand" href="https://yamahabismagroup.com/">
            <img src="{{ asset('assets/Logobisma.png') }}" width="100" alt="YAMAHA BISMA">
        </a>
        <button class="navbar-toggler togglercustom" type="button" data-toggle="collapse"
            data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0 menucustom">
                <li class="nav-item">
                    <a class="nav-link" href="https://yamahabismagroup.com/" style="color: white;">Home <span
                            class="sr-only"></span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://yamahabismagroup.com/model/"
                        style="color: white;">Buy Product</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white;">
                        Type Product
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="https://yamahabismagroup.com/brand/maxi/">MAXI</a>
                        <a class="dropdown-item" href="https://yamahabismagroup.com/brand/matic/">MATIC</a>
                        <a class="dropdown-item" href="https://yamahabismagroup.com/brand/moped/">MOPED</a>
                        <a class="dropdown-item" href="https://yamahabismagroup.com/brand/naked-bike/">NAKED BIKE</a>
                        <a class="dropdown-item" href="https://yamahabismagroup.com/brand/sport/">SPORT</a>
                        <a class="dropdown-item" href="https://yamahabismagroup.com/brand/off-road/">OFF ROAD</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://www.booking.yamahabismagroup.com/public/booking"
                        style="color: white;" target="_blank">Booking Service</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://yamahabismagroup.com/pilih-dealer/"
                        style="color: white;">Contact</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container-fluid main">
        <div class="box">
            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <a class="nav-item nav-link active" id="bunga-menurun-tab" data-toggle="tab" href="#bunga-menurun"
                        role="tab" aria-controls="bunga-menurun" aria-selected="true">Bunga Menurun</a>
                    <a class="nav-item nav-link" id="bunga-menetap-tab" data-toggle="tab" href="#bunga-menetap"
                        role="tab" aria-controls="bunga-menetap" aria-selected="false">Bunga Menetap</a>
                </div>
            </nav>

            <div class="tab-content" id="nav-tabContent">
                <!-- TAB BUNGA MENURUN -->
                <div class="tab-pane fade show active" id="bunga-menurun" role="tabpanel"
                    aria-labelledby="bunga-menurun-tab">
                    <div class="judul">
                        <center>
                            <h3>Simulasi Kredit Bunga Menurun</h3>
                        </center>

                    </div>
                    <div class="isian">
                        <form action="proses.php" method="post">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="motor">Pilih Motor</label>
                                    <input type="text" class="form-control inputcustom" id="motor_menurun" data-toggle="modal"
                                        data-target="#menu_motor_menurun">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="motor">Harga</label>
                                    <h3><span id="harga_motor_menurun"></span></h3>
                                    <input type="number" id="angka_motor_menurun" hidden>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="dp">Down Payment</label>
                                    <input type="number" class="form-control inputcustom" id="dp_menurun"
                                        onkeyup="hitung_dp_menurun();" placeholder="cth: 5200000">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="motor">Persentase DP</label>
                                    <h3><span id="dp_motor_menurun" class="dp"></span>%</h3>
                                    <span id="angka_dp_menurun" hidden></span>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Tenor (bulan)</label>
                                    <select id="tenor_menurun" class="form-control inputcustom selectcustom">
                                        <option selected>Pilih Tenor</option>
                                        <option value="12">12 bulan</option>
                                        <option value="24">24 bulan</option>
                                        <option value="36">36 bulan</option>
                                        <option value="48">48 bulan</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Bunga</label>
                                    <input type="text" id="bunga_menurun" value="0.024" hidden="hidden">
                                    <h3>2.4 %</h3>
                                </div>

                                <!-- <div class="form-group col-md-6">
                            <label>Bunga (%)</label>
                            <select class="form-control inputcustom selectcustom">
                            <option selected>Pilih Bunga</option>
                            <option value="0.0175">1.75%</option>
                            <option value="0.024">2.4%</option>
                            </select>
                        </div> -->
                            </div>
                            <br>
                        </form>
                    </div>

                    <center>
                        <div class="row justify-content-md-center">
                            <div class="col-md-auto">
                                <button type="button" class="btn tombol" onclick="hitung_kredit_menurun();"
                                    id="hitung_menurun">Hitung</button>
                            </div>
                        </div>
                    </center>
                    <br>

                    <center>
                        <span id="angsuran_menurun">

                        </span>
                    </center>
                    <br>
                </div>
                <!-- END TAB BUNGA MENURUN -->

                <!-- TAB BUNGA MENETAP -->
                <div class="tab-pane fade" id="bunga-menetap" role="tabpanel" aria-labelledby="bunga-menetap-tab">
                    <div class="judul">
                        <center>
                            <h3>Simulasi Kredit Bunga Menetap</h3>
                        </center>

                    </div>
                    <div class="isian">
                        <form action="proses.php" method="post">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="motor">Pilih Motor</label>
                                    <input type="text" class="form-control inputcustom" id="motor" data-toggle="modal"
                                        data-target="#menu_motor">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="motor">Harga</label>
                                    <h3><span id="harga_motor"></span></h3>
                                    <input type="number" id="angka_motor" hidden>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="dp">Down Payment</label>
                                    <input type="number" class="form-control inputcustom" id="dp"
                                        onkeyup="hitung_dp();" placeholder="cth: 8500000">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="motor">Persentase DP</label>
                                    <h3><span id="dp_motor" class="dp"></span>%</h3>
                                    <span id="angka_dp" hidden></span>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Tenor (bulan)</label>
                                    <select id="tenor" class="form-control inputcustom selectcustom">
                                        <option selected>Pilih Tenor</option>
                                        <option value="12">12 bulan</option>
                                        <option value="24">24 bulan</option>
                                        <option value="36">36 bulan</option>
                                        <option value="48">48 bulan</option>
                                        <option value="60">60 bulan</option>
                                    </select>
                                </div>
                                

                                <!-- <div class="form-group col-md-6">
                            <label>Bunga (%)</label>
                            <select class="form-control inputcustom selectcustom">
                            <option selected>Pilih Bunga</option>
                            <option value="0.0175">1.75%</option>
                            <option value="0.024">2.4%</option>
                            </select>
                        </div> -->
                            </div>
                            <br>
                        </form>
                    </div>

                    <center>
                        <div class="row justify-content-md-center">
                            <div class="col-md-auto">
                                <button type="button" class="btn tombol" onclick="hitung_kredit();"
                                    id="hitung">Hitung</button>
                            </div>
                        </div>
                    </center>
                    <br>

                    <center>
                        <span id="angsuran">

                        </span>
                    </center>
                    <br>
                </div>
                <!-- END TAB BUNGA MENETAP -->
            </div>
        </div>
    </div>

    <footer>
        <center>
            Copyright &copy; <a href="https://yamahabismagroup.com">CRM Yamaha Bisma Group</a>
            <br>
            <span style="font-size: 8px; color: grey;"><a href="https://dikaprana.com" style="color: grey;"
                    target="_blank">Supported by dikaprana.com</a></span>
        </center>
    </footer>


    <!-- Modal Menurun -->
    <div class="modal fade modalcustom" id="menu_motor_menurun" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header modalcustom-header">
                    <h5 class="modal-title" id="exampleModalLabel">Daftar Motor</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="close">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <table id="myTable" class="cell-border hover stripe order-column">
                        <thead>
                            <tr>
                                <th>Nama Motor</th>
                                <th>Harga</th>
                                <th>Kategori</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($data as $o)
                            <tr class="pilih_menurun" data-motor_menurun="{{ $o->model_name }}"
                                data-harga_motor_menurun="Rp {{ number_format($o->price, 0, ',', '.') }}"
                                data-angka_motor_menurun="{{ $o->price }}">
                                <td>{{ $o->model_name }}</td>
                                <td>Rp {{ number_format($o->price, 0, ',', '.') }}</td>
                                <td>{{ $o->category }}</td>
                            </tr>
                            @empty
                            <tr>
                                <td rowspan="3">No Data Available</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- END Modal Menurun -->

    <!-- Modal Menetap -->
    <div class="modal fade modalcustom" id="menu_motor" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header modalcustom-header">
                    <h5 class="modal-title" id="exampleModalLabel">Daftar Motor</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="close">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <table id="myTable_2" class="cell-border hover stripe order-column">
                        <thead>
                            <tr>
                                <th>Nama Motor</th>
                                <th>Harga</th>
                                <th>Kategori</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($data as $o)
                            <tr class="pilih" data-motor="{{ $o->model_name }}"
                                data-harga_motor="Rp {{ number_format($o->price, 0, ',', '.') }}"
                                data-angka_motor="{{ $o->price }}">
                                <td>{{ $o->model_name }}</td>
                                <td>Rp {{ number_format($o->price, 0, ',', '.') }}</td>
                                <td>{{ $o->category }}</td>
                            </tr>
                            @empty
                            <tr>
                                <td rowspan="3">No Data Available</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- END Modal Menetap -->


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js">
    </script>

    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#myTable').DataTable({
                "paging": false
            });
        });

        $(document).ready(function () {
            $('#myTable_2').DataTable({
                "paging": false
            });
        });

    </script>

    <script type="text/javascript">
        $(document).on('click', '.pilih_menurun', function (e) {
            document.getElementById("motor_menurun").value = $(this).attr('data-motor_menurun');
            document.getElementById("harga_motor_menurun").innerHTML = $(this).attr('data-harga_motor_menurun');
            document.getElementById("angka_motor_menurun").value = $(this).attr('data-angka_motor_menurun');
            $('#menu_motor_menurun').modal('hide');
        });

        $(document).on('click', '.pilih', function (e) {
            document.getElementById("motor").value = $(this).attr('data-motor');
            document.getElementById("harga_motor").innerHTML = $(this).attr('data-harga_motor');
            document.getElementById("angka_motor").value = $(this).attr('data-angka_motor');
            $('#menu_motor').modal('hide');
        });
    </script>

    <script src="{{ asset('assets/proses.js') }}" charset="utf-8"></script>
</body>

</html>
