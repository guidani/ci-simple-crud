<div class="container mt-5">

    <?php echo anchor(base_url('user/create'), 'Novo usuário', ['class' => 'btn btn-success']) ?>

    <table class="table">
        <thead>
            <tr>
                <td>ID</td>
                <td>Nome</td>
                <td>Email</td>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user) : ?>
                <tr>
                    <td><?= esc($user['id']) ?> </td>
                    <td><?= esc($user['name']) ?> </td>
                    <td><?= esc($user['email']) ?> </td>
                    <td>
                        <?php echo anchor('user/edit/' . $user['id'], 'Editar') ?>
                        -
                        <?php echo anchor('user/delete/' . $user['id'], 'Excluir', ['onclick' => 'return confirma()']) ?>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
    <?php echo $pager->links() ?>
</div>

<script>
    function confirma() {
        if (!confirm('Deseja excluir o registro?')) {
            return false;
        }
        return true;
    }
</script>