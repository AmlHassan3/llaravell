<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous" >
    <title>Document</title>

    <style>
        * {
          margin: 0;
          padding: 0;
        }
    
        body {
          height: 100%;
        }
    
        .wrapper {
          min-height: 100%;
          position: relative;
        }
    
        .content {
          padding-bottom: 50px; /* تعديل هذا الرقم وفقًا لارتفاع الـ footer */
        }
    
        .footer {
          position: fixed;
          left: 0;
          bottom: 0;
          width: 100%;
          background-color: #0b4482;
          padding: 20px;
          text-align: center;
          height: 50px; /* تعديل هذا الرقم وفقًا لارتفاع الـ footer */
        }

        body{
            background-image: url("https://images.pexels.com/photos/19670/pexels-photo.jpg?auto=compress&cs=tinysrgb&w=600");
            background-size: cover;
            background-position: center;
        background-repeat: no-repeat;
        }

        a {
            text-decoration: none;
        }
      </style>
</head>

<body background="photo_2023-05-24_16-50-58">

        <div class="wrapper">

            <div class="container">
                @yield('content')
            </div>

            <div class="footer">
              <p>حقوق النشر &copy; 2023. جميع الحقوق محفوظة.</p>
            </div>

          </div>
</body>

</html>
