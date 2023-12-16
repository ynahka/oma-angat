<link rel="stylesheet" type="text/css" href="dashboard/dashboard.css" />

<div class="row" style="margin-top: -20px; margin-bottom: 50px;">

    <img src="image/2.svg" alt="banner" style="width:100%; height:100%; background-size: cover; background-position: center;">

</div>

<div class="row">
    <div class="col-md-12">
        <div class="row" style="justify-content: center;">
            <div class="col-xs-12 col-md-4 col-lg-3 col-xlg-3 coldashboardbox">
                <div class="card text-white bg-dark" style="margin-bottom: 15px;">
                    <div class="box bg-info" style="background-color: #4C644B !important;">
                        <div class="box bg-info" style="background-color: #4C644B !important;">
                            <h1 class="text-white textdashboardboxes" id="txtTotsellers" style="color: #4a8670;">0</h1>
                            <h6 class="font-light text-white textdashboardboxes2" style="color: #4C644B ;">Sellers</h6>
                            <div class="dboxicon">
                                <i class="fas fa-users"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-md-4 col-lg-3 col-xlg-3 coldashboardbox2">
                <div class="card text-white bg-dark" style="margin-bottom: 15px;">
                    <div class="box bg-info" style="background-color:#4C644B !important;">
                        <div class="box bg-info" style="background-color:#4C644B !important;">
                            <h1 class="text-white textdashboardboxes" id="txtTotcustomer" style="color: #4C644B ;">0</h1>
                            <h6 class="font-light text-white textdashboardboxes2" style="color: #4C644B ;">Customers</h6>
                            <div class="dboxicon">
                                <i class="fas fa-users"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-md-4 col-lg-3 col-xlg-3 coldashboardbox">
                <div class="card text-white bg-dark" style="margin-bottom: 15px;">
                    <div class="box bg-info" style="background-color: #4C644B !important;">
                        <div class="box bg-info" style="background-color: #4C644B !important;">
                            <h1 class="text-white textdashboardboxes" id="txtTotproduct" style="color:#4C644B ;">0</h1>
                            <h6 class="font-light text-white textdashboardboxes2" style="color:#4C644B ;">Products</h6>
                            <div class="dboxicon">
                                <i class="fas fa-boxes"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-md-4 col-lg-3 col-xlg-3 coldashboardbox2">
                <div class="card text-white bg-dark" style="margin-bottom: 15px;">
                    <div class="box bg-info" style="background-color: #ff6264!important;">
                        <div class="box bg-info" style="background-color: #ff6264!important;">
                            <h1 class="text-white textdashboardboxes" id="txtTotorders" style="color:#4C644B ;">0</h1>
                            <h6 class="font-light text-white textdashboardboxes2" style="color:#4C644B ;">Orders</h6>
                            <div class="dboxicon">
                                <i class="fas fa-file-alt"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
        .yearly,
        .weekly {
            display: none;
        }
    </style>
    <div class="col-md-12">
        <div class="card" style="min-height: 450px;margin-bottom: 0px;">
            <select id="selectchart" class="btn border" style="width: 200px;margin-left: auto;text-align: left;margin-top: 10px;margin-right: 10px;">
                <option>Select</option>
                <option value="weekly">Weekly</option>
                <option value="monthly">Monthly</option>
                <option value="yearly">Yearly</option>
            </select>
            <div class="card-body">
                <div class="monthly">
                    <h3 style="color: #24759e;">MONTHLY ORDERS</h3>
                    <canvas id="chart1" height="100"></canvas>
                </div>
                <div class="yearly">
                    <h3 style="color: #24759e;">YEARLY ORDERS</h3>
                    <canvas id="chart2" height="100"></canvas>
                </div>
                <div class="weekly">
                    <h3 style="color: #24759e;">WEEKLY ORDERS</h3>
                    <canvas id="chart3" height="100"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="assets/plugins/Chart.js/Chart.min.js"></script>
<?php
include("dashboard/modal.php");
include("dashboard/dashboardscript.php");
?>
<script>
    $('#selectchart').change(function() {
        if ($(this).val() == 'weekly') {
            $('.weekly').css('display', 'block')
            $('.monthly').css('display', 'none')
            $('.yearly').css('display', 'none')
        } else if ($(this).val() == 'monthly') {
            $('.monthly').css('display', 'block')
            $('.weekly').css('display', 'none')
            $('.yearly').css('display', 'none')
        } else if ($(this).val() == 'yearly') {
            $('.yearly').css('display', 'block')
            $('.weekly').css('display', 'none')
            $('.monthly').css('display', 'none')
        }
    })
</script>