<button {{ $attributes->merge(["type"=>"submit", "class"=>"bg-blue-600 text-white font-semibold px-6 py-2 text-gray-500 rounded"]) }} >
{{ $slot }}
</button>