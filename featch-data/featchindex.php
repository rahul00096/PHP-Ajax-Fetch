<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fetch Data with AJAX</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        #main {
            width: 80%;
            margin: 20px auto;
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 10px;
        }
        #header {
            background-color: #007bff;
            color: #fff;
            padding: 10px;
            text-align: center;
            border-radius: 5px 5px 0 0;
        }
        #table-load {
            text-align: center;
            padding: 20px 0;
        }
        #load-button {
            background-color: #28a745;
            color: #fff;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 5px;
        }
        #load-button:hover {
            background-color: #218838;
        }
        #table-data {
            margin-top: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 8px;
            border: 1px solid #ddd;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        tr:hover {
            background-color: #ddd;
        }
    </style>
</head>
<body>
    <table id="main">
        <tr>
            <td id="header">
                <h1>PHP with AJAX</h1>
            </td>
        </tr>
        <tr>
            <td id="table-load">
                <input type="button" id="load-button" value="Load Data">
            </td>
        </tr>
        <tr>
            <td id="table-data"></td>
        </tr>
    </table>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" type="text/javascript"></script>
    <script>
        $(document).ready(function () {
            $("#table-load").on("click",function (e) {
                $.ajax({
                    url: "ajax-load.php",
                    type: "post",
                    success: function (data) {
                        $("#table-data").html(data);
                    }
                });
            });
        });
    </script>
</body>
</html>
