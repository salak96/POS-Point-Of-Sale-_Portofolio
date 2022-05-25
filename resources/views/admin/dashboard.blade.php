@extends('layouts.admin-layout',
[
'title' => "Dashboard ADMIN",

]
)

@section('content')
<!-- Content Row -->
<div class="row">

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            Total Kategori</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $kategori }}</div>
                    </div>
                    <div class="col-auto">
                        <i class="fa-solid fa-cubes fa-2x text-gray-300"></i>
                    </div>
                    <a href="{{ route('kategori.index') }}" class="btn btn-primary btn-sm">Lihat</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                            Total Produksi</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $produk }}</div>
                    </div>
                        <div class="progress progress-sm mr-11">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 20%"
                                aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    <div class="col-auto">
                        <i class="fa-brands fa-product-hunt fa-2x text-gray-300"></i>
                    </div>
                    <a href="{{ route('produk.index') }}" class="btn btn-success btn-sm">Lihat</a>
                </div>
            </div>
        </div>
    </div>


    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-info shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1"> 
                            Total Supplier
                        </div>
                        <div class="row no-gutters align-items-center">
                            <div class="col-auto">
                                <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{ $supplier }}</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fa-solid fa-truck-field fa-2x text-gray-300"></i>
                    </div>
                    <a href="{{ route('supplier.index') }}" class="btn btn-info btn-sm">Lihat</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Pending Requests Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-warning shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                            Member</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $member }}</div>
                    </div>

                    <div class="col-auto">
                        <i class="fa-solid fa-people-carry-box fa-2x text-gray-300"></i>
                    </div>
                    <a href="{{ route('member.index') }}" class="btn btn-warning btn-sm">Lihat</a>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- Content Row -->

<div class="row">

    <!-- Area Chart -->
    <div class="col-xl-10 col-lg-7">
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-4 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Grafik Pendapatan {{tanggal_indonesia ($tanggal_awal,false)  }} s/d {{tanggal_indonesia ($tanggal_akhir,false) }}</h6>
                <div class="dropdown no-arrow">
                    <a class="dropdown-toggle" href="{{ route('laporan.index') }}" role="button" id="dropdownMenuLink" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                    </a>
                </div>
            </div>
            <!-- Card Body -->
            <div class="card-body">
                <div id="chart-pendapatan">
                </div>
            </div>
        </div>
    </div>

</div>
@endsection

@push('scripts')
<!-- manual grafik -->
<script src="https://code.highcharts.com/highcharts.js"></script>
<script>
function IDRFormatter(angka, prefix) {
    var number_string = angka.toString().replace(/[^,\d]/g, ''),
        split = number_string.split(','),
        sisa = split[0].length % 3,
        rupiah = split[0].substr(0, sisa),
        ribuan = split[0].substr(sisa).match(/\d{3}/gi);

    if (ribuan) {
        var separator = sisa ? '.' : '';
        rupiah += separator + ribuan.join('.');
    }

    rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
    return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
}
console.log(IDRFormatter(1000, 'Rp. '));  

    $(function() {
  Highcharts.chart('chart-pendapatan', {
    chart: {
        type: 'column'
    },
    labels:{
        formatter : function () {
            return IDRFormatter(this.value, 'Rp.');
        }
    },

    title: {
        text: 'Laporan Pendapatan'
    },

    xAxis: {
        categories: {{ json_encode($data_tanggal) }},
        crosshair: true
    },
    yAxis: {
        title: {
            text: 'Rupiah'
        }
    },

    tooltip: {
        headerFormat: '<span style="font-size:10px">{series.name}</span><table>',
        pointFormat: '<tr><td style="color:{series.color};padding:0">Rp.</td>' +
            '<td style="padding:0"><b>{point.y:.1f} </b></td></tr>',
        footerFormat: '</table>',
        shared: true,
        useHTML: true
    },
    plotOptions: {
        column: {
            pointPadding: 0.2,
            borderWidth: 0
        }
    },
    series: [{
        name: 'Total Pendapatan',
        data: [{{ implode(',', $data_pendapatan) }}]
    
    }]
    
});
});

              
</script>

@endpush

