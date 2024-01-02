<div class="modal fade" id="{{ $modalid ?? '' }}">
    <div class="modal-dialog">
        <form action="{{ url($url ?? '') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="modal-content">
                <div class="modal-header justify-content-between">
                    <h4 class="modal-title text-center">{{ $title ?? '' }}</h4>
                </div>
                <div class="modal-body">
                    {{ $slot }}
                </div>
                <div class="modal-footer">
                    {{ $slotFooter ?? '' }}
                </div>
            </div>
        </form>
    </div>
</div>
