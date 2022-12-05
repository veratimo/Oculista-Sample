<x-layout>
  <x-slot name="title">Benvenuto</x-slot>
  <!-- Carosello home -->
  <div class="container px-0">
    <div id="myCarousel" class="carousel slide mt-4" max-width="100%" data-bs-ride="carousel">
      <div class="row m-0 p-0">
        <div class="col-12 m-0 p-0">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2" class=""></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3" class="active" aria-current="true"></button>
          </div>
          <div class="carousel-inner vh-50">
            <div class="carousel-item">
              <img src="/img/image1.png" class="img-fluid">

              <div class="container-fluid">
                <div class="carousel-caption text-start">
                  <h1>Prenota subito una visita gratuita.</h1>
                  <p>Per tutti i nuovi clienti fino al 30 Settembre.</p>
                  <p><a class="btn btn-md btn-my-color" href="#">Prenota ora</a></p>
                </div>
              </div>
            </div>
            <div class="carousel-item active carousel-item-start">
              <img src="/img/image2.png" class="img-fluid">

              <div class="container">
                <div class="carousel-caption">
                  <h1>Scopri tutti i nostri servizi.</h1>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                  <p><a class="btn btn-md btn-my-color" href="#">Scopri di più</a></p>
                </div>
              </div>
            </div>
            <div class="carousel-item carousel-item-next carousel-item-start">
              <img src="/img/image3.png" class="img-fluid">

              <div class="container">
                <div class="carousel-caption text-end">
                  <h1>Lorem ipsum dolor sit amet consectetur.</h1>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga similique vel quisquam facere voluptates delectus omnis error accusamus.</p>
                  <p><a class="btn btn-md btn-my-color" href="#">Lorem ipsum</a></p>
                </div>
              </div>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
    </div>
    <!-- Paragrafo 1 -->
    <div class="px-4 py-5 my-5 text-center">
      <h4>Lorem ipsum</h4>
      <div class="col-lg-6 mx-auto">
        <p class="lead mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam beatae molestiae excepturi quia ducimus amet velit neque voluptatum ipsum quaerat sapiente quisquam, vel doloribus molestias, eius maxime exercitationem ipsa quod!</p>
        <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
        </div>
      </div>
    </div>
    <!-- immagine metà landing -->
    <div class="container py-5">
      <div class="row">
        <div class="col-12">
          <img src="/img/image12.png" class="img-fluid">
        </div>
      </div>

      <!-- Paragrafo 1 -->
      <div class="px-4 py-5 my-5 text-center">
        <h4>Lorem ipsum</h4>
        <div class="col-lg-6 mx-auto">
          <p class="lead mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam beatae molestiae excepturi quia ducimus amet velit neque voluptatum ipsum quaerat sapiente quisquam, vel doloribus molestias, eius maxime exercitationem ipsa quod!</p>
          <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
          </div>
        </div>
      </div>

      <!-- immagini fine landing -->
      <div class="">
        <div class="row flex-nowrap">
          <div class="col-6 my-inline-flex">
            <img src="/img/image13.png" class="img-fluid">
          </div>
          <div class="col-6 my-inline-flex">
            <img src="/img/image14.png" class="img-fluid">
          </div>
        </div>


        <!-- Prenota visita-->

        <div class="container col-xl-10 col-xxl-9 px-4 py-5">
          <div class="row align-items-center g-lg-5 py-5">
            <div class="col-lg-7 text-center text-lg-start">
              <h3 class="display-2 lh-1 mb-3">Lorem ipsum</h3>
              <p class="col-lg-10 fs-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus, officiis consequuntur. Totam delectus, expedita culpa placeat officia consequuntur debitis! Expedita maiores repellendus nobis facere vitae quaerat illum hic sint voluptatum!</p>
            </div>
            <div class="col-md-10 mx-auto col-lg-5">
              <form class="p-4 p-md-5 border rounded-3 bg-light">
                <div class="form-floating mb-3">
                  <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                  <label for="floatingInput">Email address</label>
                </div>
                <button class="w-100 btn btn-lg btn-primary" type="submit">Chiedi preventivo</button>
                <hr class="my-4">
                <small class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus, officiis consequuntur.</small>
              </form>
            </div>
          </div>
        </div>
      </div>
</x-layout>