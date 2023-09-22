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
        
        <?php foreach ($siswa as $data_siswa) : ?>
        <form action="<?php echo base_url('admin/aksi_ubah_siswa') ?>"
        enctype="multipart/form-data"
        method="post" class="row">
        <input name="id_siswa" type="hidden" value="<?php echo $data_siswa->id_siswa?>">
            <div class="mb-3 col-6">
                <label for="nama" class="form-label"><b>Nama Siswa</b></label>
                <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $data_siswa->nama_siswa ?>">
                <hr>
            </div>
            <div class="mb-3 col-6">
                <label for="nisn" class="form-label"><b>NISN</b></label>
                <input type="text" class="form-control" id="nisn" name="nisn" value="<?php echo $data_siswa->nisn ?>">
                <hr>
            </div>
            <div class="mb-3 col-6">
                <label for="gender" class="form-label"><b>Gender</b></label>
                <select name="gender" class="form-select" value="<?php echo $data_siswa->gender ?>">
                    <option selected>Pilih Gender</option>
            
            </option>
                    <option value="Laki-Laki">Laki-Laki</option>
                    <option value="Perempuan">Perempuan</option>
                    <option value="Perempuan">2D</option>
                </select>
                <hr>
            </div>
            <div class="mb-3 col-6">
                <label for="kelas" class="form-label">Kelas</label>
                <select name="id_kelas" class="form-select">
                    <option selected value="<?php echo $data_siswa->id_kelas ?>">
                    <?php echo tampil_full_kelas_byid($data_siswa->id_kelas) ?>
                    </option>
                    <?php foreach($kelas as $row): ?>
                        <option value="<?php echo $row->id ?>">
                            <?php echo $row->tingkat_kelas.' '.$row->jurusan_kelas; ?>
                        </option>
                        <?php endforeach; ?>
                    </select>
                    <div class="d-grid gap-2 d-md-block">
                        <button class="btn btn-info" type="submit">Ubah</button>
                    </div>
                </div>
          
          
          
        <a href="<?php echo base_url('admin/siswa') ?>" class="btn btn-primary">Ubah</a>
           
        </form>
        <?php endforeach; ?>
    </div>
</body>

</html>