<x-layout>
    <x-navbar></x-navbar>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <h1 class="display-1 text-center">Ecco i nostri articoli</h1>
            </div>
            @foreach ($announcements as $announcement)
            <div class="col-4">
                <div class="card" style="width: 18rem;">
                    <img src="{{Storage::url($announcement->img)}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{$announcement->name}}</h5>
                        <p class="card-text">{{$announcement->price}}</p>
                        <p class="card-text">{{$announcement->category}}</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            @endforeach
        </x-layout>