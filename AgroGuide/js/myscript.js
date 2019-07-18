function reportHandler() {
	var produce =$('#produce').val();
	var state = $('#state').val();
	var lga = $('#lga').val();
	if(produce !="" && state !="" && lga != ""){
		$.post("inc/evaluate.php",
	    {
	        state:$state,
	        lga:$lga,
	        produce:$produce
	    },
	    function(data){
	    	var report=document.getElementById('report'); 
			report.setAttribute('class','container')
	        $("#produce").html("<option value=''>select Produce</option>"+data);
	    });

	}
	
}

function myAjax($stateId){
	$.post("inc/state.php",
    {
        state:$stateId
    },
    function(data){
        $("#lga").html("<option value=''>select Lga</option>"+data);
    });
}

	$("#state").click(function(){
		if($("#state").val()!=""){
			myAjax($("#state").val());
		}
	});

	function mypAjax($producttype){
	$.post("inc/produce.php",
    {
        product:$producttype
    },
    function(data){
        $("#produce").html("<option value=''>select Produce</option>"+data);
    });
}

	$("#producetype").click(function(){
		if($("#producetype").val()!=""){
			mypAjax($("#producetype").val());
		}
	});


