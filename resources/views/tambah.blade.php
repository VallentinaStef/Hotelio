<head>
    <title>Tambah Data Hotel</title>

    <link href="https://fonts.googleapis.com/css2?family=Dongle:wght@300;400;700&family=Montserrat+Alternates:ital,wght@0,500;0,800;1,700;1,800;1,900&family=Montserrat:wght@700&family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">


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
        .form-tambah{
            border: 1px solid #ddd;
            display: inline-block;
            padding: 2em;
            font-family: Montserrat;
            
        }
        .form-tambah input[type="text"]{
            border: none;
            border-bottom: 1px solid #ddd;
            color: #333;
            font-size: 14px;
            margin-bottom: 15px;
            padding: 0.5em 1em 0.5em 0;
            width: 200px;
        }
        .textarea{
            padding: 10px;
            max-width: 100%;
            line-height: 1.5;
            border-radius: 5px;
            border: 1px solid #ccc;
            box-shadow: 1px 1px 1px #999;
        }
    
            .hotel{
                position: absolute;
                top: 3%;
                left: 5%;
                
            }
            .button2{
            position:absolute;
            left:36%;
            top: 2%;
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

           <center> <form action="/insert" method="POST" enctype="multipart/form-data">
            @csrf
             <div class="form-tambah">
            <label class="form-label">Hotel Name</label>
            <input name="HotelName" type="text"> <br><br>
            

            <label class="form-label">Location</label>
            <input name="Location" type="text"> <br><br>

            <label class="form-label">Price per night</label>
            <input name="Price" type="text"> <br><br>

            <label class="form-label">Image</label>
            <input name="image" type="file"> <br><br><br>

            <label class="form-label">facilitas</label>
            <input name="Fasilitas" type="text"> <br><br>

            <label class="form-label">Synopsis</label>
            <textarea name="Synopsis" class="textarea" cols="5"></textarea> <br><br>
            
            <button type="submit" class="button">Add</button> 
         </center>
            </form>
        </div>
</body>
</html>