<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Laporan Dokter</title>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,600;1,400&display=swap" rel="stylesheet">

        <!-- ===== CSS ===== -->
        <link rel="stylesheet" href="<?php echo base_url()?>assets/css/bootstrap.min.css">

        <style >
        	/*==========LAPORAN==========*/

				.pala{
				  margin-top: 1pc;
				  font-family: poppins;
				  font-weight: 400;
				  letter-spacing: 5px; 
				}

				.tex{
				  font-family: poppins;
				}

				.Jdul{
				  font-family: poppins;
				  font-weight: 400;
				  text-align: center;
				}

				.tblr th,
				.tblr thead th,
				.tblr td{
				  border: 1px solid black;
				}

				.akhr{
					font-family: poppins;
					font-weight: 400;
					font-size: 15px;
					float: right;
				}

				.tbis{
					font-family: poppins;
					font-weight: 600;
				}
        </style>
</head>
<body>

	<div class="container">
		<h3 class="pala">KLINIK ALQIAY</h3>
		<small class="tex">jl.Padang Pariaman Desa Anduring Kec.Kayu Tanam</small>
		<hr>
		<h4 class="Jdul mt-4">LAPORAN DATA PASIEN</h4>

		<table class="table mt-5 table-bordered table-sm tblr">
			<tr class="tbis">
				<th>No</th>
				<th>Nama Pasien</th>
				<th>Jenis Kelamin</th>
				<th>Umur</th>
			</tr>
			<?php $no=1; foreach($pasien as $r){?>
				<tr>
					<td ><?= $no;?></td>
					<td><?= $r['nama_pasien']?></td>
					<td><?= $r['jenis_kelamin']?></td>
					<td><?= $r['umur']?></td>
				</tr>
			<?php $no++;}?>
		</table>

		<br>

		<table width="100%">
			<tr >
				<td></td>
				<td class="akhr">
					<p>Kayu Tanam, <?= date('d-m-Y');?></p>
					Administrator
					<br><br><br>
					<b>___________________</b>
				</td>
			</tr>
		</table>

	</div>

</body>
	<script src="<?php echo base_url()?>assets/js/slim.min.js"></script>
    <script src="<?php echo base_url()?>assets/js/popper.min.js"></script>
    <script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
</html>
