import 'jquery';
require("jquery.scrollex");
import 'bootstrap';
import { gsap } from "gsap";

var app = {
  init: function () {
    console.log("init");

    $(".collapse").collapse({
      toggle: false,
    });

    // DISABLE RIGHT CLICK, CTLR+C,
    // $(document).bind("cut copy paste contextmenu", function (e) {
    //   e.preventDefault();
    // });

    // ANIMATION GSAP ON FIRST PAGE COVER
    $(function () {
      gsap
        .timeline()
        .fromTo(
          "#reveal-cover-shapeblue, #reveal-cover-shapered",
          1,
          { opacity: 0, ease: "ease" },
          { opacity: 1 }
        )
        .fromTo(
          "#reveal-cover-shapegreen, #reveal-cover-shapeyellow",
          1.5,
          { opacity: 0, ease: "ease" },
          { opacity: 1 }
        )
        .fromTo(
          "#reveal-cover-logo",
          1,
          { opacity: 0, scale: 0.5, ease: "ease" },
          { opacity: 1, scale: 1 }
        );
    });

    // BRASIL POINTS
    $("#manaus").hover(
      function () {
        $("#coord1").css("backgroundColor", "#A88B55");
      },
      function () {
        $("#coord1").css("backgroundColor", "#fff");
      }
    );
    $("#boavista").hover(
      function () {
        $("#coord2").css("backgroundColor", "#A88B55");
      },
      function () {
        $("#coord2").css("backgroundColor", "#fff");
      }
    );
    $("#ananindeua,#santarem").hover(
      function () {
        $("#coord3").css("backgroundColor", "#A88B55");
      },
      function () {
        $("#coord3").css("backgroundColor", "#fff");
      }
    );
    $("#macapa").hover(
      function () {
        $("#coord4").css("backgroundColor", "#A88B55");
      },
      function () {
        $("#coord4").css("backgroundColor", "#fff");
      }
    );
    $("#imperatriz,#saoluis").hover(
      function () {
        $("#coord5").css("backgroundColor", "#A88B55");
      },
      function () {
        $("#coord5").css("backgroundColor", "#fff");
      }
    );
    $("#fortaleza,#juazeiro").hover(
      function () {
        $("#coord6").css("backgroundColor", "#A88B55");
      },
      function () {
        $("#coord6").css("backgroundColor", "#fff");
      }
    );
    $("#caruaru,#petrolina").hover(
      function () {
        $("#coord7").css("backgroundColor", "#A88B55");
      },
      function () {
        $("#coord7").css("backgroundColor", "#fff");
      }
    );
    $("#guarulhos,#itapevi,#litoral,#saopaulo").hover(
      function () {
        $("#coord8").css("backgroundColor", "#A88B55");
      },
      function () {
        $("#coord8").css("backgroundColor", "#fff");
      }
    );
    $("#duquedecaxias,#pirai,#taquara,#saogoncalo").hover(
      function () {
        $("#coord9").css("backgroundColor", "#A88B55");
      },
      function () {
        $("#coord9").css("backgroundColor", "#fff");
      }
    );

    /* =========================== ANIMATIONS ON SCROLL ======================  */
    $(".ebook-page").each(function () {
      $(this).scrollex({
        mode: "middle",
      });
    });
    
    $(function () {
      // second page cover
      var ctlrOneElementOnce = new ScrollMagic.Controller();
      new ScrollMagic.Scene({
        triggerElement: ".scd-cover-logo",
        triggerHook: "onCenter",
        reverse: false,
      })
        .setClassToggle(".scd-cover-logo", "visible")
        .addTo(ctlrOneElementOnce);

      // cultura ebd et pdca
      var ctlrManyElementsOnce = new ScrollMagic.Controller();
      $("#cultura-ebd").each(function () {
        $(this).find(".cultura-ebd-left-item");
        $(this).find(".cultura-ebd-right-item");
        new ScrollMagic.Scene({
          triggerElement: this,
          triggerHook: "onCenter",
          reverse: false,
        })
          .setClassToggle(
            ".cultura-ebd-left-item, .cultura-ebd-right-item",
            "visible"
          )
          .addTo(ctlrManyElementsOnce);
      });
      $("#pdca").each(function () {
        $(this).find(".pdca-details-item");
        new ScrollMagic.Scene({
          triggerElement: this,
          triggerHook: "onCenter",
          reverse: false,
        })
          .setClassToggle(".pdca-details-item", "visible")
          .addTo(ctlrManyElementsOnce);
      });
      // everypage
      var ctlrManyElementsManyTimes = new ScrollMagic.Controller();
      $(".ebook-page").each(function () {
        var myFadeIn = $(this).find(".myFadeIn");
        var quesitoCoverTitle = $(this).find(".quesitos-cover-title");
        var quesitoCoverText = $(this).find(".quesitos-cover-text");
        var tl = new TimelineMax();
        tl.fromTo(
          myFadeIn,
          0.6,
          { opacity: 0, yPercent: 100, ease: "ease-out" },
          { opacity: 1, yPercent: 0 }
        )
          .fromTo(
            quesitoCoverTitle,
            0.6,
            { opacity: 0, transform: "translateX(-100px)", ease: "ease-out" },
            { opacity: 1, transform: "none" }
          )
          .fromTo(
            quesitoCoverText,
            0.6,
            { opacity: 0, transform: "translateX(-100px)", ease: "ease-out" },
            { opacity: 1, transform: "none" }
          );
        new ScrollMagic.Scene({
          triggerElement: this,
          triggerHook: "onCenter",
          reverse: false,
        })
          .setTween(tl)
          .addTo(ctlrManyElementsManyTimes);
      });
      $(".ebook-page").each(function () {
        var bars = $(this).find(".ebd-bar");
        var quesitoBar = $(this).find(".quesito-bar");
        var tl = new TimelineMax();
        tl.fromTo(
          quesitoBar,
          0.6,
          {
            visibility: this.hidden,
            opacity: 0,
            width: 0,
            height: "34.19px",
            color: "transparent",
            ease: "ease-out",
          },
          {
            visibility: this.visible,
            opacity: 1,
            width: "100%",
            height: "34.19px",
            color: "white",
          }
        ).from(bars, 0.6, {
          visibility: this.hidden,
          opacity: 0,
          width: 0,
          height: "30px",
          color: "transparent",
          ease: "ease-out",
        });
        new ScrollMagic.Scene({
          triggerElement: this,
          triggerHook: "onEnter",
          reverse: false,
        })
          .setTween(tl)
          .addTo(ctlrManyElementsManyTimes);
      });
    });

    // scroll infinite
    // var $doc = $(document);
    // var $win = $(window);
    // var itemstoshow = 1;

    // $('.ebook-page').filter(function (index) {
    //   return (($(this).offset().top) > $win.height());
    // }).hide();

    // $(window).scroll(function () {
    //   if ($doc.height() - $win.height() - $(this).scrollTop() == 0) {
    //     $('.ebook-page:hidden:lt(' + itemstoshow + ')').show();
    //   }
    // });

    // A4 RESPONSIVE
    function adjustZoom() {
      var documentWidth = window.innerWidth;
      var documentHeight = window.innerHeight;
      var zoomWidth = documentWidth / (23 * 37.795276);
      var zoomHeight = documentHeight / (31.7 * 37.795276);
      var zoomLevel = Math.min(zoomWidth, zoomHeight);
      // stop zooming when book fits page
      // if (zoomLevel >= 1) return;
      $(".wrapperEBD").css({
        // "transform":"scale(" + zoomLevel + ")"
        // removing blur
        transform: "scale(" + zoomLevel + ") perspective(1px)",
        "-webkit-font-smoothing": "antialiased",
      });

      // BUTTONS ZOOM IN - OUT
      $(".zoom").on("click", function () {
        zoomLevel += 0.1;
        $(".wrapperEBD").css({
          transform: "scale(" + zoomLevel + ")",
        });
      });
      $(".zoom-out").on("click", function () {
        zoomLevel -= 0.1;
        $(".wrapperEBD").css({
          transform: "scale(" + zoomLevel + ")",
        });
      });
    }
    window.addEventListener("load", adjustZoom());

    // BUTTON : ZOOM RESET
    $(".zoom-init").on("click", function () {
      adjustZoom();
    });

    // RIGHT NAV FIXED EVEN WHEN ZOOMING
    $(window).resize(app.noZoom);

    // SCROLL BUTTON shows when user scrolls down >20px from top
    $(window).scroll(app.showScrollButton);

    // SMOOTH SCROLL
    // on <img go="#id"> <button go="#id">
    $('.indice-right__image, .indice-competencias-img, #indiceBtn').click(app.handleElementsClick);
    // on <a href="#id">
    $('a[href*="#"]:not([href="#"])').click(app.handleLinksClick);
  },

  noZoom: function () {
    $(".indice-right").css({
      top: "5%",
      right: "3%",
      width: "3em",
    });
  },
  showScrollButton: function () {
    var indiceBtn = document.getElementById("indiceBtn");
    if (
      document.body.scrollTop > 20 ||
      document.documentElement.scrollTop > 20
    ) {
      indiceBtn.style.display = "block";
    } else {
      indiceBtn.style.display = "none";
    }
  },
  handleElementsClick: function () {
    var $anchor = $(this);
    var idtogoto = $anchor.attr("go");
    $('html,body').animate({
      scrollTop: $(idtogoto).position().top,
    }, 1000);
  },
  handleLinksClick: function (event) {
    // Je supprime l'évenement par défaut de l'ancre
    event.preventDefault();
    // Je récupère l'élément sur lequel on a cliqué
    var clickedElement = event.target;
    // Je récupère la valeur du href et
    // je jqueryse l'élément sur lequel je souhaite me rendre
    var $target = $(clickedElement.hash);
    // Je vérifie si mon élément existe bien
    if ($target.length) {
      // Je calcule la position de mon élément ciblé
      // par rapport au haut de ma page
      var targetPosition = $target.position().top;
      // J'anime le scroll
      $("html, body").animate(
        {
          scrollTop: targetPosition,
        },
        1000
      );
    }
  },

};
$(app.init);
