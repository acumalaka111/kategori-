@extends('layouts.template')
@section('content')
<div class="container">
<!-- kategori produk -->
<div class="row mt-4">
<div class="col col-md-12 col-sm-12 mb-4">
<h2 class="text-center">Kategori Produk</h2>
</div>
<!-- kategori pertama -->
<div class="col-md-4">
<div class="card mb-4 shadow-sm">
<a href="{{ URL::to('kategori/satu') }}">
<img src="{{asset('asset/uta1.png') }}" alt="foto kategori"
class="card-img-top">
</a>
<div class="card-body">
<a href="{{ URL::to('kategori/satu') }}" class="text-decoration-none">
<p class="card-text">Kategori Pertama</p>
</a>
</div>
</div>
</div>
<!-- kategori kedua -->
<div class="col-md-4">
<div class="card mb-4 shadow-sm">
<a href="{{ URL::to('kategori/dua') }}">
<img src="{{asset('asset/uta2.jpg') }}" alt="foto kategori"
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
<img src="{{asset('asset/uta3.png') }}" alt="foto kategori"
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

</div>
@endsection
