<x-layout>
    
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                <form class="p-5 border rounded" action="{{ route('books.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    
                    <div class="mb-3">
                        <label for="title" class="form-label">Titolo</label>
                        <input type="text" name="title" class="form-control" id="title" value="{{ old('title') }}">
                        @error('title')
                        <span class="small text-danger d-block mt-1">{{ $message }}</span>
                        @enderror
                    </div>
                    
                    <div class="mb-3">
                        <label for="author_id" class="form-label">Autore</label>
                        <select name="author_id" class="form-control" id="author_id">
                            <option value="">Seleziona un autore esistente</option>
                            @foreach ($authors as $author)
                            <option value="{{ $author->id }}">{{ $author->firstname }} {{ $author->lastname }}</option>
                            @endforeach
                        </select>
                        @error('author_id')
                        <span class="small text-danger">{{ $message }}</span>
                        @enderror
                        <small><a href="{{ route('authors.create') }}" target="_blank">Crea un nuovo autore</a></small>
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">Immagine</label>
                        <input type="file" name="image" class="form-control" id="image">
                        @error('image')
                        <span class="small text-danger d-block mt-1">{{ $message }}</span>
                        @enderror
                    </div>
                    
                    <button type="submit" class="btn btn-dark">Salva</button>
                </form>
            </div>
        </div>
    </div>
    
</x-layout>
