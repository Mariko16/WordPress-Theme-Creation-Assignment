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

        .search label {
            color: blanchedalmond;
        }

        .search button {
            padding: 6px 10px;
            margin-top: 8px;
            background: #ddd;
            font-size: 17px;
            border: solid;
            cursor: pointer;
        }

        .search button:hover {
            font-weight: bold;
        }

        .search input {
            padding: 6px 10px;
            margin-top: 8px;
            font-size: 17px;
            border: solid;
            cursor: pointer;
        }

        .footnav_padding {
            display: flex;
            gap: 20px;
            align-items: center;
            justify-content: center;
            vertical-align: middle;
            color: blanchedalmond;
        }

        .footnav_padding a {
            color: black;
        }

        .nav-links a,
        .nav-links span {
            padding: 10px 10px;
        }

        .nav-links a,
        .nav-links span:hover {
            text-decoration: underline;
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
                        'items_wrap' => '<ul id="" class="footnav_padding">%3$s</ul>'
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