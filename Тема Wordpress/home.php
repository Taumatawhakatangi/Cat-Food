<?php
/*
Template Name: catfood-home

*/
?>
<?php get_header();?>

	<div class="main">
        <section class="animal-weight" id="animal-weight">
          <div class="container"> 
            <div class="animal-weight__list">
              <div class="animal-weight__wrapper">
                <div class="animal-weight__head"> <span class="animal-weight__icon"><img src="<?php bloginfo('template_url');?>/assets/img/Cat.svg" alt="Cat"></span>
                  <h3 class="animal-weight__title">похудение     </h3>
                </div>
                <p class="animal-weight__info">Ваш кот весит больше собаки и почти утратил способность лазить по деревьям? Пора на диету! Cat Energy Slim поможет вашему питомцу сбросить лишний вес.</p><a class="animal-weight__link" href="#">каталог slim</a>
              </div>
              <div class="animal-weight__wrapper">
                <div class="animal-weight__head"> <span class="animal-weight__icon animal-weight__icon_jaguar"><img src="<?php bloginfo('template_url');?>/assets/img/Jaguar.svg" alt="Cat"></span>
                  <h3 class="animal-weight__title">набор массы     </h3>
                </div>
                <p class="animal-weight__info">Заработать авторитет среди дворовых котов и даже собак?Серия Cat Energy Pro поможет вашему коту нарастить необходимые мышцы!</p><a class="animal-weight__link" href="#">каталог pro</a>
              </div>
            </div>
          </div>
        </section>
        <section class="instructions" id="instructions">
          <div class="container"> 
            <h2 class="instructions__title section-title">Как это работает</h2>
          </div>
          <div class="instructions__container"> 
            <div class="instructions__list">
            	<?php
            	$loop = CFS()->get('slider');
            	foreach ($loop as $row) {
            		?>
            		<div class="instructions__item">
		                <div class="instructions__inner">
		                	<span class="instructions__icon">
		                		<img src="<?= $row['slider-icon'] ?>" alt="">
		                	</span>
		                	<span class="instructions__text">
		                		<?= $row['slider-text'] ?>
		                	</span>
		                	<span class="instructions__counter">
		                		<?= $row['slider-count'] ?>
		                	</span>
		                </div>
	              	</div>
            		<?php
            	}
            	?>
            </div>
          </div>
        </section>
        <section class="result" id="result">
          <div class="container">
            <h2 class="section-title">Живой пример</h2>
          </div>
          <div class="result__info">
            <div class="container">
              <p class="result__description">Борис сбросил 5 кг за 2 месяца, просто заменив свой обычный корм на Cat Energy Slim. Отличный результат без изнуряющих тренировок! При этом он не менял своих привычек и по-прежнему спит по 16 часов в день. Борис даже стал другой породой черт возьми!</p>
              <div class="result__data">
                <div class="result__item"> <span class="result__quantity result__quantity_weight">5 КГ  </span><span class="result__subtitle result__subtitle_weight">снижение веса</span></div>
                <div class="result__item"> <span class="result__quantity result__quantity_days">60 ДНЕЙ  </span><span class="result__subtitle result__subtitle_days">затрачено времени</span></div>
              </div>
              <div class="result__price-wrapper">
                <h3 class="result__price-title">Затраты на питание: </h3><span class="result__price">15 000 РУБ.</span>
              </div>
            </div>
            <div class="weight-results" id="weight-results"><span class="weight-results__text weight-results__before">БЫЛО</span><span class="weight-results__text weight-results__after">СТАЛО</span><img src="<?php the_field('cat-before');?>" alt="cat-before"><img src="<?php the_field('cat-after');?>" alt="cat-after"></div>
          </div>
        </section>
        <section class="map" id="map"> 
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1998.6259753053785!2d30.320987461617086!3d59.938348329687386!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4696310fca145cc1%3A0x42b32648d8238007!2z0JHQvtC70YzRiNCw0Y8g0JrQvtC90Y7RiNC10L3QvdCw0Y8g0YPQuy4sIDE5LzgsINCh0LDQvdC60YIt0J_QtdGC0LXRgNCx0YPRgNCzLCAxOTExODY!5e0!3m2!1sru!2sru!4v1691606078665!5m2!1sru!2sru" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </section>
     </div>

<?php get_footer();?> 
