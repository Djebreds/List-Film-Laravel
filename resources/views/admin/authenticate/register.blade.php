@extends('layouts.login-register-admin')
@section('title', 'register')

@section('content')
    <div class="container">
        <h4 class="text-center text-white" style="margin-top: 5rem">Hello. Want to be member in our website ?</h4>
        <div class="row g-0 justify-content-center">
            <div class="card shadow bg-body mt-4 border-0" style="width: 45rem;">
                <div class="card-body m-4">
                    <div class="row">
                        <div class="col-lg-7 col-md-6">
                            <form action="{{ route('register') }}" method="POST">
                                @csrf
                                <h4 class="text-center">Register</h4>
                                <label for="name" class="form-label">Name</label>
                                <div class="mb-2 inner-addon left-addon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" fill="#6b9fed"
                                         viewBox="0 0 448 512">
                                        <path
                                                d="M224 256c70.7 0 128-57.31 128-128s-57.3-128-128-128C153.3 0 96 57.31 96 128S153.3 256 224 256zM274.7 304H173.3C77.61 304 0 381.6 0 477.3c0 19.14 15.52 34.67 34.66 34.67h378.7C432.5 512 448 496.5 448 477.3C448 381.6 370.4 304 274.7 304z"/>
                                    </svg>
                                    <input type="text"
                                           class="form-control form-control-sm rounded-pill @error('name') is-invalid @enderror"
                                           name="name" id="name" value="{{ old('name') }}" placeholder="Your name here">
                                    @error('name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>

                                <label for="email" class="form-label">Email</label>
                                <div class="mb-2 inner-addon left-addon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="#6b9fed"
                                         viewBox="0 0 512 512">
                                        <path
                                                d="M464 64C490.5 64 512 85.49 512 112C512 127.1 504.9 141.3 492.8 150.4L275.2 313.6C263.8 322.1 248.2 322.1 236.8 313.6L19.2 150.4C7.113 141.3 0 127.1 0 112C0 85.49 21.49 64 48 64H464zM217.6 339.2C240.4 356.3 271.6 356.3 294.4 339.2L512 176V384C512 419.3 483.3 448 448 448H64C28.65 448 0 419.3 0 384V176L217.6 339.2z"/>
                                    </svg>
                                    <input type="email"
                                           class="form-control form-control-sm rounded-pill @error('email') is-invalid @enderror"
                                           name="email" id="email" value="{{ old('email') }}"
                                           placeholder="example@example.com">
                                    @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
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
                                           name="password" id="password" value="{{ old('password') }}">
                                    @error('password')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <label for="password-repeat" class="form-label">Repeat Password</label>
                                <div class="mb-2 inner-addon left-addon">

                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" fill="#69a1f5"
                                         viewBox="0 0 512 512">

                                        <path
                                                d="M480 256c-17.67 0-32 14.31-32 32c0 52.94-43.06 96-96 96H192L192 344c0-9.469-5.578-18.06-14.23-21.94C169.1 318.3 159 319.8 151.9 326.2l-80 72C66.89 402.7 64 409.2 64 416s2.891 13.28 7.938 17.84l80 72C156.4 509.9 162.2 512 168 512c3.312 0 6.615-.6875 9.756-2.062C186.4 506.1 192 497.5 192 488L192 448h160c88.22 0 160-71.78 160-160C512 270.3 497.7 256 480 256zM160 128h159.1L320 168c0 9.469 5.578 18.06 14.23 21.94C337.4 191.3 340.7 192 343.1 192c5.812 0 11.57-2.125 16.07-6.156l80-72C445.1 109.3 448 102.8 448 95.1s-2.891-13.28-7.938-17.84l-80-72c-7.047-6.312-17.19-7.875-25.83-4.094C325.6 5.938 319.1 14.53 319.1 24L320 64H160C71.78 64 0 135.8 0 224c0 17.69 14.33 32 32 32s32-14.31 32-32C64 171.1 107.1 128 160 128z"/>
                                    </svg>
                                    <input type="password"
                                           class="form-control form-control-sm rounded-pill @error('password') is-invalid @enderror"
                                           name="password_confirmation" id="password-repeat">
                                </div>
                                <div class="vstack">
                                    <button type="submit"
                                            class="btn btn-primary shadow rounded-pill my-2">Register
                                    </button>
                                    <p class="register text-center">Already have an account? <a
                                                href="{{ url('/login') }} "> Login here.</a></p>

                                </div>
                            </form>
                        </div>
                        <div class="col-lg-5 col-md-6 intro">
                            <h4 class="text-center">Here to get started!</h4>
                        </div>
                    </div>
                </div>

                <svg class="svg-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                    <path fill="#0099ff" fill-opacity="1"
                          d="M0,224L24,218.7C48,213,96,203,144,181.3C192,160,240,128,288,96C336,64,384,32,432,37.3C480,43,528,85,576,96C624,107,672,85,720,101.3C768,117,816,171,864,202.7C912,235,960,245,1008,213.3C1056,181,1104,107,1152,112C1200,117,1248,203,1296,245.3C1344,288,1392,288,1416,288L1440,288L1440,320L1416,320C1392,320,1344,320,1296,320C1248,320,1200,320,1152,320C1104,320,1056,320,1008,320C960,320,912,320,864,320C816,320,768,320,720,320C672,320,624,320,576,320C528,320,480,320,432,320C384,320,336,320,288,320C240,320,192,320,144,320C96,320,48,320,24,320L0,320Z">
                    </path>
                </svg>
                <img class="svg-3 mt-5" src="{{ URL::asset('assets/img/home-img.png') }}" width="40%" alt="">
            </div>
        </div>
    </div>
@endsection
