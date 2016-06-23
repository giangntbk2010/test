$(document).ready(function() {
	$("#searchInfo").watermark("Nhập Thông tin");
	// Watermart cho khung nhập
	$("#searchInfo").keyup(function() {
		var searchInfo = $(this).val();
		// Lấy giá trị search của người dùng
		var dataString = 'name=' + searchInfo;
		// Lấy giá trị làm tham số đầu vào cho file ajaxSearchStaff.php
		if (searchInfo.length > 3)// Kiểm tra giá trị người nhập có > 4 ký tự hay ko
		{
			$.ajax({
				type : "GET", // Phương thức gọi là GET
				url : "views/ajaxSearchInfo.php", // File xử lý
				data : dataString, // Dữ liệu truyền vào
				beforeSend : function() {// add class "loading" cho khung nhập
					$('input#searchInfo').addClass('loading');
				},
				success : function(server_response)// Khi xử lý thành công sẽ chạy hàm này
				{
					$('span#searchName').html(searchInfo);
					// Hiển thị giá trị search của người dùng
					$('#searchResultHints').html(server_response).show();
					// Hiển thị dữ liệu vào thẻ div #resultHints
					if ($('input#searchInfo').hasClass("loading")) {// Kiểm tra class "loading"
						$("input#searchInfo").removeClass("loading");
						// Remove class "loading"
					}
				}
			});
		} else if (searchInfo.length == 0) {
			$('#searchResultHints').hide();
			$('span#searchName').html('');
		} else {
			$('span#searchName').html(searchInfo);
			$('#searchResultHints').hide();
		}
		return false;
	});
});
