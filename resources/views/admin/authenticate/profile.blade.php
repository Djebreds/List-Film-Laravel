@extends('layouts.main-admin')
@section('title', 'Profile')

@section('content')
    <h3>Profile</h3>
    <div class="card p-1 mb-3 card shadow mb-2 bg-body rounded profile border-0">
        <div class="row p-1">
            <div class="hstack">
                <div class="col-1 text-center">
                    <img src="{{ URL::asset('assets/img/avatar.png') }}"
                         class="rounded-circle">
                </div>
                <div class="col">
                    <div class="profile-status ms-2">
                        <h4>{{ auth()->user()->name }}</h4>
                        <p>{{ auth()->user()->email }}</p>
                        <p>{{ auth()->user()->role }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card p-2 my-3 card shadow mb-2 bg-body rounded border-3 border-end-1 border-top-0 border-bottom-0 border-start-1 border-primary basic-info list-group-flush">
        <div class="header list-group-item">
            <h5>Basic Info</h5>
        </div>
        <div class="row p-1">
            <div class="col">
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="name" class="form-control form-control-sm" id="name"
                           value="{{ auth()->user()->name }}" readonly>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" class="form-control form-control-sm" id="email"
                           value="{{ auth()->user()->email }}" readonly>
                </div>
            </div>
            <div class="col">
                <div class="mb-3">
                    <label for="email" class="form-label">Role</label>
                    <input type="text" class="form-control form-control-sm" id="role"
                           value="{{ auth()->user()->role }}" readonly>
                </div>
                <div class="mb-3">
                    <label for="joined" class="form-label">Joined</label>
                    <input type="text" class="form-control form-control-sm" id="joined"
                           value="{{ date('d-m-Y H:m:s', strtotime(auth()->user()->created_at)) }}"
                           readonly>
                </div>
            </div>
        </div>
    </div>
    <div class="card p-2 my-3 card shadow mb-2 bg-body rounded border-3 border-end-1 border-top-0 border-bottom-0 border-start-1 border-primary basic-info list-group-flush">
        <div class="header list-group-item">
            <h5>Update Profile</h5>
        </div>
        <form class="form-group" method="POST" action="">
            <div class="row p-1">
                <div class="col">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="name" class="form-control form-control-sm" id="name"
                               value="{{ auth()->user()->name }}" name="name" placeholder="">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" class="form-control form-control-sm" id="email"
                               value="{{ auth()->user()->email }}" name="email">
                    </div>
                </div>
                <div class="col">
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control form-control-sm" id="password" name="password"
                               value="" placeholder="Leave it blank if you do not want to change">
                    </div>
                    <div class="mb-3">
                        <label for="password-repeat" class="form-label">Confirm Password</label>
                        <input type="password" class="form-control form-control-sm" id="password"
                               name="password_confirmation" placeholder="Leave it blank if you do not want to change"
                               value="">
                    </div>
                </div>
                <div class="vstack gap-1">
                    <div class="header ms-auto">
                        <button type="reset" class="button btn btn-danger">
                            <span class="button__icon">

                                <svg xmlns="http://www.w3.org/2000/svg" width="16" fill="currentColor"
                                     viewBox="0 0 448 512"><path
                                            d="M284.2 0C296.3 0 307.4 6.848 312.8 17.69L320 32H416C433.7 32 448 46.33 448 64C448 81.67 433.7 96 416 96H32C14.33 96 0 81.67 0 64C0 46.33 14.33 32 32 32H128L135.2 17.69C140.6 6.848 151.7 0 163.8 0H284.2zM31.1 128H416L394.8 466.1C393.2 492.3 372.3 512 346.9 512H101.1C75.75 512 54.77 492.3 53.19 466.1L31.1 128zM207 199L127 279C117.7 288.4 117.7 303.6 127 312.1C136.4 322.3 151.6 322.3 160.1 312.1L199.1 273.9V408C199.1 421.3 210.7 432 223.1 432C237.3 432 248 421.3 248 408V273.9L287 312.1C296.4 322.3 311.6 322.3 320.1 312.1C330.3 303.6 330.3 288.4 320.1 279L240.1 199C236.5 194.5 230.4 191.1 223.1 191.1C217.6 191.1 211.5 194.5 207 199V199z"/></svg>
                            </span>
                            <span class="button__text"> Reset </span>
                        </button>
                        <button type="button" class="button btn btn-primary">
                            <span class="button__icon">
                               <svg xmlns="http://www.w3.org/2000/svg" width="16" fill="currentColor"
                                    viewBox="0 0 512 512"><path
                                           d="M490.3 40.4C512.2 62.27 512.2 97.73 490.3 119.6L460.3 149.7L362.3 51.72L392.4 21.66C414.3-.2135 449.7-.2135 471.6 21.66L490.3 40.4zM172.4 241.7L339.7 74.34L437.7 172.3L270.3 339.6C264.2 345.8 256.7 350.4 248.4 353.2L159.6 382.8C150.1 385.6 141.5 383.4 135 376.1C128.6 370.5 126.4 361 129.2 352.4L158.8 263.6C161.6 255.3 166.2 247.8 172.4 241.7V241.7zM192 63.1C209.7 63.1 224 78.33 224 95.1C224 113.7 209.7 127.1 192 127.1H96C78.33 127.1 64 142.3 64 159.1V416C64 433.7 78.33 448 96 448H352C369.7 448 384 433.7 384 416V319.1C384 302.3 398.3 287.1 416 287.1C433.7 287.1 448 302.3 448 319.1V416C448 469 405 512 352 512H96C42.98 512 0 469 0 416V159.1C0 106.1 42.98 63.1 96 63.1H192z"/></svg>
                            </span>
                            <span class="button__text"> Update profile </span>
                        </button>
                    </div>
                </div>
            </div>

        </form>


    </div>
@endsection
