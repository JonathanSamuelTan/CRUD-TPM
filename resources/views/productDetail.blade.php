<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><{{$item->name}}/title>
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

    <div>
        <div class="card" style="width: 18rem;">
            <div class="card-body">
              <img src="{{asset('/storage/Obat/'.$item->image)}}" class="card-img-top" alt="{{$item->nama}}"> 
              <h5 class="card-title">{{$item->nama}}</h5>
              <p class="card-text">Rp.{{$item->harga}}</p>
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">Kegunaan: {{$item->kegunaan->kegunaan}}</li>
              <li class="list-group-item">PBF: {{$item->pbf}}</li>
              <li class="list-group-item">Stok: {{$item->stok}}</li>
            </ul>
        </div>
    </div>

    
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  
    </body>
</html>