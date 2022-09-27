@extends('layouts.main')

@section('content')
    <section class="h-screen">
        <div class="container mx-auto px-6 py-12 h-full">
            @if (session()->has('success'))
                <div>
                    <div class="inline-flex bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded">
                        <strong class="font-bold pr-1">Success </strong>
                        <span class="block sm:inline px-2">{{ session('success') }}</span>

                        <button type="button" onclick="closeAlert(event)">
                            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            @endif

            @if (session()->has('loginError'))
                <div>
                    <div class="inline-flex bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded">
                        <strong class="font-bold pr-1">Error </strong>
                        <span class="block sm:inline px-2">{{ session('loginError') }}</span>

                        <button type="button" onclick="closeAlert(event)">
                            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            @endif

            <div class="relative flex justify-center items-center flex-wrap h-full g-6 text-gray-800">
                <div class="md:w-8/12 lg:w-6/12 mb-12 md:mb-0">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.svg"
                        class="w-full" alt="Phone image" />
                </div>
                <div class="md:w-8/12 lg:w-5/12 lg:ml-20">
                    <h1 class="mb-6 flex justify-center text-2xl font-bold">Login</h1>
                    <form action="/login" method="POST">

                        @csrf
                        <!-- Email input -->
                        <div class="mb-6">
                            <input value="{{ old('email') }}" required autofocus name="email" type="text"
                                class="@error('email') border-red-400 @enderror form-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                placeholder="Email" />
                            @error('email')
                                <small class="text-red-400">{{ $message }}</small>
                            @enderror
                        </div>

                        <!-- Password input -->
                        <div class="mb-6">
                            <input required name="password" type="password"
                                class="@error('password') border-red-400 @enderror form-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                placeholder="Password" />
                            @error('password')
                                <small class="text-red-400">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="mb-6 flex justify-center">
                            <small>Dont have account? <a href="/register" class="text-blue-300 underline">Register
                                    here</a></small>
                        </div>

                        <!-- Submit button -->
                        <button type="submit"
                            class="inline-block px-7 py-3 bg-blue-600 text-white font-medium text-sm leading-snug uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out w-full"
                            data-mdb-ripple="true" data-mdb-ripple-color="light">
                            Sign in
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <script>
        function closeAlert(event) {
            let element = event.target;
            while (element.nodeName !== "BUTTON") {
                element = element.parentNode;
            }
            element.parentNode.parentNode.removeChild(element.parentNode);
        }
    </script>
@endsection
