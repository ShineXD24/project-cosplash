@extends('layout.main')
@section('container')
    <div class="container ">

        <div class="row">
            <div class="col-sm">
                <div class="row">
                    @foreach ($data_cosplash as $cosplash)
                    <div class="col-sm">
                            <div class="card" style="width: 18rem;">
                                <img class="card-img-top" style="height: 100px" src="img/<?= $cosplash['pict'] ?>"
                                    alt="pict">
                                <div class="card-body">
                                    <p class="card-text"><?= $cosplash->name ?></p>
                                    <p class="card-text"><?= $cosplash->price ?></p>
                                </div>
                            </div>
                            {{-- <a type="button" class="btn btn-primary float-end" href="create">Tambah Data Baru</a>
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
                                        <td class="text-start"><img style="height: 50px" src="img/<?= $cosplash['pict'] ?>"
                                                alt="pict"></td>
                                        <td class="text-start"><?= $cosplash->name ?></td>
                                        <td class="text-start"><?= $cosplash->price ?></td>
                                        <td class="text-start"><?= $cosplash->rating ?></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table> --}}
                        </div>
                        @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
