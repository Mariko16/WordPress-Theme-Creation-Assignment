<!DOCTYPE html>
<html>

<head>


    <style>
        body {
            text-align: center;
        }

        .header_title {
            text-align: center;
            padding: 5% 10%;
            backdrop-filter: blur(15px);
            /* Control the size of blurred area */
            padding: 2% 50%;
        }

        .big_img {
            background-image: url("https://img.freepik.com/premium-photo/internationalcoffeeday_148391-11183.jpg");
            background-size: cover;
            background-position: center;
            height: 400px;
            width: 100%;
            /* Adjust the height as needed */
            color: white;
            /* Adjust text color for better visibility */
            text-align: center;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        h3 {
            margin: 0;
            padding: 0;
        }

        h3,
        p,
        a {
            text-decoration: none;
            color: black;
            font-family: PT Sans, sans-serif;
        }

        .topic_title {
            text-align: center;
            padding: 20% 10%;

        }

        .background_pic {
            background-image: url("https://muffingroup.com/blog/wp-content/uploads/2021/07/photo-1507133750040-4a8f57021571-1.jpg");
            background-size: cover;
            background-position: center;
            height: 200px;
            width: 20%;
            color: white;
            text-align: left;
            display: flex;
            align-items: center;
            justify-content: center;
            background-repeat: no-repeat;
            padding: 4%;
            display: block;
            margin-left: auto;
            margin-right: auto;
        }

        span a:hover {
            font-weight: bold;
        }

        body {
            text-align: center;
        }

        .top_nav {
            overflow: hidden;
            background-color: black;

        }

        .top_nav a,
        .auto_logo {
            float: left;
            color: beige;
            text-align: center;
            padding-right: 5%;
            /* padding: 20px 20px; */
            text-decoration: none;
            /* font-size: 17px; */
        }

        .top_nav a:hover {
            font-weight: bold;
        }
    </style>
</head>

<body>

    <nav class="top_nav">
        <li>
            <ul class="menu">
                <?php
                if (function_exists('the_custom_logo')) {
                    $custom_logo_id = get_theme_mod('custom_logo');
                    $logo = wp_get_attachment_image_src($custom_logo_id);
                }

                ?>

                <img class="auto_logo" src="<?php echo $logo[0] ?>" alt="logo" style="height: 100px; width: 100px;">

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

            </ul>

    </nav>

    <header class="big_img" id="big_img_homepage">
        <div class="header_title">
            <span class="title" style="font-size:90px"><?php the_title(); ?></span>
        </div>
    </header>
</body>

</html>