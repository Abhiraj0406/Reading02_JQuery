$(document).ready(function () {
    const apiUrl = "http://127.0.0.1:8000/api/indexapi";
    let intervalID; // Declare intervalID first

    // ---------READ---------------  
    // ============================  
    function fetchReading() {
        $.ajax({
            url: apiUrl,
            type: "GET",
            dataType: "json",
            success: function (response) {
                $("#dataList").empty(); // Clear existing data
                response.forEach(function (item) {
                    // Format and append new data
                    $("#dataList").append(
                        `<tr>
                            <td>${item.id}</td>
                            <td>${item.voltage}V</td>
                            <td>${item.current}A</td>   
                            <td>${new Date().toLocaleTimeString("en-US", {
                                hour12: true,
                                hour: "numeric",
                                minute: "numeric",
                                second: "numeric",
                            })}</td>  
                            <td><button onclick="editReading(${item.id})">Edit</button></td>
                            <td><button onclick="deleteReading(${item.id})">Delete</button></td>
                        </tr>`
                    );
                });
            },
            error: function (xhr, status, error) {
                console.error("Error fetching data:", xhr.responseText || error);
            },
        });
    }

    // Start fetching data on clicking the fetch button
    $("#fetchData").click(function () {
        intervalID = setInterval(fetchReading, 1000); // Fetch every 1 second
    });

    // Stop fetching data when unfetch button is clicked
    $("#unfetchData").click(function () {
        clearInterval(intervalID);
    });

    // Initially call fetchReading() on page load
    fetchReading();

    //--------------------------Create---------------------------------  
    //=================================================================  
    function createReading() {
        let voltage = $("#volt").val();
        let current = $("#amp").val();

        // Send POST request with JSON data
        $.ajax({
            url: apiUrl,
            type: "POST",
            contentType: 'application/json',
            data: JSON.stringify({ voltage: voltage, current: current }),
            success: function (success) {
                console.log('Data sent successfully:', success);
                fetchReading(); // Refresh data after creating a reading
            },
            error: function (xhr, status, error) {
                console.error('Error sending data:', error);
            }
        });
    }

    // Create new reading on button click
    $('#createReading').click(function() {
        createReading();
    });
});
