<x-layout>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                <form class="p-5 border rounded" action="{{ route('register') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Nome</label>
                        <input type="text" value="{{ old('name') }}" name="name" class="form-control" id="name">
                        @error('name')
                        <span class="small text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" value="{{ old('email') }}" name="email" class="form-control" id="email">
                        @error('email')
                        <span class="small text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <div class="input-group mb-3">
                            <input type="password" name="password" class="form-control pass-view" id="password">
                            <span class="input-group-text" id="basic-addon2"><i class="bi bi-eye icon"></i></span>
                        </div>
                        @error('password')
                        <span class="small text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label">Conferma Password</label>
                        <div class="input-group mb-3">
                            <input type="password" name="password_confirmation" class="form-control pass-view" id="password_confirmation">
                            <span class="input-group-text" id="basic-addon2"><i class="bi bi-eye icon"></i></span>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-dark">Registrati</button>
                    <a href="{{ route('login') }}" class="btn btn-outline-dark">Già registrato? Accedi</a>
                </form>
            </div>
        </div>
    </div>
</x-layout>