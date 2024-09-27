<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Styled Form</title>
    <style>
        /* Body Styling */
        body {
            background-color: rgb(249, 145, 101);
            display: flex;
            justify-content: center; /* Center horizontally */
            align-items: center;    /* Center vertically */
            height: 100vh;          /* Full viewport height */
            margin: 0;
            font-family: Arial, sans-serif;
        }

        /* Form Container */
        form {
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
        }

        /* Label Styling */
        label {
            display: block;
            margin-bottom: 10px;
            font-size: 18px;
            font-weight: bold;
            color: #333;
        }

        /* Input Styling */
        input[type="text"] {
            width: 100%;
            padding: 10px;
            background-color: rgb(73, 73, 73);
            border: 1px solid #ccc;
            border-radius: 5px;
            color: white;
            font-size: 16px;
            margin-bottom: 20px;
            box-sizing: border-box;
        }

        input[type="text"]::placeholder {
            color: #ddd;
        }

        /* Button Styling */
        button[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: orange;
            border: 2px solid yellow;
            border-radius: 5px;
            color: white;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease, border-color 0.3s ease;
        }

        button[type="submit"]:hover {
            background-color: #ff9900;
            border-color: #ffcc00;
        }

        /* Responsive Design */
        @media (max-width: 400px) {
            form {
                width: 90%;
                padding: 20px;
            }

            label, input, button {
                font-size: 14px;
            }
        }
    </style>
</head>
<body>
    <form action="{{ route('f_insert') }}" method="post">
        @csrf
        <label for="name">Nickname:</label>
        <input type="text" name="name" id="name" placeholder="Enter your nickname" required>
        <button type="submit">Submit</button>
    </form>
</body>
</html>
