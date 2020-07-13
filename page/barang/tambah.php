<script type="text/javascript">
    var rupiah = document.getElementById('rupiah');
    rupiah.addEventListener('keyup', function(e) {
        // tambahkan 'Rp.' pada saat form di ketik
        // gunakan fungsi formatRupiah() untuk mengubah angka yang di ketik menjadi format angka
        rupiah.value = formatRupiah(this.value, 'Rp. ');
    });

    /* Fungsi formatRupiah */
    function formatRupiah(angka, prefix) {
        var number_string = angka.replace(/[^,\d]/g, '').toString(),
            split = number_string.split(','),
            sisa = split[0].length % 3,
            rupiah = split[0].substr(0, sisa),
            ribuan = split[0].substr(sisa).match(/\d{3}/gi);

        // tambahkan titik jika yang di input sudah menjadi angka ribuan
        if (ribuan) {
            separator = sisa ? '.' : '';
            rupiah += separator + ribuan.join('.');
        }

        rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
        return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
    }
</script>
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    Tambah Menu

                </h2>

            </div>

            <div class="body">

                <form method="POST">

                    <label for="">Jenis</label>
                    <div class="form-group">
                        <div class="form-line">
                            <select name="satuan" class="form-control show-tick">
                                <option value="">-- Pilih Jenis --</option>
                                <option value="Fitrah">Zakat Fitrah</option>
                                <option value="Maal">Zakat Maal</option>
                                <option value="Penghasilan">Zakat Penghasilan</option>

                            </select>
                        </div>

                        <label for="">Nominal</label>

                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" name="profit" class="form-control" />
                            </div>
                        </div>


                        <label for="">Nama Lengkap</label>

                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" name="nama" class="form-control" />
                            </div>
                        </div>


                    </div>

                    <label for="">Nomer Handphone</label>

                    <div class="form-group">
                        <div class="form-line">
                            <input type="number" name="stok" class="form-control" />
                        </div>
                    </div>

                    <label for="">Email</label>

                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" name="hbeli" class="form-control" />
                        </div>
                    </div>

                    <label for="">Nama Bank</label>

                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" name="hjual" class="form-control" />
                        </div>
                    </div>

                    <label for="">No Rekening</label>

                    <div class="form-group">
                        <div class="form-line">
                            <input type="number" name="kode" class="form-control" />
                        </div>
                    </div>




                    <input type="submit" name="simpan" value="simpan" class="btn btn-primary">

                </form>




                <?php


                if (isset($_POST['simpan'])) {

                    $kode = $_POST['kode'];
                    $nama = $_POST['nama'];
                    $satuan = $_POST['satuan'];
                    $stok = $_POST['stok'];
                    $hbeli = $_POST['hbeli'];
                    $hjual = $_POST['hjual'];
                    $profit = $_POST['profit'];

                    $sql =  $koneksi->query("insert into tb_barang values('$kode','$nama', '$satuan', '$hbeli', '$stok', '$hjual', '$profit') ");



                    if ($sql) {
                ?>

                        <script type="text/javascript">
                            alert("Data Berhasil Disimpan");
                            window.location.href = "?page=barang";
                        </script>

                <?php
                    }
                }

                ?>