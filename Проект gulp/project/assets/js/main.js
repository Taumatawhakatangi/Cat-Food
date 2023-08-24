$(function () {
    // Слайдер
    $('.instructions__list').slick({
        infinite: true,
        slidesToShow: 4,
        slidesToScroll: 1,
        speed: 300,
        // arrows: false,
        // prevArrow: '<button class="instructions__arrow instructions__arrow_left"> <img src="assets/img/arrow-paw-left.svg" alt=""></button>',
        // nextArrow: '<button class="instructions__arrow instructions__arrow_right"> <img src="assets/img/arrow-paw-right.svg" alt=""></button>',
        centerMode: false,
        draggable: true,
        focusOnSelect: true,
        // добавил свойство, которое разрешает элементу слайдера менять ширину в зависимости от нашего желания(настройка в css)
        // variableWidth: true,
        responsive: [
            {
              breakpoint: 1400,
              settings: {
                slidesToShow: 3,
                slidesToScroll: 1,
                infinite: true,
              }
            },
            {
            breakpoint: 992,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
                infinite: true,
            }
            },
            {
            breakpoint: 768,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: true,
            }
            },
        ]
    });


    // Кот до и после

    $(function(){
        $("#weight-results").twentytwenty({
            no_overlay: true,
            before_label: 'January 2017',
            after_label: 'March 2017' 
        });
    });


    // Бургер меню 

    $('.burger').click(function() {
        $('.burger span').toggleClass('active');
        $('.burger').toggleClass('active');
      })




















}) // END JQUERY






 
























