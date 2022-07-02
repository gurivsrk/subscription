// $(window).on('load',()=>{
//   $('#preloader').fadeOut();
// })
// $('.toggle-child').on('click',function(){
//     const id =	$(this).data('id');
//     $('#'+id).show();
// });

$('.close').on('click',function(){
    const id =	$(this).data('id');
    $('#'+id).hide();
});

// $('#myTab a').on('click', function (e) {
//   e.preventDefault()
//   $(this).tab('show')
// })

// $('.more-btn').on('click',function(){
//     $(this).toggleClass('type-more type-back').parent().prev().toggleClass('load-more load-less');
//     $(this).children('i').toggleClass('fa-angle-left fa-angle-right');
//     $('.type-see').toggleClass('invisible visible');
// })

////// fixed header

  const header = document.getElementById('navbar-main');
  const sticky = header.offsetTop;
  
  $(window).on('scroll',()=>{
    $scrolll()
  })

  const $scrolll = ()=>{
    if(window.pageYOffset > (sticky+150))  header.classList.add('fixed-top')
    else header.classList.remove('fixed-top')
  }

  $scrolll()


  $(document).ready(function(){

    
  $('.activ-testimonai').slick({
    dots: false,
    arrows: true,
    infinite: true,
    speed: 300,
    slidesToShow: 2,
    slidesToScroll: 1,
    prevArrow: '<button type="button" class="slick-prev"><i class="fas fa-arrow-left"></i></button>',
    nextArrow: '<button type="button" class="slick-next"><i class="fas fa-arrow-right"></i></button>',
    centerMode: true,
    centerPadding: '0',
    responsive: [{
        breakpoint: 1024,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
          infinite: true,
          dots: false,
        }
      },
      {
        breakpoint: 992,
        settings: {
          slidesToShow: 1,
          arrows: false,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 767,

        settings: {
          slidesToShow: 1,
          arrows: false,
          slidesToScroll: 1
        }
      }
    ]
  });

  $('.acitv-testimonail-3').slick({
    dots: false,
    arrows: false,
    infinite: true,
    speed: 300,
    slidesToShow: 1,
    slidesToScroll: 1,
    centerMode: true,
    centerPadding: '0',
    prevArrow: '<button type="button" class="slick-prev"><i class="fal fa-arrow-left"></i></button>',
    nextArrow: '<button type="button" class="slick-next"><i class="fal fa-arrow-right"></i></button>',
    responsive: [{
        breakpoint: 1024,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          infinite: true,
          dots: false,
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
    ]
  });

    $("input[type='email']").on('blur',function(){
        let $this = $(this), email = $this.val()
          if(!validator.isEmail(email)){
            $this.next('.error').text('*Please enter valid email....')
            return $(".btn-form").attr('disabled','disabled')    
          }
          $this.next('.error').text('')
        $(".btn-form").removeAttr('disabled')
    }) 

    
  

  });