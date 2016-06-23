$(document).ready(function() {

	function myTask() {
		var username = $("#username").text();
		var timemin = $(".timesend:last").text();
//        alert(timemin);
		$.post("public/ajax/autoupdate.php", {
			timemin : Math.round(timemin),
			sender : username

		}, function(data, status) {
			$(".listmessage").append(data);
            task = setTimeout(function() {
                myTask();
            }, 500);
		});
	}

	var task = setTimeout(function() {
		myTask();
	}, 500);

	var task = setTimeout(function() {
		$.post("public/ajax/GetFirst.php", {}, function(data, status) {
			$(".listmessage").append(data);
		});
	}, 0);

	$("#getmore").click(function() {
		getmoreMessage();

	});

	function getmoreMessage() {
		var timelimit = $(".timesend:first").text();
		$.post("public/ajax/getMore.php", {
			timelimit : Math.round(timelimit)
		}, function(data, status) {

			$(".messageelement:first").before(data);

		});

	}


	$("#sendMsg").click(function() {
		appendText();

	});

	function appendText() {
		var username = $("#username").text();
		 var name = "<b style='margin-right: 5px; padding-left: 10px'> "+username+"</b>";
		 // var name = "ABC";
		var message = $("#messageEdit").val();
		timesend = Math.round(new Date().getTime());
	
		var date = new Date();

		var hiddenTimeDiv = "<div class='timesend' style='height: 0px'>" + Math.round(timesend / 1000.0) + "</div>";
		var timeDiv = "<div class = 'divTime'>" + date.getUTCFullYear() + "-" + (date.getMonth() + 1) + "-" + (date.getUTCDate()+1) + " " + date.getHours() + ":" + date.getMinutes() + ":" + date.getSeconds() + "</div>";
		var messageDiv = "<div class='messageelement'> " + name + "<pre>" + message + "</pre>" +hiddenTimeDiv + timeDiv + "</div></div>";
		$(".listmessage").append(messageDiv);

		sendToServer();

	}


	$("#messageEdit").keyup(function(event) {

		if (event.shiftKey == true)
			return;
		if (event.which == 13) {
			appendText();
		}

	});

	function sendToServer() {
		if ($('#messageEdit').val().length <= 1) {
			$("#messageEdit").val("");
			return;
		}

		$.post("public/ajax/sendMsg.php", {

			sender : $('#username').text(),
			message : $('#messageEdit').val(),
			time : Math.round(timesend / 1000.0)

		}, function(data, status) {

			$("#errordisplay").text(data);

		});

		$("#messageEdit").val("");

	}

});
