<div class='row fill'> 
       <div class='bg_title_section'>
            <h3 class='text-center'>Serviços</h3>
        </div>

    <div class='container'>
     
          <!--****************************************
                        WEBSITES
        *******************************************-->
        

        <div class='b_servicos col-sm-6  wow fadeInDown' data-wow-delay='0.7'>
            <div class='bg_img'><?= $this->Html->image("http://artedosite.com.br/wp-content/uploads/2015/11/icone-sites1.png?79724a") ?></div>
            <div class='bg_info'>
                <h4>Websites</h4>

                <p>Para os que buscam fixar sua marca na internet um site é a melhor opção.
                nós ajudamos a sua empresa a expandir essa fronteira de acesso, 
                conte com a gente para sites Dinâmicos e Estáticos</p>
               <a id="btn-websites" class='btn btn-default' href="#content-websites">Saiba Mais</a>

            </div>
        </div>
               
        <!---Content websites------------>
        <div id="content-websites" class='content_servicos'>
            <!--"THIS IS IMPORTANT! to close the modal, the class name has to match the name given on the ID-->
            <div  id="btn-close-modal" class="close-content-websites"> 
                CLOSE MODAL
            </div>
            
           
            <div class="modal-content">
                <h3>Websites<h3>

                <!--Your modal content goes here-->
                Atualmente ter uma página na internet se tornou algo indispensável para 
                empresas de todos os tamanhos: grande, médio ou pequeno porte. Esta ferramenta possibilita 
                comunicação junto ao seu cliente sobre os seus produtos e serviços, apresentando seus diferenciais,
                além de ser um dos meios mais eficientes e baratos de atrair clientes estando disponível 24 horas por dia, 
                7 dias por semana, incluindo os sábados, domingos e feriados. O site serve para expandir suas fronteiras 
                de acesso, serve para prestar informações sobre seus produtos e serviços, informar as novidades, complementar 
                a mídia normal, criar serviços on-line para resolver dúvidas de seus clientes, vender pela Internet e muito
                mais, pois o limite está apenas na nossa imaginação.

Sites Personalizados.
Pacote com Site completo, inclui um ano de domínio e hospedagem, até 7 páginas em formato A4 fonte 12pt mais header personalizado a partir de R$1049,00.
Site Dinâmico
Sites com gerenciador de comteudo integrado, onde as alterações poderão ser realizadas pela própria empresa; Sem custos com web designer para alterações nos conteúdos do site; Design profissional; Informações armazenadas em banco de dados; Fácil administração do site protegida por senha;
Sites Responsivos.
Layouts Adaptáveis a dispositivos móveis! com uma melhor vizualização e interação com o cliente!
            </div>
        </div>
    
    

  <!--****************************************
                     Logotipos
        *******************************************-->


        <div class='b_servicos  col-sm-6 wow fadeInDown' data-wow-delay='0.7'>
            <div class='bg_img'><?= $this->Html->image("http://www.fazerlogomarca.com.br/wp-content/uploads/2013/10/fazer_logomarca.jpg", ["class" => "img-circle"]) ?></div>
            <div class='bg_info'>
                <h4>Logotipos</h4>

                <p>Invista no logotipo da sua empresa e destaque a qualidade do seu negócio.</p>
            
                <a id="btn-logotipos"  class='btn btn-default' href="#content-logotipos">Saiba Mais</a>

            </div>
        </div>

    <!--Content Logotipos-->
        <div id="content-logotipos" class='content_servicos'>
            <!--"THIS IS IMPORTANT! to close the modal, the class name has to match the name given on the ID-->
            <div  id="btn-close-modal" class="close-content-logotipos"> 
                CLOSE MODAL
            </div>
            
            <div class="modal-content">
                <h3>Logotipos<h3>

                <!--Your modal content goes here-->
            </div>
        </div>

    <!-------------------------------------------------------------------------------------------------------------->
        
    
        
        
        <div class='b_servicos  col-sm-6 wow fadeInDown' data-wow-delay='0.7'>

            <div class='bg_img'><?= $this->Html->image("http://static2.bigstockphoto.com/thumbs/2/9/8/large1500/89200817.jpg", ['class' => 'img-circle']) ?></div>
            <div>
                <h4>Banners e Flyers Digitais</h4>

                <p>Ideal para alavancar seus anúncios online Banners e Flyers bem acabados e com a personalidade 
                    da sua empresa destacam o que seu negócio tem de melhor</p>
                <a id="banners-digitais"  class='btn btn-default' href="#content-banners-digitais">Saiba Mais</a>

            </div>
        </div>
        
                
        <!--Banners-Digitais-->
        <div id="content-banners-digitais" class='content_servicos'>
            <!--"THIS IS IMPORTANT! to close the modal, the class name has to match the name given on the ID-->
            <div   class="btn-close-content close-content-banners-digitais"> 
                X
            </div>
            
            <div class="modal-content">
                <h3>Banners e Flyers Digitais<h3>
                <!--Your modal content goes here-->
            </div>
        </div>
      
    <!-------------------------------------------------------------------------------------------------------------->
      



        <div class='b_servicos  col-sm-6 wow fadeInDown' data-wow-delay='0.7'>

            <div class='bg_img'><?= $this->Html->image("restauracao_foto_icone.jpg", ['class' => 'img-circle']) ?></div>
            <div>
                <h4>Restauração de Fotos</h4>

                <p> Fotos Riscadas e Danificadas com o tempo ainda tem salvação!</p>
                <a id="btn-flyers-digitais"  class='btn btn-default' href="#content-flyers-digitais">Saiba Mais</a>

            </div>
        </div>

        <!--Content Logotipos-->
        <div id="content-flyers-digitais" class='content_servicos'>
            <!--"THIS IS IMPORTANT! to close the modal, the class name has to match the name given on the ID-->
            <div  id="btn-close-modal" class="close-content-flyers-digitais"> 
                CLOSE MODAL
            </div>
            
            <div class="modal-content">
                <h3>Logotipos<h3>

                <!--Your modal content goes here-->
            </div>
        </div>
    <!-------------------------------------------------------------------------------------------------------------->


    </div>
</div>

<script>
            
    $("#banners-digitais").animatedModal({ modalTarget:'content-banners-digitais'});
    $("#btn-websites").animatedModal({ modalTarget:'content-websites'});
    $("#btn-logotipos").animatedModal({ modalTarget:'content-logotipos'});
    $("#btn-flyers-digitais").animatedModal({ modalTarget:'content-flyers-digitais'});




</script>