<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Nilai GET</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12 bg-light"></div>
            <P>Sistem Penilaian</P>
        </div>
        <div class="row">
            <div class="col-12"></div>
        </div>
        <div class="row">
            <div class="col-12">
                <form method="GET">
                    <div class="form-group row">
                        <label for="nama lengkap" class="col-4 col-form-label">Nama lengkap</label>
                        <div class="col-8">
                            <input id="nama lengkap" name="nama lengkap" placeholder="masukan nama lengkap" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="Matkul" class="col-4 col-form-label">Mata kuliah</label>
                        <div class="col-8">
                            <input id="Matkul" name="Matkul" placeholder="masukan mata kuliah" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nilai_uts" class="col-4 col-form-label">Nilai UTS</label>
                        <div class="col-8">
                            <input id="nilai_uts" name="nilai_uts" placeholder="masukan nilai uts" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nilai_uas" class="col-4 col-form-label">Masukan Nilai UAS</label>
                        <div class="col-8">
                            <input id="nilai_uas" name="nilai_uas" placeholder="masukan nilai uas" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nilai_tugas" class="col-4 col-form-label">Nilai Tugas</label>
                        <div class="col-8">
                            <input id="nilai_tugas" name="nilai_tugas" placeholder="masukan nilai tugas" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="offset-4 col-8">
                            <button name="kirim" type="kirim" class="btn btn-primary">Kirim</button>
                        </div>
                    </div>
                </form>
                <?php
                $proses =isset($_GET['proses']) ? $_GET['proses'] : '';
                $nama_siswa =isset($_GET['nama']) ? $_GET['nama'] : '';
                $mata_kuliah = isset($_GET['matkul']) ? $_GET['Matkul'] : '';
                $nilai_uts = isset($_GET['nilai_uts']) ? $_GET['nilai_uts'] : '';
                $nilai_uas = isset($_GET['nilai_uas']) ? $_GET['nilai_uas'] : '';
                $nilai_tugas = isset($_GET['nilai_tugas']) ? $_GET['nilai_tugas'] : '';

                echo 'Proses : '.$proses;
                echo '</br>Nama : '.$nama_siswa;
                echo '</br>Mata Kuliah : '.$mata_kuliah;
                echo '</br>Nilai UTS : '.$nilai_uts;
                echo '</br>Mata UAS : '.$nilai_uas;
                echo '</br>Mata Tugas Praktikum : '.$nilai_tugas;
                ?>
            </div>
        </div>
        <div class="row">
            <div class="col-12 bg-light pt-3"></div>
            <p>Develop by Mahasiswa</p>
        </div>
    </div>
</body>

</html>