function init(){
	mostrarform(false);
}

//Función mostrar formulario
function mostrarform(flag){
	if (flag){
		$("#content-ISS").hide();
		$("#content-Procedimiento").show();
	}else{
		$("#content-ISS").show();
		$("#content-Procedimiento").hide();
	}
}

init()

