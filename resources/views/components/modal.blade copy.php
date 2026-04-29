@props(['action', 'title' => 'Welcome', 'width' => null, 'button' => null])

<div x-data id="{{ Str::camel($action) }}Modal" class="modal" data-animations="fadeInDown, fadeOutUp" data-static-backdrop>
    <div class="justify-center !h-screen  {{ $width ?? 'max-w-2xl w-96' }} modal-dialog modal-dialog_centered">
        <div class="w-full modal-content">
            <div class="modal-header">
                <h2 class="modal-title">{{ $title }}</h2>
                <button type="button" class="close la la-times" data-dismiss="modal"
                    x-on:click="$root.querySelector(`button[type='submit']`)?.removeAttribute('disabled');"></button>
            </div>
            <div class="pr-3 !mr-2 overflow-y-auto modal-body max-h-96">
                {{ $slot }}
            </div>
            <div class="modal-footer">
                {{ $button }}
            </div>
        </div>
    </div>
</div>