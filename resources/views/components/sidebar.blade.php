<button data-drawer-target="sidebar-multi-level-sidebar" data-drawer-toggle="sidebar-multi-level-sidebar"
    aria-controls="sidebar-multi-level-sidebar" type="button"
    class="inline-flex sm:items-center p-2 mt-2 text-sm text-gray-500 rounded-lg sm:hidden  focus:outline-none  dark:text-gray-400">
    <span class="sr-only">Open sidebar</span>
    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
        <path clip-rule="evenodd" fill-rule="evenodd"
            d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
        </path>
    </svg>
</button>

<aside id="sidebar-multi-level-sidebar"
    class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0"
    aria-label="Sidebar">
    <div class="h-full px-3 py-4 overflow-y-auto bg-gray-50 dark:bg-black">
        <ul class="space-y-2 font-medium">
            <li>
                <x-side-link href="{{ route('dashboardPage') }}" :active="request()->is('dashboard')"><i
                        class="fa-solid fa-chart-pie"></i> Dashboard
                </x-side-link>
            </li>
            <li>
                <x-side-link href="{{ route('memberPage') }}" :active="request()->is('member')"><i
                        class="fa-solid fa-user-group"></i> Member
                </x-side-link>
            </li>
            <li>
                <x-side-link href="{{ route('trainerPage') }}" :active="request()->is('trainer')"><i
                        class="fa-solid fa-user-doctor"></i> Trainer
                </x-side-link>
            </li>
            <li>
                <x-side-link href="{{ route('exercisePage') }}" :active="request()->is('exercise')"><i
                        class="fa-solid fa-dumbbell"></i> Exercise
                </x-side-link>
            </li>
            <li>
                <x-side-link href="{{ route('reportPage') }}" :active="request()->is('report')"><i
                        class="fa-regular fa-pen-to-square"></i> Report
                </x-side-link>
            </li>
            <li>
                <x-side-link href='#'> <i class="fa-regul ar fa-circle-left"></i> Sign out
                </x-side-link>
            </li>

        </ul>
    </div>
</aside>
