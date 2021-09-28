<template>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-12">
        <div id="demo" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
          </ol>

          <!-- Wrapper for slides -->
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img
                src="https://demigos.com/media/cache/61/e8/61e8be99d482c40c4f294b577a7d2e92.jpg"
                alt="Los Angeles"
                style="width: 100%"
              />
            </div>

            <div class="carousel-item">
              <img
                src="https://scitechdaily.com/images/Doctors-Wearing-COVID-Face-Masks-777x437.jpg"
                alt="Chicago"
                style="width: 100%; height: 50%"
              />
            </div>
          </div>

          <!-- Left and right controls -->
          <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
          </a>
          <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
          </a>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import "bootstrap/dist/css/bootstrap.min.css";
import "bootstrap/dist/js/bootstrap.min.js";

export default {
  mounted() {
    console.log("Component mounted.");
  },
};
</script>