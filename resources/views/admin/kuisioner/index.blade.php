<x-layout.app>

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0">DATA KUISIONER TRACER STUDY</h1>
                </div>
                <div class="col-sm-12">

                </div>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="card">
                        <div class="card-header p-3">
                            <ul class="nav nav-tabs">
                                @foreach ($list as $item)
                                    <li class="nav-item">
                                        <a href="#" id="{{ $item->id }}"
                                            class="nav-link">{{ $item->title }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="card-body">
                            <div class="row tampilnull">
                                <div class="col-md-12">
                                    <h3 class="text-center text-warning d-block"> BELUM ADA DATA KUISIONER UNTUK
                                        DITAMPILKAN
                                    </h3>
                                </div>
                            </div>
                            <form action="{{ url('admin/kuisioner/postSoal') }}" method="POST" id="box-options">
                                @csrf
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="">Alumni</label>
                                            <select name="alumni_id" class="form-control" required>
                                                <option value="" disabled hidden selected>--- Pilih ---</option>
                                                @foreach ($alumni as $x)
                                                    <option value="{{ $x->id }}">{{ $x->nama }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">

                                        <ol id="tampilList"></ol>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <button class="btn btn-outline-primary btn-sm pull-right">KIRIM JAWABAN</button>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>

    </section>
    <!-- jQuery -->
    <script src="{{ url('public') }}/assets/plugins/jquery/jquery.min.js"></script>
    <script>
        $('#box-options').hide();
        $('.tampilnull').hide('slow');
        $('.nav-tabs .nav-item a').on('click', function() {
            var $id = $(this).attr('id');
            $.ajax({
                url: "{{ url('admin/kuisioner/getSoal') }}/" + $id,
                success: function(datas) {
                    console.log(datas.data)
                    if (datas.data.length > 0) {
                        var lisData = '';
                        for (const soal of datas.data) {
                            console.log(soal);
                            lisData += `
                                <li>${soal.title_soal}</li>
                                <ul>
                                    ${
                                        soal.pilihan.map(function(pilihan){
                                            return(
                                                `<li><input type="checkbox" name="pilihan_id[]" value="${soal.id}">${pilihan.title_pilihan}</li>`
                                            )
                                        }).join('')
                                    }
                                </ul>
                            
                            `;
                        }
                        $('#tampilList').html(lisData);
                        $('#box-options').show('slow');
                        $('.tampilnull').hide('slow');
                    } else {
                        $('#box-options').hide('slow');
                        $('.tampilnull').show('slow');
                    }

                }
            });

        })
    </script>


</x-layout.app>
