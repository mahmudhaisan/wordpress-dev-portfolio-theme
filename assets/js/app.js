jQuery(document).ready(function($){
    'use strict';
    let device_width = window.innerWidth;
    //   =========navigation fixed top=========
    $(window).on("scroll", function() {
        var scrolling = $(this).scrollTop();
        if (scrolling > 50) {
            $(".navigation, .pc-header-transparent").addClass("navbar-fixed");
        } else {
            $(".navigation, .pc-header-transparent").removeClass("navbar-fixed");
        }
    });

    // ==========Progressbar=========
    if (jQuery(".progressbar-sec").length > 0) {
      var $sectionProgress = $('.progressbar-sec');
      var scrollOffset = $(document).scrollTop();
      var containerOffset2 = $sectionProgress.offset().top - window.innerHeight;

      if ($('.chart').parents('.progressbar-sec').hasClass('progressbar-sec-2')) {
          $('.chart').easyPieChart({
              size: 220,
              barColor: "#f8b216",
              scaleLength: 0,
              lineWidth: 25,
              trackColor: "#f2ede3",
              lineCap: "round",
              animate: 2000,
          })
      } else if ($('.chart').parents('.progressbar-sec').hasClass('progressbar-sec-4')) {

        $('.chart').easyPieChart({
          size: 160,
          barColor: "#ea4343",
          scaleLength: 0,
          lineWidth: 20,
          trackColor: "#ffffff",
          lineCap: "round",
          animate: 2000,
        })

      } else {
          $('.chart').easyPieChart({
              size: 220,
              barColor: "#4cb950",
              scaleLength: 0,
              lineWidth: 25,
              trackColor: "#ffffff",
              lineCap: "round",
              animate: 2000,
          })
      }

    }

    //mobile side menu
    $('.side-toggle').on('click', function () {
      $('.side-info').addClass('info-open');
      $('.offcanvas-overlay').addClass('overlay-open');
    })

    $('.side-info-close,.offcanvas-overlay').on('click', function () {
      $('.side-info').removeClass('info-open');
      $('.offcanvas-overlay').removeClass('overlay-open');
    })

    // Side Settings
    $('.side-admin-settings').on('click', function() {
      $('.side-admin-panel-right').addClass('side-admin-panel-visible');
      $('.overlay').addClass('overlay-visible');
    })
    $('.cinkes-side-admin-panel-close-btn, .overlay').on('click', function() {
        $('.side-admin-panel-right').removeClass('side-admin-panel-visible');
        $('.overlay').removeClass('overlay-visible');
    })

    $(document).ready(function() {

        // isotop
        if (jQuery(".filter-wrapper").length > 0) {
          $('.filter-wrapper .filter-grid').imagesLoaded(function () {
              let $grid = $('.filter-wrapper .filter-grid').isotope({
                  itemSelector: '.grid-item',
                  percentPosition: true,
                  masonry: {
                      columnWidth: '.grid-item' // columnWidth: 1
                  }
              });

              // filter items on button click
              $('.filter-nav').on('click', 'button', function () {
                  let filterValue = $(this).attr('data-filter');
                  $grid.isotope({filter: filterValue});
              });

          });
        }

        //for menu active class
        $('.portfolio_nav button').on('click', function(event) {
        $(this).siblings('.active').removeClass('active');
        $(this).addClass('active');
        event.preventDefault();
        });

        // ==========Counter=========
        $('.counter').each(function() {
            $(this).prop('Counter', 0).animate({
                Counter: $(this).text()
            }, {
                duration: 4000,
                easing: 'swing',
                step: function(now) {
                    $(this).text(Math.ceil(now));
                }
            });
        });

        // ==========Portfolio Image Popup=========
        $('.tv-card-tm, .sidebar-photography-imgs').magnificPopup({
            delegate: 'a',
            type: 'image',
            gallery: {
                enabled: true
            },
            zoom: {
                enabled: true,
                duration: 300, // don't foget to change the duration also in CSS
                opener: function(element) {
                    return element.find('img');
                }
            }

        });

        /* magnificPopup video view */
        $('.popup-video').magnificPopup({
          type: 'iframe'
        });

        // ==========Experience Slider=========
        $('.pc-about-right5-experience-active').owlCarousel({
          loop: true,
          margin: 0,
          nav: false,
          dots: true,
          autoplay: true,
          autoplayTimeout: 3000,
          smartSpeed: 1500,
          responsive: {
              0: {
                  items: 1
              },
              600: {
                  items: 1
              },
              1200: {
                  items: 1
              }
          }
        });

        // ==========Testimonial Slider=========
        $('.testimonial-slider').owlCarousel({
          loop: true,
          margin: 24,
          nav: false,
          dots: false,
          autoplay: true,
          autoplayTimeout: 3000,
          smartSpeed: 1500,
          responsive: {
              0: {
                  items: 1
              },
              600: {
                  items: 2
              },
              1200: {
                  items: 3
              }
          }
        });

        // ==========Testimonial Slider=========
        $('.testimonial-slider').owlCarousel({
            loop: true,
            margin: 24,
            nav: false,
            dots: false,
            autoplay: true,
            autoplayTimeout: 3000,
            smartSpeed: 1500,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2
                },
                1200: {
                    items: 3
                }
            }
        });

        // ==========Feedback Slider=========
        $('.pc_feedback_slider').owlCarousel({
          loop: true,
          margin: 24,
          nav: true,
          dots: false,
          autoplay: false,
          autoplayTimeout: 3000,
          smartSpeed: 1500,
          navText: ['<i class="fa-solid fa-left-long"></i>','<i class="fa-solid fa-right-long"></i>'],
          responsive: {
              0: {
                  items: 1
              },
              600: {
                  items: 1
              },
              1200: {
                  items: 1
              }
          }
      });

      // ==========Branding Slider=========
      $('.pc_branding_slider').owlCarousel({
          items: 5,
          loop: true,
          margin: 30,
          nav: false,
          dots: false,
          autoplay: false,
          autoplayTimeout: 3000,
          smartSpeed: 1500,
          responsive: {
            0: {
                items: 2
            },
            480: {
                items: 3
            },
            575: {
              items: 3
            },
            767: {
              items: 3
            },
            992: {
              items: 4
            },
            1200: {
                items: 5
            }
        }
      });
      

      //==========Portfolio Filter=========
      $(".tv-filter-tm li").click(function() {
          var $filterButton = $(this);
          $(".tv-filter-tm li").removeClass("active");
          $filterButton.addClass("active");
          var $data = $filterButton.parent().parent().parent().parent().parent().find(".tv-case-studies");
          var $filter, $outerFilter;
          if ($filterButton.attr("id") === "filter__All") {
              $data.find('.tv-case-study').removeClass("tv-case-study-show");
              $data.find('.tv-case-study').addClass("tv-case-study-hide");

              $filter = $data.find('.tv-case-study');

              $filter.removeClass("tv-case-study-hide");
              setTimeout(function() {
                  $filter.addClass("tv-case-study-show");
              }, 20);

              //  $filter.slideDown(800);
          } else {
              $filter = $data.find('.tv-case-study[data-category=' + $filterButton.attr("data-category") + ']');
              $data.find('.tv-case-study').removeClass("tv-case-study-show");
              $data.find('.tv-case-study').addClass("tv-case-study-hide");

              $filter.removeClass("tv-case-study-hide");
              setTimeout(function() {
                  $filter.addClass("tv-case-study-show");
              }, 20);
          }
      });

    });
    // ******************* all gsap animation here **************** //
    /////////////////////////////////////////////////////
    // Register GSAP
    gsap.registerPlugin(ScrollTrigger, ScrollSmoother, TweenMax, ScrollToPlugin);
    /////////////////////////////////////////////////////
    // Config GSAP
    gsap.config({
        nullTargetWarn: false,
    });
    /////////////////////////////////////////////////////
    let homeDigi = gsap.timeline()
    let title_left = document.querySelector(".banner-heading .pc-title-left, .gsap-heading-anim .pc-title-left");
    let title_right = document.querySelector(".banner-heading .pc-title-right, .gsap-heading-anim .pc-title-right");
    let split_title_left = new SplitText(title_left, { type: "chars" })
    let split_title_right = new SplitText(title_right, { type: "chars" })
    homeDigi.from(split_title_left.chars, { duration: 1, x: 70, autoAlpha: 0, stagger: 0.03 });
    homeDigi.from(split_title_right.chars, { duration: 1, x: 70, autoAlpha: 0, stagger: 0.03 }, "-=.65");
    let hero_subtitle = document.querySelectorAll(".pc-hero-subtitle")
    hero_subtitle.forEach((hero_subtitle) => {
        let split_hero_subtitle = new SplitText(hero_subtitle, { type: "chars words", position: "absolute" })
        gsap.from(split_hero_subtitle.words, { duration: 1, x: 50, autoAlpha: 0, stagger: 0.05 });
    })
    /////////////////////////////////////////////////
    //// button hover aniamtion
    $('.btn-hover').on('mouseenter', function (e) {
        var x = e.pageX - $(this).offset().left;
        var y = e.pageY - $(this).offset().top;
    
        $(this).find('span.dot').css({
          top: y,
          left: x
        });
    });
    $('.btn-hover').on('mouseout', function (e) {
        var x = e.pageX - $(this).offset().left;
        var y = e.pageY - $(this).offset().top;
    
        $(this).find('span.dot').css({
          top: y,
          left: x
        });
      });
    ///////////////////////////////////////////////////
    //// title animation
    let splitTitleLines = gsap.utils.toArray(".title-anim");
    splitTitleLines.forEach(splitTextLine => {
        const tl = gsap.timeline({
          scrollTrigger: {
            trigger: splitTextLine,
            start: 'top 90%',
            end: 'bottom 60%',
            scrub: false,
            markers: false,
            toggleActions: 'play none none none'
          }
        });
  
        const itemSplitted = new SplitText(splitTextLine, { type: "words, lines" });
        gsap.set(splitTextLine, { perspective: 400 });
        itemSplitted.split({ type: "lines" })
        tl.from(itemSplitted.lines, { duration: 1, delay: 0.3, opacity: 0, rotationX: -80, force3D: true, transformOrigin: "top center -50", stagger: 0.1 });
      });
        /////////////////////////////////////////////////////
        // Text Animation
        let splitTextLines = gsap.utils.toArray(".text-anim p");

        splitTextLines.forEach(splitTextLine => {
        const tl = gsap.timeline({
            scrollTrigger: {
            trigger: splitTextLine,
            start: 'top 90%',
            duration: 2,
            end: 'bottom 60%',
            scrub: false,
            markers: false,
            toggleActions: 'play none none none'
            }
        });

        const itemSplitted = new SplitText(splitTextLine, { type: "lines" });
        gsap.set(splitTextLine, { perspective: 400 });
        itemSplitted.split({ type: "lines" })
        tl.from(itemSplitted.lines, { duration: 1, delay: 0.5, opacity: 0, rotationX: -80, force3D: true, transformOrigin: "top center -50", stagger: 0.1 });
        });
        // home 1 aniamtino
         // All Buttons 
        let all_buttons = gsap.utils.toArray("#btn_wrapper, .btn-bounce-animated")
        all_buttons.forEach((btn) => {
            if (!(btn.classList.contains("hero__button"))) {
            gsap.from(btn, {
                scrollTrigger: {
                trigger: btn,
                start: "top center+=150",
                markers: false,
                },
                opacity: 0,
                y: -70,
                ease: "bounce",
                duration: 1.5,
            })
            }
        })
    /////////////////////////////////////////////////////
    // multiple section scroll together
    if (device_width > 1200) {
        var multiple_section_wrapper = document.querySelector('.multiple-section-wrapper');
        if (multiple_section_wrapper) {
            let duration = 1,
              sections = gsap.utils.toArray(".multiple_panel"),
              sectionIncrement = duration / (sections.length - 1),
              tl = gsap.timeline({
                scrollTrigger: {
                  trigger: ".multiple-section-wrapper",
                  pin: true,
                  scrub: 1,
                  start: "top top",
                  end: "+=5000"
                }
              });
      
            tl.to(sections, {
              xPercent: -100 * (sections.length - 1),
              duration: duration,
              ease: "none"
            });
      
            sections.forEach((section, index) => {
              let tween = gsap.from(section, {
                opacity: 0,
                scale: 1,
                duration: 0.5,
                force3D: true,
                paused: true
              });
              addSectionCallbacks(tl, {
                start: sectionIncrement * (index - 0.1),
                end: sectionIncrement * (index + 0.99),
                onEnter: () => tween.play(),
                onLeave: () => tween.reverse(),
                onEnterBack: () => tween.play(),
                onLeaveBack: () => tween.reverse()
              });
              index || tween.progress(1);
            });
      
            function addSectionCallbacks(timeline, { start, end, param, onEnter, onLeave, onEnterBack, onLeaveBack }) {
              let trackDirection = animation => {
                let onUpdate = animation.eventCallback("onUpdate"),
                  prevTime = animation.time();
                animation.direction = animation.reversed() ? -1 : 1;
                animation.eventCallback("onUpdate", () => {
                  let time = animation.time();
                  if (prevTime !== time) {
                    animation.direction = time < prevTime ? -1 : 1;
                    prevTime = time;
                  }
                  onUpdate && onUpdate.call(animation);
                });
              },
                empty = v => v;
              timeline.direction || trackDirection(timeline);
              start >= 0 && timeline.add(() => ((timeline.direction < 0 ? onLeaveBack : onEnter) || empty)(param), start);
              end <= timeline.duration() && timeline.add(() => ((timeline.direction < 0 ? onEnterBack : onLeave) || empty)(param), end);
            }
          }
      }
  // working with cursor
  function mousemoveHandler(e) {
    try {
      let tl = gsap.timeline({
        defaults: {
          x: e.clientX,
          y: e.clientY,
        }
      })
      // Main Cursor Moving 
      tl.to(".cursor1", {
        ease: "power2.out"
      })
        .to(".cursor2", {
          ease: "power2.out"
        }, "-=0.4")
    }
    catch(error) {
      console.log(error)
    }
  }
  document.addEventListener("mousemove", mousemoveHandler);
 // data bg color
 $("[data-bgcolor]").each(function () {
    $(this).css("background-color", $(this).attr("data-bgcolor"))
  })
  $("[data-background]").each(function () {
    $(this).css("background-image", `url(${$(this).attr("data-background")})`);
  })
  let sectionBtn = $('.section-btn');
  let sectionPopupClose = $('.tc-popup-close-btn');
  sectionBtn.on('click', function() {
    let sectionID = $(this).attr("data-section");
    $('#'+sectionID).addClass('active');
    $('.tc-all-popup-overlay').addClass('active');
  })
  sectionPopupClose.on('click', function() {
    let sectionCloseID = $(this).attr('data-close');
    $('#'+sectionCloseID).removeClass('active');
    $('.tc-all-popup-overlay').removeClass('active');
  })
  $('.pc-landing-card-rotate-wrap').on('mouseover', function() {
    var childComponent = $(this).find('.back.has-content');
    setTimeout(() => {
      childComponent.css("z-index", "9");
    }, 790);
  })
  $('.pc-landing-card-rotate-wrap').on('mouseleave', function() {
    var childComponent = $(this).find('.back.has-content');
    setTimeout(() => {
      childComponent.css("z-index", "-1");
    }, 790);
  });
  setInterval(function() { $('.pc-landing-card-rotate-wrap[data-section="popup-about"]').toggleClass('active') }, 7000);
});