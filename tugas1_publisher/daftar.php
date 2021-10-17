<!DOCTYPE html>
<html lang="en">
<head>
    <title>Data Mahasiswa</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style type="text/css">
        legend {
            color: white;
            padding: 5px;
            background: #006f6b;
            border-radius: 5px;
        }
        label {
            color: white;
            float: left;
        }
        fieldset {
            max-width: 400px;
            border-radius: 10px;
            border-color: #4fffa5;
            background: #007b65;
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
        .address {
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
        <form action="pendaftaran.php" method="POST">
        <fieldset>
            <legend>Data Mahasiswa</legend>
            <p>
                <label class="name" for="nama"> Nama </label>
                <input
                    type="text"
                    name="nama"
                    placeholder="Isikan Nama Lengkap"
                />
            </p>
            <p>
                <label class="address" for="alamat"> Jurusan </label>
                <input
                    type="text"
                    name="jurusan"
                    placeholder="Isikan Jurusan"
                />
            </p>
            <p>
                <input class="submit" 
                type="submit"
                value="Daftar"
                name="daftar"
            />
            </p>
        </fieldset>
    </form>
    </div>
</body>
</html>