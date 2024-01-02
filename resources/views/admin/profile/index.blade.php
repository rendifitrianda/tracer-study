<x-layout.app>

    <x-container.header>
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">PROFILE</h1>
            </div>
        </div>
    </x-container.header>

    <x-container.content>
        <div class="row">
            <div class="col-lg-3 col-md-12">
                <x-card.card>
                    <x-card.card-body>
                        <img src="{{ url('public') }}/{{ $list->foto }}" alt="" width="100%">
                    </x-card.card-body>
                </x-card.card>

            </div>
            <div class="col-lg-9 col-md-12">
                <x-card.card>
                    <x-card.card-body>
                        <div class="row">
                            <div class="col-md-12">
                                <ul style="list-style: none;padding:0;margin:0">
                                    <x-list.list left="Nama" right="{{ $list->nama }}" />
                                    <x-list.list left="Email" right="{{ $list->email }}" />
                                    <x-list.list left="Password" right="{{ $list->password }}" />
                                </ul>
                            </div>
                            <div class="col-md-12">
                                <div class="d-flex align-items-center justify-content-end">
                                    <x-button.btn class="primary mt-5" url="#edit" title="Update Profile" modal />
                                </div>
                            </div>
                        </div>
                    </x-card.card-body>
                </x-card.card>

            </div>
        </div>
    </x-container.content>

    <!-- Modal tambah data -->
    <x-modal.modal modalid="edit" url="admin/profile/edit/{{ $list->id }}" title="EDIT PROFILE">
        <div class="row">
            <div class="col-md-12">
                <x-input.input type="text" field="nama" value="{{ $list->nama }}" label="Nama Lengkap"
                    placeholder="Masukan nama ..." />
            </div>
            <div class="col-md-12">
                <x-input.input type="text" field="email" value="{{ $list->email }}" label="Email"
                    placeholder="Masukan email ..." />
            </div>
            <div class="col-md-12">
                <x-input.input type="text" field="password" label="Password" placeholder="Masukan password ..." />
            </div>
            <div class="col-md-12">
                <x-input.input type="file" field="foto" label="Foto" placeholder="Masukan foto ..." />
            </div>
        </div>
        <div class="modal-footer justify-content-center">
            <button type="button" class="btn btn-light" data-dismiss="modal">BATAL</button>
            <button type="submit" class="btn btn-primary">UPDATE</button>
        </div>
    </x-modal.modal>
    <!-- END Modal tambah data -->




</x-layout.app>
