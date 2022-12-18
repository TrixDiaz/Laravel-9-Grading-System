@include('partials.header')
    <header class="max-w-lg mx-auto ">
          
    <main class="bg-white max-w-lg mx-auto p-8 my-10 rounded-lg shadow-2xl">

    <section>
        <h1 class="font-bold text-4xl text-center uppercase text-blue-400 m-2">GRADING SYSTEM</h1>
        
        <h3 class="font-bold text-3xl text-center uppercase text-blue-400">Log in Page</h3>
        <p class="text-center text-gray-400 mt-3">Sign in your account</p>
    </section>

    <section class="mt-10">
    <form action="/login/process" method="POST" class="flex flex-col ">
        @csrf
        
        <input type="email" name="email" class="mt-5 bg-gray-200 rounded w-full text-gray-700 p-4 outline-offset-2 outline-blue-500" placeholder="Email" required>

        <input type="password" name="password" class="bg-gray-200 rounded w-full text-gray-700 p-4 mt-4 outline-offset-2 outline-blue-500" data-toggle="popover" title="Minimum of 4 Characters" placeholder="Password" required>
        
        <a href="/register">
        <p class="text-center text-gray-400 mt-3 hover:text-blue-500 mt-5">Create new account</p>
        </a>
        
        <button class="mt-10 mb-10 p-5 rounded bg-blue-600 text-white  shadow-lg hover:shadow-lg hover:bg-blue-500 transition duration-200" type="submit">Log In</button>
    </form>
    </section>

    </main>

    </header>
@include('partials.footer') 