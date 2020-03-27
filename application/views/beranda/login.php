
<div id="bg-login" class="login-clean" style="background-color:rgb(255,255,255);background-image:url(&quot;assets/vendor/front/img/gajah uling.png&quot;);">
        <div></div>
        <form method="post" action="<?php echo base_url('auth/login'); ?>" id="form-login">
            <h2 class="sr-only">Login Form</h2>
            <h3 id="masuk" style="padding-top:0px;padding-bottom:23px;color:rgb(159,35,35);">Log In</h3>
            <div class="form-group"><input class="form-control" type="email" name="email" placeholder="Email" required ></div>
            <div class="form-group"><input class="form-control" type="password" name="paswd" placeholder="Password" required ></div>
            <div class="form-group"><button class="btn btn-primary btn-block" type="submit"  name="submit" value="login" style="background-color:rgb(159,35,35);">Masuk</button></div>
            <div class="form-row">
			<div class="checkbox icheck col-xs-12 col-sm-6 col-md-6">
					<label>
						<?php echo form_checkbox('remember_code', '1', false, 'id="remember_code"');?>
						Ingat Saya
					</label>
				</div>
                <div class="col" style="margin-bottom:5px;">
                    <h6 class="text-center" style="color:rgb(159,35,35);font-size:12px;">Belum Punya Akun ?&nbsp;<a href="<?php echo base_url('auth/register');?>">Daftar</a></h6>
                </div>
				<div id="myalert">
					<?php echo $this->session->flashdata('alert', true)?>
				</div>
            </div>
        </form>
    </div>