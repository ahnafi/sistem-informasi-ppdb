<div class="px-2 lg:px-8">
    <div>

        <div>
            <div class="flex items-center justify-start gap-1">
                <img src="{{asset("/images/logo.png")}}" alt="icon photo" class="w-12 h-12 rounded-lg">
                <h3 class="text-4xl font-semibold">Hogwards Legacy</h3>
            </div>
            <p class="text-sm pe-20">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium aperiam at aut culpa, dolores ex
            </p>
            <a href="{{route("registration")}}"
               class="my-4 py-2 px-8 inline-flex items-center gap-x-2 text-sm font-medium rounded-xl border border-transparent bg-slate-100 text-black hover:bg-slate-400 focus:outline-hidden focus:bg-slate-500 disabled:opacity-50 disabled:pointer-events-none">
                Daftar
            </a>
        </div>

        <nav>
            <ul>
                <li>blablabla</li>
                <li>blublu</li>
                <li>blublu</li>
            </ul>
        </nav>

    </div>

    <hr>

    <div class="flex justify-between">
        <span class="text-sm lg:text-lg">
            &copy; {{now()->format("Y")}} {{env("APP_NAME")}}. All Rights Reserved.
        </span>
        <div>
            <a href="">i</a>
            <a href="">i</a>
            <a href="">i</a>
        </div>
    </div>

</div>
