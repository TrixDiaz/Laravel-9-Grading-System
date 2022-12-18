@include('partials.header')
    <header class="max-w-lg mx-auto ">
    
    <main class="bg-white max-w-lg mx-auto p-8 my-10 rounded-lg shadow-2xl">

    <section>
        <h1 class="font-bold text-4xl text-center uppercase text-blue-400 m-2">GRADING SYSTEM</h1>
        
        <h3 class="font-bold text-3xl text-center uppercase text-blue-400">Register Page</h3>
        <p class="text-center text-gray-400 mt-3">Create your account</p>
    </section>

    <section class="mt-10">
    
    <form action="/store" method ="POST" enctype="multipart/form-data" class="flex flex-col ">
        @csrf
        <input type="text" name="firstname" class="mt-5 bg-gray-200 rounded w-full text-gray-700 p-4 outline-offset-2 outline-blue-500" placeholder="First Name" required>
        <input type="text" name="lastname" class="mt-5 bg-gray-200 rounded w-full text-gray-700 p-4 outline-offset-2 outline-blue-500" placeholder="Last Name" required>

        <input type="email" name="email" class="mt-5 bg-gray-200 rounded w-full text-gray-700 p-4 outline-offset-2 outline-blue-500" placeholder="Email" required>

        <input type="password" name="password" class="bg-gray-200 rounded w-full text-gray-700 p-4 mt-4 outline-offset-2 outline-blue-500" placeholder="Password" required>
        <input type="password" name="password_confirmation" class="bg-gray-200 rounded w-full text-gray-700 p-4 mt-4 outline-offset-2 outline-blue-500" placeholder="Confirm Password" required>
        
        <a href="/login">
        <p class="text-center text-gray-400 mt-3 hover:text-blue-500 mt-5">Already have an account? sign in</p>
        </a>

        <button class="mt-10 mb-10 p-5 rounded bg-blue-600 text-white  shadow-lg hover:shadow-lg hover:bg-blue-500 transition duration-200" type="submit">Sign up</button>
    </form>
    </section>

    </main>

    </header>
@include('partials.footer') 