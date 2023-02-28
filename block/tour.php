<section class="grey_section">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h2 class="block-header text-center to_animate" data-animation="slideUp">Наши Одежды</h2>
                    <p class="text-center">
                        
                    </p>
                </div>
            </div>
        </div>
        

            <div class="owl-carousel owl-items-5 latest-works">
            <?php $tour= get_tour();?>
<?php foreach($tour as $tr): ?>
                <div class="owl-carousel-item portfolio_item_image">
                    <div class="portfolio_links">  
                        <img src="<?=$tr['image']?>" alt="" style="width: 263px;height: 184px;">
                    </div>
                    <div>
                        <h3><a href="blog-single.php?tr_id=<?=$tr['id']?>"><?=$tr['title']?></a></h3>
                        <p><?=$tr['price']?> USD</p>
                        <div class="entry-share">
                            <p class="text-center">
                                <a class="btn-default btn1" data-animation="slideUp" href="blog-single.php?tr_id=<?=$tr['id']?>">Подробнее</a>
                            </p>
                        </div>
                    </div>

                </div>
                    <?php endforeach;?>
                

            </div> <!-- eof owl-carousel -->


    </section>