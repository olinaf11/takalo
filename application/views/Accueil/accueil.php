 <!-- Hero Section Begin -->
    <section class="hero">
        <div class="container">
            <?php for ($i=0; $i<count($listObjet)/2;$i++){ ?>
                <div class="hero__slider owl-carousel">
                    <div class="hero__items set-bg" data-setbg="<?=base_url('assets/img/'.$listObjet[$i]['lien'])?>">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="hero__text">
                                    <div class="label"></div>
                                    <h2><?=$listObjet[$i]['nomObjet']?></h2>
                                    <p></p>
                                    <a href="#"><span>Echanger</span><i class="fa fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
            <?php } ?>

            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Product Section Begin -->
    <section class="product spad">
        <div class="container">
            <div class="row">
                <!-- SideBar -->
                <div class="col-lg-12 col-md-8 col-sm-8">
                    <div class="product__item">
                        <div class="product__sidebar__view">
                            <div class="section-title">
                                <h5>Listes des objets</h5>
                            </div>
                            <ul class="filter__controls">
                                <li class="" data-filter="*">Tous</li>
                                <?php foreach ($categories as $category){ ?>
                                    <li class="" data-filter=".<?=$category['nom']?>"><?=$category['nom']?></li>
                                <?php } ?>
                            </ul>
                            <div class="filter__gallery">
                                <div class="row">
                                    <?php foreach ($listObjet as $object){ ?>
                                        <div class="col-lg-6 col-md-8 cl-sm-8">
                                            <div class="product__item__pic set-bg mix <?=$object['nomCat']?>"
                                            data-setbg="<?=base_url('assets/img/'.$object['lien'])?>">
                                                <h5><a href="" style="cursor: auto; color: white" ><?=$object['nomObjet']?></a></h5>
                                            </div>
                                            <div class="product__item__text set-bg mix <?=$object['nomCat']?>">
                                                <ul>
                                                    <a href="<?=base_url('proposition?id='.$object['idObjet'])?>">
                                                        <li>Proposer</li>
                                                    </a>
                                                </ul>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- Product Section End -->

