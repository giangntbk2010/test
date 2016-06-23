function checkInputSearch() {
	if (document.searchPan.searchInfo.value == "") {
		alert("Chưa nhập thông tin tìm kiếm");
		return false;
	}
	return true;
}