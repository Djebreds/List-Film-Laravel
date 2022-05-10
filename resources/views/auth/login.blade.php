@extends('layouts.login-register-admin')
@section('title', 'login')

@section('content')
    <div class="container">
        <h4 class="text-center text-white" style="margin-top: 5rem">Welcome back Admin!</h4>
        <div class="row g-0 justify-content-center">
            <div class="card shadow bg-body mt-4 border-0" style="width: 45rem;">
                <div class="card-body m-4">
                    <div class="row">
                        <div class="col-lg-7 col-md-6">
                            <form action="{{ route('login') }}" method="POST">
                                @csrf
                                <h4 class="text-center">Login</h4>
                                <div class="alert alert-primary d-flex align-items-center" role="alert">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                         fill="currentColor"
                                         class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2"
                                         viewBox="0 0 16 16" role="img" aria-label="Warning:">
                                        <path
                                                d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                                    </svg>
                                    <div>
                                        An example alert with an icon
                                    </div>
                                </div>
                                <label for="email" class="form-label">Email</label>
                                <div class="mb-2 inner-addon left-addon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="#6b9fed"
                                         viewBox="0 0 512 512">
                                        <path
                                                d="M464 64C490.5 64 512 85.49 512 112C512 127.1 504.9 141.3 492.8 150.4L275.2 313.6C263.8 322.1 248.2 322.1 236.8 313.6L19.2 150.4C7.113 141.3 0 127.1 0 112C0 85.49 21.49 64 48 64H464zM217.6 339.2C240.4 356.3 271.6 356.3 294.4 339.2L512 176V384C512 419.3 483.3 448 448 448H64C28.65 448 0 419.3 0 384V176L217.6 339.2z"/>
                                    </svg>
                                    <input type="text"
                                           class="form-control form-control-sm rounded-pill @error('email') is-invalid @enderror"
                                           name="email" id="email" value="{{ old('email') }}">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>

                                <label for="password" class="form-label">Password</label>
                                <div class="mb-2 inner-addon left-addon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" fill="#69a1f5"
                                         viewBox="0 0 512 512">
                                        <path
                                                d="M282.3 343.7L248.1 376.1C244.5 381.5 238.4 384 232 384H192V424C192 437.3 181.3 448 168 448H128V488C128 501.3 117.3 512 104 512H24C10.75 512 0 501.3 0 488V408C0 401.6 2.529 395.5 7.029 391L168.3 229.7C162.9 212.8 160 194.7 160 176C160 78.8 238.8 0 336 0C433.2 0 512 78.8 512 176C512 273.2 433.2 352 336 352C317.3 352 299.2 349.1 282.3 343.7zM376 176C398.1 176 416 158.1 416 136C416 113.9 398.1 96 376 96C353.9 96 336 113.9 336 136C336 158.1 353.9 176 376 176z"/>
                                    </svg>
                                    <input type="password"
                                           class="form-control form-control-sm rounded-pill @error('password') is-invalid @enderror"
                                           name="password" id="password" autocomplete="current-password">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>

                                <div class="hstack gap-2">
                                    <div class="form-check ">
                                        <input class="form-check-input" type="checkbox" name="remember"
                                               {{ old('remember') ? 'checked' : '' }}
                                               id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Remember me
                                        </label>
                                    </div>
                                    <div class="forgot-password ms-auto">
                                        @if (Route::has('password.request'))
                                            <a class="btn btn-link register text-decoration-none"
                                               style="font-size: 13px" href="{{ route('password.request') }}">
                                                Forgot password?
                                            </a>
                                        @endif
                                    </div>
                                </div>
                                <div class="vstack">
                                    <button type="submit"
                                            class="btn btn-primary shadow rounded-pill my-2">Login
                                    </button>
                                    <p class="register text-center">Don't have an account? <a
                                                href="{{ route('register') }} "> Register here.</a></p>
                                </div>
                            </form>
                        </div>
                        <div class="col-lg-5 col-md-6 intro">
                            <h4 class="text-center">Here we go again!</h4>
                        </div>
                    </div>
                </div>

                <svg class="svg-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                    <path fill="#0099ff" fill-opacity="1"
                          d="M0,224L24,218.7C48,213,96,203,144,181.3C192,160,240,128,288,96C336,64,384,32,432,37.3C480,43,528,85,576,96C624,107,672,85,720,101.3C768,117,816,171,864,202.7C912,235,960,245,1008,213.3C1056,181,1104,107,1152,112C1200,117,1248,203,1296,245.3C1344,288,1392,288,1416,288L1440,288L1440,320L1416,320C1392,320,1344,320,1296,320C1248,320,1200,320,1152,320C1104,320,1056,320,1008,320C960,320,912,320,864,320C816,320,768,320,720,320C672,320,624,320,576,320C528,320,480,320,432,320C384,320,336,320,288,320C240,320,192,320,144,320C96,320,48,320,24,320L0,320Z">
                    </path>
                </svg>
                <img class="svg-3" src="{{ URL::asset('assets/img/home-img.png') }}" width="40%" alt="">
            </div>
        </div>
    </div>
@endsection

