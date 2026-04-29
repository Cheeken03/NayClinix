@props(['on'])

<div x-data="{ shown: false, timeout: null, button: null }"
        x-init="
            @this.on('{{ $on }}', () => {
                clearTimeout(timeout); shown = true; alerts();
                timeout = setTimeout(() => { shown = false }, 2000);
            })
        "
        x-show.transition.out.opacity.duration.1500ms="shown"
        x-transition:leave.opacity.duration.1500ms
        style="display: none;"
        {{ $attributes->merge(['class' => 'pr-10 alert alert_success']) }}
    >
        <strong class="uppercase"><bdi>Success!</bdi></strong>
        {{ $slot->isEmpty() ? 'Saved.' : $slot }}
        <!-- <button type="button" class="dismiss la la-times" data-dismiss="alert"></button> -->
</div>
