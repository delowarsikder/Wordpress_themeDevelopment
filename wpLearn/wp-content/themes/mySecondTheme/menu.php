<div class="main_wrapper nav_bg">
    <div class="wrap">
        <nav>
            <div class="nav">

            <?php 
          	$args = array(
                'theme_location' => 'main_menu'
            );

            wp_nav_menu($args);?>
                <!-- <ul>
                    <li><a href="#">Menu_1</a></li>
                    <li><a href="#">Menu_2</a></li>
                    <li><a href="#">Menu_3</a></li>
                    <li><a href="#">Menu_4 &raquo;</a>
                        <ul>
                            <li><a href="#">Drop down</a></li>
                            <li><a href="#">Drop down &raquo</a>
                                <ul>
                                    <li><a href="#">Sub dropdown</a></li>
                                    <li><a href="#">Sub dropdown</a></li>
                                    <li><a href="#">Sub dropdown</a></li>
                                    <li><a href="#">Sub dropdown</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Drop down</a></li>
                            <li><a href="#">Drop down</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Menu_5</a></li>
                </ul> -->
            </div>
        </nav>
    </div>
</div>

