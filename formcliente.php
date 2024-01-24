<!DOCTYPE html>
<html lang="pt-br">

<head>
	<?php
	include 'header.php';
	?>

<body>
	<div class="wrapper">
		<?php include 'menu.php' ?>

		<div class="main">
			<?php include 'topo.php' ?>

			<main class="content">
				<form action="cadastrocliente.php" method="post" enctype="multipart/form-data">
					<div class="container-fluid p-0">

						<h1 class="h3 mb-3">Cadastro do Cliente</h1>

						<div class="row">
							<div class="mb-3 col-6">
								<label for="nome" class="form-label">Nome</label>
								<input type="text" class="form-control" name="nome" id="nome" placeholder="" required />
								<small id="helpId" class="form-text text-muted">Coloque o nome do cliente</small>
							</div>
							<div class="mb-3 col-6">
								<label for="" class="form-label">Email</label>
								<input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelpId" placeholder="" required />
								<small id="emailHelpId" class="form-text text-muted">ex: fulano@gmail.com</small>
							</div>
						</div>


						<div class="row">
							<div class="mb-3 col-4">
								<label for="telefone" class="form-label">Telefone</label>
								<input type="tel" class="form-control" name="telefone" id="telefone" placeholder="(00)00000-0000" required />

							</div>
							<div class="mb-3 col-4">
								<label for="cpfcnpj" class="form-label">CPF/CNPJ</label>
								<input type="text" class="form-control" name="cpfcnpj" id="cpfcnpj" maxlength="" placeholder="" />
							</div>
							<div class="mb-3 col-4">
								<label for="cep" class="form-label">CEP</label>
								<input type="text" class="form-control" name="cep" id="cep" maxlength="8" onkeyup="viaCEP()" placeholder="00000-000" />
							</div>
						</div>
							<div class="row">
								<div class="mb-3 col-3">
										<label for="rua" class="form-label">Logradouro</label>
										<input type="text" class="form-control" name="logradouro" id="logradouro" placeholder="ex: Rua Fulana de Tal" />
									</div>
									<div class="mb-3 col-3">
										<label for="numero" class="form-label">N°</label>
										<input type="text" class="form-control" name="numero" id="numero" />
									</div>
									<div class="mb-3 col-3">
										<label for="complemento" class="form-label">Complemento</label>
										<input type="text" class="form-control" name="complemento" id="complemento" />
									</div>
									<div class="mb-3 col-3">
										<label for="bairro" class="form-label">Bairro</label>
										<input type="text" class="form-control" name="bairro" id="bairro" />
									</div>
								</div>
							</div>
							<div class="row">
							<div class="mb-3 col-4">
								<label for="cidade" class="form-label">Cidade</label>
								<input
									type="text"
									class="form-control"
									name="cidade"
									id="cidade"
									placeholder=""
								/>
							</div>
									
							<div class="mb-3 col-4">
								<label for="uf" class="form-label">Estado</label>
								<input
									type="text"
									class="form-control"
									name="uf"
									id="uf"
									placeholder="Informe sua unidade federal:"									
										>
								</div>
							<div class="mb-3 col-4">
								<label for="imagem" class="form-label">Imagem de Perfil</label>
								<input
									type="file"
									class="form-control"
									name="imagem"
									id="imagem"
									placeholder=""
								/>
							</div>
							

						</div>
						<input type="submit" class="btn btn-primary" value="Concluir">
				</form>
			</main>

			<footer class="footer">
				<?php include 'footer.php' ?>
			</footer>
		</div>
	</div>

	
	<!--SCRIPTS JS-->
	
	<script src="js/app.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>



</body>

<!-- SCRIPT VIACEP -->


<script>
    function viaCEP() {

        var numCep = $("#cep.form-control").val();

        var url = "https://viacep.com.br/ws/" + numCep + "/json";

        $.ajax({
            url: url,
            type: "get",
            dataType: "json",

            success: function (dados) {
                console.log(dados);
                $("#uf").val(dados.uf);
                $("#cidade").val(dados.localidade);
                $("#logradouro").val(dados.logradouro);
                $("#bairro").val(dados.bairro);
            }
        })


    }
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.12/jquery.mask.min.js"></script>
<script type="text/javascript">
    $("#telefone, #celular").mask("(00) 00000-0000"); //000 000 0000 eua
    $('#data').mask('00/00/0000');
    $('#time').mask('00:00:00');
    $('#date_time').mask('00/00/0000 00:00:00');
    $('#cep').mask('00000-000');
    $('#phone').mask('0000-0000');
    $('#phone').mask('(00) 0000-0000');
    $('#phone_us').mask('(000) 000-0000');
    $('#mixed').mask('AAA 000-S0S');
    $('#cpf').mask('000.000.000-00', { reverse: true });
    $('#cnpj').mask('00.000.000/0000-00', { reverse: true });
    $('#money').mask('000.000.000.000.000,00', { reverse: true });
    $('#money2').mask("#.##0,00", { reverse: true });
    $('#ip_address').mask('0ZZ.0ZZ.0ZZ.0ZZ', {
        translation: {
            'Z': {
                pattern: /[0-9]/, optional: true
            }
        }
    });
    $('.ip_address').mask('099.099.099.099');
    $('.percent').mask('##0,00%', { reverse: true });
    $('.clear-if-not-match').mask("00/00/0000", { clearIfNotMatch: true });
    $('.placeholder').mask("00/00/0000", { placeholder: "__/__/____" });
    $('.fallback').mask("00r00r0000", {
        translation: {
            'r': {
                pattern: /[\/]/,
                fallback: '/'
            },
            placeholder: "__/__/____"
        }
    });
    $('.selectonfocus').mask("00/00/0000", { selectOnFocus: true });
</script>


<script type="text/javascript">
    $("#cpfcnpj").keydown(function () {
        try {
            $("#cpfcnpj").unmask();
        } catch (e) { }

        var tamanho = $("#cpfcnpj").val().length;

        if (tamanho < 11) {
            $("#cpfcnpj").mask("999.999.999-99");
        } else {
            $("#cpfcnpj").mask("99.999.999/9999-99");
        }

        // ajustando foco
        var elem = this;
        setTimeout(function () {
            // mudo a posição do seletor
            elem.selectionStart = elem.selectionEnd = 10000;
        }, 0);
        // reaplico o valor para mudar o foco
        var currentValue = $(this).val();
        $(this).val('');
        $(this).val(currentValue);
    });
</script>	



</html>
<!-- Importação do Jquery Mask -->
<!-- include da importação da mascara dos inputs -->
