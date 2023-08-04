@extends('layouts.master')
@section('content')
<div class="main">
	<div class="main-content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Selamat Datang {{auth()->user()->name}}</h3>

									<h1>Grafik  Pengajuan Pencairan Publikasi</h1>
    <div id="container"></div>
										<script src="https://code.highcharts.com/highcharts.js"></script>
	<script type="text/javascript">
	    var approved = <?php echo json_encode($approved)?>;

	    var rejected = <?php echo json_encode($rejected)?>;
	    Highcharts.chart('container', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Grafik Pengajuan Pencairan'
    },
    subtitle: {
        text: 'Source: btp.ac.id'
    },
    xAxis: {
        categories: [
            'Pengajuan'
        ],
        crosshair: true
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Total'
        }
    },
    tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
       
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
        name: 'diterima',
        data: [approved, ]

    }, {
        name: 'ditolak',
        data: [rejected,]


    }]
});
	</script>
									


									</div>
								</div>
								
							</div>
				</div>
			</div>
		
		
	</div>

@stop
