<!DOCTYPE html>
<html>
<head>
	<title>Data Mahasiswa</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style type="text/css">
    * {
    	box-sizing: border-box;
    }

    a {
    	text-decoration: none;
    }
    .container {
		width: 100%;
		padding: 0 30px;
		margin: 0 auto;
	}

    body {
    	margin: 0;
    	font-family: "Helvetica";
    }

    /*header*/
    header {
      	height: 100px;
      	width: 100%;
      	background-color: #023e8a;
      	position :fixed;
      	top: 0;
      	z-index: 10;
    }
   	h1 {
	  	font-weight: bold;
	  	letter-spacing: 5px;
      	padding: 10px 10px;
      	color: #caf0f8;
      	display: block;
      	text-align: center;
      	transition: all 0.5s;
    }
	.logo {
		display: block;
		height: 60px;
		width: 60px;
		float: left;
	}

	/*Main*/
	.main {
	  height: 1000px;
	  padding-top: 10px;
	  text-align: center;
	}
	.main-head {
	  padding-top: 150px;
	  padding-bottom: 30px;
	  font-size: 30px;
	  font-weight: bold;
	  color: #495057;
	  letter-spacing: 5px;
	}
	.table1, td {
	  margin: auto;
	  border-spacing: 100px 50px;
	  border-radius: 50px;
	  background-color: #caf0f8;
	}
	.img1 {
	  background-image: url('images/img1.png');
	  background-size: cover;
	  width: 100px;
	  height: 100px;
	  margin: 20px 50px;
	}
	.img2 {
	  background-image: url('images/img2.png');
	  background-size: cover;
	  width: 100px;
	  height: 100px;
	  margin: 20px 50px;
	}
	.tombol {
	  background: #118ab2;
	  color:white;
	  padding:10px 30px;
	  text-decoration:none;
	  font-size:11pt;
	  border-radius: 10px;
	}
    </style>

</head>
<body>
	<header>
		<div class="container">
	        <img class="logo" src="images/logo.png">
	        <h1>DATA MAHASISWA</h1>
		</div>
	</header>

	<div class="main">
      <div class="main-head">Menu</div>
	<nav>
		<?php if (isset($_GET['status'])) : ?>
			<p>
				<?php
				if ($_GET['status'] == 'sukses') {
					echo "Pendaftaran berhasil";
				} else {
					echo "Pendaftaran gagal!";
				}
				?>
			</p>
		<?php endif; ?>
		<table class="table1">
			<tr>
				<td>
					<div class="img1"></div>
					<a class="tombol" href="list.php">List</a>
				</td>
				<td>
					<div class="img2"></div>
					<a class="tombol" href="daftar.php">Daftar Baru</a>
				</td>
			</tr>
		</table>
	</nav>
	</div>
</body>
</html>