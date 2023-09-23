
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
        <h3 class="text-center">Ubah Guru</h3>
        <hr>
        
       
        <?php   
        $no=0;
        foreach ($guru as $data_guru): $no++ ?>
        <form method="post" class="row">
        <input name="id_guru" type="hidden">
        
            <div class="mb-3 col-6">
                <label for="nama" class="form-label"><b>Nama Guru</b></label>
                <input type="text" class="form-control" id="nama_guru" name="nama_guru" value="<?php echo $data_guru->nama_guru ?>">
                <hr>
            </div>
            <div class="mb-3 col-6">
                <label for="nisn" class="form-label"><b>NIK</b></label>
                <input type="text" class="form-control" id="nik" name="nik" value="<?php echo $data_guru->nik ?>">
                <hr>
            </div>
            <div class="mb-3 col-6">
                <label for="gender" class="form-label"><b>Gender</b></label>
                <select name="gender" class="form-select" value="<?php echo $data_guru->gender ?>">
                    <option selected>Pilih Gender</option>
            
            </option>
                    <option value="Laki-Laki">Laki-Laki</option>
                    <option value="Perempuan">Perempuan</option>
                    <option value="Perempuan">2D</option>
                </select>
                <hr>
            </div>
            <div class="mb-3 col-6">
                <label for="nama_mapel" class="form-label"><b>Nama Mapel</b></label>
                <input type="text" class="form-control" id="nama_mapel" name="nama_mapel" value="<?php echo $data_guru->nama_mapel ?>">
                <hr>
            </div>
            <center>
            <div class="mb-3 col-6">
                <label for="guru_mapel" class="form-label"><b>Guru Mapel</b></label>
                <input type="text" class="form-control" id="nama_mapel" name="nama_mapel">
                <hr>
            </div>
    </center>
                      
                <button class="btn btn-lg btn-primary" type="submit">Ubah</button> 

        </div> 
        </form>
       <?php endforeach ?>
    </div>
</body>

</html>