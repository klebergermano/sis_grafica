
</nav>
<nav class="nav_lateral large-3 medium-4 columns" id="actions-sidebar">
        <ul>
        
        <li><?= $this->Html->link("<< Painel", ["action"=>"../painel"])?></li>

    </ul>
    <ul class="side-nav">
        <li class="title_nav heading"><?= __('Menu Usuários') ?></li>
        <li><?= $this->Html->link(__('Novo Usuário'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class='paginas'>
<div class="bg_tables users index large-9 medium-8 columns content">
    <table class='tables' cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('usuários') ?></th>
                <th scope="col"><?= $this->Paginator->sort('senha') ?></th>
                <th scope="col" class="actions"><?= __('') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user): ?>
            <tr>
                <td><?= $this->Number->format($user->id) ?></td>
                <td><?= h($user->username) ?></td>
                <td>***********************************</td>
                <td class="actions">
                    <?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $user->id], ['confirm' => __('Tem certeza que deseja deletar #{0}?', $user->id)]) ?>

                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $user->id]) ?>
                                        <?= $this->Html->link(__('Ver'), ['action' => 'view', $user->id]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('anterior')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('próxima') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter("Páginas {{page}} de {{pages}}") ?></p>
    </div>
</div>
</div><!--páginas-->