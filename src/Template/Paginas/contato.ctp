<div class='row fill'>

        <div class='bg_title_section'>
            <h3 class='text-center'>Contato </h3>
        </div>
<div class='container'>

    
    <div id='bg_form_home' class='col-sm-12'>
    
             
    <div id='info_contato' class='col-xs-12 col-sm-12'>
      
        <p class=''><span class='glyphicon glyphicon-phone'></span> Cel.:(11) 94009-2529 </p>
        <p class=''><span class='glyphicon glyphicon-envelope'></span> contato@grafinanobairro.com.br</p>
        <p class=''><span></span>Facebook: Grafica no Bairro</p>
       
    </div>
   
             <?= $this->Form->create('form_contato', ['class'=>'form-horizontal'])?>
               
         
                     <div class='form-group col-xs-12 col-sm-6'>

                        <?= $this->Form->input('nome', ['placeholder'=>"Nome", 'label'=>false])?>

                        <?= $this->Form->input('telefone', ['placeholder'=>"Telefone", 'label'=>false])?>

                        <?= $this->Form->input('email', ["placeholder"=>"E-mail" ,'label'=>false])?>

                                             <?= $this->Form->input('Assunto', ["placeholder"=>"Assunto" ,'label'=>false])?>


                    </div>
                    <div class='form-group col-xs-12 col-sm-6'>
                                           <?= $this->Form->input('menssage', ['type'=>'textarea',  "placeholder"=>"Deixe sua menssagem", "label"=>false])?>

                          <?= $this->Form->input('Como_conheceu', ["type"=>"select", "class"=>"col-sm-8", 'placeholder'=>"website", 'label'=>['class'=>'col-sm-4', 'text'=>"Como nos conheceu?"],
                                
                             "options"=>[ 
                                 ""=>"selecione uma opção",
                                 "face"=>"Facebook",
                                 "google"=>"Google",
                                 "twitter"=>"Twitter",
                                 "indicação"=>"Indicação",

                                 "outros"=>"outros",


                                 ]
                             ])?>




                    </div>
        
        
                      <?= $this->Form->button('enviar', ["type"=>"submit",  "class"=>"center-block btn btn-default "])?>
        
        



    

    
 </div>

         

</div>
</div> 
