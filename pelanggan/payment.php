<!-- row -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header"><b>Peyment</b></h1>
        <div class="col-lg-6">
        	<p>Untuk memudahkan proses pembayaran YURADA.com menyediakan fitur sebagai berikut : </p>
        	<a href="">
        		<img src="" height="150" width="150">
        	</a>
            <br>
            <div class="form-group">
                <label>No Rekening Yurada.com</label>
                <input class="form-control" placeholder="rekening" name="rekening"   required>
            </div>
            <div class="form-group">
                <label>Total Biaya</label>
                <input class="form-control" placeholder="biaya" name="biaya" type="text" required>
            </div>
        </div>
        <div class="col-lg-6">
        	<h3 class="page-header"><b>Bukti Pembayaran</b></h3>
        	<p>Silahkan Upload Bukti Pembayaran Anda jika telah melakukan transfer. </p>
            <form method="post" action="pelanggan/upload.php">
                <input type="file" name="bukti_transfer" required/>
                <br>
                <button class="btn btn-info"> Upload </button><br><br>
            </form>
            
        	<div class="col-lg-6" align="center">
        		<img src="" height="350" width="250">
        	</div>
        </div>
    </div>
</div>
<!-- end row -->