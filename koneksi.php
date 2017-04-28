<?php
//membuat class databse
class database {
    // properti
    private $dbHost = "localhost";
    private $dbUser = "root";
    private $dbPass = "";
    private $dbName = "crud_oop";
 
    // method koneksi MySQL
    function connectMySQL() {
        mysql_connect($this->dbHost, $this->dbUser, $this->dbPass);
        mysql_select_db($this->dbName) or die("Database tidak ada!");
    }
 
    // method tambah data (insert)	
    function tambahBiodata($nama,$tmpt_lahir,$tgl_lahir,$alamat,$telpon) {
 
        $query = "INSERT INTO biodata(nama,tmpt_lahir,tgl_lahir,alamat,telpon) VALUES ('$nama','$tmpt_lahir','$tgl_lahir','$alamat','$telpon')";
        $hasil = mysql_query($query);
 
        if ($hasil)
		  echo "<div class='alert alert-block alert-success'><strong><i></i> DATA BERHASIL DI SIMPAN</strong></div>";
 
        else
         echo "<div class='alert alert-block alert-danger'><strong><i></i> DATA GAGAL DI UPDATE</strong></div>";
		}
 
 
    // method tampil data 	
    function tampilBiodata() {
        $query = mysql_query("SELECT * FROM biodata ORDER BY id");
        while ($row = mysql_fetch_array($query))
            $data[] = $row;
        return $data;
    }
 
    // method hapus data
    function hapusBiodata($id_b) {
        $query = mysql_query("DELETE FROM biodata WHERE id='$id_b'");
		if ($query)
		    echo "<div class='alert alert-block alert-success'><strong><i></i> Data Biodata dengan ID " . $id_b . " sudah dihapus</strong></div>";
		else
			 echo "<div class='alert alert-block alert-danger'><strong><i></i>GAGAL DI HAPUS</strong></div>";
    }
 
    // method membaca data biodata
    function bacaDataBiodata($field, $id_b) {
        $query = "SELECT * FROM biodata WHERE id = '$id_b'";
        $hasil = mysql_query($query);
        $data = mysql_fetch_array($hasil);
        if ($field == 'nama')
            return $data['nama'];
		else if ($field == 'tmpt_lahir')
            return $data['tmpt_lahir'];
		else if ($field == 'tgl_lahir')
            return $data['tgl_lahir'];
        else if ($field == 'alamat')
            return $data['alamat'];
        else if ($field == 'telpon')
            return $data['telpon'];
    }
 
    // method untuk proses update data biodata
    function updateDataBiodata($id_b, $nama,$tmpt_lahir,$tgl_lahir,$alamat,$telpon) {
        $query = "UPDATE biodata SET nama='$nama',tmpt_lahir='$tmpt_lahir',tgl_lahir='$tgl_lahir', alamat ='$alamat', telpon='$telpon' WHERE id='$id_b'";
        $hasilupdate=mysql_query($query);
 
        if ($hasilupdate)
		    echo "<div class='alert alert-block alert-success'><strong><i></i> DATA BERHASIL DI UPDATE</strong></div>";
        else
            echo "<div class='alert alert-block alert-danger'><strong><i></i> DATA GAGAL DI UPDATE</strong></div>e";
    }
 
}
?>