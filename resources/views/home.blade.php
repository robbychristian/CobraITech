@extends('layouts.admintemplate')
@section('content')
    <div class="container">
        {{-- <div class="row justify-content-around">
            <div class="col-xs-12 d-flex col-md-5 card">
                <div class="d-flex justify-content-center align-items-center">
                    <div class="fs-3"></div>
                </div>
            </div>
            <div class="col-xs-12 col-md-5">
            </div>
        </div> --}}

        <div class="row p-3 gap-3 justify-content-center">
            <div class="col-xs-9 col-md-5">
                <div class="row shadow py-2 border-start border-2 border-primary">
                    <div class="col-xs-9 col-md-8 align-items-center justify-content-center d-flex flex-column">
                        <div class="fs-4">Number of Contacts</div>
                        <div class="fs-3">{{ $totalQueries }}</div>
                    </div>
                    <div class="col-xs-9 col-md-4">
                        <canvas id="queriesGraph" style="height: 100px; width: 100px"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-xs-9 col-md-5 ">
                <div class="row shadow py-2 border-start border-2 border-primary">
                    <div class="col-xs-9 col-md-8 align-items-center justify-content-center d-flex flex-column">
                        <div class="fs-4">Number of Applicants</div>
                        <div class="fs-3">{{ $totalApplicants }}</div>
                    </div>
                    <div class="col-xs-9 col-md-4">
                        <canvas id="applicationGraph" style="height: 100px; width: 100px"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-xs-9 col-md-5 ">
                <div class="row shadow py-2 border-start border-2 border-primary">
                    <div class="col-xs-9 col-md-8 align-items-center justify-content-center d-flex flex-column">
                        <div class="fs-4">Number of Visits</div>
                        <div class="fs-3">{{ $totalApplicants }}</div>
                    </div>
                    <div class="col-xs-9 col-md-4">
                        <canvas id="visitsGraph" style="height: 100px; width: 100px"></canvas>
                    </div>
                </div>
            </div>
        </div>







        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.1/chart.min.js"
                integrity="sha512-QSkVNOCYLtj73J4hbmVoOV6KVZuMluZlioC+trLpewV8qMjsWqlIQvkn1KGX2StWvPMdWGBqim1xlC8krl1EKQ=="
                crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script>
            const queriesGraph = document.getElementById('queriesGraph')
            const applicationGraph = document.getElementById('applicationGraph')
            const visitsGraph = document.getElementById('visitsGraph')
            const dataQueries = {
                datasets: [{
                    label: ['Answered', 'Unanswered'],
                    data: [{{ $answered }}, {{ $unanswered }}],
                    backgroundColor: [
                        'rgb(255, 99, 132)',
                        'rgb(99, 132, 255)',
                    ],
                }]
            };
            const dataApplication = {
                datasets: [{
                    label: 'My First Dataset',
                    data: [{{ $totalApplicants }}],
                    backgroundColor: [
                        'rgb(132, 99, 255)',
                    ],
                }]
            }
            const dataVisits = {
                datasets: [{
                    label: 'My First Dataset',
                    data: [{{ $uniqueVisits }}],
                    backgroundColor: [
                        'rgb(255, 99, 132)',
                    ],
                }]
            }
            const chart1 = new Chart(queriesGraph, {
                type: 'doughnut',
                data: dataQueries,
            })

            const chart2 = new Chart(applicationGraph, {
                type: 'doughnut',
                data: dataApplication,
            })
            const chart3 = new Chart(visitsGraph, {
                type: 'doughnut',
                data: dataVisits,
            })
        </script>
    </div>
@endsection
