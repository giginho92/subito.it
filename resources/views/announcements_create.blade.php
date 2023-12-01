<x-layout>
    <x-navbar>
    </x-navbar>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <h1 class="display-1 text-center">Carica il tuo Articolo</h1>
            </div>
            <div class="col-6">
                <form method="POST" action="{{route('announcements_store')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Nome dell'articolo</label>
                        <input name="name" type="text" class="form-control" id="name" value="{{old('name')}}">
                        @error('name')
                        <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="category" class="form-label">Tipologia dell'articolo</label>
                        <input name="category" type="text" class="form-control" id="category" value="{{old('category')}}">
                        @error('category')
                        <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Prezzo dell'articolo</label>
                        <input name="price" type="text" class="form-control" id="price"value="{{old('price')}}">
                    </div>
                    @error('price')
                        <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                    <div class="mb-3">
                        <label for="img" class="form-label">Carica l'immagine del tuo articolo</label>
                        <input name="img" type="file" class="form-control" id="img">
                    </div>
                    <div class="mb-3">
                        <button class="btn btn-primary" type="submit">Carica</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    
</x-layout>