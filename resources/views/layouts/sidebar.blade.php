<!-- ========== MAIN CONTENT ========== -->
<!-- Sidebar Toggle -->
<div
    class="sticky inset-x-0 top-0 z-20 px-4 bg-white border-y sm:px-6 md:px-8 lg:hidden dark:bg-neutral-800 dark:border-neutral-700">
    <div class="flex items-center py-4">
        <!-- Navigation Toggle -->
        <button type="button" class="text-gray-500 hover:text-gray-600" data-hs-overlay="#application-sidebar-brand"
            aria-controls="application-sidebar-brand" aria-label="Toggle navigation">
            <span class="sr-only">Toggle Navigation</span>
            <svg class="size-5" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                    d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
            </svg>
        </button>
        <!-- End Navigation Toggle -->

        <!-- Breadcrumb -->
        <ol class="flex items-center ms-3 whitespace-nowrap">
            <li class="flex items-center text-sm text-gray-800 dark:text-neutral-400">
                Application Layout
                <svg class="flex-shrink-0 mx-3 overflow-visible size-2.5 text-gray-400 dark:text-neutral-600" width="16"
                    height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5 1L10.6869 7.16086C10.8637 7.35239 10.8637 7.64761 10.6869 7.83914L5 14"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                </svg>
            </li>
            <li class="text-sm font-semibold text-gray-800 truncate dark:text-neutral-400" aria-current="page">
                Dashboard
            </li>
        </ol>
        <!-- End Breadcrumb -->
    </div>
</div>
<!-- End Sidebar Toggle -->

<!-- Sidebar -->
<div id="application-sidebar-brand"
    class="hs-overlay [--auto-close:lg] hs-overlay-open:translate-x-0 -translate-x-full transition-all duration-300 transform hidden fixed top-0 start-0 bottom-0 z-[60] w-64 bg-blue-700 pt-7 pb-10 overflow-y-auto lg:block lg:translate-x-0 lg:end-auto lg:bottom-0 [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-gray-300 dark:[&::-webkit-scrollbar-track]:bg-neutral-700 dark:[&::-webkit-scrollbar-thumb]:bg-neutral-500">
    <div class="px-6">
        <a class="flex-none text-xl font-semibold text-white" href="#" aria-label="Brand">Brand</a>
    </div>

    <nav class="flex flex-col flex-wrap w-full p-6 hs-accordion-group" data-hs-accordion-always-open>
        <ul class="space-y-1.5">
            <li>
                <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                    <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path d="m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z" />
                        <polyline points="9 22 9 12 15 12 15 22" />
                    </svg>
                    Dashboard
                </x-nav-link>


            </li>

            <li>
                <x-nav-link :href="route('users.index')" :active="request()->routeIs(['users.index'], 'users.show', 'users.create')">
                    <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" />
                        <circle cx="9" cy="7" r="4" />
                        <path d="M22 21v-2a4 4 0 0 0-3-3.87" />
                        <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                    </svg>
                    User

                </x-nav-link>
                <!-- <a class="w-full flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-white hover:text-white rounded-lg hover:bg-blue-600-300"
                    href="#">
                </a> -->

            </li>



            <!-- Authentication -->
            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <x-nav-link :href="route('logout')" onclick="event.preventDefault();
                                                this.closest('form').submit();">
                    <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z" />
                        <path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z" />
                    </svg>
                    {{ __('Log Out') }}
                </x-nav-link>
            </form>
            </li>
        </ul>
    </nav>
</div>
<!-- End Sidebar -->

<!-- Content -->
<div class="w-full px-4 pt-10 sm:px-6 md:px-8 lg:ps-72">
    <!-- your content goes here ... -->
</div>
<!-- End Content -->
<!-- ========== END MAIN CONTENT ========== -->
