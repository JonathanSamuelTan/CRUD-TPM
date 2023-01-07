<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tambah Kegunaan</title>
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
        <a class ="btn btn-danger"href="{{route('logout')}}"> Log Out</a>
      </div>
  </nav>

      <div class="m-5">
        <h1>Tambah Kegunaan Baru</h1>
        <form action="/store-kegunaan" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
              <label for="kegunaan" class="form-label">Kegunaan</label>
              <input type="text" class="form-control @error('kegunaan') is-invalid @enderror" id="kegunaan" aria-describedby="emailHelp" name="kegunaan" value = {{old('kegunaan')}}>
              @error('kegunaan')
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
            
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
      </div>

    
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  
  
    </body>
</html>