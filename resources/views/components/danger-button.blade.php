<button {{ $attributes->merge(['type' => 'submit', 'class' => 'bg-red-600 px-4 py-1 rounded text-white font-semibold']) }}>
    {{ $slot }}
</button>
