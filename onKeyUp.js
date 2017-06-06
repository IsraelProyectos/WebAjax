window.onload = function() {

    document.getElementById('name').onkeyup = function() {

	var textBox = document.getElementById('name');
	var result = "<?php comprobar();?>";
	alert(result);
	return false;


    }



}
