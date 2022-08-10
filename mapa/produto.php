<?php
	include("dados.php");
	//var_dump($marmitas);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title><?=$title;?></title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<nav>
			<img src="img/logo.png" title="Marmitas Dona Rita" alt="Marmitas Dona Rita"/>
			<ul>
				<li><a href="index.php" title="Início" alt="Início">Início</a></li>
				<li><a href="#link-marmita" title="Marmitas" alt="Marmitas">Marmitas</a></li>
				<li><a href="#link-contato" title="Contato" alt="Contato">Contato</a></li>
			</ul>
		</nav>
	</header>
	
	<main>
		<section id="link-marmita" class="main_marmita">
			<header class="main_marmita_header">
				<h1>Nossas marmitas</h1>
				<p>Escolha essa e outras marmitas deliciosas.</p>
				<br/><hr/>
			</header>
			<?php
				if(isset($_GET['id']) && !empty($_GET['id'])){
                	$id = $_GET['id'];//Valiar ID
                	foreach ($marmitas as $key => $value){
                		if ($value['id'] == $id){
			?>
			<div>
				<div>
					<img style="border-radius: 10px" src=<?=$value['imagem'];?>></a>
				</div>
				<div>
				<article>
					<h2><?=$value['titulo'];?></h2>
					<br/>
					<p><?=$value['descricao'];?></p>
				</article>
				</div>
			</div>
			
			<?php
                    }
				}
			}else{
				echo "Não existe";
			}
			?>
		</section>

        <section class="main_marmita">
			<header class="main_marmita_header">
				<hr/><br/>
				<h1>Ver outras marmitas.</h1>
			</header>
			<?php
			$id = 0;
				foreach($marmitas as $key => $value){
                    if($value['id'] != $id){
			?>
			
			<article>
				<h2><a href="produto.php?id=<?=$value['id'];?>"><?=$value['titulo'];?></a></h2>
	    	</article>
			<?php
                    }
				}
			?>
		</section>
	</main>

	<footer>
		<section id="link-contato">
        	<article class="main_contato">
            	<div class="main_contato_content">
                	<header>
	                    <h1>Faça seu pedido ou venha nos conhecer.</h1><br/>
	                    <p>De terça a sábado no almoço ou no jantar.</p>
	                    <p>Domingo somente no almoço.</p><br/>
	                    <p>Endereço:</p>
						<p>Rua das comidas prontas, nº 1234 / Sala 10 - Centro - Florianópolis / SC</p>
						<p>Contatos:</p>
						<p>(48) 1234.5678 / (48) 98765.4321 / (48) 91234.5678</p>
						<p>Email:</p>
						<p><a href="#">pedidos@marmitasdonarita.com.br</a></p>
	                </header>
                <div id="mapa"><img src="img/maps320.png" alt="Mapa"></div>
            	</div>
        	</article>
        </section>
		<p>&#169; 2022 por Cristiano Oliveira - RA: 21100980-5. Todos os direitos reservados.</p>
	</footer>
</body>
</html>