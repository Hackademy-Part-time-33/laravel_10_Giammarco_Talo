<x-layout>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                <div class="card">
                    <img src="{{ asset('storage/' . $book->image) }}" class="card-img-top" alt="{{ $book->title }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $book->title }}</h5>
                        <p class="card-text">
                            <small class="text-muted">
                                Autore: {{ $book->author->firstname }} {{ $book->author->lastname }}
                            </small>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
