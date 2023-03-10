<div class="row my-4">
	<div class="">
		<div class="card z-index-2">
			<div class="card-body p-3">
				<div class="bg-gradient-dark border-radius-lg py-3 pe-1 mb-3">
					<div class="chart">
						
						<canvas id="myChart" class="chart-canvas" height="170">
							<?php
    //Inisialisasi nilai variabel awal
    $tgl= "";
    $jumlah=null;
    foreach ($hasil as $item)
    {
        $tang=$item->tanggal;
        $tgl .= "'$tang'". ", ";
        $jum=$item->total;
        $jumlah .= "$jum". ", ";
    }
    ?>
<script>
    var ctx = document.getElementById('myChart').getContext('2d');
    var chart = new Chart(ctx, {
        // The type of chart we want to create
        type: 'bar',
        // The data for our dataset
        data: {
            labels: [<?php echo $tgl; ?>],
            datasets: [{
                label:'Data Penjualan ',
                backgroundColor: ['rgb(255, 99, 132)', 'rgba(56, 86, 255, 0.87)', 'rgb(60, 179, 113)','rgb(175, 238, 239)'],
                borderColor: ['rgb(255, 99, 132)'],
                data: [<?php echo $jumlah; ?>]
            }]
        },
        // Configuration options go here
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero:true
                    }
                }]
            }
        }
    });
</script>
						</canvas>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>