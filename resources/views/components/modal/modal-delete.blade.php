<div class="modal fade" id="{{ $modalid ?? '' }}">
    <div class="modal-dialog">
        <form action="{{ url($url ?? '') }}" method="POST">
            @csrf
            <div class="modal-content">
                <div class="modal-header flex-column align-content-center justify-content-center">
                    <h4 class="modal-title text-center">YAKIN INGIN MENGHAPUS DATA INI ?!</h4>
                    <p class="d-block p-0 m-0">Data yang telah dihapus tidak bisa dikembalikan lagi</p>
                </div>
                <div class="modal-footer d-flex align-items-center justify-content-center">
                    <button type="button" class="btn btn-outline-light" data-dismiss="modal">BATAL</button>
                    <button type="submit" class="btn btn-outline-danger">TETAP HAPUS</button>
                </div>
            </div>
        </form>
    </div>
</div>
