<html>
	<head>
		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <meta name="description" content="">
	    <meta name="author" content="Cintia OLiveira">
	    <link rel="shortcut icon" href="assets/ico/favicon.png">

	    <title>Harmonia Festas</title>

	    <!-- Bootstrap core CSS -->
	    <link href="assets/css/bootstrap.css" rel="stylesheet">
	    <link href="assets/css/font-awesome.min.css" rel="stylesheet">

	    <!-- Custom styles for this template -->
	    <link href="assets/css/main.css" rel="stylesheet">

	</head>
	<body>
		<!-- Fixed navbar -->
	    <div class="navbar navbar-inverse navbar-fixed-top">
	    <div class="container">
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="navbar-brand" href="/inicial"><img src="assets/img/icon.png" width=40 height=40></a>
		    </div>
		     <div class="navbar-collapse collapse">
			  <ul class="nav navbar-nav navbar-right">
       
				 	@yield('menu') 	

				 	</div><!--/.nav-collapse -->
		  </div>
			  
		</div>

		<div id="headerwrap">
			<div class="container">
				<div class="row centered">
					@yield('conteudo')
				</div><!-- row -->
			</div><!-- container -->
		</div><!-- headerwrap -->

		 <!-- FOOTER -->
		<div id="f">
			<div class="container">
				<div class="row centered">
					<a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-facebook"></i></a>
			
				</div><!-- row -->
			</div><!-- container -->
		</div><!-- Footer -->

		<!-- MODAL FOR CONTACT -->
		<!-- Modal -->
		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		  <div class="modal-dialog">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		        <h4 class="modal-title" id="myModalLabel">Contato</h4>
		      </div>
		      <div class="modal-body">
			        <div class="row centered">
			        	<p>Nós estamos disponíveis 24 horas por dia.</p>
			        	<p>
			        		Rua Antonio Marinone, 366<br/>
							Votorantim, SP.<br/>
							+55 (15) 3243-5851<br/>
							harmonia.festas@gmail.com
			        	</p>
			        	<div id="mapwrap">
			<iframe height="300" width="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.es/maps?t=m&amp;ie=UTF8&amp;ll=52.752693,22.791016&amp;spn=67.34552,156.972656&amp;z=2&amp;output=embed"></iframe>
						</div>	
			        </div>
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
		      </div>
		    </div><!-- /.modal-content -->
		  </div><!-- /.modal-dialog -->
		</div><!-- /.modal -->


	    <!-- Bootstrap core JavaScript
	    ================================================== -->
	    <!-- Placed at the end of the document so the pages load faster -->
	    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
	    <script src="assets/js/bootstrap.min.js"></script>



	</body>
</html>