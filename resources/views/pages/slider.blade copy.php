<style>
    /* Seccion principal */
.container-main {
  margin: 4.25em auto 0 auto;
  max-width: 1320px;
  padding: 1em 0;
  position: relative;
}
/* Slider */
.main-slider {
  max-width: 720px;
  height: 500px;
  background-color: antiquewhite;
  position: relative;
}
.slider-imagenes {
  max-width: 720px;
  height: 100%;
  overflow: hidden;
  scroll-padding: 1rem;

  display: flex;
  flex-flow: row nowrap;
  justify-content: flex-start;
  align-items: center;
}
.slider-img {
  max-width: 720px;
  height: 100%;
  scroll-snap-align: center;
  border-radius: 3px;
  display: none;
  -webkit-user-select: none; /* Safari */
  -ms-user-select: none; /* IE 10 and IE 11 */
  user-select: none; /* Standard syntax */
}
.slider-img img {
  max-width: 720px;
  cursor: pointer;
  height: 100%;
  -webkit-user-select: none; /* Safari */
  -ms-user-select: none; /* IE 10 and IE 11 */
  user-select: none; /* Standard syntax */
  pointer-events: none;
}
.main-slider-active {
  scroll-snap-type: unset;
}
.slider-controles {
  position: absolute;
  width: 100%;
  display: flex;
  align-items: center;
  justify-content: space-between;
  top: 50%;
  transform: translate(0, -50%);
}
.slider-controles-previous,
.slider-controles-next {
  cursor: pointer;
  background-color: #264653;
  padding: 0.5em;
  display: flex;
  align-items: center;
  justify-content: center;
}
.slider-count-imagenes {
  position: absolute;
  width: 100%;
  display: flex;
  align-items: center;
  justify-content: center;
  bottom: 25px;
}
.count-imagenes {
  width: 200px;
  display: flex;
  justify-content: space-between;
}
.count-imagenes-num {
  width: 20px;
  height: 20px;
  border-radius: 50%;
  background-color: #3a3a3a;
  cursor: pointer;
}
.count-imagenes-num.activo {
  background-color: #29998b;
  transform: scale(1.3);
}
.slider-img.activo {
  display: block;
  transition: width 2s;
}
/* Fin Slider */

/* Seccion principal - RESPONSIVE */
@media (max-width: 576px) {
  .container-main {
    margin: 6.6em auto 0 auto;
    max-width: 100%;
    padding: 1em 1em;
  }
  .main-slider {
    max-width: 100%;
    height: 500px;
  }
  .slider-img {
    max-width: 100%;
  }
  .slider-img img {
    max-width: 100%;
    width: 100%;
  }
  .slider-imagenes {
    max-width: 100%;
    width: 100%;
  }
  .categorias-container {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
  }
}
@media (min-width: 576px) {
  .container-main {
    max-width: 540px;
  }
  .main-slider {
    max-width: 540px;
    height: 500px;
  }
  .slider-img {
    max-width: 540px;
  }
  .slider-img img {
    max-width: 540px;
    width: 540px;
  }
  .slider-imagenes {
    max-width: 540px;
    width: 540px;
  }
}
@media (min-width: 768px) {
  .container-main {
    max-width: 720px;
  }
  .main-slider {
    max-width: 720px;
    height: 500px;
  }
  .slider-img {
    max-width: 720px;
  }
  .slider-img img {
    max-width: 720px;
    width: 720px;
  }
  .slider-imagenes {
    max-width: 720px;
    width: 720px;
  }
}
@media (min-width: 992px) {
  .container-main {
    max-width: 960px;
  }
  .main-slider {
    max-width: 960px;
    height: 500px;
  }
  .slider-img {
    max-width: 960px;
  }
  .slider-img img {
    max-width: 960px;
    width: 960px;
  }
  .slider-imagenes {
    max-width: 960px;
    width: 960px;
  }
}
@media (min-width: 1200px) {
  .container-main {
    max-width: 1140px;
  }
  .main-slider {
    max-width: 1140px;
    height: 500px;
  }
  .slider-img {
    max-width: 1140px;
  }
  .slider-img img {
    max-width: 1140px;
    width: 1140px;
  }
  .slider-imagenes {
    max-width: 1140px;
    width: 1140px;
  }
}
@media (min-width: 1400px) {
  .container-main {
    max-width: 1320px;
  }
  .main-slider {
    max-width: 1320px;
    height: 500px;
  }
  .slider-img {
    max-width: 1320px;
  }
  .slider-img img {
    max-width: 1320px;
    width: 1320px;
  }
  .slider-imagenes {
    max-width: 1320px;
    width: 1320px;
  }
}
@media (min-width: 1624px) {
  .container-main {
    max-width: 1500px;
  }
  .main-slider {
    max-width: 1500px;
    height: 500px;
  }
  .slider-img {
    max-width: 1500px;
  }
  .slider-img img {
    max-width: 1500px;
    width: 1500px;
  }
  .slider-imagenes {
    max-width: 1500px;
    width: 1500px;
  }
}
@media (min-width: 1920px) {
  .container-main {
    max-width: 1800px;
  }
  .main-slider {
    max-width: 1800px;
    /* height: 500px; */
  }
  .slider-img {
    max-width: 1800px;
  }
  .slider-img img {
    max-width: 1800px;
    width: 1800px;
  }
  .slider-imagenes {
    max-width: 1800px;
    width: 1800px;
  }
}

/* Fin Seccion principal - RESPONSIVE */
/* ------------ */

</style>
<div class="container-main" style="text-align: center">
  <div class="main-slider">
    <div class="slider-imagenes">
      <div class="slider-img activo"><img src="assets/img/homeSlider/1-min.jpg" alt=""></div>
      <div class="slider-img"><img src="assets/img/homeSlider/2-min.jpg" alt=""></div>
      <div class="slider-img"><img src="assets/img/homeSlider/3-min.jpg" alt=""></div>
      <div class="slider-img"><img src="assets/img/homeSlider/4-min.jpg" alt=""></div>
      <div class="slider-img"><img src="assets/img/homeSlider/5-min.jpg" alt=""></div>
      <div class="slider-img"><img src="assets/img/homeSlider/6-min.jpg" alt=""></div>
      <div class="slider-img"><img src="assets/img/homeSlider/7-min.jpg" alt=""></div>
      <div class="slider-img"><img src="assets/img/homeSlider/8-min.jpg" alt=""></div>
      <div class="slider-img"><img src="assets/img/homeSlider/9-min.jpg" alt=""></div>
      <div class="slider-img"><img src="assets/img/homeSlider/10-min.jpg" alt=""></div>
      <div class="slider-img"><img src="assets/img/homeSlider/11-min.jpg" alt=""></div>
      <div class="slider-img"><img src="assets/img/homeSlider/12-min.jpg" alt=""></div>
      <div class="slider-img"><img src="assets/img/homeSlider/13-min.jpg" alt=""></div>
      <div class="slider-img"><img src="assets/img/homeSlider/14-min.jpg" alt=""></div>
      <div class="slider-img"><img src="assets/img/homeSlider/15-min.jpg" alt=""></div>
      <div class="slider-img"><img src="assets/img/homeSlider/16-min.jpg" alt=""></div>
      <div class="slider-img"><img src="assets/img/homeSlider/17-min.jpg" alt=""></div>
      <div class="slider-img"><img src="assets/img/homeSlider/18-min.jpg" alt=""></div>
      <div class="slider-img"><img src="assets/img/homeSlider/19-min.jpg" alt=""></div>
      <div class="slider-img"><img src="assets/img/homeSlider/20-min.jpg" alt=""></div>
      <div class="slider-img"><img src="assets/img/homeSlider/21-min.jpg" alt=""></div>
      <div class="slider-img"><img src="assets/img/homeSlider/22-min.jpg" alt=""></div>
      <div class="slider-img"><img src="assets/img/homeSlider/23-min.jpg" alt=""></div>
      <div class="slider-img"><img src="assets/img/homeSlider/24-min.jpg" alt=""></div>
    </div>
    <div class="slider-controles">
      <div class="slider-controles-previous">
        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" width="35" height="35" x="0" y="0" viewBox="0 0 55.753 55.753" style="enable-background:new 0 0 35 35" xml:space="preserve" class="">
          <g>
            <g>
              <path d="M12.745,23.915c0.283-0.282,0.59-0.52,0.913-0.727L35.266,1.581c2.108-2.107,5.528-2.108,7.637,0.001
		c2.109,2.108,2.109,5.527,0,7.637L24.294,27.828l18.705,18.706c2.109,2.108,2.109,5.526,0,7.637
		c-1.055,1.056-2.438,1.582-3.818,1.582s-2.764-0.526-3.818-1.582L13.658,32.464c-0.323-0.207-0.632-0.445-0.913-0.727
		c-1.078-1.078-1.598-2.498-1.572-3.911C11.147,26.413,11.667,24.994,12.745,23.915z" fill="#FFFFFF" data-original="#FFFFFF" class=""></path>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
          </g>
        </svg>
      </div>
      <div class="slider-controles-next">
        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" width="35" height="35" x="0" y="0" viewBox="0 0 55.752 55.752" style="enable-background:new 0 0 35 35" xml:space="preserve" class="">
          <g>
            <g>
              <path d="M43.006,23.916c-0.28-0.282-0.59-0.52-0.912-0.727L20.485,1.581c-2.109-2.107-5.527-2.108-7.637,0.001
		c-2.109,2.108-2.109,5.527,0,7.637l18.611,18.609L12.754,46.535c-2.11,2.107-2.11,5.527,0,7.637c1.055,1.053,2.436,1.58,3.817,1.58
		s2.765-0.527,3.817-1.582l21.706-21.703c0.322-0.207,0.631-0.444,0.912-0.727c1.08-1.08,1.598-2.498,1.574-3.912
		C44.605,26.413,44.086,24.993,43.006,23.916z" fill="#FFFFFF" data-original="#FFFFFF" class=""></path>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
          </g>
        </svg>
      </div>
    </div>
    <div class="slider-count-imagenes">
      <div class="count-imagenes">
        <div class="count-imagenes-num activo"></div>
        <div class="count-imagenes-num"></div>
        <div class="count-imagenes-num"></div>
        <div class="count-imagenes-num"></div>
      </div>
    </div>
  </div>
</div>

<script>
    (function () {
  const slider = document.querySelector(".main-slider");
  const imagenes = document.querySelector(".slider-imagenes");
  const controles = document.querySelectorAll(".count-imagenes-num");
  const img = document.querySelectorAll(".slider-img");
  const countimg = document.querySelectorAll(".slider-img").length;
  const next = document.querySelector(".slider-controles-next");
  const previous = document.querySelector(".slider-controles-previous");
  const imgactivo = document.querySelectorAll(".slider-img.activo");

  controlesPuntos();
  desplazamiento();
  setInterval(auto, 4500);
  next.addEventListener("click", () => btnNext());
  previous.addEventListener("click", () => btnPrevious());

  function controlesPuntos() {
    controles.forEach((punto, i) => {
      controles[i].addEventListener("click", () => {
        let scrollWidth = slider.scrollWidth;
        let posicion = i;
        let operacion = posicion * -scrollWidth;
        controles.forEach((punto, i) => {
          controles[i].classList.remove("activo");
        });
        img.forEach((punto, i) => {
          img[i].classList.remove("activo");
        });
        img[i].classList.add("activo");
        controles[i].classList.add("activo");
      });
    });
  }

  function posicion() {
    var pos;
    img.forEach((punto, i) => {
      if (img[i].className === "slider-img activo") {
        pos = i;
      }
    });
    return pos;
  }

  function btnNext() {
    let pos = posicion();
    pos = pos + 1;
    if (pos >= countimg) {
      pos = 0;
    } else {
      pos = pos;
    }
    controles.forEach((punto, i) => {
      controles[i].classList.remove("activo");
    });
    img.forEach((punto, i) => {
      img[i].classList.remove("activo");
    });
    img[pos].classList.add("activo");
    controles[pos].classList.add("activo");
  }

  function btnPrevious() {
    let pos = posicion();
    pos = pos - 1;
    if (pos < 0) {
      pos = countimg - 1;
    } else {
      pos = pos;
    }
    controles.forEach((punto, i) => {
      controles[i].classList.remove("activo");
    });
    img.forEach((punto, i) => {
      img[i].classList.remove("activo");
    });
    img[pos].classList.add("activo");
    controles[pos].classList.add("activo");
  }

  function auto() {
    let pos = posicion();
    pos = pos + 1;
    if (pos >= countimg) {
      pos = 0;
    } else {
      pos = pos;
    }
    controles.forEach((punto, i) => {
      controles[i].classList.remove("activo");
    });
    img.forEach((punto, i) => {
      img[i].classList.remove("activo");
    });
    img[pos].classList.add("activo");
    controles[pos].classList.add("activo");
  }

  function desplazamiento() {
    img.forEach((punto, i) => {
      img[i].addEventListener("dragstart", (e) => e.preventDefault());
      let pressed = false;
      let startX = 0;

      img[i].addEventListener("mousedown", function (e) {
        pressed = true;
        startX = e.clientX;
      });

      img[i].addEventListener("mouseleave", function (e) {
        pressed = false;
      });

      window.addEventListener("mouseup", function (e) {
        pressed = false;
      });

      img[i].addEventListener("mousemove", function (e) {
        if (!pressed) {
          return;
        }

        let abc = (this.scrollLeft += startX - e.clientX);

        if (abc >= 0) {
          console.log(abc);
          btnNext();
        } else {
          btnPrevious();
        }
      });
    });
  }
})();

</script>