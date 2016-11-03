
<nav class="nav_lateral large-3 medium-4 columns" id="actions-sidebar">
                  <?= $this->element("nav_basica_lateral");?>

    <ul class="side-nav">
        <li class="title_nav "><?= __('Menu') ?></li>
        <li><?= $this->Html->link(__('Adicionar Cartão'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class='paginas'>
<div class="bg_tables cartoes index large-9 medium-8 columns content">
    <h3 class='title_page'><?= __('Cartões') ?></h3>
    <table class='tables' cellpadding="0" cellspacing="0">
        <thead>
            <tr>
               <th scope="col"><?= $this->Paginator->sort('imagem') ?></th>

                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                

                <th scope="col"><?= $this->Paginator->sort('Nome') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Cores') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Gramatura') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Acabamento') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Corte') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Material') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Tamanho') ?></th>
                
                <th scope="col"><?= $this->Paginator->sort('Qtd') ?></th>

                <th scope="col"><?= $this->Paginator->sort('Custo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Preço') ?></th>
                
                <th scope="col"><?= $this->Paginator->sort('Publicado') ?></th>
                <!--<th scope="col"><?= $this->Paginator->sort('Ordem Produto') ?></th>-->
                <th scope="col" class="actions"><?= __('Ações') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($cartoes as $carto): ?>
            <tr>
                <td><?= $this->Html->image('produtos/'.$carto->img_produto, ['class'=>'preview_img_produtos']) ?></td>

                <td><?= $this->Number->format($carto->id) ?></td>

                <td><?= h($carto->nome) ?></td>
                <td><?= h($carto->cores) ?></td>
                <td><?= h($carto->gramatura) ?></td>
                <td><?= h($carto->acabamento) ?></td>
                <td><?= h($carto->corte) ?></td>
                <td><?= h($carto->material) ?></td>  
                <td><?= h($carto->tamanho) ?></td>
                <td><?= $this->Number->format($carto->quantidade) ?></td>

                <td class='td_custo'><?= $this->Money->format($carto->custo); ?></td>
                <td class='td_preco' ><?= $this->Money->format($carto->preco); ?></td>               
                                <td><?= h($carto->publicado) ?></td>

               <!-- <td><?= h($carto->ordem_produto) ?></td>-->
                <td class="actions">
                    <?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $carto->id], ['confirm' => __('Tem certeza que deseja deletar #{0}?', $carto->id)]) ?>
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $carto->id]) ?>
                    <?= $this->Html->link(__('Ver'), ['action' => 'view', $carto->id]) ?>
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
     
        <p><?= $this->Paginator->counter("Página {{page}} de {{pages}}") ?></p>
    
</div>
</div><!--paginas-->
