
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <style>
        body{
          background-image: url('https://arifkeisuke.com/wp-content/uploads/2017/12/anime-anime-art-Shigatsu-wa-Kimi-no-Uso-arima-kousei-1894839.jpg');
          background-repeat: no-repeat;
          background-attachment: fixed; 
          background-size: 100% 100%;
        }
       </style>
        <style>
        div{
          background-image: url('https://i.ytimg.com/vi/CmRyGcR8fc4/maxresdefault.jpg');
          background-repeat: no-repeat;
          background-attachment: fixed; 
          background-size: 100% 100%;
        }
       </style>
</head>

<body class="min-vh-100 d-flex align-items-center">
    <div class="card w-50 m-auto p-3">
        <h3 class="text-center">Ubah Siswa</h3>
        <hr>
        <form method="post" class="row">
            <div class="mb-3 col-6">
                <label for="nama" class="form-label">Nama Siswa</label>
                <input type="text" class="form-control" id="nama" name="nama">
            </div>
            <div class="mb-3 col-6">
                <label for="nisn" class="form-label">NISN</label>
                <input type="text" class="form-control" id="nisn" name="nisn">
            </div>
            <div class="mb-3 col-6">
                <label for="gender" class="form-label">Gender</label>
                <select name="gender" class="form-select">
                    <option selected>Pilih Gender</option>
            
            </option>
                    <option value="Laki-Laki">Laki-Laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>
            <div class="mb-3 col-11">
            <label for="kelas" class="form-label">Kelas</label>
            <select name="kelas" class="form-select">    
              <option>
               Pilih Kelas
              </option>     
                 <?php foreach($kelas as $row):?>
              <option value="<?php echo $row->id ?>">
                <?php echo $row->tingkat_kelas.' '.$row->jurusan_kelas ?>
              </option>
                <?php endforeach ?>
            </select>
          </div>
          <center>
          <div class="mb-3 col-6">
                <label for="nama_sekolah" class="form-label">Sekolah</label>
                <input type="text" class="form-control" id="nama_sekolah" name="nama_sekolah">
            </div></center>
        <a href="<?php echo base_url('admin/tambah_siswa') ?>" class="btn btn-primary">Ubah</a>
             
        </form>
    </div>
</body>

</html>