<div>
   <a href="{{$href}} {{ $attributes }}"
     class="text-lg border border-transparent py-2 px-10 bg-indigo-500 hover:bg-indigo-600 text-white"
     >
   {{$slot}}
</a>
</div>


{{-- @props([
    'href',
    'type' => "button",
    'buttonClass',
    // 'classe'='bg-blue-500',
])

<div class="p-5">
    <a href="{{$href}}"
    class="{{$buttonClass}} text-lg border border-transparent py-2 px-10">
    {{$slot}}
    </a>
</div> --}}

{{-- @isset($href)
    <a href="{{$href}}"
    class="{{$buttonClass}} text-lg bg-red-500 border border-transparent py-2 px-10">
    {{$slot}}
    </a>
@else
    <button type="{{$type}}"
     class="{{$buttonClass}} text-lg bg-slate-400 border border-transparent py-2 px-10"
     >
    {{$slot}}
    </button>


@endisset --}}
