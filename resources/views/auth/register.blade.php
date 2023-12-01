<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form method="POST" action="/register">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label">Inserisci il tuo indirizzo Email</label>
                        <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        @error('email')
                        <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Inserisci la tua Password</label>
                        <input name="password" type="password" class="form-control" id="password">
                        @error('password')
                        <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="confirm password" class="form-label">Conferma password</label>
                        <input name="password_confirmation"type="password" class="form-control" id="confirm password">
                        @error('password_confirmation')
                        <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Registrati</button>
                </form>
            </div>
    </div>
</x-layout>