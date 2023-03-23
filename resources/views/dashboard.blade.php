@extends('layout.main')
@section('judul', 'Statistik')
@section('content')
<div class="card">
    <div class="card-body">
        <div class="row">
        <div class="col-md-3 ml-0">
            <label for="">From</label>
            <input class="form-control" type="date">
        </div>
        <div class="col-md-3 ml-0">
            <label for="">To</label>
            <input class="form-control" type="date">
        </div>
        <div class="col-md-3 ml-0">
            <label for="">Filter</label>
            <select class="form-control" name="" id="">
                <option value="">Today</option>
            </select>
        </div>
        <div class="col-md-3 ml-0">
            <label for="">Export</label>
            <select class="form-control" name="" id="">
                <option value="">Export</option>
            </select>
        </div>
    </div>
    </div>
</div>
<div class="row">
<div class="card col-md-6">
    <div class="card-header">Jumlah Tamu</div>
    <div class="card-body">
                <div>
                    <canvas id="myline"></canvas>
                  </div>

                  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

                  <script>
                        const cty = document.getElementById('myline');

                        new Chart(cty, {
                        type: 'line',
                        data: {
                            labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
                            datasets: [{
                            label: '# of Votes',
                            data: [12, 19, 3, 5, 2, 3],
                            borderWidth: 1
                            }]
                        },
                        options: {
                            scales: {
                            y: {
                                beginAtZero: true
                            }
                            }
                        }
                        });
                </script>
    </div>

</div>
<div class="card col-md-6">
    <div class="card-header">Jumlah Kunjungan</div>
    <div class="card-body">

            <div>
                <canvas id="myChart"></canvas>
            </div>

              <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

              <script>
                    const ctx = document.getElementById('myChart');

                    new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
                        datasets: [{
                        label: '# of Votes',
                        data: [12, 19, 3, 5, 2, 3],
                        borderWidth: 1
                        }]
                    },
                    options: {
                        scales: {
                        y: {
                            beginAtZero: true
                        }
                        }
                    }
                    });
              </script>
    </div>
</div>
</div>
@endSection()
