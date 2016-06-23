$(document).ready(function(){
			$("#timetable").submit(function(){
					
					var date      = $('#date').attr('value');
					if(date ==  "")
						alert("Chưa nhập ngày cần xem");
					else{
					$.ajax({
						type: "GET", 
						url: "scheduleProcess.php", 
						data: "date="+ date ,
						success: function(answer){
								$('div.message').html(answer);
							}
					 	});
				}
				return false;  
			});
});