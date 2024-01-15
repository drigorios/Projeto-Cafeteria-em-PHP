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
            <!-- FORM REGISTRO -->
            <main class="content">
                <form action="" method="post">
                    <div class="container-fluid p-0">

                        <h1 class="h3 mb-3">Cadastro do Cliente</h1>
                        <div class="row">
                            <div class="col-4">
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-title mb-0">Crie sua Conta</h5>
                                    </div>
                                    <div class="card-body">
                                        <input placeholder="Nome" type="text" name="nome" id="nome" required>

                                        <input placeholder="Endereço" type="text" name="endereco" id="endereco" required>

                                        <input placeholder="Email" type="email" name="email" id="email" required>

                                        <input placeholder="Telefone" type="text" name="telefone" id="telefone" required>
                                        <label for="data">Data do cadastro</label>
                                        <input type="date" name="data" id="data">
                                        <input type="submit" value="Confirmar">
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </form>
            </main>

            <footer class="footer">
                <?php include 'footer.php' ?>
            </footer>
        </div>
    </div>

    <script src="js/app.js"></script>

</body>

</html>