<x-layout_alumni.app>
    <section class="content-header">
        <h2 class="title">KUISIONER</h2>
    </section>


    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h2 class="card-title">MOHON LENGKAPI ISIAN KUISIONER FORM DIBAWAH INI</h2>
                </div>
                <div class="card-body">

                    <form action="{{ url('alumni/kuisioner/tambah') }}" method="POST">
                        <div class="col-md-12">

                            @csrf
                            @foreach ($list as $item)
                                <ul style="list-style: none;padding:0">
                                    <li>{{ $item->title }}</li>
                                    <li>
                                        <ol>
                                            @foreach ($item->soal as $soal)
                                                <li>{{ $soal->title_soal }}</li>
                                                <ul style="list-style: none;padding:0">
                                                    @foreach ($soal->pilihan as $pilihan)
                                                        <li>
                                                            <input type="checkbox" name="pilihan_id[]" id=""
                                                                class="checkbox" value={{ $pilihan->id }}>
                                                            <span>{{ $pilihan->title_pilihan }}</span>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            @endforeach
                                        </ol>
                                    </li>
                                </ul>
                            @endforeach

                        </div>
                        <div class="col-md-12">
                            <button class="btn btn-primary">KIRIM JAWABAN</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>

    </div>
    {{-- 
    @if ($list[0] != null)
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2 class="card-title">MOHON LENGKAPI ISIAN KUISIONER FORM DIBAWAH INI</h2>
                    </div>
                    <div class="card-body">

                        <form action="{{ url('alumni/kuisioner/tambah') }}" method="POST">
                            <div class="col-md-12">

                                @csrf
                                @foreach ($list as $item)
                                    <ul style="list-style: none;padding:0">
                                        <li>{{ $item->title }}</li>
                                        <li>
                                            <ol>
                                                @foreach ($item->soal as $soal)
                                                    <li>{{ $soal->title_soal }}</li>
                                                    <ul style="list-style: none;padding:0">
                                                        @foreach ($soal->pilihan as $pilihan)
                                                            <li>
                                                                <input type="checkbox" name="pilihan_id[]"
                                                                    id="" class="checkbox"
                                                                    value={{ $pilihan->id }}>
                                                                <span>{{ $pilihan->title_pilihan }}</span>
                                                            </li>
                                                        @endforeach
                                                    </ul>
                                                @endforeach
                                            </ol>
                                        </li>
                                    </ul>
                                @endforeach

                            </div>
                            <div class="col-md-12">
                                <button class="btn btn-primary">KIRIM JAWABAN</button>
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
                    <h2 class="text-empty">Terimakasih telah mengisi form kuisioner studi !</h2>
                </div>
            </div>
        </div>
    @endif --}}

</x-layout_alumni.app>
