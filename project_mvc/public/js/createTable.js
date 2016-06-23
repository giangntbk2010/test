$(document).ready(function(){
                $('#datatables').dataTable({
                    "sPaginationType":"full_numbers",
                    "aaSorting":[[2, "asc"]],
                    "bJQueryUI":true
                }
				);
});