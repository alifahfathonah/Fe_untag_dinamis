
<h1 id="Tentang-kami" class="text-center section-heading team0" style="color:rgb(159,35,35);"><img src="<?php echo base_url("assets/upload/images/$favicon"); ?>"><?php echo $title ?></h1>
    <hr>
    <div class="container">
    <div id="bg-login" class="login-clean" style="background-color:rgb(255,255,255);background-image:url('<?php echo base_url("assets/upload/images/$bg"); ?>');">
        <p id="Tentang-kami-text" class="text-center"><br><center><?php echo $teks?></center></p> 
     </div>   
    </div>
    <section id="team" class="bg-light-gray">
        <div class="container">
            <div class="row ">
                <div class="col-sm-3 team1">
                    <div class="team-member">
                        <ul class="list-inline list-inline social-buttons">
                            <li class="list-inline-item"> <a style="background-color:rgb(159,35,35);"><i class="fa fa-phone"></i></a></li> <?php echo $no_telp?>
                        </ul>
                    </div>
                </div> 
                <div class="col-sm-3 team1">
                    <div class="team-member">
                        <ul class="list-inline list-inline social-buttons">
                            <li class="list-inline-item"> <a style="background-color:rgb(159,35,35);"><i class="fa fa-facebook"></i></a></li> <?php echo $facebook?>
                        </ul>
                    </div>
                </div> 
                <div class="col-sm-3 team1">
                    <div class="team-member">
                        <ul class="list-inline list-inline social-buttons">
                            <li class="list-inline-item"> <a style="background-color:rgb(159,35,35);"><i class="fa fa-instagram"></i></a></li> <?php echo $instagram?>
                        </ul>
                    </div>
                </div>  
                <div class="col-sm-3 team1">
                    <div class="team-member">
                        <ul class="list-inline list-inline social-buttons">
                            <li class="list-inline-item"> <a style="background-color:rgb(159,35,35);"><i class="fa fa-envelope"></i></a></li> <?php echo $email?>
                        </ul>
                    </div>
                </div>                     
            </div>
        </div>
    </section>
    <hr>
    <section id="team" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h3 class="section-heading team0" style="padding-bottom:11px;margin-bottom:52px;margin-top:43px;color:rgb(159,35,35);">Administrator website</h3>
                </div>
            </div>
            <div class="row ">
             <div class="col-md-1"></div>
            <?php
					$no = 0;
					foreach ($admin as $row):
						$no++ ?>
                    <div class="col-md-2 team1" style="">
                    <div class="team-member"><img class="rounded-circle img-fluid" src="<?php echo base_url('assets/upload/foto_profil/'.$row->photo); ?>">
                        <h5><?php echo $row->nama?></h5>
                        <p class="text-muted" style="font-size: 10pt;"><?php echo $row->email?></p>
                    </div>  
                    </div> 
                <?php endforeach; ?>
                <div class="col-md-1"></div>
            </div>
        </div>
    </section>

    <div id='Back-to-top'>
            <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
            </div>