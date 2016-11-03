<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Teste'), ['action' => 'edit', $teste->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Teste'), ['action' => 'delete', $teste->id], ['confirm' => __('Are you sure you want to delete # {0}?', $teste->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Teste'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Teste'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="teste view large-9 medium-8 columns content">
    <h3><?= h($teste->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nome') ?></th>
            <td><?= h($teste->nome) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Url') ?></th>
            <td><?= h($teste->url) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($teste->id) ?></td>
        </tr>
    </table>
</div>
