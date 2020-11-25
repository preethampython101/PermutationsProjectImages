<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width-device-width, intial-scale = 1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        body{
            background: url("https://github.com/preethampython101/PermutationsProject/blob/main/qmark2.jpg?raw=true");
            background-repeat: no-repeat;
            background-size: 100%;
            font-family: "Courier New", Courier, monospace;
            background-color: #cccccc;
        }

        .nav-bar {
            width: fit-content;
            height: fit-content;
            padding: 0.5%;
            float: right;
            color: rgb(255, 255, 255);
            text-align: center;
            font-size: 25px;
            text-decoration: none;
            text-shadow:
                0px 1px 3px rgba(000, 000, 000, 0.3),
                0px 0px 0px rgba(255, 255, 255, 0);
            position: absolute;
            clear: both;
            /* margin-top: 12%; */
        }

        .nav-bar:hover {
            background: #c78cfa;
            border-radius: 25px;
            border: 1px solid rgb(69, 9, 104);
            box-shadow:
                0px 5px 5px rgba(000, 000, 000, 0.1),
                inset 0px 1px 0px rgba(255, 255, 255, 0.5);
            color: white;
        }

        .about {
            margin-left:65%;
            margin-top: 2%;
        }

        .course-select {
            margin-left: 62%;
            margin-top: 0%;
        }
        
        input[type="text"] {
            background: #ffffff;
            padding: 1.2% 2%;
            width: 20%;
            margin-bottom: 5%;
            clear: both;
            border-radius: 15px;
            border: none;
            color: #2b2b2b;
            margin-top: 20%;
            margin-left: 10%;
            position: absolute;
        }

        input[type=text]:focus {
            outline: none;
        }

        input[type=submit] {
            display: inline-block;
            padding: 10px 20px;
            width: 20%;
            margin-top: 20%;
            margin-left: 40%;
            padding: 2.5%;
            color: #ebebeb;
            font-size: 1.5vw;
            font-family: Tahoma, Geneva, sans-serif;
            text-align: center;
            text-decoration: none;
            background: #c78cfa;
            border-radius: 15px;
            box-shadow: 10px 10px 10px #7228bd,
                -5px -5px 12px #9c4ced;
            text-shadow:
                0px 1px 3px rgba(000, 000, 000, 0.3),
                0px 0px 0px rgba(255, 255, 255, 0);
            position: absolute;
            clear: both;
            border: none;
            font-weight: strong;
        }

        input[type=submit]:hover {
            display: inline-block;
            padding: 10px 20px;
            width: 20%;
            margin-top: 20%;
            margin-left: 40%;
            padding: 2.5%;
            color: #ebebeb;
            font-size: 1.5vw;
            font-family: Tahoma, Geneva, sans-serif;
            text-align: center;
            text-decoration: none;
            background: #c78cfa;
            border-radius: 15px;
            box-shadow: 10px 10px 10px #7228bd,
                -5px -5px 12px #9c4ced;
            text-shadow:
                0px 1px 3px rgba(000, 000, 000, 0.3),
                0px 0px 0px rgba(255, 255, 255, 0);
            position: absolute;
            clear: both;
            border: none;
            font-weight: strong;
        }

        ::placeholder {
            font-size: 17px;
            font-family: Tahoma, Geneva, sans-serif;
        }

        .welcome {
            font-size: 70px;
			color: blue;
            margin-top: 5%;
            margin-left: 10%;
            position: absolute;
        }
    </style>
	<body>
    <!--<a href="Homeschool_register.php" class="login-button login">Log-Out</a>-->

    <div class="welcome">
        Welcome to the Word Permutation Calculator!
    </div>
    <form action="page1" METHOD="POST" id="signup">
        <input type="text" name="theword" value="" id="name" placeholder="Word"><br><br><br>
		<br><br><br><br><input type="submit" value="Calculate">
    
    </form>


</body>

</head>
</html>
