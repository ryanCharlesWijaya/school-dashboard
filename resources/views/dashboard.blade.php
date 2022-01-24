@extends('welcome')

@section('content')
    <div class="row px-4">
        <div class="col-3 mb-4">
            <div class="bg-white p-4">
                <h6 class="fw-light">Total Registered Student (2021)</h6>
                <span><h1>2000<span class="fs-5 fw-bold ms-2">Student</span></h1></span>
            </div>
        </div>
        <div class="col-3 mb-4">
            <div class="bg-white p-4">
                <h6 class="fw-light">New Enrollment (2021)</h6>
                <span><h1>2029445<span class="fs-5 fw-bold ms-2">Student</span></h1></span>
            </div>
        </div>
        <div class="col-3 mb-4">
            <div class="bg-white p-4">
                <h6 class="fw-light">Total Expected Collection (2021)</h6>
                <span><h1>31000<span class="fs-5 fw-bold ms-2">Student</span></h1></span>
            </div>
        </div>
        <div class="col-3 mb-4">
            <div class="bg-white p-4">
                <h6 class="fw-light">Progress Collection (2021)</h6>
                <span><h1>20<span class="fs-5 fw-bold ms-2">Student</span></h1></span>
            </div>
        </div>
        <div class="col-12 mb-4">
            <div class="card">
                <div class="card-header py-5">
                    <h1 class="m-0">2021 : Number Of Registered Students</h1>
                </div>
                <div class="card-body">
                    <div id="kt_apexcharts_3" style="height: 350px;"></div>
                </div>
            </div>
        </div>
        <div class="col-12 mb-4">
            <div class="card">
                <div class="card-header py-5 d-block">
                    <h1 class="m-0">Number of Students</h1>
                    <span>More than 400+ new members</span>
                </div>
                <div class="card-body">
                    <table id="kt_datatable_example_2" class="table table-striped table-row-bordered gy-5 gs-7">
                        <thead>
                            <tr class="fw-bold fs-6 text-gray-800">
                                <th>Name</th>
                                <th>Position</th>
                                <th>Office</th>
                                <th>Age</th>
                                <th>Start date</th>
                                <th>Salary</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Tiger Nixon</td>
                                <td>System Architect</td>
                                <td>Edinburgh</td>
                                <td>61</td>
                                <td>2011/04/25</td>
                                <td>$320,800</td>
                            </tr>
                            <tr>
                                <td>Garrett Winters</td>
                                <td>Accountant</td>
                                <td>Tokyo</td>
                                <td>63</td>
                                <td>2011/07/25</td>
                                <td>$170,750</td>
                            </tr>
                    
                        </tbody>
                        <tfoot>
                            <tr class="border-top fw-bold fs-6 text-gray-800">
                                <th>Name</th>
                                <th>Position</th>
                                <th>Office</th>
                                <th>Age</th>
                                <th>Start date</th>
                                <th>Salary</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-12 mb-4">
            <div class="card">
                <div class="card-header py-5">
                    <h1 class="m-0">2021 : Total Collection Progress as At Month of May</h1>
                </div>
                <div class="card-body">
                    <div id="kt_apexcharts_4"></div>
                </div>
            </div>
        </div>
        <div class="col-12 mb-4">
            <div class="card">
                <div class="card-header py-5">
                    <h1 class="m-0">2021 : Expected Collection and Total Paid</h1>
                </div>
                <div class="card-body">
                    <div id="kt_apexcharts_5" style="height: 350px;"></div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('script')

{{-- Number Of Registered Student --}}
<script>
    var element = document.getElementById('kt_apexcharts_3');

    var height = parseInt(KTUtil.css(element, 'height'));
    var labelColor = KTUtil.getCssVariableValue('--bs-gray-500');
    var borderColor = KTUtil.getCssVariableValue('--bs-gray-200');

    var baseColor = KTUtil.getCssVariableValue('--bs-success');
    var baseLightColor = KTUtil.getCssVariableValue('--bs-light-success');
    var secondaryColor = KTUtil.getCssVariableValue('--bs-danger');
    var secondaryLightColor = KTUtil.getCssVariableValue('--bs-light-danger');

    var options = {
        series: [{
            name: 'Net Profit',
            data: [60, 50, 80, 40, 100, 60]
        }, {
            name: 'Revenue',
            data: [70, 60, 110, 40, 50, 70]
        }],
        chart: {
            fontFamily: 'inherit',
            type: 'area',
            height: height,
            toolbar: {
                show: false
            }
        },
        plotOptions: {},
        legend: {
            show: false
        },
        dataLabels: {
            enabled: false
        },
        fill: {
            type: 'solid',
            opacity: 0.8
        },
        stroke: {
            colors: [baseColor, secondaryColor],
            curve: 'smooth'
        },
        xaxis: {
            categories: ['Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul'],
            axisBorder: {
                show: false,
            },
            axisTicks: {
                show: false
            },
            labels: {
                style: {
                    colors: labelColor,
                    fontSize: '12px'
                }
            },
            crosshairs: {
                position: 'front',
                stroke: {
                    color: labelColor,
                    width: 1,
                    dashArray: 3
                }
            },
            tooltip: {
                enabled: true,
                formatter: undefined,
                offsetY: 0,
                style: {
                    fontSize: '12px'
                }
            }
        },
        yaxis: {
            labels: {
                style: {
                    colors: labelColor,
                    fontSize: '12px'
                }
            }
        },
        states: {
            normal: {
                filter: {
                    type: 'none',
                    value: 0
                }
            },
            hover: {
                filter: {
                    type: 'none',
                    value: 0
                }
            },
            active: {
                allowMultipleDataPointsSelection: false,
                filter: {
                    type: 'none',
                    value: 0
                }
            }
        },
        tooltip: {
            style: {
                fontSize: '12px'
            },
            y: {
                formatter: function (val) {
                    return '$' + val + ' thousands'
                }
            }
        },
        colors: [baseLightColor, secondaryLightColor],
        grid: {
            borderColor: borderColor,
            strokeDashArray: 4,
            yaxis: {
                lines: {
                    show: true
                }
            }
        },
        markers: {
            colors: [baseLightColor, secondaryLightColor],
            strokeColor: [baseLightColor, secondaryLightColor],
            strokeWidth: 3
        }
    };

    var chart = new ApexCharts(element, options);
    chart.render();
</script>

{{-- Total Collection Progress as At Month of May --}}
<script>
    var element = document.getElementById('kt_apexcharts_4');

    var options = {
        series: [44, 55, 41, 17, 15],
        chart: {
            type: 'donut',
        },
        plotOptions: {
            pie: {
                startAngle: -90,
                endAngle: 90,
                offsetY: 10
            }
            },
            grid: {
            padding: {
                bottom: -80
            }
        },
        responsive: [{
            breakpoint: 480,
            options: {
                chart: {
                    width: 100
                },
                legend: {
                    position: 'right'
                }
            }
        }, {
            breakpoint: 2560,
            options: {
                chart: {
                    width: 400
                },
                legend: {
                    position: 'right'
                }
            }
        }]
    };

    var chart = new ApexCharts(element, options);
    chart.render();
</script>

{{-- Total Expected Collection and Total Paid --}}
<script>
    var element = document.getElementById('kt_apexcharts_5');

    var height = parseInt(KTUtil.css(element, 'height'));
    var labelColor = KTUtil.getCssVariableValue('--bs-gray-500');
    var borderColor = KTUtil.getCssVariableValue('--bs-gray-200');

    var baseColor = KTUtil.getCssVariableValue('--bs-primary');
    var baseLightColor = KTUtil.getCssVariableValue('--bs-light-primary');
    var secondaryColor = KTUtil.getCssVariableValue('--bs-info');

    var options = {
        series: [{
            name: 'Net Profit',
            type: 'bar',
            data: [40, 50, 65, 70, 50, 30]
        }, {
            name: 'Revenue',
            type: 'bar',
            data: [20, 20, 25, 30, 30, 20]
        }, {
            name: 'Expenses',
            type: 'area',
            data: [50, 80, 60, 90, 50, 70]
        }],
        chart: {
            fontFamily: 'inherit',
            height: height,
            toolbar: {
                show: false
            }
        },
        plotOptions: {
            bar: {
                stacked: true,
                horizontal: false,
                endingShape: 'rounded',
                columnWidth: ['12%']
            },
        },
        legend: {
            show: false
        },
        dataLabels: {
            enabled: false
        },
        stroke: {
            curve: 'smooth',
            show: true,
            width: 2,
            colors: ['transparent']
        },
        xaxis: {
            categories: ['Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul'],
            axisBorder: {
                show: false,
            },
            axisTicks: {
                show: false
            },
            labels: {
                style: {
                    colors: labelColor,
                    fontSize: '12px'
                }
            }
        },
        yaxis: {
            max: 120,
            labels: {
                style: {
                    colors: labelColor,
                    fontSize: '12px'
                }
            }
        },
        fill: {
            opacity: 1
        },
        states: {
            normal: {
                filter: {
                    type: 'none',
                    value: 0
                }
            },
            hover: {
                filter: {
                    type: 'none',
                    value: 0
                }
            },
            active: {
                allowMultipleDataPointsSelection: false,
                filter: {
                    type: 'none',
                    value: 0
                }
            }
        },
        tooltip: {
            style: {
                fontSize: '12px'
            },
            y: {
                formatter: function (val) {
                    return '$' + val + ' thousands'
                }
            }
        },
        colors: [baseColor, secondaryColor, baseLightColor],
        grid: {
            borderColor: borderColor,
            strokeDashArray: 4,
            yaxis: {
                lines: {
                    show: true
                }
            },
            padding: {
                top: 0,
                right: 0,
                bottom: 0,
                left: 0
            }
        }
    };

    var chart = new ApexCharts(element, options);
    chart.render();
</script>
@endpush