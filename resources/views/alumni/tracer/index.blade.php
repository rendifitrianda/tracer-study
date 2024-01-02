<x-layout_alumni.app>
    <section class="content-header">
        <h2 class="title">TRACER STUDY</h2>
    </section>

    @if ($list == null)
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2 class="card-title">MOHON LENGKAPI ISIAN TRACER STUDY FORM DIBAWAH INI</h2>
                    </div>
                    <div class="card-body">

                        <form action="{{ url('alumni/tracer/tambah') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-4 mb-3">
                                    <label for="">Tanggal Lulus</label>
                                    <input type="date" name="tanggal_lulus" class="form-control"
                                        placeholder="Masukan Tanggal ...">
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="">Nilai Rata-Rata</label>
                                    <input type="number" name="nilai_rata_rata" class="form-control"
                                        placeholder="Masukan nilai ...">
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="">Pendidikan Lanjutan</label>
                                    <input type="text" name="pendidikan_lanjutan" class="form-control"
                                        placeholder="Masukan pendidikan lanjutan anda ...">
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="">Tingkat Sarjana</label>
                                    <x-layout_alumni.input.input-radio name="tingkat_sarjana" value="Diploma 3"
                                        label="Diploma 3" />
                                    <x-layout_alumni.input.input-radio name="tingkat_sarjana" value="Diploma 4"
                                        label="Diploma 4" />
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="">Status Saat Ini</label>
                                    <x-layout_alumni.input.input-radio name="status_saat_ini" value="Bekerja"
                                        label="Bekerja" />
                                    <x-layout_alumni.input.input-radio name="status_saat_ini" value="Melanjutkan Study"
                                        label="Melanjutkan Study" />
                                    <x-layout_alumni.input.input-radio name="status_saat_ini" value="Belum bekerja"
                                        label="Belum bekerja" />
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="">Pendidikan</label>
                                    <x-layout_alumni.input.input-radio name="pendidikan" value="Sanggat membantu"
                                        label="Sanggat membantu" />
                                    <x-layout_alumni.input.input-radio name="pendidikan" value="Membantu"
                                        label="Membantu" />
                                    <x-layout_alumni.input.input-radio name="pendidikan" value="Kurang membantu"
                                        label="Kurang membantu" />
                                    <x-layout_alumni.input.input-radio name="pendidikan" value="Tidak membantu"
                                        label="Tidak membantu" />
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="">Kepuasan</label>
                                    <x-layout_alumni.input.input-radio name="kepuasan_programstudy" value="Sanggat Puas"
                                        label="Sanggat Puas" />
                                    <x-layout_alumni.input.input-radio name="kepuasan_programstudy" value="Lumayan Puas"
                                        label="Lumayan Puas" />
                                    <x-layout_alumni.input.input-radio name="kepuasan_programstudy" value="Cukup"
                                        label="Cukup" />
                                    <x-layout_alumni.input.input-radio name="kepuasan_programstudy" value="Kurang Puas"
                                        label="Kurang Puas" />
                                </div>
                                <div class="col-md-12">
                                    <button class="btn btn-primary">KIRIM JAWABAN</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>

        </div>
    @else
        <div class="row">
            <div class="col-md-12">
                <div class="card-blank">
                    <ion-icon name="alert-circle-outline"></ion-icon>
                    <h2 class="text-empty">{{ $list }}</h2>
                </div>
            </div>
        </div>
    @endif

</x-layout_alumni.app>
