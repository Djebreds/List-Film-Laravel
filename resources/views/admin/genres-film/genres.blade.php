@extends('layouts.main-admin')
@section('title', 'Data Genres')

@section('content')
    <h2>Data Genre</h2>
    <div class="card mt-4 shadow  mb-2 bg-body rounded">
        <div class="card-header">
            <a href="#" class="title-card">Table Genres</a>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="hstack gap-2 mb-3">
                    {{--                    <div class="col">--}}
                    {{--                        <a href="/genres/add-genre" type="button" class="button btn btn-success">--}}
                    {{--                            <span class="button__icon">--}}
                    {{--                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" width="20" height="20"--}}
                    {{--                                    viewBox="0 0 640 512">--}}
                    {{--                                    <path--}}
                    {{--                                        d="M206.9 245.1C171 255.6 146.8 286.4 149.3 319.3C160.7 306.5 178.1 295.5 199.3 288.4L206.9 245.1zM95.78 294.9L64.11 115.5C63.74 113.9 64.37 112.9 64.37 112.9c57.75-32.13 123.1-48.99 189-48.99c1.625 0 3.113 .0745 4.738 .0745c13.1-13.5 31.75-22.75 51.62-26c18.87-3 38.12-4.5 57.25-5.25c-9.999-14-24.47-24.27-41.84-27.02c-23.87-3.875-47.9-5.732-71.77-5.732c-76.74 0-152.4 19.45-220.1 57.07C9.021 70.57-3.853 98.5 1.021 126.6L32.77 306c14.25 80.5 136.3 142 204.5 142c3.625 0 6.777-.2979 10.03-.6729c-13.5-17.13-28.1-40.5-39.5-67.63C160.1 366.8 101.7 328 95.78 294.9zM193.4 157.6C192.6 153.4 191.1 149.7 189.3 146.2c-8.249 8.875-20.62 15.75-35.25 18.37c-14.62 2.5-28.75 .376-39.5-5.249c-.5 4-.6249 7.998 .125 12.12c3.75 21.75 24.5 36.24 46.25 32.37C182.6 200.1 197.3 179.3 193.4 157.6zM606.8 121c-88.87-49.38-191.4-67.38-291.9-51.38C287.5 73.1 265.8 95.85 260.8 123.1L229 303.5c-15.37 87.13 95.33 196.3 158.3 207.3c62.1 11.13 204.5-53.68 219.9-140.8l31.75-179.5C643.9 162.3 631 134.4 606.8 121zM333.5 217.8c3.875-21.75 24.62-36.25 46.37-32.37c21.75 3.75 36.25 24.49 32.5 46.12c-.7499 4.125-2.25 7.873-4.125 11.5c-8.249-9-20.62-15.75-35.25-18.37c-14.75-2.625-28.75-.3759-39.5 5.124C332.1 225.9 332.9 221.9 333.5 217.8zM403.1 416.5c-55.62-9.875-93.49-59.23-88.99-112.1c20.62 25.63 56.25 46.24 99.49 53.87c43.25 7.625 83.74 .3781 111.9-16.62C512.2 392.7 459.7 426.3 403.1 416.5zM534.4 265.2c-8.249-8.875-20.75-15.75-35.37-18.37c-14.62-2.5-28.62-.3759-39.5 5.249c-.5-4-.625-7.998 .125-12.12c3.875-21.75 24.62-36.25 46.37-32.37c21.75 3.875 36.25 24.49 32.37 46.24C537.6 257.9 536.1 261.7 534.4 265.2z" />--}}
                    {{--                                </svg>--}}
                    {{--                            </span>--}}
                    {{--                            <span class="button__text"> Add Genre </span>--}}
                    {{--                        </a>--}}
                    {{--                    </div>--}}

                    <div class="col-3 ms-auto">
                        <form action="{{ route('genres') }}" class="input-group input-group-sm">
                            <input type="text" class="form-control form-control-sm text-secondary" name="search"
                                   placeholder="search..." aria-label="search..." value="{{ request('search') }}"
                                   aria-describedby="button-addon2">
                            <button class="btn btn-primary" type="submit" id="button-addon2">
                                <svg
                                        xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-search" viewBox="0 0 16 16">
                                    <path
                                            d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                                </svg>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            <table class="table table-bordered table-sm tabel">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Genre List</th>
                    <th scope="col">Action</th>
                </tr>
                @foreach ($genres as $index => $genre)
                    <tr>
                        <td>{{ $genres->firstItem() + $index }}</td>
                        <td>{{ $genre->genre_list }}</td>
                        <td>
                            <div class="btn-group btn-group-sm">
                                <div class="btn-group btn-group-sm">
                                    <button type="button" class="btn btn-primary dropdown-toggle btn-sm"
                                            id="dropdownMenuClickableOutside" data-bs-toggle="dropdown">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                             fill="currentColor"
                                             class="bi bi-pencil-fill" viewBox="0 0 18 18">
                                            <path
                                                    d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
                                        </svg>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end drop-menu"
                                        aria-labelledby="dropdownMenuClickableOutside">
                                        <li>
                                            <p class="dropdown-header drop">Are you sure want to edit ?</p>
                                        </li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li>
                                            <div class="row mx-auto">
                                                <div class="col-5 ">
                                                    <a href="update-genre.php?id_list="
                                                       class="dropdown-item text-center text-danger px-2">Yes</a>
                                                </div>
                                                <div class="col-auto">
                                                    <div class="d-flex" style="height: 25px;">
                                                        <div class="vr"></div>
                                                    </div>
                                                </div>
                                                <div class="col-5">
                                                    <a href="#"
                                                       class="dropdown-item text-center text-primary px-2">No</a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="vr"></div>
                            <div class="btn-group btn-group-sm">
                                <div class="btn-group btn-group-sm">
                                    <button type="button" class="btn btn-danger dropdown-toggle btn-sm"
                                            id="dropdownMenuClickableOutside" data-bs-toggle="dropdown">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                             fill="currentColor"
                                             class="bi bi-trash-fill" viewBox="0 0 18 18">
                                            <path
                                                    d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                                        </svg>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end drop-menu"
                                        aria-labelledby="dropdownMenuClickableOutside">
                                        <li>
                                            <p class="dropdown-header drop">Are you sure to delete ?</p>
                                        </li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li>
                                            <div class="row mx-auto">
                                                <div class="col-5 ">
                                                    <a href="delete-genre.php?id_list="
                                                       class="dropdown-item text-center text-danger px-2">Yes</a>
                                                </div>
                                                <div class="col-auto">
                                                    <div class="d-flex" style="height: 25px;">
                                                        <div class="vr"></div>
                                                    </div>
                                                </div>
                                                <div class="col-5">
                                                    <a href="#"
                                                       class="dropdown-item text-center text-primary px-2">No</a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </table>
            @if (request('search'))
                <p class="text-secondary " style="font-weight:700; font-family: 'Nunito', sans-serif; font-size: 13px;">
                    Founded data : {{ count($genres) }} </p>
                <a href="{{ route('directors') }}" type="button" class="button btn btn-primary">
                    <span class="button__icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                             viewBox="0 0 576 512">
                            <path
                                    d="M279.6 160.4C282.4 160.1 285.2 160 288 160C341 160 384 202.1 384 256C384 309 341 352 288 352C234.1 352 192 309 192 256C192 253.2 192.1 250.4 192.4 247.6C201.7 252.1 212.5 256 224 256C259.3 256 288 227.3 288 192C288 180.5 284.1 169.7 279.6 160.4zM480.6 112.6C527.4 156 558.7 207.1 573.5 243.7C576.8 251.6 576.8 260.4 573.5 268.3C558.7 304 527.4 355.1 480.6 399.4C433.5 443.2 368.8 480 288 480C207.2 480 142.5 443.2 95.42 399.4C48.62 355.1 17.34 304 2.461 268.3C-.8205 260.4-.8205 251.6 2.461 243.7C17.34 207.1 48.62 156 95.42 112.6C142.5 68.84 207.2 32 288 32C368.8 32 433.5 68.84 480.6 112.6V112.6zM288 112C208.5 112 144 176.5 144 256C144 335.5 208.5 400 288 400C367.5 400 432 335.5 432 256C432 176.5 367.5 112 288 112z"/>
                        </svg>
                    </span>
                    <span class="button__text"> Show all </span>
                </a>
            @else
                {{ $genres->links('layouts.pagination') }}
            @endif
        </div>
    </div>
@endsection
