<x-layout.app>


    <x-container.header />

    <x-container.content>
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <x-card.card>
                    <x-card.card-header title="DATA PRODI">
                        <x-button.btn class="success flex-end" url="#tambah" icons="fa-plus" title="Tambah" modal />
                    </x-card.card-header>
                    <x-card.card-body>
                        <x-table.table>
                            <thead>
                                <tr>
                                    <x-table.th label="No." />
                                    <x-table.th label="Nama Prodi" />
                                    <x-table.th label="Link" />
                                    <x-table.th label="Action" />
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($list as $item)
                                    <tr>
                                        <x-table.td label="{{ $loop->iteration }}" />
                                        <x-table.td label="{{ $item->nama_prodi }}" />
                                        <x-table.td label="{{ $item->link }}" />
                                        <x-table.td-action>
                                            <x-button.btn class="primary" url="#edit{{ $item->id }}" icons="fa-edit"
                                                modal />
                                            <x-button.btn class="danger" url="#hapus{{ $item->id }}" modal
                                                icons="fa-trash" />
                                        </x-table.td-action>

                                        <!-- Modal hapus data -->
                                        <x-modal.modal-delete modalid="hapus{{ $item->id }}"
                                            url="admin/prodi/hapus/{{ $item->id }}" />

                                        <!-- Modal edit data -->
                                        <x-modal.modal modalid="edit{{ $item->id }}"
                                            url="admin/prodi/edit/{{ $item->id }}" title="FORM EDIT PRODI">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <x-input.input type="text" field="nama_prodi"
                                                        value="{{ $item->nama_prodi }}" label="Nama Prodi"
                                                        placeholder="Masukan nama prodi ..." />
                                                </div>
                                                <div class="col-md-12">
                                                    <x-input.input type="text" field="link"
                                                        value="{{ $item->link }}" label="Link Prodi"
                                                        placeholder="Masukan link prodi ..." />
                                                </div>
                                            </div>
                                            <div class="modal-footer justify-content-center">
                                                <button type="button" class="btn btn-outline-light"
                                                    data-dismiss="modal">BATAL</button>
                                                <button type="submit" class="btn btn-outline-primary">UPDATE</button>
                                            </div>
                                        </x-modal.modal>
                                        <!-- END Modal edit data -->
                                    </tr>
                                @endforeach
                            </tbody>

                        </x-table.table>
                    </x-card.card-body>
                </x-card.card>
            </div>
        </div>
    </x-container.content>



    <!-- Modal tambah data -->
    <x-modal.modal modalid="tambah" url="admin/prodi/tambah" title="FORM TAMBAH PRODI">
        <div class="row">
            <div class="col-md-12">
                <x-input.input type="text" field="nama_prodi" label="Nama Prodi"
                    placeholder="Masukan nama prodi ..." />
            </div>
            <div class="col-md-12">
                <x-input.input type="text" field="link" label="Link Prodi" placeholder="Masukan link prodi ..." />
            </div>
        </div>
        <div class="modal-footer justify-content-center">
            <button type="button" class="btn btn-outline-light" data-dismiss="modal">BATAL</button>
            <button type="submit" class="btn btn-outline-primary">SIMPAN</button>
        </div>
    </x-modal.modal>
    <!-- END Modal tambah data -->


    <!-- jQuery -->
    <script src="{{ url('public') }}/assets/plugins/jquery/jquery.min.js"></script>

    @if ($errors->any())
        <script>
            $(document).ready(function() {
                $('#tambah').modal('show');
            });
        </script>
    @endif

</x-layout.app>
