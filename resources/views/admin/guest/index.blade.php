<x-layout.app>
    <x-container.header>
        <div class="row">
            <div class="col-sm-6">
                <h1 class="m-0">DATA GUEST</h1>
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
                                    <x-table.th label="Perusahaan" />
                                    <x-table.th label="Jabatan" />
                                    <x-table.th label="Alumni" />
                                    <x-table.th label="AKSI" />
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($list as $item)
                                    <tr>
                                        <x-table.td label="{{ $loop->iteration }}" />
                                        <x-table.td label="{{ $item->perusahaan }}" />
                                        <x-table.td label="{{ $item->jabatan }}" />
                                        <x-table.td label="{{ $item->alumni->nama ?? '' }}" />
                                        <x-table.td-action>
                                            <x-button.btn class="warning" url="guest/detail/{{ $item->id }}"
                                                icons="fa-eye" />
                                            <x-button.btn class="danger" modal url="#hapus{{ $item->id }}"
                                                icons="fa-trash" />
                                        </x-table.td-action>
                                    </tr>
                                    <!-- Modal hapus data -->
                                    <x-modal.modal-delete modalid="hapus{{ $item->id }}"
                                        url="admin/guest/hapus/{{ $item->id }}" />
                                @endforeach
                            </tbody>
                        </x-table.table>
                    </x-card.card-body>
                </x-card.card>

            </div>
        </div>
    </x-container.content>

</x-layout.app>
