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
        
        <?= $this->Html->css('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css') ?>
        <?= $this->Html->css('wow/animate.min.css') ?>
        <?= $this->Html->css('style') ?>


        <?= $this->Html->script('jquery-3.1.1.min') ?>
        <?= $this->Html->script('bootstrap_js/bootstrap.min') ?>
        <?= $this->Html->script('wow/wow.min') ?>

        <!-- scroll page -->
        <?= $this->Html->script('bootstrap_js/scrolling/jquery.easing.min') ?>
        <?= $this->Html->script('bootstrap_js/scrolling/scrolling-nav') ?>
        <!------>
        <!--modal-->

        <?= $this->Html->script('animatedModal.min.js') ?>

        <!--------->

        <?= $this->fetch('meta') ?>
        <?= $this->fetch('css') ?>
        <?= $this->fetch('script') ?>
    </head>
<body>
<section id='topo'></section>
    <div class="">   
        <header class=' clearfix navbar-fixed-top'>
            <div id='header_center'>
     
            <?= $this->Html->image('logo.png', ['url'=>'#topo', 'id'=>'logo'])?>

        
                <nav class='navbar navbar-right'>

                    <div class='navbar-header'>

                        <button class='navbar-toggle' type="button" data-target=".navbar-collapse" data-toggle="collapse">Menu &nbsp; &nbsp;<span class='glyphicon glyphicon-menu-hamburger'></span></button>
</div>
                      <div class='collapse navbar-collapse'>

                        <ul class='nav navbar-nav'>
                            <li><a href='#topo' class='page-scroll'><span class='glyphicon glyphicon-home'></span> Home</a></li>
                        


                            <li class='dropdown'>
                                <a href='#destaque_produtos'class='dropdown-toggle page-scroll' data-toggle='dropdown'>Produtos</a>
                               
                                <ul class='dropdown-menu'>
                                    <li><?= $this->Html->link('Adesivos', '#') ?></li>
                                    <li><?= $this->Html->link('Banners', '#') ?></li>
                                    <li><?= $this->Html->link('Cardápios', '#') ?></li>
                                    <li><?= $this->Html->link('Cartazes', '#') ?></li>
                                    <li><?= $this->Html->link('Cartões', '#') ?></li>
                                    <li><?= $this->Html->link('Convites', '#') ?></li>
                                    <li><?= $this->Html->link('Flyers', '#') ?></li>
                                    <li><?= $this->Html->link('Folhinha de Parede', '#') ?></li>
                                    <li><?= $this->Html->link('Imãs de Geladeira', '#') ?></li>
                                    <li><?= $this->Html->link('Talões', '#') ?></li>




                                    
                                </ul>
                            </li>
    <li><a href='#servicos'class='page-scroll'>Serviços</a></li>
                            <li><a href='#portfolio' class='page-scroll'>Portfólio</a></li>
                                                        <li><a href='#sobre' class='page-scroll'>Sobre</a></li>

                                                        <li><a href='#contato' class='page-scroll'>Contato</a></li>


                        </ul>
                      </div>

                </nav>
                
            </div><!--header_center-->
            
            <div id='header_fixed' class='navbar-fixed-top fixar-menu-header-off'>
                
                <div id='header_center_fixed' class='' >
                 <?= $this->Html->image('logo.png', ['url'=>'#', 'id'=>'logo'])?>

        
                <nav class='navbar navbar-right'>

                    <div class='navbar-header'>

                        <button class='navbar-toggle' type="button" data-target=".navbar-collapse" data-toggle="collapse">Menu &nbsp; &nbsp;<span class='glyphicon glyphicon-menu-hamburger'></span></button>
                    </div>
                    
                      <div class='collapse navbar-collapse'>

                        <ul class='nav navbar-nav'>
                            <li><a href='#'><span class='glyphicon glyphicon-home'></span> Home</a></li>
                            <li><a href='#'>Serviços</a></li>
                            <li><a href='#'>Portfólio</a></li>

                            <li><a href='#'>Contato</a></li>
                            <li class='dropdown'>
                                <a href='#'class='dropdown-toggle' data-toggle='dropdown'>Produtos  <span class='caret'></span></a>
                               
                                <ul class='dropdown-menu'>
                                    <li><?= $this->Html->link('Adesivos', '#') ?></li>
                                    <li><?= $this->Html->link('Banners', '#') ?></li>
                                    <li><?= $this->Html->link('Cardápios', '#') ?></li>
                                    <li><?= $this->Html->link('Cartazes', '#') ?></li>
                                    <li><?= $this->Html->link('Cartões', '#') ?></li>
                                    <li><?= $this->Html->link('Convites', '#') ?></li>
                                    <li><?= $this->Html->link('Flyers', '#') ?></li>
                                    <li><?= $this->Html->link('Folhinha de Parede', '#') ?></li>
                                    <li><?= $this->Html->link('Imãs de Geladeira', '#') ?></li>
                                    <li><?= $this->Html->link('Talões', '#') ?></li>




                                    
                                </ul>
                            </li>


                        </ul>
                      </div>

                </nav>
                
            </div><!--header-center-fixed-->
                
                
                
            </div><!--header_fixed-->
            
            
        </header>
        
        
          <?= $this->Flash->render() ?>
        <?= $this->fetch('content') ?>
    
    </div> <!--container-->
    
    <footer>
        <div id='footer_center'>
            
        </div><!--footer_center-->
    </footer>
    <script>
        
        
        
                /*Inicia o WOW animate js*/
                $(function(){
                    
                   new WOW().init();
                   
                });
            /*-------------------------------*/
            
            /*fixa o menu no top apos o scroll mouse*/
              var nav = $('#header_fixed');
              
         $(window).scroll(function () {
              if ($(this).scrollTop() < 100) {
                  
                   // nav.removeClass("fixar-menu-header-on").slideUp(200).css('border','0px');
                   // nav.addClass("fixar-menu-header-off");

              } else {
                  //nav.addClass("fixar-menu-header-on").fadeIn().css('border-bottom','4px solid #337ab7');
                 // nav.removeClass("fixar-menu-header-off");

              }
        });
            /*-------------------------------*/
            
            
            
    </script>
            
            


    

    
</body>
</html>
