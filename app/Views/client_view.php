<main class="container p-3">
    <h1><?= $nome ?></h1>
    <hr>
    <p><small>Sexo:</small> <b><?= $sexo == "Male" ? "Masculino" : "Feminino" ?></b></p>
    <p><small>E-mail:</small> <b><?= $email ?></b></p>
    <p><small>Telefone:</small> <b><?= $telefone ?></b></p>
    <p><small>Empresa:</small> <b><?= $empresa ?></b></p>
    <p><small>Plano:</small> <b class="plano <?= $plano ?>"><?= $plano ?></b></p>
</main>