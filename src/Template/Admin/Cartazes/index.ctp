<nav class="nav_lateral large-3 medium-4 columns" id="actions-sidebar">
                  <?= $this->element("nav_basica_lateral");?>

    <ul class="side-nav">
        <li class="title_nav heading"><?= __('Menu Cartazes') ?></li>
        <li><?= $this->Html->link(__('Novo Cartaz'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class='paginas'>
<div class="bg_tables cartazes index large-9 medium-8 columns content">
    <h3 class='title_page'><?= __('Cartazes') ?></h3>
    <table class='tables' cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                                <th scope="col"><?= $this->Paginator->sort('img_produto') ?></th>

                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nome') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tamanho') ?></th>
                <th scope="col"><?= $this->Paginator->sort('gramatura') ?></th>
                <th scope="col"><?= $this->Paginator->sort('acabamento') ?></th>
                <th scope="col"><?= $this->Paginator->sort('quantidade') ?></th>
                <th scope="col"><?= $this->Paginator->sort('custo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('preço') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cores') ?></th>
                <th scope="col"><?= $this->Paginator->sort('material') ?></th>
                <th scope="col"><?= $this->Paginator->sort('publicado') ?></th>
                <th scope="col" class="actions"><?= __('') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($cartazes as $cartaze): ?>
            <tr>
                
                <td><?= $this->Html->image('produtos/'.$cartaze->img_produto, ['class'=>'preview_img_produtos']) ?></td>

                <td><?= $this->Number->format($cartaze->id) ?></td>
                <td><?= h($cartaze->nome) ?></td>
                <td><?= h($cartaze->tamanho) ?></td>
                <td><?= h($cartaze->gramatura) ?></td>
                <td><?= h($cartaze->acabamento) ?></td>
                <td><?= $this->Number->format($cartaze->quantidade) ?></td>
                <td class='td_custo'><?= $this->Money->format($cartaze->custo) ?></td>
                <td class='td_preco'><?= $this->Money->format($cartaze->preco) ?></td>
                <td><?= h($cartaze->cores) ?></td>
                <td><?= h($cartaze->material) ?></td>
                <td><?= h($cartaze->publicado) ?></td>
                <td class="actions">
                    
                                        <?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $cartaze->id_cartaz], ['confirm' => __('Are you sure you want to delete # {0}?', $cartaze->id)]) ?>

                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $cartaze->id]) ?>
                                   <?= $this->Html->link(__('Ver'), ['action' => 'view', $cartaze->id]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('próxima')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('anterios') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter("Páginas {{page}} de {{pages}}") ?></p>
    </div>
</div>
</div><!--páginas-->