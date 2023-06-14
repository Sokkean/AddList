@props([
    'class' => '',
])

<button  {!! $attributes->merge(['class' => $class])!!}>Add</button>

{{-- <h1>{{$title}} header component</h1> --}}

