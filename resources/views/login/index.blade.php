 @extends ('layouts.main')
 @section('container')
     <h3 class="text-center mt-5">Login</h3>

     <div class="row justify-content-center mt-5">
         <div class="col-lg-6">


             @if (session()->has('success'))
                 <div class="alert alert-success alert-dismissible fade show" role="alert">
                     {{ session('success') }}
                     <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                 </div>
             @endif


             @if (session()->has('loginError'))
                 <div class="alert alert-danger alert-dismissible fade show" role="alert">
                     {{ session('loginError') }}
                     <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                 </div>
             @endif


             <main class="form-signin">

                 <form action="/login" method="post">
                     @csrf
                     <!-- Email input -->
                     <div class="form-floating">
                         <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                             id="email" placeholder="name@example.com" autofocus required value="{{ old('email') }}">
                         <label for="email">Email Address</label>
                         @error('email')
                             <div class="invalid-feedback">
                                 {{ $message }}
                             @enderror
                         </div>

                         <!-- Password input -->
                         <div class="form-floating">
                             <input type="password" name="password" class="form-control" id="password"
                                 placeholder="Password" required>
                             <label for="password">Password</label>
                         </div>

                         <button class="w-100 btn btn-lg btn-primary mt-2" type="submit">Login</button>
                 </form>
                 <small class="d-block text-center mt-3">Belum Mendaftar? <a href="/register">Daftar!</a></small>
                 <img src="/img/lg.png" class="img-fluid" alt="">
             </main>
         </div>
     </div>
     </div>
