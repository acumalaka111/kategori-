@extends('layouts.template')
@section('content')
<div class="container">
    <!-- carousel -->
    <div class="row">
     <div class="col">
      <div id="carousel" class="carousel slide" data-ride="carousel">
       <div class="carousel-inner">
        <div class="carousel-item active">
         <img src="{{ asset('asset/uta1.png') }}" class="d-block w-100"
alt="...">
        </div>
        <div class="carousel-item">
         <img src="{{ asset('asset/uta2.jpg') }}" class="d-block w-100"
alt="...">
        </div>
        <div class="carousel-item">
         <img src="{{ asset('asset/uta3.png') }}" class="d-block w-100"
alt="...">
        </div>
       </div>
       <a class="carousel-control-prev" href="#carousel" role="button" dataslide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
       </a>
       <a class="carousel-control-next" href="#carousel" role="button" dataslide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
       </a>
      </div>
     </div>
    </div>
<!-- end carousel -->

<!-- kategori produk -->
  <div class="row mt-4">
   <div class="col col-md-12 col-sm-12 mb-4">
    <h2 class="text-center">Kategori Produk</h2>
  </div>
  <div class="card" style="width: 18rem;">
  <img src="{{ asset('asset/uta1.png') }}" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>

<div class="card" style="width: 18rem;">
  <img src="{{ asset('asset/uta2.jpg') }}" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>

<div class="card" style="width: 18rem;">
  <img src="{{ asset('asset/uta4.jpg') }}" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>

  <!-- kategori pertama -->
  <div class="col-md-4">
    <div class="card mb-4 shadow-sm">
     <a href="{{ URL::to('kategori/satu') }}">
      <img src="{{asset('images/slide3.jpg') }}" alt="foto kategori"
class="card-img-top">
     </a>
     <div class="card-body">
      <a href="{{ URL::to('kategori/satu') }}" class="text-decorationnone">
        <p class="card-text">Kategori Pertama</p>
      </a>

     </div>
    </div>
   </div>
   <!-- kategori kedua -->
   <div class="col-md-4">
    <div class="card mb-4 shadow-sm">
     <a href="{{ URL::to('kategori/dua') }}">
      <img src="{{asset('images/slide2.jpg') }}" alt="foto kategori"
class="card-img-top">
     </a>
     <div class="card-body">
      <a href="{{ URL::to('kategori/dua') }}" class="text-decoration-none">
       <p class="card-text">Kategori Kedua</p>
      </a>
     </div>
    </div>
   </div>
   <!-- kategori ketiga -->
   <div class="col-md-4">
    <div class="card mb-4 shadow-sm">
     <a href="{{ URL::to('kategori/tiga') }}">
      <img src="{{asset('images/slide3.jpg') }}" alt="foto kategori"
class="card-img-top">
     </a>
     <div class="card-body">
      <a href="{{ URL::to('kategori/tiga') }}" class="text-decoration-none">
       <p class="card-text">Kategori Ketiga</p>
      </a>
    </div>
  </div>
 </div>
</div>
<!-- end kategori produk -->

<!-- produk Promo-->
 <div class="row mt-4">
   <div class="col col-md-12 col-sm-12 mb-4">

   <h2 class="text-center">Promo</h2>
  </div>
  <!-- produk pertama -->
  <div class="col-md-4">
   <div class="card mb-4 shadow-sm">
    <a href="{{ URL::to('produk/satu') }}">
     <img src="{{asset('images/slide3.jpg') }}" alt="foto produk"
class="card-img-top">
    </a>
    <div class="card-body">
     <a href="{{ URL::to('produk/satu') }}" class="text-decoration-none">
      <p class="card-text">
        Produk Pertama
      </p>
     </a>
     <div class="row mt-4">
      <div class="col">
       <button class="btn btn-light">
        <i class="far fa-heart"></i>
       </button>
      </div>
      <div class="col-auto">
       <p>
        <del>Rp. 15.000,00</del>
        <br />
        Rp. 10.000,00
        </p>
       </div>
      </div>
    </div>
   </div>
 </div>
 <!-- produk kedua -->
 <div class="col-md-4">
  <div class="card mb-4 shadow-sm">
   <a href="{{ URL::to('produk/dua') }}">
    <img src="{{asset('images/slide3.jpg') }}" alt="foto produk"
class="card-img-top">
   </a>
    <div class="card-body">
     <a href="{{ URL::to('produk/dua') }}" class="text-decoration-none">
      <p class="card-text">
        Produk Kedua

      </p>
     </a>
     <div class="row mt-4">
      <div class="col">
       <button class="btn btn-light">
        <i class="far fa-heart"></i>
       </button>
      </div>
     <div class="col-auto">
       <p>
        <del>Rp. 15.000,00</del>
        <br />
        Rp. 10.000,00
       </p>
      </div>
     </div>
    </div>
   </div>
  </div>
  <!-- produk ketiga -->
   <div class="col-md-4">
    <div class="card mb-4 shadow-sm">
     <a href="{{ URL::to('produk/tiga') }}">
      <img src="{{asset('images/slide3.jpg') }}" alt="foto produk"
class="card-img-top">
     </a>
     <div class="card-body">
      <a href="{{ URL::to('produk/tiga') }}" class="text-decoration-none">
       <p class="card-text">
        Produk Ketiga
       </p>
      </a>
      <div class="row mt-4">
       <div class="col">
        <button class="btn btn-light">
         <i class="far fa-heart"></i>
        </button>
       </div>
       <div class="col-auto">
        <p>
         <del>Rp. 15.000,00</del>
         <br />
         Rp. 10.000,00

        </p>
      </div>
     </div>
    </div>
   </div>
  </div>
 </div>
 <!-- end produk promo -->

<!-- produk Terbaru-->
<div class="row mt-4">
    <div class="col col-md-12 col-sm-12 mb-4">
     <h2 class="text-center">Terbaru</h2>
    </div>
    <!-- produk pertama -->
    <div class="col-md-4">
     <div class="card mb-4 shadow-sm">
      <a href="{{ URL::to('produk/satu') }}">
        <img src="{{asset('images/slide2.jpg') }}" alt="foto produk"
class="card-img-top">
      </a>
      <div class="card-body">
       <a href="{{ URL::to('produk/satu') }}" class="text-decoration-none">
        <p class="card-text">
          Produk Pertama
        </p>
       </a>
       <div class="row mt-4">
        <div class="col">
          <button class="btn btn-light">
            <i class="far fa-heart"></i>
          </button>
        </div>
        <div class="col-auto">
          <p>
            Rp. 10.000,00
          </p>
        </div>
       </div>
      </div>
     </div>
    </div>
    <!-- produk kedua -->
    <div class="col-md-4">
      <div class="card mb-4 shadow-sm">
        <a href="{{ URL::to('produk/dua') }}">
          <img src="{{asset('images/slide2.jpg') }}" alt="foto produk"
class="card-img-top">
        </a>
        <div class="card-body">
          <a href="{{ URL::to('produk/dua') }}" class="text-decoration-none">
            <p class="card-text">
              Produk Kedua
            </p>
          </a>
          <div class="row mt-4">
            <div class="col">
              <button class="btn btn-light">
                <i class="far fa-heart"></i>
              </button>
            </div>
            <div class="col-auto">
              <p>
                Rp. 10.000,00
              </p>
             </div>
           </div>
         </div>
       </div>
    </div>
    <!-- produk ketiga -->
    <div class="col-md-4">
      <div class="card mb-4 shadow-sm">
        <a href="{{ URL::to('produk/tiga') }}">
          <img src="{{asset('images/slide2.jpg') }}" alt="foto produk"
class="card-img-top">
        </a>
        <div class="card-body">
          <a href="{{ URL::to('produk/tiga') }}" class="text-decoration-none">
            <p class="card-text">

             Produk Ketiga
            </p>
          </a>
          <div class="row mt-4">
            <div class="col">
              <button class="btn btn-light">
                <i class="far fa-heart"></i>
              </button>
            </div>
            <div class="col-auto">
              <p>
                Rp. 10.000,00
              </p>
            </div>
        </div>
      </div>
    </div>
   </div>
  </div>
  <!-- end produk terbaru -->

  <!-- tentang toko -->
   <hr>
   <div class="row mt-4">
    <div class="col">
      <h5 class="text-center">Toko Online Menggunakan Laravel</h5>
      <p>
        Toko adalah demo membangun toko online menggunakan laravel framework. Di
dalam demo ini terdapat user bisa menginput data kategori, produk dan transaksi.
        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Hic laborum
aliquam dolorum sequi nulla maiores quos incidunt veritatis numquam suscipit.
Cumque dolore rem obcaecati. Eos quod ad non veritatis assumenda.
      </p>
      <p>
        Toko adalah demo membangun toko online menggunakan laravel framework. Di
dalam demo ini terdapat user bisa menginput data kategori, produk dan transaksi.
Lorem, ipsum dolor sit amet consectetur adipisicing elit. Hic laborum
aliquam dolorum sequi nulla maiores quos incidunt veritatis numquam suscipit.
Cumque dolore rem obcaecati. Eos quod ad non veritatis assumenda.
       </p>
       <p class="text-center">
         <a href="" class="btn btn-outline-secondary">
           Baca Selengkapnya
         </a>
        </p>
      </div>
    </div>
    <!-- end tentang toko -->

</div>
@endsection










