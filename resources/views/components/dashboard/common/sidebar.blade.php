<div :class="{ 'dark text-white-dark': $store.app.semidark }">
    <nav x-data="sidebar"
        class="sidebar fixed min-h-screen h-full top-0 bottom-0 w-[260px] shadow-[5px_0_25px_0_rgba(94,92,154,0.1)] z-50 transition-all duration-300">
        <div class="bg-white dark:bg-[#0e1726] h-full">
            <!-- Logo and Collapse Button -->
            <div class="flex justify-between items-center px-4 py-3 border-b border-gray-200 dark:border-gray-700">
                <a href="/" class="main-logo flex items-center shrink-0">
                    <img class="w-16 ml-[5px] flex-none" src="/assets/images/logo.png" alt="Logo" />
                    <span
                        class="text-2xl ltr:ml-1.5 rtl:mr-1.5 font-semibold align-middle lg:inline dark:text-white-light">Tamm</span>
                </a>
                <a href="javascript:;"
                    class="collapse-icon w-8 h-8 rounded-full flex items-center justify-center hover:bg-gray-500/10 dark:hover:bg-gray-700 transition duration-300 rtl:rotate-180"
                    @click="$store.app.toggleSidebar()">
                    <svg class="w-5 h-5" width="20" height="20" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M13 19L7 12L13 5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path opacity="0.5" d="M16.9998 19L10.9998 12L16.9998 5" stroke="currentColor"
                            stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </a>
            </div>

            <!-- Navigation Menu -->
            <ul class="sub-menu text-gray-500 text-[16px] mt-10">
                <li>
                    <a href="{{ route('dashboard.settings.index') }}"
                       class="flex items-center p-3  hover:bg-gray-100 dark:hover:bg-gray-700 transition duration-300
                       {{ request()->routeIs('dashboard.settings.index') ? 'bg-gray-200 dark:bg-gray-800 text-gray-900 dark:text-white' : '' }}">
                        Settings
                    </a>
                </li>
                <li>
                    <a href="{{ route('dashboard.sliders.index') }}"
                       class="flex items-center p-3  hover:bg-gray-100 dark:hover:bg-gray-700 transition duration-300
                       {{ request()->routeIs('dashboard.sliders.index') ? 'bg-gray-200 dark:bg-gray-800 text-gray-900 dark:text-white' : '' }}">
                        Sliders
                    </a>
                </li>
                <li>
                    <a href="{{ route('dashboard.services.index') }}"
                       class="flex items-center p-3  hover:bg-gray-100 dark:hover:bg-gray-700 transition duration-300
                       {{ request()->routeIs('dashboard.services.index') ? 'bg-gray-200 dark:bg-gray-800 text-gray-900 dark:text-white' : '' }}">
                        Services
                    </a>
                </li>
                <li>
                    <a href="{{ route('dashboard.goals.index') }}"
                       class="flex items-center p-3  hover:bg-gray-100 dark:hover:bg-gray-700 transition duration-300
                       {{ request()->routeIs('dashboard.goals.index') ? 'bg-gray-200 dark:bg-gray-800 text-gray-900 dark:text-white' : '' }}">
                        Goals
                    </a>
                </li>
                <li>
                    <a href="{{ route('dashboard.articles.index') }}"
                       class="flex items-center p-3  hover:bg-gray-100 dark:hover:bg-gray-700 transition duration-300
                       {{ request()->routeIs('dashboard.articles.index') ? 'bg-gray-200 dark:bg-gray-800 text-gray-900 dark:text-white' : '' }}">
                        Articles
                    </a>
                </li>
                <li>
                    <a href="{{ route('dashboard.faqs.index') }}"
                       class="flex items-center p-3  hover:bg-gray-100 dark:hover:bg-gray-700 transition duration-300
                       {{ request()->routeIs('dashboard.faqs.index') ? 'bg-gray-200 dark:bg-gray-800 text-gray-900 dark:text-white' : '' }}">
                        FAQ
                    </a>
                </li>
                <li>
                    <a href="{{ route('dashboard.clients.index') }}"
                       class="flex items-center p-3  hover:bg-gray-100 dark:hover:bg-gray-700 transition duration-300
                       {{ request()->routeIs('dashboard.clients.index') ? 'bg-gray-200 dark:bg-gray-800 text-gray-900 dark:text-white' : '' }}">
                        Clients
                    </a>
                </li>
                <li>
                    <a href="{{ route('dashboard.contacts.index') }}"
                       class="flex items-center p-3  hover:bg-gray-100 dark:hover:bg-gray-700 transition duration-300
                       {{ request()->routeIs('dashboard.contacts.index') ? 'bg-gray-200 dark:bg-gray-800 text-gray-900 dark:text-white' : '' }}">
                        Contact
                    </a>
                </li>
            </ul>
        </div>
    </nav>
</div>
