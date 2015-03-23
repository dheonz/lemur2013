<?php $my_query = new WP_Query('cat=63&showposts=4&orderby=rand'); ?>

<div class="grid gutter collapse600 myndaalbum-top">
    <div class="col s1of3">
        
        <p style="line-height: 25px;"><a href="/myndaalbum"><span class="cat-title"><i class="icon-camera"></i> Myndaalbúm Lemúrsins</span></a> geymir forvitnilegar ljósmyndir úr sögunnar rás. Flestar myndirnar eru frá opinberum stofnunum eða söfnum.</p>
        
    </div>
    <div class="col s2of3">
        
        <div class="grid gutter photos top">
            
            <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>     
                <div class="col s1of4">
                    <div class="myndaalbum-header-image">
                        <a class="aspect a4-3 image" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                            <?php the_post_thumbnail('sidebar'); ?>
                        </a>
                    </div>
                </div>
            <?php endwhile; ?>
            
        </div>

    </div>
</div>