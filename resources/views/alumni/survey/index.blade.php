<x-layout.app>


    <x-container.header></x-container.header>

    <!-- Main content -->
    <x-container.content>
        <div class="row">
            <div class="col-md-12">
                <div class="card-info mb-5">
                    <x-box.box class="primary" icons="user" title="DIPLOMA 3" count="{{ $D3 }}" />
                    <x-box.box class="success" icons="user" title="DIPLOMA 4" count="{{ $D4 }}" />
                    <x-box.box class="warning" icons="user" title="BEKERJA" count="{{ $BEKERJA }}" />
                    <x-box.box class="danger" icons="user" title="MELANJUTKAN STUDY"
                        count="{{ $MELANJUTKANSTUDY }}" />
                    <x-box.box class="info" icons="user" title="BELUM BEKERJA" count="{{ $BELUMBEKERJA }}" />

                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <x-card.card>
                    <x-card.card-header title="HASIL SURVEY PENGGUNA LULUSAN">
                        <x-button.btn class="success flex-end" url="{{ url('admin/survey/tambah') }}" icons="fa-plus"
                            title="Tambah" />
                    </x-card.card-header>
                    <x-card.card-body>
                        <x-table.table>

                            <x-table.th label="No." />
                            <x-table.th label="Prodi" />
                            <x-table.th label="NIM" />
                            <x-table.th label="Nama" />
                            <x-table.th label="Tanggal Lulus" />
                            <x-table.th label="Status Saat Ini" />
                            <x-table.th label="Aksi" />

                            <tbody>
                                @foreach ($list as $item)
                                    @php
                                        $no = 1;
                                    @endphp
                                    <tr>
                                        <x-table.td label="{{ $no++ }}" />
                                        <x-table.td label="{{ $item->alumni->prodi->nama_prodi }}" />
                                        <x-table.td label="{{ $item->alumni->nim }}" />
                                        <x-table.td label="{{ $item->alumni->nama }}" />
                                        <x-table.td label="{{ $item->tanggal_lulus }}" />
                                        <x-table.td label="{{ $item->status_saat_ini }}" />
                                        <x-table.td-action>
                                            <x-button.btn class="warning"
                                                url="{{ url('admin/survey/detail', $item->id) }}" icons="fa-eye" />
                                            <x-button.btn class="primary" url="{{ url('admin/tracer/soal') }}"
                                                icons="fa-edit" />
                                            <x-button.btn class="danger" url="{{ url('admin/tracer/soal') }}"
                                                icons="fa-trash" />
                                        </x-table.td-action>
                                    </tr>
                                @endforeach

                            </tbody>

                        </x-table.table>
                    </x-card.card-body>
                </x-card.card>
            </div>
        </div>
    </x-container.content>
    <!-- END Main content -->
</x-layout.app>
