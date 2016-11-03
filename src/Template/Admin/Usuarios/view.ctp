<nav class="nav_lateral large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="title_nav heading"><?= __('Opções de usuário') ?></li>
        <li><?= $this->Html->link(__('Editar Usuário'), ['action' => 'edit', $usuario->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Deletar Usuário'), ['action' => 'delete', $usuario->id], ['confirm' => __('Are you sure you want to delete # {0}?', $usuario->id)]) ?> </li>
        <li><?= $this->Html->link(__('Novo Usuário'), ['action' => 'add']) ?> </li>
                <li><?= $this->Html->link(__('Listar Usuários'), ['action' => 'index']) ?> </li>

    </ul>
</nav>
<div class="bg_tables usuarios view large-9 medium-8 columns content">
    <table class="tables vertical-table">
         <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($usuario->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nome') ?></th>
            <td><?= h($usuario->nome) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Senha') ?></th>
            <td><?= h($usuario->password) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Privilégios') ?></th>
            <td><?= h($usuario->privilegios) ?></td>
        </tr>
       
        <tr>
            <th scope="row"><?= __('Cadastrado em:') ?></th>
            <td><?= h($usuario->created->format("d/m/Y H:m:s")) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Última modificação') ?></th>
            <td><?= h($usuario->modified->format("d/m/Y H:m:s")) ?></td>
        </tr>
    </table>
</div>
