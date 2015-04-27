<html>
      <head>
            <title>CRUD Dengan PHP </title>
            <style type="text/css">
            .labelfrm{
                  display:block;
                  font-size:small;
                  margin-top:5px;
            }
            .error{
                  font-size:small;
                  color:red;
            }
            </style>
      </head>
      <body>
      <table align="center">
            <h1>Data Mahasiswa</h1>
     
            <form action="input.php" method="post" id="frm">
                  <label for="nis" class="labelfrm">NIS : </label>
                  <input type="text" name="nis" id="nis" maxlength="10" class="required" size="15"/>
                  <label for="nama" class="labelfrm" >NAMA : </label>
                  <input type="text" name="nama" id="nama" size="30" class="required"/>
                  <label for="alamat" class="labelfrm">ALAMAT : </label>
                  <textarea name="alamat" id="alamat" cols="40" rows="4" class="required"></textarea>
                  <label for="submit" class="labelfrm">&nbsp;</label>
                  <input type="submit" name="input" value="Simpan" id="input"/>
                  <input type="reset" name="clear" value="clear" id="clear"/>
            </form>
      <br><br>
            <a href="data.php">Lihat Data</a>  
      </table>
</html>