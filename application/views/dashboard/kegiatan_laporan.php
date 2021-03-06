<div class="card card-body">
    <h3>Detail Dashboard Laporan Kegiatan</h3>
    <div class="form-group">
        <div class="row">
            <!-- <div class="col-md-3">
                <select name="" id="" class="form-control">
                <option value="">- Tahun Ajaran -</option>
                <option value="">- 2016 -</option>
                <option value="">- 2017 -</option>
                <option value="">- 2018 -</option>
                <option value="">- 2019 -</option>
                <option value="">- 2020 -</option>
                </select>
            </div> -->
            <div class="col-md-3">
                <select name="" id="" class="form-control">
                    <option value="">- Terkait -</option>
                    <option value="">OSIS</option>
                    <option value="">TIM SEKOLAH</option>
                </select>
            </div>
            <div class="col-md-3">
                <button class="btn  btn-info">Cari</button>
            </div>
        </div>
    </div> <br>

    <div class="card card-body">
    <div class="row">
        <div class="col-md-4">
           

            <h6> <i class="fa fa-info-circle mr-2 mt-3"></i>Detail Informasi Rata - rata Nilai</h6>
            <ol>
            
                <li>
                    <div class="row h6">
                        <div class="col-md-6">Basket </div>
                        <div class="col-md-6">: 12</div>
                    </div>
                </li>
                <li>
                    <div class="row h6">
                        <div class="col-md-6">Futsal </div>
                        <div class="col-md-6">: 5</div>
                    </div>
                </li>
                <li>
                    <div class="row h6">
                        <div class="col-md-6">Renang </div>
                        <div class="col-md-6">: 6</div>
                    </div>
                </li>
                <li>
                    <div class="row h6">
                        <div class="col-md-6">Bulu Tangkis</div>
                        <div class="col-md-6">: 10</div>
                    </div>
                </li>
                <li>
                    <div class="row h6">
                        <div class="col-md-6">Catur</div>
                        <div class="col-md-6">: 1</div>
                    </div>
                </li>
            </ol>
        </div>
        <div class="col-md-8">
           <h5><b> </b></h5>
           <canvas id="dashSiswa"  height=""></canvas>
        </div>
    </div>
    </div>
    <div class="row">
        <div class="col md-12">
        <a href="<?=base_url('')?>" class="btn btn-sm btn-success float-right mt-2">Unduh</a>
        </div>
    </div>
</div>

<div class="card card-body">
<h3>Detail Laporan Keuangan</h3>
    <div class="card card-body">
    <div class="row">
        <div class="col-md-4">
           

            <h6> <i class="fa fa-info-circle mr-2 mt-3"></i>Grafik Efektifitas Penggunaan Biaya Kegiatan</h6>
            <ol>
            
                <li>
                    <div class="row h6">
                        <div class="col-md-6">Basket </div>
                        <div class="col-md-6">: Rp. 12.000.000</div>
                    </div>
                </li>
                <li>
                    <div class="row h6">
                        <div class="col-md-6">Futsal </div>
                        <div class="col-md-6">: Rp. 5.000.000</div>
                    </div>
                </li>
                <li>
                    <div class="row h6">
                        <div class="col-md-6">Renang </div>
                        <div class="col-md-6">: Rp. 6.000.000</div>
                    </div>
                </li>
                <li>
                    <div class="row h6">
                        <div class="col-md-6">Bulu Tangkis</div>
                        <div class="col-md-6">: Rp. 10.000.000</div>
                    </div>
                </li>
                <li>
                    <div class="row h6">
                        <div class="col-md-6">Catur</div>
                        <div class="col-md-6">: Rp. 1.000.000</div>
                    </div>
                </li>
            </ol>
        </div>
        <div class="col-md-8">
           <h5><b> </b></h5>
           <canvas id="chartBiaya"  height=""></canvas>
        </div>
        </div>
    </div>
    <div class="row">
        <div class="col md-12">
        <a href="<?=base_url('')?>" class="btn btn-sm btn-success float-right mt-2">Unduh</a>
        </div>
    </div>
    </div>
</div>

<script>
var dash1 = document.getElementById('dashSiswa').getContext('2d');
var dashSiswa = new Chart(dash1, {
	type: 'bar',
	data: {
		labels: ['2016', '2017','2018','2019','2020'],
		datasets: [{
			label: 'Basket',
			data: [12, 19, 10, 17, 2],
			backgroundColor: [
				'rgba(255, 99, 132, 0.2)',
				'rgba(255, 99, 132, 0.2)',
				'rgba(255, 99, 132, 0.2)',
				'rgba(255, 99, 132, 0.2)',
				'rgba(255, 99, 132, 0.2)',
			],
            borderWidth: 2 ,
            fill: true
        },
        {
            label: 'Futsal',
			data: [5, 12, 16, 19, 22],
			backgroundColor: [
                'rgba(54, 162, 235, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(54, 162, 235, 0.2)',
			],
            borderWidth: 2 ,
            fill: true
            
        },
        {
            label: 'Renang',
			data: [6, 10, 15, 20, 25],
			backgroundColor: [
                '#EE4B6A',
                '#EE4B6A',
                '#EE4B6A',
                '#EE4B6A',
                '#EE4B6A',
                
                
			],
            borderWidth: 2 ,
            fill: true
            
        },
        {
            label: 'Bulu Tangkis',
			data: [10, 17, 21, 3, 30],
			backgroundColor: [
                '#73EEDC',
                '#73EEDC',
                '#73EEDC',
                '#73EEDC',
                '#73EEDC',
                
			],
            borderWidth: 2 ,
            fill: true
            
        },
        {
            label: 'Catur',
			data: [1, 18, 26, 29, 32],
			backgroundColor: [
                '#F9564F',
                '#F9564F',
                '#F9564F',
                '#F9564F',
                '#F9564F'
                
			],
            borderWidth: 2 ,
            fill: true
            
		}
    ]
}
});
var chart = document.getElementById('chartBiaya').getContext('2d');
var chartBiaya = new Chart(chart, {
	type: 'bar',
	data: {
		labels: ['2016', '2017','2018','2019','2020'],
		datasets: [{
			label: 'Basket',
			data: [12, 19, 10, 17, 2],
			backgroundColor: [
				'rgba(255, 99, 132, 0.2)',
				'rgba(255, 99, 132, 0.2)',
				'rgba(255, 99, 132, 0.2)',
				'rgba(255, 99, 132, 0.2)',
				'rgba(255, 99, 132, 0.2)',
			],
            borderWidth: 2 ,
            fill: true
        },
        {
            label: 'Futsal',
			data: [5, 12, 16, 19, 22],
			backgroundColor: [
                'rgba(54, 162, 235, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(54, 162, 235, 0.2)',
			],
            borderWidth: 2 ,
            fill: true
            
        },
        {
            label: 'Renang',
			data: [6, 10, 15, 20, 25],
			backgroundColor: [
                '#EE4B6A',
                '#EE4B6A',
                '#EE4B6A',
                '#EE4B6A',
                '#EE4B6A',
                
                
			],
            borderWidth: 2 ,
            fill: true
            
        },
        {
            label: 'Bulu Tangkis',
			data: [10, 17, 21, 3, 30],
			backgroundColor: [
                '#73EEDC',
                '#73EEDC',
                '#73EEDC',
                '#73EEDC',
                '#73EEDC',
                
			],
            borderWidth: 2 ,
            fill: true
            
        },
        {
            label: 'Catur',
			data: [1, 18, 26, 29, 32],
			backgroundColor: [
                '#F9564F',
                '#F9564F',
                '#F9564F',
                '#F9564F',
                '#F9564F'
                
			],
            borderWidth: 2 ,
            fill: true
            
		}
    ]
}
});
</script>