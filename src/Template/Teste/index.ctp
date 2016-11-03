<nav class="nav_lateral large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Teste'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="bg_tables teste index large-9 medium-8 columns content">
    <h3 class='title_page'><?= __('Teste') ?></h3>
    <table class='tables' cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nome') ?></th>
                <th scope="col"><?= $this->Paginator->sort('url') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($teste as $teste): ?>
            <tr>
                <td><?= $this->Number->format($teste->id) ?></td>
                <td><?= h($teste->nome) ?></td>
                <td><?= h($teste->url) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $teste->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $teste->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $teste->id], ['confirm' => __('Are you sure you want to delete # {0}?', $teste->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
