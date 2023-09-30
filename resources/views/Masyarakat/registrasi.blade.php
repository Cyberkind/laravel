<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
</head>
<body>
    <div id="main" class="d-flex align-items-center vh-100">
        <div class="container">
            <div class="card shadow m-auto" style="width: 400px;">
                <div class="card-body">
                    
                    <h4 class="h4">Daftarkan diri anda</h4>
                    @if (session('info'))
                    <div class="alert alert-success" role="alert">
                        {{session('info')}}
                      </div>
                    @endif
                    @if ($errors->any())
                    <div class="alert alert-success" role="alert">
                        gagal coy
                      </div>
                    @endif
                    <form action="{{url('registrasi/simpan')}}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="nik" class="form-label">NIK</label>
                            <input type="text" class="form-control" name="nik" id="nik" placeholder="NIK"> 
                            @error('nik')
                                <div class="form-text">
                                    {{$message}}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="Nama" class="form-label">Nama</label>
                            <input type="text" class="form-control" name="Nama" id="Nama" placeholder="Nama Lengkap"> 
                            @error('Nama')
                                <div class="form-text">
                                    {{$message}}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="Username" class="form-label">Username</label>
                            <input type="text" class="form-control" name="Username" id="Username" placeholder="Username"> 
                            @error('Username')
                                <div class="form-text">
                                    {{$message}}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="Password" class="form-label">Password</label>
                            <input type="Password" class="form-control" name="Password" id="Password" placeholder="Password"> 
                            @error('Password')
                                <div class="form-text">
                                    {{$message}}
                                </div>
                            @enderror
                        </div>  
                        <div class="mb-3">
                            <label for="telp" class="form-label">Telpon</label>
                            <input type="text" class="form-control" name="telp" id="telp" placeholder="Telpon"> 
                            @error('telp')
                                <div class="form-text">
                                    {{$message}}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <button class="btn form-control btn-primary mb-2">Registrasi</button>
                            <button class="btn form-control btn-outline-success mb-2" type="reset">Batal</button>
                            
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>