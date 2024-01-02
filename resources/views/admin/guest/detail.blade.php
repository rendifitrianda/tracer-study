<x-layout.app>
    @foreach ($list as $item)
    @endforeach

    <x-container.header>
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">DETAIL DATA GUEST</h1>
            </div>
        </div>
    </x-container.header>

    <x-container.content>
        <div class="row">

            <div class="col-lg-12 col-md-12">
                <x-card.card>
                    <x-card.card-body>
                        <div class="row">
                            <div class="col-md-12">
                                <ul style="list-style: none;padding:0;margin:0">

                                    <x-list.list-column left="Alumni yang dinilai"
                                        right="{{ $item->alumni->nama ?? '' }}" />
                                    <x-list.list-column left="Prodi Alumni"
                                        right="{{ $item->alumni->prodi->nama_prodi ?? '' }}" />
                                    <x-list.list-column left="Diisi oleh" right="{{ $item->pengisi }}" />
                                    <x-list.list-column left="Perusahaan yang bertangung jawab ?"
                                        right="{{ $item->perusahaan }}" />
                                    <x-list.list-column left="Posisi jabatan alumni kami ?"
                                        right="{{ $item->jabatan }}" />
                                    <x-list.list-column left="Sikap Atau Etika " right="{{ $item->sikap }}" />
                                    <x-list.list-column
                                        left="Keahlian Berdasarkan
                                        bidang bidang ilmu nya?"
                                        right="{{ $item->keahlian }}" />
                                    <x-list.list-column left="Kemampuan Berbahasa Asing  ?"
                                        right="{{ $item->bahasa_asing }}" />
                                    <x-list.list-column
                                        left="Kemampuan Teknologi informasi
                                        ?"
                                        right="{{ $item->penggunaan_tek }}" />
                                    <x-list.list-column
                                        left="Kemampuan Teknologi informasi lulusan kami yang bekerja di tempat Anda
                                        ?"
                                        right="{{ $item->komunikasi }}" />
                                    <x-list.list-column
                                        left="Kemampuan Kerjasama lulusan kami yang bekerja di tempat Anda ?"
                                        right="{{ $item->kerjasama }}" />
                                    <x-list.list-column
                                        left="Kemampuan Pengembangan diri lulusan kami yang bekerja di tempat Anda ?"
                                        right="{{ $item->pengembangan_diri }}" />
                                    <x-list.list-column
                                        left="Kesiapan Terjun Di masyarakat lulusan kami yang bekerja di tempat Anda
                                        ?"
                                        right="{{ $item->kesiapan }}" />
                                    <x-list.list-column
                                        left="Harapan Anda terhadap lulusan Mahasiswa politeknik Negeri Ketapang ?"
                                        right="{{ $item->harapan }}" />
                                    <x-list.list-column left="Saran Dan masukkan Untuk politeknik Negeri Ketapang ?"
                                        right="{{ $item->kritik_saran }}" />

                                </ul>
                            </div>
                            <div class="col-md-12">
                                <div class="d-flex align-items-center">
                                    <a href="{{ url('admin/guest') }}" class="btn btn-warning mt-3">Kembali</a>
                                </div>
                            </div>
                        </div>
                    </x-card.card-body>
                </x-card.card>

            </div>
        </div>
    </x-container.content>





</x-layout.app>
