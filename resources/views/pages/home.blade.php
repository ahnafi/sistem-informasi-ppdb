@extends("layouts.default")
@section("title","Selamat datang")

@section("main")

    <!-- Hero -->
    <div class="relative overflow-hidden">
        <!-- Gradients -->
        <div aria-hidden="true" class="flex absolute -top-96 start-1/2 transform -translate-x-1/2">
            <div class="bg-linear-to-r from-violet-300/50 to-purple-100 blur-3xl w-100 h-175 rotate-[-60deg] transform -translate-x-40 dark:from-violet-900/50 dark:to-purple-900"></div>
            <div class="bg-linear-to-tl from-blue-50 via-blue-100 to-blue-50 blur-3xl w-[1440px] h-200 rounded-fulls origin-top-left -rotate-12 -translate-x-60 dark:from-indigo-900/70 dark:via-indigo-900/70 dark:to-blue-900/70"></div>
        </div>
        <!-- End Gradients -->

        <div class="relative z-10">
            <div class="max-w-[85rem] mx-auto px-4 sm:px-6 lg:px-8 py-10 lg:py-16">
                <div class="max-w-2xl text-center mx-auto">
                    <p class="inline-block text-sm font-medium bg-clip-text bg-linear-to-l from-blue-600 to-violet-500 text-transparent dark:from-blue-400 dark:to-violet-400">
                        Preline: A vision for 2023
                    </p>

                    <!-- Title -->
                    <div class="mt-5 max-w-2xl">
                        <h1 class="block font-semibold text-gray-800 text-4xl md:text-5xl lg:text-6xl dark:text-neutral-200">
                            The Intuitive Web Solutions
                        </h1>
                    </div>
                    <!-- End Title -->

                    <div class="mt-5 max-w-3xl">
                        <p class="text-lg text-gray-600 dark:text-neutral-400">Preline UI is an open-source set of prebuilt UI components, ready-to-use examples and Figma design system based on the utility-first Tailwind CSS framework.</p>
                    </div>

                    <!-- Buttons -->
                    <div class="mt-8 gap-3 flex justify-center">
                        <a class="py-3 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-hidden focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none" href="#">
                            Get started
                            <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m9 18 6-6-6-6"/></svg>
                        </a>
                        <a class="py-3 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent text-gray-800 hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-neutral-800 dark:focus:bg-neutral-800" href="#">
                            <svg class="shrink-0 size-4" width="19" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M6.875 18C8.531 18 9.875 16.656 9.875 15V12H6.875C5.219 12 3.875 13.344 3.875 15C3.875 16.656 5.219 18 6.875 18Z" fill="#0ACF83"></path>
                                <path d="M3.875 9C3.875 7.344 5.219 6 6.875 6H9.875V12H6.875C5.219 12 3.875 10.656 3.875 9Z" fill="#A259FF"></path>
                                <path d="M3.875 3C3.875 1.344 5.219 0 6.875 0H9.875V6H6.875C5.219 6 3.875 4.656 3.875 3Z" fill="#F24E1E"></path>
                                <path d="M9.87501 0H12.875C14.531 0 15.875 1.344 15.875 3C15.875 4.656 14.531 6 12.875 6H9.87501V0Z" fill="#FF7262"></path>
                                <path d="M15.875 9C15.875 10.656 14.531 12 12.875 12C11.219 12 9.87501 10.656 9.87501 9C9.87501 7.344 11.219 6 12.875 6C14.531 6 15.875 7.344 15.875 9Z" fill="#1ABCFE"></path>
                            </svg>
                            Preline Figma
                        </a>
                    </div>
                    <!-- End Buttons -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Hero -->

    <!-- Features -->
    <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
        <!-- Grid -->
        <div class="md:grid md:grid-cols-2 md:items-center md:gap-12 xl:gap-32">
            <div>
                <img class="rounded-xl" src="https://images.unsplash.com/photo-1648737963503-1a26da876aca?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=900&h=900&q=80" alt="Features Image">
            </div>
            <!-- End Col -->

            <div class="mt-5 sm:mt-10 lg:mt-0">
                <div class="space-y-6 sm:space-y-8">
                    <!-- Title -->
                    <div class="space-y-2 md:space-y-4">
                        <h2 class="font-bold text-3xl lg:text-4xl text-gray-800 dark:text-neutral-200">
                            We tackle the challenges start-ups face
                        </h2>
                        <p class="text-gray-500 dark:text-neutral-500">
                            Besides working with start-up enterprises as a partner for digitalization, we have built enterprise products for common pain points that we have encountered in various products and projects.
                        </p>
                    </div>
                    <!-- End Title -->

                    <!-- List -->
                    <ul class="space-y-2 sm:space-y-4">
                        <li class="flex gap-x-3">
            <span class="mt-0.5 size-5 flex justify-center items-center rounded-full bg-blue-50 text-blue-600 dark:bg-blue-800/30 dark:text-blue-500">
              <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
            </span>
                            <div class="grow">
              <span class="text-sm sm:text-base text-gray-500 dark:text-neutral-500">
                <span class="font-bold">Easy & fast</span> designing
              </span>
                            </div>
                        </li>

                        <li class="flex gap-x-3">
            <span class="mt-0.5 size-5 flex justify-center items-center rounded-full bg-blue-50 text-blue-600 dark:bg-blue-800/30 dark:text-blue-500">
              <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
            </span>
                            <div class="grow">
              <span class="text-sm sm:text-base text-gray-500 dark:text-neutral-500">
                Powerful <span class="font-bold">features</span>
              </span>
                            </div>
                        </li>

                        <li class="flex gap-x-3">
            <span class="mt-0.5 size-5 flex justify-center items-center rounded-full bg-blue-50 text-blue-600 dark:bg-blue-800/30 dark:text-blue-500">
              <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
            </span>
                            <div class="grow">
              <span class="text-sm sm:text-base text-gray-500 dark:text-neutral-500">
                User Experience Design
              </span>
                            </div>
                        </li>
                    </ul>
                    <!-- End List -->
                </div>
            </div>
            <!-- End Col -->
        </div>
        <!-- End Grid -->
    </div>
    <!-- End Features -->

    <!-- Features -->
    <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
        <!-- Grid -->
        <div class="grid gap-6 grid-cols-2 sm:gap-12 lg:grid-cols-3 lg:gap-8">
            <!-- Stats -->
            <div>
                <h4 class="text-lg sm:text-xl font-semibold text-gray-800 dark:text-neutral-200">Accuracy rate</h4>
                <p class="mt-2 sm:mt-3 text-4xl sm:text-6xl font-bold text-blue-600">99.95%</p>
                <p class="mt-1 text-gray-500 dark:text-neutral-500">in fulfilling orders</p>
            </div>
            <!-- End Stats -->

            <!-- Stats -->
            <div>
                <h4 class="text-lg sm:text-xl font-semibold text-gray-800 dark:text-neutral-200">Startup businesses</h4>
                <p class="mt-2 sm:mt-3 text-4xl sm:text-6xl font-bold text-blue-600">2,000+</p>
                <p class="mt-1 text-gray-500 dark:text-neutral-500">partner with Preline</p>
            </div>
            <!-- End Stats -->

            <!-- Stats -->
            <div>
                <h4 class="text-lg sm:text-xl font-semibold text-gray-800 dark:text-neutral-200">Happy customer</h4>
                <p class="mt-2 sm:mt-3 text-4xl sm:text-6xl font-bold text-blue-600">85%</p>
                <p class="mt-1 text-gray-500 dark:text-neutral-500">this year alone</p>
            </div>
            <!-- End Stats -->
        </div>
        <!-- End Grid -->
    </div>
    <!-- End Features -->

    <!-- Features -->
    <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
        <!-- Grid -->
        <div class="lg:grid lg:grid-cols-12 lg:gap-16 lg:items-center">
            <div class="order-1 lg:order-2 lg:col-span-7">
                <!-- Grid -->
                <div class="grid grid-cols-12 gap-2 sm:gap-6 items-center lg:-translate-x-10">
                    <div class="col-span-4">
                        <img class="rounded-xl" src="https://images.unsplash.com/photo-1606868306217-dbf5046868d2?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=920&q=80" alt="Features Image">
                    </div>
                    <!-- End Col -->

                    <div class="col-span-3">
                        <img class="rounded-xl" src="https://images.unsplash.com/photo-1605629921711-2f6b00c6bbf4?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=920&q=80" alt="Features Image">
                    </div>
                    <!-- End Col -->

                    <div class="col-span-5">
                        <img class="rounded-xl" src="https://images.unsplash.com/photo-1600194992440-50b26e0a0309?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=920&q=80" alt="Features Image">
                    </div>
                    <!-- End Col -->
                </div>
                <!-- End Grid -->
            </div>
            <!-- End Col -->

            <div class="order-2 lg:order-1 mt-5 sm:mt-10 lg:mt-0 lg:col-span-5">
                <div class="space-y-6 sm:space-y-8">
                    <!-- Title -->
                    <div class="space-y-2 md:space-y-4">
                        <h2 class="font-bold text-3xl lg:text-4xl text-gray-800 dark:text-neutral-200">
                            Collaborative tools to design user experience
                        </h2>
                        <p class="text-gray-500 dark:text-neutral-500">
                            Use our tools to explore your ideas and make your vision come true. Then share your work easily.
                        </p>
                    </div>
                    <!-- End Title -->

                    <!-- List -->
                    <ul class="space-y-2 sm:space-y-4">
                        <li class="flex gap-x-3">
            <span class="mt-0.5 size-5 flex justify-center items-center rounded-full bg-blue-50 text-blue-600 dark:bg-blue-800/30 dark:text-blue-500">
              <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
            </span>
                            <div class="grow">
              <span class="text-sm sm:text-base text-gray-500 dark:text-neutral-500">
                <span class="font-bold">Less routine</span> – more creativity
              </span>
                            </div>
                        </li>

                        <li class="flex gap-x-3">
            <span class="mt-0.5 size-5 flex justify-center items-center rounded-full bg-blue-50 text-blue-600 dark:bg-blue-800/30 dark:text-blue-500">
              <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
            </span>
                            <div class="grow">
              <span class="text-sm sm:text-base text-gray-500 dark:text-neutral-500">
                Hundreds of thousands saved
              </span>
                            </div>
                        </li>

                        <li class="flex gap-x-3">
            <span class="mt-0.5 size-5 flex justify-center items-center rounded-full bg-blue-50 text-blue-600 dark:bg-blue-800/30 dark:text-blue-500">
              <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
            </span>
                            <div class="grow">
              <span class="text-sm sm:text-base text-gray-500 dark:text-neutral-500">
                Scale budgets <span class="font-bold">efficiently</span>
              </span>
                            </div>
                        </li>
                    </ul>
                    <!-- End List -->
                </div>
            </div>
            <!-- End Col -->
        </div>
        <!-- End Grid -->
    </div>
    <!-- End Features -->


@endsection
