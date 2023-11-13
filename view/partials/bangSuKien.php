<?php
$servername = "localhost";
$database = "phoenix_ptud";
$username = "root";
$password = "";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

$sql = "SELECT TenSK,ThoiGian,UserName FROM sukien ORDER BY ThoiGian ASC";

$result = $conn->query($sql);

$sukien = $result->fetch_all(MYSQLI_ASSOC);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
mysqli_close($conn);
?>


    <div id='calendar'></div>
    <script src="
https://cdn.jsdelivr.net/npm/fullcalendar@6.1.9/index.global.min.js
"></script>
    <script>
        const sukiens = <?php echo json_encode($sukien) ?>

        const events = sukiens.map(sukien => ({
            title: sukien.TenSK,
            start: sukien.ThoiGian,
        }))
        
        console.log(events);
        document.addEventListener('DOMContentLoaded', function() {
            const calendarEl = document.getElementById('calendar');
            const calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth',
                headerToolbar: {
                    left: 'prev,next today addNewButton', // Add your custom button name here
                    center: 'title',
                    right: 'dayGridMonth,timeGridWeek,timeGridDay'
                },
                customButtons: {
                    addNewButton: {
                        text: 'Add New',
                        click: function() {
                            // Handle the click event of the custom button
                            // You can open a modal, redirect to another page, etc.
                            window.location.href = "../SuKien/themmoi.php"
                        }
                    }
                },
                // eventContent: {
                //     domNodes: events
                // },
                events: events

            });
            calendar.render();
        });
    </script>
