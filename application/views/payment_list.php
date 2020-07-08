<div id="upgrade"><h3>Loading...</h3></div>
<script>
function upgradefxn(){
	
	var formData = {country:''};
	$.ajax({
		 type: "POST",
		 data : formData,
			url: "http://rojeworld.com/",
		success: function(data){
		$("#upgrade").html(data);
			
			},
		error: function(xhr,status,strErr){
			//alert(status);
			}	
		});
}
upgradefxn();	
</script>