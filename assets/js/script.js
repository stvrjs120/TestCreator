$(function(){

	$("#writeTest").click(function() {
		// Dialog
	    $('#creat-Test').dialog({
	        title: "Create Test",
	        draggable: false,
	        modal: true,
	        resizable: false
	    });
	});
	
	$("#writeQuest").click(function() {
		// Dialog
	    $('#quest-Form').dialog({
	        title: "Create Question",
	        draggable: false,
	        modal: true,
	        resizable: false,
	        width: 800
	    });
	});
});