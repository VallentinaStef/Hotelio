<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Dongle:wght@300;400;700&family=Montserrat+Alternates:ital,wght@0,500;0,800;1,700;1,800;1,900&family=Montserrat:wght@700&family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>Home</title>

    <style>

        body{
            font-family: montserrat;
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
            .container-hotels{
                display: flex;
                flex-direction: row;
                margin-top: 20px;
                /* border: 1px solid black; */

            }
            .hotels{
                margin-left: 10px;
                width: 15%;
                height: 15%;
                display: flex;
                flex-direction: column;
                /* border: 1px solid black; */
                box-shadow: 1px 1px 1px #999;

            }
            .hotels p{
                /* border: 1px solid black; */
                line-height: 1%;
            }
            .circle{
                position: absolute;
                top: 80%;
                right: 1%;

            }
            .img{
                width: 50%;
            }

    </style>
</head>
<body>
    <ul>
        <li><a href="/">Home</a></li>
        <li><a href="/home">Hotel</a></li>
        <li class="hotel"><img src="">Hotelio</a></li>
      </ul>

     
      <div class="container-hotels"> 
        @foreach ($data as $daftar)
          <div class="hotels">
            <img src="{{ asset('img/'.$daftar->image) }}" class="image">
            <a href="/detail/{{$daftar->id}}"> {{ $daftar->HotelName}}</a>
            <p> {{ $daftar->Location}} </p>
            <p> {{ $daftar->Price}} juta /night</p>
          </div>
          @endforeach   
      </div>

      <div class="circle">
         <a href="/tambah"> <img src="{{ asset('img/circle.png') }}" class="img"> </a>
      </div>
      

</body>
</html>