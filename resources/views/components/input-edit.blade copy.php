@props(['title', 'model', 'id', 'value'])

<div x-data="{ readonly: true, value: '{{ $value }}' }" wire:ignore.self class="flex flex-col gap-5">
    <div class="flex items-center justify-between">
        <x-input-label for="{{ Str::slug($title, '_') }}" :value="__($title)" />
        <span class="text-xs rounded-md cursor-pointer bg-blue-300 border w-auto px-3 py-1"
            x-text="readonly ? 'Edit' : 'Cancel'" x-on:click="
                readonly = !readonly;
                readonly && (value = '{{ $value }}');
            "
            x-bind:class="readonly ? 'badge_primary' : 'bg-yellow-300'"
        >Edit</span>
    </div>
    <input x-model="value" x-bind:readonly="readonly" x-bind:class="!readonly && 'input-group-item'" class="px-2 py-2 bg-[#f1f1f1] rounded-md" placeholder="example">
    <div class="!px-1 input-addon input-addon-append input-group-item !bg-success"
        x-on:click="readonly = !readonly; $wire.saveInput('{{ Str::slug($title, '_') }}', '{{ $model }}', {{ $id }}, value)"
        x-bind:class="readonly && '!hidden'"
    >
        <span class="cursor-pointer la la-save la-3x text-blue-300"></span>
    </div>

</div>