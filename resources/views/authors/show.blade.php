<x-layout>
    <div class="container my-5">
        <h1>Dettagli Autore</h1>
        <div class="card mt-3">
            <div class="card-body">
                <h5 class="card-title">{{ $author->firstname }} {{ $author->lastname }}</h5>
                <p class="card-text">ID: {{ $author->id }}</p>
            </div>
        </div>
    </div>
</x-layout>
