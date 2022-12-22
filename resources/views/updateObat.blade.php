<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Update Data Obat</title>
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

      <div class="m-5">
        <h1>Update Data Obat</h1>
        <form action="{{route('update', $item->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <div class="mb-3">
              <label for="nama" class="form-label">Nama Obat</label>
              <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" aria-describedby="emailHelp" name="nama" value = {{$item->nama}}>
              @error('nama')
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
            <div class="mb-3">
              <label for="pabrik" class="form-label">PBF</label>
              <input type="text" class="form-control @error('pbf') is-invalid @enderror" id="pabrik" name="pbf"
              value = {{$item->pbf}}>
              @error('pbf')
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
            <div class="mb-3">
                <label for="stok" class="form-label">Stok</label>
                <input type="number" class="form-control @error('stok') is-invalid @enderror" id="stok" name="stok"
                value = {{$item->stok}}>
                @error('stok')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="harga" class="form-label">Harga</label>
                <input type="number" class="form-control @error('harga') is-invalid @enderror" id="harga" name="harga"
                value = {{$item->harga}}>
                @error('harga')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
              <label for="image" class="form-label">Gambar</label>
              <input type="file" class="form-control @error('image') is-invalid @enderror" id="image" name="image">
              @error('image')
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror
          </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
      </div>

    
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  
  
    </body>
</html>