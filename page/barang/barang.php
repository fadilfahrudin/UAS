<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    Data Zakat
                </h2>

            </div>
            <div class="body">
                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Jenis Zakat</th>
                            <th>Nominal</th>
                            <th>Nama Lengkap</th>
                            <th>Nomer Handphone</th>
                            <th>Email</th>
                            <th>Nama Bank</th>
                            <th>No Rekening</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>


                    <tbody>

                        <?php

                        $no = 1;
                        $sql = $koneksi->query("select * from tb_barang ");

                        while ($data = $sql->fetch_assoc()) {



                        ?>

                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $data['satuan']; ?></td>
                                <td>Rp.<?php echo  number_format($data['profit']) ?></td>
                                <td><?php echo $data['nama_barang']; ?></td>

                                <td><?php echo $data['stok']; ?></td>
                                <td><?php echo $data['harga_beli']; ?></td>
                                <td><?php echo $data['harga_jual']; ?></td>
                                <td><?php echo $data['kode_barcode']; ?></td>

                                <td>

                                    <a href="?page=barang&aksi=ubah&id=<?php echo $data['kode_barcode'] ?>" title="Ubah" class="btn btn-default  waves-effect  waves-float"><i class="material-icons">create</i></a>
                                    <a onclick="return confirm('Apakah anda yakin ingin menghapus data ini...?')" href="?page=barang&aksi=hapus&id=<?php echo $data['kode_barcode'] ?>" title="Hapus" class="btn btn-danger  waves-effect  waves-float"><i class="material-icons">delete</i></a>

                                </td>
                            </tr>

                        <?php } ?>



                    </tbody>
                </table>
                <a href="?page=barang&aksi=tambah" title="Tambah MUZAKI" class="btn btn-grey btn-danger"><i class="material-icons">add</i></a>
                <a href="page/barang/cetak.php" target="blank" title="Cetak" class="btn btn-default"><i class="material-icons">print</i></a>
            </div>