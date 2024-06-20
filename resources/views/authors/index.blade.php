<x-layout>
    <div class="container my-5">
        <h1>Elenco Autori</h1>
        <div class="row">
            <div class="col">
                <ul class="list-group">
                    @foreach ($authors as $author)
                    <li class="list-group-item">
                        {{ $author->firstname }} {{ $author->lastname }}
                        <a href="{{ route('authors.show', $author) }}" class="btn btn-sm btn-primary float-end mx-2">Visualizza</a>
                        <a href="{{ route('authors.edit', $author) }}" class="btn btn-sm btn-warning float-end">Modifica</a>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col">
                {{ $authors->links() }}
            </div>
        </div>
    </div>
</x-layout>
