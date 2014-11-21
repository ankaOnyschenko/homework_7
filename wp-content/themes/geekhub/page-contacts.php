<?php
/*
	Template Name: ЗВ‘ЯЗОК
*/
?>
<?php get_header(); ?>
	<div id="content">
        <div class="contacts">
            <h2>Зв’язок</h2>
            <dl>
                <dt class="map">
                    <h3>Заходьте</h3>
                </dt>
                <dd class="map"><div id="map" style="width:382px; height:287px"></div></dd>
                <dt class="follow">
                    <h3>Слідкуйте</h3>
                </dt>
                <dd>
                    <ul>
                        <li class="fb"><a href="http://www.facebook.com/pages/GeekHub/158983477520070">facebook</a></li>
                        <li class="vk"><a href="http://vkontakte.ru/geekhub">vkontakte</a></li>
                        <li class="tw"><a href="http://twitter.com/#!/geek_hub">twitter</a></li>
                    </ul>
                </dd>
                <dt>
                    <h3>Пишіть</h3>
                </dt>
                <dd>
                    <img src="<?php bloginfo('template_url') ?>/images/email.png" alt="email"/>
                </dd>
                <dd>Перед тим як писати, ознайомтесь <br>із <a href="http://geekhub/?page_id=18" >сторінкою ПОПУЛЯРНИХ ПИТАНЬ</a></dd>

            </dl>
        </div>
	</div>
<?php get_footer(); ?>