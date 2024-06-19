<x-layout>
    
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                <form class="p-5 border rounded" action="{{ route('books.update', $book->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    
                    <div class="mb-3">
                        <label for="title" class="form-label">Titolo</label>
                        <input type="text" value="{{ old('title', $book->title) }}" name="title" class="form-control" id="title">
                        @error('title')
                        <span class="small text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    
                    <div class="mb-3">
                        <label for="author" class="form-label">Autore</label>
                        <input type="text" value="{{ old('author', $book->author) }}" name="author" class="form-control" id="author">
                        @error('author')
                        <span class="small text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    
                    <div class="mb-3">
                        <label for="description" class="form-label">Descrizione</label>
                        <textarea name="description" class="form-control" id="description">{{ old('description', $book->description) }}</textarea>
                        @error('description')
                        <span class="small text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    
                    <div class="mb-3">
                        <label for="image" class="form-label">Immagine</label>
                        <input type="file" name="image" class="form-control" id="image">
                        @error('image')
                        <span class="small text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    
                    <button type="submit" class="btn btn-dark">Salva Modifiche</button>
                </form>
            </div>
        </div>
    </div>
    
</x-layout>
