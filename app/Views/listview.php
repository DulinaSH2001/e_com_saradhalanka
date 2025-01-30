<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List View</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        table,
        th,
        td {
            border: 1px solid black;
        }

        th,
        td {
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>

<body>
    <h1>List View</h1>

    <button onclick="fetchData()">Get Data</button>

    <script>
        function fetchData() {

        }
    </script>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>John Doe</td>
                <td>john.doe@example.com</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Jane Smith</td>
                <td>jane.smith@example.com</td>
            </tr>

        </tbody>
    </table>
</body>

</html>
</tr>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    function fetchData() {
        $.ajax({
            url: '<?php echo base_url('api/getAllcheques'); ?>',
            type: 'GET',
            success: function (data) {
                var rows = '';
                data.forEach(function (item) {
                    rows += '<tr>' +
                        '<td>' + item.id + '</td>' +
                        '<td>' + item.name + '</td>' +
                        '<td>' + item.email + '</td>' +
                        '</tr>';
                });
                $('tbody').html(rows);
            },
            error: function (error) {
                console.log('Error:', error);
            }
        });
    }
</script>