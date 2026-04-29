@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'w-auto h-10  p-[10px] rounded-md']) !!}>

<!-- <div class="col-lg">
    <div class="form-input mt-30 input-items default">
        <div {!! $attributes->merge(['class' => 'input-items default']) !!}>
            <input {{ $disabled ? 'disabled' : '' }}>
            
        </div> 
    </div>
</div> -->