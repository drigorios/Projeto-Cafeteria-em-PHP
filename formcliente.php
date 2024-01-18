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
                                        <h5 class="card-title mb-0">Nome</h5>
                                    </div>
                                    <div class="card-body">
                                        <input placeholder="Digite seu nome" type="text" name="nome" id="nome" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-title mb-0">Endereço</h5>
                                    </div>
                                    <div class="card-body">
                                        <input placeholder="Digite seu endereço" type="text" name="nome" id="nome" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-title mb-0">Email</h5>
                                    </div>
                                    <div class="card-body">
                                        <input placeholder="Digite seu Email" type="email" name="email" id="email" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-title mb-0">Telefone</h5>
                                    </div>
                                    <div class="card-body">
                                        <input placeholder="Digite seu Telefone" type="tel" name="endereço" id="endereço" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-title mb-0">Data de cadastro</h5>
                                    </div>
                                    <div class="card-body">
                                        <input placeholder="Informe a data" type="datetime-local" name="datacadastro" id="datacadastro" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <input type="submit" class="btn btn-outline-primary" value="Criar Conta ">
                </form>
    <style>
        form{
            text-align: center;
        }
    </style>
            </main>

            <footer class="footer">
                <?php include 'footer.php' 
                ?>
            </footer>
        </div>
    </div>

    <script src="js/app.js"></script>

</body>

</html>