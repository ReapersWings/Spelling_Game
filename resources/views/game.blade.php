<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game Page</title>
    <style>
        /* Body Styling */
        body {
            background-color: rgb(249, 145, 101);
            display: flex;
            justify-content: center; /* Center horizontally */
            align-items: center;    /* Center vertically */
            flex-direction: column;
            height: 100vh;          /* Full viewport height */
            margin: 0;
            font-family: Arial, sans-serif;
        }

        /* Container for the entire content */
        .container {
            width: 80%;
            max-width: 800px;
            text-align: center;
        }
        table{
            width: 100%
        }
        /* Form Styling */
        form {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            width: 50%;
            margin: 20px auto;
            display: none; /* Initially hidden */
        }

        form h1 {
            margin: 0;
            margin-bottom: 10px;
            color: #333;
            text-align: center;
        }

        label {
            display: block;
            margin-bottom: 10px;
            font-size: 18px;
            font-weight: bold;
            color: #333;
        }

        input[type="number"] {
            width: 100%;
            padding: 10px;
            background-color: rgb(73, 73, 73);
            border: 1px solid #ccc;
            border-radius: 5px;
            color: white;
            font-size: 16px;
            text-align: center;
            margin-bottom: 20px;
            box-sizing: border-box;
        }

        input[type="number"]::placeholder {
            color: #ddd;
        }

        button {
            width: 100%; /* Full width for better visibility */
            padding: 15px; /* Increased padding for larger size */
            font-size: 18px; /* Larger font size */
            border: 2px solid yellow;
            background-color: orange;
            border-radius: 5px;
            color: white;
            cursor: pointer;
            transition: background-color 0.3s ease, border-color 0.3s ease;
            margin: 5px 0; /* Margin between buttons */
        }

        button:hover {
            background-color: #ff9900;
            border-color: #ffcc00;
        }

        /* Additional Elements Styling */
        #recordtext {
            font-size: 20px;
            margin: 20px 0;
            color: #333;
        }

        #quiz {
            font-size: 24px;
            margin: 20px 0;
            color: #333;
        }

        #input input[type="text"] {
            width: 5%;
            height: 50px;
            font-size: 30px;
            margin: 0 5px;
            border: 2px solid #ccc;
            border-radius: 5px;
            text-align: center;
            background-color: white;
            color: #333;
        }

        #time {
            font-size: 24px;
            margin-top: 20px;
            color: #333;
        }

        /* Responsive Design */
        @media (max-width: 600px) {
            form {
                width: 90%;
                padding: 15px;
            }

            button {
                width: 90%;
                margin: 10px 0;
            }

            #input input[type="text"] {
                width: 8%;
                height: 40px;
                font-size: 24px;
                margin: 0 3px;
            }

            #quiz {
                font-size: 20px;
            }

            #recordtext {
                font-size: 18px;
            }

            #time {
                font-size: 20px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Game Over Form -->
        <form action="{{ route('f_update') }}" id="hidden" method="post">
            @csrf
            <h1>GAME OVER</h1>
            <table>
                <tr>
                    <th>Record:</th>
                    <th>
                        <input type="number" name="record" value="0" id="record" readonly>
                    </th>
                </tr>
                <tr>
                    <th>
                        <button type="submit">Submit</button>
                    </th>
                    <th>
                        <button type="button" onclick="reset()" id="reset">Restart</button>
                    </th>
                </tr>   
            </table>
        </form>

        <!-- Game Elements -->
        <h1 id="recordtext"></h1>
        <p id="quiz"></p>
        <div id="input"></div>
        <p id="time"></p>
    </div>

    <script>
        const answer = [
            ["a","p","p","l","e"],
            ["s","w","o","r","d"],
            ["a","n","i","m","a","l"],
            ["o","r","a","n","g","e"],
            ["r","e","d"],
            ["a","n","d"],
            ["m","o","t","h","e","r"],
            ["f","a","t","h","e","r"]
        ];
        let randomnumber = Math.floor(Math.random() * answer.length);
        let time = 10;
        let intervalId;

        function rowanswer(answers){
            document.getElementById('quiz').innerHTML = "";
            document.getElementById('input').innerHTML = "";

            answer[answers].forEach((char, index) => {
                document.getElementById('quiz').innerHTML += char;
                let input = document.createElement('input');
                input.setAttribute('type','text');
                input.setAttribute('id', index);
                input.setAttribute('maxlength', '1');
                input.setAttribute('oninput', `inputautofocus(${index}, ${index + 1}, ${answer[answers].length}, ${answers})`);
                input.setAttribute('onkeydown', `handleBackspace(event, ${index})`); // Added for backspace handling
                document.getElementById('input').appendChild(input);  
            });

            document.getElementById('quiz').innerHTML += "<br>";
            document.getElementById(0).focus();
        }

        rowanswer(randomnumber);
        startinterval();

        function inputautofocus(current, next, total, number){
            if (document.getElementById(current).value !== "") {
                if (current < total - 1) {
                    document.getElementById(next).focus();
                }
                if (current === total - 1) {
                    checkanswer(total, number);
                }
            }
        }

        // Added Function: Handle Backspace to Focus Previous Input
        function handleBackspace(event, currentIndex){
            if(event.key === "Backspace" && document.getElementById(currentIndex).value === ""){
                if(currentIndex > 0){
                    document.getElementById(currentIndex - 1).focus();
                    document.getElementById(currentIndex - 1).value = "";
                }
            }
        }

        function checkanswer(total, number){
            var correct_answer = 1;
            for (let index = 0; index < total; index++) {
                const inputid = document.getElementById(index);
                var inputvalue = inputid.value;
                var checkarray = answer[number];
                if (inputvalue === checkarray[index]) {
                    correct_answer++;
                }
                if (correct_answer > total ) {
                    document.getElementById('input').innerHTML = "";
                    document.getElementById('quiz').innerHTML = "";
                    let recordvalue = document.getElementById('record');
                    var recordmark = parseInt(recordvalue.value) + 1;
                    document.getElementById('recordtext').innerHTML = "Record :" + recordmark;
                    recordvalue.value = recordmark;
                    console.log('get record / answer:' + total);
                    randomnumber = Math.floor(Math.random() * answer.length);
                    rowanswer(randomnumber);
                }
            }
            document.getElementById('input').innerHTML = "";
            document.getElementById('quiz').innerHTML = "";
            randomnumber = Math.floor(Math.random() * answer.length);
            rowanswer(randomnumber);
        }

        function startinterval(){
            intervalId = setInterval(function(){
                time--;
                document.getElementById('time').innerHTML = "Time : " + time;
                if (time === 0) {
                    clearInterval(intervalId);
                    document.getElementById('input').innerHTML = "";
                    document.getElementById('quiz').innerHTML = "";
                    document.getElementById('hidden').style.display = "block";
                }
            }, 1000);
        }

        function reset(){
            clearInterval(intervalId);
            time = 60;
            document.getElementById('time').innerHTML = "Time : " + time;
            document.getElementById('hidden').style.display = "none";
            document.getElementById('input').innerHTML = "";
            document.getElementById('quiz').innerHTML = "";
            randomnumber = Math.floor(Math.random() * answer.length);
            rowanswer(randomnumber);
            startinterval();
        }
    </script>
</body>
</html>
