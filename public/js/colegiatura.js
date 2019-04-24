function init(){
	mostrarform(false);
}

//Función mostrar formulario
function mostrarform(flag){
	if (flag){
		$("#content-Requerimiento").hide();
		$("#content-Procedimiento").show();
	}else{
		$("#content-Requerimiento").show();
		$("#content-Procedimiento").hide();
	}
}

init()