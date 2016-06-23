$(document).ready(function(){
			$("#form_login").submit(function(){
					
					var userid      = $('#userid').attr('value');
					var userpwd     = $('#userpwd').attr('value');
					if(userid == "" || userpwd == "")
						alert("Chưa nhập ID hay mật khẩu");
					else{
					$.ajax({
						type: "POST", 
						url: "hiUser.php", 
						data: "userid="+ userid +"&userpwd="+ userpwd,
						success: function(answer){
								$('form#form_login').hide();
								$('div.message').html(answer);
							}
					 	});
				}
				return false;  
			});
});