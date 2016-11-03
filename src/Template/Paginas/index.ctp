     

<div id='conteudo_home' >
    <div class='slide container-fluid '>

        <div class='row'>
            <div id='carousel' class='carousel slide' data-ride="carousel">
                <div  class='carousel-inner' role='listbox'>

                    <div class='item active'><?= $this->Html->image("slide/a01.jpg", ['class' => 'fullscreen']) ?></div>
                    <div class='item'><?= $this->Html->image("slide/b01.jpg", ['class' => 'fullscreen']) ?></div>
                    <div class='item'><?= $this->Html->image("slide/c01.jpg", ['class' => 'fullscreen']) ?></div>
                    <div class='item'><?= $this->Html->image("slide/d01.jpg", ['class' => 'fullscreen']) ?></div>


                </div>


                <a href='#carousel' class='left carousel-control' data-slide='prev'><span class='glyphicon glyphicon-chevron-left'></span></a>
                <a href='#carousel' class='right carousel-control' data-slide='next'><span class='glyphicon glyphicon-chevron-right
                                                                                           glyphicon glyphicon-plus-'></span></a>

            </div>


        </div>
    </div><!--slide-->

    <main class='container-fluid'>
        <section id='destaque_produtos'>
        <?php require_once "destaque_produtos.ctp"; ?>
        </section>

    </main>
 <div>
    <section id='servicos' class='container-fluid section_home'>
        
            <?php require_once "servicos.ctp"; ?>

    </section><!--container-->
        
 </div>
<div>
    <section id='portfolio' class='container-fluid section_home'>
        <?php require_once "portfolio.ctp"; ?>

    </section><!--container-->

    <section id='sobre' class='container-fluid section_home'>
        <?php require_once "sobre.ctp"; ?>

    </section><!--container-->

    <section id='contato' class='container-fluid section_home'>
        <?php require_once "contato.ctp"; ?>

    </section><!--container-->


</div><!--conteudo_home-->




