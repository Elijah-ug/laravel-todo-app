<button {{ $attributes->merge(["type"=>"submit", "class"=>"bg-gray-200 px-3 py-1 rounded-xl"]) }} >
{{ $slot }}
</button>