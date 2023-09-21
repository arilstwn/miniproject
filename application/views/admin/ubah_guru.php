
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <style>
        body {
          background-image: url('https://arifkeisuke.com/wp-content/uploads/2017/12/anime-anime-art-Shigatsu-wa-Kimi-no-Uso-arima-kousei-1894839.jpg');
          background-repeat: no-repeat;
          background-attachment: fixed; 
          background-size: 100% 100%;
        }
       </style>
        <style>
        
        div {
          background-image: url('https://i.ytimg.com/vi/CmRyGcR8fc4/maxresdefault.jpg');
          background-repeat: no-repeat;
          background-attachment: fixed; 
          background-size: 100% 100%;
        }
       </style>
</head>

<body class="min-vh-100 d-flex align-items-center">
    <div class="card w-50 m-auto p-3">
        <h3 class="text-center">Ubah Guru</h3>
        <hr>
        <form action="<?php echo base_url('Admin/aksi_tambah_siswa') ?>" method="post" class="row">
            <div class="mb-3 col-6">
                <label for="nama" class="form-label"><b>Nama Siswa</b></label>
                
                <input type="text" class="form-control" id="nama" name="nama">
                <hr>
            </div>
            <div class="mb-3 col-6">
                <label for="nik" class="form-label"><b>NIK</b></label>
                
                <input type="text" class="form-control" id="nik" name="nik">
                <hr>
            </div>
            <div class="mb-3 col-6">
                <label for="gender" class="form-label"><b>Gender</b></label>
                
                <select name="gender" class="form-select">
                    <option selected>Pilih Gender</option>
            
            </option>
                    <option value="Laki-Laki">Laki-Laki</option>
                    <option value="Perempuan">Perempuan</option>
                    <option value="Perempuan">2D</option>
                </select>
                <hr>
            </div>
            <div class="mb-3 col-6">
            <label for="mapel" class="form-label"><b>Mapel</b></label>
           
            <select name="mapel" class="form-select">    
              <option>
              Pilih Mapel
              </option>     
                 <?php foreach($guru as $row):?>
              <option value="<?php echo $row->id ?>">
                <?php echo $row->nama_mapel.' '.$row->nama_mapel ?>
              </option>
                <?php endforeach ?>
            </select>
            <hr>
          </div>
        <a href="<?php echo base_url('admin/tambah_guru') ?>" class="btn btn-primary">Tambah</a>
             
        </form>
    </div>
</body>

</html>