    <ul id="footer">
        <li>
		<?php wp_nav_menu(array(
                'theme_location'  => 'main_menu',
                'menu_class'      => 'footer-navigation',
                'container'       => false
            )); ?>
        </li>
        <li>© Copyright <?php echo date('Y')?></li>
    </ul>
    </ul>
		<?php wp_footer(); ?>
</div>
</body>
</html>