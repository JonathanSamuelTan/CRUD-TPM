<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Apotek Sinar Farma</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
  </head>
  <body style="background-color:#FFFBEB;">
    <nav class="navbar navbar-expand-lg" style="background-color: #263159; color:white;">
        <div class="container-fluid">
          <i class="bi bi-prescription" style="font-size: 40px">
          <a class="navbar-brand" href="{{route('welcome')}}" style="color:white;">  Apotek Sinar Farma</a>
          </i>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
    </nav>

    <div class="card m-3">
        <div class="card-body">
          <h5 class="card-title">Katalog Obat</h5>
          <p class="card-text">Berikut obat-obat yang tersedia untuk dibeli secara online maupun onsite</p>
          @can('isAdmin')
            <a href="{{route('add')}}" class="btn btn-primary">Tambah Obat Baru</a>
            <a href="{{route('add-kegunaan')}}" class="btn btn-primary">Tambah Kegunaan</a>
          @endcan
        </div>
    </div>
    <hr class="mx-3">

    <div class="mx-3">
        <div class="row">
          @foreach ($obat as $item)
              <div class="col-sm-3 my-3">
                <div class="card">
                  <div class="card-body">
                    <img src="{{asset('/storage/Obat/'.$item->image)}}" class="card-img-top" alt="{{$item->nama}}"> 
                    <h5 class="card-title">{{$item->nama}}</h5>
                    <p class="card-text">Harga : Rp.{{$item->harga}}</p>
                    <p class="card-text">Stok  : {{$item->stok}}</p>
                    <a href="/obat/{{$item->id}}" class="btn btn-primary btn-sm my-2">Product Detail</a>
                    @can('isAdmin')
                    <a href="/edit/{{$item->id}}" class="btn btn-success btn-sm my-2">Update</a>
                    <form action="/delete/{{$item->id}}" method="POST">
                      @csrf
                      @method('DELETE')
                      <button class="btn btn-danger btn-sm my-2">Delete</button>
                    </form>
                    @endcan
                  </div>
                </div>
              </div>
          @endforeach
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>