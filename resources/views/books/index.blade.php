<x-layout>
    <div class="container my-5">
        <div class="row">
            @foreach ($books as $book)
            <div class="col-12 col-md-4 mb-4">
                <div class="card">
                    <img src="{{ asset(str_replace('public/', 'storage/', $book->image)) }}" class="card-img-top" alt="{{ $book->title }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $book->title }}</h5>
                        <p class="card-text"><small class="text-muted">Autore: {{ $book->author->firstname }} {{ $book->author->lastname }}</small></p>
                        <a href="{{ route('books.show', $book->id) }}" class="btn btn-primary">Mostra</a>
                        <a href="{{ route('books.edit', $book->id) }}" class="btn btn-warning">Modifica</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</x-layout>
