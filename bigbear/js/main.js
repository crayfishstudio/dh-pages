$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})

//Sliders start
$('.rest-slider').slick({
    autoplaySpeed: 2000,
    infinite: true,
    fade: true,
    prevArrow: '.left-click',
    nextArrow: '.right-click',
    speed: 2000,
    dots: true,
    adaptiveHeight: true,
    appendDots: $('.rest-dots'),
    dotsClass: 'custom-dots',
    customPaging: function (slider, i) {
        return '<a class="dot" role="button"></a>';
    }
});

$('.slider-class').slick({
    infinite: true,
    prevArrow: '#p-arrow',
    nextArrow: '#n-arrow',
    speed: 1000,
    dots: true,
    appendDots: $('.main-dots'),
    dotsClass: 'custom-dots',
    customPaging: function (slider, i) {
        return '<a class="dot" role="button"></a>';
    }
});

$('.feedback-slider').slick({
    infinite: true,
    prevArrow: '#feedback-arrow-left',
    nextArrow: '#feedback-arrow-right',
    adaptiveHeight: true,
    speed: 1000
});

if ($(window).width() > 1199) {
    $('.slider-class-2').slick({
        slidesToShow: 3,
        infinite: true,
        prevArrow: '#p-arrow',
        nextArrow: '#n-arrow',
        speed: 1000,
        slidesToShow: 1,
        centerMode: true,
        variableWidth: true, 
        dots: true,
        appendDots: $('.main-dots-2'),
        dotsClass: 'custom-dots',
        customPaging: function (slider, i) {
            return '<a class="dot" role="button"></a>';
        }
    });

    $(".slider-class-2").find(".slick-slide").width(60 + "vw");
    $(".slider-class-2").find(".slick-slide").css({
        "padding-left": "8px",
        "padding-right": "8px"
    });
} else {
    $('.slider-class-2').slick({
        slidesToShow: 3,
        infinite: true,
        prevArrow: '#p-arrow',
        nextArrow: '#n-arrow',
        speed: 1000,
        slidesToShow: 1,
        dots: true,
        appendDots: $('.main-dots-2'),
        dotsClass: 'custom-dots',
        customPaging: function (slider, i) {
            return '<a class="dot" role="button"></a>';
        }
    });

    $(".slider-class-2").find(".slick-slide").height(60 + "vh");
    $(".slider-class-2").find(".slick-slide").height($(".slider-class-2").find(".slick-slide").height() + 52);
    $(".slider-class-2").find(".slick-slide").css("padding", "0px");
}

$(".apart-image-slider").each(function() {
    var nArrow = $(this).parent().find('.n-apart-arrow');
    var pArrow = $(this).parent().find('.p-apart-arrow');

    $(this).slick({
        infinite: true,
        prevArrow: pArrow,
        nextArrow: nArrow,
        speed: 1000
    });
});


$(".apart-image").height($(".apart-image-slider").height());
//END SLiders

var unvisibleDatepicker = true;
var selectedData = "";

//Start form 
$(document).ready(function() {
    $('#div-datepicker').hover(function() {
        $('#datepicker').focus();
        unvisibleDatepicker = true;
    }, function() {
        $('#datepicker').blur();
    });

    $('.datepicker').hover(function() {
        if (unvisibleDatepicker == true) {
            $('#datepicker').focus();
        }

        $('.datepicker--cell-day').hover(function() {
            if (!$(this).hasClass("-disabled-")) {
                var month = (parseInt($(this).attr("data-month")) + 1).toString();
                var day = $(this).text();

                if (day.length == 1) {
                    day = "0" + $(this).text();
                }

                if (month.length == 1) {
                    month = "0" + (parseInt($(this).attr("data-month")) + 1).toString();
                }

                if(selectedData.length < 10) {
                    $("#datepicker").val(selectedData + day + "." + month);
                }
            }
        }, function() {
            if (selectedData.length > 5 && selectedData.length < 10) {
                $("#datepicker").val(selectedData + "дата виїзду");
            } else if(selectedData.length > 10) {
                $("#datepicker").val(selectedData);
            } else {
                $("#datepicker").val("");
            }
        });
    }, function() {
        $('#datepicker').blur();
    });


    var selectorbarheight = $('#selector-bar-id').height() + "px";
    $('.overflow-hidden').css("height", selectorbarheight);

    var inputwidth = $('#div-datepicker').width() + "px";
    $('.datepicker').css("width", inputwidth);

    $('.input-location').click(function() {
        $("#location").val($(this).text());
    });

    $("#adults_plus").click(function() {
        var val = 1 + +$("#adults").val();
        if (val > 8) {
            val = 8;
        }
        $("#adults").val(val);
        check_input_guests();
    });

    $("#adults_minus").click(function() {
        var val = -1 + +$("#adults").val();
        if (val < 0) {
            val = 0;
        }

        $("#adults").val(val);
        check_input_guests();
    });

    $("#children_plus").click(function() {
        var val = 1 + +$("#children").val();
        if (val > 4) {
            val = 4;
        }
        $("#children").val(val);
        check_input_guests();
    });

    $("#children_minus").click(function() {
        var val = -1 + +$("#children").val();
        if (val < 0) {
            val = 0;
        }
        $("#children").val(val);
        check_input_guests();
    });

    function check_input_guests() {
        var adults = $("#adults").val();
        var children = $("#children").val();

        if (adults == "0" && children == "0") {
            $("#guests").text("Кількість гостей");
        } else {
            $("#guests").text(adults + " дорослих, " + children + " дітей");
        }
    }
});
//end form

//start functions
function setBookingIcon() {
    $('.booking-icon').css({
        "border-style": "solid",
        "border-color": "#ff8c00",
        "border-width": $("#feature").find(".col-md-3").width() * 0.01,
        "width": $(".bb-toy-thin").height(),
        "border-radius": "50%",
        "color": "#ff8c00",
        "font-size": $(".bb-toy-thin").width() * 0.4,
        "padding": $(".bb-toy-thin").height() * 0.16,
        "line-height": "120%"
    });

    $('.booking-icon').css("margin", "auto");
    $('.booking-icon').height($('.booking-icon').width());
}

function animateValue(id, start, end, duration, step) {
    var range = end - start;
    var current = start;
    var increment = end > start? step : -step;
    var stepTime = Math.abs(Math.floor(duration / range));
    var obj = document.getElementById(id);


    var timer = setInterval(function() {
        current += increment;
        obj.innerHTML = current;
        if (current == end) {
            clearInterval(timer);
        }
    }, stepTime);
}

function isScrolledIntoView(elem) {
    var $window = $(window),
        docViewTop = $window.scrollTop(),
        docViewBottom = docViewTop + $window.height(),
        elemTop = $(elem).offset().top,
        elemBottom = elemTop + $(elem).outerHeight();
    return ((elemBottom <= docViewBottom) && (elemTop >= docViewTop));
}
//end functions

$(document).ready(function(){
    setBookingIcon();

    $(".input-location").click(function() {
        $(this).parent().removeClass("add-drop");
    });

    $(".input-pattern").mouseover(function() {
        $(this).find(".input-dropdown").addClass("add-drop");
    });

    $(".input-pattern").mouseout(function() {
        $(this).find(".input-dropdown").removeClass("add-drop");
    });

    window.onclick = function(event) {
        var dropdowns = document.getElementsByClassName("input-dropdown");
        var i;

        for(i = 0; i < dropdowns.length; i++) {
            if (!dropdowns[i].contains(event.target)) {
                if (!dropdowns[i].parentElement.contains(event.target)) {
                    dropdowns[i].classList.remove("add-drop");
                }
            }
        }
    }

    if ($('.raty').length) {
        $('.raty').each(function() {
            $(this).raty({
                starOff: 'icon-star-empty',
                starOn: 'icon-star-full',
                starType: 'i',
                hints: ['', '', '', '', ''],
                scoreName: $(this).attr("data-scorename")
            });
        });
    }
});

$('#datepicker').datepicker({
    range: true,
    minDate: new Date(),
    dateFormat: "dd.mm",
    position: "bottom left",
    ignoreReadonly: true,
    autoClose: true,
    onSelect: function() {
        var temp = $("#datepicker").val();
        selectedData = temp;

        if (temp.length == 5) {
            $("#datepicker").val($("#datepicker").val() + " - дата виїзду");
            selectedData += " - ";
        } else {
            unvisibleDatepicker = false;
        }
    }
});
$('#datepicker').data('datepicker');

if (document.getElementById('datepicker')) {
    if ($('.input-pattern').offset().top + $('.input-pattern').height() + $('.datepicker').height() > $(window).innerHeight() + $(window).scrollTop()) {
        $('.datepickers-container').css("top", 0);

        $('.datepickers-container').css("top", $('.datepickers-container').offset().top - $('.datepicker').height() - $('.input-pattern').height());
    }
}

if (document.getElementById('datepicker')) {
    $('.datepicker').click(function() {
        if ($('.input-pattern').offset().top + $('.input-pattern').height() + $('.datepicker').height() > $(window).innerHeight() + $(window).scrollTop()) {
            $('.datepickers-container').css("top", 0);

            $('.datepickers-container').css("top", $('.datepickers-container').offset().top - $('.datepicker').height() - $('.input-pattern').height());
        } else {
            $('.datepickers-container').css("top", 0);
        }
    });
}

$(".input-dropdown").each(function() {
    $(this).css({
        top: 100 + "%"
    });

    if ($(this).offset().top + $(this).outerHeight() > $(window).innerHeight() + $(window).scrollTop()){
        $(this).css({
            top: - $(this).height()
        });
    }
});

var check = true;

$(window).scroll(function() {
    $(".input-dropdown").each(function() {
        $(this).css({
            top: 100 + "%"
        });

        if ($(this).offset().top + $(this).outerHeight() > $(window).innerHeight() + $(window).scrollTop()){
            $(this).css({
                top: - $(this).height()
            });
        }
    });

    if (document.getElementById('datepicker')) {
        if ($('.input-pattern').offset().top + $('.input-pattern').height() + $('.datepicker').height() > $(window).innerHeight() + $(window).scrollTop()) {
            $('.datepickers-container').css("top", 0);

            $('.datepickers-container').css("top", $('.datepickers-container').offset().top - $('.datepicker').height() - $('.input-pattern').height());
        } else {
            $('.datepickers-container').css("top", 0);
        }
    }   

    if (document.getElementById('giant-number')) {
        if (isScrolledIntoView("#giant-number")) {
            if (check == true) {
                check = false;
                animateValue("giant-number", 9821, 10000, 5000, 1);   
            }
        }
    }
});

$(window).resize(function() {
    setBookingIcon();

    var selectorbarheight = $('#selector-bar-id').height() + "px";
    $('.overflow-hidden').css("height", selectorbarheight);

    var inputwidth = $('#div-datepicker').width() + "px";
    $('.datepicker').css("width", inputwidth);  
});

var lastScrollTop = 0;
// element should be replaced with the actual target element on which you have applied scroll, use window in case of no target element.
window.addEventListener("scroll", function(){ // or window.addEventListener("scroll"....
   var st = window.pageYOffset || document.documentElement.scrollTop; // Credits: "https://github.com/qeremy/so/blob/master/so.dom.js#L426"
   if (st > lastScrollTop){
        if (document.getElementById("breadcrumb")) {
            console.log("scrolldown");
            document.getElementById("breadcrumb").classList.add("hided");
        }
   } else {
        if (document.getElementById("breadcrumb")) {
            console.log("scrollup");
            document.getElementById("breadcrumb").classList.remove("hided");
        }
   }
   lastScrollTop = st <= 0 ? 0 : st; // For Mobile or negative scrolling
}, false);

function hideFreedatesBar() {
    document.getElementById('freedates-bar').remove();
}