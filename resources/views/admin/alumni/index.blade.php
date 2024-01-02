<x-layout.app>
    <x-container.header>
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">DATA ALUMNI</h1>
            </div>
            <div class="col-sm-6 ">
                <div class="d-flex align-items-center justify-content-end">
                    <x-button.btn class="success" url="alumni/tambah" icons="fa-plus" title="Tambah Data" />
                    <x-button.btn class="success mx-2" url="#uploadFile" icons="fa-file-excel" title="Upload File"
                        modal />
                </div>
            </div>
        </div>
    </x-container.header>

    <x-container.content>
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <x-card.card>
                    <x-card.card-body>
                        <x-table.table>
                            <thead>
                                <tr>
                                    <x-table.th label="No." />
                                    <x-table.th label="NIK" />
                                    <x-table.th label="NIM" />
                                    <x-table.th label="IPK" />
                                    <x-table.th label="NAMA" />
                                    <x-table.th label="JK" />
                                    <x-table.th label="THN MASUK" />
                                    <x-table.th label="THN LULUS" />
                                    <x-table.th label="AKSI" />
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($list as $item)
                                    <tr>
                                        <x-table.td label="{{ $loop->iteration }}" />
                                        <x-table.td label="{{ $item->nik }}" />
                                        <x-table.td label="{{ $item->nim }}" />
                                        <x-table.td label="{{ $item->ipk }}" />
                                        <x-table.td label="{{ $item->nama }}" />
                                        <x-table.td label="{{ $item->jenis_kelamin }}" />
                                        <x-table.td label="{{ $item->tahun_masuk }}" />
                                        <x-table.td label="{{ $item->tahun_lulus }}" />
                                        <x-table.td-action>
                                            <x-button.btn class="warning" url="alumni/detail/{{ $item->id }}"
                                                icons="fa-eye" />
                                            <x-button.btn class="primary" url="alumni/edit/{{ $item->id }}"
                                                icons="fa-eye" />
                                            <x-button.btn class="danger" modal url="#hapus{{ $item->id }}"
                                                icons="fa-trash" />
                                        </x-table.td-action>
                                    </tr>
                                    <!-- Modal hapus data -->
                                    <x-modal.modal-delete modalid="hapus{{ $item->id }}"
                                        url="admin/alumni/hapus/{{ $item->id }}" />
                                @endforeach
                            </tbody>

                        </x-table.table>
                    </x-card.card-body>
                </x-card.card>
            </div>
        </div>
    </x-container.content>

    <!-- Modal tambah data -->
    <x-modal.modal modalid="uploadFile" url="admin/alumni/uploadFile" title="FORM UPLOAD FILE ALUMNI">
        <div class="row">
            <div class="col-md-12">
                <x-input.input type="file" field="file" label="File alumni" placeholder="Masukan file excel ..." />
            </div>
        </div>
        <div class="modal-footer justify-content-center">
            <button type="button" class="btn btn-outline-light" data-dismiss="modal">BATAL</button>
            <button type="submit" class="btn btn-outline-primary">UPLOAD</button>
        </div>
    </x-modal.modal>
    <!-- END Modal tambah data -->



</x-layout.app>
