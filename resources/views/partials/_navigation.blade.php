@if (isset($type))
    @include('partials._navtop', ['type' => $type])
@else
    @include('partials._navtop')
    @include('partials._navside')
@endif


