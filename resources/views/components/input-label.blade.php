@props(['value'])

<label {{ $attributes->merge(['class' => 'block mt-0 px-0 mr-0 label fs-6']) }}>
    {{ $value ?? $slot }}
</label>
