<style>
#bg-login {
  background-repeat:no-repeat;
  background-size:contain;
}

#form-login {
  box-shadow:10px 10px 10px 10px #eee;
}


.login-clean {
  background:#f1f7fc;
  padding:180px 0;
}

.login-clean form {
  max-width:320px;
  width:90%;
  margin:0 auto;
  background-color:#ffffff;
  padding:40px;
  border-radius:4px;
  color:#505e6c;
  box-shadow:1px 1px 5px rgba(0,0,0,0.1);
}

.login-clean .illustration {
  text-align:center;
  padding:0 0 20px;
  font-size:100px;
  color:rgb(244,71,107);
}

.login-clean form .form-control {
  background:#f7f9fc;
  border:none;
  border-bottom:1px solid #dfe7f1;
  border-radius:0;
  box-shadow:none;
  outline:none;
  color:inherit;
  text-indent:8px;
  height:42px;
}

.login-clean form .btn-primary {
  background:#f4476b;
  border:none;
  border-radius:4px;
  padding:11px;
  box-shadow:none;
  margin-top:26px;
  text-shadow:none;
  outline:none !important;
}

.login-clean form .btn-primary:hover, .login-clean form .btn-primary:active {
  background:#eb3b60;
}

.login-clean form .btn-primary:active {
  transform:translateY(1px);
}

.login-clean form .forgot {
  display:block;
  text-align:right;
  font-size:12px;
  color:#6f7a85;
  opacity:0.9;
  text-decoration:none;
}

.login-clean form .forgot:hover, .login-clean form .forgot:active {
  opacity:1;
  text-decoration:none;
}

</style>

<div id="bg-login" class="login-clean" style="background-color:rgb(255,255,255);background-image:url('<?php echo base_url("assets/upload/images/$bg"); ?>');">
        <div></div>
        <form method="post" action="<?php echo base_url('auth/login'); ?>" id="form-login">
            <a href="<?php echo base_url('beranda');?>" >
                <img src="<?php echo base_url("assets/upload/images/$icon"); ?>" alt="" class="img-fluid text-center">
            </a>
            <h3 id="masuk" style="padding-top:0px;padding-bottom:23px;color:rgb(159,35,35);"></h3>
            <div class="form-group"><input class="form-control" type="email" name="email" placeholder="Email" required ></div>
            <div class="form-group"><input class="form-control" type="password" name="paswd" placeholder="Password" required ></div>
            <div class="form-group"><button class="btn btn-block" type="submit"  name="submit" value="login" style="padding-left: 100px; padding-right: 100px; margin-top: 30px">Masuk</button></div>
            <div class="form-row">
				<div id="myalert">
					<?php echo $this->session->flashdata('alert', true)?>
				</div>
            </div>
        </form>
</div>

