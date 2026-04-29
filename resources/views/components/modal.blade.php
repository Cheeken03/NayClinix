@props(['action', 'title' => 'Welcome', 'width' => null, 'button' => null])




<div class="modal fade" x-data id="{{ Str::camel($action) }}Modal">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">{{ $title }}</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"
                    x-on:click="$root.querySelector(`button[type='submit']`)?.removeAttribute('disabled');"
                ></button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                {{ $slot }}
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
            </div>

        </div>
    </div>
</div>
