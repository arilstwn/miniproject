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
  
   




   

<center><div class="row ">
            <div class="col-12 card p-6">
                <div class="card-body min-vh-200  align-items-center">
                    <div class="card w-40 m-auto p-2">
                        <table class="table  table-striped">
                            <center><thead>
                                <tr>
                                    <th scope="col">No </th>
                                    <th scope="col">Nama </th>
                                    <th scope="col">NIK </th>
                                    <th scope="col"> Gender </th>
                                    <th scope="col"> Nama_Mapel </th>
                                    <th scope="col"> Guru_Mapel </th>
                                    <th scope="col">Aksi</th>
                                    
                                </tr>
                            </thead></center>
                            <tbody>
                                <?php
                 $no= 0;foreach ($guru as $row  ) :$no++                          
                    ?>
                                <tr>
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700"><?php echo$no ?></td>
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700"><?php echo $row->nama_guru ?></td>
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700"><?php echo $row->nik ?></td>
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700"><?php echo $row->gender ?>
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700"><?php echo $row->nama_mapel ?>
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700"><?php echo $row->guru_mapel ?>
                                 </td>
                                 <td class="whitespace-nowrap px-4 py-2 text-gray-700">
                                 <a href="<?php echo base_url('admin/ubah_guru/').$row->nama_guru?>" class="btn btn-warning">Ubah</a>
                              <button onclick="hapus(<?php echo $row->id ?>)" class="btn btn-danger">Hapus</button>
         
                                  </td>
                              </tr><?php endforeach ?>
                           </table>
                         <a href="<?php echo base_url('admin/tambah_guru') ?>" class="btn btn-secondary">Tambah</a>
                                
                    </div>
                     <a href="<?php echo base_url('admin') ?>" class="btn btn-primary">Kembali</a>
                    </form>

                   

                </div>
            </div><
<script>
   function hapus(id) {
      var yes = Confirm('yakin di hapus');
      if (yes == true) {
         window.location.href = "<?php echo base_url('admin/hapus_guru/')?>" + id;
      }
   }
</script>
</body>
</html>
