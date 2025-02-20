$(document).ready(function () {
    const apiUrl = "http://127.0.0.1:8000/api"; // Base API URL

    let intervalID; // Declare intervalID

    // ======================== FETCH READINGS (GET) ==========================
    function fetchReading() {
        $.ajax({
            url: apiUrl + "/indexapi",
            type: "GET",
            dataType: "json",
            success: function (response) {
                $("#dataList").empty(); // Clear existing data
                response.forEach(function (item) {
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
                            <td><a href="/edit/${item.id}" id="${
                            item.id
                        }" class="edit-btn bg-yellow-500 px-3 py-1 rounded">Edit</a></td>
                            <td><button class="delete-btn bg-red-500 px-3 py-1 rounded text-white" id="${
                                item.id
                            }">Delete</button></td>
                        </tr>`
                    );
                });
            },
            error: function (xhr, status, error) {
                console.error(
                    "Error fetching data:",
                    xhr.responseText || error
                );
            },
        });
    }

    // Start fetching data when clicking the "Fetch" button
    $("#fetchData").click(function () {
        intervalID = setInterval(fetchReading, 1000); // Fetch every 1 second
    });

    // Stop fetching data when clicking the "Unfetch" button
    $("#unfetchData").click(function () {
        clearInterval(intervalID);
    });

    // Call fetchReading() on page load
    fetchReading();

    // ======================== CREATE READING (POST) ==========================
    function createData() {
        let voltage = $("#volt").val();
        let current = $("#amp").val();

        // Ensure fields are not empty
        if (!voltage || !current) {
            alert("Please enter voltage and current values.");
            return;
        }

        $.ajax({
            url: apiUrl + "/storeapi",
            type: "POST",
            contentType: "application/json",
            data: JSON.stringify({ voltage: voltage, current: current }),
            success: function (response) {
                console.log("Data sent successfully:", response);
                fetchReading(); // Refresh table data
                alert("Reading added successfully!!!");
                window.location.href = window.location.origin + "/";
                $("#volt").val(""); // Clear input fields
                $("#amp").val("");
            },
            error: function (xhr, status, error) {
                console.error("Error sending data:", xhr.responseText || error);
            },
        });
    }

    // Attach event listener to create button
    $("#createReading").click(function () {
        // e.preventDefault();
        createData();
    });
    // ======================== EDIT READING (POST) ==========================
    function editData() {
        let voltage = $("#volt").val();
        let current = $("#amp").val();
        let id = $("#id").val();

        // Ensure fields are not empty
        if (!voltage || !current) {
            alert("Please enter voltage and current values.");
            return;
        }

        $.ajax({
            url: apiUrl + "/editapi",
            type: "POST",
            contentType: "application/json",
            data: JSON.stringify({
                id: id,
                voltage: voltage,
                current: current,
            }),
            success: function (response) {
                console.log("Data sent successfully:", response);
                fetchReading(); // Refresh table data
                alert("Reading added successfully!!!");
                window.location.href = window.location.origin + "/";
            },
            error: function (xhr, status, error) {
                console.error("Error sending data:", xhr.responseText || error);
            },
        });
    }
    // Attach event listener to create button
    $("#editReading").click(function (e) {
        e.preventDefault();
        editData();
    });

    // ======================== DELETE READING ==========================
    function deleteReading(id) {
        if (confirm("Are you sure you want to delete this reading?")) {
            $.ajax({
                url: apiUrl + "/deleteapi/" + id,
                type: "DELETE",
                success: function (response) {
                    console.log("Data deleted successfully:", response);
                    fetchReading();
                    alert("Reading deleted successfully!");
                },
                error: function (xhr, status, error) {
                    console.error(
                        "Error deleting data:",
                        xhr.responseText || error
                    );
                },
            });
        }
    }

    // Attach event listener for dynamic delete button
    $(document).on("click", ".delete-btn", function () {
        let readingId = this.id;
        deleteReading(readingId);
    });

    // ======================== LOAD CREATE PAGE (AJAX) ==========================
    $("#createReadingPage").click(function () {
        $("#content").load("/create");
    });

    // ======================== LOAD INDEX PAGE (AJAX) ==========================
    $(document).on("click", "#backIndex", function (e) {
        e.preventDefault();
        window.location.href = window.location.origin + "/";
    });
});
