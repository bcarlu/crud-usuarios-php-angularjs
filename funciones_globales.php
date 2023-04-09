<?php

function validarUsuario($nombre, $correo, $celular) {

  $patronNombre = "/^[a-zA-Z\s]+/";
  // $patronCorreo = "/^[A-z0-9\\._-]+@[A-z0-9][A-z0-9-]*(\\.[A-z0-9_-]+)*\\.([A-z]{2,6})$/";
  $patronCelular = "/^3[0-9]{9}/";

  if(preg_match($patronNombre, $nombre) == 0){
    echo "El nombre es requerido y solo debe contener letras";
    return;
  }

  if(filter_var($correo, FILTER_VALIDATE_EMAIL) == false) {
    echo "El correo es requerido, ej: correo@midominio.com";
    return;
  }

  if(preg_match($patronCelular, $celular) == 0){
    echo "El celular es requerido y solo debe contener numeros";
    return;
  }

  return 1;

} 