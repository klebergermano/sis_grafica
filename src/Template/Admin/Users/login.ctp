<style>
    body{background:url(../../webroot/img/admin/bg_login.png) ; 
    background-size:100%; }
    .container, .paginas{background:transparent; ;
     }
    header{display:none;}
    footer{display:none;}
    
    
</style>
<div class='paginas' >
          <?= $this->Flash->render('auth') ?>

<div id='bg_form_login' class="clearfix users form">
    <div>
    <?= $this->Html->image('logo-grafica-rb.png', ['class'=>'logo_login'])?>
        </div>
    <?= $this->Form->create() ?>
            <fieldset>
                <legend><?= __('Por favor digite usuário e senha'), $this->Html->image('icos/cadeado_red.png')?></legend>
                <?= $this->Form->input('username',['label'=>'Usuário']) ?>
                <?= $this->Form->input('password', ['label'=>'Senha']) ?>
            </fieldset>
            <?= $this->Form->button(__('Login')); ?>
            <?= $this->Form->end() ?>
</div>
</div><!--páginas-->
