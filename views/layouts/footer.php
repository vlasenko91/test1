        <div class="back_footer1">
            <div class="container">
                <div class="row">
                    <div class="col-md-2">
                        <ul class="list-unstyled black">
                            <li><a  class="black" href="#">О нас</a></li>
                            <li><a  class="black" href="#">Новости</a></li>
                            <li><a  class="black" href="#">Контакты</a></li>
                            <li><a  class="black" href="#">Цены</a></li>
                        </ul>
                    </div>
                    <div class="col-md-2">
                        <ul class="list-unstyled black">
                            <li><a class="black" href="/Science">Наука</a></li>
                            <li><a class="black" href="#">Индустрия</a></li>
                            <li><a class="black" href="#">Приложения</a></li>
                            <li><a class="black" href="/">Главная</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6 center">
                        <h4>Партнеры</h4>
                        <a href="https://www.sfedu.ru/" target="_blank">
                            <img  class="img-heigh" src="/templates/images/sfedu.png">
                        </a>
                        <a href="http://south-itpark.ru/" target="_blank">
                            <img  class="img-heigh" src="/templates/images/It_park.png">
                        </a>
                        <a href="http://rkr61.ru/" target="_blank">
                            <img  class="img-heigh" src="/templates/images/rkr.png">
                        </a>
                    </div>  
                    <div class="col-md-2">
                        <h4 class="center">Мы в соцсетях</h4>
                            <a class=" black smallpad blue_vk" href="/Science">
                                    <i class="fa fa-vk fa-2x "></i>
                            </a>
                            <a class=" black smallpad blue_vk" href="#">
                                <i class="fa fa-facebook-f fa-2x "></i>
                            </a>
                            <a class="black smallpad red" href="#">
                                <i class="fa fa-google-plus fa-2x "></i>
                            </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="back_footer2">
            <div class="container text-center">
                <div class="row">
                    <div class="col-sm-4">
                        <a class="white" href="/">© 2015 UniVirLab</a>
                    </div><div class="col-sm-4">
                        <a class="white" href="#">Licence</a>
                    </div>
                    <div class="col-sm-4">
                        <a class="white" href="#">Privacy</a>
                    </div>
                </div>
            </div>
        </div>        
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="/templates/js/bootstrap.js"></script>
        <script src="/templates/js/autosize.js"></script>
        <script src="http://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.js"></script>
        <script> 
            
        $(function () {
            $('[data-toggle="popover"]').popover()
        })
    </script>
        <!-- Автовысота формы-->
        <script type="text/javascript">
            jQuery(function()
            {
                jQuery('#comment').autoResize();
            });
        </script>
        <!--        Исчезающее меню-->

        <script>
        $(window).scroll(function() {
          if ($(this).scrollTop() > 1) {
            document.getElementById('header').classList.add('nontransparent');
          } else {
            document.getElementById('header').classList.remove('nontransparent');
          }
        });
        </script>
<!--        Масштабируемый экран-->
        <script>
        $(document).ready(function () {
            $(window).bind('resizeEnd', function () {
              $("#myBackground").height($(window).height());
            });

            $(window).resize(function () {
              if (this.resizeTO) clearTimeout(this.resizeTO);
              this.resizeTO = setTimeout(function () {
                $(this).trigger('resizeEnd');
              }, 0);
            }).trigger("resize");
          });
        </script>
<!--        Подвижный Экран-->
        <script>
            var lFollowX = 0,
    lFollowY = 0,
    x = 0,
    y = 0,
    friction = 1 / 30;

function moveBackground() {
  x += (lFollowX - x) * friction;
  y += (lFollowY - y) * friction;
  
  translate = 'translate(' + x + 'px, ' + y + 'px) scale(1.1)';

  $('.bg').css({
    '-webit-transform': translate,
    '-moz-transform': translate,
    'transform': translate
  });

  window.requestAnimationFrame(moveBackground);
}

$(window).on('mousemove click', function(e) {

  var lMouseX = Math.max(-100, Math.min(100, $(window).width() / 2 - e.clientX));
  var lMouseY = Math.max(-100, Math.min(100, $(window).height() / 2 - e.clientY));
  lFollowX = (20 * lMouseX) / 100; // 100 : 12 = lMouxeX : lFollow
  lFollowY = (10 * lMouseY) / 100;

});

moveBackground();
        </script>
<!--        Анимации-->
        <script>
        (function() {
  var Util,
    __bind = function(fn, me){ return function(){ return fn.apply(me, arguments); }; };

  Util = (function() {
    function Util() {}

    Util.prototype.extend = function(custom, defaults) {
      var key, value;
      for (key in custom) {
        value = custom[key];
        if (value != null) {
          defaults[key] = value;
        }
      }
      return defaults;
    };

    Util.prototype.isMobile = function(agent) {
      return /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(agent);
    };

    return Util;

  })();

  this.WOW = (function() {
    WOW.prototype.defaults = {
      boxClass: 'wow',
      animateClass: 'animated',
      offset: 0,
      mobile: true
    };

    function WOW(options) {
      if (options == null) {
        options = {};
      }
      this.scrollCallback = __bind(this.scrollCallback, this);
      this.scrollHandler = __bind(this.scrollHandler, this);
      this.start = __bind(this.start, this);
      this.scrolled = true;
      this.config = this.util().extend(options, this.defaults);
    }

    WOW.prototype.init = function() {
      var _ref;
      this.element = window.document.documentElement;
      if ((_ref = document.readyState) === "interactive" || _ref === "complete") {
        return this.start();
      } else {
        return document.addEventListener('DOMContentLoaded', this.start);
      }
    };

    WOW.prototype.start = function() {
      var box, _i, _len, _ref;
      this.boxes = this.element.getElementsByClassName(this.config.boxClass);
      if (this.boxes.length) {
        if (this.disabled()) {
          return this.resetStyle();
        } else {
          _ref = this.boxes;
          for (_i = 0, _len = _ref.length; _i < _len; _i++) {
            box = _ref[_i];
            this.applyStyle(box, true);
          }
          window.addEventListener('scroll', this.scrollHandler, false);
          window.addEventListener('resize', this.scrollHandler, false);
          return this.interval = setInterval(this.scrollCallback, 50);
        }
      }
    };

    WOW.prototype.stop = function() {
      window.removeEventListener('scroll', this.scrollHandler, false);
      window.removeEventListener('resize', this.scrollHandler, false);
      if (this.interval != null) {
        return clearInterval(this.interval);
      }
    };

    WOW.prototype.show = function(box) {
      this.applyStyle(box);
      return box.className = "" + box.className + " " + this.config.animateClass;
    };

    WOW.prototype.applyStyle = function(box, hidden) {
      var delay, duration, iteration;
      duration = box.getAttribute('data-wow-duration');
      delay = box.getAttribute('data-wow-delay');
      iteration = box.getAttribute('data-wow-iteration');
      return box.setAttribute('style', this.customStyle(hidden, duration, delay, iteration));
    };

    WOW.prototype.resetStyle = function() {
      var box, _i, _len, _ref, _results;
      _ref = this.boxes;
      _results = [];
      for (_i = 0, _len = _ref.length; _i < _len; _i++) {
        box = _ref[_i];
        _results.push(box.setAttribute('style', 'visibility: visible;'));
      }
      return _results;
    };

    WOW.prototype.customStyle = function(hidden, duration, delay, iteration) {
      var style;
      style = hidden ? "visibility: hidden; -webkit-animation-name: none; -moz-animation-name: none; animation-name: none;" : "visibility: visible;";
      if (duration) {
        style += "-webkit-animation-duration: " + duration + "; -moz-animation-duration: " + duration + "; animation-duration: " + duration + ";";
      }
      if (delay) {
        style += "-webkit-animation-delay: " + delay + "; -moz-animation-delay: " + delay + "; animation-delay: " + delay + ";";
      }
      if (iteration) {
        style += "-webkit-animation-iteration-count: " + iteration + "; -moz-animation-iteration-count: " + iteration + "; animation-iteration-count: " + iteration + ";";
      }
      return style;
    };

    WOW.prototype.scrollHandler = function() {
      return this.scrolled = true;
    };

    WOW.prototype.scrollCallback = function() {
      var box;
      if (this.scrolled) {
        this.scrolled = false;
        this.boxes = (function() {
          var _i, _len, _ref, _results;
          _ref = this.boxes;
          _results = [];
          for (_i = 0, _len = _ref.length; _i < _len; _i++) {
            box = _ref[_i];
            if (!(box)) {
              continue;
            }
            if (this.isVisible(box)) {
              this.show(box);
              continue;
            }
            _results.push(box);
          }
          return _results;
        }).call(this);
        if (!this.boxes.length) {
          return this.stop();
        }
      }
    };

    WOW.prototype.offsetTop = function(element) {
      var top;
      top = element.offsetTop;
      while (element = element.offsetParent) {
        top += element.offsetTop;
      }
      return top;
    };

    WOW.prototype.isVisible = function(box) {
      var bottom, offset, top, viewBottom, viewTop;
      offset = box.getAttribute('data-wow-offset') || this.config.offset;
      viewTop = window.pageYOffset;
      viewBottom = viewTop + this.element.clientHeight - offset;
      top = this.offsetTop(box);
      bottom = top + box.clientHeight;
      return top <= viewBottom && bottom >= viewTop;
    };

    WOW.prototype.util = function() {
      return this._util || (this._util = new Util());
    };

    WOW.prototype.disabled = function() {
      return !this.config.mobile && this.util().isMobile(navigator.userAgent);
    };

    return WOW;

  })();

}).call(this);


wow = new WOW(
  {
    animateClass: 'animated',
    offset: 100
  }
);
wow.init();
        </script>

    </body>
</html>
