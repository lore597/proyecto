<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <title>Auto Hotel Capri</title>
  <link rel="stylesheet" type="text/css" href="css/corregido.css">
</head>

<center>


  <body style="background-color: #655b59;" border: 10px;>

   <font color="White">
<header>
  


<h1 >Registro Cliente Pie</h1>
<br>
<form align="center-justify">
  
  <div class="form-group">
    <label>Fecha:</label>   
<font color="black">
  <b> <script size="100">
var f = new Date();
document.write(f.getDate() + "/" + (f.getMonth() +1) + "/" + f.getFullYear());
</script> </b>
</font>

  </div>
    <div class="form-group">
    <label>Hora de entrada</label>
    <font color="black">
    <input type="time" class="input-lg" id="fecha" name="fecha" align="right">
  </font>
  </div>
     <div class="form-group">
    <label>Habitación</label>
     <label style="background-color:#FBF9F9;width:94px", name="habitacion">xxx</label>

    
  </div>
  
  <div class="form-group">
    <label>Detalle daño/robo </label><br> 
    <font color="black">
    <textarea class="input-lg" rows="4" cols="30" name="detalle" id="detalle"></textarea>
         </font>
         </div>

  



  </form>
       <a href="menu.php"><button type="button" class="btn btn-primary glyphicon glyphicon-ok"> ACEPTAR</button>&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;</a>
       <a href="menu.php"><button type="button" class="btn btn-primary glyphicon glyphicon-remove">CANCELAR</button></a>
  

  <br>
  <br>
            
</header>
</font> 
</body>
</center>
</html>