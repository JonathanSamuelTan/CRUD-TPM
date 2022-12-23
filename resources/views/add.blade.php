<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tambah Obat</title>
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

      <div class="m-5">
        <h1>Tambah Obat Baru</h1>
        <form action="/store-obat" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
              <label for="nama" class="form-label">Nama Obat</label>
              <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" aria-describedby="emailHelp" name="nama" value = {{old('nama')}}>
              @error('nama')
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
            
            <select class="form-select" aria-label="Default select example" name="kegunaan_id">
              <option selected>Kegunaan Obat</option>
              @foreach ($kegunaan as $item)
                <option value="{{$item->id}}">{{$item->kegunaan}}</option>
              @endforeach
            </select>

            <div class="mb-3">
              <label for="pabrik" class="form-label">PBF</label>
              <input type="text" class="form-control @error('pbf') is-invalid @enderror" id="pabrik" name="pbf"
              value = {{old('pbf')}}>
              @error('pbf')
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
            <div class="mb-3">
                <label for="stok" class="form-label">Stok</label>
                <input type="number" class="form-control @error('stok') is-invalid @enderror" id="stok" name="stok"
                value = {{old('stok')}}>
                @error('stok')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="harga" class="form-label">Harga</label>
                <input type="number" class="form-control @error('harga') is-invalid @enderror" id="harga" name="harga"
                value = {{old('harga')}}>
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