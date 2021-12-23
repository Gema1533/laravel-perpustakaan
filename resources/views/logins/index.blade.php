@extends('layout.main')
@section('content')
        <div class="row justify-content-center">
            <div class="col-lg-5">
                {{-- Jika kita berhasil melakukan registrasi alert ini akan muncul , alert ini diatur didalam RegisterController --}}
                
                @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session ('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif


                @if (session('loginError'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ session ('loginError') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <div class="container">
                    <main class="form-register">

                       <form action="{{ route('logins.store') }}" method="POST" enctype="multipart/form-data">
                         @csrf
                            <h1 class="h3 mb-3 fw-normal"><center>Login</center></h1>

                            <div class="form-floating">
                                <input type="text" name="username" class="form-control mt-2" id="name" placeholder="username">
                                <label for="username">Username</label>
                            </div>
                            <div class="form-floating">
                                <input type="password" name="password" class="form-control mt-2" id="password" placeholder="Password">
                                <label for="password">Password</label>
                            </div>

                            <button class="w-100 btn btn-lg btn-primary mt-4" type="submit">Submit</button>
                            
                        </form>
                        <small class="d-block text-center mt-3">Belum punya akun? <a href="/registers">Register</a></small>
                    </main>
                </div>
            </div>
        </div>
@endsection