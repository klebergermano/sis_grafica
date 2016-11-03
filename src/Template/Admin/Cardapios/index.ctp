<nav class="nav_lateral large-3 medium-4 columns" id="actions-sidebar">
                  <?= $this->element("nav_basica_lateral");?>
    
    <ul class="side-nav">
        <li class="title_nav heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Novo Cardápio'), ['action' => 'add']) ?></li>
    </ul>
</nav>

<div class='paginas'>
<div class="bg_tables cardapios index large-9 medium-8 columns content">
    <h3 class='title_page'><?= __('Cardapios') ?></h3>
    <table class='tables' cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('imagem') ?></th>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nome') ?></th>
                <th scope="col"><?= $this->Paginator->sort('material') ?></th>
                <th scope="col"><?= $this->Paginator->sort('quantidade') ?></th>
                <th scope="col"><?= $this->Paginator->sort('acabamento') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dobra') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tamanho') ?></th>
                <th scope="col"><?= $this->Paginator->sort('custo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('preco') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cores') ?></th>
                <th scope="col"><?= $this->Paginator->sort('gramatura') ?></th>
        
                <th scope="col"><?= $this->Paginator->sort('publicado') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($cardapios as $cardapio): ?>
            <tr>
                <td><?= $this->Html->image('produtos/'.$cardapio->img_produto, ['class'=>'preview_img_produtos']) ?></td>

                <td><?= $this->Number->format($cardapio->id) ?></td>
                <td><?= h($cardapio->nome) ?></td>
                <td><?= h($cardapio->material) ?></td>
                <td><?= $this->Number->format($cardapio->quantidade) ?></td>
                <td><?= h($cardapio->acabamento) ?></td>
                <td><?= h($cardapio->dobra) ?></td>
                <td><?= h($cardapio->tamanho) ?></td>
                <td class='td_custo'><?= $this->Money->format($cardapio->custo) ?></td>
                <td class='td_preco'><?= $this->Money->format($cardapio->preco) ?></td>
                <td><?= h($cardapio->cores) ?></td>
                <td><?= h($cardapio->gramatura) ?></td>
                <td><?= h($cardapio->publicado) ?></td>
                <td class="actions">
                    
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $cardapio->id], ['confirm' => __('Tem certeza que deseja deletar #{0}?', $cardapio->id)]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $cardapio->id]) ?>
                    <?= $this->Html->link(__('View'), ['action' => 'view', $cardapio->id]) ?>

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
</div><!--paginas-->