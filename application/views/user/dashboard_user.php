<!-- Comment Section-->

<div class="container" style="padding:0; margin-top: -4em;">

    <!--Dashboard counts-->
    <section class="dashboard-header no-padding-bottom col-left-no-padding" style="margin-top: 4em;">
        <div class="container">
            <div class="row">
                <!-- Statistics -->
                <div class="col-md-3">
                    <div class="statistic d-flex align-items-center bg-white has-shadow custom-border-radius">
                    
                        <div class="text"><strong><?= $stats['total_tickets'] ?></strong><br>
                            <small>All Tickets</small>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="statistic d-flex align-items-center bg-white has-shadow custom-border-radius">
               
                        <div class="text"><strong><?= $stats['open_tickets'] ?></strong><br>
                            <small>Open Tickets</small>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="statistic d-flex align-items-center bg-white has-shadow custom-border-radius">
                       
                        <div class="text"><strong><?= $stats['assigned_tickets'] ?></strong><br>
                            <small>Assigned Tickets</small>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="statistic d-flex align-items-center bg-white has-shadow custom-border-radius">
              
                        <div class="text"><strong><?= $stats['closed_tickets'] ?></strong><br>
                            <small>Closed Tickets</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- recent activity -->
    <section class="feeds">
        <div class="container col-left-no-padding">
            <div class="row">
                <div class="col-lg-6 d-flex">
                    <div class="card custom-border-radius w-100">
                        <div class="card-header d-flex align-items-center  custom-border-radius">
                            <h2 class="h3">Tickets status</h2>
                        </div>
                        <div class="work-amount">
                            <div class="card-body">
                                <div class="chart text-center">
                                    <iframe class="chartjs-hidden-iframe" tabindex="-1"
                                            style="display: block; overflow: hidden; border: 0px; margin: 0px; top: 0px; left: 0px; bottom: 0px; right: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;"></iframe>
                                    <div class="text"><strong><?= $stats['total_tickets'] ?></strong><br><span>Total Tickets</span>
                                    </div>
                                    <canvas id="pieChart"
                                            style="display: block; width: height: 100%; height: 100%"></canvas>
                                </div>
                                <div class="text-center">Open, Assigned and Closed Tickets stats.</div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Trending Articles-->
                <div class="col-lg-6 d-flex">
                    <div class="recent-updates card custom-border-radius">
                        <div class="card-header d-flex align-items-center  custom-border-radius">
                            <h2 class="h3">Recent Tickets</h2>
                       
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
                                    <div class="date text-right"><span class="rel-time" data-value="'.$recent_created['created'].'000"></span><br><span class="tik-status" data-value="'.$recent_created['status'].'"></span></div>
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
                                    <div class="date text-right"><span class="rel-time" data-value="'.$recent_assigned['created'].'000"></span><br><span class="tik-status" data-value="'.$recent_assigned['status'].'"></span></div>
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
                                    <div class="date text-right"><span class="rel-time" data-value="'.$recent_closed['created'].'000"></span><br><span class="tik-status" data-value="'.$recent_closed['status'].'"></span></div>
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

    </script>
