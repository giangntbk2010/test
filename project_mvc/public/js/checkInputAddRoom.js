function checkInput(){
    if  (document.addRoom.roomNameAdding.value == "" || document.addRoom.roomIdAdding.value == ""){
       		 alert("Chưa nhập đủ các thông tin yêu cầu");
        	 return false;
    }
return true;
}