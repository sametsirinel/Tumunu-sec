$(function(){
	
	function durum(){
		
		if($(".tum").prop( "checked" )==true){
		
			$("input[type=checkbox]").prop({
				checked: true
			});
		
		}else{
		
			$("input[type=checkbox]").prop({
				checked: false
			});
		
		}
	
	}

	$(".tum").click(function(){
		
		durum();
	
	});

});