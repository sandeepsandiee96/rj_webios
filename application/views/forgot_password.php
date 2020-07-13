 <div class="container">

   
 
 
 



<div class="col-md-4">
</div>
<div class="col-md-4">
			  <div class="shadow-lg p-4 mb-4 bg-white" style="text-align:center;margin-top:50px;">

	<div class="login-panel panel panel-default">
		<div class="panel-body"> 

			<form method="post" class="form-signin" action="<?php echo site_url('login/forgot');?>">
					<h2 style="">Forgot Password</h2>
		<?php 
		if($this->session->flashdata('message')){
			?>
			<div class="alert alert-danger">
			<?php echo $this->session->flashdata('message');?>
			</div>
		<?php	
		}
		?>				  
			<div class="form-group">	 
					<label for="inputEmail"  ><?php echo $this->lang->line('email_linked_account');?></label> 
					<input type="email" id="inputEmail" name="email" class="form-control" placeholder="<?php echo $this->lang->line('email_address');?>" required autofocus>
			</div>
			 
			<div class="form-group">	  
					 
					<button class="btn btn-lg btn-primary btn-block" type="submit"><?php echo $this->lang->line('send_new_password');?></button>
			</div>
<?php 
if($this->config->item('user_registration')){
	?>
	<a href="<?php echo site_url('login/registration');?>"><?php echo $this->lang->line('register_new_account');?></a>
	&nbsp;&nbsp;&nbsp;&nbsp;
<?php
}
?>

			</form>
		</div>
	</div>
</div>
<div class="text-center">Don't have an account? <a href="<?php echo site_url('login/registration');?>">Sign up</a></div>
</div>

<div class="col-md-4">


</div>



</div>