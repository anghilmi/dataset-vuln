<div class=" absolute top-0 w-full flex justify-center">
    <div class="max-w-screen-xl w-full  x-2">
        <div class="h-screen-10vh px-2  bg-red-100 w-full flex items-center justify-between">
            <img style="width:100px ; height:60px" src="../assets/img/logo.png" alt="sadari">

            <div class="hidden lg:flex">

                <ul class="flex text-blue-700">
                    <li class="mx-4 text-center text-2xl">
                        <a>INFORMASI</a>
                    </li>
                    <li class="mx-4 text-center text-2xl">
                        <a>FASKES TERDAFTAR</a>
                    </li>

                </ul>

            </div>

            <div>
                <div class="lg:hidden" onclick="handleClick()">
                    click me
                </div>
                <li class="hidden lg:flex my-4 text-center text-2xl mr-4">
                    <a href="login">
                        <button class=" bg-blue-600 font-bold py-2 px-4 rounded-xl text-white">Sign In</button>
                    </a>
                </li>
            </div>
        </div>
        <div id="menu" style="display: none;" class=" h-screen-90vh bg-green-300 flex flex-col items-center justify-center">
            <ul>
                <li class="my-4 text-center text-2xl">
                    <a>Informasi</a>
                </li>
                <li class="my-4 text-center text-2xl">
                    <a>Faskes Terdaftar</a>
                </li>
                <li class="my-4 text-center text-2xl">
                    <button class=" bg-blue-600 font-bold py-2 px-4 rounded-xl text-white">Sign In</button>
                </li>
            </ul>
        </div>
    </div>


    <script>
        const handleClick = () => {
            const menu = document.getElementById('menu');
            if (menu.style.display === 'none') {
                menu.style.display = 'flex';
            } else {
                menu.style.display = 'none';
            }

        }
    </script>
</div>