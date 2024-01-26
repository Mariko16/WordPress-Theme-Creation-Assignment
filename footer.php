<!DOCTYPE html>
<html>

<head>
    <style>
        .foot {
            text-align: center;
            padding-right: 5%;
            padding: 20px 20px;
            text-decoration: none;
            font-size: 17px;
            color: aliceblue;
        }

        .footer-content-wrapper a:hover {
            font-weight: bold;
        }

        .footer-content-wrapper {
            background-color: blanchedalmond;
        }

        .search {
            text-align: center;
        }
    </style>
</head>

<body>
    <footer>
        <div class="footer-content-wrapper">
            <div class="foot">
                <?php
                wp_nav_menu(
                    array(
                        //'menu' => 'primary',
                        'container' => false,
                        'theme_location' => 'primary',
                        'menu_class' => 'nav navbar-nav',
                        'items_wrap' => '<ul id="" class="topnav_padding">%3$s</ul>'
                    )
                );
                ?>

            </div>
            <div class="search">
                <?php
                dynamic_sidebar('footer-1');
                ?>
            </div>
            <br>
    </footer>
    <?php wp_footer(); ?>
</body>

</html>