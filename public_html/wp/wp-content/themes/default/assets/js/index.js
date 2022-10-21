
window.addEventListener ('DOMContentLoaded' , function () {

  //index tagreel (infinite text)
  const rows = document.querySelectorAll(".cb-tagreel-row");

  rows.forEach(function (e, i) {
    let row_width = e.getBoundingClientRect().width;
    let row_item_width = e.children[0].getBoundingClientRect().width;
    let initial_offset = ((4 * row_item_width) / row_width) * 100 * -1;
    let x_translation = initial_offset * -1;
    // console.log(e.children[0].clientWidth);
    // console.log(x_translation);

    gsap.set(e, {
      xPercent: `${initial_offset}`
    });

    let duration = 10* (i + 1);

    var tl = gsap.timeline();

    tl.to(e, {
      ease: "none",
      duration: duration,
      xPercent: 0,
      repeat: -1
    });
  });

  if (window.matchMedia('(min-width:768px)').matches) {
    // reveal
    let revealContainers = document.querySelectorAll('.js-reveal');
    revealContainers.forEach((revealContainer) => {
      let item = revealContainer.querySelector('.js-reveal-item');
      let bg = revealContainer.querySelector('.js-reveal-bg');
      let tl = gsap.timeline({
        scrollTrigger: {
          trigger: revealContainer,
          toggleActions: "restart none none none",
          start:"top 60%",
          markers: false
        }
      });
      tl.set(item, {autoAlpha: 0});
      tl
        .to(bg, 0.3, {scaleX:1})
        .to(item, 0.3, {autoAlpha:1}, "-=0.1")
        .to(bg, 0.3, {scaleX:0});
    });

    //text reveal
    let textRevealContainers = document.querySelectorAll(".js-text-reveal");
    textRevealContainers.forEach((textContainer) => {
      firstBg = textContainer.querySelectorAll('.text-first-bg'),
      secBg = textContainer.querySelectorAll('.text-second-bg'),
      word  = textContainer.querySelectorAll('.text-word');
      secEl  = textContainer.querySelectorAll('.js-second-el');
      thirdEl  = textContainer.querySelectorAll('.js-third-el');
      let tl = gsap.timeline({
        scrollTrigger: {
          trigger: textContainer,
          toggleActions: "restart none none none",
          start:"top 60%",
          markers: false,
        }
      });
      tl.set(word, {autoAlpha: 0})
        .set(secEl, {autoAlpha: 0, x: -100})
        .set(thirdEl, {autoAlpha: 0, x: -100});

      tl
        .to(firstBg, 0.3, {scaleX:1})
        .to(secBg, 0.3, {scaleX:1})
        .to(word, 0.2, {autoAlpha:1}, "-=0.1")  
        .to(firstBg, 0.3, {scaleX:0})
        .to(secBg, 0.3, {scaleX:0})
        .to(secEl, 0.5, {autoAlpha:1, x: 0}, "-=0.1")
        .to(thirdEl, 0.5, {autoAlpha:1,x: 0}, "-=0.1")
      });
  }

  // feature swiper
    new Swiper(".feature-swiper", {
    direction: "horizontal",
    loop: true,
    autoHeight: false,
    centeredSlides:true,
    autoplay:true,
    slidesPerView: 2,
    breakpoints: {
      640: {
        slidesPerView:2,
        spaceBetween: 40,
      },
      992: {
        slidesPerView: 3,
        spaceBetween: 40,
      }
    },
  });

  //blog swiper
    new Swiper(".blog-swiper", {
    direction: "horizontal",
    loop: true,
    autoHeight: false,
    centeredSlides:true,
    autoplay:true,
    slidesPerView: 2,
    spaceBetween: 20,
    breakpoints: {
      992: {
        slidesPerView: 3,
        spaceBetween: 40,
      }
    },
  });

})

$(function(){
  // hero cube animation
    var reversed = false;

    var $container = $('#container');
    var $cubeContainer = $('#cube-container');
    TweenMax.set($cubeContainer, {
      x:150, 
      y:150
    });
    
    var sideLength = 30;
    
    var lTop = '90';
    var lRight = '60';
    var lLeft = '70';
    
    var angleUpRight = Math.PI * (1 / 6);
    var angleDownRight = Math.PI * (11 / 6);
    var angleUpLeft = Math.PI * (5 / 6);
    var angleDownLeft = Math.PI * (7 / 6);
    var distUp = sideLength;
    var distX = sideLength * Math.cos(angleUpRight);
    var distY = -sideLength * Math.sin(angleUpRight);
    
    var pathTop = 'M 0 0 ' + 
        'l ' + (distX) + ' ' + (distY) + ' ' + 
        'l ' + (-distX) + ' ' + (distY) + ' ' + 
        'l ' + (-distX) + ' ' + (-distY) + ' ' + 
        ' z';
    
    var pathRight = 'M 0 0 ' + 
        'l ' + (distX) + ' ' + (distY) + ' ' + 
        'l ' + (0) + ' ' + (sideLength) + ' ' + 
        'l ' + (-distX) + ' ' + (-distY) + ' ' + 
        ' z';
    
    var pathLeft = 'M 0 0 ' + 
        'l ' + (-distX) + ' ' + (distY) + ' ' + 
        'l ' + (0) + ' ' + (sideLength) + ' ' + 
        'l ' + (distX) + ' ' + (-distY) + ' ' + 
        ' z';
    
    var cubes = [];
    var cubeElements = [];
    
    var Cube = function(x, y, z, h, s) {
      this.x = x;
      this.y = y;
      this.z = z;
      this.h = h;
      this.s = s;
      
      this.$e = $(svgNs('g'));
      
      this.colTop = 'hsl(' + h + ', ' + s + '%, ' + lTop + '%)';
      this.colRight = 'hsl(' + h + ', ' + s + '%, ' + lRight + '%)';
      this.colLeft = 'hsl(' + h + ', ' + s + '%, ' + lLeft + '%)';
      
      this.$sTop = $(svgNs('path'));
      this.$sTop.attr({
        fill:this.colTop, 
        d:pathTop
      });
      this.$e.append(this.$sTop);
      
      this.$sRight = $(svgNs('path'));
      this.$sRight.attr({
        fill:this.colRight, 
        d:pathRight
      });
      this.$e.append(this.$sRight);
      
      this.$sLeft = $(svgNs('path'));
      this.$sLeft.attr({
        fill:this.colLeft, 
        d:pathLeft
      });
      this.$e.append(this.$sLeft);
      
      
      TweenMax.set(this.$e, {
        x:(x * distX) + (y * -distX), 
        y:(x * -distY) + (y * -distY) + (z * -sideLength)
      });
      
    };
    
    var h = 35;
    var s = 100;
    
    function makeCube(x, y, z, h, s) {
      var c = new Cube(x, y, z, h, s);
      $cubeContainer.append(c.$e);
      cubes.push(c);
    }
    
    // Build out cubes
    // 1st cube
    makeCube(0, 0, 0, h, s);
    
    // 2x2, tier 1
    makeCube(1, 0, 0, h, s);
    makeCube(0, 1, 0, h, s);
    makeCube(0, 0, 1, h, s);
    
    // 2x2, tier 2
    makeCube(1, 1, 0, h, s);
    makeCube(0, 1, 1, h, s);
    makeCube(1, 0, 1, h, s);
    
    // 2x2, tier 3
    makeCube(1, 1, 1, h, s);
    
    // 3x3, tier 1
    makeCube(2, 0, 0, h, s);
    makeCube(0, 2, 0, h, s);
    makeCube(0, 0, 2, h, s);
    
    // 3x3, tier 2
    makeCube(2, 1, 0, h, s);
    makeCube(2, 0, 1, h, s);
    makeCube(1, 2, 0, h, s);
    makeCube(0, 2, 1, h, s);
    makeCube(1, 0, 2, h, s);
    makeCube(0, 1, 2, h, s);
    
    // 3x3, tier 3
    makeCube(2, 1, 1, h, s);
    makeCube(1, 2, 1, h, s);
    makeCube(1, 1, 2, h, s);
    
    // 3x3, tier 4
    makeCube(2, 2, 0, h, s);
    makeCube(2, 0, 2, h, s);
    makeCube(0, 2, 2, h, s);
    
    // 3x3, tier 5
    makeCube(2, 2, 1, h, s);
    makeCube(2, 1, 2, h, s);
    makeCube(1, 2, 2, h, s);
    
    // 3x3, tier 6
    makeCube(2, 2, 2, h, s);
    
    
    var offset = 0.25;
    var slideDur = 0.75;
    //var scaleDur = cubes.length * slideDur;
    var scaleDur = (cubes.length - 1) * offset + (slideDur + offset);
    var slideUpX = 0;
    var slideUpY = -distUp * 20;
    var slideRightX = distX * 20;
    var slideRightY = -distY * 20;
    var slideLeftX = -distX * 20;
    var slideLeftY = -distY * 20;
    
    var assembleTl = new TimelineMax({
      repeat:-1, 
      callbackScope:this, 
      onReverseComplete:function() {
        assembleTl.progress(1);
        assembleTl.reverse();
      }
    });
    
    for(var i = 1; i < cubes.length; i++) {
      var c = cubes[i];
      var $e = c.$e;
      
      var dir = i % 3;
      var x, y;
      if(dir == 0) {
        x = '+=' + slideUpX;
        y = '+=' + slideUpY;
      }
      else if(dir == 1) {
        x = '+=' + slideRightX;
        y = '+=' + slideRightY;
      }
      else {
        x = '+=' + slideLeftX;
        y = '+=' + slideLeftY;
      }
      
      assembleTl.from($e, slideDur, {
        x:x, 
        y:y, 
        ease:Power1.easeOut
        //ease:Bounce.easeOut
      }, ((i - 1) * offset));
    }
    
    assembleTl.to($cubeContainer, assembleTl.duration(), {
      scale:1/3, 
      ease:Linear.easeNone
    }, 0);
    
    
    $container.click(function() {
      var clickTl = new TimelineMax({
        
      });
      
      clickTl.to(assembleTl, 2, {
        timeScale:0
      })
      .call(function() {
        if(!reversed) assembleTl.reverse();
        else assembleTl.play();
        reversed = !reversed;
      })
      .to(assembleTl, 2, {
        timeScale:1
      });
    });
    
    /*
    * Utility functions
    */
    
    function rand(min, max) {
      return min + (Math.random() * (max - min));
    }
    
    function randInt(min, max) {
      return Math.floor(min + (Math.random() * (max - min)));
    }
    
    function clickable(elem) {
        $(elem).removeClass('no-select').addClass('hitarea');
      }
    
    function clickables(elems) {
      for(var i in elems) {
        $(elems[i]).removeClass('no-select').addClass('hitarea');
      }
    }
    
    function unclickable(elem) {
      $(elem).removeClass('hitarea').addClass('no-select');
    }
    
    function unclickables(elems) {
      for(var i in elems) {
        $(elems[i]).removeClass('hitarea').addClass('no-select');
      }
    }
    
    /*
    * Borrowed from http://stackoverflow.com/questions/6148859/is-it-possible-to-work-with-jquery-and-svg-directly-no-plugins
    */
    function svgNs(tag) {
      return document.createElementNS('http://www.w3.org/2000/svg', tag);
    }
  });