<x-layout.app>
    <x-container.header>
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Dashboard</h1>
            </div>
        </div>
    </x-container.header>
    <x-container.content>
        <div class="row">
            <div class="col-lg-3 col-6">
                <x-box-info.box bg="bg-info" icons="ion-bag" count="30" countid="sudah" title="SUDAH BEKERJA" />
            </div>
            <div class="col-lg-3 col-6">
                <x-box-info.box bg="bg-success" icons="ion-bag" count="30" countid="belum" title="BELUM BEKERJA" />
            </div>
            <div class="col-lg-3 col-6">
                <x-box-info.box bg="bg-primary" icons="ion-bag" count="30" countid="melanjutkan"
                    title="MELANJUTKAN STUDY" />
            </div>
            <div class="col-lg-3 col-6">
                <x-box-info.box bg="bg-danger" icons="ion-bag" count="30" title="TOTAL ALUMNI" />
            </div>
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12 col-12">
                <x-card.card>
                    <x-card.card-header title="STATISTIK DATA ALUMNI PER PRODI" />
                    <x-card.card-body>
                        <div class="chart" id="chart"></div>
                    </x-card.card-body>
                </x-card.card>
            </div>

        </div>
        <!-- /.row -->
    </x-container.content>


    <!-- Main content -->
    <!-- jQuery -->
    <script src="{{ url('public') }}/assets/plugins/jquery/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script>
        var options = {
            chart: {
                width: "100%",
                height: 380,
                type: "bar"
            },
            plotOptions: {
                bar: {
                    horizontal: true
                }
            },
            dataLabels: {
                enabled: false
            },
            stroke: {
                width: 0,
                colors: ["#fff"]
            },
            series: [{
                name: 'sales',
                data: [30, 40, 35, 50, 49, 60, 70, 91, 125]
            }],
            xaxis: {
                categories: [1991, 1992, 1993, 1994, 1995, 1996, 1997, 1998, 1999]
            },
            responsive: [{
                breakpoint: 1000,
                options: {
                    plotOptions: {
                        bar: {
                            horizontal: false
                        }
                    },
                    legend: {
                        position: "bottom"
                    }
                }
            }]
        }

        var chart = new ApexCharts(document.querySelector("#chart"), options);

        chart.render();

        $.ajax({
            url: "{{ url('admin/dataChart') }}",
            type: 'GET',
            success: function(data) {

                var sudah = $('#sudah');
                var belum = $('#belum');
                var melanjutkan = $('#melanjutkan');

                var datasudah = data["BEKERJA"];
                var databelum = data["BELUMBEKERJA"];
                var datalanjut = data["MELANJUTKANSTUDY"];
                var datad3 = data["D3"];
                var datad4 = data["D4"];
                var dataMap = data["DATA PRODI"];

                sudah[0].innerHTML = datasudah;
                belum[0].innerHTML = databelum;
                melanjutkan[0].innerHTML = datalanjut;

                var newData = dataMap.map((datas, index) => {
                    return datas.total;
                });

                var newCategories = dataMap.map((datas) => datas.nama_prodi);

                // Update x-axis categories and series data
                chart.updateOptions({
                    xaxis: {
                        categories: newCategories
                    },
                    series: [{
                        name: 'JUMLAH ALUMNI',
                        data: newData
                    }]
                });

                // dataMap.map((datas, index) => {
                //     var namaprodi = datas.nama_prodi;
                //     var jumlahalumni = datas.total;

                // })

                // console.log(dataSudah)
            },
        });
    </script>

</x-layout.app>
