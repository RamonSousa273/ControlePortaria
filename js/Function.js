function mostraSenha(campo, aberto, fechado) {
  var objCampo = document.getElementById(campo);
  var objAberto = document.getElementById(aberto);
  var objFechado = document.getElementById(fechado);

  if (objAberto.style.display == "none") {
    objFechado.style.display = "none";
    objAberto.style.display = "block";
    objCampo.type = "text";
  }else{
    objFechado.style.display = "block";
    objAberto.style.display = "none";
    objCampo.type = "password";
  }

}
