<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game Results</title>
    <style>
        /* Body Styling */
        body {
            background-color: rgb(249, 145, 101);
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
        }

        /* Container for the table */
        .container {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 80%;
            max-width: 800px;
        }

        /* Table Styling */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th, td {
            border: 2px solid black;
            padding: 10px;
            text-align: center;
            font-size: 18px;
        }

        th {
            background-color: rgb(73, 73, 73);
            color: white;
            font-weight: bold;
        }

        /* Button Styling */
        button {
            padding: 10px 20px;
            font-size: 16px;
            border: 2px solid yellow;
            background-color: orange;
            border-radius: 5px;
            color: white;
            cursor: pointer;
            transition: background-color 0.3s ease, border-color 0.3s ease;
        }

        button:hover {
            background-color: #ff9900;
            border-color: #ffcc00;
        }

        /* Paragraph Styling */
        p {
            text-align: center;
            font-size: 16px;
            color: #333;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <table>
            <thead>
                <tr>
                    <th>Nickname</th>
                    <th>Record</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $row)
                    <tr>
                        <td>{{ $row['name'] }}</td>
                        <td>{{ !$row['record'] ? 0 : $row['record'] }}</td>
                    </tr>
                @endforeach
                <tr>
                    <td colspan="2">
                        <a href="{{ route('view') }}">
                            <button>Play Again</button>
                        </a>
                        <p>This account can only play one time</p>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>
