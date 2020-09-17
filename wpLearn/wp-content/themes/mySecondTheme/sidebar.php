<div class="sidebar_right">
    <!-- <div class="right_sidebar">
        <h2 class="wid_heading">Sidebar Heading</h2>
        <ul>
            <li><a href="#">Sidebar Link</a></li>
            <li><a href="#">Sidebar Link</a></li>
            <li><a href="#">Sidebar Link</a></li>
            <li><a href="#">Sidebar Link</a></li>
        </ul>

    </div> -->

    <?php if (is_active_sidebar('main_sidebar')) : ?>
        <?php dynamic_sidebar('main_sidebar'); ?>
    <?php endif; ?>

</div>