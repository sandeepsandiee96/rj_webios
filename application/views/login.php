<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title><?php echo $this->lang->line('e_learn');?></title>

  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url();?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?php echo base_url();?>css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body>
 <div class="container" >
	    <div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4" >

			  <div class="shadow-lg p-4 mb-4 bg-white" style="text-align:center;margin-top:50px;">
				
				<div>
                  
				  <?php 
				 $hquery=$this->db->query(" select * from e_learn_setting where setting_name='App_Name' || setting_name='App_title' order by setting_id asc "); 
				$hres=$hquery->result_Array();
				?>
                    <div style="padding-bottom:10px;"><img src="http://rojeworld.com/wp-content/uploads/2019/12/Rojeworld-original.png" height="60" width="180"></div>
					<h1 class="h4 text-gray-900 mb-4">
					
	                 Login to Your Account
					
					</h1>
                  <form class="user"  method="post" action="<?php echo site_url('login/verifylogin');?>">
					 
					<?php 
					if($this->session->flashdata('message')){
					?>
					<div class="alert alert-danger">
					<?php echo str_replace('{resend_url}',site_url('login/resend'),$this->session->flashdata('message'));?>
					</div>
					<?php	
					}
					?>	
		
		
		
                    <div class="form-group">
                      <input type="email" name="email" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="<?php echo $this->lang->line('email_address');?>">
                    </div>
                    <div class="form-group">
                      <input type="password" name="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="<?php echo $this->lang->line('password');?>">
                    </div>
                   <div>
                   <label class="checkbox" style="color:black;"><input type="checkbox"> Remember me</label> &nbsp;&nbsp;&nbsp;&nbsp;
				  
                    <a class="small" href="<?php echo site_url('login/forgot');?>"><?php echo $this->lang->line('forgot_password');?> </a>
					<?php 
					if($this->config->item('open_quiz')){
					?>			 
					&nbsp;&nbsp;&nbsp;<a class="small" href="<?php echo site_url('quiz/open_quiz/0');?>"  ><?php echo $this->lang->line('open_quizzes');?></a>
			 
					<?php 
					}
					?>
				  </div>
                    <button type="submit" class="btn btn-success" style="font-size:15px">
                      Login
                    </button>
                  
                  </form>               
				 
                </div>
               
			</div>

			<div class="text-center">Don't have an account? <a href="<?php echo site_url('login/registration');?>">Sign up</a></div>
           </div>
		   
        </div>
		
 </div>
 
</body>
 
</html>










 