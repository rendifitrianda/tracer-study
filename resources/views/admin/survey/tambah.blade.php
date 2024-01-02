<x-layout.app>

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">TAMBAH SURVEY PENGGUNA LULUSAN</h1>
                </div>

            </div>
        </div>
    </div>


    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ url('admin/survey/tambah') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-md-3">
                                        <x-input.select label="Alumni" field="alumni_id">
                                            @foreach ($list as $item)
                                                <option value="{{ $item->id }}">{{ $item->nama }}</option>
                                            @endforeach
                                        </x-input.select>
                                    </div>
                                    <div class="col-md-3">
                                        <x-input.input field="tanggal_lulus" label="Tanggal Lulus" type="date"
                                            placeholder="Tanggal Lulus ..." />
                                    </div>
                                    <div class="col-md-3">
                                        <x-input.input field="nilai_rata_rata" label="Nilai rata rata" type="number"
                                            placeholder="Masukan nilai ..." />
                                    </div>

                                    <div class="col-md-3">
                                        <x-input.input field="pendidikan_lanjutan" label="Pendidikan Lanjutan"
                                            type="text" placeholder="Masukan pendidikan lanjutan ..." />
                                    </div>
                                    <div class="col-md-12">
                                        <x-input.radio label="Tingkat Sarjana">
                                            <x-input.radio-field field="tingkat_sarjana" value="Diploma 3"
                                                labelCheck="Diploma 3" />
                                            <x-input.radio-field field="tingkat_sarjana" value="Diploma 4"
                                                labelCheck="Diploma 4" />

                                        </x-input.radio>
                                    </div>
                                    <div class="col-md-12">
                                        <x-input.radio label="Status Pekerjaan Saat Ini ?">
                                            <x-input.radio-field field="status_saat_ini" value="Bekerja"
                                                labelCheck="Bekerja" />
                                            <x-input.radio-field field="status_saat_ini" value="Melanjutkan Study"
                                                labelCheck="Melanjutkan Study" />
                                            <x-input.radio-field field="status_saat_ini" value="Belum bekerja"
                                                labelCheck="Belum bekerja" />

                                        </x-input.radio>
                                    </div>
                                    <div class="col-md-12">
                                        <x-input.radio label="Seberapa Membantu Pendidikan anda dalam dunia kerja ?">
                                            <x-input.radio-field field="pendidikan" value="Sanggat membantu"
                                                labelCheck="Sanggat membantu" />
                                            <x-input.radio-field field="pendidikan" value="Membantu"
                                                labelCheck="Membantu" />
                                            <x-input.radio-field field="pendidikan" value="Kurang membantu"
                                                labelCheck="Kurang membantu" />
                                            <x-input.radio-field field="pendidikan" value="Tidak membantu"
                                                labelCheck="Tidak membantu" />
                                        </x-input.radio>
                                    </div>
                                    <div class="col-md-12">
                                        <x-input.radio label="Kepuasan dalam program study ?">
                                            <x-input.radio-field field="kepuasan_programstudy" value="Sanggat Puas"
                                                labelCheck="Sanggat Puas" />
                                            <x-input.radio-field field="kepuasan_programstudy" value="Lumayan Puas"
                                                labelCheck="Lumayan Puas" />
                                            <x-input.radio-field field="kepuasan_programstudy" value="Cukup"
                                                labelCheck="Cukup" />
                                            <x-input.radio-field field="kepuasan_programstudy" value="Kurang Puas"
                                                labelCheck="Kurang Puas" />
                                        </x-input.radio>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="d-flex align-items-center justify-content-center mt-5">
                                            <x-button.btn class="secondary" url="{{ url('admin/survey') }}"
                                                title="KEMBALI" />
                                            <button class="btn btn-primary mx-2">SIMPAN</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

</x-layout.app>
