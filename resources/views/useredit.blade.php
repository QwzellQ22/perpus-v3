@extends('layout')

@section('content')
<div class="row">


    <!-- Earnings (Monthly) Card Example -->

</div>

<!-- Content Row -->

<div class="row">

    <!-- Area Chart -->
    <div class="col-xl-12 col-lg-12">
        <h3> <strong>Menu Edit User</strong></h3>
        <div class="card shadow mb-4">

            <!-- Card Header - Dropdown -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Users</h6>
                <div class="dropdown no-arrow">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                        <div class="dropdown-header">Dropdown Header:</div>
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </div>
            </div>
            <!-- Card Body -->
            <div class="card-body">
                <div class="container">
                    <div class="row">
                        <div class="col-6">
                            @foreach($user as $u)
                            <form action="/usereditsave/{{$u->user_id}}" method="get">
                                @csrf
                                <label>Username</label>
                                <input type="text" name="username" class="form-control" placeholder="Masukan username anda" value="{{$u->username}}">
                                @error('username')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror

                                <label>Password</label>
                                <input type="password" name="password" class="form-control" placeholder="Silahkan masukkan password anda">
                                <i>Abaikan jika password tidak ada perubahan</i>
                                @error('password')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror

                                <label>Level {{$u->level}}</label>
                                <select class="form-control" name="level">
                                    <option hidden value="{{$u->level}}">{{$u->level}}</option>
                                    <option value="Admin">Admin</option>
                                    <option value="Petugas">Petugas</option>
                                </select>
                                @error('level')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <br>

                                <input type="submit" class="btn btn-success" value="Simpan">
                                <a href="cardmem" class="btn btn-secondary">Kembali</a>
                            </form>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Pie Chart -->

</div>
@endsection