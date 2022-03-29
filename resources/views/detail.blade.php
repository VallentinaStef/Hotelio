<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Dongle:wght@300;400;700&family=Montserrat+Alternates:ital,wght@0,500;0,800;1,700;1,800;1,900&family=Montserrat:wght@700&family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>Detail Hotel</title>

    <style>
        .button{
                padding: 1.3em 3em;
                font-size: 12px;
                text-transform: uppercase;
                letter-spacing: 2.5px;
                font-weight: 500;
                color: #000;
                background-color: #fff;
                border: none;
                border-radius: 45px;
                box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.1);
                transition: all 0.3s ease 0s;
                cursor: pointer;
                outline: none;
        }   
        body{
            font-family: montserrat;
            background-color: #ddd;
        }
        .container{
                border: 1px solid #ddd;
                display: inline-block;
                padding: 2em;
                font-family: Montserrat;
                background-color: #ddd;
        }
        .button1{
            position:absolute;
            right: 5%;
            top: 20%;
        }
        .button2{
            position:absolute;
            left:5%;
            top: 15%;
        }
        .img{
            width: 25%;
        }
        .img2{
            width: 25%;
        }
        .img3{
            width: 100%;
        }
        </style>
</head>
<body>

    <div class="button2">
        <a href="/home"> <img src="{{ asset('img/back.png') }}"  class="img3"> </a>
    </div>
    <div class="button1">
        <a href="/delete/{{$data->id}}"> <img src="{{ asset('img/delete.png') }}"  class="img"> </a>
        <a href="/show/{{$data->id}}"> <img src="{{ asset('img/edit.png') }}"  class="img2"> </a> 
    </div><br>
    <br><br>

    <center> <div class="container">
        <h2>{{$data->HotelName}}</h2>
            <p>{{$data->Location}}</p>
                <div class="container-img">
                    <img src="{{ asset('img/'.$data->image) }}">
                </div>
                <h3> About the Hotel</h3 >
            <p> {{$data->Synopsis}}</p>
</div> 
</center>    

</body>
</html>