<x-layout.app>

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0" style="text-transform: uppercase">DATA SOAL {{ $list->title }}</h1>
                </div>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <a href="#buatSoal" class="btn btn-success float-sm-right" data-toggle="modal">
                                <i class="fa fa-plus"></i>
                                <span>Buat Soal</span>
                            </a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>
                                                <center>No.</center>
                                            </th>
                                            <th>
                                                <center>Action</center>
                                            </th>
                                            <th>
                                                <center>Soal</center>
                                            </th>
                                            <th>
                                                <center>Pilihan</center>
                                            </th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($list->soal as $item)
                                            <tr>
                                                <td>
                                                    <center>{{ $loop->iteration }}</center>
                                                </td>
                                                <td>
                                                    <center>
                                                        <div class="btn-group">
                                                            <a href="#editsoal{{ $item->id }}"
                                                                class="btn btn-sm btn-primary" data-toggle="modal">
                                                                <i class="fa fa-edit"></i>
                                                            </a>
                                                            <a href="{{ url('admin/tracer/hapusSoal', $item->id) }}"
                                                                class="btn btn-sm btn-danger"
                                                                onclick="return confirm('Yakin ingin menghapus data ini ?!');">
                                                                <i class="fa fa-trash"></i>
                                                            </a>
                                                            <a href="#buatPilihan{{ $item->id }}"
                                                                class="btn btn-sm btn-secondary" data-toggle="modal">
                                                                <i class="fa fa-list"></i>
                                                            </a>
                                                        </div>
                                                    </center>
                                                </td>
                                                <td>
                                                    {{ $item->title_soal }}
                                                </td>
                                                <td>
                                                    @if (count($item->pilihan) < 0)
                                                        <span class="text-danger">Belum Ada pilihan</span>
                                                    @else
                                                        <ul class="list-group">
                                                            @foreach ($item->pilihan as $p)
                                                                <li
                                                                    style="display: block !important;border-bottom: 0.6px solid grey;padding: 12px 0;">
                                                                    <span
                                                                        class="d-block mb-2">{{ $p->title_pilihan }}</span>
                                                                    <span class="btn-group">
                                                                        <a href="#updatePilihan{{ $p->id }}"
                                                                            data-toggle="modal"
                                                                            class="btn btn-sm btn-outline-primary">
                                                                            <i class="fa fa-edit"></i>
                                                                        </a>
                                                                        <a href="{{ url('admin/tracer/deletePilihan', $p->id) }}"
                                                                            class="btn btn-sm btn-outline-danger"
                                                                            onclick="return confirm('Yakin ingin menghapus data ini ?!');">
                                                                            <i class="fa fa-trash"></i>
                                                                        </a>
                                                                    </span>
                                                                </li>

                                                                <!-- Modal tambah pilihan data -->
                                                                <x-modal.modal
                                                                    modalid="updatePilihan{{ $p->id }}"
                                                                    title="FORM UPDATE PILIHANSOAL {{ $p->title_pilihan }}"
                                                                    url="admin/tracer/updatePilihan/{{ $p->id }}">

                                                                    <x-input.input type="text" field="title_pilihan"
                                                                        label="Pilihan" value="{{ $p->title_pilihan }}"
                                                                        placeholder="Masukan pilihan ..." />
                                                                    <div class="d-flex justify-content-center">
                                                                        <button type="button"
                                                                            class="btn btn-outline-light"
                                                                            data-dismiss="modal">BATAL</button>
                                                                        <button type="submit"
                                                                            class="btn btn-outline-primary mx-2">UPDATE</button>
                                                                    </div>
                                                                </x-modal.modal>
                                                                <!-- END Modal tambah pilihan data -->
                                                            @endforeach
                                                        </ul>
                                                    @endif
                                                </td>

                                            </tr>

                                            <!-- Modal tambah pilihan data -->
                                            <x-modal.modal modalid="buatPilihan{{ $item->id }}"
                                                title="FORM BUAT PILIHANSOAL {{ $item->title_pilihan }}"
                                                url="admin/tracer/tambahPilihan/{{ $item->id }}">

                                                <x-input.input type="text" field="title_pilihan" label="Pilihan"
                                                    placeholder="Masukan pilihan ..." />
                                                <div class="d-flex justify-content-center">
                                                    <button type="button" class="btn btn-outline-light"
                                                        data-dismiss="modal">BATAL</button>
                                                    <button type="submit"
                                                        class="btn btn-outline-primary mx-2">SIMPAN</button>
                                                </div>
                                            </x-modal.modal>
                                            <!-- END Modal tambah pilihan data -->




                                            <!-- Modal edit soal data -->
                                            <div class="modal fade" id="editsoal{{ $item->id }}">
                                                <div class="modal-dialog">
                                                    <form action="{{ url('admin/tracer/editSoal', $item->id) }}"
                                                        method="POST">
                                                        @csrf
                                                        <div class="modal-content">
                                                            <div class="modal-header justify-content-center">
                                                                <h4 class="modal-title text-center">FORM EDIT SOAL
                                                                    BAGIAN</h4>

                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="row" id="dynamicFields">

                                                                    <div class="col-md-12">
                                                                        <x-input.input type="text" field="title_soal"
                                                                            label="Soal"
                                                                            value="{{ $item->title_soal }}"
                                                                            placeholder="Masukan soal ..." />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer justify-content-center">
                                                                <button type="button" class="btn btn-outline-light"
                                                                    data-dismiss="modal">BATAL</button>
                                                                <button type="submit"
                                                                    class="btn btn-outline-primary">UPDATE</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                            <!-- END Modal edit soal data -->
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Modal tambah data -->
    <div class="modal fade" id="buatSoal">
        <div class="modal-dialog">
            <form action="{{ url('admin/tracer/tambahSoal', $list->id) }}" method="POST">
                @csrf
                <div class="modal-content">
                    <div class="modal-header justify-content-center">
                        <h4 class="modal-title text-center">FORM BUAT SOAL BAGIAN {{ $list->nama }}</h4>

                    </div>
                    <div class="modal-body">
                        <div class="row" id="dynamicFields">

                            <div class="col-md-12">
                                <x-input.input type="text" field="title_soal" label="Soal"
                                    placeholder="Masukan soal ..." />
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-center">
                        <button type="button" class="btn btn-outline-light" data-dismiss="modal">BATAL</button>
                        <button type="submit" class="btn btn-outline-primary">SIMPAN</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- END Modal tambah data -->
    <!-- jQuery -->
    <script src="{{ url('public') }}/assets/plugins/jquery/jquery.min.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.13.2/dist/cdn.min.js"></script>

    @if ($errors->any())
        <script>
            $(document).ready(function() {
                $('#buatSoal').modal('show');
            });
        </script>
    @endif

</x-layout.app>
