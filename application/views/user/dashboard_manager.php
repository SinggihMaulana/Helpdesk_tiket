<!--Dashboard counts-->


<!--ticket stats-->
<section class="dashboard-header no-padding-bottom col-left-no-padding">
    <div class="container">
        <div class="row">
            <!-- Statistics -->

            <a href="<?= BASE_URL ?>tickets/list_all" class="col-md-3">
                <div class="statistic d-flex align-items-center bg-white has-shadow custom-border-radius">
                    <div class="text"><strong><?= $stats['total_tickets'] ?></strong><br>
                        <small>Number of Tickets</small>
                    </div>
                </div>
            </a>

            <a href="<?= BASE_URL ?>tickets/my_tickets" class="col-md-3">
                <div class="statistic d-flex align-items-center bg-white has-shadow custom-border-radius">
                    <div class="text"><strong><?= $stats['open_tickets'] ?></strong><br>
                        <small>Overdue Tickets</small>
                    </div>
                </div>
            </a>

            <a href="<?= BASE_URL ?>tickets/assigned_tickets" class="col-md-3">
                <div class="statistic d-flex align-items-center bg-white has-shadow custom-border-radius">
                    <div class="text"><strong><?= $stats['assigned_tickets'] ?></strong><br>
                        <small>Tickets on Hold</small>
                    </div>
                </div>
            </a>

            <a href="<?= BASE_URL ?>tickets/closed_tickets" class="col-md-3">
                <div class="statistic d-flex align-items-center bg-white has-shadow custom-border-radius">

                    <div class="text"><strong><?= $stats['closed_tickets'] ?></strong><br>
                        <small>Open Tickets</small>
                    </div>
                </div>
            </a>


        </div>
    </div>
</section>
<section class="dashboard-header no-padding-bottom col-left-no-padding">
    <div class="container">
        <div class="row">
            <!-- Statistics -->
            
            <a href="<?= BASE_URL ?>tickets/list_all" class="col-md-3">
                <div class="statistic d-flex align-items-center bg-white has-shadow custom-border-radius">
                    <div class="text"><strong><?= $stats['total_tickets'] ?></strong><br>
                        <small>All Tickets</small>
                    </div>
                </div>
            </a>

            <a href="<?= BASE_URL ?>tickets/my_tickets" class="col-md-3">
                <div class="statistic d-flex align-items-center bg-white has-shadow custom-border-radius">
                    <div class="text"><strong><?= $stats['open_tickets'] ?></strong><br>
                        <small>Unasigned Tickets</small>
                    </div>
                </div>
            </a>

            <a href="<?= BASE_URL ?>tickets/assigned_tickets" class="col-md-3">
                <div class="statistic d-flex align-items-center bg-white has-shadow custom-border-radius">
                    <div class="text"><strong><?= $stats['assigned_tickets'] ?></strong><br>
                        <small>List Approval</small>
                    </div>
                </div>
            </a>

            <a href="<?= BASE_URL ?>tickets/closed_tickets" class="col-md-3">
                <div class="statistic d-flex align-items-center bg-white has-shadow custom-border-radius">

                    <div class="text"><strong><?= $stats['closed_tickets'] ?></strong><br>
                        <small>List of Late Tickets</small>
                    </div>
                </div>
            </a>


        </div>
    </div>
</section>


<!-- Severity graph & Ticket status -->
<section class="feeds">
    <div class="container col-left-no-padding">
        <div class="row">
            <div class="col-md-7 d-flex">
                <div class="bar-chart-example card custom-border-radius w-100">
                    <div class="card-header d-flex align-items-center  custom-border-radius">
                        <h2 class="h3">Current Ticket Status</h2>
                    </div>
                    <div class="card-body">
                        <canvas id="severity-bar-graph" height="100"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 d-flex">
                <div class="card custom-border-radius w-100">
                    <div class="card-header d-flex align-items-center  custom-border-radius">
                        <h2 class="h3">Unresolved Ticket by Priority</h2>
                    </div>
                    <div class="work-amount">
                        <div class="card-body">
                            <div class="chart text-center">
                                <iframe class="chartjs-hidden-iframe" tabindex="-1"
                                        style="display: block; overflow: hidden; border: 0px; margin: 0px; top: 0px; left: 0px; bottom: 0px; right: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;"></iframe>
                                <div class="text">
                                    <strong><?= $stats['total_tickets'] ?></strong><br><span>Total Tickets</span>
                                </div>
                                <canvas id="pieChart" height="100"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- recent activity & Priority graph-->
<section class="feeds" style="margin-top: -44px;">
    <div class="container col-left-no-padding">
        <div class="row">
            <!-- Trending Articles-->
            <div class="col-lg-12">
                <div class="recent-updates card custom-border-radius w-100">
                    
                    <div class="card-header tab-card-header shadow-none">
                        <ul class="nav nav-tabs card-header-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link disabled-text  active show" id="one-tab" data-toggle="tab"
                                   href="#one" role="tab" aria-controls="One" aria-selected="true">Recent Tickets</a>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active p-3" id="one" role="tabpanel"
                             aria-labelledby="one-tab">
                            <?php
                            if (is_array($recent['created']) && count($recent['created']) > 0) {
                                foreach ($recent['created'] as $recent_created) {
                                    echo '
                                <div class="item d-flex  justify-content-between">
                                    <div class="info d-flex">
                                    <div class="icon"><i class="fa fa-ticket text-green"></i></div>
                                    <div class="title">
                                    <a href="' . BASE_URL . 'tickets/view_ticket/' . $recent_created['ticket_no'] . '">
                                        <h5>' . $recent_created['ticket_no'] . '</h5>
                                    </a><br>
                                    <p>Purpose: ' . $recent_created['purpose'] . '</p>
                                    <p>Subject: ' . $recent_created['subject'] . '</p>
                                    </div>
                                    </div>
                                    <div class="date text-right"><span class="rel-time" data-value="' . $recent_created['created'] . '000"></span><br><span class="tik-status" data-value="' . $recent_created['status'] . '"></span></div>
                                </div>
                                ';
                                }
                            } else {
                                echo '
                                <div class="item d-flex align-items-center">
                                <div class="text">
                                    <a href="#">
                                    <h3 class="h5">OOPS</h3>
                                    </a>
                                    <small>No record found</small>
                                </div>
                                </div>
                                ';
                            }
                            ?>
                        </div>
                        <div class="tab-pane fade p-3" id="two" role="tabpanel" aria-labelledby="two-tab">
                            <?php
                            if (is_array($recent['open']) && count($recent['open']) > 0) {
                                foreach ($recent['open'] as $recent_open) {
                                    echo '
                                <div class="item d-flex  justify-content-between">
                                <div class="info d-flex">
                                    <div class="icon"><i class="fa fa-ticket text-red"></i></div>
                                    <div class="title">
                                    <a href="' . BASE_URL . 'tickets/view_ticket/' . $recent_open['ticket_no'] . '">
                                        <h5>' . $recent_open['ticket_no'] . '</h5>
                                    </a><br>
                                    <p>Purpose: ' . $recent_open['purpose'] . '</p>
                                    <p>Subject: ' . $recent_open['subject'] . '</p>
                                    </div>
                                    </div>
                                    <div class="date text-right"><span class="rel-time" data-value="' . $recent_open['created'] . '000"></span><br><span class="tik-status" data-value="' . $recent_open['status'] . '"></span></div>
                                </div>
                                ';
                                }
                            } else {
                                echo '
                                <div class="item d-flex align-items-center">
                                <div class="text">
                                    <a href="#">
                                    <h3 class="h5">OOPS</h3>
                                    </a>
                                    <small>No record found</small>
                                </div>
                                </div>
                                ';
                            }
                            ?>

                        </div>
                        <div class="tab-pane fade p-3" id="three" role="tabpanel" aria-labelledby="three-tab">
                            <?php
                            if (is_array($recent['assigned']) && count($recent['assigned']) > 0) {
                                foreach ($recent['assigned'] as $recent_assigned) {
                                    echo '
                                <div class="item d-flex  justify-content-between">
                                <div class="info d-flex">
                                    <div class="icon"><i class="fa fa-ticket text-info"></i></div>
                                    <div class="text">
                                    <a href="' . BASE_URL . 'tickets/view_ticket/' . $recent_assigned['ticket_no'] . '">
                                        <h5>' . $recent_assigned['ticket_no'] . '</h5>
                                    </a><br>
                                    <p>Purpose: ' . $recent_assigned['purpose'] . '</p>
                                    <p>Subject: ' . $recent_assigned['subject'] . '</p>
                                    </div>
                                    </div>
                                    <div class="date text-right"><span class="rel-time" data-value="' . $recent_assigned['created'] . '000"></span><br><span class="tik-status" data-value="' . $recent_assigned['status'] . '"></span></div>
                                </div>
                                ';
                                }
                            } else {
                                echo '
                                <div class="item d-flex align-items-center">
                                <div class="text">
                                    <a href="#">
                                    <h3 class="h5">OOPS</h3>
                                    </a>
                                    <small>No record found</small>
                                </div>
                                </div>
                                ';
                            }
                            ?>
                        </div>
                        <div class="tab-pane fade p-3" id="four" role="tabpanel" aria-labelledby="four-tab">
                            <?php
                            if (is_array($recent['closed']) && count($recent['closed']) > 0) {
                                foreach ($recent['closed'] as $recent_closed) {
                                    echo '
                                <div class="item d-flex  justify-content-between">
                                <div class="info d-flex">
                                    <div class="icon"><i class="fa fa-ticket text-red"></i></div>
                                    <div class="title">
                                    <a href="' . BASE_URL . 'tickets/view_ticket/' . $recent_closed['ticket_no'] . '">
                                        <h5>' . $recent_closed['ticket_no'] . '</h5>
                                    </a><br>
                                    <p>Purpose: ' . $recent_closed['purpose'] . '</p>
                                    <p>Subject: ' . $recent_closed['subject'] . '</p>
                                    </div>
                                    </div>
                                    <div class="date text-right"><span class="rel-time" data-value="' . $recent_closed['created'] . '000"></span><br><span class="tik-status" data-value="' . $recent_closed['status'] . '"></span></div>
                                </div>
                                ';
                                }
                            } else {
                                echo '
                                <div class="item d-flex align-items-center">
                                <div class="text">
                                    <a href="#">
                                    <h3 class="h5">OOPS</h3>
                                    </a>
                                    <small>No record found</small>
                                </div>
                                </div>
                                ';
                            }
                            ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<script>

    // ------------------------------------------------------- //
    // Charts Gradients
    // ------------------------------------------------------ //
    var ctx1 = $("canvas").get(0).getContext("2d");
    var gradient1 = ctx1.createLinearGradient(150, 0, 150, 300);
    gradient1.addColorStop(0, 'rgba(255,6,0,0.94)');
    gradient1.addColorStop(1, 'rgba(255,118,118,0.94)');

    var gradient2 = ctx1.createLinearGradient(146.000, 0.000, 154.000, 300.000);
    gradient2.addColorStop(0, 'rgba(255,113,0,0.85)');
    gradient2.addColorStop(1, 'rgba(255,144,84,0.85)');

    var gradient3 = ctx1.createLinearGradient(146.000, 0.000, 154.000, 300.000);
    gradient3.addColorStop(0, 'rgba(104, 179, 112, 0.85)');
    gradient3.addColorStop(1, 'rgba(165,236,69,0.85)');


    // ------------------------------------------------------- //
    // Severity Bar graph
    // ------------------------------------------------------ //
    var BARCHARTEXMPLE = $('#severity-bar-graph');
    var barChartExample = new Chart(BARCHARTEXMPLE, {
        type: 'bar',
        options: {
            scales: {
                xAxes: [{
                    display: true,
                    gridLines: {
                        color: '#eee'
                    }
                }],
                yAxes: [{
                    display: true,
                    gridLines: {
                        color: '#eee'
                    }
                }]
            },
        },
        data: {
            labels: ["Open", "Assigned", "Closed"],
            datasets: [
                {
                    label: "Severity High",
                    backgroundColor: [
                        gradient1,
                        gradient1,
                        gradient1
                    ],
                    hoverBackgroundColor: [
                        gradient1,
                        gradient1,
                        gradient1
                    ],
                    borderColor: [
                        gradient1,
                        gradient1,
                        gradient1
                    ],
                    borderWidth: 1,
                    data: <?php echo json_encode($stats['count_by_severity']['high'])?>,
                },
                {
                    label: "Severity Medium",
                    backgroundColor: [
                        gradient2,
                        gradient2,
                        gradient2
                    ],
                    hoverBackgroundColor: [
                        gradient2,
                        gradient2,
                        gradient2
                    ],
                    borderColor: [
                        gradient2,
                        gradient2,
                        gradient2
                    ],
                    borderWidth: 1,
                    data: <?php echo json_encode($stats['count_by_severity']['medium'])?>,
                },
                {
                    label: "Severity Low",
                    backgroundColor: [
                        gradient3,
                        gradient3,
                        gradient3
                    ],
                    hoverBackgroundColor: [
                        gradient3,
                        gradient3,
                        gradient3
                    ],
                    borderColor: [
                        gradient3,
                        gradient3,
                        gradient3
                    ],
                    borderWidth: 1,
                    data: <?php echo json_encode($stats['count_by_severity']['low'])?>,
                }
            ]
        }
    });


    // ------------------------------------------------------- //
    // Tickets status
    // ------------------------------------------------------ //
    var PIECHART = $('#pieChart');
    var myPieChart = new Chart(PIECHART, {
        type: 'doughnut',
        options: {
            cutoutPercentage: 80,
            legend: {
                display: false
            }
        },
        data: {
            labels: [
                "Open",
                "Assigned",
                "Closed"
            ],
            datasets: [
                {
                    data: [<?= $stats['open_tickets'] ?>, <?= $stats['assigned_tickets'] ?>, <?= $stats['closed_tickets'] ?>],
                    borderWidth: [0, 0, 0, 0],
                    backgroundColor: [
                        '#ffc36d',
                        "#17a2b8",
                        "#ff7676"
                    ],
                    hoverBackgroundColor: [
                        '#e2ab62',
                        "#15788d",
                        "#cc5d5d"
                    ]
                }]
        }
    });

    // ------------------------------------------------------- //
    // Severity Bar graph
    // ------------------------------------------------------ //
    var BARCHARTEXMPLE = $('#priority-bar-graph');
    var barChartExample = new Chart(BARCHARTEXMPLE, {
        type: 'bar',
        options: {
            scales: {
                xAxes: [{
                    display: true,
                    gridLines: {
                        color: '#eee'
                    }
                }],
                yAxes: [{
                    display: true,
                    gridLines: {
                        color: '#eee'
                    }
                }]
            },
        },
        data: {
            labels: ["Open", "Assigned", "Closed"],
            datasets: [
                {
                    label: "Priority High",
                    backgroundColor: [
                        gradient1,
                        gradient1,
                        gradient1
                    ],
                    hoverBackgroundColor: [
                        gradient1,
                        gradient1,
                        gradient1
                    ],
                    borderColor: [
                        gradient1,
                        gradient1,
                        gradient1
                    ],
                    borderWidth: 1,
                    data: <?php echo json_encode($stats['count_by_priority']['high'])?>,
                },
                {
                    label: "Priority Medium",
                    backgroundColor: [
                        gradient2,
                        gradient2,
                        gradient2
                    ],
                    hoverBackgroundColor: [
                        gradient2,
                        gradient2,
                        gradient2
                    ],
                    borderColor: [
                        gradient2,
                        gradient2,
                        gradient2
                    ],
                    borderWidth: 1,
                    data: <?php echo json_encode($stats['count_by_priority']['medium'])?>,
                },
                {
                    label: "Priority Low",
                    backgroundColor: [
                        gradient3,
                        gradient3,
                        gradient3
                    ],
                    hoverBackgroundColor: [
                        gradient3,
                        gradient3,
                        gradient3
                    ],
                    borderColor: [
                        gradient3,
                        gradient3,
                        gradient3
                    ],
                    borderWidth: 1,
                    data: <?php echo json_encode($stats['count_by_priority']['low'])?>,
                }
            ]
        }
    });


</script>