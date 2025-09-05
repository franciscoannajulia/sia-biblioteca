<!doctype html>
<html lang="br">
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
    <!--BLOQUEAR TENTATIVA ACESSO PELO URL-->
        <?php
        session_start();
        if (isset($_SESSION["CodFuncionario"]))
        {
            
            $CodFuncionario = $_SESSION ["CodFuncionario"];//
            $Nome = $_SESSION["Nome"];
            $Login  = $_SESSION ["Login"];//
            $Senha  = $_SESSION ["Senha"];//
        }
        else
        {
            header("location:index.php");
        }

		
        ?>

<div class="wrapper">
    <div class="sidebar" data-color="green" data-image="img/floresta.jpg">

    <!--

        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag

    -->

    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="dashboard.html" class="simple-text">
                    <img src="img/books-stack-of-three.png" alt="Livros" height="70" width=70>
                    &nbsp;&nbsp;&nbsp;&nbsp; siaBiblioteca
                </a>
            </div>

            <ul class="nav">
                <li class="active">
                    <a href="consultalivros.php">
                        <i class="pe-7s-graph"></i>
                        <p> Consultar Livros </p>
                    </a>
                </li>
                <li>
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
                            <a href="login/logout.php">
                                <p>Sair</p>
                            </a>
                        </li>
						<li class="separator hidden-lg"></li>
                    </ul>
                </div>
            </div>
        </nav>

                    <div class="content">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-12">
                                        
                                            <div class="header">
                                                <h4 class="title">Consulta Livros</h4>
                                                
                                            </div>
                                            <div class="content table-responsive table-full-width">
                                                <table id="miTabla" class="table table-striped">
                                                    <thead class="thead-inverse">
                                                        <tr>
                                                            <th> CÓDIGO </th>
                                                            <th> CATEGORIA </th>
                                                            <th> VOLUME </th>
                                                            <th> ANO </th>
                                                            <th> EDITORA </th>
                                                            <th> ATIVO? </th>
                                                            <th></th>
                                                            <th></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>     
                                                    <?php
													include "conexao.php";

													$sql = "select * from livrodidatico";
													$result = $conexao->prepare($sql);			
													$result->execute();	 
													while ($linha = $result->fetch(PDO::FETCH_ASSOC))
													{
                                                        $codigo = $linha["CodLivroDidatico"];
													?>                                  
                                                        <tr>
                                                            <td> <?php echo $linha["CodigoBarra"]?> </td>        
                                                            <td> <?php echo $linha["CodCategoria"]?> </td>
                                                            <td> VOL <?php echo $linha["Volume"]?> </td>
                                                            <td> <?php echo $linha["Ano"]?> </td>
                                                            <td> <?php echo $linha["Editora"]?> </td>                                                             <td> <?php 
															$Status = $linha["Status"];
															if ($Status == 1){
																$msg = "Emprestado";
																}
																else {
																	$msg = "Não Emprestado";
																	}
															
															
															echo $msg?> </td> 
                                                            <td>
                                                                <button type="button" class="tabledit-edit-button btn btn-sm btn-warning btn-fill" style="float: none;">
                                                                    <i class="fas fa-pencil-alt"></i>  
                                                                    <a href="alterarlivro.php?codigo=<?php echo $codigo?>"> &nbsp; ALTERAR
                                                                </button>
                                                            </td>
                                                            <td>
                                                                <button type="button" class="tabledit-delete-button btn btn-sm btn-danger btn-fill" style="float: none;">
                                                                    <i class="fas fa-trash-alt"></i>
                                                                    <a href="deletarlivro.php?codigo=<?php echo $codigo?>"> &nbsp; EXCLUIR 
                                                                </button>
                                                            </td>
                                                        </tr>

                                                       <?php } ?>
                                                       
                                                    </tbody>
                                                </table>
                
                                            </div>
                                
                                    </div>
                
                
                
                            </div>
                    </div>
                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>



</body>

    <!-- Files for dataTable-->
    <script type="text/javascript" src="./datatable/js/jquery-3.3.1.js"></script>
    <script type="text/javascript" src="./datatable/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="./datatable/js/dataTables.responsive.min.js"></script>
    <script type="text/javascript" src="./datatable/datatable.js"></script>

    <link rel="stylesheet" href="./datatable/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="./datatable/css/responsive.dataTables.min.css">

    <!--   Core JS Files   -->
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
            	message: " BIBLIOTECÁRIO(A) IDENTIFICADO! "

            },{
                type: 'info',
                timer: 2000
            });

        });

        $(document).ready(function(){

            demo.initChartist();

            $.notify({
                icon: 'fas fa-robot',
                message: "Seja bem vindo(a) ao siaBiblioteca! <br> Nesta página você pode consultar os livros cadastrados. <br> Se desejar, também pode alterá-los ou excluí-los. <br> Boa Sorte!"

            },{
                type: 'info',
                timer: 7000
            });

        });
        
	</script>

</html>
