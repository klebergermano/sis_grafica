<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
<head>
   

    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

      <!--<?= $this->Html->css('base.css') ?>-->
        <!--<?= $this->Html->css('cake.css') ?>-->
        
        <?= $this->Html->css('normalize.css') ?>
        <?= $this->Html->css('admin.css') ?>

       
        <?= $this->Html->script('jquery-3.1.1.min.js') ?>
        <?= $this->Html->script('myjs.js') ?>



    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
   
    
     <header class='clearfix'>
    <div id='header_center'>
            
        
    
       

            <?= $this->Html->image("logo-grafica-rb.png", ["class"=>"logo_grafica", "url"=>["controller"=>"painel"]])?>
        
         <div class='nav_header_admin'><?= $this->Html->image('icos/link_web.png', ['url'=>'/']);?><?= $this->Html->link('Acessar Site', '/');?></div>
               <div id='bg_log'>
                   <?php if ($loggedIn): ?>
                   <ul>
                       <li> <?= $username = $this->request->session()->read('Auth.User.username'); ?>  </li>
                       <li> <?= $this->Html->link('Sair', ['controller' => 'users', 'action' => 'logout']); ?></li>
                       
                   </ul>     
    
                   <?php else: ?>            
                   <?php endif; ?>
              
               </div><!--log-->
        
        <nav id='nav_header_admin' class='clearfix'>
           
            
        </nav>
        
    </div><!--header_center-->
    
    
</header>
    
    
    
              <?= $this->Flash->render() ?>

    <div class="container clearfix">
        <?= $this->fetch('content') ?>
    
    </div> <!--container-->
    
    <footer>
        <div id='footer_center'>
            
            
        </div><!--footer-->
    </footer>
</body>

</html>
