<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

   <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.css" rel="stylesheet" />
    <style>
body {
  background-image: url('https://gamefinity-assets.sgp1.digitaloceanspaces.com/wp-content/uploads/2023/05/07063713/Hololive-English-1st-Concert-Connect-the-World-joined-by-Hololive-Indonesia-VTubers-1024x576.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed; 
  background-size: 100% 100%;
}
</style>
   
</head>
<body>

<nav class="navbar navbar-dark bg-dark fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Informasi Pendaftran Class The Elite</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">案内板 An'nai-ban</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#" style="color:black">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" style="color:black">Link</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color:black">
              Dropdown
            </a>
            <ul class="dropdown-menu dropdown-menu-dark">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
        </ul>
        <form class="d-flex mt-3" role="search">
  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">  
          <button class="btn btn-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </div>
</nav>  


   

<div class="row ">
            <div class="col-12 card p-6">
                <div class="card-body min-vh-200  align-items-center">
                    <div class="card w-50 m-auto p-2">
                        <table class="table  table-striped">
                            <center><thead>
                                <tr>
                                    <th scope="col">No </th>
                                    <th scope="col">Nama Guru </th>
                                    <th scope="col">NIK </th>
                                    <th scope="col"> Gender </th>
                                    <th scope="col"> Nama Mapel </th>
                                    <th scope="col">Guru Mapel</th>
                                    <th scope="col">Aksi</th>
                                    
                                </tr>
                            </thead></center>
                            <tbody>
                                <?php
                 $no= 0; foreach ($guru as $row) :$no++;                          
                    ?>
                                <tr>
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700"><?php echo$no ?></td>
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700"><?php echo $row->nana_guru ?></td>
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700"><?php echo $row->nisn ?></td>
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700"><?php echo $row->gender ?>
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700"><?php echo $row->nama_mapel ?>
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700"><?php echo $row->guru_mapelm ?></td>
                                 </td>
                                 <td class="whitespace-nowrap px-4 py-2 text-gray-700">
                                    <?php echo tampil_full_guru_byid($row->guru); ?>
                                 </td>
                                 <td class="whitespace-nowrap px-4 py-2 text-gray-700">
                                    <a href="http://localhost/codeigniter-3/admin/ubah_siswa"<?php echo base_url('admin/ubah_guru/').$row->id_siswa ?>>Ubah</a>
                                    <a href="#" class="inline-block rounded bg-blue-600 px-4 py-2 text-xs font-medium text-white hover:bg-red-700">Hapus</a>                                         
                                          </td>
                                       </tr>
                                       <?php endforeach ?>
                                       
                                    </tbody>
                                 </table>
                                 
                                 <a href="<?php echo base_url('admin/tambah_siswa') ?>" class="btn btn-primary">Tambah</a>
                    </div>
                    </form>

                   

                </div>
            </div>
<script>
   function hapus(id) {
      var yes = confirm('yakin di hapus');
      if (yes == true) {
         window.location.href = "<?php echo base_url('admin/hapus_siswa/')?>" + id;
      }
   }
</script>
  

   

</body>
</html>