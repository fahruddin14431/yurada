<!-- row -->
<div class="row"><br>
    <div class="col-lg-12">
        <div class="col-lg-12">
            <div class="panel panel-green">
                 <div class="sd-content sd-section" style="max-width:100%">
                   <img class="mySlides" src="img/bm.png" style="width:100%" >
                   <img class="mySlides" src="img/bm2.png" style="width:100% ">
                 </div>

                    <script>
                    var myIndex = 0;
                    carousel();

                    function carousel() {
                        var i;
                        var x = document.getElementsByClassName("mySlides");
                        for (i = 0; i < x.length; i++) {
                           x[i].style.display = "none";  
                        }
                        myIndex++;
                        if (myIndex > x.length) {myIndex = 1}    
                        x[myIndex-1].style.display = "block";  
                        setTimeout(carousel, 2000); // Change image every 2 seconds
                    }
                    </script>
            </div>
        </div>

        <div class="col-lg-3">
            <div class="panel panel-green" align="center">
                <div class="panel-footer">
                    <img  src="img/cl.png" width="100" height="200">
                </div>
                <div class="panel-footer">
                    <a href="" style="text-decoration:none"><i class="fa fa-tags fa-fw"></i> Detail Produk </a>
                    <a href="" style="text-decoration:none"><i class="fa fa-shopping-cart fa-fw"></i> Beli Sekarang </a>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="panel panel-green" align="center">
                <div class="panel-footer">
                    <img  src="img/cl.png" width="100" height="200">
                </div>
                <div class="panel-footer">
                    <a href="" style="text-decoration:none"><i class="fa fa-tags fa-fw"></i> Detail Produk </a>
                    <a href="" style="text-decoration:none"><i class="fa fa-shopping-cart fa-fw"></i> Beli Sekarang </a>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="panel panel-green" align="center">
                <div class="panel-footer">
                    <img  src="img/cl.png" width="100" height="200">
                </div>
                <div class="panel-footer">
                    <a href="" style="text-decoration:none"><i class="fa fa-tags fa-fw"></i> Detail Produk </a>
                    <a href="" style="text-decoration:none"><i class="fa fa-shopping-cart fa-fw"></i> Beli Sekarang </a>
                </div>
            </div>
        </div>
    
    </div>
</div>
<!-- end row -->