<?php 
date_default_timezone_set('Asia/Jakarta');
//Menampilkan tanggal hari ini dalam bahasa Indonesia dan English
$namaHari = array("Ahad", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu","Minggu");
$namaBulan = array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");
$today = date('l, F j, Y');
$sekarang = $namaHari[date('N')] . ", " . date('j') . " " . $namaBulan[(date('n')-1)] . " " . date('Y') ;

$date = new DateTime();
	$koneksi = new mysqli("localhost", "root", "", "db_pos");
 ?>

<style>
		@media print{
			input.noPrint{
				display: none;
			}
		}
</style>

<table border="1" width="100%" style="border-collapse: collapse;">
	
	<h1 style="text-align: center;">Data Pembayaran Zakat <br>Periode <?php echo $sekarang. $date->format( '  H:i:s'); ?></h1>
	<thead>
		<tr>
			<th>No</th>
			<th>Jenis Zakat</th>
			<th>Nominal</th>
			<th>Nama Lengkap</th>
			<th>No Handphone</th>
			<th>Email</th>
			<th>Nama Bank</th>
			<th>No Rekening</th>
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
            <td><?php echo $data['kode_barcode']; ?></td>
            <td><?php echo $data['nama_barang']; ?></td>
         
            <td><?php echo $data['stok']; ?></td>
            <td><?php echo $data['harga_beli']; ?></td>
            <td><?php echo $data['harga_jual']; ?></td>
	        <td><?php echo $data['profit']; ?></td>	                                      
	    </tr>

	   <?php } ?>

	</tbody>

</table>

<br>
<input type="button" class="noPrint" value="Cetak" onclick="window.print()">