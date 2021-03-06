$(function () {
    $('[data-toggle="tooltip"]').tooltip()
})

$(document).ready(function () {
    $('.main-slider-class').slick({
        autoplay: true,
        autoplaySpeed: 5000,
        arrows: false,
        dots: true
    });

    $('.item-detail-slider').slick({
        autoplay: false,
        autoplaySpeed: 5000,
        arrows: true,
        prevArrow: $('.prev'),
        nextArrow: $('.next'),
        dots: true
    });

    $('#footer-form-phone').mask('+00 (000) 000 0000');

    $('#login-register').click(function() {
        $('#login-popup').fadeIn(300);
      });

    $('.popup-close').click(function() {
        $(this).parent().parent().fadeOut(300);
      });

    $("#open").click(function() {
    $("#thanks-popup").fadeIn(300);
  });

  $("#close").click(function() {
    $("#thanks-popup").fadeOut(300);
  });


  $('.add').click(function() {
    var number = parseInt($(this).parent().find('input').val());
    if (number < 9) {
        $(this).parent().find('input').val(number + 1);
    }
  });
  $('.minus').click(function() {
    var number = parseInt($(this).parent().find('input').val());
    if (number > 1) {
        $(this).parent().find('input').val(number - 1);
    }
  });



  $('.right-img').click(function() {
    $(this).addClass('right-img-checked');
    $('.right-img').not($(this)).each(function() {
        $(this).removeClass('right-img-checked');
    });

    var radio = "";
    radio += $(this).attr("to");
    $(radio).prop('checked', true);     
  });
});


function burgerToggle() {
    document.getElementById('burger-toggler').classList.toggle('closed');
    document.getElementById('top-nav-links').classList.toggle('opened');
    document.getElementById('body').classList.toggle('burger-open');
}

function showCart() {
    if ($(window).width() > 1199) {
        document.getElementById('idcart').style.display = 'block';
    }   
}

function closeCart() {
    document.getElementById('idcart').style.display = 'none';
}

function showSubs(thisID) {
    document.getElementById('shoes-subcategories').style.display = 'none';
    document.getElementById('clothes-subcategories').style.display = 'none';
    document.getElementById('equipment-subcategories').style.display = 'none';
    document.getElementById('accessories-subcategories').style.display = 'none';
    document.getElementById('sport-subcategories').style.display = 'none';
    document.getElementById('brands-subcategories').style.display = 'none';

    document.getElementById('nav-subcategories').style.display = 'block';
    document.getElementById(thisID + '-subcategories').style.display = 'flex';
}

function closeNavSubs() {
    document.getElementById('nav-subcategories').style.display = 'none';
}

$(function () {
    $('[data-toggle="tooltip"]').tooltip()
})

$(document).ready(function () {
    $('#footer-form-phone').mask('+00 (000) 000 0000');

    $('.block').click(function() {
        if (!$(this).hasClass('block-white')) {
            $(this).find('.info').slideToggle(500);

            if ($(this).hasClass('active-block')) {
                $(this).removeClass('active-block');
            } else {
                $(this).addClass('active-block');
            }
        }
      });

    $('.input-popup').click(function(event) {
        if (event.target.className == "input-popup-arrow") {
            if ($(this).hasClass('input-popup-active')) {
                $(this).removeClass('input-popup-active');

                $(this).parent().find('.input-popup-content').find('.label-2').each(function() {
                    if ($(this).find('input').prop("checked") == true) {
                        $(this).find('input').prop("checked", false);
                    }
                });

                $(this).find('span').text("");

                $(this).parent().find("#number_btn").removeClass("button-active");
                $(this).parent().find("#min-range-number").prop("disabled", true);
                $(this).parent().find("#max-range-number").prop("disabled", true);

            } else {
                $('.input-popup').not($(this)).each(function() {
                    if ($(this).hasClass('input-popup-open')) {
                        if (!$(this).is("#filter")) {
                            $(this).removeClass('input-popup-open');
                            $(this).parent().find('.input-popup-content').fadeToggle(300);
                        }
                    }
                });

                if ($(this).hasClass('input-popup-open')) {
                    $(this).removeClass('input-popup-open');
                } else {
                    $(this).addClass('input-popup-open');
                }

                $(this).parent().find('.input-popup-content').fadeToggle(300);
            }

        } else {
            $('.input-popup').not($(this)).each(function() {
                if ($(this).hasClass('input-popup-open')) {
                    if (!$(this).is("#filter")) {
                        $(this).removeClass('input-popup-open');
                        $(this).parent().find('.input-popup-content').fadeToggle(300);
                    }
                }
            });

            if ($(this).hasClass('input-popup-open')) {
                $(this).removeClass('input-popup-open');
            } else {
                $(this).addClass('input-popup-open');
            }

            $(this).parent().find('.input-popup-content').fadeToggle(300);
        }
    });



    $('.input-popup-content').find('p').click(function() {
        var radio = "";

        $(this).parent().find('p').each(function() {
            $(this).removeClass("radio-size-checked");
        });

        if ($(this).parent().hasClass('size-radio')) {
            $('.input-popup-radio').find('p').find('span').text(": " + $(this).text());
        } else {
            $('.input-popup-radio').find('p').text($(this).text());
        }

        $(this).addClass("radio-size-checked");


        radio += $(this).attr("to");
        $(radio).prop('checked', true);
    });

    $('.checkmark').click(function() {
        $(this).parent().find('input').prop("checked", true);
    });

    $('.label').click(function() {
        if ($(this).find('input').prop("checked") == true) {
            $(this).find('input').prop("checked", false);
        } else {
            $(this).find('input').prop("checked", true);
        }

        var n = 0;

        $(this).parent().find('.label-2').each(function() {
            if ($(this).find('input').prop("checked") == true) {
                if (n == 0) {
                    n = 1;
                }
            }
        });

        if (n == 1) {
            $(this).parent().parent().find('.input-popup').addClass('input-popup-active');
        } else {
            $(this).parent().parent().find('.input-popup').removeClass('input-popup-active');
        }        
    });

    $('.radio-popup').click(function() {
        $(this).fadeToggle(300);
        $(this).parent().find('.input-popup').removeClass('input-popup-open');
    });


    $('#filter').click(function() {
        var n = 0;
        $(this).parent().parent().find('.col-xl-2').each(function() {
            if (n == 1) {
                $(this).slideToggle(300);
            }

            n = 1;
        });

        $(this).parent().parent().find('.col-lg-3').each(function() {
            if (n == 1) {
                $(this).slideToggle(300);
            }

            n = 1;
        });
    });

    $('.remove-item').click(function() {
        $(this).parent().parent().remove();
    });

    $('.item-remove').click(function() {
        $(this).parent().remove();
    });


    $("#size-popup-open").click(function() {
        $("#size-popup").css("height", $("body").height());
        $("#size-popup").fadeIn(300);
    });


    var k = ($('.item-detail-image').length - 1) / 2;
    var bool = false;
    var count = 0;

    $('.item-detail-slider').find('.item-detail-image').each(function() {
        if (bool && count < k) {
            $('.item-detail').find('.slick-dots').find('button').eq(count).css("background-image", $(this).css('background-image'));
            count++;
        }

        bool = true;
    }); 

    $(".input-radio-popup-2").click(function() {
        $(this).addClass("input-popup-open");
    });
});