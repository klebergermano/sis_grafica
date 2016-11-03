<nav class="nav_lateral large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $teste->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $teste->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Teste'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="bg_forms teste form large-9 medium-8 columns content">
    <?= $this->Form->create($teste, ['type'=>'file']) ?>
    <fieldset>
        <legend><?= __('Edit Teste') ?></legend>
        <?php
            echo $this->Form->input('nome');
            echo $this->Form->input('url', ['type'=>'file','multiple']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
