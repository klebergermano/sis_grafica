<nav class="nav_lateral large-3 medium-4 columns" id="actions-sidebar">
                  <?= $this->element("nav_basica_lateral");?>

    <ul class="side-nav">
        <li class="title_nav heading"><?= __('Menu Adesivos') ?></li>
        <li><?= $this->Html->link(__('Adicionar Talão'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class='paginas'>
<div class="bg_tables taloes index large-9 medium-8 columns content">
    <h3 class='title_page'><?= __('Talões') ?></h3>
    <table class='tables' cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('imagem') ?></th>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nome') ?></th>
                <th scope="col"><?= $this->Paginator->sort('vias') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tamanho') ?></th>
                <th scope="col"><?= $this->Paginator->sort('acabamento') ?></th>
                <th scope="col"><?= $this->Paginator->sort('material') ?></th>
                <th scope="col"><?= $this->Paginator->sort('folhas') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cores') ?></th>
                <th scope="col"><?= $this->Paginator->sort('gramatura') ?></th>
                <th scope="col"><?= $this->Paginator->sort('quantidade') ?></th>
                <th scope="col"><?= $this->Paginator->sort('custo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('preço') ?></th>
                <th scope="col"><?= $this->Paginator->sort('publicado') ?></th>
                <th scope="col" class="actions"><?= __('') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($taloes as $talao): ?>
            <tr>
                <td><?= $this->Html->image('produtos/'.$talao->img_produto, ['class'=>'preview_img_produtos']) ?></td>

                <td><?= $this->Number->format($talao->id) ?></td>
                <td><?= h($talao->nome) ?></td>
                <td><?= h($talao->vias) ?></td>
                <td><?= h($talao->tamanho) ?></td>
                <td><?= h($talao->acabamento) ?></td>
                <td><?= h($talao->material) ?></td>
                <td><?= $this->Number->format($talao->folhas) ?></td>
                <td><?= h($talao->cores) ?></td>
                <td><?= h($talao->gramatura) ?></td>
                <td><?= h($talao->quantidade) ?></td>
                <td class='tid_custo'><?= $this->Money->format($talao->custo) ?></td>
                <td class='td_preco'><?= $this->Money->format($talao->preco) ?></td>
                <td><?= h($talao->publicado) ?></td>
                <td class="actions">
                                    <?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $talao->id], ['confirm' => __('Tem certeza que deseja deletar #{0}?', $talao->id)]) ?>
    
                <?= $this->Html->link(__('Editar'), ['action' => 'edit', $talao->id]) ?>
                                    <?= $this->Html->link(__('Ver'), ['action' => 'view', $talao->id]) ?>

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
</div><!--págians-->