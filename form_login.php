<!-- row -->
<div class="row">
    <div class="col-md-4 col-md-offset-4">
        <div class="login-panel panel panel-info">
            <div class="panel-heading">
                <h3 class="panel-title">Please Sign In</h3>
            </div>
            <div class="panel-body">
                <form role="form" method="POST" action="login.php">
                    <fieldset>
                        <div class="form-group">
                            <label class="radio-inline">
                                <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline1" value="option1" checked>Pelanggan
                            </label>
                            <label class="radio-inline">
                                 <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline2" value="option2">UMKM
                            </label>
                        </div>
                        <div class="form-group">
                            <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus required>
                        </div>
                        <div class="form-group">
                            <input class="form-control" placeholder="Password" name="password" type="password" required>
                        </div>
                        <!-- <div class="checkbox">
                            <label>
                                <input name="remember" type="checkbox" value="Remember Me">Remember Me
                            </label>
                        </div> -->
                        <!-- Change this to a button or input when using this as a form -->
                        <input type="submit" value="Login" class="btn btn-lg btn-success btn-block">
                        <p class="form-control-static">Belum memiliki akun? 
                            <a href="index.php?halaman=daftar_pelanggan" style="text-decoration:none">  Daftar </a></p> 
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- end row -->