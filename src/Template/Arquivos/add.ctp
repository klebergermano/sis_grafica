<nav class="nav_lateral large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="title_nav heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Arquivos'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="bg_forms arquivos form large-9 medium-8 columns content">
    <?= $this->Form->create($arquivo, ['type'=>'file']) ?>
    
    
    
    <fieldset>
        <legend><?= __('Add Arquivo') ?></legend>
        
        <div class='bg_img_form'><?= $this->Html->image("admin/insira_img.jpg", ['id'=>'img_form']);?>
                    
                    <?= $this->Form->file('filename[]', ['id'=>'filename'])?>
                
         </div>
        
        <?php
        
       //echo $this->Form->file('filename[]', ['multiple']);
   
            echo $this->Form->input('description');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
