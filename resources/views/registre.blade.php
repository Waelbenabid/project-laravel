@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-1/3 bg-white p-6 rounded-lg">
            <h2 class="text-2xl mb-4">Inscription Étudiant</h2>
            <form action="{{ route('createEtudiant') }}" method="POST">
                @csrf

                <div class="mb-4">
                    <label for="gender" class="block font-medium text-gray-700">Genre</label>
                    <select name="gender" id="gender" class="form-select mt-1 block w-full" required>
                        <option value="male">Homme</option>
                        <option value="female">Femme</option>
                        <option value="other">Autre</option>
                    </select>
                </div>

                <div class="mb-4">
                    <label for="phone" class="block font-medium text-gray-700">Téléphone</label>
                    <input type="text" name="phone" id="phone" class="form-input mt-1 block w-full" required />
                </div>

                <div class="mb-4">
                    <label for="date_de_naissance" class="block font-medium text-gray-700">Date de naissance</label>
                    <input type="date" name="date_de_naissance" id="date_de_naissance"
                        class="form-input mt-1 block w-full" required />
                </div>

                <div class="mb-4">
                    <label for="Adresse_mail" class="block font-medium text-gray-700">Adresse e-mail</label>
                    <input type="email" name="Adresse_mail" id="Adresse_mail" class="form-input mt-1 block w-full"
                        required />
                </div>

                <div class="mb-4">
                    <label for="Adresse_maison" class="block font-medium text-gray-700">Adresse maison</label>
                    <input type="text" name="Adresse_maison" id="Adresse_maison" class="form-input mt-1 block w-full"
                        required />
                </div>

                <div>
                    <button type="submit"
                        class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">S'inscrire</button>
                </div>
            </form>
        </div>
    </div>
@endsection


{{--
@section('content_')
<main class="login-form">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <h3 class="card-header text-center">Login</h3>
                    <div class="card-body">
                        <form method="POST" action="{{ route('login.custom') }}">
                            @csrf
                            <div class="form-group mb-3">
                                <input type="text" placeholder="Email" id="email" class="form-control" name="email" required
                                    autofocus>
                                @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                            </div>

                            <div class="form-group mb-3">
                                <input type="password" placeholder="Password" id="password" class="form-control" name="password" required>
                                @if ($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                                @endif
                            </div>

                            <div class="form-group mb-3">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember"> Remember Me
                                    </label>
                                </div>
                            </div>

                            <div class="d-grid mx-auto">
                                <button type="submit" class="btn btn-dark btn-block">Signin</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection --}}
