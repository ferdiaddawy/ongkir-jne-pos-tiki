<?php include 'config.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Bootstrap 3, from LayoutIt!</title>

    <meta name="description" content="Source code generated using layoutit.com">
    <meta name="author" content="LayoutIt!">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

  </head>
  <body>

    <div class="container-fluid">
    <div class="row">
    <nav class="navbar navbar-default " role="navigation">
				<div class="navbar-header">
					 
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						 <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
					</button> <a class="navbar-brand" href="#">ZahraWeb.Com</a>
				</div>
				
				
				
			</nav>
    </div>
	<div class="row">
		<div class="col-md-12">
			<h2>
				Data Wilayah Indonesia
			</h2>
			<p>
				Data ini diambil dari situs Pemutakhiran MFD dan MBS Badan Pusat Statistik (http://mfdonline.bps.go.id/) pada 17 Februari 2016.
			</p>

		</div>
	</div>

	<div class="row">
				<div class="col-md-4">
				</div>
				<div class="col-md-4">
					<form role="form">
						<div class="form-group">
							 
							<label for="exampleInputEmail1">
								Provinsi
							</label>
							<select  name="provinsi" class="form-control provinsi" id="provinsi">
							<?php
							$prov = $db->query("SELECT * FROM tbl_provinsi");
							echo'<option>Pilih Provinsi</option>';
							while ($dataprov = $prov->fetch(PDO::FETCH_ASSOC)) {
							echo'<option value="'.$dataprov['id'].'">'.$dataprov['nama'].'</option>';
							}
							?>
							</select>
						</div>
						<div class="form-group">
							 
							<label for="exampleInputEmail1">
								Kota
							</label>
							<select  name="kota" class="form-control kota" id="kota">
							</select>
						</div>
						<div class="form-group">
							 
							<label for="exampleInputEmail1">
								Kecamatan
							</label>
							<select name="kecamatan" class="form-control kecamatan" id="kecamatan">
							</select>
						</div>
						<div class="form-group">
							 
							<label for="exampleInputEmail1">
								Kelurahan
							</label>
							<select name="kelurahan" class="form-control kelurahan" id="kelurahan">
							</select>
						</div>

						
						<button type="submit" class="btn btn-default">
							Submit
						</button>
					</form>
				</div>
				<div class="col-md-4">
				</div>
	</div>
			
</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
    <script src="js/custom.js"></script>
  </body>
</html>