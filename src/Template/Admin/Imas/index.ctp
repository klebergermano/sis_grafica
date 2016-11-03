<nav class="nav_lateral large-3 medium-4 columns" id="actions-sidebar">
                  <?= $this->element("nav_basica_lateral");?>

    <ul class="side-nav">
        <li class="title_nav heading"><?= __('Menu Imãs') ?></li>
        <li><?= $this->Html->link(__('Adicionar Imã'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class='paginas'>
    
<div class="bg_tables imas index large-9 medium-8 columns content">
    <h3 class='title_page'><?= __('Imãs') ?></h3>
    <table class='tables ' cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('imagem') ?></th>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nome') ?></th>
                <th scope="col"><?= $this->Paginator->sort('material') ?></th>
                <th scope="col"><?= $this->Paginator->sort('acabamento') ?></th>
                <th scope="col"><?= $this->Paginator->sort('gramatura') ?></th>
                <th scope="col"><?= $this->Paginator->sort('quantidade') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tamanho') ?></th>
                <th scope="col"><?= $this->Paginator->sort('corte') ?></th>
                <th scope="col"><?= $this->Paginator->sort('custo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('preço') ?></th>
                <th scope="col"><?= $this->Paginator->sort('publicado') ?></th>
                <th scope="col" class="actions"><?= __('') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($imas as $ima): ?>
            <tr>
                    
                <td><?= $this->Html->image('produtos/'.$ima->img_produto, ['class'=>'preview_img_produtos']) ?></td>

                <td><?= $this->Number->format($ima->id) ?></td>
                <td><?= h($ima->nome) ?></td>
                <td><?= h($ima->material) ?></td>
                <td><?= h($ima->acabamento) ?></td>
                <td><?= h($ima->gramatura) ?></td>
                <td><?= $this->Number->format($ima->quantidade) ?></td>
                <td><?= h($ima->tamanho) ?></td>
                                <td><?= h($ima->corte) ?></td>

                <td class='td_custo'><?= $this->Money->format($ima->custo) ?></td>
                <td class='td_preco'><?= $this->Money->format($ima->preco) ?></td>
                <td><?= h($ima->publicado) ?></td>
                <td class="actions">
                     <?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $ima->id], ['confirm' => __('Tem certeza que deseja deletar #{0}?', $ima->id)]) ?>
    
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $ima->id]) ?>
                                <?= $this->Html->link(__('Ver'), ['action' => 'view', $ima->id]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('anterios')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('próxima') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter("Páginas {{page}} de {{pages}}") ?></p>
    </div>
</div>
</div><!--páginas-->
