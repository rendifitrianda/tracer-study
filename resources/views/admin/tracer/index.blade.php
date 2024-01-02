<x-layout.app>

    <!-- Modal tambah data -->
    <x-modal.modal url="admin/tracer/tambahBagian" modalid="tambahBagian" title="FORM TAMBAH BAGIAN">
        <div class="row">
            <div class="col-md-12">
                <x-input.select label="Prodi" field="prodi_id">
                    @foreach ($prodi as $d)
                        <option value="{{ $d->id }}">{{ $d->nama_prodi }}</option>
                    @endforeach
                </x-input.select>
            </div>
            <div class="col-md-12">
                <x-input.input type="text" field="nama" label="Nama Bagian" placeholder="Masukan nama bagian ..." />
            </div>
            <div class="col-md-12">
                <x-input.input type="text" field="title" label="Title Bagian"
                    placeholder="Masukan title bagian ..." />
            </div>
        </div>
        <div class="d-flex align-item-center justify-content-center">
            <button type="button" class="btn btn-outline-light" data-dismiss="modal">BATAL</button>
            <button type="submit" class="btn btn-outline-primary mx-2">SIMPAN</button>
        </div>
    </x-modal.modal>
    <!-- END Modal tambah data -->

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">DATA TRACER STUDY</h1>
                </div>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="card">
                        <div class="card-header ">
                            <div class="d-flex align-items-center justify-content-between">
                                <h5 class="header-title">DATA BAGIAN</h5>
                                <div class="btn-group float-right">
                                    <x-button.btn class="info" url="{{ url('admin/survey') }}" icons="fa-eye"
                                        title="Hasil Survey" />
                                    <x-button.btn class="success" url="#tambahBagian" icons="fa-plus"
                                        title="Tambah Data" modal />
                                </div>
                            </div>

                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table dataTable">
                                    <thead>
                                        <tr>
                                            <th>
                                                <center>No.</center>
                                            </th>
                                            <th>
                                                <center>PRODI</center>
                                            </th>
                                            <th>
                                                <center>BAGIAN SOAL</center>
                                            </th>
                                            <th>
                                                <center>JUDUL</center>
                                            </th>
                                            <th>
                                                <center>Action</center>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($list as $item)
                                            <tr>
                                                <td>
                                                    <center>{{ $loop->iteration }}</center>
                                                </td>
                                                <td>
                                                    <center>{{ $item->prodi->nama_prodi ?? '' }}</center>
                                                </td>
                                                <td>
                                                    <center>{{ $item->nama }}</center>
                                                </td>
                                                <td>
                                                    <center>{{ $item->title }}</center>
                                                </td>
                                                <td>
                                                    <center>
                                                        <div class="btn-group">
                                                            <x-button.btn class="warning"
                                                                url="{{ url('admin/tracer/soal', $item->id) }}"
                                                                icons="fa-eye" />
                                                            <x-button.btn class="primary" modal
                                                                url="#edit{{ $item->id }}" icons="fa-edit" />
                                                            <x-button.btn class="danger"
                                                                onclick="return confirm('Yakin ingin menghapus data ini ?!');"
                                                                url="{{ url('admin/tracer/hapusBagian', $item->id) }}"
                                                                icons="fa-trash" />

                                                        </div>
                                                    </center>
                                                </td>
                                            </tr>
                                            <x-modal.modal url="admin/tracer/updateBagian/{{ $item->id }}"
                                                modalid="edit{{ $item->id }}" title="FORM UPDATE BAGIAN" footer>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <x-input.input type="text" field="nama"
                                                            value="{{ $item->nama }}" label="Nama Bagian"
                                                            placeholder="Masukan nama bagian ..." />
                                                    </div>
                                                    <div class="col-md-12">
                                                        <x-input.input type="text" field="title"
                                                            value="{{ $item->title }}" label="Title Bagian"
                                                            placeholder="Masukan title bagian ..." />
                                                    </div>
                                                </div>
                                                <div class="d-flex align-item-center justify-content-center">
                                                    <button type="button" class="btn btn-outline-light"
                                                        data-dismiss="modal">BATAL</button>
                                                    <button type="submit"
                                                        class="btn btn-outline-primary mx-2">UPDATE</button>
                                                </div>
                                            </x-modal.modal>
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

    <!-- jQuery -->
    <script src="{{ url('public') }}/assets/plugins/jquery/jquery.min.js"></script>

    @if ($errors->any())
        <script>
            $(document).ready(function() {
                $('#tambahBagian').modal('show');
            });
        </script>
    @endif

</x-layout.app>
