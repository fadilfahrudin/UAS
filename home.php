<?php

date_default_timezone_set("Asia/Bangkok");

date_default_timezone_get();

$tgl = date("Y-m-d");

$sql = $koneksi->query("select * from tb_penjualan, tb_barang where tb_penjualan.kode_barcode=tb_barang.kode_barcode and tgl_penjualan='$tgl'");

?>

<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>

<marquee>
    <h1 class="font-bold col-blue-grey ">Zakat Berkah</h1>
</marquee>
<div class="container-fluid">
    <div class="block-header">
        <h2>DASHBOARD</h2>
    </div>

    <!-- Widgets -->



    <script>
        // Function ini dijalankan ketika Halaman ini dibuka pada browser
        $(function() {
            setInterval(timestamp, 1000); //fungsi yang dijalan setiap detik, 1000 = 1 detik
        });

        //Fungi ajax untuk Menampilkan Jam dengan mengakses File ajax_timestamp.php
        function timestamp() {
            $.ajax({
                url: 'ajax_timestamp.php',
                success: function(data) {
                    $('#timestamp').html(data);
                },
            });
        }
    </script>

    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="info-box bg-light-blue hover-zoom-effect">
            <div class="icon">
                <i class="material-icons">av_timer</i>
            </div>
            <div class="content">
                <div class="text">JAM</div>
                <h4 id="timestamp"></h4>
            </div>
        </div>
    </div>