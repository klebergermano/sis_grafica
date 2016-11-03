<nav class="nav_lateral large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
                <li><?= $this->Html->link("<< Painel", ["action"=>"../painel"])?></li>

        <li class="title_nav heading"><?= __('Menu Usuários') ?></li>
        <li><?= $this->Html->link(__('Novo Usuario'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="bg_tables usuarios index large-9 medium-8 columns content">
    <h3 class='title_page'><?= __('Usuários') ?></h3>
    <table class='tables' cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nome') ?></th>
                <th scope="col"><?= $this->Paginator->sort('senha') ?></th>
                <th scope="col"><?= $this->Paginator->sort('privilégios') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cadastrado em') ?></th>
                <th scope="col"><?= $this->Paginator->sort('última modificação') ?></th>
                <th scope="col" class="actions"><?= __('Ações') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($usuarios as $usuario): ?>
            <tr>
                <td><?= $this->Number->format($usuario->id) ?></td>
                <td><?= h($usuario->nome) ?></td>
                <td>************</td>
                <td><?= h($usuario->privilegios) ?></td>
                <td><?= h($usuario->created->format("d/m/Y H:m")) ?></td>
                <td><?= h($usuario->modified->format("d/m/Y H:m")) ?></td>
                <td class="actions">

                    <?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $usuario->id], ['confirm' => __('Tem certeza que deseja deletar esse usuário #{0}?', $usuario->id)]) ?>

                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $usuario->id]) ?>
                                        <?= $this->Html->link(__('Ver'), ['action' => 'view', $usuario->id]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    
    
    <div class="paginator">
        <div>
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('anterior')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('próxima') . ' >') ?>
          
        </ul>
        <p><?= $this->Paginator->counter('Página {{page}} de {{pages}}') ?></p>
        </div>
    </div>
</div>
