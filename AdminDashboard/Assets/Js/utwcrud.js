
$(document).ready(function(){
	$("#addcat").click(function(){
		$("#addcat").attr("disabled","disabled");
		var catid=$("#catid").val();
		var catname =$("#catname").val();
		var catcode=$("#catcode").val();
		 if (catid!="" && catname!="" && catcode!="") {
			 $.ajax({
			 	url:"Category_CRUD.php",
			 	type:"POST",
			 	data:{
			 			catid:catid,
			 			catname:catname,
			 			catcode:catcode
			 			},
			 	cache:false,
			 	succcess:function(result){
			 		var result=JSON.parse((result));
					 if (result.statusCode==200) {
						 $("#addcat").removeAttr("disabled");
						 alert("Data Inserted Successfully");
			 		}
			 	}
			 });
		 }
		 else {
			 alert("Pls fill all data");
		 }
	});
	});