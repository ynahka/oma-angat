<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.css"
        integrity="sha256-q8tN5Zp+7t9R5zZ38bYd5QrYGPTqq3Zxfx7u8RpfeRQ=" crossorigin="anonymous" />
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"
        integrity="sha256-oP6HI/tZ1a9JJl3h79TPfX9pOiM6bIi0TQUxSHk7F6U=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"
        integrity="sha256-rrD7VFTw+5SO7XTrYjqZ9G+6k0sDQl3BY1FANXb8rAc=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.js"
        integrity="sha256-JmRuNcA4BVqVrW7ezF8fd0d6qxaS/K9u2YioAIdpXrk=" crossorigin="anonymous"></script>
    <title>FullCalendar with Manual Event Adding</title>
</head>

<body>
    <div id="calendar"></div>

    <script>
    $(document).ready(function() {
        // Initialize FullCalendar
        $('#calendar').fullCalendar({
            // Add your calendar options here
            header: {
                left: 'prev,next today',
                center: 'title',
                right: 'month,agendaWeek,agendaDay'
            },
            // Allow user to manually add events
            selectable: true,
            select: function(start, end, jsEvent, view) {
                // Prompt user to add event for the selected date
                var title = prompt('Enter event title:');
                if (title) {
                    // Add the new event to the calendar
                    var eventData = {
                        title: title,
                        start: start,
                        end: end
                    };
                    $('#calendar').fullCalendar('renderEvent', eventData, true); // stick? = true
                }
                $('#calendar').fullCalendar('unselect');
            },
            // Add your events or event sources here
            events: [{
                    title: 'Harvest Starts',
                    start: '2023-11-24'
                },
                // Add more events as needed
            ],
        });
    });
    </script>
</body>

</html>