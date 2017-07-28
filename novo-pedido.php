<html>
<head>
	<meta charset="UTF-8" />
	<title>Mito Saladas</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/custom.css">
</head>
<body>

	
  <div class="jumbotron-logo">
  	<div class="container">
	    <h1><span class="orange">M</span>ito Saladas</h1> 
	</div>
  </div>

  <div class="container">
  	<div class="desc">
  		 <h3><span class="glyphicon glyphicon-shopping-cart"></span><span class="count">3 (R$ 15.00)</span> - Adicioe um novo pedido a lista ou finalize sua compra.</h3>
	   
	 
	</div>
  </div>

  <?php
  	include("copos.html");
  ?>
  <div class="container">
	  <div class="row">
	  	<div class="col-md-12">
		  <div class="proximo">
			 se não deseja iniciar um novo pedido clique no botao para finalizar seus pedidos <a href="localizacao.html"><button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-shopping-cart"></span> Finalizar</button></a>
		  </div>
		</div>
	  </div>
	  <?php
   	include("footer.html");
   ?>
   </div>

</body>	
</html>