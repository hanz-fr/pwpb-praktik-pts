@extends('layouts.main')

@section('content')
    <section class="h-screen">
        <div class="container mx-auto px-6 py-12 h-full">
            <div class="flex justify-center items-center flex-wrap h-full g-6 text-gray-800">
                <div class="md:w-8/12 lg:w-6/12 mb-12 md:mb-0">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.svg" class="w-full"
                        alt="Phone image" />
                </div>
                <div class="md:w-8/12 lg:w-5/12 lg:ml-20">
                    <h1 class="mb-6 flex justify-center text-2xl font-bold">Register</h1>
                    <form action="/register" method="POST">

                        @csrf
                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />

                        <!-- input nama -->
                        <div class="mb-6">
                            <input value="{{ old('name') }}" required type="text" name="name"
                                class="@error('name') border-red-400 @enderror form-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                placeholder="Name" />
                            @error('name')
                                <small class="text-red-400">{{ $message }}</small>
                            @enderror
                        </div>

                        <!-- input username -->
                        <div class="mb-6">
                            <input value="{{ old('username') }}" required type="text" name="username"
                                class="@error('username') border-red-400 @enderror form-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                placeholder="Username" />
                            @error('username')
                                <small class="text-red-400">{{ $message }}</small>
                            @enderror
                        </div>

                        <!-- input email -->
                        <div class="mb-6">
                            <input value="{{ old('email') }}" required name="email" type="text"
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
                            <small>Already have an account? <a href="/login" class="text-blue-300 underline">Sign
                                    in</a></small>
                        </div>

                        <!-- Submit button -->
                        <button type="submit"
                            class="inline-block px-7 py-3 bg-blue-600 text-white font-medium text-sm leading-snug uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out w-full"
                            data-mdb-ripple="true" data-mdb-ripple-color="light"> Register
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
