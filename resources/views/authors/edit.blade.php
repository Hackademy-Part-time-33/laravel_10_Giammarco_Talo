<x-layout>
    <div class="container my-5">
        <h1>Modifica Autore</h1>
        <form action="{{ route('authors.update', $author->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="firstname" class="form-label">Nome</label>
                <input type="text" name="firstname" class="form-control" id="firstname" value="{{ $author->firstname }}">
                @error('firstname')
                <span class="small text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="lastname" class="form-label">Cognome</label>
                <input type="text" name="lastname" class="form-control" id="lastname" value="{{ $author->lastname }}">
                @error('lastname')
                <span class="small text-danger">{{ $message }}</span>
                @enderror
            </div>

            <button type="submit" class="btn btn-dark">Salva Modifiche</button>
        </form>
    </div>
</x-layout>