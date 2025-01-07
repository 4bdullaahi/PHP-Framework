$("body").delegate(".get_form","click",function(e){
	e.preventDefault();
	var url = $(this).attr('href');
	var name = $(this).text();
	var data = "form_name= "+name;
	$.get(url,data,function(ress){
		$("#from_place").html(ress);
	})
});

$("body").delegate(".form_data","submit",function(e){
	e.preventDefault();
	var url = $(this).attr('action');
	var frm = $(this);
	$.ajax({
		url: url,
		data: new FormData(this),
		type:"POST",
		contentType: false,
		processData: false,
		success:function(ress){
			 if (frm.hasClass('report')) {
			 	frm.next().html(ress);
			 }
			 else{
			var msg = ress.split("|");
			frm.next().html(`<button class =" btn-block btn btn-${$.trim(msg[0])}">${$.trim(msg[1])}</button>`);
			}

			
			if($.trim(msg[0])== "success"){
				frm.trigger("reset");
			}
		}
	})
	
});


$("body").delegate(".form_data_update","submit",function(e){
	e.preventDefault();
	var url = $(this).attr('action');
	var frm = $(this);
	$.ajax({
		url: url,
		data: new FormData(this),
		type:"POST",
		contentType: false,
		processData: false,
		success:function(ress){ 
		$(".response").html("Updagted success") 
		}
	})
	
});

$("body").delegate(".delete","click",function(e){
	e.preventDefault();
	var url = $(this).attr('href');
	var row = $(this).closest('tr');
	$.get(url,function(ress){
		alert(ress);
		row.remove()
	})

})


$("body").delegate(".updatedata","click",function(e){
	e.preventDefault();
		var url = $(this).attr('href');
	 
	$.get(url,function(ress){

		 
	})

})