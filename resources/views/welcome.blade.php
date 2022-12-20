<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Apotek Sinar Farma</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="{{route('welcome')}}">Apotek Sinar Farma</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{route('welcome')}}">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Features</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Pricing</a>
              </li>
            </ul>
          </div>
        </div>
    </nav>

    <div class="card m-3">
        <div class="card-body">
          <h5 class="card-title">Katalog Obat</h5>
          <p class="card-text">Berikut obat-obat yang tersedia untuk dibeli secara online maupun onsite</p>
          <a href="{{route('add')}}" class="btn btn-primary">Tambah Obat Baru</a>
        </div>
    </div>
    <hr class="mx-3">

    <div class="mx-3">
        <div class="row">
          @foreach ($obat as $item)
              <div class="col-sm-3 my-3">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title">{{$item->nama}}</h5>
                    <p class="card-text">Harga : Rp.{{$item->harga}}</p>
                    <p class="card-text">Stok  : {{$item->stok}}</p>
                    <a href="/obat/{{$item->id}}" class="btn btn-primary btn-sm">Product Detail</a>
                  </div>
                </div>
              </div>
          @endforeach
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>