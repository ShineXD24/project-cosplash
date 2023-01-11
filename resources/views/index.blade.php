@extends('layout.main')
@section('container')
    <br>
    <div class="container">
        <div class="row">
            <div class="col-ad-12">
                <h1 align="center" class=" text-light">Data Dokter</h1>
                <div class="">
                    <div class="card-body">
                        <a type="button" class="btn btn-primary float-end" href="create">Tambah Data Baru</a>
                        <br><br>
                        <table class="table table-dark table-hover">
                            <thead>
                                <tr align="center" class="table-active">
                                    <th scope="col">Id</th>
                                    <th scope="col" class="text-start">Pict</th>
                                    <th scope="col" class="text-start">Name</th>
                                    <th scope="col" class="text-start">Price</th>
                                    <th scope="col" class="text-start">Rating</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data_cosplash as $cosplash)
                                    <tr align="center">
                                        <td><?= $cosplash->id ?></td>
                                        <td class="text-start"><img style="height: 50px" src="img/<?= $cosplash["pict"]; ?>" alt="pict"></td>
                                        <td class="text-start"><?= $cosplash->name ?></td>
                                        <td class="text-start"><?= $cosplash->price ?></td>
                                        <td class="text-start"><?= $cosplash->rating ?></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection