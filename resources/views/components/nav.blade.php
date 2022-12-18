
<nav x-data="{open:false}" class="fixed z-20 top-0 left-0 w-full bg-sky-900 border-b shadow-2xl border-gray-200 px-2 sm:px-4 py-2.5 ">
    <div class="container flex flex-wrap justify-between items-center mx-auto p-5">
        <a href="/">
            <span class="self-center text-xl font-semibold whitespace-nowrap text-white">
                GRADING SYSTEM
            </span>
        </a>
        <button @click="open=!open" data-collapse-toggle="navbar-main" class="md:hidden">   
        <svg xmlns="http://www.w3.org/2000/svg" height="48" width="48" fill="white"><path d="M6 36v-3h36v3Zm0-10.5v-3h36v3ZM6 15v-3h36v3Z"/></svg>
        </button>

        <div x-show="open" class=" w-full md:block md:w-auto text-center" id="nav-bar-main">
          <x-items/>
        </div>

        <div class="hidden w-full md:block md:w-auto" id="nav-bar-main">

         <x-items/>

        </div>
        
    </div>
</nav>