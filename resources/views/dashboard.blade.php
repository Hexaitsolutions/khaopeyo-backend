@extends('layouts.app')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-xl-3 col-lg-6 mb-4">
                <div class="card card-stats mb-4 mb-xl-0" style="border-bottom: 2px solid #FF9F43;">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-auto">
                                <div class="badge p-2" style="background-color: #FF4C5129;">
                                    <img src="assets/icons/shopping-cart.png">
                                </div>
                            </div>
                            <div class="col my-auto">
                                <span class="h2 font-weight-bold mb-0">0</span>
                            </div>

                        </div>
                        <div class="row mt-1">
                            <div class="col">
                                <span style="color: #2F2B3DB2;">Orders</span>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col">
                                <span class="me-2" style="color: #2F2B3D">-8.2%</span><span
                                    class="text-muted">than last week</span>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 mb-4">
                <div class="card card-stats mb-4 mb-xl-0" style="border-bottom: 2px solid #FF9F43;">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-auto">
                                <div class="badge  p-2" style="background-color: #FFF0FF">
                                    <img src="assets/icons/Finance.png"/>
                                </div>
                            </div>
                            <div class="col my-auto">
                                <span class="h2 font-weight-bold mb-0">0</span>
                            </div>

                        </div>
                        <div class="row mt-1">
                            <div class="col">
                                <span style="color: #2F2B3DB2;">Sales Volume</span>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col">
                                <span class="me-2" style="color: #2F2B3D">-8.2%</span><span
                                    class="text-muted">than last week</span>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 mb-4">
                <div class="card card-stats mb-4 mb-xl-0" style="border-bottom: 2px solid #FF9F43;">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-auto">
                                <div class="badge p-2" style="background-color: #FF4C5129;">
                                    <img src="assets/icons/Restaurant.png"/>
                                </div>
                            </div>
                            <div class="col my-auto">
                                            <span
                                                class="h2 font-weight-bold mb-0">0</span>
                            </div>

                        </div>
                        <div class="row mt-1">
                            <div class="col">
                                <span style="color: #2F2B3DB2;">Number of Restaurants</span>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col">
                                <span class="me-2" style="color: #2F2B3D">-8.2%</span><span
                                    class="text-muted">than last week</span>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 mb-4">
                <div class="card card-stats mb-4 mb-xl-0" style="border-bottom: 2px solid #FF9F43;">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-auto">
                                <div class="badge p-2" style="background-color: #FFF0FF">
                                    <img src="assets/icons/clock.png">
                                </div>
                            </div>
                            <div class="col my-auto">
                                <span class="h2 font-weight-bold mb-0">0</span>
                            </div>
                        </div>
                        <div class="row mt-1">
                            <div class="col">
                                <span style="color: #2F2B3DB2;">Views</span>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col">
                                <span class="me-2" style="color: #2F2B3D">-2.4%</span><span
                                    class=" text-muted">than last week</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-xl-4 col-12">
                <div class="row">
                    <!-- Profit last month -->
                    <div class="col-xl-6 mb-4 col-md-3 col-6">
                        <div class="card">
                            <div class="card-header pb-0">
                                <h5 class="card-title mb-0">Total Fee</h5>
                                <small class="text-muted">Last Month</small>
                            </div>
                            <div class="card-body">
                                <div id="profitLastMonth"></div>
                                <div class="d-flex justify-content-between align-items-center mt-3 gap-3">
                                    <h5 class="mb-0">$700k</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/ Profit last month -->
                    <!-- Expenses -->
                    <div class="col-xl-6 mb-4 col-md-3 col-6">
                        <div class="card">
                            <div class="card-header pb-0">
                                <h5 class="card-title mb-0">Delivery Fee</h5>
                                <small class="text-muted">Expenses</small>
                            </div>
                            <div class="card-body">
                                <div id="expensesChart" class="mt-3"></div>
                                <div class="mt-md-2 text-center mt-lg-3 mt-3">
                                    <h5 class="mb-0">$622k</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/ Expenses -->


                    <!-- Generated Leads -->
                    <div class="col-xl-12 mb-4 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <div class="d-flex flex-column">
                                        <div class="card-title mb-auto">
                                            <h5 class="mb-1 text-nowrap">Drivers</h5>
                                            <small>Monthly Report</small>
                                        </div>
                                        <div class="chart-statistics">
                                            <h3 class="card-title mb-1">200 new joins</h3>
                                            <small class="text-success text-nowrap fw-medium"
                                            ><i class="ti ti-chevron-up me-1"></i> 15.8%</small
                                            >
                                        </div>
                                    </div>
                                    <div id="generatedLeadsChart"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/ Generated Leads -->
                </div>
            </div>

            <!-- Revenue Report -->
            <div class="col-12 col-xl-8 mb-4">
                <div class="card">
                    <div class="card-body p-0">
                        <div class="row row-bordered g-0">
                            <div class="col-md-8 position-relative p-4">
                                <div class="card-header d-inline-block p-0 text-wrap position-absolute">
                                    <h5>Revenue Report</h5>
                                </div>
                                <div id="totalRevenueChart" class="mt-n1"></div>
                            </div>
                            <div class="col-md-4 p-4">
                                <div class="text-center mt-4">
                                    <div class="dropdown">
                                        <button
                                            style="color:#FF2A4C; background-color: #FFE2E3 ; border-color:#FFE2E3 "
                                            class="btn btn-sm  dropdown-toggle"
                                            type="button"
                                            id="budgetId"
                                            data-bs-toggle="dropdown"
                                            aria-haspopup="true"
                                            aria-expanded="false">
                                            <script>
                                                document.write(new Date().getFullYear());
                                            </script>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-end"
                                             aria-labelledby="budgetId">
                                            <a class="dropdown-item prev-year1" href="javascript:void(0);">
                                                <script>
                                                    document.write(new Date().getFullYear() - 1);
                                                </script>
                                            </a>
                                            <a class="dropdown-item prev-year2" href="javascript:void(0);">
                                                <script>
                                                    document.write(new Date().getFullYear() - 2);
                                                </script>
                                            </a>
                                            <a class="dropdown-item prev-year3" href="javascript:void(0);">
                                                <script>
                                                    document.write(new Date().getFullYear() - 3);
                                                </script>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <h5 class="text-center pt-4 mb-0">56,800</h5>
                                <h5 class="mb-4 text-center">Total Orders</h5>
                                <div class="px-3">
                                    <div id="budgetChart"></div>
                                </div>
                                <div class="text-center mt-4">
                                    <button type="button" class="btn"
                                            style="background: linear-gradient(270deg, rgba(240, 81, 35, 0.7) 0%, #F05123 100%);color: white">
                                        See Report
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-6 mb-4 col-md-3 col-12">
                <div class="card" id="firstDiv">
                    <div class="card-body">
                        <h5>Delivery Activities</h5>
                        <div style="width: 100%;">
                            <div style="width: 39.7%; display: inline-block;">On the way</div>
                            <div style="width: 38.3%; display: inline-block;">Preparations</div>
                            <div style="width: 12%; display: inline-block">Waiting</div>
                        </div>

                        <div class="progress mt-4" style="height: 40px;">
                            <div class="progress-bar"
                                 style="width: 39.7%; background-color: #F3F2F3;color:black">39.7%
                            </div>
                            <div class="progress-bar" style="width: 38.3%; background-color: #F05123;">
                                28.3%
                            </div>
                            <div class="progress-bar" style="width: 22%; background-color: #FF9700;">14.6%
                            </div>
                        </div>

                        <div class="mt-4">
                            <div class="d-flex justify-content-between" style="margin-bottom: 10px;">
                                <div style="display: flex; align-items: center;">
                                    <img src="assets/svg/icons/Drivers.svg" class="sidebar-svg-icon"
                                         style="    margin-right: 0.5rem;"/>
                                    On the way
                                </div>
                                <div>
                                    <span class="mr-4" style="color: #0a0c0d">12</span>
                                    <span>39.7%</span>
                                </div>
                            </div>
                            <hr style="margin-bottom: 1rem; margin-top: 1rem">
                            <div class="d-flex justify-content-between" style="margin-bottom: 10px;">
                                <div style="display: flex; align-items: center;">
                                    <img src="assets/svg/icons/Row.svg" class="sidebar-svg-icon"
                                         style="    margin-right: 0.5rem;"/>
                                    Preparations
                                </div>
                                <div>
                                    <span class="mr-4" style="color: #0a0c0d">13</span>
                                    <span>28.3%</span>
                                </div>
                            </div>
                            <hr style="margin-bottom: 1rem; margin-top: 1rem">
                            <div class="d-flex justify-content-between">
                                <div style="display: flex; align-items: center;">
                                    <img src="assets/svg/icons/clock.svg" class="sidebar-svg-icon"
                                         style="    margin-right: 0.5rem;"/> Waiting
                                </div>
                                <div>
                                    <span class="mr-4" style="color: #0a0c0d">01</span>
                                    <span>14.6%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 mb-4 col-md-3 col-12" id="secondDiv">
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script type="text/javascript">
        var map = null;
        var clientsAndDriverMarkers = [];


        const borderColor = '#E0E0E0'; // Define a border color, e.g., light gray
        const headingColor = '#333333'; // Define a heading color, e.g., dark gray
        const expensesRadialChartEl = document.querySelector('#expensesChart'),
            expensesRadialChartConfig = {
                chart: {
                    height: 145,
                    sparkline: {
                        enabled: true
                    },
                    parentHeightOffset: 0,
                    type: 'radialBar'
                },
                colors: ['#FF9700'], // Red color code
                series: [68],
                plotOptions: {
                    radialBar: {
                        offsetY: 0,
                        startAngle: -90,
                        endAngle: 90,
                        hollow: {
                            size: '65%'
                        },
                        track: {
                            strokeWidth: '85%',
                            background: borderColor
                        },
                        dataLabels: {
                            name: {
                                show: false
                            },
                            value: {
                                fontSize: '22px',
                                color: headingColor,
                                fontWeight: 500,
                                offsetY: -5
                            }
                        }
                    }
                },
                grid: {
                    show: false,
                    padding: {
                        bottom: 5
                    }
                },
                stroke: {
                    lineCap: 'round'
                },
                labels: ['Progress'],
                responsive: [
                    {
                        breakpoint: 1442,
                        options: {
                            chart: {
                                height: 120
                            },
                            plotOptions: {
                                radialBar: {
                                    dataLabels: {
                                        value: {
                                            fontSize: '18px'
                                        }
                                    },
                                    hollow: {
                                        size: '60%'
                                    }
                                }
                            }
                        }
                    },
                    {
                        breakpoint: 1025,
                        options: {
                            chart: {
                                height: 136
                            },
                            plotOptions: {
                                radialBar: {
                                    hollow: {
                                        size: '85%'
                                    },
                                    dataLabels: {
                                        value: {
                                            fontSize: '18px'
                                        }
                                    }
                                }
                            }
                        }
                    },
                    {
                        breakpoint: 769,
                        options: {
                            chart: {
                                height: 120
                            },
                            plotOptions: {
                                radialBar: {
                                    hollow: {
                                        size: '55%'
                                    }
                                }
                            }
                        }
                    },
                    {
                        breakpoint: 426,
                        options: {
                            chart: {
                                height: 145
                            },
                            plotOptions: {
                                radialBar: {
                                    hollow: {
                                        size: '65%'
                                    }
                                }
                            },
                            dataLabels: {
                                value: {
                                    offsetY: 0
                                }
                            }
                        }
                    },
                    {
                        breakpoint: 376,
                        options: {
                            chart: {
                                height: 105
                            },
                            plotOptions: {
                                radialBar: {
                                    hollow: {
                                        size: '60%'
                                    }
                                }
                            }
                        }
                    }
                ]
            };
        if (typeof expensesRadialChartEl !== undefined && expensesRadialChartEl !== null) {
            const expensesRadialChart = new ApexCharts(expensesRadialChartEl, expensesRadialChartConfig);
            expensesRadialChart.render();
        }


        // Profit last month Line Chart
        // --------------------------------------------------------------------
        //const borderColor = '#E0E0E0'; // Light gray for borders
        const cardColor = '#FFFFFF';   // White color for cards
        //  const borderColor = '#E0E0E0'; // Light gray for borders

        const profitLastMonthEl = document.querySelector('#profitLastMonth'),
            profitLastMonthConfig = {
                chart: {
                    height: 90,
                    type: 'line',
                    parentHeightOffset: 0,
                    toolbar: {
                        show: false
                    }
                },
                grid: {
                    borderColor: borderColor,
                    strokeDashArray: 6,
                    xaxis: {
                        lines: {
                            show: true,
                            colors: '#000'
                        }
                    },
                    yaxis: {
                        lines: {
                            show: false
                        }
                    },
                    padding: {
                        top: -18,
                        left: -4,
                        right: 7,
                        bottom: -10
                    }
                },
                colors: ['#FF2A4C'], // Red color code
                stroke: {
                    width: 2
                },
                series: [
                    {
                        data: [0, 25, 10, 40, 25, 55]
                    }
                ],
                tooltip: {
                    shared: false,
                    intersect: true,
                    x: {
                        show: false
                    }
                },
                xaxis: {
                    labels: {
                        show: false
                    },
                    axisTicks: {
                        show: false
                    },
                    axisBorder: {
                        show: false
                    }
                },
                yaxis: {
                    labels: {
                        show: false
                    }
                },
                tooltip: {
                    enabled: false
                },
                markers: {
                    size: 3.5,
                    fillColor: '#FF2A4C', // Red color code
                    strokeColors: 'transparent',
                    strokeWidth: 3.2,
                    discrete: [
                        {
                            seriesIndex: 0,
                            dataPointIndex: 5,
                            fillColor: cardColor,
                            strokeColor: '#FF2A4C', // Red color code
                            size: 5,
                            shape: 'circle'
                        }
                    ],
                    hover: {
                        size: 5.5
                    }
                },
                responsive: [
                    {
                        breakpoint: 1442,
                        options: {
                            chart: {
                                height: 100
                            }
                        }
                    },
                    {
                        breakpoint: 1025,
                        options: {
                            chart: {
                                height: 86
                            }
                        }
                    },
                    {
                        breakpoint: 769,
                        options: {
                            chart: {
                                height: 93
                            }
                        }
                    }
                ]
            };

        if (profitLastMonthEl !== null) {
            const profitLastMonth = new ApexCharts(profitLastMonthEl, profitLastMonthConfig);
            profitLastMonth.render();
        }
        const chartColors = {
            donut: {
                series1: '#F05123',
                series2: '#FFF1F3',
            }
        };

        const generatedLeadsChartEl = document.querySelector('#generatedLeadsChart'),
            generatedLeadsChartConfig = {
                chart: {
                    height: 147,
                    width: 130,
                    parentHeightOffset: 0,
                    type: 'donut'
                },
                labels: ['Electronic'],
                series: [500, 1000], // Representing one slice out of a total, for example, 1 out of 1000
                colors: [
                    chartColors.donut.series1,
                    chartColors.donut.series2,
                    chartColors.donut.series3,
                    chartColors.donut.series4
                ],
                stroke: {
                    width: 0
                },
                dataLabels: {
                    enabled: false,
                    formatter: function (val, opt) {
                        return parseInt(val) + '%';
                    }
                },
                legend: {
                    show: false
                },
                tooltip: {
                    theme: false
                },
                grid: {
                    padding: {
                        top: 15,
                        right: -20,
                        left: -20
                    }
                },
                states: {
                    hover: {
                        filter: {
                            type: 'none'
                        }
                    }
                },
                plotOptions: {
                    pie: {
                        donut: {
                            size: '70%', // Adjust size to visually represent the partial fill
                            labels: {
                                show: true,
                                value: {
                                    fontSize: '1.375rem',
                                    fontFamily: 'Public Sans',
                                    color: headingColor, // Ensure this is defined
                                    fontWeight: 500,
                                    offsetY: -15,
                                    formatter: function (val) {
                                        return parseInt(val) + '%';
                                    }
                                },
                                name: {
                                    offsetY: 20,
                                    fontFamily: 'Public Sans'
                                },
                                total: {
                                    show: true,
                                    showAlways: true,
                                    color: '#198754',
                                    fontSize: '.8125rem',
                                    label: 'Total',
                                    fontFamily: 'Public Sans',
                                    formatter: function (w) {
                                        return '500'; // Adjust if necessary
                                    }
                                }
                            }
                        }
                    }
                },
                responsive: [
                    {
                        breakpoint: 1025,
                        options: {
                            chart: {
                                height: 172,
                                width: 160
                            }
                        }
                    },
                    {
                        breakpoint: 769,
                        options: {
                            chart: {
                                height: 178
                            }
                        }
                    },
                    {
                        breakpoint: 426,
                        options: {
                            chart: {
                                height: 147
                            }
                        }
                    }
                ]
            };

        if (typeof generatedLeadsChartEl !== undefined && generatedLeadsChartEl !== null) {
            const generatedLeadsChart = new ApexCharts(generatedLeadsChartEl, generatedLeadsChartConfig);
            generatedLeadsChart.render();
        }

        // Total Revenue Report Chart - Bar Chart
        // --------------------------------------------------------------------
        const totalRevenueChartEl = document.querySelector('#totalRevenueChart'),
            totalRevenueChartOptions = {
                series: [
                    {
                        name: 'Earning',
                        data: [270, 210, 180, 200, 250, 280, 250, 270, 150]
                    },
                    {
                        name: 'Expense',
                        data: [-140, -160, -180, -150, -100, -60, -80, -100, -180]
                    }
                ],
                chart: {
                    height: 413,
                    parentHeightOffset: 0,
                    stacked: true,
                    type: 'bar',
                    toolbar: {show: false}
                },
                tooltip: {
                    enabled: false
                },
                plotOptions: {
                    bar: {
                        horizontal: false,
                        columnWidth: '40%',
                        borderRadius: 9,
                        startingShape: 'rounded',
                        endingShape: 'rounded'
                    }
                },
                colors: ['#F05123', '#FF9700'],
                dataLabels: {
                    enabled: false
                },
                stroke: {
                    curve: 'smooth',
                    width: 6,
                    lineCap: 'round',
                    colors: ['#fff']
                },
                legend: {
                    show: true,
                    horizontalAlign: 'right',
                    position: 'top',
                    fontFamily: 'Public Sans',
                    markers: {
                        height: 12,
                        width: 12,
                        radius: 12,
                        offsetX: -3,
                        offsetY: 2
                    },
                    labels: {
                        colors: '#6f6b7d'
                    },
                    itemMargin: {
                        horizontal: 10,
                        vertical: 2
                    }
                },
                grid: {
                    show: false,
                    padding: {
                        bottom: -8,
                        top: 20
                    }
                },
                xaxis: {
                    categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep'],
                    labels: {
                        style: {
                            fontSize: '13px',
                            colors: '#a5a3ae',
                            fontFamily: 'Public Sans'
                        }
                    },
                    axisTicks: {
                        show: false
                    },
                    axisBorder: {
                        show: false
                    }
                },
                yaxis: {
                    labels: {
                        offsetX: -16,
                        style: {
                            fontSize: '13px',
                            colors: '#a5a3ae',
                            fontFamily: 'Public Sans'
                        }
                    },
                    min: -200,
                    max: 300,
                    tickAmount: 5
                },
                responsive: [
                    {
                        breakpoint: 1700,
                        options: {
                            plotOptions: {
                                bar: {
                                    columnWidth: '43%'
                                }
                            }
                        }
                    },
                    {
                        breakpoint: 1441,
                        options: {
                            plotOptions: {
                                bar: {
                                    columnWidth: '50%'
                                }
                            },
                            chart: {
                                height: 422
                            }
                        }
                    },
                    {
                        breakpoint: 1300,
                        options: {
                            plotOptions: {
                                bar: {
                                    columnWidth: '50%'
                                }
                            }
                        }
                    },
                    {
                        breakpoint: 1025,
                        options: {
                            plotOptions: {
                                bar: {
                                    columnWidth: '50%'
                                }
                            },
                            chart: {
                                height: 390
                            }
                        }
                    },
                    {
                        breakpoint: 991,
                        options: {
                            plotOptions: {
                                bar: {
                                    columnWidth: '38%'
                                }
                            }
                        }
                    },
                    {
                        breakpoint: 850,
                        options: {
                            plotOptions: {
                                bar: {
                                    columnWidth: '50%'
                                }
                            }
                        }
                    },
                    {
                        breakpoint: 449,
                        options: {
                            plotOptions: {
                                bar: {
                                    columnWidth: '73%'
                                }
                            },
                            chart: {
                                height: 360
                            },
                            xaxis: {
                                labels: {
                                    offsetY: -5
                                }
                            },
                            legend: {
                                show: true,
                                horizontalAlign: 'right',
                                position: 'top',
                                itemMargin: {
                                    horizontal: 10,
                                    vertical: 0
                                }
                            }
                        }
                    },
                    {
                        breakpoint: 394,
                        options: {
                            plotOptions: {
                                bar: {
                                    columnWidth: '88%'
                                }
                            },
                            legend: {
                                show: true,
                                horizontalAlign: 'center',
                                position: 'bottom',
                                markers: {
                                    offsetX: -3,
                                    offsetY: 0
                                },
                                itemMargin: {
                                    horizontal: 10,
                                    vertical: 5
                                }
                            }
                        }
                    }
                ],
                states: {
                    hover: {
                        filter: {
                            type: 'none'
                        }
                    },
                    active: {
                        filter: {
                            type: 'none'
                        }
                    }
                }
            };
        if (typeof totalRevenueChartEl !== undefined && totalRevenueChartEl !== null) {
            const totalRevenueChart = new ApexCharts(totalRevenueChartEl, totalRevenueChartOptions);
            totalRevenueChart.render();
        }

        // Total Revenue Report Budget Line Chart
        const budgetChartEl = document.querySelector('#budgetChart'),
            budgetChartOptions = {
                chart: {
                    height: 100,
                    toolbar: {show: false},
                    zoom: {enabled: false},
                    type: 'line'
                },
                series: [
                    {
                        name: 'Last Month',
                        data: [20, 10, 30, 16, 24, 5, 40, 23, 28, 5, 30]
                    },
                    {
                        name: 'This Month',
                        data: [50, 40, 60, 46, 54, 35, 70, 53, 58, 35, 60]
                    }
                ],
                stroke: {
                    curve: 'smooth',
                    dashArray: [5, 0],
                    width: [1, 2]
                },
                legend: {
                    show: false
                },
                colors: [borderColor, '#FF2A4C'],
                grid: {
                    show: false,
                    borderColor: borderColor,
                    padding: {
                        top: -30,
                        bottom: -15,
                        left: 25
                    }
                },
                markers: {
                    size: 0
                },
                xaxis: {
                    labels: {
                        show: false
                    },
                    axisTicks: {
                        show: false
                    },
                    axisBorder: {
                        show: false
                    }
                },
                yaxis: {
                    show: false
                },
                tooltip: {
                    enabled: false
                }
            };
        if (typeof budgetChartEl !== undefined && budgetChartEl !== null) {
            const budgetChart = new ApexCharts(budgetChartEl, budgetChartOptions);
            budgetChart.render();
        }
    </script>
@endpush
