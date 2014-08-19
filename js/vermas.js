$(document).ready(function(){
		$('#abajo').click(function() {

	    	if($('#complemento').is(':hidden')){
	    		$('#complemento').show('slow');
	    	}

	    	
	    });

	    $('#arriba').click(function() {
	    	if($('#complemento').is(':visible')){
	    		$('#complemento').hide('slow');
	    	}
	    	
	    });

	    $('#mis').click(function(){
	    	$('#mis_descrip').toggle('slow');
	    });

	    $('#vis').click(function(){
	    	$('#vis_descrip').toggle('slow');
	    });

	    $('#loggin_nav').click(function(){
	    	$('#loggin').show('slow');
	    });   

	    $('.icon-close').click(function(){
	    	$('#loggin').hide('slow');
	    	$('#user').val("");
	    	$('#pass').val("");
	    });

	    $('.icon-list-ul').click(function(){
	    	$( '#nav_falso').slideToggle('slow');
	    	
	    });

	    $('#loggin_nav1').click(function(){
	    	$('#loggin').show('slow');
	    });

	    $('#objli1').click(function(){
	    	$('#lista1_obj').slideToggle('slow');
	    	
	    });

	    $('#objli2').click(function(){
	    	$('#lista2_obj').slideToggle('slow');
	    	
	    });

	    
	});	



