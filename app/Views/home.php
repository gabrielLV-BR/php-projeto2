<main class="container p-3">
    <h1>Clientes</h1>
    <hr>
    <a class="btn btn-outline-secondary" href="<?= base_url() . '/cliente/novo/' ?>">Adicionar cliente</a>
    <br>
    <table class="table">
        <thead>
            <th scope="col pe-none">Nome</th>
            <th scope="col">E-mail</th>
            <th scope="col">Plano</th>
            <th scope="col"></th>
            <th scope="col"></th>
        </thead>
        <tbody>
            <?php foreach ($clientes as $cliente) : ?>
                <tr scope="row">
                    <td><?= $cliente["nome"] ?></td>
                    <td><?= $cliente["email"] ?></td>
                    <td><?= $cliente["plano"] ?></td>
                    <td>
                        <a href="<?= base_url() . "/cliente/" . $cliente["cliente_id"] ?>">Detalhes</a>
                    </td>
                    <td>
                        <a href="<?= base_url() . "/cliente/editar/" . $cliente["cliente_id"] ?>">Editar</a>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</main>