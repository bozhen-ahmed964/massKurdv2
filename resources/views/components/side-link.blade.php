@props(['active' => false])

<a {{ $attributes }}
    class="flex items-center p-2  rounded-lg text-white {{ $active ?  ' bg-blue-800' : 'hover:bg-blue-800'}}"
    aria-current="{{ $active ? 'page' : 'false'}}">
    <span class="ms-3">{{ $slot }}</span>
</a>
