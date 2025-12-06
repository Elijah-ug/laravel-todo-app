{{-- @props(["name"=>false]) --}}
<a href="{{ $href }}"  {{ $attributes->merge(["class"=>"text-green-400 font-semibold" ]) }} >{{ $slot }}</a>