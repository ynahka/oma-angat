<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='utf-8' />
    <!-- Include Bootstrap CSS and JS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="calendar.css">
    <!-- FullCalendar CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.css" />
</head>

<body>
    <div class="row">
        <div class="col-12">
            <div class="card" style="margin-bottom: 0px;">
                <div class="card-body" style="padding-top: .5rem; padding-bottom: .5rem;">
                    <div class="row page-titles rowpageheaderpadd" style="padding-bottom: 0px;">
                        <div class="col-md-6 col-6 align-self-center" style="padding-left:10px;">
                            <h3 class="mb-0 mt-0 headerfontfont text-themecolor" style="font-weight: 600;">Harvesting
                                Calendar</h3>
                        </div>
                        <div class="col-md-6 col-6 align-self-center" style="padding-right:10px;">
                            <ol class="breadcrumb float-right headerfontfont">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                <li class="breadcrumb-item active">Harvesting Calendar</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid"
        style="padding: 15px 15px; background-color: white; min-height: 540px; margin-top: 15px;">
        <h4 class="mb-0 headerfontfont2" style="color: #2c2b2e;font-weight: 500;">Harvesting Schedule</h4>
        <h6 class="mb-4 headerfontfont" style="font-weight: 300;font-size: 13px;">You have total of <span
                id="#">0</span> Schedule
        </h6>

        <div class="row" style="margin-bottom: .5rem;">
            <div class="col-md-4 coldashboardbox3" style="margin-bottom: 10px; padding-right: 0px;">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text searchinputorder"><i class="fas fa-search"></i></span>
                    </div>
                    <input type="text" class="form-control searchinputorder" id="txtsearchproduct"
                        placeholder="Search . . .">
                </div>
            </div>

            <div class="col-md-8 coldashboardbox4">
                <button type="button" class="btn waves-effect waves-light btn-secondary float-right buttonproduct"
                    onclick="openmdladdproduct();"
                    style="background-color: #79a206 !important; border: 1px solid #79a206 !important;"><i
                        class="fas fa-plus"></i>Add Harvest Schedule</button>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="mb-3">
                    <div id='calendar'></div>
                    <!-- Bootstrap Modal -->
                    <div class="modal fade" id="eventModal" tabindex="-1" role="dialog"
                        aria-labelledby="eventModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="eventModalLabel">Harvesting Schedule</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form id="eventForm">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="eventTitle"
                                                placeholder="Enter event title" style="margin-bottom: 8px;">
                                            <input type="text" class="form-control" id="ProdHarvesr"
                                                placeholder="Product to Harvest" style="margin-bottom: 8px;">
                                            <input type="text" class="form-control" id="ProdQuanti"
                                                placeholder="Quantity" style="margin-bottom: 8px;">
                                            <input type="text" class="form-control" id="ProdPrice" placeholder="Price"
                                                style="margin-bottom: 8px;">
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary" id="saveEvent">Save changes</button>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>

                <input id="txtproductlistPageCount" type="hidden">
                <ul id="upproductlistPageList" class="pagination float-right"></ul>
            </div>
        </div>
    </div>




    <!-- FullCalendar JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.js"></script>
    <!-- ... (previous HTML code) ... -->
    <script>
    $(document).ready(function() {
        $('#calendar').fullCalendar({
            header: {
                left: 'prev,next today',
                center: 'title',
                right: 'month,agendaWeek,agendaDay'
            },
            selectable: true,

            select: function(start, end, jsEvent, view) {
                // Set the selected start date from the calendar
                var startDate = start.format('YYYY-MM-DD HH:mm');
                // Set the selected end date from the calendar
                var endDate = end.format('YYYY-MM-DD HH:mm');

                // Open the modal when a date range is selected
                $('#eventModal').modal('show');

                // Handle saving event when clicking the "Save changes" button
                $('#saveEvent').on('click', function() {
                    var title = $('#eventTitle').val();
                    if (title) {
                        var eventData = {
                            title: title,
                            start: startDate,
                            end: endDate
                        };

                        // Send event data to the server for storage using AJAX
                        $.ajax({
                            url: 'save_event.php', // Your endpoint to save the event
                            type: 'POST',
                            data: eventData,
                            success: function(response) {
                                // Render the event on the calendar
                                $('#calendar').fullCalendar('renderEvent',
                                    eventData, true);
                                $('#eventModal').modal(
                                    'hide'); // Hide the modal after saving
                            }
                        });
                    }
                });
            },
            // Other FullCalendar options
            // ...
        });
    });
    </script>
    <?php
    include("modal.php");
    include("script.php");
    ?>
</body>

</html>