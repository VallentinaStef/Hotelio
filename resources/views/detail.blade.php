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
            background-color: rgb(255, 255, 255);
        }
        ul {
list-style-type: none;
margin: 0;
padding: 0;
overflow: hidden;
background-color: #333;
font-family: montserrat;
color: White;
}

li {
float: right;
}

li a {
display: block;
color: white;
text-align: center;
padding: 14px 16px;
text-decoration: none;
}

/* Change the link color to #111 (black) on hover */
li a:hover {
background-color: #111;
}
.hotel{
    position: absolute;
    top: 3%;
    left: 5%;
    
}
        .container{
                /* border: 1px solid #000; */
                width: 60%;
                display: inline-block;
                font-family: Montserrat;
                background-color: rgb(255, 254, 254);
                position: absolute;
                left: 20%;
        }
        /* .container-img{
            width: 50%;
        } */
        .button1{
            position:absolute;
            right: 5%;
            top: 10%;
        }
        .button2{
            position:absolute;
            left:5%;
            top: 10%;
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
        /* .container-img{
            /* position: absolute; */
            width: 60%;

        } */
        .icon{
            position:absolute;
        }
        .icon-wifi{
            position: absolute;
            width: 7%;
            left: 5%;
        }
        .icon-breakfast{
            position: absolute;
            width: 7%;
            left: 15%;
        }
        .fasilitas{
            font-size: 120%;
        }
        .about{
            font-size: 120%;
        }
        h2{
            font-size: 200%;
        }
        </style>
</head>
<body>

    
    <ul>
        <li><a href="/">Home</a></li>
        <li><a href="/home">Hotel</a></li>
        <li class="hotel"><img src="">Hotelio</a></li>
      </ul>


     <div class="container">

        <div class="button2">
            <a href="/home"> <img src="{{ asset('img/back.png') }}"  class="img3"> </a>
        </div>
        <div class="button1">
            <a href="/delete/{{$data->id}}"> <img src="{{ asset('img/delete.png') }}"  class="img"> </a>
            <a href="/show/{{$data->id}}"> <img src="{{ asset('img/edit.png') }}"  class="img2"> </a> 
        </div><br>
        <br><br>

        <center> <h2>{{$data->HotelName}}</h2>
            <p>{{$data->Location}}</p>
                <div class="container-img">
                   <img src="{{ asset('img/'.$data->image) }}">
                </div><br><br> </center>
                <h3 class="about"> About the Hotel</h3 >
            <p> {{$data->Synopsis}}</p>
        

        <p class="fasilitas"> Fasilitas </p>
        <div class="icon">
            <img src="{{ asset('img/wifi.png')}}" class="icon-wifi">
            <img src="{{ asset("img/breakfast.png")}}" class="icon-breakfast">
        </div>
</div> 
    

</body>
</html>