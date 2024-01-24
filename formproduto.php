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

                        <h1 class="h3 mb-3">Cadastro do Produto</h1>
                        <div class="row">
                            <div class="mb-3 col-6">
                                <label for="produto" class="form-label">Produto</label>
                                <input type="text" class="form-control" id="produto" placeholder="Digite o nome do Produto">
                            </div>
                            <div class="mb-3 col-6">
                                <label for="descricao" class="form-label">Descrição</label>
                                <textarea class="form-control" id="descricao" rows="1"></textarea>
                            </div>
                            <div class="mb-3 col-6">
                                <label for="categoria" class="form-label">Categoria de Produto</label>
                                <select class="form-select form-select" name="categoria" id="categoria">
                                    <option disabled selected>Selecione uma opção:</option>
                                    <option value="bebidaquente">Bebida quente</option>
                                    <option value="bebidagelada">Bebida gelada</option>
                                    <option value="boloesobremesa">Bolo e Sobremesa</option>
                                    <option value=sanduicheesalgado">Sanduiche e Salgado</option>
                                </select>
                            </div>
                            <div class="mb-3 col-6">
                                <label for="estoque">Estoque</label>
                                <input type="number" name="estoque" id="estoque" min="0" max="200" class="form-control">
                            </div>
                        </div>

                    </div>
                    <input type="submit" class="btn btn-outline-primary" value="Salvar pedido">
                </form>
                <style>
                    form {
                        text-align: center;
                        justify-content: center;
                        align-items: center;
                    }

                    .form-label {
                        font-weight: 600;

                    }

                    h1 {
                        border-bottom: 1px solid black;
                        
                    }

                   .form-control{
                    border-radius: 200px;
                   }

                    #categoria {
                        border-radius: 200px;
                    }

                    #estoque {
                        border-radius: 200px;
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>

</html>