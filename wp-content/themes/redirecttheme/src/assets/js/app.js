import $ from 'jquery';
import 'what-input';
import 'slick-carousel'
import { gsap } from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";
import { SplitText } from "gsap/SplitText";
import { DrawSVGPlugin } from "gsap/DrawSVGPlugin";
import { ScrollSmoother } from "gsap/ScrollSmoother";
import { ScrollToPlugin } from "gsap/ScrollToPlugin";
import 'jquery-lazy';
import ScrollReveal from 'scrollreveal'

gsap.registerPlugin(ScrollTrigger, DrawSVGPlugin, ScrollSmoother, SplitText, ScrollToPlugin);

window.$ = $;



import Foundation from 'foundation-sites';
// If you want to pick and choose which modules to include, comment out the above and uncomment
// the line below
//import './lib/foundation-explicit-pieces';

$(document).foundation();

$(document).ready(function(){

    //////////////////////////////////////////////////////////////
    /////////////////      Global Inits  /////////////////////////
    //////////////////////////////////////////////////////////////

    window.sr = ScrollReveal({ reset: false });  

    $(function($) {
        $(".lazy").Lazy();
    });


    if( $("body").hasClass("page-template-captive") ){
      $('.gfield_captcha_container').each(function() {
        var $container = $(this);
        var $inputContainer = $container.find('.gfield_captcha_input_container').first();
    
        // Remove all input containers, then prepend the first one back
        $container.find('.gfield_captcha_input_container').remove();
        $container.prepend($inputContainer);
      });
    }

    $(window).on('scroll', function() {
      if ($(this).scrollTop() > 200) {
        $('.start-convo-fixed').addClass('active');
      } else {
        $('.start-convo-fixed').removeClass('active');
      }
    });


    $('.benefits-slick').slick({
      adaptiveHeight: true,
      nextArrow: '<button type="button" class="slick-next"><i class="fa fa-chevron-right"></i></button>',
      prevArrow: '<button type="button" class="slick-prev"><i class="fa fa-chevron-left"></i></button>',
    });

    $('.front-greeter__slick').slick({
      adaptiveHeight: true,
      nextArrow: '<button type="button" class="slick-next"><i class="fa fa-chevron-right"></i></button>',
      prevArrow: '<button type="button" class="slick-prev"><i class="fa fa-chevron-left"></i></button>',
    });

    const logo = document.getElementById('lottieLogo');
    const logoAnimation = bodymovin.loadAnimation({
      container: logo,
      path: 'https://rllinsure.com/wp-content/uploads/2024/10/RLL-logo.json',
      renderer: 'svg', 
      loop: false, 
      autoplay: false,
    });
    logo.addEventListener('mouseenter', (e) => {
      logoAnimation.playSegments([5, 45]);
    });


    let animation__container__inner__1 = document.getElementById('animation__container__inner__1');
    let animation__container__inner__1__Url = $('#animation__container__inner__1').data('animation');
    const animation__container__inner__1__Animation = bodymovin.loadAnimation({
      container: animation__container__inner__1,
      path: animation__container__inner__1__Url,
      renderer: 'svg', 
      loop: false, 
      autoplay: false,
    });

    let animation__container__inner__2 = document.getElementById('animation__container__inner__2');
    let animation__container__inner__2__Url = $('#animation__container__inner__2').data('animation');
    const animation__container__inner__2__Animation = bodymovin.loadAnimation({
      container: animation__container__inner__2,
      path: animation__container__inner__2__Url,
      renderer: 'svg', 
      loop: false, 
      autoplay: false,
    });
    let animation__container__inner__3 = document.getElementById('animation__container__inner__3');
    let animation__container__inner__3__Url = $('#animation__container__inner__3').data('animation');
    const animation__container__inner__3__Animation = bodymovin.loadAnimation({
      container: animation__container__inner__3,
      path: animation__container__inner__3__Url,
      renderer: 'svg', 
      loop: false, 
      autoplay: false,
    });

    $(document).on("click",".animation__container__inner__1__trigger",function() {
        $('.animation__container__inner').each(function(){
          $(this).addClass('invis');
        });
        $('.animation__container__inner__1').removeClass('invis');
        animation__container__inner__1__Animation.play();

    // Check body class and set timeout accordingly
    var timeoutDuration = $('body').hasClass('page-template-interactive-1') ? 1500 : 
                         $('body').hasClass('page-template-interactive-2') ? 3500 : 1500;
    setTimeout(
      function() 
      {
        $('#successPopup').foundation('open')
      }, timeoutDuration);

    });

    $(document).on("click",".animation__container__inner__2__trigger",function() {
      $('.animation__container__inner').each(function(){
        $(this).addClass('invis');
      });
      $('.animation__container__inner__2').removeClass('invis');
      animation__container__inner__2__Animation.play();
      setTimeout(
        function() 
        {
          $('#successPopup').foundation('open')
        }, 1500);
    });

    $(document).on("click",".animation__container__inner__3__trigger",function() {
      $('.animation__container__inner').each(function(){
        $(this).addClass('invis');
      });
      $('.animation__container__inner__3').removeClass('invis');
      animation__container__inner__3__Animation.play();
      setTimeout(
        function() 
        {
          $('#successPopup').foundation('open')
        }, 1500);
    });


    let city = document.getElementById('lottieCityAnimation');
    let cityUrl = $('#lottieCityAnimation').data('animation');
    const cityAnimation = bodymovin.loadAnimation({
      container: city,
      path: cityUrl,
      renderer: 'svg', 
      loop: true, 
      autoplay: true,
      delay: 1,
    });
    cityAnimation.play();





  let waiver = document.getElementById('lottieWaiver');
  let waiverUrl = $('#lottieWaiver').data('animation');

  LottieScrollTrigger({
    target: waiver,
    path: waiverUrl,
    speed: "medium",
    scrub: 2 // seconds it takes for the playhead to "catch up"
    // you can also add ANY ScrollTrigger values here too, like trigger, start, end, onEnter, onLeave, onUpdate, etc. See https://greensock.com/docs/v3/Plugins/ScrollTrigger
    // you can pass in a "timeline" that has existing animations in it, and LottieScrollTrigger will play that alongside the Lottie animation
    // you can pass a startFrameOffset and/or endFrameOffset to cause the playhead to start/end at a different frame. 
   });
   
   function LottieScrollTrigger(vars) {
     let playhead = { frame: vars.startFrameOffset || 0 },
       target = gsap.utils.toArray(vars.target)[0],
       speeds = { slow: "+=2000", medium: "+=1000", fast: "+=500" },
       st = {
         trigger: target,
         pin: false,
         start: "center bottom",
        //  end: speeds[vars.speed] || "+=300",
         end: "top top",
         scrub: 1
       },
       ctx = gsap.context && gsap.context(),
       animation = lottie.loadAnimation({
         container: target,
         renderer: vars.renderer || "svg",
         loop: false,
         autoplay: false,
         path: vars.path,
         rendererSettings: vars.rendererSettings || {
           preserveAspectRatio: "xMidYMid slice"
         }
       }),
       frameAnimation;
     for (let p in vars) {
       // let users override the ScrollTrigger defaults
       st[p] = vars[p];
     }
     frameAnimation = vars.timeline || gsap.timeline({ scrollTrigger: st });
     if (vars.timeline && !vars.timeline.vars.scrollTrigger) {
       // if the user passed in a timeline that didn't have a ScrollTrigger attached, create one.
       st.animation = frameAnimation;
       ScrollTrigger.create(st);
     }
     animation.addEventListener("DOMLoaded", function () {
       let createTween = function () {
         animation.goToAndStop(playhead.frame, true);
         frameAnimation.to(playhead, {
             frame: animation.totalFrames - 1 - (vars.endFrameOffset || 0),
             ease: "none",
             duration: frameAnimation.duration() || 1,
             onUpdate: () => {
               animation.goToAndStop(playhead.frame, true);
             }
           }, 0);
         return () => animation.destroy && animation.destroy();
       };
       ctx && ctx.add ? ctx.add(createTween) : createTween();
       // in case there are any other ScrollTriggers on the page and the loading of this Lottie asset caused layout changes
       ScrollTrigger.sort();
       ScrollTrigger.refresh();
     });
     animation.frameAnimation = frameAnimation;
     return animation;
   }



    //////////////////////////////////////////////////////////////
    /////////     Exit Popover For Insurance Profs  //////////////
    //////////////////////////////////////////////////////////////


    const path = window.location.pathname;
    const query = window.location.search;

    // Only run on /for-insurance-professionals/?test=true
    if (path === '/for-insurance-professionals/') {
      let hasShownModal = false;
      let exitIntentAllowed = false;

      // Wait 3 seconds before allowing exit intent
        setTimeout(function () {
          exitIntentAllowed = true;
        }, 5000);

      // Set flag when Form 2 or 12 is submitted
      $(document).on('gform_confirmation_loaded', function (event, formId) {
        if (formId === 2 || formId === 12) {
          localStorage.setItem('hasSubmittedForm2', 'true');
        }
      });

      // Exit intent: mouse leaves top of viewport
      $(document).on('mouseleave', function (e) {
        if (
          exitIntentAllowed &&
          e.clientY < 0 &&
          !hasShownModal &&
          localStorage.getItem('hasSubmittedForm2') !== 'true'
        ) {
          $('#leadModal1').foundation('open');
          hasShownModal = true;
        }
      });

      // Exit intent: hover over <a.logo> or <li.menu-item a>
      $('a.logo, li.menu-item a').on('mouseenter', function () {
        if (
          exitIntentAllowed &&
          !hasShownModal &&
          localStorage.getItem('hasSubmittedForm2') !== 'true'
        ) {
          $('#leadModal1').foundation('open');
          hasShownModal = true;
        }
      });


    }


    //////////////////////////////////////////////////////////////
    /////////////////      Navigation  ///////////////////////////
    //////////////////////////////////////////////////////////////


    $('.fire-navigation').click(function(e){
      e.preventDefault();
      $(this).toggleClass('open');
      $('.nav-icon').toggleClass('open');
      $('.nav-overlay').toggleClass('open');
      $('body').toggleClass('body-nav-open');
      if($('.nav-overlay').hasClass('open')){
        gsap.from('.nav-overlay .menu', .5,{
          opacity: 0,
          x: -50,
          delay: .3,
        });
      } else{

      }
  });




    


    //////////////////////////////////////////////////////////////
    /////////////////      Animations   //////////////////////////
    //////////////////////////////////////////////////////////////

    // $('.gfield').addClass('reveal-up');
    // $('.gfield').addClass('load-hidden');
    // $('.gform_footer').addClass('reveal-up');
    // $('.gform_footer').addClass('load-hidden');



    // Reveal Classes
    sr.reveal('.reveal-right', { 
        origin: 'right', 
        distance: '75px',
        duration: 1000
    });
    sr.reveal('.reveal-up', {  
        origin: 'bottom', 
        distance: '75px',
        duration: 1000
    });
    sr.reveal('.reveal-left', { 
        origin: 'left', 
        distance: '75px',
        duration: 1000
    });
    sr.reveal('.reveal-down', {  
        origin: 'top', 
        distance: '75px',
        duration: 1000
    });
    sr.reveal('.reveal-fade', {  
        duration: 1000
    });


        // Select all links with hashes
        $('a[href*="#"]')
        // Remove links that don't actually link to anything
        .not('[href="#"]')
        .not('[href="#0"]')
        .click(function(event) {
          // On-page links
          if (
            location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')
            &&
            location.hostname == this.hostname
          ) {
            // Figure out element to scroll to
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            // Does a scroll target exist?
            if (target.length) {
              // Only prevent default if animation is actually gonna happen
              event.preventDefault();
              $('html, body').animate({
                scrollTop: target.offset().top
              }, 1000, function() {
                // Callback after animation
                // Must change focus!
                var $target = $(target);
                $target.focus();
                if ($target.is(":focus")) { // Checking if the target was focused
                  return false;
                } else {
                  $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
                  $target.focus(); // Set focus again
                };
              });
            }
          }
        });

});
