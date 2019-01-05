<!DOCTYPE html>
<html>
<head>
	<title>Mi primera página</title>
	  
  	<meta name="description" content="Cursos de programacion y diseño en Ciudad del este- Paraguay">
    <meta name="keywords" content="programacion, Cursos, diseño, ciudad del este">
    <?php include 'includes/head.php'; ?>
    
    
</head>
<body>
	
  <!--INICIO DEL HEADER-->
  <?php include 'includes/header.php'; ?>
  <!--/.FIN DEL HEADER-->

  <!--INICIO DEL CONTENIDO-->
  <main>
    <section class="main-header">
      <div class="container">
        <h1>Titulo del Curso</h1> 
        <h2>Descripcion corta del Curso.</h2>     
      </div>      
   </section>

   <section class="contenido">
     <div class="container">
       <div class="col-md-3">
         <h3>Detalles</h3>
         
         <div class="media">
              <div class="media-left">                
              </div>
              <div class="media-body">
                <h4 class="media-heading">Direccion</h4>
                <span>Avda. San Blas. Km 3 1/2 Ciudad del Este</span>                
              </div>
          </div>

       <div class="media">
              <div class="media-left">                
              </div>
              <div class="media-body">
                <h4 class="media-heading">Precio</h4>
                <span>550.000GS</span>                
              </div>
          </div>

          <div class="media">
              <div class="media-left">                
              </div>
              <div class="media-body">
                <h4 class="media-heading">Duracion</h4>
                <span>5 Meses</span>                
              </div>
          </div>

          <div class="media">
              <div class="media-left">                
              </div>
              <div class="media-body">
                <h4 class="media-heading">Dias</h4>
                <span>Lunes y Viernes</span>                
              </div>
          </div>

        </div>


       <div class="col-md-9">
        <p>Description</p>

     </div
   </section>
    
  </main>
 
  <!--/.FIN DEL CONTENIDO-->

    <!--INICIO DEL FOOTER-->
  <?php include 'includes/footer.php'; ?>
  <!--/.FIN DEL FOOTER-->
  <?php include 'includes/script.php'; ?>

</body>
</html>