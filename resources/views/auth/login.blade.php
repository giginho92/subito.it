<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form method="POST" action="/login">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Inserisci il tuo indirizzo Email</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Log-in</button>
                </form>
            </div>
    </div>
</x-layout>