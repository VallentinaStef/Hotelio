<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <link href="https://fonts.googleapis.com/css2?family=Dongle:wght@300;400;700&family=Montserrat+Alternates:ital,wght@0,500;0,800;1,700;1,800;1,900&family=Montserrat:wght@700&family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

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
.image{
    position:absolute;
    width: 55%;
    height: 70%;
    right: 5%;
    top: 20%;
    box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.1);
}
h1{
    position:absolute;
    right: 65%;
    top: 35%;
    left: 10%;
}
h5{
    position:absolute;
    right: 70%;
    top: 52%;
    left: 10%;
}
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
                position: absolute;
                left: 10%;
                top: 63%;
            }
            .hotel{
                position: absolute;
                top: 3%;
                left: 5%;
                
            }
    </style>


    
</head>
<body>
    <ul>
        <li><a href="/landing">Home</a></li>
        <li><a href="/home">Hotel</a></li>
        <li class="hotel"><img src="">Hotelio</a></li>
      </ul>
    <h1>
        Our World is our PlayGround. 
    </h1>
    <h5>
        We give you want you want and less what you don't need.
    </h5>
    <img src="https://sultanjakarta.com/data/upload/images/d28c4f7445d31fd6da6b0d89660d2489_crop_920x530.jpg" class="image">

    <a href="/home"  class="button"> Explore</a>

</body>
</html>