<x-layout>
    <div class="text-right">
        <x-button>Add Member + </x-button>
    </div>

    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left rtl:text-right text-white ">
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
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
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
                    <td class="px-6 py-4 text-center">
                        <x-button>Profile</x-button>
                        <x-button form="deleteForm">Delete</x-button>
                        <form id="deleteForm" class="hidden" method="POST"
                            action="{{ route('deleteMember', ['member' => $member->id ]) }}">
                            @method('delete')
                            @csrf
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="p-3 dark:bg-gray-800">
            {{ $members->links() }}
        </div>
    </div>
</x-layout>
