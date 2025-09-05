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
                <a href="http://www.creative-tim.com" class="simple-text">
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
                <li>
                    <a href="emprestimolivro.php">
                        <i class="pe-7s-user"></i>
                        <p>Emprestar Livro</p>
                    </a>
                </li>
                <li  class="active">
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
                    <div class="col-md-12">
                            <div class="header">
                                <h3 class="title">Consulta Empréstimos</h3>                   
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table id="miTabla" class="table table-hover table-striped">
                                    <thead>
                                        <tr>
                                            <th > RM </th>
                                            <th> NOME </th>
                                            <th> CURSO </th>
                                            <th> ANO </th>
                                            <th> PORT. </th>
                                            <th> MAT. </th>
                                            <th> HIS. </th>
                                            <th> FIS. </th>
                                            <th> FIL. </th>
                                            <th> SOC. </th>
                                            <th> ING. </th>
                                            <th> QUI. </th>
                                            <th> GEO. </th>
                                            <th> BIO. </th>
                                            <th> ESP. </th>
                                            <th> ART. </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
													include "conexao.php";
                                                     
                                                
                                                    $sql1 = "select * from aluno";
													$result1 = $conexao->prepare($sql1);			
                                                    $result1->execute();	
                                                    
													while ($linha1 = $result1->fetch(PDO::FETCH_ASSOC))
													{
                                                        
                                                    $RM = $linha1["RM"];
                                                    
													$sql = "select * from emprestimo WHERE RM = :RM";
                                                    $result = $conexao->prepare($sql);			
                                                    $result->bindValue(":RM", $RM);		
                                                    $result->execute();
                                                    $linha = $result->fetch(PDO::FETCH_ASSOC);

                                                    $CodLivroDidatico = $linha["CodLivroDidatico"];

                                                    $sql2 = "select * from livrodidatico  where CodLivroDidatico= :CodLivroDidatico";
                                                    $result2 = $conexao->prepare($sql2);	
                                                    $result2->bindValue(":CodLivroDidatico", $CodLivroDidatico);		
                                                    $result2->execute();	 
                                                    $linha2 = $result2->fetch(PDO::FETCH_ASSOC);

                                                    $CodCategoria = $linha2["CodCategoria"];

                                                    $sql3 = "select * from categoria where CodCategoria= :CodCategoria";
													$result3 = $conexao->prepare($sql3);			
                                                    $result3->bindValue(":CodCategoria", $CodCategoria);
                                                    $result3->execute();	 
                                                    $linha3 = $result3->fetch(PDO::FETCH_ASSOC);

                                                    if ($CodCategoria ==1){
                                                        $POR = "Sim";
                                                    }
                                                    else{
                                                        $POR = "Não";
                                                    }
                                                    if ($CodCategoria ==2){
                                                        $MAT = "Sim";
                                                    }
                                                    else{
                                                        $MAT = "Não";
                                                    }
                                                    if ($CodCategoria ==3){
                                                        $BIO = "Sim";
                                                    }
                                                    else{
                                                        $BIO = "Não";
                                                    }
                                                    if ($CodCategoria ==4){
                                                        $FIS = "Sim";
                                                    }
                                                    else{
                                                        $FIS = "Não";
                                                    }
                                                    if ($CodCategoria ==5){
                                                        $QUI = "Sim";
                                                    }
                                                    else{
                                                        $QUI = "Não";
                                                    }
                                                    if ($CodCategoria ==6){
                                                        $FIL = "Sim";
                                                    }
                                                    else{
                                                        $FIL = "Não";
                                                    }
                                                    if ($CodCategoria ==7){
                                                        $ING = "Sim";
                                                    }
                                                    else{
                                                        $ING = "Não";
                                                    }
                                                    if ($CodCategoria ==8){
                                                        $GEO = "Sim";
                                                    }
                                                    else{
                                                        $GEO = "Não";
                                                    }
                                                    if ($CodCategoria ==9){
                                                        $HIS = "Sim";
                                                    }
                                                    else{
                                                        $HIS = "Não";
                                                    }
                                                    if ($CodCategoria ==10){
                                                        $SOC = "Sim";
                                                    }
                                                    else{
                                                        $SOC = "Não";
                                                    }
                                                    if ($CodCategoria ==11){
                                                        $ESP = "Sim";
                                                    }
                                                    else{
                                                        $ESP = "Não";
                                                    }
                                                    if ($CodCategoria ==12){
                                                        $ART = "Sim";
                                                    }
                                                    else{
                                                        $ART = "Não";
                                                    }


													?>   
                                        <tr>
                                            <td><?php echo $linha1["RM"]?></td> <td><?php echo $linha1["Nome"]?></td> <td><?php echo $linha1["Curso"]?></td> <td><?php echo $linha1["Ano"]?>º</td> <td><?php echo $POR?></td> <td><?php echo $MAT?></td> <td><?php echo $HIS?></td> <td><?php echo $FIS?></td><td><?php echo $FIL?></td> <td><?php echo $SOC?></td> <td><?php echo $ING?></td> <td><?php echo $QUI?></td>  <td><?php echo $GEO?></td> <td><?php echo $BIO?></td> <td><?php echo $ESP?></td> <td><?php echo $ART?></td>   
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>

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
                message: "Esta guia é reservada para a consulta dos empréstimos aos alunos."

            },{
                type: 'info',
                timer: 2000
            });

        });

        $(document).ready(function(){

            demo.initChartist();

            $.notify({
                icon: 'fas fa-robot',
                message: "Observe que você pode ver o curso e o ano do aluno. Nas colunas das máterias escolares, se a palvavra for 'sim', o aluno está em posse do livro, e 'não' significa que o aluno não está com o livro."

            },{
                type: 'info',
                timer: 12000
            });

        });

        
	</script>

</html>
