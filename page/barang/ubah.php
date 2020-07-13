<?php


$kode2 = $_GET['id'];

$sql = $koneksi->query("select * from tb_barang where kode_barcode ='$kode2'");
$tampil = $sql->fetch_assoc();

$satuan = $tampil['satuan'];
?>

<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    Ubah Data

                </h2>

            </div>

            <div class="body">

                <form method="POST">

                    <label for="">Jenis Zakat</label>
                    <div class="form-group">
                        <div class="form-line">
                            <select name="satuan" class="form-control show-tick">

                                <option value="Fitrah" <?php if ($satuan == 'Fitrah') {
                                                            echo "selected";
                                                        } ?>>Zakat Fitrah</option>
                                <option value="Maal" <?php if ($satuan == 'Maal') {
                                                            echo "selected";
                                                        } ?>>Zakat Maal</option>
                                <option value="Penghasilan" <?php if ($satuan == 'Penghasilan') {
                                                                echo "selected";
                                                            } ?>>Zakat Penghasilan</option>
                            </select>
                        </div>

                        <label for="">Nominal</label>

                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" name="profit" value="<?php echo $tampil['profit']; ?>" class="form-control" />
                            </div>
                        </div>

                        <label for="">Nama Lengkap</label>

                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" name="nama" value="<?php echo $tampil['nama_barang']; ?>" class="form-control" />
                            </div>
                        </div>

                    </div>

                    <label for="">Nomer Handphone</label>

                    <div class="form-group">
                        <div class="form-line">
                            <input type="number" name="stok" value="<?php echo $tampil['stok']; ?>" class="form-control" />
                        </div>
                    </div>

                    <label for="">Email</label>

                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" name="hbeli" value="<?php echo $tampil['harga_beli']; ?>" class="form-control" />
                        </div>
                    </div>

                    <label for="">Nama Bank</label>

                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" name="hjual" value="<?php echo $tampil['harga_jual']; ?>" class="form-control" />
                        </div>
                    </div>

                    <label for="">No Rekening</label>

                    <div class="form-group">
                        <div class="form-line">
                            <input type="number" name="kode" value="<?php echo $tampil['kode_barcode']; ?>" class="form-control" />
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

                    $sql2 =  $koneksi->query("update tb_barang set kode_barcode='$kode', nama_barang='$nama', satuan='$satuan', harga_beli='$hbeli', stok='$stok', harga_jual='$hjual', profit='$profit' where kode_barcode='$kode2'");



                    if ($sql2) {
                ?>

                        <script type="text/javascript">
                            alert("Data Berhasil Diubah");
                            window.location.href = "?page=barang";
                        </script>

                <?php
                    }
                }

                ?>