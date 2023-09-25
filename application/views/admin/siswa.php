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
  background-image: url('https://w.wallha.com/ws/13/dAimUlRq.png');
  background-repeat: no-repeat;
  background-attachment: fixed; 
  background-size: 100% 100%;
}
</style>
</head>
<body>


   

<div class="row ">
            <div class="col-12 card p-6">
                <div class="card-body min-vh-200  align-items-center">
                    <div class="card w-30 m-auto p-2">
                        <table class="table  table-striped"> 
                            <center><h1><b>Daftar Data Siswa</b></h1></center>
                        <img src="https://o.remove.bg/downloads/08abdb44-01af-4324-a097-a546a0d0bffa/png-transparent-computer-icons-three-people-black-%D0%BD%D0%BE%D0%B2%D1%8B%D0%B5-%D0%BF%D1%80%D0%B0%D0%B2%D0%B8%D0%BB%D0%B0-user-removebg-preview-removebg-preview.png" alt="" width="330" height="330">
                        
                        
                            <center><thead>
                                <tr>
                                    <th scope="col">No </th>
                                    <th scope="col">Nama </th>
                                    <th scope="col">NISN </th>
                                    <th scope="col"> Gender </th>
                                    <th scope="col"> Kelas </th>
                                    <th scope="col"> Sekolah </th>
                                    <th scope="col">Aksi</th>
                                    
                                </tr>
                            </thead></center>
                            <tbody>
                                <?php
                 $no= 0;foreach ($siswa as $row  ) :$no++                          
                    ?>
                                <tr>
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700"><?php echo$no ?></td>
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700"><?php echo $row->nama_siswa ?></td>
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700"><?php echo $row->nisn ?></td>
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700"><?php echo $row->gender ?>
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700"><?php echo $row->id_kelas ?>
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700"><?php echo $row->nama_sekolah ?>
                                 </td>
                                 <td class="whitespace-nowrap px-4 py-2 text-gray-700">
                                 <a href="<?php echo base_url('admin/ubah_siswa/').$row->id_siswa?>" class="btn btn-warning">Ubah</a>
                              <button onclick="hapus(<?php echo $row->id_siswa ?>)" class="btn btn-danger">Hapus</button>
         
                                  </td>
                              </tr><?php endforeach ?>
                           </table>
                         <a href="<?php echo base_url('admin/tambah_siswa') ?>" class="btn btn-secondary">Tambah</a>
                                
                    </div> <a href="<?php echo base_url('admin') ?>" class="btn btn-primary">Kembali</a>
                    
                    </form>

                   

                </div>
            </div><
<script>
   function hapus(id) {
      var yes = confirm ('yakin di hapus');
      if (yes == true) {
         window.location.href = "<?php echo base_url('admin/hapus_siswa/')?>" + id;
      }
   }
</script>
</body>
</html>
