<?php
/**
 * Class FormValidacion
 * clase utilizada para validar el formulario de contacto agenda
 */
class FormValidacionHelper {

    public static function validarFormNuevoContacto($formulario){
        $validacion['success'] = true;
        $validacion['msg'] = array();
        if((isset($formulario['nombre']) && self::isCampoVacio($formulario['nombre']))
            || !self::isValidRegex($formulario['nombre'],'/^[a-zA-Zñ ]*$/')){
            $validacion['success'] = false;
            $validacion['msg'][] = 'El campo nombre es requerido (solo letras)';
        }if((isset($formulario['paterno']) && self::isCampoVacio($formulario['paterno']))
            || !self::isValidRegex($formulario['paterno'],'/^[a-zA-Zñ]*$/')){
            $validacion['success'] = false;
            $validacion['msg'][] = 'El campo apellido paterno es requerido (letras y sin espacios)';
        }if((isset($formulario['materno']) && self::isCampoVacio($formulario['materno']))
            || !self::isValidRegex($formulario['materno'],"/^[a-zA-ZñÑ]*$/")){
            $validacion['success'] = false;
            $validacion['msg'][] = 'El campo apellido materno es requerido (letras y sin espacios)';
        }if(isset($formulario['idGenero']) && self::isCampoVacio($formulario['idGenero'])){
            $validacion['success'] = false;
            $validacion['msg'][] = 'El campo género es requerido';
        }if(isset($formulario['nacimiento']) && self::isCampoVacio($formulario['nacimiento'])
            || date('Ymd') < date('Ymd',strtotime($formulario['nacimiento']))){
            $validacion['success'] = false;
            $validacion['msg'][] = 'El campo fecha de nacimiento es requerido y no ser mayor al dia de hoy';
        }if(isset($formulario['idTipoTelefono']) && self::isCampoVacio($formulario['idTipoTelefono'])){
            $validacion['success'] = false;
            $validacion['msg'][] = 'El campo tipo de teléfono es requerido';
        }if((isset($formulario['numeroTelefono']) && self::isCampoVacio($formulario['numeroTelefono']))
            || !self::isValidRegex($formulario['numeroTelefono'],'/^[(]{0,1}[0-9 -]{3,4}[)]{0,1}[0-9 -]{7,11}$/')){
            $validacion['success'] = false;
            $validacion['msg'][] = 'El campo teléfono es requerido o es un número inválido (puede tener parentesis/espacio/guiones medios o solo números)';
        }if((isset($formulario['correo']) && self::isCampoVacio($formulario['correo']))
            || !self::isValidRegex($formulario['correo'],'/^[a-zA-Zñ0-9_]*[@]{1}[a-zA-Z]*[.]{1}[a-zA-Z.]*$/')){
            $validacion['success'] = false;
            $validacion['msg'][] = 'El campo correo electrónico es requerido o es un correo inválido';
        }if((isset($formulario['facebook']) && self::isCampoVacio($formulario['facebook']))
            || !self::isValidRegex($formulario['facebook'],'/^https:\/\/www.facebook.com\/[a-zA-Z0-9_.&?=\/]*$/')){
            $validacion['success'] = false;
            $validacion['msg'][] = 'El link del facebook no es valido';
        }
        return $validacion;
    }

    public static function isCampoVacio($campo){
        $validacion = false;
        if(trim($campo) == '' && strlen($campo)){
            $validacion = true;
        }
        return $validacion;
    }

    public static function isValidRegex($campo,$regla){
        $validacion = true;
        if(!preg_match($regla,$campo)){
            $validacion = false;
        }
        return $validacion;
    }

}