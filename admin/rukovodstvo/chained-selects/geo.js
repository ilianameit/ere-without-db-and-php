$(document).ready(function () {

$('#sub_region').css('display', 'none');
$('#sub_city').css('display', 'none');

$("#get_country").change(function() {
		clearlist();
		$('#sub_city').css('display', 'none');		
		var countryvalue = $("#get_country option:selected").val();
		//if (countryvalue === '') {clearlist(); }
		if (countryvalue === '') {clearlist(); $('#sub_region').css('display', 'none');  }
		getarea();
	})
//getarea();
//getcity();

function getarea() {
	var country_value = $("#get_country option:selected").val();
	var p_id = $("#page_id").val();
	var area = $("#get_region");
	var getarea_value = area.val();
	if (country_value === "") {
		area.attr("disabled",true);
	} else {
		area.attr("disabled",false);
		area.load('get_region.php',{country : country_value, page_id : p_id});
		$('#sub_region').css('display', 'block');
	}
	
	$("#get_region").change(function() {
		getcity();	
	})
	
	
}

function getcity() {
	// var region_value = $("#region_id").val();

	var region_value = $("#get_region option:selected").val();
	if(region_value == undefined)
	{
		var region_value = $("#region_id").val();
	}
	var p_id = $("#page_id").val();
	var area = $("#get_city");
	if (region_value === "") {
		area.attr("disabled",true);
		$('#sub_city').css('display', 'none');
		$("#get_city").empty();
	} else {
		area.attr("disabled",false);
		area.load('get_city.php',{region : region_value, page_id : p_id});
		$('#sub_city').css('display', 'block');
	}
}

function clearlist() {
	$("#get_region").empty();
	$("#get_city").empty();

}	


});	
