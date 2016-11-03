
<nav class="nav_lateral large-3 medium-4 columns" id="actions-sidebar">
              <?= $this->element("nav_basica_lateral");?>

    <ul class="side-nav">   
        <li class="title_nav heading"><?= __('Menu Adesivos') ?></li>
        <li><?= $this->Html->link(__('Novo Adesivo'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class='paginas'>
<div class="bg_tables adesivos index large-9 medium-8 columns content">
    <h3 class='title_page'><?= __('Adesivos') ?></h3>
    <table class='tables' cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                          <th scope="col"><?= $this->Paginator->sort('imagem') ?></th>
                          
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nome') ?></th>
      
                <th scope="col"><?= $this->Paginator->sort('tamanho') ?></th>
                <th scope="col"><?= $this->Paginator->sort('corte') ?></th>
                <th scope="col"><?= $this->Paginator->sort('acabamento') ?></th>
                <th scope="col"><?= $this->Paginator->sort('gramatura') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cores') ?></th>
                <th scope="col"><?= $this->Paginator->sort('material') ?></th>
                <th scope="col"><?= $this->Paginator->sort('quantidade') ?></th>
                <th scope="col"><?= $this->Paginator->sort('custo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('preco') ?></th>
                <th scope="col"><?= $this->Paginator->sort('publicado') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($adesivos as $adesivo): ?>
            <tr>
                
                 <td><?= $this->Html->image('produtos/'.$adesivo->img_produto, ['class'=>'preview_img_produtos']) ?></td>

                <td><?= $this->Number->format($adesivo->id) ?></td>
                <td><?= h($adesivo->nome) ?></td>
                
                <td><?= h($adesivo->tamanho) ?></td>
                <td><?= h($adesivo->corte) ?></td>
                <td><?= h($adesivo->acabamento) ?></td>
                <td><?= h($adesivo->gramatura) ?></td>
                <td><?= h($adesivo->cores) ?></td>
                <td><?= h($adesivo->material) ?></td>
                <td><?= $this->Number->format($adesivo->quantidade) ?></td>
                <td class='td_custo'><?= $this->Money->format($adesivo->custo) ?></td>
                <td class='td_preco'><?= $this->Money->format($adesivo->preco) ?></td>
                <td><?= h($adesivo->publicar_produto) ?></td>
                <td class="actions">
                    
                    <?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $adesivo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $adesivo->id)]) ?>
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $adesivo->id]) ?>
                    <?= $this->Html->link(__('Ver'), ['action' => 'view', $adesivo->id]) ?>

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
        <p><?= $this->Paginator->counter("Página {{page}} de {{pages}}") ?></p>
    </div>
</div>
</div><!--paginas-->