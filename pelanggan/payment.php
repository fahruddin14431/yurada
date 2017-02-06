<!-- row -->
<?php
    
    $id_pelanggan = $_SESSION['id_pelanggan'];
      //$id_pesan = $_SESSION['id_pesan'];
    //mengambil 3 digit ID terakhir UMKM
    $getpelanggan = substr($id_pelanggan, -4);  
    //$getpesan = substr(id_pesan,6)
    $total = mysqli_query($koneksi,"select id_pesan from tb_pesan where id_pesan = 'PSN001001'");
    $total_biaya = mysqli_fetch_array($total);

    $getpesan = substr($total_biaya['id_pesan'], -3);

    $sql = "SELECT total_biaya FROM tb_pesan where id_pesan='PSN001001'";
    $res = $koneksi->query($sql);
    $get_id = $res->fetch_array();        

    $sql2 = "SELECT MAX(id_pembayaran) FROM tb_pembayaran where id_pesan='PSN001001'";
    $res2 = $koneksi->query($sql2);
    $get_id2 = $res2->fetch_array();

// automatic id
    if (empty($get_id2)) {
        $get_max ="101";
    }else{
        $get_max = substr($get_id2[0],0);
        $get_max+=1;
    }

 ?> 
<div class="row">
    <div class="col-lg-7">
        <h1 class="page-header"><b>Payment</b></h1>
        <div class="col-lg-7">
        	<p>Untuk memudahkan proses pembayaran YURADA.com menyediakan fitur sebagai berikut : </p>
        	
        		<img src="img/yurada.jpg" height="150" width="150">
        	</a>
            <div class="form-group">
                <label>No Rekening Yurada.com</label>
                <input class="form-control" placeholder="rekening" name="rekening" value="9091092102910291091212" required>
            </div>
            <table >
            <td width="100px" height="200px"><div id="image-holder"></td>
            </table>
            </div>
        </div>
        <div class="col-lg-5">
        	<h3 class="page-header"><b>Bukti Pembayaran</b></h3>
        	<p>Silahkan Upload Bukti Pembayaran Anda jika telah melakukan transfer. </p>
            <form method="POST" action="pelanggan/upload_bukti_pembayaran.php" enctype="multipart/form-data">
                <div class="form-group">
                <label>Total Biaya</label>
                <input class="form-control" placeholder="biaya" name="biaya" value="<?php echo "Rp.".$get_id['total_biaya']  ?>" type="text" required>
                 <div class="form-group">
                <label>Id Pembayaran</label>
                <input class="form-control" placeholder="id_pembayaran" name="id_pembayaran" value="<?php echo "BYR".$getpelanggan.$getpesan.$get_max; ?>" type="text" required>
            </div>
            </div>
                <input type="file" name="bukti_pembayaran" id="fileUpload" required/>
                <br>
                <button type="submit" class="btn btn-info"> Upload </button><br><br>
            </form>
            
            </form> 
            </div>  
        </div>
    </div>
</div>

end  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script>
$(document).ready(function() {
        $("#fileUpload").on('change', function() {
          //Get count of selected files
          var countFiles = $(this)[0].files.length;
          var imgPath = $(this)[0].value;
          var extn = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();
          var image_holder = $("#image-holder");
          image_holder.empty();
          if (extn == "gif" || extn == "png" || extn == "jpg" || extn == "jpeg") {
            if (typeof(FileReader) != "undefined") {
              //loop for each file selected for uploaded.
              for (var i = 0; i < countFiles; i++) 
              {
                var reader = new FileReader();
                reader.onload = function(e) {
                  $("<img />", {
                    "src": e.target.result,
                    "class": "thumb-image",

                  }).appendTo(image_holder);
                }
                image_holder.show();
                reader.readAsDataURL($(this)[0].files[i]);
              }
            } else {
              alert("This browser does not support FileReader.");
            }
          } else {
            alert("Pls select only images");
          }
        });
      });
</script>
