<ul class="flex flex-col md:flex-row px-4 text-white">
                <li>
                    <form action="/logout" method="POST">
                    @csrf
                    <button class="block py pr-4 pl-3 ">Log out</button>
                    </form>
                   
                </li>
 </ul>