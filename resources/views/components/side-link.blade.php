@props(['active' => false])

<a {{ $attributes }}
    class="flex items-center p-2  rounded-lg text-white {{ $active ?  ' bg-green-700' : 'hover:bg-green-700'}}"
    aria-current="{{ $active ? 'page' : 'false'}}">
    <span class="ms-3">{{ $slot }}</span>
</a>
