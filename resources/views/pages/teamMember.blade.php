{{-- <style>

#slider{
width:100%;
}

.slider {
  margin: 0 auto;
  padding: 0;
  width: 800px;
  height: 400px;
  position: relative;
  overflow: hidden;
  ul.slides {
    width: 100%;
    height: 100%;
    margin: 0;
    padding: 0;
    display: table;
    position: absolute;
    top: 0;
    transition: left 800ms;
    li {
      list-style-type: none;
      display: table-cell;
      img{
        width: 800px;
      }
    }
  }
  ul.bullets {
    width: inherit;
    position: absolute;
    bottom: 0;
    left: 0;
    padding: 0;
    margin: 0 0 10px 0;
    text-align: center;
    z-index: 1;    
    li {
      list-style-type: none;
      display: inline;
      color: #fff;
      cursor: pointer;
      padding: 0 5px;      
      font-size: 20px;      
      font-family: sans-serif;          
    }
  }  
  .prev,
  .next{
    text-decoration: none;
    color: #fff;
    position: absolute;  
    z-index: 1;
    font-size: 42px;
    top: 43%;
    text-shadow: 2px 2px 5px rgba(0,0,0,0.5);
  }
  .prev{
    left: 20px;
  }
  .next{
    right: 20px;
  }
}  

</style>
<script>
    new Vue({
  el:'#slider',
  data: {       
    slides: [
      'https://lorempixel.com/800/400/food/1',
      'https://lorempixel.com/800/400/food/2',
      'https://lorempixel.com/800/400/food/3',
      'https://lorempixel.com/800/400/food/4',
      'https://lorempixel.com/800/400/food/5',      
    ],
    current: 0,
    width: 800,
    timer: 0,
  },
  methods: {
    nextSlide: function() {
      this.current++;
      if (this.current >= this.slides.length)
        this.current = 0;
      this.resetPlay();
    },
    prevSlide: function() {
      this.current--;
      if (this.current < 0)
        this.current = this.slides.length - 1;
      this.resetPlay();
    },
    selectSlide: function(i) {
      this.current = i;
      this.resetPlay();
    },
    resetPlay: function() {
      clearInterval(this.timer);
      this.play();
    },
    play: function() {
      let app = this;
      this.timer = setInterval(function() {
        app.nextSlide();
      }, 2000);
    }
  },
  created: function() {
    this.play();
  }
});
</script>
<div id="slider">  
    <div class="slider">
      <ul class="slides" :style="{left:-width*current+'px'}">
        <li v-for="(slide,i) in slides">
            <div class="card member text-center">
                <div class="card-body" style="box-shadow: 15px 15px 40px rgba(0, 0, 0, 0.15);">
                    <img alt="" class="img-fluid rounded-circle" src="assets/img/profileee .png" style="display: block;  margin-left: auto; margin-right: auto;">
                    <h3 class="card-title py-2">Jack Wilson</h3>
                    <p class="card-text pb-1">Chief Executive Officer</p>
                    <p class="socials"><a href="#"><i class="fa-brands fa-twitter fa-2x"></i></a>&nbsp; <a href="#"><i class="fa-brands fa-facebook fa-2x"></i></a>&nbsp; <a href="#"><i class="fa-brands fa-linkedin fa-2x"></i></a>&nbsp; <a href="#"><i class="fa-brands fa-instagram fa-2x"></i></a></p>
                </div>
            </div>
        </li>
        <li v-for="(slide,i) in slides">
            <div class="card member text-center">
                <div class="card-body" style="box-shadow: 15px 15px 40px rgba(0, 0, 0, 0.15);">
                    <img alt="" class="img-fluid rounded-circle" src="assets/img/profileee .png" style="display: block;  margin-left: auto; margin-right: auto;">
                    <h3 class="card-title py-2">Jack Wilson</h3>
                    <p class="card-text pb-1">Chief Executive Officer</p>
                    <p class="socials"><a href="#"><i class="fa-brands fa-twitter fa-2x"></i></a>&nbsp; <a href="#"><i class="fa-brands fa-facebook fa-2x"></i></a>&nbsp; <a href="#"><i class="fa-brands fa-linkedin fa-2x"></i></a>&nbsp; <a href="#"><i class="fa-brands fa-instagram fa-2x"></i></a></p>
                </div>
            </div>
        </li>
        <li v-for="(slide,i) in slides">
            <div class="card member text-center">
                <div class="card-body" style="box-shadow: 15px 15px 40px rgba(0, 0, 0, 0.15);">
                    <img alt="" class="img-fluid rounded-circle" src="assets/img/profileee .png" style="display: block;  margin-left: auto; margin-right: auto;">
                    <h3 class="card-title py-2">Jack Wilson</h3>
                    <p class="card-text pb-1">Chief Executive Officer</p>
                    <p class="socials"><a href="#"><i class="fa-brands fa-twitter fa-2x"></i></a>&nbsp; <a href="#"><i class="fa-brands fa-facebook fa-2x"></i></a>&nbsp; <a href="#"><i class="fa-brands fa-linkedin fa-2x"></i></a>&nbsp; <a href="#"><i class="fa-brands fa-instagram fa-2x"></i></a></p>
                </div>
            </div>
        </li>
        <li v-for="(slide,i) in slides">
            <div class="card member text-center">
                <div class="card-body" style="box-shadow: 15px 15px 40px rgba(0, 0, 0, 0.15);">
                    <img alt="" class="img-fluid rounded-circle" src="assets/img/profileee .png" style="display: block;  margin-left: auto; margin-right: auto;">
                    <h3 class="card-title py-2">Jack Wilson</h3>
                    <p class="card-text pb-1">Chief Executive Officer</p>
                    <p class="socials"><a href="#"><i class="fa-brands fa-twitter fa-2x"></i></a>&nbsp; <a href="#"><i class="fa-brands fa-facebook fa-2x"></i></a>&nbsp; <a href="#"><i class="fa-brands fa-linkedin fa-2x"></i></a>&nbsp; <a href="#"><i class="fa-brands fa-instagram fa-2x"></i></a></p>
                </div>
            </div>
        </li>
        <li v-for="(slide,i) in slides">
            <div class="card member text-center">
                <div class="card-body" style="box-shadow: 15px 15px 40px rgba(0, 0, 0, 0.15);">
                    <img alt="" class="img-fluid rounded-circle" src="assets/img/profileee .png" style="display: block;  margin-left: auto; margin-right: auto;">
                    <h3 class="card-title py-2">Jack Wilson</h3>
                    <p class="card-text pb-1">Chief Executive Officer</p>
                    <p class="socials"><a href="#"><i class="fa-brands fa-twitter fa-2x"></i></a>&nbsp; <a href="#"><i class="fa-brands fa-facebook fa-2x"></i></a>&nbsp; <a href="#"><i class="fa-brands fa-linkedin fa-2x"></i></a>&nbsp; <a href="#"><i class="fa-brands fa-instagram fa-2x"></i></a></p>
                </div>
            </div>
        </li>
        <li v-for="(slide,i) in slides">
            <div class="card member text-center">
                <div class="card-body" style="box-shadow: 15px 15px 40px rgba(0, 0, 0, 0.15);">
                    <img alt="" class="img-fluid rounded-circle" src="assets/img/profileee .png" style="display: block;  margin-left: auto; margin-right: auto;">
                    <h3 class="card-title py-2">Jack Wilson</h3>
                    <p class="card-text pb-1">Chief Executive Officer</p>
                    <p class="socials"><a href="#"><i class="fa-brands fa-twitter fa-2x"></i></a>&nbsp; <a href="#"><i class="fa-brands fa-facebook fa-2x"></i></a>&nbsp; <a href="#"><i class="fa-brands fa-linkedin fa-2x"></i></a>&nbsp; <a href="#"><i class="fa-brands fa-instagram fa-2x"></i></a></p>
                </div>
            </div>
        </li>
      </ul>
      <ul class="bullets">
        <li v-for="(slide,i) in slides" @click="selectSlide(i)" v-html="i==current ? '&#9679;' : '&omicron;'"></li>
      </ul>
      <a class="prev" href="#" @click.prevent="prevSlide">&#x25C0;</a>
      <a class="next" href="#" @click.prevent="nextSlide">&#x25B6;</a>
    </div>
  </div> --}}
{{-- <style>

.slider{
  width: 800px;
  height: 400px;
  margin: 3em auto;
  position: relative;
  background-color: #313;
}
.slide{
  height: 100%;
  width: 90%;
  display: flex;
  justify-content: space-evenly;
  align-items: center;
  margin: auto;
}
.controls span{
  position: fixed;
  top: 50%;
  padding: 1em;
  cursor: pointer;
  background-color: rgba(0,0,0,0.2);
}
.back{
  left: 1em;
}
.next{
  right: 1em;
}
.unod{
  position: absolute;
  display: none;
  width: 200px;
  height: 75%;
  color: #f1f1f1;
  background-color: rgba(0,0,0,0.5);
  border-radius: 10px;
  transition: 1s;
}
.unod.active,
.unod.prev,
.unod.next{
  display: flex;
  justify-content: center;
  align-items: center;
  animation: pakita 300ms ease-in;
}
.unod.prev{
  left: 50px;
  margin-right: 0.3em;
}
.unod.next{
  right: 50px;
  margin-left: 0.5em;
}
@keyframes pakita{
  from{
    opacity: 0;
  }to{
    opacity: 1;
  }
}
</style>
<script>
    var x = document.getElementsByClassName("slide");
var gaslide = false;
function padayon() {
    if(!gaslide){
      gaslide = true;
      document.getElementsByClassName("prev")[0].classList.remove("prev");
      document.getElementsByClassName("active")[0].classList.add("prev");
      document.getElementsByClassName("active")[0].classList.remove("active");
      document.getElementsByClassName("next")[0].classList.add("active");
      document.getElementsByClassName("next")[0].classList.remove("next");
        if(document.getElementsByClassName("active")[0].nextElementSibling){
          document.getElementsByClassName("active")[0].nextElementSibling.classList.add("next");
        }else{
          document.getElementsByClassName("unod")[0].classList.add("next");   
        }
      setTimeout(function(){
        gaslide = false; 
      }, 500); 
    }
}
function balik() {
    if(!gaslide){
      gaslide = true;
      document.getElementsByClassName("next")[0].classList.remove("next");
      document.getElementsByClassName("active")[0].classList.add("next");
      document.getElementsByClassName("active")[0].classList.remove("active");
      document.getElementsByClassName("prev")[0].classList.add("active");
      document.getElementsByClassName("prev")[0].classList.remove("prev");
        if(document.getElementsByClassName("active")[0].previousElementSibling){
          document.getElementsByClassName("active")[0].previousElementSibling.classList.add("prev");
        }else{
          document.getElementsByClassName("slide")[0].lastElementChild.classList.add("prev");   
        }
      setTimeout(function(){
        gaslide = false; 
      }, 500);
    }
}
window.onload = function() {
  if(!gaslide){
     setInterval(function () {
        padayon();
      }, 3500);
  }
}
</script>
<div class="slider">
    <div class="slide">
      <div class="unod active slide-1">
            <div class="card member text-center">
                <div class="card-body" style="box-shadow: 15px 15px 40px rgba(0, 0, 0, 0.15);">
                    <img alt="" class="img-fluid rounded-circle" src="assets/img/profileee .png" style="display: block;  margin-left: auto; margin-right: auto;">
                    <h3 class="card-title py-2">Jack Wilson</h3>
                    <p class="card-text pb-1">Chief Executive Officer</p>
                    <p class="socials"><a href="#"><i class="fa-brands fa-twitter fa-2x"></i></a>&nbsp; <a href="#"><i class="fa-brands fa-facebook fa-2x"></i></a>&nbsp; <a href="#"><i class="fa-brands fa-linkedin fa-2x"></i></a>&nbsp; <a href="#"><i class="fa-brands fa-instagram fa-2x"></i></a></p>
                </div>
            </div>
      </div>
      <div class="unod next slide-2">
            <div class="card member text-center">
                <div class="card-body" style="box-shadow: 15px 15px 40px rgba(0, 0, 0, 0.15);">
                    <img alt="" class="img-fluid rounded-circle" src="assets/img/profileee .png" style="display: block;  margin-left: auto; margin-right: auto;">
                    <h3 class="card-title py-2">Jack Wilson</h3>
                    <p class="card-text pb-1">Chief Executive Officer</p>
                    <p class="socials"><a href="#"><i class="fa-brands fa-twitter fa-2x"></i></a>&nbsp; <a href="#"><i class="fa-brands fa-facebook fa-2x"></i></a>&nbsp; <a href="#"><i class="fa-brands fa-linkedin fa-2x"></i></a>&nbsp; <a href="#"><i class="fa-brands fa-instagram fa-2x"></i></a></p>
                </div>
            </div>
      </div>
      <div class="unod slide-3">
            <div class="card member text-center">
                <div class="card-body" style="box-shadow: 15px 15px 40px rgba(0, 0, 0, 0.15);">
                    <img alt="" class="img-fluid rounded-circle" src="assets/img/profileee .png" style="display: block;  margin-left: auto; margin-right: auto;">
                    <h3 class="card-title py-2">Jack Wilson</h3>
                    <p class="card-text pb-1">Chief Executive Officer</p>
                    <p class="socials"><a href="#"><i class="fa-brands fa-twitter fa-2x"></i></a>&nbsp; <a href="#"><i class="fa-brands fa-facebook fa-2x"></i></a>&nbsp; <a href="#"><i class="fa-brands fa-linkedin fa-2x"></i></a>&nbsp; <a href="#"><i class="fa-brands fa-instagram fa-2x"></i></a></p>
                </div>
            </div>
      </div>
      <div class="unod slide-4">
            <div class="card member text-center">
                <div class="card-body" style="box-shadow: 15px 15px 40px rgba(0, 0, 0, 0.15);">
                    <img alt="" class="img-fluid rounded-circle" src="assets/img/profileee .png" style="display: block;  margin-left: auto; margin-right: auto;">
                    <h3 class="card-title py-2">Jack Wilson</h3>
                    <p class="card-text pb-1">Chief Executive Officer</p>
                    <p class="socials"><a href="#"><i class="fa-brands fa-twitter fa-2x"></i></a>&nbsp; <a href="#"><i class="fa-brands fa-facebook fa-2x"></i></a>&nbsp; <a href="#"><i class="fa-brands fa-linkedin fa-2x"></i></a>&nbsp; <a href="#"><i class="fa-brands fa-instagram fa-2x"></i></a></p>
                </div>
            </div>
      </div>
      <div class="unod slide-5">
            <div class="card member text-center">
                <div class="card-body" style="box-shadow: 15px 15px 40px rgba(0, 0, 0, 0.15);">
                    <img alt="" class="img-fluid rounded-circle" src="assets/img/profileee .png" style="display: block;  margin-left: auto; margin-right: auto;">
                    <h3 class="card-title py-2">Jack Wilson</h3>
                    <p class="card-text pb-1">Chief Executive Officer</p>
                    <p class="socials"><a href="#"><i class="fa-brands fa-twitter fa-2x"></i></a>&nbsp; <a href="#"><i class="fa-brands fa-facebook fa-2x"></i></a>&nbsp; <a href="#"><i class="fa-brands fa-linkedin fa-2x"></i></a>&nbsp; <a href="#"><i class="fa-brands fa-instagram fa-2x"></i></a></p>
                </div>
            </div>
      </div>
      <div class="unod slide-6">
            <div class="card member text-center">
                <div class="card-body" style="box-shadow: 15px 15px 40px rgba(0, 0, 0, 0.15);">
                    <img alt="" class="img-fluid rounded-circle" src="assets/img/profileee .png" style="display: block;  margin-left: auto; margin-right: auto;">
                    <h3 class="card-title py-2">Jack Wilson</h3>
                    <p class="card-text pb-1">Chief Executive Officer</p>
                    <p class="socials"><a href="#"><i class="fa-brands fa-twitter fa-2x"></i></a>&nbsp; <a href="#"><i class="fa-brands fa-facebook fa-2x"></i></a>&nbsp; <a href="#"><i class="fa-brands fa-linkedin fa-2x"></i></a>&nbsp; <a href="#"><i class="fa-brands fa-instagram fa-2x"></i></a></p>
                </div>
            </div>
      </div>
      <div class="unod slide-7">
            <div class="card member text-center">
                <div class="card-body" style="box-shadow: 15px 15px 40px rgba(0, 0, 0, 0.15);">
                    <img alt="" class="img-fluid rounded-circle" src="assets/img/profileee .png" style="display: block;  margin-left: auto; margin-right: auto;">
                    <h3 class="card-title py-2">Jack Wilson</h3>
                    <p class="card-text pb-1">Chief Executive Officer</p>
                    <p class="socials"><a href="#"><i class="fa-brands fa-twitter fa-2x"></i></a>&nbsp; <a href="#"><i class="fa-brands fa-facebook fa-2x"></i></a>&nbsp; <a href="#"><i class="fa-brands fa-linkedin fa-2x"></i></a>&nbsp; <a href="#"><i class="fa-brands fa-instagram fa-2x"></i></a></p>
                </div>
            </div>
      </div>
      <div class="unod slide-8">
            <div class="card member text-center">
                <div class="card-body" style="box-shadow: 15px 15px 40px rgba(0, 0, 0, 0.15);">
                    <img alt="" class="img-fluid rounded-circle" src="assets/img/profileee .png" style="display: block;  margin-left: auto; margin-right: auto;">
                    <h3 class="card-title py-2">Jack Wilson</h3>
                    <p class="card-text pb-1">Chief Executive Officer</p>
                    <p class="socials"><a href="#"><i class="fa-brands fa-twitter fa-2x"></i></a>&nbsp; <a href="#"><i class="fa-brands fa-facebook fa-2x"></i></a>&nbsp; <a href="#"><i class="fa-brands fa-linkedin fa-2x"></i></a>&nbsp; <a href="#"><i class="fa-brands fa-instagram fa-2x"></i></a></p>
                </div>
            </div>
      </div>
      <div class="unod prev slide-9">
            <div class="card member text-center">
                <div class="card-body" style="box-shadow: 15px 15px 40px rgba(0, 0, 0, 0.15);">
                    <img alt="" class="img-fluid rounded-circle" src="assets/img/profileee .png" style="display: block;  margin-left: auto; margin-right: auto;">
                    <h3 class="card-title py-2">Jack Wilson</h3>
                    <p class="card-text pb-1">Chief Executive Officer</p>
                    <p class="socials"><a href="#"><i class="fa-brands fa-twitter fa-2x"></i></a>&nbsp; <a href="#"><i class="fa-brands fa-facebook fa-2x"></i></a>&nbsp; <a href="#"><i class="fa-brands fa-linkedin fa-2x"></i></a>&nbsp; <a href="#"><i class="fa-brands fa-instagram fa-2x"></i></a></p>
                </div>
            </div>

      </div>
    </div>
    
    
    <div class="controls">
      <span class="back" onclick="balik()">❮</span>
      <span class="next" onclick="padayon()">❯</span>
    </div>
  </div>  --}}
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
            <div class="card member text-center">
                <div class="card-body" style="box-shadow: 15px 15px 40px rgba(0, 0, 0, 0.15);">
                    <img alt="" class="img-fluid rounded-circle" src="assets/img/profileee .png" style="display: block;  margin-left: auto; margin-right: auto;">
                    <h3 class="card-title py-2">Jack Wilson</h3>
                    <p class="card-text pb-1">MTO</p>
                    <p class="socials"><a href="#"><i class="fa-brands fa-twitter fa-2x"></i></a>&nbsp; <a href="#"><i class="fa-brands fa-facebook fa-2x"></i></a>&nbsp; <a href="#"><i class="fa-brands fa-linkedin fa-2x"></i></a>&nbsp; <a href="#"><i class="fa-brands fa-instagram fa-2x"></i></a></p>
                </div>
            </div>
      </div>
      <div class="carousel-item">
            <div class="card member text-center">
                <div class="card-body" style="box-shadow: 15px 15px 40px rgba(0, 0, 0, 0.15);">
                    <img alt="" class="img-fluid rounded-circle" src="assets/img/profileee .png" style="display: block;  margin-left: auto; margin-right: auto;">
                    <h3 class="card-title py-2">Jack Wilson</h3>
                    <p class="card-text pb-1">Executive</p>
                    <p class="socials"><a href="#"><i class="fa-brands fa-twitter fa-2x"></i></a>&nbsp; <a href="#"><i class="fa-brands fa-facebook fa-2x"></i></a>&nbsp; <a href="#"><i class="fa-brands fa-linkedin fa-2x"></i></a>&nbsp; <a href="#"><i class="fa-brands fa-instagram fa-2x"></i></a></p>
                </div>
            </div>
      </div>
      <div class="carousel-item">
            <div class="card member text-center">
                <div class="card-body" style="box-shadow: 15px 15px 40px rgba(0, 0, 0, 0.15);">
                    <img alt="" class="img-fluid rounded-circle" src="assets/img/profileee .png" style="display: block;  margin-left: auto; margin-right: auto;">
                    <h3 class="card-title py-2">Jack Wilson</h3>
                    <p class="card-text pb-1">MTO</p>
                    <p class="socials"><a href="#"><i class="fa-brands fa-twitter fa-2x"></i></a>&nbsp; <a href="#"><i class="fa-brands fa-facebook fa-2x"></i></a>&nbsp; <a href="#"><i class="fa-brands fa-linkedin fa-2x"></i></a>&nbsp; <a href="#"><i class="fa-brands fa-instagram fa-2x"></i></a></p>
                </div>
            </div>
      </div>
      <div class="carousel-item">
            <div class="card member text-center">
                <div class="card-body" style="box-shadow: 15px 15px 40px rgba(0, 0, 0, 0.15);">
                    <img alt="" class="img-fluid rounded-circle" src="assets/img/profileee .png" style="display: block;  margin-left: auto; margin-right: auto;">
                    <h3 class="card-title py-2">Jack Wilson</h3>
                    <p class="card-text pb-1">Executive</p>
                    <p class="socials"><a href="#"><i class="fa-brands fa-twitter fa-2x"></i></a>&nbsp; <a href="#"><i class="fa-brands fa-facebook fa-2x"></i></a>&nbsp; <a href="#"><i class="fa-brands fa-linkedin fa-2x"></i></a>&nbsp; <a href="#"><i class="fa-brands fa-instagram fa-2x"></i></a></p>
                </div>
            </div>
      </div>
      <div class="carousel-item">
            <div class="card member text-center">
                <div class="card-body" style="box-shadow: 15px 15px 40px rgba(0, 0, 0, 0.15);">
                    <img alt="" class="img-fluid rounded-circle" src="assets/img/profileee .png" style="display: block;  margin-left: auto; margin-right: auto;">
                    <h3 class="card-title py-2">Jack Wilson</h3>
                    <p class="card-text pb-1">MTO</p>
                    <p class="socials"><a href="#"><i class="fa-brands fa-twitter fa-2x"></i></a>&nbsp; <a href="#"><i class="fa-brands fa-facebook fa-2x"></i></a>&nbsp; <a href="#"><i class="fa-brands fa-linkedin fa-2x"></i></a>&nbsp; <a href="#"><i class="fa-brands fa-instagram fa-2x"></i></a></p>
                </div>
            </div>
      </div>
      <div class="carousel-item">
            <div class="card member text-center">
                <div class="card-body" style="box-shadow: 15px 15px 40px rgba(0, 0, 0, 0.15);">
                    <img alt="" class="img-fluid rounded-circle" src="assets/img/profileee .png" style="display: block;  margin-left: auto; margin-right: auto;">
                    <h3 class="card-title py-2">Jack Wilson</h3>
                    <p class="card-text pb-1">Chief Executive Officer</p>
                    <p class="socials"><a href="#"><i class="fa-brands fa-twitter fa-2x"></i></a>&nbsp; <a href="#"><i class="fa-brands fa-facebook fa-2x"></i></a>&nbsp; <a href="#"><i class="fa-brands fa-linkedin fa-2x"></i></a>&nbsp; <a href="#"><i class="fa-brands fa-instagram fa-2x"></i></a></p>
                </div>
            </div>
      </div>
      <div class="carousel-item">
            <div class="card member text-center">
                <div class="card-body" style="box-shadow: 15px 15px 40px rgba(0, 0, 0, 0.15);">
                    <img alt="" class="img-fluid rounded-circle" src="assets/img/profileee .png" style="display: block;  margin-left: auto; margin-right: auto;">
                    <h3 class="card-title py-2">Jack Wilson</h3>
                    <p class="card-text pb-1">Chief Executive Officer</p>
                    <p class="socials"><a href="#"><i class="fa-brands fa-twitter fa-2x"></i></a>&nbsp; <a href="#"><i class="fa-brands fa-facebook fa-2x"></i></a>&nbsp; <a href="#"><i class="fa-brands fa-linkedin fa-2x"></i></a>&nbsp; <a href="#"><i class="fa-brands fa-instagram fa-2x"></i></a></p>
                </div>
            </div>
      </div>
      <div class="carousel-item">
            <div class="card member text-center">
                <div class="card-body" style="box-shadow: 15px 15px 40px rgba(0, 0, 0, 0.15);">
                    <img alt="" class="img-fluid rounded-circle" src="assets/img/profileee .png" style="display: block;  margin-left: auto; margin-right: auto;">
                    <h3 class="card-title py-2">Jack Wilson</h3>
                    <p class="card-text pb-1">Chief Executive Officer</p>
                    <p class="socials"><a href="#"><i class="fa-brands fa-twitter fa-2x"></i></a>&nbsp; <a href="#"><i class="fa-brands fa-facebook fa-2x"></i></a>&nbsp; <a href="#"><i class="fa-brands fa-linkedin fa-2x"></i></a>&nbsp; <a href="#"><i class="fa-brands fa-instagram fa-2x"></i></a></p>
                </div>
            </div>
      </div>
      <div class="carousel-item">
            <div class="card member text-center">
                <div class="card-body" style="box-shadow: 15px 15px 40px rgba(0, 0, 0, 0.15);">
                    <img alt="" class="img-fluid rounded-circle" src="assets/img/profileee .png" style="display: block;  margin-left: auto; margin-right: auto;">
                    <h3 class="card-title py-2">Jack Wilson</h3>
                    <p class="card-text pb-1">Chief Executive Officer</p>
                    <p class="socials"><a href="#"><i class="fa-brands fa-twitter fa-2x"></i></a>&nbsp; <a href="#"><i class="fa-brands fa-facebook fa-2x"></i></a>&nbsp; <a href="#"><i class="fa-brands fa-linkedin fa-2x"></i></a>&nbsp; <a href="#"><i class="fa-brands fa-instagram fa-2x"></i></a></p>
                </div>
            </div>
      </div>
      <div class="carousel-item">
            <div class="card member text-center">
                <div class="card-body" style="box-shadow: 15px 15px 40px rgba(0, 0, 0, 0.15);">
                    <img alt="" class="img-fluid rounded-circle" src="assets/img/profileee .png" style="display: block;  margin-left: auto; margin-right: auto;">
                    <h3 class="card-title py-2">Jack Wilson</h3>
                    <p class="card-text pb-1">Chief Executive Officer</p>
                    <p class="socials"><a href="#"><i class="fa-brands fa-twitter fa-2x"></i></a>&nbsp; <a href="#"><i class="fa-brands fa-facebook fa-2x"></i></a>&nbsp; <a href="#"><i class="fa-brands fa-linkedin fa-2x"></i></a>&nbsp; <a href="#"><i class="fa-brands fa-instagram fa-2x"></i></a></p>
                </div>
            </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
{{-- <style>

 @keyframes scroll {
	 0% {
		 transform: translateX(0);
	}
	 100% {
		 transform: translateX(calc(-250px * 7));
	}
}
 .slider {
	 /* background: white; */
	 box-shadow: 0 10px 20px -5px rgba(0, 0, 0, .125);
	 /* height: 100px; */
	 margin: auto;
	 /* overflow: hidden; */
	 position: relative;
	 width: 1920px;
}
 .slider::before, .slider::after {
	 background: linear-gradient(to right, rgba(255, 255, 255, 1) 0%, rgba(255, 255, 255, 0) 100%);
	 content: "";
	 /* height: 100px;
	 position: absolute;
	 width: 200px; */
	 z-index: 2;
}
 .slider::after {
	 right: 0;
	 top: 0;
	 transform: rotateZ(180deg);
}
 .slider::before {
	 left: 0;
	 top: 0;
}
 .slider .slide-track {
	 animation: scroll 40s linear infinite;
	 display: flex;
	 width: calc(250px * 14);
}
 .slider .slide {
	 /* height: 100px;
	 width: 250px; */
}
 
</style>
<div class="slider">
	<div class="slide-track">
		<div class="slide">
            <div class="card member text-center">
                <div class="card-body" style="box-shadow: 15px 15px 40px rgba(0, 0, 0, 0.15);">
                    <img alt="" class="img-fluid rounded-circle" src="assets/img/profileee .png" style="display: block;  margin-left: auto; margin-right: auto;">
                    <h3 class="card-title py-2">Jack Wilson</h3>
                    <p class="card-text pb-1">Chief Executive Officer</p>
                    <p class="socials"><a href="#"><i class="fa-brands fa-twitter fa-2x"></i></a>&nbsp; <a href="#"><i class="fa-brands fa-facebook fa-2x"></i></a>&nbsp; <a href="#"><i class="fa-brands fa-linkedin fa-2x"></i></a>&nbsp; <a href="#"><i class="fa-brands fa-instagram fa-2x"></i></a></p>
                </div>
            </div>
		</div>
        <div class="slide">
            <div class="card member text-center">
                <div class="card-body" style="box-shadow: 15px 15px 40px rgba(0, 0, 0, 0.15);">
                    <img alt="" class="img-fluid rounded-circle" src="assets/img/profileee .png" style="display: block;  margin-left: auto; margin-right: auto;">
                    <h3 class="card-title py-2">Jack Wilson</h3>
                    <p class="card-text pb-1">Chief Executive Officer</p>
                    <p class="socials"><a href="#"><i class="fa-brands fa-twitter fa-2x"></i></a>&nbsp; <a href="#"><i class="fa-brands fa-facebook fa-2x"></i></a>&nbsp; <a href="#"><i class="fa-brands fa-linkedin fa-2x"></i></a>&nbsp; <a href="#"><i class="fa-brands fa-instagram fa-2x"></i></a></p>
                </div>
            </div>
		</div>
        <div class="slide">
            <div class="card member text-center">
                <div class="card-body" style="box-shadow: 15px 15px 40px rgba(0, 0, 0, 0.15);">
                    <img alt="" class="img-fluid rounded-circle" src="assets/img/profileee .png" style="display: block;  margin-left: auto; margin-right: auto;">
                    <h3 class="card-title py-2">Jack Wilson</h3>
                    <p class="card-text pb-1">Chief Executive Officer</p>
                    <p class="socials"><a href="#"><i class="fa-brands fa-twitter fa-2x"></i></a>&nbsp; <a href="#"><i class="fa-brands fa-facebook fa-2x"></i></a>&nbsp; <a href="#"><i class="fa-brands fa-linkedin fa-2x"></i></a>&nbsp; <a href="#"><i class="fa-brands fa-instagram fa-2x"></i></a></p>
                </div>
            </div>
		</div>
        <div class="slide">
            <div class="card member text-center">
                <div class="card-body" style="box-shadow: 15px 15px 40px rgba(0, 0, 0, 0.15);">
                    <img alt="" class="img-fluid rounded-circle" src="assets/img/profileee .png" style="display: block;  margin-left: auto; margin-right: auto;">
                    <h3 class="card-title py-2">Jack Wilson</h3>
                    <p class="card-text pb-1">Chief Executive Officer</p>
                    <p class="socials"><a href="#"><i class="fa-brands fa-twitter fa-2x"></i></a>&nbsp; <a href="#"><i class="fa-brands fa-facebook fa-2x"></i></a>&nbsp; <a href="#"><i class="fa-brands fa-linkedin fa-2x"></i></a>&nbsp; <a href="#"><i class="fa-brands fa-instagram fa-2x"></i></a></p>
                </div>
            </div>
		</div>
        <div class="slide">
            <div class="card member text-center">
                <div class="card-body" style="box-shadow: 15px 15px 40px rgba(0, 0, 0, 0.15);">
                    <img alt="" class="img-fluid rounded-circle" src="assets/img/profileee .png" style="display: block;  margin-left: auto; margin-right: auto;">
                    <h3 class="card-title py-2">Jack Wilson</h3>
                    <p class="card-text pb-1">Chief Executive Officer</p>
                    <p class="socials"><a href="#"><i class="fa-brands fa-twitter fa-2x"></i></a>&nbsp; <a href="#"><i class="fa-brands fa-facebook fa-2x"></i></a>&nbsp; <a href="#"><i class="fa-brands fa-linkedin fa-2x"></i></a>&nbsp; <a href="#"><i class="fa-brands fa-instagram fa-2x"></i></a></p>
                </div>
            </div>
		</div>
        <div class="slide">
            <div class="card member text-center">
                <div class="card-body" style="box-shadow: 15px 15px 40px rgba(0, 0, 0, 0.15);">
                    <img alt="" class="img-fluid rounded-circle" src="assets/img/profileee .png" style="display: block;  margin-left: auto; margin-right: auto;">
                    <h3 class="card-title py-2">Jack Wilson</h3>
                    <p class="card-text pb-1">Chief Executive Officer</p>
                    <p class="socials"><a href="#"><i class="fa-brands fa-twitter fa-2x"></i></a>&nbsp; <a href="#"><i class="fa-brands fa-facebook fa-2x"></i></a>&nbsp; <a href="#"><i class="fa-brands fa-linkedin fa-2x"></i></a>&nbsp; <a href="#"><i class="fa-brands fa-instagram fa-2x"></i></a></p>
                </div>
            </div>
		</div>
   
        

	</div>
</div> --}}