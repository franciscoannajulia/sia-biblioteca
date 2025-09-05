<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="img/books-stack-of-three.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>siaBiblioteca</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="assets/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    
</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="green" data-image="img/floresta.jpg">

    <!--   you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple" -->


    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="dashboard.html" class="simple-text">
                    <img src="img/books-stack-of-three.png" alt="Livros" height="70" width=70>
                    &nbsp;&nbsp;&nbsp;&nbsp; siaBiblioteca
                </a>
            </div>

            <ul class="nav">
                <li>
                    <a href="consultalivros.php">
                        <i class="pe-7s-graph"></i>
                        <p> Consultar Livros </p>
                    </a>
                </li>
                <li  class="active">
                    <a href="cadastrolivro.php">
                        <i class="pe-7s-user"></i>
                        <p>Cadastrar Livro</p>
                    </a>
                </li>
                <li>
                    <a href="emprestimolivro.php">
                        <i class="pe-7s-user"></i>
                        <p>Emprestar Livro</p>
                    </a>
                </li>
                <li>
                    <a href="consultaemprestimo.php">
                        <i class="pe-7s-note2"></i>
                        <p>Consultar Empréstimo</p>
                    </a>
                </li>

                <li>
                    <a href="devolverlivro.php">
                        <i class="pe-7s-bookmarks"></i>
                        <p>Devolver Livros</p>
                    </a>
                </li>
            </ul>
    	</div>
    </div>

    <div class="main-panel">
		<nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Área da Biblioteca</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-left">
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="login/login.html">
                                <p>Sair</p>
                            </a>
                        </li>
						<li class="separator hidden-lg hidden-md"></li>
                    </ul>
                </div>
            </div>
        </nav>


        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Cadastro de Livros</h4>
                            </div>
                            <div class="content">
                                <form action="cadastrolivro2.php" method="POST">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label> CATEGORIA </label>
                                                <select id="categoria" name="categoria"  class="form-control">
                                                    <option id="categoria" name="categoria" value="0"> Categorias </option>
                                                    <?php
													include "conexao.php";

													$sql = "select * from categoria";
													$result = $conexao->prepare($sql);			
													$result->execute();	 
													while ($linha = $result->fetch(PDO::FETCH_ASSOC))
													{
													?>   
                                                    <option id="categoria" name="categoria" value="<?php $linha["CodCategoria"]?>"> <?php echo $linha["Descricao"]?> </option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>VOLUME</label>
                                                    <select id="volume" name="volume" class="form-control">
                                                        <option id="volume" name="volume"  value="1"> Volume 1 </option>
                                                        <option id="volume" name="volume"  value="2"> Volume 2 </option>
                                                        <option id="volume" name="volume"  value="3"> Volume 3 </option>
                                                    </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">ANO DE LANÇAMENTO</label>
                                                <input id="ano" name="ano"  type="text" class="form-control" placeholder="Ano">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>EDITORA</label>
                                                <input id="editora" name="editora" type="text" class="form-control" placeholder="Editora">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>QTDE DE LIVRO</label>
                                                <input id="qtde" name="qtde" type="text" class="form-control" placeholder="Quantidade">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>CÓDIGO</label>
                                                <input id="codbarra" name="codbarra" type="text" class="form-control" placeholder="Ex: HISVOLUM10000000" >
                                            </div>
                                        </div>
                                    </div>

                                    

                                    <button type="submit" class="btn btn-info btn-fill pull-right">Cadastrar Livro</button>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                   

                </div>
            </div>
        </div>


    </div>
</div>


</body>

    <!--   Core JS Files   -->
    <script src="assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Charts Plugin -->
	<script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
    <script src="assets/js/demo.js"></script>
    
    <script type="text/javascript">

        $(document).ready(function(){

            demo.initChartist();

            $.notify({
                icon: 'fas fa-robot',
                message: "Nesta página você pode cadastrar os livros que os alunos vão usar. Você só precisa inserir algumas informações antes. <br> "

            },{
                type: 'info',
                timer: 5000
            });

        });
        
	</script>

</html>
