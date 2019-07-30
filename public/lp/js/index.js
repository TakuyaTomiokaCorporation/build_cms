
var AVIOT = AVIOT || {}

// FVのタイトルテキストのアニメーション
AVIOT.FV_FADE_ANIMATE = {
  init: function () {
    this.setParams();
    this.loadEvents();
  },
  setParams: function () {
    this.$titleTarget = $(".jsc-fade-text");
  },
  loadEvents: function () {
    this.$titleTarget.addClass("is-fadein");
  }
}
// FV下のCVエリアのアニメーション
AVIOT.INVIEW_ANIMATE = {
  init: function () {
    this.setParams();
    this.scrollEvent();
  },
  setParams: function () {
    this.$window = $(window);
    this.windowHeight = this.$window.innerHeight();
    this.$cvTrigger01 = $(".jsc-cv01-trigger");
    this.$cvTarget01 = $(".jsc-cv01-target");
  },
  scrollEvent: function () {
    this.$window.on('scroll', $.proxy(this.windowPosition, this));
  },
  windowPosition: function () {
    var windowTop = this.$window.scrollTop();
    if (windowTop >= this.windowHeight/6) {
      this.$cvTarget01.addClass("is-fadeup");
    } else {
      this.$cvTarget01.animate({ "opacity": 0 }, 500);
      this.$cvTarget01.removeClass("is-fadeup");
    }
  }
}

$(window).on('load', function () {
  AVIOT.FV_FADE_ANIMATE.init();
  AVIOT.INVIEW_ANIMATE.init();
});