$(function(){

	$("#new_conn").click(function() {
		// Dialog
	    $('#connAdd').dialog({
	        title: "Create connection",
	        draggable: false,
	        modal: true,
	        resizable: false
	    });
	});

	$("#btnAddConn").click(function() {
		// Dialog
	    $('#connAdd').dialog({
	        title: "Create connection",
	        draggable: false,
	        modal: true,
	        resizable: false
	    });
	});

	$("#closeAdd").click(function() {
		$('#connAdd').dialog('close');
	});
});