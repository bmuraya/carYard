@props(['color', 'bgcolor' => 'white'])

<div  {{$attributes
        ->merge(['lang' => 'en'])
        ->class("card card-text-$color bg-$bgcolor")}}>

    <div {{ $title->attributes->class("card-header")}}>
        {{$title}}
    </div>
    @if ($slot->isEmpty())
        <p>Please Provide Some Content</p>
    @else
        {{ $slot }}
    @endif

    <div class="card-footer">{{ $footer }}</div>
</div>
