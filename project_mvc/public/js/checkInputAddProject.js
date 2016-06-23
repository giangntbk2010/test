function checkInput(){
    if  (document.addProject.projectNameAdding.value == "" || document.addProject.projectIdAdding.value == "" || 
		document.addProject.startDayAdding.value == "" || document.addProject.endDayAdding.value == ""){
       		 alert("Chưa nhập đủ các thông tin yêu cầu");
        	 return false;
    }
return true;
}