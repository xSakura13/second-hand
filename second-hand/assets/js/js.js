    (function ($) {
    // Custom easing function
        $.extend($.easing, {
        // This is ripped directly from the jQuery easing plugin (easeOutExpo), from: http://gsgd.co.uk/sandbox/jquery/easing/
        spincrementEasing: function (x, t, b, c, d) {
            return (t === d) ? b + c : c * (-Math.pow(2, -10 * t / d) + 1) + b
        }
        })
  
    // Spincrement function
        $.fn.spincrement = function (opts) {
        // Default values
        var defaults = {
            from: 0,
            to: null,
            decimalPlaces: null,
            decimalPoint: '.',
            thousandSeparator: ',',
            duration: 1000, // ms; TOTAL length animation
            leeway: 50, // percent of duraion
            easing: 'spincrementEasing',
            fade: true,
            complete: null
        }
        var options = $.extend(defaults, opts)
    
        // Function for formatting number
        var re_thouSep = new RegExp(/^(-?[0-9]+)([0-9]{3})/)
        function format (num, dp) {
            num = num.toFixed(dp) // converts to string!
    
            // Non "." decimal point
            if ((dp > 0) && (options.decimalPoint !== '.')) {
            num = num.replace('.', options.decimalPoint)
            }
    
            // Thousands separator
            if (options.thousandSeparator) {
            while (re_thouSep.test(num)) {
                num = num.replace(re_thouSep, '$1' + options.thousandSeparator + '$2')
            }
            }
            return num
        }
    
        // Apply to each matching item
        return this.each(function () {
            // Get handle on current obj
            var obj = $(this)
    
            // Set params FOR THIS ELEM
            var from = options.from
            if (obj.attr('data-from')) {
            from = parseFloat(obj.attr('data-from'))
            }
    
            var to
            if (obj.attr('data-to')) {
            to = parseFloat(obj.attr('data-to'))
            } else if (options.to !== null) {
            to = options.to
            } else {
            var ts = $.inArray(options.thousandSeparator, ['\\', '^', '$', '*', '+', '?', '.']) > -1 ? '\\' + options.thousandSeparator : options.thousandSeparator
            var re = new RegExp(ts, 'g')
            to = parseFloat(obj.text().replace(re, ''))
            }
    
            var duration = options.duration
            if (options.leeway) {
            // If leeway is set, randomise duration a little
            duration += Math.round(options.duration * ((Math.random() * 2) - 1) * options.leeway / 100)
            }
    
            var dp
            if (obj.attr('data-dp')) {
            dp = parseInt(obj.attr('data-dp'), 10)
            } else if (options.decimalPlaces !== null) {
            dp = options.decimalPlaces
            } else {
            var ix = obj.text().indexOf(options.decimalPoint)
            dp = (ix > -1) ? obj.text().length - (ix + 1) : 0
            }
    
            // Start
            obj.css('counter', from)
            if (options.fade) obj.css('opacity', 0)
            obj.animate(
            {
                counter: to,
                opacity: 1
            },
            {
                easing: options.easing,
                duration: duration,
    
                // Invoke the callback for each step.
                step: function (progress) {
                obj.html(format(progress * to, dp))
                },
                complete: function () {
                // Cleanup
                obj.css('counter', null)
                obj.html(format(to, dp))
    
                // user's callback
                if (options.complete) {
                    options.complete(obj)
                }
                }
            }
            )
        })
        }
  
    let button = document.querySelector(".burger-menu")
    button.addEventListener("click", () => {
        if(document.querySelector(".burger-menu").classList.contains("burger-menu_active")){
            document.querySelector(".burger-menu").classList.remove("burger-menu_active")
            document.getElementById("test").style.display="none"
        }
        else {
            document.querySelector(".burger-menu").classList.add("burger-menu_active")
            document.getElementById("test").style.display="flex"
        }
    })
    
    document.getElementById("test").lastElementChild.setAttribute("data-bs-target","#exampleModal" )
    document.getElementById("test").lastElementChild.setAttribute("data-bs-toggle","modal" )
    
    document.getElementById("search_media_click").addEventListener("click", e=>{
        e.preventDefault();
       
        document.getElementById("form_header").style.display="block"
    })

    document.querySelector(".closedSvg").addEventListener("click", e=>{
        e.preventDefault();
        document.getElementById("form_header").style.display="none"
    })
    $('.slider-for').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: true,
        asNavFor: '.slider-nav'
    });
    $('.slider-nav').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        asNavFor: '.slider-for',
        dots: true,
        centerMode: true,
        focusOnSelect: true
    });
    
    $(document).ready(function(){
        $(window).scroll(function(){
            if ($(this).scrollTop() > 100) {
                $('.scrollup').fadeIn();
            } else {
                $('.scrollup').fadeOut();
            }
        });
        $('.scrollup').click(function(){
            $("html, body").animate({ scrollTop: 0 }, 600);
            return false;
        });
    });

        $('.video_list').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            asNavFor: '.video_nav',
            fade:true,
        });
        $('.video_nav').slick({
            slidesToShow: 2.2,
            slidesToScroll: 1,
            asNavFor: '.video_list',
            arrows:false,
            dots:false,
            draggable:true,
            infinity:true,
            centerMode: true,
            focusOnSelect:true,
            responsive:[
                {
                    breakpoint:450,
                    settings:{
                        slidesToShow:1.3,
                    }
                },

            ]
        });
        $('.video_list1').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            asNavFor: '.video_nav1',
            fade:true,
        });
        $('.video_nav1').slick({
            slidesToShow: 2.2,
            slidesToScroll: 1,
            asNavFor: '.video_list1',
            arrows:false,
            dots:false,
            draggable:true,
            infinity:true,
            centerMode: true,
            focusOnSelect:true,
            responsive:[
                {
                    breakpoint:450,
                    settings:{
                        slidesToShow:1.3,
                    }
                },

            ]
        });
    
    $('.card_list').slick({
        centerMode: true,
        centerPadding: '60px',
        slidesToShow: 3,
        arrows: false,
        responsive: [
            {
                breakpoint: 821,
                settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: '40px',
                    slidesToShow: 1
                }
            },
            {
                breakpoint: 480,
                settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: '40px',
                    slidesToShow: 1
                }
            }
        ]
    });
    
    $('.card_list1').slick({
        centerMode: true,
        centerPadding: '30px',
        slidesToShow: 4,
        arrows: false,
        responsive: [
            {
                breakpoint: 992,
                settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: '20px',
                    slidesToShow: 3
                }
            },
            {
                breakpoint: 768,
                settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: '15px',
                    slidesToShow: 2
                }
            },
            {
                breakpoint: 576,
                settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: '10px',
                    slidesToShow: 1.8
                }
            }
        ]
    });
    
    $('.card_list2').slick({
        centerMode: true,
        centerPadding: '30px',
        slidesToShow: 4,
        arrows: false,
        responsive: [
            {
                breakpoint: 992,
                settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: '20px',
                    slidesToShow: 3
                }
            },
            {
                breakpoint: 768,
                settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: '15px',
                    slidesToShow: 2
                }
            },
            {
                breakpoint: 576,
                settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: '10px',
                    slidesToShow: 1.8
                }
            }
        ]
    });
    
    $(function(){
        $('.slick-vertical').slick({
            vertical: true,
            verticalSwiping: true,
            slidesToShow: 4,
            autoplay: false,
        });
    });
    
    let customCarousel = document.getElementById('customCarousel')
    let customCarousel1 = document.getElementById('customCarousel1')
    let item0 = document.getElementById('item0')
    let item1 = document.getElementById('item1')
    let item2 = document.getElementById('item2')
    let i1tem0 = document.getElementById('1item0')
    let i1tem1 = document.getElementById('1item1')
    let i1tem2 = document.getElementById('1item2')
    let next = document.getElementById('next1')
    let pred = document.getElementById('pred1')
    let next2 = document.getElementById('next2')
    let pred2 = document.getElementById('pred2')
    
    $(document).ready(function () {
     
        var show = true;
        var countbox = ".benefitsInner";
        if(document.querySelector('.benefitsInner') !== null) {
            $(window).on("scroll load resize", function () {
                if (!show) return false; 
                var w_top = $(window).scrollTop(); 
                var e_top = $(countbox).offset().top; 
                var w_height = $(window).height(); 
                var d_height = $(document).height(); 
                var e_height = $(countbox).outerHeight(); 
                if (w_top + 500 >= e_top || w_height + w_top == d_height || e_height + e_top < w_height) {
                    $('.benefit').spincrement({
                        thousandSeparator: "",
                        duration: 2500
                    });
                     
                    show = false;
                }
            });
        }
    });
    
    if(next) {
        next.addEventListener('click',()=>{
            if(item2.classList.contains('active')){
                return false
            }
            if (window.matchMedia("(max-width: 992px)").matches) {
                if(item1.classList.contains('active')){
                    item2.classList.toggle('order-first')
                    item2.classList.toggle('order-3')
                    item1.classList.toggle('order-3')
                    item1.classList.toggle('order-first')
                }
                if(item0.classList.contains('active')){
                    item1.classList.toggle('order-first')
                    item1.classList.toggle('order-2')
                    item0.classList.toggle('order-first')
                    item0.classList.toggle('order-2')
                }
            }
            if(item1.classList.contains('active')){
                item1.classList.toggle('active')
                item2.classList.toggle('active')
                next.classList.toggle('active')
            }
            if(item0.classList.contains('active')){
                item0.classList.toggle('active')
                item1.classList.toggle('active')
                pred.classList.toggle('active')
            }
        
        })
    }
    if(pred) {
        pred.addEventListener('click',()=>{
            if(item0.classList.contains('active')){
                return false
            }
            if (window.matchMedia("(max-width: 992px)").matches) {
                if(item1.classList.contains('active')){
                    item0.classList.toggle('order-first')
                    item0.classList.toggle('order-2')
                    item1.classList.toggle('order-2')
                    item1.classList.toggle('order-first')
                }
                if(item2.classList.contains('active')){
                    item2.classList.toggle('order-first')
                    item2.classList.toggle('order-3')
                    item1.classList.toggle('order-first')
                    item1.classList.toggle('order-3')
                }
            }
            if(item1.classList.contains('active')){
                item1.classList.toggle('active')
                item0.classList.toggle('active')
                pred.classList.toggle('active')
            }
            if(item2.classList.contains('active')){
                item2.classList.toggle('active')
                item1.classList.toggle('active')
                next.classList.toggle('active')
            }
        
        })
    }
    
   
    
    if(next2) {
        next2.addEventListener('click',()=>{
        if(i1tem2.classList.contains('active')){
            return false
        }
        if (window.matchMedia("(max-width: 992px)").matches) {
            if(i1tem1.classList.contains('active')){
                i1tem2.classList.toggle('order-first')
                i1tem2.classList.toggle('order-3')
                i1tem1.classList.toggle('order-3')
                i1tem1.classList.toggle('order-first')
            }
            if(i1tem0.classList.contains('active')){
                i1tem1.classList.toggle('order-first')
                i1tem1.classList.toggle('order-2')
                i1tem0.classList.toggle('order-first')
                i1tem0.classList.toggle('order-2')
            }
        }
        if(i1tem1.classList.contains('active')){
            i1tem1.classList.toggle('active')
            i1tem2.classList.toggle('active')
            next2.classList.toggle('active')
        }
        if(i1tem0.classList.contains('active')){
            i1tem0.classList.toggle('active')
            i1tem1.classList.toggle('active')
            pred2.classList.toggle('active')
        }
    
    })
    }
    if(pred2) {
        pred2.addEventListener('click',()=>{
        if(i1tem0.classList.contains('active')){
            return false
        }
        if (window.matchMedia("(max-width: 992px)").matches) {
            if(i1tem1.classList.contains('active')){
                i1tem0.classList.toggle('order-first')
                i1tem0.classList.toggle('order-2')
                i1tem1.classList.toggle('order-2')
                i1tem1.classList.toggle('order-first')
            }
            if(i1tem2.classList.contains('active')){
                i1tem2.classList.toggle('order-first')
                i1tem2.classList.toggle('order-3')
                i1tem1.classList.toggle('order-first')
                i1tem1.classList.toggle('order-3')
            }
        }
        if(i1tem1.classList.contains('active')){
            i1tem1.classList.toggle('active')
            i1tem0.classList.toggle('active')
            pred2.classList.toggle('active')
        }
        if(i1tem2.classList.contains('active')){
            i1tem2.classList.toggle('active')
            i1tem1.classList.toggle('active')
            next2.classList.toggle('active')
        }
    })
    }
})(jQuery)