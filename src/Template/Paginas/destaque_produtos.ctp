

            <div class='row fill'> 
                <div class='container'>
                <div id='bg_sub_menus' class='col-sm-3'> 
                <div id='menu_categorias' class='col-xs-12 col-sm-12'>
                    <div class='text-center'>
                        <h3>Categorias</h3>

                    </div>

                    <ul class='list-group  wow flipInX'>
                        <li class='list-group-item'><?= $this->Html->link('Aniversários', '#') ?></li>
                        <li class='list-group-item'><?= $this->Html->link('Batizados', '#') ?></li>
                        <li class='list-group-item'><?= $this->Html->link('Casamentos', '#') ?></li>
                        <li class='list-group-item'><?= $this->Html->link('Dentistas', '#') ?></li>
                        <li class='list-group-item'><?= $this->Html->link('Festas', '#') ?></li>
                        <li class='list-group-item'><?= $this->Html->link('Inaugurações', '#') ?></li>




                    </ul>
                </div>
                      <div id='menu_produtos' class='col-xs-12 col-sm-12'>
                    <div class='text-center'>
                        <h3>Produtos</h3>

                    </div>

                        <ul class='list-group  wow flipInX'>
                            <li class='list-group-item'><?= $this->Html->link('Adesivos', '#') ?></li>
                            <li class='list-group-item'><?= $this->Html->link('Banners', '#') ?></li>
                            <li class='list-group-item'><?= $this->Html->link('Cardápios', '#') ?></li>

                            <li class='list-group-item'><?= $this->Html->link('Cartões', '#') ?></li>
                            <li class='list-group-item'><?= $this->Html->link('Flyers', '#') ?></li>
                            <li class='list-group-item'><?= $this->Html->link('Folhinhas', '#') ?></li>
                            <li class='list-group-item'><?= $this->Html->link('Imãs de Geladeira', '#') ?></li>

                            <li class='list-group-item'><?= $this->Html->link('Talões', '#') ?></li>




                        </ul>
                     </div>
                    
            </div><!--bg_sub_menus-->

                <div class='produtos_destaque col-xs-12 col-sm-9'>
                    <div class='text-center'>
                        <h3>Destaque</h3>
                    </div>

                    <!------------------------>
                    <div class='col-xs-12 col-md-4 thumbnail text-center wow fadeInRight'  data-wow-delay='0.4s'>
                        <figure>
                            <?= $this->Html->image('produtos/cartao_250g_4x0.jpg') ?>
                            <div>
                                <h4>Cartões</h4>
                                <p>Cartões de Visita</p>



                            </div>

                        </figure>
                        <p>R$80,00</p>
                        <?= $this->Html->link('Cartões', '/produtos/cartoes', ['class' => 'btn btn-primary']) ?>
                    </div><!--produtos-->

                    <!------------------------>
                    <div class='col-xs-12 col-md-4 thumbnail text-center  wow fadeInRight'  data-wow-delay='0.6s'>
                        <figure>
                            <?= $this->Html->image('produtos/flyer_90g_4x4_10x14cm.jpg') ?>
                            <div>
                                <h4>Flyers</h4>
                                <p>Flyers, Panfletos e Folders</p>



                            </div>

                        </figure>
                        <p>R$120,00</p>
                        <?= $this->Html->link('Flyers', '/produtos/flyers', ['class' => 'btn btn-primary']) ?>
                    </div><!--produtos-->

                    <!------------------------>
                    <div class='col-xs-12 col-md-4 thumbnail text-center  wow fadeInRight'  data-wow-delay='0.7s'>
                        <figure>
                            <?= $this->Html->image('produtos/ima_corte_reto_manta_total_4x5cm.jpg') ?>
                            <div>
                                <h4>Imãs de Geladeira</h4>
                                <p>Imãs de Geladeira e Lembrancinhas</p>



                            </div>

                        </figure>
                        <p>R$90,00</p>
                        <?= $this->Html->link('Imãs de Geladeira', '/produtos/imas', ['class' => 'btn btn-primary']) ?>
                    </div><!--produtos-->




                    <!------------------------>
                    <div class='col-xs-12 col-md-4 thumbnail text-center wow fadeInRight'  data-wow-delay='0.4s'>
                        <figure>
                            <?= $this->Html->image('produtos/adesivos_couche_3x3cm.jpg') ?>
                            <div>
                                <h4>Adesivos</h4>
                                <p>Adesivos</p>



                            </div>

                        </figure>
                        <p>R$80,00</p>
                        <?= $this->Html->link('Adesivos', '/produtos/cartoes', ['class' => 'btn btn-primary']) ?>


                    </div><!--produtos-->

                    <!------------------------>
                    <div class='col-xs-12 col-md-4 thumbnail text-center  wow fadeInRight'  data-wow-delay='0.6s'>
                        <figure>
                            <?= $this->Html->image('produtos/talao_1x0_50x2_7x10cm_auto_copiativo.jpg') ?>
                            <div>
                                <h4>Talões</h4>
                                <p>Talões de Orçamento</p>



                            </div>

                        </figure>
                        <p>R$120,00</p>
                        <?= $this->Html->link('Talões', '/produtos/taloes', ['class' => 'btn btn-primary']) ?>
                    </div><!--produtos-->

                    <!------------------------>
                    <div class='col-xs-12 col-md-4 thumbnail text-center  wow fadeInRight' data-wow-delay='0.7s'>
                        <figure>
                            <?= $this->Html->image('produtos/banner_estirante_70x120cm.jpg') ?>
                            <div>
                                <h4>Banners</h4>
                                <p>Banners</p>



                            </div>

                        </figure>
                        <p>R$90,00</p>
                        <?= $this->Html->link('Banners', '/produtos/imas', ['class' => 'btn btn-primary']) ?>
                    </div><!--produtos-->

                </div><!--produtos-->
                </div><!--container-->
            </div><!--categorias row-->
