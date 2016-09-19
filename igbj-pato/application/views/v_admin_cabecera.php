<!DOCTYPE html>
<html lang="en">
<head>
   <meta http-equiv="Content-Type" content="text/html" charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta name="description" content="">
   <meta name="keywords" content="">
   <meta name="author" content="">

   <title>Administrador</title>

   <link href="<?php echo base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">
   <link href="<?php echo base_url('assets/css/font-awesome.css') ?>" rel="stylesheet">
   <link href="<?php echo base_url('assets/css/custom.css') ?>" rel="stylesheet">
   
</head>
<script language="javascript">

    function validarDec(e) //solo valida numeros decimales con punto y backspace
    {
        var key;
        if(window.event) // IE
        {
            key = e.keyCode;
        }
        else if(e.which) // Netscape/Firefox/Opera
        {
            key = e.which;
        }
        if (key < 48 || key > 57 || key == 11)
        {
            if(key == 46 || key == 8 ) // Detectar . (punto) y backspace (retroceso)
            { return true; } 
            else { return false; }
        }
        return true;
    }
    
    function validarInt(e) //valida solo numeros enteros y el backspace
    {
        var key;
        if(window.event) // IE
        {
            key = e.keyCode;
        }
        else if(e.which) // Netscape/Firefox/Opera
        {
            key = e.which;
        }
        if (key < 48 || key > 57 || key == 11 || key == 22)
        {
            if(key == 8 ) // Detectar backspace (retroceso)
            { return true; } 
            else { return false; }
        }
        return true;
    }
    
    function validarAlfanumerico(e) //valida alfanumerico sin espacios ni caracteres especiales
    {
        var key;
        
        if(window.event) // IE
        {
            key = e.keyCode;
        }
        else if(e.which) // Netscape/Firefox/Opera
        {
            key = e.which;
        }
        if ((key < 48 || key > 57) && (key < 65 || key > 90) && (key < 97 || key > 122))
        {
            if(key == 8  || key == 11) // Detectar backspace (retroceso)
            { return true; } 
            else { return false; }
        }
        return true;
    }

    function validarEmail(e) //valida alfanumerico sin espacios ni caracteres especiales
    {
        var key;
        
        if(window.event) // IE
        {
            key = e.keyCode;
        }
        else if(e.which) // Netscape/Firefox/Opera
        {
            key = e.which;
        }
        if ((key < 48 || key > 57) && (key < 65 || key > 90) && (key < 97 || key > 122)&&(key!=64)&&(key!=45)&&(key!=46)&&(key!=95))
        {
            if(key == 8  || key == 11) // Detectar backspace (retroceso)
            { return true; } 
            else { return false; }
        }
        return true;
    }

    
    function validarSoloLetras(e) //valida alfanumerico con espacios 
    {
        var key;
        
        if(window.event) // IE
        {
            key = e.keyCode;
        }
        else if(e.which) // Netscape/Firefox/Opera
        {
            key = e.which;
        }
        if ((key < 65 || key > 90) && (key < 97 || key > 122))
        {
            if(key == 8  || key == 11) // Detectar backspace (retroceso)
            { return true; } 
            else { return false; }
        }
        return true;
    }

    function validarLetras(e) //valida alfanumerico con espacios 
    {
        var key;
        
        if(window.event) // IE
        {
            key = e.keyCode;
        }
        else if(e.which) // Netscape/Firefox/Opera
        {
            key = e.which;
        }
        if ((key < 65 || key > 90) && (key < 97 || key > 122) && (key != 32))
        {
            if(key == 8  || key == 11) // Detectar backspace (retroceso)
            { return true; } 
            else { return false; }
        }
        return true;
    }
    
    function validarFecha(e) //solo valida fechas en el siguiente formato 12/12/2013
    {
        var key;
        if(window.event) // IE
        {
            key = e.keyCode;
        }
        else if(e.which) // Netscape/Firefox/Opera
        {
            key = e.which;
        }
        if (key < 48 || key > 57 || key == 11)
        {
            if(key == 47 || key == 8) // Detectar / 
            { return true; } 
            else { return false; }
        }
        return true;
    }

    function validarAlfanumericoGuion(e) //valida alfanumerico y el caracter guion, sin espacios 
    {
        var key;
        
        if(window.event) // IE
        {
            key = e.keyCode;
        }
        else if(e.which) // Netscape/Firefox/Opera
        {
            key = e.which;
        }
        if ((key < 48 || key > 57) && (key < 65 || key > 90) && (key < 97 || key > 122) && (key != 45))
        {
            if(key == 8  || key == 11) // Detectar backspace (retroceso)
            { return true; } 
            else { return false; }
        }
        return true;
    }

    validarAlfanumericoGuionEsp

    function validarAlfanumericoGuionEsp(e) //valida alfanumerico y el caracter guion, sin espacios 
    {
        var key;
        
        if(window.event) // IE
        {
            key = e.keyCode;
        }
        else if(e.which) // Netscape/Firefox/Opera
        {
            key = e.which;
        }
        if ((key < 48 || key > 57) && (key < 65 || key > 90) && (key < 97 || key > 122) && (key != 45) && (key != 32))
        {
            if(key == 8  || key == 11) // Detectar backspace (retroceso)
            { return true; } 
            else { return false; }
        }
        return true;
    }
    function conMayusculas(field) 
    {
            field.value = field.value.toUpperCase()
    }
</script>
<body class="" style="">
	<div class="navbar navbar-default navbar-fixed-top">
      <div class="container">
         <div class="navbar-header">
            <a href="../" class="navbar-brand">YO-PLANEO</a>

            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
            </button>
         </div>
        <div class="navbar-collapse collapse" id="navbar-main">
          <ul class="nav navbar-nav">
            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#" id="themes">Institución<span class="caret"></span></a>
              <ul class="dropdown-menu" aria-labelledby="themes">
                <li><a href="/plan-curricular/index.php/c_admin_institucion">Administrar institución</a></li>
                <li class="divider"></li>
                <li><a href="/plan-curricular/index.php/c_admin_carreras">Administrar carreras</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#" id="themes">Contenido<span class="caret"></span></a>
              <ul class="dropdown-menu" aria-labelledby="themes">
                <li><a href="../amelia/">Indice de contenido</a></li>
                <li class="divider"></li>
                <li><a href="../cosmo/">Formato de plan de estudios</a></li>
                <li class="divider"></li>
                <li><a href="../darkly/">Cronograma de actividades</a></li>
              </ul>
            </li>
            <li>
              <a href="../help/">Sistema de evaluación</a>
            </li>
            <li>
              <a href="/plan-curricular/index.php/c_admin_materias/">Asignaturas</a>
            </li>
            <li>
              <a href="/plan-curricular/index.php/c_admin_perfil/">Perfil del personal</a>
            </li>

            <li>              
              <a href="/plan-curricular/index.php/c_admin_cuentas/">Cuentas</a>                
            </li>
            <li>
              <a href="../help/">Asignación de docentes</a>
            </li>
          </ul>

          <ul class="nav navbar-nav navbar-right">
            <li><a href="/plan-curricular/index.php/c_sesion/logout">Cerrar Sesión</a></li>
          </ul>

        </div>
      </div>
    </div>


    
