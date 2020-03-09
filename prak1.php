<html>

<head>
  <style>

  </style>
  <title>Entry Data Diri</title>
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
  <form action="simpan-data-mahasiswa.php" method="post" enctype="multipart/form-data" name="FMHS">
    <table width="452" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#666666">
      <tr>
        <td height="40" align="center" bgcolor="#009999"><strong>
            <font color="#FFFFFF">FORM INPUT DATA DIRI </font>
          </strong></td>
      </tr>
      <tr>
        <td bgcolor="#FFFFFF">
          <table width="452" border="0" align="center" cellpadding="5" cellspacing="0">
            <tr>
              <td width="113">NIS</td>
              <td width="11">:</td>
              <td width="237"><input name="nim" type="text" id="nim" size="12" maxlength="12"></td>
            </tr>
            <tr>
              <td>Nama Depan</td>
              <td>:</td>
              <td><input name="namadep" type="text" id="namadep" size="30" maxlength="30"></td>
            </tr>
            <tr>
              <td>Nama Belakang</td>
              <td>:</td>
              <td><input name="namabel" type="text" id="namabel" size="30" maxlength="30"></td>
            </tr>
            <tr>
              <td>Tempat Lahir</td>
              <td>:</td>
              <td><input name="tempat_lahir" type="text" id="tempat_lahir" size="30" maxlength="30"></td>
            </tr>
            <tr>
              <td>Tanggal Lahir</td>
              <td>:</td>
              <td><input name="tanggal_lahir" type="date" id="langgal_lahir" size="30" maxlength="30"></td>
            </tr>
            <tr>
              <td>Agama</td>
              <td>:</td>
              <td><input name="agama" type="text" id="agama" size="30" maxlength="30"></td>
            </tr>
            <tr>
              <td>Alamat</td>
              <td>:</td>
              <td><textarea name="alamat" cols="30" rows="5" id="alamat"></textarea></td>
            </tr>
            <tr>
              <td>Jenis Kelamin</td>
              <td>:</td>
              <td><input name="jenis_kelamin" type="radio" value="L" checked>
                Laki-laki
                <input name="jenis_kelamin" type="radio" value="P">
                Perempuan </td>
            </tr>
            <tr>
              <td>Email</td>
              <td>:</td>
              <td><input name="email" type="text" id="email" size="30" maxlength="30"></td>
            </tr>
            <tr>
              <td>No.Telp</td>
              <td>:</td>
              <td><input name="telp" type="int" id="telp" size="30" maxlength="30"></td>
            </tr>
            <tr>
              <td>Instagram</td>
              <td>:</td>
              <td><input name="ig" type="text" id="ig" size="30" maxlength="30"></td>
            </tr>
            <tr>
              <td>Facebook</td>
              <td>:</td>
              <td><input name="fb" type="text" id="fb" size="30" maxlength="30"></td>
            </tr>
            <tr>
              <td>Link Website</td>
              <td>:</td>
              <td><input name="link" type="text" id="link" size="30" maxlength="30"></td>
            </tr>
            <tr>
            <tr>
              <td>Jurusan</td>
              <td>:</td>
              <td>
                <select name="jurusan">
                  <option value="">--Pilih Jurusan--</option>
                  <option value="RPL">Rekayasa Perangkat
                    Lunak</option>
                  <option value="TKJ">Teknik Komputer dan
                    Jaringan</option>
                </select>
              </td>
            </tr>
            <tr>
              <td>Kelas</td>
              <td>:</td>
              <td>
                <select name="kelas">
                  <option value="">--Pilih Jurusan--</option>
                  <option value="X">X</option>
                  <option value="XI">XI</option>
                  <option value="XI">XII</option>
                </select>
              </td>
            </tr>
            <tr>
              <td>Photo</td>
              <td>:</td>
              <td><input type="file" name="photo" id="photo"></td>
            </tr>
            <tr>
              <td colspan="3" align="center"><input name="fok" type="submit" id="fok" value="OK">
                <input name="fulang" type="reset" id="fulang" value="Ulangi">
                <input name="fulang2" type="button" id="fulang2" value="Batal" onClick="javascript:history.back()"></td>
            </tr>
          </table>
        </td>
      </tr>
    </table>
  </form>
</body>

</html>