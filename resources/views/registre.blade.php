@extends('components.registre')

@section('registre')
    <div class="grid min-h-screen place-items-center">
        <div class="w-11/12 p-12 bg-white sm:w-8/12 md:w-1/2 lg:w-5/12">
            <h1 class="text-xl font-semibold">Hello there 👋, <span class="font-normal">please fill in your information to
                    continue</span></h1>
            <form class="mt-6" action="/CreateNewUser" method="POST">
                @csrf
                @method('POST')



                <div class="flex justify-between gap-3">
                    <span class="w-1/2">
                        <label for="name" class="block text-xs font-semibold text-gray-600 uppercase">name</label>
                        <input type="text" name="name" placeholder="First Name" autocomplete="given-name"
                            class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner"
                            required />
                    </span>
                </div>
                <label for="email" class="block mt-2 text-xs font-semibold text-gray-600 uppercase">E-mail</label>
                <input  type="email" name="email" placeholder="exemple@xyz.com" autocomplete="email"
                    class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner"
                    required />
                <label for="password" class="block mt-2 text-xs font-semibold text-gray-600 uppercase">Password</label>
                <input type="password" name="password" placeholder="********" autocomplete="new-password"
                    class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner"
                    required />
                <label for="password-confirm" class="block mt-2 text-xs font-semibold text-gray-600 uppercase">Confirm
                    password</label>
                <input type="password" name="password-confirm" placeholder="********"
                    autocomplete="new-password"
                    class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner"
                    required />
                <button type="submit"
                    class="w-full py-3 mt-6 font-medium tracking-widest text-white uppercase bg-black shadow-lg focus:outline-none hover:bg-gray-900 hover:shadow-none">
                    Sign up
                </button>
                <a href="{{'login'}}" class="justify-between inline-block mt-4 text-xs text-gray-500 cursor-pointer hover:text-black">
                    Already registered?</a>







                    
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