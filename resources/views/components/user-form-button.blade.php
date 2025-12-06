<button {{ $attributes->merge(["type"=>"submit", "class"=>"bg-gray-200 px-4 py-2 text-gray-500 rounded"]) }} >
{{ $slot }}
</button>