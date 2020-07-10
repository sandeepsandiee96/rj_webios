
<html>
<head></html>
<body>


 <div class="container">   
  <div class="row">
	 <div class="col-md-4"></div>
     <div class="col-md-4">
	      <form method="post" action="<?php echo site_url('login/insert_user/');?>">
	   <div class="shadow-lg p-4 mb-4 bg-white" style="text-align:center;margin-top:50px;">
	        <div style="padding-bottom:10px;"><img src="http://rojeworld.com/wp-content/uploads/2019/12/Rojeworld-original.png" height="60" width="180"></div>
	        <h4 style="color:black;">Create Your Account</h4>

		       <div class="panel-body"> 
	
			   <?php 
		       if($this->session->flashdata('message')){
			   echo $this->session->flashdata('message');	
		       }
		       ?>	
				<div class="form-group">	 
					<label for="inputEmail" class="sr-only"><?php echo $this->lang->line('email_address');?></label> 
					<input type="email" id="inputEmail" name="email"  onChange="validate(this)"class="form-control" placeholder="<?php echo $this->lang->line('email_address');?>" required autofocus>
					<script>
					
					
	    	function validate(inputEmail) {
            var a=inputEmail.value;
            var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
    
            if (reg.test(a) == false) 
            {
                alert('Invalid Email Address');
                return (false);
            }
 }


	</script>
			    </div>
			    <div class="form-group">	  
					<label for="inputPassword" class="sr-only"><?php echo $this->lang->line('password');?></label>
					<input type="password" id="inputPassword" name="password" onChange="validatePassword(this)" class="form-control" placeholder="<?php echo $this->lang->line('password');?>" required >
					<script>
								
	    	function validatePassword() 
{
var p = document.getElementById('inputPassword').value,
        pwd = [];
    if (p.length < 8) 
	{
        pwd.push("Your password must be at least 8 characters"); 
    }
    if (p.search(/[a-z]/i) < 0) 
	{
        pwd.push("Your password must contain at least one letter");
    }
    if (p.search(/[0-9]/) < 0)
	{
        pwd.push("Your password must contain at least one digit"); 
    }
	if (p.search(/[!,@,#,$,%,^,&,*,(,)]/) < 0)
	{
        pwd.push("Your password must contain at least one special character"); 
    }
    if (pwd.length > 0) 
	{
        alert(pwd.join("\n"));
        return false;
    }
    return true;
}

	</script>
			    </div>
				<div class="form-group">	 
					<label for="inputEmail" class="sr-only"><?php echo $this->lang->line('first_name');?></label> 
					<input type="text"  name="first_name"  class="form-control" placeholder="<?php echo $this->lang->line('first_name');?>"  required  autofocus>
			    </div>
				<div class="form-group">	 
					<label for="inputEmail" class="sr-only"><?php echo $this->lang->line('last_name');?></label> 
					<input type="text"   name="last_name"  class="form-control" placeholder="<?php echo $this->lang->line('last_name');?>"  required  autofocus>
			    </div>
			    <div class="form-group">	 
					<label for="inputEmail" class="sr-only"><?php echo $this->lang->line('contact_no');?></label> 
					<input type="text" name="contact_no"  class="form-control" onChange="phonenumber(this)" placeholder="<?php echo $this->lang->line('contact_no');?>"  required  autofocus>
					
					<script>

function phonenumber(phone)
{
  var c=phone.value;
 var phoneno = /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/;
  if(c.match(phoneno))
     {
	   return true;
	 }
   else
     {
	   alert("Not a valid Phone Number");
	   return false;
     }
}
</script>
			    </div>
		        <?php 
			    if($this->session->userdata('cart')){
			    $d=$this->session->userdata('cart');
		        foreach($d as $k => $v){
		         ?>
		        <input type="hidden" name="gid[]" value="<?php echo $v[0];?>">
		        <?php
		         }
			     }else{
			     ?>
		        <input type="hidden" name="gid[]" value="<?php echo $this->config->item('default_group');?>">
		        <?php			
			     }
			     ?>
			    <!--
				<div class="form-group">	 
					<label   ><?php echo $this->lang->line('select_group');?></label> 
					<select class="form-control" name="gid" id="gid"  >
					<?php 
					foreach($group_list as $key => $val){
						?>
                         <option value="<?php echo $val['gid'];?>" <?php if($val['gid']==$gid){ echo 'selected'; } ?> ><?php echo $val['group_name'];?> (<?php echo $this->lang->line('price_');?>: <?php echo $val['price'];?>)</option>
						<?php 
				     	}
					   ?>
					</select>
			     </div>
                -->
 

	             <?php 
	               foreach($custom_form as $fk => $fval){
                 ?>
				<div class="form-group">	 
					<label for="inputEmail"  ><?php echo $fval['field_title']; ?></label> 
					<input type="<?php echo $fval['field_type']; ?>" name="custom[<?php echo $fval['field_id']; ?>]"  class="form-control" value="<?php echo $fval['field_value']; ?>"  <?php echo $fval['field_validate']; ?> >
			    </div>
	
	            <?php
	            }
	            ?>			 

 
	             <button class="btn btn-success" type="submit">Sign up</button>
		        </div>
        </div>
		 </form>
<div class="text-center"> Have an account? <a href="<?php echo site_url('login');?>">Login</a></div>
   </div>
   
</div>

</div>

<div class="col-md-4"></div>
 
 <div style="text-align:right;">
Powered by <a href="http://rojeworld.com/">Rojeworld It Services</a>
</div>
</body>
</html>