<?php

include("config.php");
if( !isset($_GET['id'])){
    header('Location: list.php');
}

$id = $_GET['id'];
$sql = "SELECT * FROM mahasiswa WHERE id=$id";
$query = mysqli_query($db, $sql);
$siswa = mysqli_fetch_assoc($query);

if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Data Mahasiswa</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style type="text/css">
        fieldset {
            max-width: 400px;
            border-radius: 10px;
            border-color: #4fffa5;
            background: #007b65;
        }
        legend {
            color: white;
            padding: 5px;
            background: #006f6b;
            border-radius: 5px;
            text-align: center;
        }
        label {
            color: white;
            float: left;
        }
        input {
            border: none;
            border-radius: 3px;
            height: 30px;
        }
        input:hover {
            background: #7affce;
        }
        
        /*style form*/
        .name {
            margin-right: 26px;
        }
        .study {
            margin-right: 19px;
        }
        .submit {
            cursor: pointer;
            color: white;
            background: #ff5f5f;
            width: 100px;
            height: 25px;
            border-radius: 4px;
            border: none;
        }
        .submit:hover {
            background: #ff2e2e;
        }
    </style>
</head>
<body>
    <div align="center">
        <form action="edits.php" method="POST">
        <fieldset>
            <legend>Data Mahasiswa</legend>
            <input
                type="hidden"
                Name="id"
                value="<?php echo
                $siswa['id'] ?>"
            />
            <p>
                <label class="name" for="Nama">Nama </label>
                <input
                    type="text"
                    name="Nama"
                    placeholder="nama lengkap"
                    value="<?php echo $siswa['nama'] ?>"
                />    
            </p> 
            <p>
                <label class="study" for="Jurusan">Jurusan </label>
                <input
                    type="text"
                    name="Jurusan" 
                    placeholder="Jurusan"
                    value="<?php echo $siswa['jurusan'] ?>"
                />    
            </p>
            <p>
                <input
                    class="submit"
                    type="submit"
                    value="Simpan"
                    Nama="simpan"
                />
            </p>
        </fieldset>
    </form>
    </div>    
</body>
</html>