<?php
	require("dados.php");
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
		<div class="main_cta">
            <article class="main_cta_content">
                <div class="main_cta_content_spacer">
                    <header>
                        <h1>Experimente nossas deliciosas comidas caseiras, preparadas com muito amor e carinho.</h1>
                    </header>
                </div>
            </article>
        </div>
		<section id="link-marmita" class="main_marmita">
			<header class="main_marmita_header">
				<h1>Nossas marmitas</h1>
				<p>Clique na marmita para ver a descrição dos ingredientes.</p>
				<br/><hr/>
			</header>
			<?php
			//validar se array existe e se não está vazio
			if(is_array($marmitas) && !empty($marmitas)){
				foreach($marmitas as $key => $value){
			?>
			<article>
				<a href="produto.php?id=<?=$value['id'];?>">
				<img src=<?=$value['imagem'];?> title="<?=$value['title_img'];?>" alt="<?=$value['title_img'];?>" ></a>
				<h2><?=$value['titulo'];?></h2>
				<p><?=substr($value['descricao'], 0, 30);?>...</p>
			</article>
			<?php
			}
			}else{
			echo "Sem Tutoriais no momento!!!";
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
					<div><img src="img/maps320.png" alt="Mapa"></div>
	            </div>
	        </article>
        </section>
		<p>&#169; 2022 por Cristiano Oliveira - RA: 21100980-5. Todos os direitos reservados.</p>				
	</footer>
</body>
</html>