$(document).ready(function(){
			$("#form_login").submit(function(){
					
					var userid      = $('#userid').attr('value');
					var userpwd     = $('#userpwd').attr('value');
					if(userid == "" || userpwd == "")
						alert("Chưa nhập ID hay mật khẩu");
					else{
					$.ajax({
						type: "POST", 
						url: "hiUser-page.php", 
						data: "userid="+ userid +"&userpwd="+ userpwd,
						success: function(answer){
							if( answer =='admin' || answer == 'user'){
								window.location = 'index.php';
							}else{
								$('div.message').html(answer);
							}
					 	}
				});
			}
			return false;  
	});
});