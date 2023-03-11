<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <html lang="en" data-bs-theme="dark">
    <title>Konsultasi | Sign-In</title>
</head>
<body>
    <div class="container mt-5">
        <div class="row d-flex justify-content-center">
            <div class="col-md-7 mt-5">

            
    @if(session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close">   
            </button>
        </div>
    @endif
    
    @if(session()->has('loginError'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('loginError') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close">   
            </button>
        </div>
    @endif  


    
            <form action="/sign-in" method="post">
                @csrf
                <div class="text-align:center">
                <div class="card mx-auto row d-flex justify-content-center" style="width: 25rem;"> 
                    <h4 class="card-title" style="text-align:center">Sign In Here</h4>   
                    <div class="mt-3 mb-4">
                        <label for="formGroupExampleInput" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control @error('email') 
                        is-invalid @enderror" id="email" placeholder="joy123@mail.com" autofocus 
                        required value="{{ old('email') }}">
                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="formGroupExampleInput2" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="password" placeholder="******" required>
                    </div>
                    <div class="mb-4">
                        <a href="home" class="btn btn-danger">Back</a>
                        <button type="submit" class="btn btn-primary ms-2" >Sign-in</button>
                    </div>
                </div>
                </div>
            </form>
            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</html>