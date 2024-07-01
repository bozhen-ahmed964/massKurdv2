<x-layout>

    <form action="{{ route('insertMemberAction') }}" method="POST">
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
                        <option value="">Select Gender</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </x-select>
                    @error('gender')
                    <x-message>{{ $message }}</x-message>
                    @enderror
                </div>

                <div class="p-5 ">
                    <x-select id="exercise_type" name="exercise_type">
                        <option value="">Select Subscription Type</option>
                        <option value="cardio">Cardio</option>
                        <option value="bodybuilding">Bodybuilding</option>
                        <option value="fitness">fitness</option>
                    </x-select>
                    @error('exercise_type')
                    <x-message>{{ $message }}</x-message>
                    @enderror
                </div>


                <div class="p-5 ">
                    <div class="group relative z-0 mb-5 w-full">
                        <x-input type="text" name="weight" id="weight" label="Weight ( Kg )" />
                        @error('weight')
                        <x-message>{{ $message }}</x-message>
                        @enderror
                    </div>
                </div>


                <div class="p-5 ">
                    <div class="group relative z-0 mb-5 w-full">
                        <x-input type="text" name="height" id="height" label="Height ( Cm )" />
                        @error('height')
                        <x-message>{{ $message }}</x-message>
                        @enderror
                    </div>

                </div>


                <div class="flex items-center">
                    <div class="relative">
                        <input type="date" name="start_date"
                            class="p-2.5 bg-transparent text-white border rounded-lg border-gray-500">
                        @error('start_date')
                        <x-message>{{ $message }}</x-message>
                        @enderror
                    </div>

                    <span class="mx-4 text-gray-500">to</span>

                    <div class="relative">
                        <input type="date" name="expire_date"
                            class="p-2.5 bg-transparent text-white border rounded-lg border-gray-500">
                        @error('expire_date')
                        <x-message>{{ $message }}</x-message>
                        @enderror
                    </div>
                </div>

                <div class="p-5 ">
                    <x-select id="trainer_id" name="trainer_id">
                        <option value="">Select Trainer</option>
                        @foreach ($trainers as $trainer)
                        <option value="{{ $trainer->id }}">{{ $trainer->full_name }}</option>
                        @endforeach
                    </x-select>
                    @error('trainer_id')
                    <x-message>{{ $message }}</x-message>
                    @enderror
                </div>



                <div>
                    <x-button typbe="submit">Add Member</x-button>
                </div>
            </div>
        </div>
    </form>




    <div class="relative overflow-x-auto shadow-md  mt-10">
        <table class="w-full text-sm text-left rtl:text-right text-white">
            <thead class="text-xs text-white text-center bg-blue-800 ">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Member Name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Gender
                    </th>
                    <th scope="col" class="px-6 py-3">
                        <div class="flex items-center"> Age </div>
                    </th>
                    <th scope="col" class="px-6 py-3">
                        <div class="flex items-center"> ExpireDate
                        </div>
                    </th>
                    <th scope="col" class="px-6 py-3">
                        <div class="flex items-center"> PhoneNumber
                    </th>
                    <th scope="col" class="px-6 py-3">
                        <div class="flex items-center"> Weight (Kg)
                    </th>
                    <th scope="col" class="px-6 py-3">
                        <div class="flex items-center">
                            Trainer
                    </th>
                    <th scope="col" class="px-6 py-3">
                        <div class="flex items-center">
                            Exercise Type
                    </th>
                    <th scope="col" class="px-6 py-3">
                        <div class="flex items-center">
                            Status
                    </th>
                    <th scope="col" class="px-6 py-3">
                        <div class="flex items-center">
                            Action
                    </th>
                </tr>
            </thead>
            <tbody class="text-center">
                @foreach($members as $member)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-600">
                    <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{$member->full_name}}
                    </td>
                    <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{$member->gender}}
                    </td>
                    <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{$member->age}}
                    </td>
                    <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{$member->expire_date}}
                    </td>
                    <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{$member->phone_number}}
                    </td>
                    <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{$member->weight}} Kg
                    </td>
                    <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{$member->trainer->get('full_name', "not assigned")}}
                    </td>
                    <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{$member->exercise_type}}
                    </td>
                    <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        @if ($member->start_date >= $member->expire_date)
                        <span
                            class="text-white bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 shadow-lg shadow-red-500/50 dark:shadow-lg dark:shadow-red-800/80 text-xs font-medium px-2.5 py-0.5 rounded-full">
                            <span class="w-2 h-2 me-1 bg-red-500 rounded-full"></span>
                            Deactive
                        </span>
                        @else
                        <span
                            class="text-white bg-gradient-to-r from-green-400 via-green-500 to-green-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-green-300 dark:focus:ring-green-800 shadow-lg shadow-green-500/50 dark:shadow-lg dark:shadow-green-800/80 text-xs font-medium px-2.5 py-0.5 rounded-full">
                            <span class="w-2 h-2 me-1 bg-green-500 rounded-full"></span>
                            Active
                        </span>
                        @endif
                    </td>
                    <td class="px-6 flex  py-4 text-center">


                        <x-button>Profile</x-button>



                        <form method="POST" action="{{ route('deleteMember', ['member' => $member->id ]) }}">
                            @method('delete')
                            @csrf
                            <x-button>Delete</x-button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="p-3  dark:bg-gray-800">
        {{ $members->links() }}
    </div>
</x-layout>
