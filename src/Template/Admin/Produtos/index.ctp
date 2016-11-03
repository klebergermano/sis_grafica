<nav class='nav_lateral'>
    <ul>
        <li class='title_nav'>Menu Produtos</li>        
        
        <li><?= $this->Html->link("<< Painel", ["action"=>"../painel"])?></li>

    </ul>
      

    
</nav>
<diva class='paginas'>
 
    
    <h2 class='title_page'>Produtos</h2>
   <table class='tables table_categoria_produtos'>
       <thead>
        
         <th scope="col"></th>

         <th scope="col"><?= $this->Paginator->sort('categoria') ?></th>
         
         <th scope="col"><?= $this->Paginator->sort('Descrição') ?></th>

     
        <th>Acessar Produtos</th>

       </thead>
       <tbody>
          
           <tr>
               <td><?= $this->Html->image('admin/adesivos_ico.png')?></td>
           
               <td>Adesivos</td>
               <td>Adesivos comuns, carros e vidros</td> 

               <td><?= $this->Html->link('Acessar Produtos', ['action'=>'../adesivos']) ?></td> 
           </tr>
           <tr>
               <td><?= $this->Html->image('admin/banners_ico.png')?></td>
               <td>Banners</td>  
               <td>Banners e Faixas</td>
               <td><?= $this->Html->link('Acessar Produtos', ['action'=>'../banners']) ?></td> </tr>
           <tr>
               <td><?= $this->Html->image('admin/cardapios_ico.png')?></td>
               <td>Cardápios</td>      
               <td>Cardápios em Geral</td> 
               <td><?= $this->Html->link('Acessar Produtos', ['action'=>'../cardapios']) ?></td> </tr>
           <tr>
               <td><?= $this->Html->image('admin/cartazes_ico.png')?></td>
               <td>Cartazes</td>                             
               <td>Cartazes e Pôsters</td> 
               <td><?= $this->Html->link('Acessar Produtos', ['action'=>'../cartazes']) ?></td> </tr>
           <tr>
               <td><?= $this->Html->image('admin/cartoes_ico.png')?></td>
               <td>Cartões</td>
               <td>Cartões de Visita e Mini Cartões</td> 
               <td><?= $this->Html->link('Acessar Produtos', ['action'=>'../cartoes']) ?></td> </tr>
           <tr>
               <td><?= $this->Html->image('admin/flyers_ico.png')?></td>
               <td>Flyers</td>
               <td>Flyers, Folders e Panfletos</td> 
               <td><?= $this->Html->link('Acessar Produtos', ['action'=>'../flyers']) ?></td> </tr>
           <tr>
               <td><?= $this->Html->image('admin/folhinhas_ico.png')?></td>
               <td>Folhinhas de Parede</td>
               <td>Folhinhas de Parede em Geral</td> 
               <td><?= $this->Html->link('Acessar Produtos', ['action'=>'../folhinhas_parede']) ?></td> </tr>
           <tr>
               <td><?= $this->Html->image('admin/imas_ico.png')?></td>
               <td>Imãs de Geladeira</td>
               <td>Imãs de Geladeira e Lembrancinhas</td> 
               <td><?= $this->Html->link('Acessar Produtos', ['action'=>'../imas']) ?></td> </tr>
           <tr>
               <td><?= $this->Html->image('admin/taloes_ico.png')?></td>
               <td>Talões</td>
               <td>Talões de Orçamento</td> 
               <td><?= $this->Html->link('Acessar Produtos', ['action'=>'../taloes']) ?></td> </tr>





 
           
           
        <!--
           <?php foreach($categoriaProdutos as $categoriaProdutos): ?>
           <tr>
                                    
    
               <td><?= $this->Html->link($categoriaProdutos->name, ["action"=>"../".$this->text->transliterate($categoriaProdutos->name)]) ?></td>             
               <td><?= $categoriaProdutos->descricao ?></td>            
               <td><?= h($categoriaProdutos->created->format("d/m/Y H:m:s")) ?></td>
               <td><?= $this->Html->link("Acessar Produto >>", ["action"=>"../".$this->text->transliterate($categoriaProdutos->name)]) ?></td>


           </tr>
           <?php endforeach?>
           
        -->
       </tbody>
   </table>
</div>
<?php
