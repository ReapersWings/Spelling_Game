<div>
    <div>
        <form action="{{ route('f_update') }}" id="hidden" method="post" style="display:none;background-color:rgb(249, 145, 101);width:50%">
        @csrf
        <table style="width: 100%">
            <tr>
                <th colspan="2"><h1 style="margin: 0px ;margin-bottom:2px">GAME OVER</h1></th>
            </tr>
            <tr>
                <th style="width: 50%">Record:</th>
                <th><input type="number" name="record" value="0" id="record" style="border: 2px solid black;width: 50%" readonly></th>
            </tr>
            <tr>
                <th><button type="submit" style="float: right"><h2 style="margin: 0px">Submit</h2></button></th>
                <th><button type="button" onclick="reset()" style="float:left;" id="reset"><h2 style="margin: 0px">Restart</h2></button></th>
            </tr>   
        </table>
    </form>
        <h1 id="recordtext"></h1>
        <p id="quiz"></p>
        <div id="input"></div>
    </div>
</div>
<p id="time"></p>
<style>
    form{
        overflow: auto;
    }
    input{
        border-radius: 5px;
        background-color: rgba(73, 73, 73,0.7);
        color:white;
        text-align: center;
    }
    th{
        padding: 5px;
    }
    button{
        width: 40%;
        border: 2px solid yellow;
        background-color: orange;
        border-radius: 5px;
    }
    button['type'=button]{
        float:left;
    }
</style>
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
                ]
    let randomnumber =Math.floor(Math.random() * answer.length);
    function rowanswer(answers){
        //console.log(randomnumber)
        let loopstime = 0 ;
        for (let index = 0; index < answer[answers].length ; index++) {
            document.getElementById('quiz').innerHTML+= answer[answers][index];
            loopstime+=1
            let input = document.createElement('input');
            input.setAttribute('type','text')
            input.setAttribute('id',index)
            input.setAttribute('style','width:5%;height:50px;font-size:30px')
            input.setAttribute('oninput','inputautofocus('+index+','+loopstime+','+answer[answers].length+","+answers+")")
            document.getElementById('input').appendChild(input)    
        }
        document.getElementById(0).focus()
    }
    rowanswer(randomnumber) ;
    function inputautofocus(please,next,total,number){
        var target = total-=1
        //console.log(please)
        if (document.getElementById(please).value !== "") {
            if (please < total) {
                document.getElementById(next).focus()
            }
            if (please === total) {
                console.log("start check" +total )
                checkanswer(total,number)
            }
        }
        
    }
    startinterval()
    function checkanswer(total,number){
        var correct_answer = 1;
        for (let index = 0; index < total; index++) {
            const inputid = document.getElementById(index)
            var inputvalue = inputid.value
            var checkarray = answer[number]
            if (inputvalue === checkarray[index]) {
                correct_answer++
                //console.log(correct_answer +"="+checkarray[index] +"/"+total+"//"+number)
            }
            if (correct_answer > total ) {
                document.getElementById('input').innerHTML=""
                document.getElementById('quiz').innerHTML=""
                let recordvalue=document.getElementById('record')
                var recordmark = parseInt(recordvalue.value)+1
                document.getElementById('recordtext').innerHTML="Record :"+recordmark
                recordvalue.value=recordmark
                console.log('get record / answer:'+total);
                randomnextnumber =Math.floor(Math.random() * answer.length);
                rowanswer(randomnextnumber)
            }
        }
        document.getElementById('input').innerHTML=""
                document.getElementById('quiz').innerHTML=""
                randomnextnumber =Math.floor(Math.random() * answer.length);
                rowanswer(randomnextnumber)
    }
    var time = 60 ;
    function startinterval(){
    const caltime = setInterval(function() {
        document.getElementById('time').innerHTML= "Time: "+time ;
        if (time <= 0) {
            document.getElementById('recordtext').innerHTML=""
            document.getElementById('quiz').innerHTML=""
            document.getElementById('input').innerHTML=""
            document.getElementById('time').innerHTML= "Time: "+time ;
            document.getElementById('hidden').style.display="block"
            clearInterval(caltime)
        }
        time -=1 ;
    }, 1000);
    }
    document.getElementById('reset').onclick = reset 
    function reset(){
        time = 60
        document.getElementById('input').innerHTML=""
        document.getElementById('quiz').innerHTML=""
        document.getElementById('hidden').style.display="none"
        document.getElementById('record').value=0;
        var randomnextnumber =Math.floor(Math.random() * answer.length);
        rowanswer(randomnextnumber)
        setTimeout(startinterval(), 100);
    }
</script>