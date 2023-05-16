@extends('layout')

@section('content')

<h3>Daftar User Baru</h3>

<div class="row">

    <!-- Area Chart -->
    <div class="col-xl-12 col-lg-12">
        <div class="card shadow mb-4">
            {{-- | | | --}}
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">users</h6>
                <div class="dropdown no-arrow">
                </div>
            </div>
            <!-- Card Body -->
            <div class="card-body">
                <a href="useradd" class="btn btn-outline-primary"> Tambah User</a>
                <hr>
                <form action="">

                    <table class="table border shadow-sm">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Username</th>
                                <th>Level</th>
                                <th>Opsi</th>

                            </tr>
                        </thead>


                        <tbody>
                            @php
                            $no=1;
                            @endphp
                            @foreach($user as $u)
                            <tr>
                                <td>{{$no}}</td>
                                <td>{{ $u->username }}</td>
                                <td>{{ $u->level  }}</td>
                                <td>
                                    <a href="useredit/{{$u->user_id}}" class="btn btn-primary">Edit</a>
                                    <a href="/delete/{{$u->user_id}}" class="btn btn-danger">Hapus</a>
                                </td>

                            </tr>
                            @php
                            $no++;
                            @endphp
                            @endforeach

                        </tbody>

                    </table>

                </form>

            </div>
        </div>
    </div>
</div>

@endsection