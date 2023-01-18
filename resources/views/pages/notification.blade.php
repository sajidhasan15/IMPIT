<style>
    /* * {
  outline: none;
}

html,
body {
  height: 100%;
  min-height: 100%;
}

body {
  margin: 0;
  cursor: url(http://k003.kiwi6.com/hotlink/vp054ir5gt/c1.png) 32 32, auto;
  cursor: -webkit-image-set(url(http://k003.kiwi6.com/hotlink/vp054ir5gt/c1.png) 1x,url(http://k003.kiwi6.com/hotlink/z6fy599487/c2.png) 2x) 32 32, auto;
  overflow: hidden;
}

body:active {
  cursor: url(http://k003.kiwi6.com/hotlink/3p6w4icbzt/c1a.png) 32 32, auto;
  cursor: -webkit-image-set( url(http://k003.kiwi6.com/hotlink/3p6w4icbzt/c1a.png) 1x, url(http://k003.kiwi6.com/hotlink/6ma7828al1/c2a.png) 2x ) 32 32, auto;
} */

#app-cover {
  height: 100%;
}

.app {
  position: relative;
  height: 100%;
}

.bell-cover {
  position: fixed;
  top: 50%;
  right: 0;
  left: 0;
  width: 160px;
  height: 174px;
  /* margin: -87px auto 0 auto; */
}

.notifications-count {
  position: absolute;
  top: 12px;
  right: 0;
  width: 33px;
  height: 27px;
  color: #fff;
  font-size: 30px;
  font-family: Arial;
  font-weight: bold;
  text-align: left;
  line-height: 1;
  padding: 15px 12px;
  background-color: #da3225;
  border-radius: 50%;
  box-shadow: 0 0 0 6px #32333b;
  transform: scale(50);
  opacity: 0;
  transition: 0.3s cubic-bezier(0, 0.24, 0.86, 1.08) all;
  z-index: 1;
}

.notifications-count.active {
  transform: scale(1);
  opacity: 1;
}

.notifications-count.zindex {
  z-index: 3;
}

.bell-icon {
  position: absolute;
  top: 10px;
  left: 0;
  width: 160px;
  height: 140px;
  z-index: 2;
}

.bell-top {
  position: absolute;
  top: -10px;
  right: 0;
  left: 0;
  width: 20px;
  height: 20px;
  margin: 0 auto;
  background-color: #fff;
  border-radius: 50% 50% 0 0;
}

.bell-middle {
  position: relative;
  width: 115px;
  height: 130px;
  margin: 0 auto;
  background-color: #fff;
  border-radius: 50% 50% 0 0;
}

.bell-curve {
  position: absolute;
  top: 80px;
  bottom: 0;
  width: 20px;
  background-color: #fff;
}

.bell-curve:before {
  content: "";
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
}

.bell-left-curve {
  left: -20px;
}

body,
.bell-left-curve:before,
.bell-right-curve:before {
  background-color: #32333b;
}

.bell-left-curve:before {
  border-radius: 0 0 300% 0;
}

.bell-right-curve:before {
  border-radius: 0 0 0 300%;
}

.bell-right-curve {
  right: -20px;
}

.bell-bottom {
  height: 10px;
  background-color: #fff;
  border-radius: 10px;
}

.bell-clapper {
  position: absolute;
  right: 30px;
  bottom: -24px;
  width: 40px;
  height: 20px;
  margin: 0 auto;
  background-color: #fff;
  border-radius: 0 0 40px 40px;
}

.bell-icon.active {
  animation: swing 0.6s ease 0s;
}

.bell-icon.active .bell-clapper {
  animation: move 0.7s ease 0s;
}

@keyframes swing {
  0% {
    transform: rotateZ(0);
  }
  25% {
    transform: rotateZ(25deg);
  }
  50% {
    transform: rotateZ(-15deg);
  }
  75% {
    transform: rotateZ(10deg);
  }
  100% {
    transform: rotateZ(0);
  }
}

@keyframes move {
  0% {
    transform: translateX(0);
  }
  20% {
    transform: translateX(-68px);
  }
  50% {
    transform: translateX(17px);
  }
  75% {
    transform: translateX(-8px);
  }
  85% {
    transform: translateX(3px);
  }
  100% {
    transform: translateX(0);
  }
}

</style>
<div id="app-cover">
  <div class="app">
    <div class="bell-cover">
      <div class="bell-icon active">
        <div class="bell-top"></div>
        <div class="bell-middle">
          <div class="bell-curve bell-left-curve"></div>
          <div class="bell-curve bell-right-curve"></div>
        </div>
        <div class="bell-bottom"></div>
        <div class="bell-clapper"></div>
      </div>
      <div class="notifications-count active zindex">5</div>
    </div>
  </div>
</div>

<style>
    $(function () {
  var bellIcon = $(".bell-icon"),
    notifsCount = $(".notifications-count");

  bellIcon.on("click", function () {
    notifsCount.toggleClass("active");

    $(this).toggleClass("active");

    if (notifsCount.hasClass("active")) notifsCount.addClass("zindex");
    else
      setTimeout(function () {
        notifsCount.removeClass("zindex");
      }, 300);
  });
});

</style>