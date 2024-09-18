<!DOCTYPE html>
<html lang="pt-BR">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Seu Título</title>
	<link rel="stylesheet" href="style.css">
</head>

<body>

	<div class="create">
		<div class="form_ajax" style="display: none"></div>
		<form class="form" name="gallery" action="<?= $router->route(name: "form.create"); ?>" method="post" enctype="multipart/form-data">
			<label>
				<input type="text" name="first_name" placeholder="Nome" required />
			</label>
			<label>
				<input type="text" name="last_name" placeholder="Sobrenome" required />
			</label>
			<button type="submit">Cadastrar Usuario</button>
		</form>
	</div>

	<section>
		<?php
		if (!empty($users)):
			foreach ($users as $user):
				$this->insert("user", ["user" => $user]);
			endforeach;
		endif; ?>
	</section>

	<script
		src="https://code.jquery.com/jquery-3.7.1.js"
		integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
		crossorigin="anonymous"></script>
	<script>
		
		$(function (){
			function load(action){
				var load_div = $(".ajax_load");
				if (action === "open"){
					load_div.fadeIn().css("display", "flex");
				} else {
					load_div.fadeOut();
				}

			}

			$("form").submit(function(e) {
				e.preventDefault();
			});
			
			$("body").on("click", "[data-action]", function (e) {
				e.preventDefault();
				var data = $(this).data();
				var div = $(this).parent();

				$.post(data.action, data.id, function(){
					div.fadeOut();
				}, "json").fail(function() {
					alert("Erro ao processar requisição");
			});
			});
		})
		
		
	</script>

</body>

</html>