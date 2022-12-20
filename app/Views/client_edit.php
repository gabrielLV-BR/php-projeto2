<br>
<main class="container">
    <form class="form-view form" action="<?= base_url() . '/cliente/editar' ?>" method="post">
        <div class="row" style="justify-content: space-between">
            <h2>Dados</h2>
        </div>
        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" name="nome" id="nome" value="<?= $nome ?>" placeholder="Nome">
        </div>
        <div class="form-group">
            <label for="sexo">Sexo</label>
            <input type="text" class="form-control" name="sexo" id="sexo" value="<?= $sexo ?>" placeholder="Sexo">
        </div>
        <div class="form-group">
            <label for="email">E-mail</label>
            <input type="email" class="form-control" name="email" id="email" value="<?= $email ?>" placeholder="E-mail">
        </div>
        <div class="form-group">
            <label for="telefone">Telefone</label>
            <input type="text" class="form-control" name="telefone" id="telefone" value="<?= $telefone ?>" placeholder="Telefone">
        </div>
        <div class="form-group">
            <label>Tipo de Plano</label>
            <select name="tipo_plano" class="form-select">
                <option <?= $tipo_plano == "Gold" ? "selected" : "" ?> value="3">Ouro</option>
                <option <?= $tipo_plano == "Silver" ? "selected" : "" ?> value="2">Silver</option>
                <option <?= $tipo_plano == "Bronze" ? "selected" : "" ?> value="1">Bronze</option>
            </select>
        </div>
        <div class="form-group">
            <label>Endereço</label>
            <input disabled type="text" class="form-control" value="<?= $data_nascimento ?>">
        </div>
        <hr>
        <h2>Negócios</h2>
        <div class="form-group">
            <label>Local de Nascimento</label>
            <input disabled type="text" class="form-control" value="<?= $local_nascimento ?>">
        </div>
        <div class="form-group">
            <label>Data de Nascimento</label>
            <input disabled type="text" class="form-control" value="<?= $data_nascimento ?>">
        </div>
        <hr>

        <input type="text" name="id" hidden value="<?= $cliente_id ?>" id="">

        <h2>Dependentes</h2>
        <ul>
            <?php foreach ($dependentes as $dependente) : ?>
                <li>
                    <span>
                        <?= $dependente["nome"] ?>
                    </span>
                    <span>
                        <a href="<?= base_url() . '/dependente/excluir/' . $dependente['id'] ?>">
                            <img src="/icons/trash.svg" alt="Excluir">
                        </a>
                    </span>
                </li>
            <?php endforeach ?>

            <a class="btn btn-primary" href="<?= base_url() . '/dependente/novo/' . $cliente_id ?>">Adicionar dependente</a>
        </ul>

        <div class="row" id="submit">
            <input type="submit" value="Atualizar" class="btn btn-primary">
            <a href="<?= base_url() . '/cliente/excluir/' . $cliente_id ?>" class="btn btn-danger">Excluir</a>
            <a href="<?= base_url() ?>" class="btn btn-outline-secondary">Cancelar</a>
        </div>

    </form>
</main>
<br>