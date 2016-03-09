<?php
include'config.php';

error_reporting(0);
$page = $_GET['page'];

if ($page == 'cari-kota')
{
	$id = $_POST['id'];
	$kota = $db->query("SELECT * FROM tbl_kota WHERE provinsi_id = '$id'");
	echo'<option value="0">Pilih Kota</option>';
	while ($rowkota = $kota->fetch(PDO::FETCH_ASSOC)) {
	    
	    echo'<option value="'.$rowkota['kota_id'].'">'.$rowkota['kota'].'</option>';
	}
}

if ($page == 'jenis-kurir')
{
	$id = $_POST['id'];

	if ($id == 'jne')
	{
		echo'<option value="OKE">OKE</option>';
		echo'<option value="REG">REG</option>';
	} else if  ($id == 'pos')
	{
		echo'<option value="KILAT">KILAT</option>';
		echo'<option value="EKSPRESS">EKSPRESS</option>';
	} else if  ($id == 'tiki')
	{
		echo'<option value="ECO">ECO</option>';
		echo'<option value="REG">REG</option>';
		echo'<option value="ONS">ONS</option>';
	} else
	{
		echo'<option value=""></option>';
	}
}

if ($page == 'ongkir')
{
	$kota  = $_POST['kota'];
	$jenis = $_POST['jenis'];
	$kurir = $_POST['kurir'];
	$pengirim = $_POST['pengirim'];

	$ongkir = $db->query("SELECT * FROM tbl_harga WHERE hrg_kota = '$pengirim' AND hrg_kota_tujuan = '$kota' AND hrg_kurir = '$kurir' AND hrg_jenis = '$jenis' ");
	$data = $ongkir->fetch(PDO::FETCH_ASSOC);
	    
	echo $data['hrg_jumlah'];

}



?>