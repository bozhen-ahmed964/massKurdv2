<x-layout>


    <form action="{{ route('insertTrainerAction') }}" method="POST">
        @csrf
        <div class="flex justify-center items-center px-5">
            <div class="grid sm:grid-cols-2 xl:grid-cols-4 gap-4 grid-flow-row w-full">
                <div class="p-5">
                    <div class="group relative z-0 mb-5 w-full">
                        <x-input type="text" name="full_name" id="full_name" label="Full Name" />
                        @error('full_name')
                        <x-message>{{ $message }}</x-message>
                        @enderror

                    </div>
                </div>
                <div class="p-5">
                    <div class="group relative z-0 mb-5 w-full">
                        <x-input type="text" name="age" id="age" label="Age" />
                        @error('age')
                        <x-message>{{ $message }}</x-message>
                        @enderror
                    </div>
                </div>
                <div class="p-5">
                    <div class="group relative z-0 mb-5 w-full">
                        <x-input type="text" name="phone_number" id="phone_number" label="Phone Number" />
                        @error('phone_number')
                        <x-message>{{ $message }}</x-message>
                        @enderror
                    </div>
                </div>

                <div class="p-5">
                    <x-select id="gender" name="gender">
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </x-select>
                    @error('gender')
                    <x-message>{{ $message }}</x-message>
                    @enderror
                </div>

                <div class="p-5">
                    <div class="group relative z-0 mb-5 w-full">
                        <x-input type="text" name="salery" id="salery" label="salery" />
                        @error('salery')
                        <x-message>{{ $message }}</x-message>
                        @enderror

                    </div>
                </div>



            </div>
        </div>
        <x-button class="ml-10" typbe="submit">Add Trainer</x-button>
    </form>

    <div class="grid xl:grid-cols-4 md:grid-cols-2 sm:grid-cols-1 gap-5 ">
        @foreach ($trainers as $key=>$trainer)

        <div
        class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 mt-5">
        <div class="flex justify-end px-4 pt-4">
            <button id="dropdownButton-{{ $key }}" data-dropdown-toggle="dropdown-{{ $key }}"
            class="inline-block text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:ring-4 focus:outline-none focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-1.5"
            type="button">
            <span class="sr-only">Open dropdown</span>
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
            viewBox="0 0 16 3">
            <path
            d="M2 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm6.041 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM14 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Z" />
        </svg>
    </button>
    <!-- Dropdown menu -->
    <div id="dropdown-{{ $key }}"
    class="z-10 hidden text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
    <ul class="py-2" aria-labelledby="dropdownButton-{{ $key }}">
        <li>
            <a href="#"
            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Edit</a>
        </li>
    </li>
    <li>
        <a href="#"
        class="block px-4 py-2 text-sm text-red-600 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Delete</a>
    </li>
</ul>
</div>
</div>
<div class="flex flex-col items-center pb-10">
    <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">{{ $trainer->full_name }}</h5>
    <span class="text-sm text-gray-500 dark:text-gray-400">{{ $trainer->phone_number }}</span>
    <div class="flex justify-between gap-5"><span class="text-sm text-gray-500 dark:text-gray-400">{{ $trainer->gender }}</span>
        <span class="text-sm text-gray-500 dark:text-gray-400">{{ $trainer->salery }}</span>
    </div>

    <div class="flex mt-4 md:mt-6">
        <x-button disabled>Total Member ({{ $trainer->members->count() }})</x-button>
    </div>
</div>
</div>
@endforeach
</div>





</x-layout>
