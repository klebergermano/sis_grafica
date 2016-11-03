<nav class="nav_lateral large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="title_nav heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Deletar'),
                ['action' => 'delete', $folhinhasParede->id],
                ['confirm' => __('Tem certeza que deseja deletar #{0}?', $folhinhasParede->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('Listar Folhinhas de Parede'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class='paginas'>
<div class="bg_forms folhinhasParede form large-9 medium-8 columns content">
    <?= $this->Form->create($folhinhasParede) ?>
    <fieldset>
        <legend><?= __('Editar Folhinhas de Parede') ?></legend>
        
        <div class='bg_img_form'>
            
            <?= $this->Html->image("produtos/".$folhinhasParede->img_produto, ['id'=>'img_form']);?>
                         
            <div id='bg_btn_file'><?= $this->Form->file('img_produto[]', [ 'label'=>'test', 'type'=>"file", 'id'=>'filename'])?>
            <label id='label_file'>selecionar imagem</label> 
            </div>
   
        </div>
                  <div class='bg_precos'>
            <?php 
            echo $this->Form->input('custo', ['label'=>'Custo R$', 'value'=>number_format($folhinhasParede->custo, 2, ".", ","), 'step'=>1]);     
            echo $this->Form->input('preco', ['label'=>'Preço R$', 'value'=>number_format($folhinhasParede->preco, 2, ".",","), 'step'=>1]);
            ?>
        </div>  
        
        <?php
            echo $this->Form->input('nome');
            echo $this->Form->input('material');
            echo $this->Form->input('quantidade');
            echo $this->Form->input('acabamento');
            echo $this->Form->input('tamanho');
            echo $this->Form->input('gramatura');
            echo $this->Form->input('cores');
            echo $this->Form->input('publicado');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Salvar')) ?>
    <?= $this->Form->end() ?>
</div>
</div><!--páginas-->