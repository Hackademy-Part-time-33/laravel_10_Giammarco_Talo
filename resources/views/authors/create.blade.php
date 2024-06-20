<x-layout>
    
    <body>
        <div class="container my-5">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <h2>Crea un nuovo autore</h2>
                    <form action="{{ route('authors.store') }}" method="POST">
                        @csrf
                        
                        <div class="mb-3">
                            <label for="firstname" class="form-label">Nome</label>
                            <input type="text" name="firstname" class="form-control" id="firstname" value="{{ old('firstname') }}">
                            @error('firstname')
                            <span class="small text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        
                        <div class="mb-3">
                            <label for="lastname" class="form-label">Cognome</label>
                            <input type="text" name="lastname" class="form-control" id="lastname" value="{{ old('lastname') }}">
                            @error('lastname')
                            <span class="small text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Crea Autore</button>
                    </form>
                </div>
            </div>
        </div>
    </body>
</x-layout>
