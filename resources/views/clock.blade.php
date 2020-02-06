<html>

<head>
    <title>Time Tracker app</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Add online Bootstrap -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    <style>
    @import 'https://fonts.googleapis.com/css?family=Nova+Mono|Eczar';

    #body {
        /* background-color: black; */
        color: black;
    }

    #div1 {
        /*background-color: red;*/
        /* /* transform: translateY(33%); */
        margin-top: 2px;
        */
    }

    #time {
        font-family: 'Nova Mono', monospace;
        font-size: 4vw;
        text-align: center;
        text-shadow: 0px 0px 20px;
    }

    #date {
        font-family: 'Eczar', serif;
        font-size: 3vmin;
        text-align: center;
        text-shadow: 0px 0px 20px blue;
    }

    h1 {
        color: black;
        margin-left: 20px;
    }

    /* @media only screen and (max-width: 500px){
  #time {font-size: 2em;}
  #date {font-size: 1em;}
} */
    </style>
</head>

<body id="body">

    <form method="post">
        {{ csrf_field() }}
        <br><br>
        <center>
            <select name="name" style="font-size: 24px" class="mdb-select md-form selectpicke">
                <option value="" disabled selected>Choose A Person</option>
                <option value="Lorly Sugal"> Lorly Sugal</option>
                <option value="Cristina Bustamante">Cristina Bustamante</option>
                <option value="Mary Ann Camay">Mary Ann Camay</option>
            </select>

            <br><br><br><br><br>
            <div name="timein" class="container">
                <div class="card" style="width: 40rem;">
                    <div class="card-body">
                        <div id="div1">
                            <p id="time"></p>
                        </div>
                    </div>
                </div>
            </div>

            <br><br><br>

            <button onclick="myFunction()" id="but" class="btn btn-primary btn-lg">Clock_In</button>
            <p id="demo1"></p>


            <div class="container" style="margin-left:100px">
                <a style="font-size:30px">

                </a>

                <br><br><br><br><br><br><br>
                <h1>Break</h1>
                <br>
                <button type="button" class="btn btn-success btn-lg" onclick="myFunction1()">Start</button>
                <p name="start" id="demo2"></p>
                <br><br><br><br><br><br><br><br>
                <button name="end" type="button" class="btn btn-info btn-lg" onclick="myFunction2()">End</button>
                <p id="demo3"></p>
                <br><br><br><br><br><br><br><br>
                <button type="submit" class="btn btn-warning btn-lg" onclick="myFunction3()">Check Out</button>
                <p name="out" id="demo4"></p>
                <br><br><br><br><br><br><br><br>
            </div>
        </center>



    </form>
    <br><br><br><br>




    <!-- Add online jQuery -->
    <script>
    window.setInterval(ut, 1000);

    function ut() {
        var d = new Date();
        document.getElementById("time").innerHTML = d.toLocaleTimeString().replace(/:\d{2}\s/, ' ');
    }

    function myFunction1() {
        var d = new Date();
        document.getElementById("demo2").innerHTML = d.toLocaleTimeString().replace(/:\d{2}\s/, ' ');
    }

    function myFunction2() {
        var d = new Date();
        document.getElementById("demo3").innerHTML = d.toLocaleTimeString().replace(/:\d{2}\s/, ' ');
    }

    function myFunction3() {
        var d = new Date();
        document.getElementById("demo4").innerHTML = d.toLocaleTimeString().replace(/:\d{2}\s/, ' ');
    }

    function myFunction() {
        var d = new Date();
        document.getElementById("demo1").innerHTML = d.toLocaleTimeString().replace(/:\d{2}\s/, ' ');
    }
    </script>


    <div>
        <h1>Total Time Work:</h1>
        <h1>Hours Left Before Timeout:</h1>
        <h1>Total Breaks used:</h1>
    </div>

</body>

</html>