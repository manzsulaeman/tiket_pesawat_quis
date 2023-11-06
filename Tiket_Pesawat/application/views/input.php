<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        table{
            background-color: #F2FFE9;
            border-collapse:separate;
            border-spacing:10px;
        }
        th,td{
            padding: 5px;
            
        }
        tr{
            
        }
    </style>
</head>
<body>
   <center>
    <h2>Tiket Online Jakarta - Malaysia</h2>
   </center> 
   <form action="<?php echo base_url('tiket_pesawat/proses'); ?>" method="post" enctype="multipart/form-data">

   <center> <table border='2'>
        <tr>
            <td>Nama  </td>
            <td> : </td>
            <td><input type="text" name="nama"></td>
            
        </tr>
        <tr>
            <td>Pilih Kode Pesawat</td>
            <td> : </td>
          <td>  <select class="form-select" aria-label="Default select example" name="kode">
                            <option selected></option>
                            <option value="Garuda">GRD</option>
                            <option value="Merpati">MPT</option>
                            <option value="Batavia">BTV</option>
                    </select></td>
        </tr>
        <tr>
            <td>Pilih Kelas</td>
            <td> : </td>
          <td> <input type="radio" name="kelas" value="Eksekutif">
            Eksekutif<br>
            <input type="radio" name="kelas" value="Bisnis">
            Bisnis<br>
            <input type="radio" name="kelas" value="Ekonomi">
            Ekonomi<br></td>
        </tr>
        <tr>
            <td>Jumlah Tiket</td>
            <td>:</td>
           <td> <input type="number" name="jumlah_tiket" min="1" max="10" ></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Simpan" class="btn btn-primary"><input type="reset" value="Batal" class="btn btn-warning"></td>
        </tr>
        </center>
    </table>
</form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
</body>
</html>