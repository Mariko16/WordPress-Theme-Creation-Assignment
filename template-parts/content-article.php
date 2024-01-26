<head>
    <style>
        .date {
            background-color: aquamarine;
            width: 200px;
            height: 200px;
            position: relative;
            padding: 10px;
            box-sizing: border-box;
            border-radius: 15px;
        }

        .tag_names {
            text-align: center;
            list-style-type: none;
            padding: 20px 20px;
        }
    </style>
</head>



<br><br>
<div class="container">
    <header class="container_header">
        <div class="meta mb-3">
            <span class="date"><?php the_date(); ?></span>
            <div class="tag_names">

                <?php
                $my_tags = get_the_tags();
                $count = 0;
                foreach ($my_tags as $my_tag) {
                    if ($count != 100) { ?>
                        <li>
                            <a href="<?php echo get_tag_link($my_tag->term_id); ?>">
                                <?php echo $my_tag->name ?>
                            </a>
                        </li>
                <?php }
                    $count++;
                }
                // the_tags('<span class="tag"><i class="fa fa-tag"></i>', '</span><span class="tag"><i class="fa fa-tag"></i>', '</span>');
                ?>

            </div>
            <div><span class="comment"><a href="#comments"><i class="fa fa-comment"></i><?php comments_number(); ?></a></span></div>
        </div>
    </header>

    <?php
    the_content();
    ?>

    <?php
    comments_template();

    ?>


</div>