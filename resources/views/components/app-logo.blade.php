@props([
    'sidebar' => false,
])

@if($sidebar)
    <img
    src="{{ asset('images/sidebar_logo.png') }}"
    class="mx-auto h-[40px]"
    />
@else
    <img
    src="{{ asset('images/sidebar_logo.png') }}"
    class="mx-auto h-[40px]"
    />
@endif
