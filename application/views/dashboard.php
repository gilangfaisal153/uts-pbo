<hr><div class="card-header bg-white">
<h5 class="text-black op-7 mb-2"><img src="assets/img/logovaksin.png" width="37px"> Halo, <b class="text-info"><?= userdata('nama'); ?></b></h5>
        <h4 class="h5 align-middle m-0 font-weight-bold text-danger">
            <marquee>Selamat Datang Di Sistem Informasi Aplikasi Data Vaksin || Sistem informasi satu data penerima vaksin COVID-19 dibuat untuk mengintegrasikan data dari berbagai sumber menjadi satu data dan menghindari informasi data ganda. Sistem yang dibangun akan mendata penerima vaksin melalui filtering data individu penerima vaksin prioritas (by name, by address).</marquee>
        </h4>
    </div>

<br>
<div class="row">

    <div class="col-xl-3 col-6 mb-4">
        <div class="card border-left-primary h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1"><a href="barang" style="text-decoration:none;color:#2A6AFF" >Total Data Vaksin</a></div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $barang; ?></div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-bars fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1"><a href="supplier" style="text-decoration:none; color:#49FF00 " >Total Pasien</a></div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $supplier; ?></div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-users fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
    <div class="col-xl-3 col-6 mb-4">
        <div class="card border-left-info shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-info text-uppercase mb-1"><a href="barang" style="text-decoration:none;color:#0FBDF1">Total jadwal</a></div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $stok; ?></div>
                            </div>
                            <div class="col-auto">
                                <div class="progress progress-sm mr-2">
                                    <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
      <div class="col-xl-3 col-6 mb-4">
        <div class="card border-left-warning shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1"><a href="barangmasuk" style="text-decoration:none; color:#FFA600  " >Total Sertifikasi Vaksin</a></div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $barang_masuk; ?></div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-download fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
<div class="row">

    <!-- Area Chart -->
    <div class="col-xl-8 col-lg-7">
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header bg-primary py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-white">Total Data Vaksin Perbulan pada Tahun <?= date('Y'); ?></h6>
            </div>
            <!-- Card Body -->
            <div class="card-body">
                <div class="chart-area">
                    <div class="chartjs-size-monitor">
                        <div class="chartjs-size-monitor-expand">
                            <div class=""></div>
                        </div>
                        <div class="chartjs-size-monitor-shrink">
                            <div class=""></div>
                        </div>
                    </div>
                    <canvas id="myAreaChart" width="669" height="320" class="chartjs-render-monitor" style="display: block; width: 669px; height: 320px;"></canvas>
                </div>
            </div>
        </div>
    </div>

    <!-- Pie Chart -->
    <div class="col-xl-4 col-lg-5">
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header bg-primary py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-white">Data Vaksin</h6>
            </div>
            <!-- Card Body -->
            <div class="card-body">
                <div class="chart-pie pt-4 pb-2">
                    <div class="chartjs-size-monitor">
                        <div class="chartjs-size-monitor-expand">
                            <div class=""></div>
                        </div>
                        <div class="chartjs-size-monitor-shrink">
                            <div class=""></div>
                        </div>
                    </div>
                    <canvas id="myPieChart" width="302" height="245" class="chartjs-render-monitor" style="display: block; width: 302px; height: 245px;"></canvas>
                </div>
                <div class="mt-4 text-center small">
                    <span class="mr-2">
                        <i class="fas fa-circle text-primary"></i> Jadwal
                    </span>
                    <span class="mr-2">
                        <i class="fas fa-circle text-danger"></i> Pasien
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>