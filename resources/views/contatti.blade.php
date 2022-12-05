<x-layout>
    @if (session('message'))
        <div class="alert alert-success mt-5 pt-5">
            {{ session('message')}}
        </div>
    @endif    
    <div class="container m-0 p-0">
        <div class="row">
            <div class="col">
                <div class="my-container text-center">
                    <img src="/img/image8.png" class="img-fluid p-0 my-contact-img">
                    <span class="overlay"></span>
                    <h1 class="my-h1">VIENI A TROVARCI</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-5 mb-5">
        <div class="row align-items-center">
            <div class="col-md-6 col-xs-12 indirizzo">
                <h3 class="divider">Studio oculistico Dr.ssa Wexler</h3>
                <div class="mt-4"><i class="fa-solid fa-map-location-dot m-2"> </i>Via Borromei, 54, 20123 Milano MI,
                    Italia
                </div>
                <div class="mt-4"><i class="fa-solid fa-phone m-2"></i> +39 3497747242</div>
            </div>
            <div id="map" class="col-md-6 col-sm-12 mappa mt-4">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2798.269544229145!2d9.179932615735794!3d45.46437387910092!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4786c15369b20a67%3A0xd1dff5f0042f4d1!2sVia%20Borromei%2C%2054%2C%2020123%20Milano%20MI%2C%20Italia!5e0!3m2!1sit!2smk!4v1663289183701!5m2!1sit!2smk"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
    <div class="container mt-3 mb-3 pt-5">
        <h3>Scrivi qui sotto</h3>
        {{-- FORM --}}
        <form method="POST" action="{{Route('postData')}}">
            {{-- csrf token --}}
            @csrf

            <div class="mb-3">
                <label class="form-label">Email address</label>
                <input type="email" class="form-control" placeholder="name@example.com" name="email">
            </div>
            <div class="mb-3">
                <label  class="form-label">Nome</label>
                <input class="form-control" placeholder="Nome" name="name">
            </div>
            <div class="mb-3">
                <label class="form-label">Scrivi qui il tuo messaggio</label>
                <textarea class="form-control" rows="3" name="message"></textarea>
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary mb-3">Invia messaggio</button>
            </div>
        </form>
    </div>    
</x-layout>