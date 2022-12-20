<br>
<main class="container">
    <form class="form-view form" action="<?= base_url() . '/cliente/novo' ?>" method="post">
        <h2>Dados</h2>
        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome">
        </div>
        <div class="form-group">
            <label for="sexo">Sexo</label>
            <div class="form-check">
                <input class="form-check-input" value="Male" type="radio" name="sexo" id="masculino">
                <label class="form-check-label" for="masculino">
                    Masculino
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" value="Female" type="radio" name="sexo" id="feminino">
                <label class="form-check-label" for="feminino">
                    Feminino
                </label>
            </div>
        </div>
        <div class="form-group">
            <label for="email">E-mail</label>
            <input type="email" class="form-control" name="email" id="email" placeholder="E-mail">
        </div>
        <div class="form-group">
            <label for="telefone">Telefone</label>
            <input type="text" class="form-control" name="telephone" id="telephone" placeholder="Telefone">
        </div>
        <div class="form-group">
            <label>Tipo de Plano</label>
            <select name="tipo_plano" class="form-select">
                <option value="3">Ouro</option>
                <option value="2">Silver</option>
                <option value="1">Bronze</option>
            </select>
        </div>
        <div class="form-group">
            <label>Endereço</label>
            <input type="text" name="endereco" class="form-control">
        </div>
        <hr>
        <h2>Negócios</h2>
        <div class="form-group">
            <label>Local de Nascimento</label>
            <input type="text" name="local_nascimento" class="form-control">
        </div>
        <div class="form-group">
            <label>Data de Nascimento</label>
            <input type="date" name="data_nascimento" class="form-control">
        </div>
        <div class="form-group">
            <label>Empresa</label>
            <input type="text" name="empresa" class="form-control">
        </div>
        <hr>
        <div class="row">
            <input type="submit" value="Inserir" class="btn btn-primary">
            <a href="<?= base_url() ?>" class="btn btn-outline-secondary">Cancelar</a>
        </div>
    </form>
</main>
<br>