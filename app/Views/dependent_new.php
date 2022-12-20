<main class="container p-3">
    <h1>Adicionar dependente para <?= $nome ?></h1>

    <form class="form-view form" action="<?= base_url() . '/dependente/novo' ?>" method="post">
        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome">
        </div>
        <input type="text" name="titular" value="<?= $cliente_id ?>" hidden id="">
        <br>
        <div class="row">
            <input type="submit" value="Inserir" class="btn btn-primary">
            <a href="<?= base_url() ?>" class="btn btn-outline-secondary">Cancelar</a>
        </div>
    </form>
</main>