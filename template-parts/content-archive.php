<style>
    .post_thumb {
        height: 150px;
        width: 150px;
    }

    .more-link:hover {
        font-weight: bold;
    }

    h3:hover {
        text-decoration: underline;
    }
</style>



<div class="container">

    <div class="post mb-5">
        <!-- <div class="meta mb-1"><span class="date"><?php the_date(); ?></div> -->
        <div class="media">
            <img class="post_thumb" src="<?php the_post_thumbnail_url('thumbnail');  ?>" alt="image">
            <div class="media-body">
                <h3 class="title_mb-1">Title:<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3><br>
                <div class="time"></span><span class="comment"> <?php comments_number(); ?></a></div>
            </div>
            <div class="intro">
                <?php
                the_excerpt();
                ?>
            </div>
            <a class="more-link" style="color: blueviolet;" href="<?php the_permalink(); ?>">Read more &rarr; <br><br></a>
        </div>
    </div>
</div>
</div>