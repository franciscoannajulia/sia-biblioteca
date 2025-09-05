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
                <li>
                    <a href="cadastrolivro.php">
                        <i class="pe-7s-user"></i>
                        <p>Cadastrar Livro</p>
                    </a>
                </li>
                <li class="active">
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
                    <ul class="nav navbar-nav navbar-right">
                        <li>    
                            <a href="#">
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
                                <h4 class="title">Empréstimo de Livros</h4>
                            </div>
                            <div class="content">
                                <form>

                                    <div class="row">
                                        <div class="col-md-10">
                                            <div class="form-group">
                                                <label> Nome Completo do Aluno</label>
                                                <input type="text" class="form-control" placeholder="Nome" maxlength="8" minlength="3">
                                            </div>
                                        </div>          
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>VOLUME</label>
                                                    <select class="form-control">
                                                        <option> Volume 1 </option>
                                                        <option> Volume 2 </option>
                                                        <option> Volume 3 </option>
                                                    </select>
                                            </div>
                                        </div>
                                     <div class="col-md-8">
                                        <div class="col-md-5">
                                                <div class="form-group">
                           
                                                        <label class="container" >Matemática
                                                            <input type="checkbox">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                        <label class="container" >Português 
                                                            <input type="checkbox">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                        <label class="container" >Filosofia
                                                            <input type="checkbox">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                        <label class="container" >Sociologia
                                                            <input type="checkbox">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                        <label class="container" >Geografia
                                                            <input type="checkbox">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                        <label class="container" >História
                                                            <input type="checkbox">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                    
                                                </div>
                                            </div>

                                            <div class="col-lg-5">
                                                <div class="form-group">
                                                    
                                                    
                                                        <label class="container" >Física
                                                            <input type="checkbox">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                        <label class="container" >Biologia
                                                            <input type="checkbox">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                        <label class="container" >Quimica
                                                            <input type="checkbox">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                        <label class="container" >Ingles
                                                            <input type="checkbox">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                        <label class="container" >Espanhol
                                                            <input type="checkbox">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                        <label class="container" >Artes
                                                            <input type="checkbox">
                                                            <span class="checkmark"></span>
                                                        </label>
                                               
                                            </div>
                                        </div> 
                                    </div>
                                     </div> 
                            
                                    <button type="submit" class="btn btn-info btn-fill pull-right">Emprestar Livro</button>
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

<link href="css/checkbox.css" rel="stylesheet" />


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
                message: "Esta página será a mais usada! <br> Aqui, você efetuará o empréstimo do livro ao aluno. <br> Basta digitar a identificação do aluno e a identificação do livro."

            },{
                type: 'info',
                timer: 5000
            });

        });

        $(document).ready(function(){

            demo.initChartist();

            $.notify({
                icon: 'fas fa-robot',
                message: "Você tem a opção de emprestar 1 livro por vez ou todos os livros de uma vez só. <br> Mas tenha cuidado, se a opção 'Todos os livros' for selecionada, todos os livros da lista serão cadastrados no nome do aluno."

            },{
                type: 'info',
                timer: 12000
            });

        });

        
	</script>

</html>
