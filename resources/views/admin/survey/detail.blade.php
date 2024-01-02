<x-layout.app>

    <x-container.header></x-container.header>

    <!-- Main content -->
    <x-container.content>

        <div class="row">
            <div class="col-md-6">
                <x-card.card>
                    <x-card.card-header title="ALUMNI">

                    </x-card.card-header>
                    <x-card.card-body>
                        <ul style="list-style: none;padding:0;margin:0">
                            <x-list.list left="PRODI" right="{{ $list[0]->alumni->prodi->nama_prodi }}" />
                            <x-list.list left="NIM" right="{{ $list[0]->alumni->nim }}" />
                            <x-list.list left="NIK" right="{{ $list[0]->alumni->nik }}" />
                            <x-list.list left="IPK" right="{{ $list[0]->alumni->ipk }}" />
                            <x-list.list left="NAMA" right="{{ $list[0]->alumni->nama }}" />
                            <x-list.list left="JENIS KELAMIN" right="{{ $list[0]->alumni->jenis_kelamin }}" />
                            <x-list.list left="AGAMA" right="{{ $list[0]->alumni->agama }}" />
                            <x-list.list left="AGAMA" right="{{ $list[0]->alumni->agama }}" />
                            <x-list.list left="TEMPAT LAHIR" right="{{ $list[0]->alumni->tempat_lahir }}" />
                            <x-list.list left="TANGGAL LAHIR" right="{{ $list[0]->alumni->tanggal_lahir }}" />
                            <x-list.list left="NO HP" right="{{ $list[0]->alumni->no_hp }}" />
                            <x-list.list left="ALAMAT" right="{{ $list[0]->alumni->alamat }}" />
                        </ul>

                    </x-card.card-body>
                </x-card.card>
            </div>
            <div class="col-md-6">
                <x-card.card>
                    <x-card.card-header title="HASIL SURVEY">

                    </x-card.card-header>
                    <x-card.card-body>
                        <ul style="list-style: none;padding:0;margin:0">
                            <x-list.list-column left="Tanggal Kelulusan"
                                right="{{ \Carbon\Carbon::parse($list[0]->tanggal_lulus)->diffForHumans() }}" />
                            <x-list.list-column left="Tingkat Sarjana" right="{{ $list[0]->tingkat_sarjana }}" />
                            <x-list.list-column left="Nilai Rata-Rata" right="{{ $list[0]->nilai_rata_rata }}" />
                            <x-list.list-column left="Status Saat ini" right="{{ $list[0]->status_saat_ini }}" />
                            <x-list.list-column left="Pendidikan Lanjutan"
                                right="{{ $list[0]->pendidikan_lanjutan }}" />
                            <x-list.list-column left="Pengaruh Program Studi Terhadap Pekerjaan "
                                right="{{ $list[0]->pendidikan }}" />
                            <x-list.list-column left="Kepuasa Mahasiswa Terhadap Program Studi  "
                                right="{{ $list[0]->kepuasan_programstudy }}" />

                        </ul>
                    </x-card.card-body>
                </x-card.card>
            </div>
        </div>
    </x-container.content>
    <!-- END Main content -->
</x-layout.app>
