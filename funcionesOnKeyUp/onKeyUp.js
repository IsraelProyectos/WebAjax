function comprobarNick(nick) {
     
     var url = 'ctbd.php';
     var pars ='nickname='+nick+'&campoComprobacion=nick';
     new Ajax.Updater('existeNombre', 'ctbd.php', {
      method: 'get',
      parameters: pars
      });
}

function comprobarPassword(password) {
     
     var url = 'ctbd.php';
     var pars ='pass='+password;    
     new Ajax.Updater('existePassword', 'ctbd.php', {
      method: 'get',
      parameters: pars
     });
}

function validarFormulario() {
	
var existeNombre = document.getElementById("existeNombre");
var existePassword = document.getElementById("existePassword");
var inputNickname = document.getElementById("nickname");
var inputPass = document.getElementById("pass");



if ((!inputNickname.value) && (!inputPass.value)) {
	inputNickname.style.borderColor="#FF0000";
    inputPass.style.borderColor="#FF0000";
    existePassword.innerHTML = "Campo obligatorio";
    existeNombre.innerHTML = "Campo obligatorio";
    existePassword.style.color = "red";
    existeNombre.style.color = "red";
    
	return false;
	
}else if (!inputNickname.value) {
	inputNickname.style.borderColor="#FF0000";
    existeNombre.innerHTML = "Campo obligatorio";
    existeNombre.style.color = "red";
    return false;
    
}else if (!inputPass.value) {
	inputPass.style.borderColor="#FF0000";
    existePassword.innerHTML = "Campo obligatorio";
    existePassword.style.color = "red";
    return false;
}else {
	
	inputNickname.style.removeProperty("border");
    inputPass.style.removeProperty("border");


	if ((existeNombre.innerText == "El nick ya esta en uso") && (existePassword.innerText == "El password ya esta en uso")) {
	  inputNickname.style.borderColor="#FF0000";
	  inputPass.style.borderColor="#FF0000";
	  return false;	
		
	}else if (existePassword.innerText == "El password ya esta en uso") {
	  inputPass.style.borderColor="#FF0000";
	  return false;	
	  
	}else if (existeNombre.innerText == "El nick ya esta en uso") {
	  inputNickname.style.borderColor="#FF0000";	
	  return false;	

	}else {
	  return true;	
	}
	
}	
	
}
