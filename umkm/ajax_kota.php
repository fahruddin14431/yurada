<?php

include '../config/koneksi.php';

if(isset($_GET["propinsi_id"]) && !empty($_GET["propinsi_id"])){
    
    $query = $koneksi->query("SELECT * FROM tb_kota WHERE id_provinsi = ".$_GET["propinsi_id"]);
    
    //Count total number of rows
    $rowCount = $query->num_rows;
    
    //Display kotas list
    if($rowCount > 0){ 

    ?>
        <option value="">-- Pilih Kota --</option>';
        
        <?php while($row = $query->fetch_assoc()){ ?>
           <option value="<?php echo $row['id_kota'] ?>"><?php echo $row['nama_kota']; ?></option>';
        <?php } ?>
            
        <?php }else{       
            echo '<option value="">-- Kota Tidak Tersedia -- </option>';
    }
}

?>