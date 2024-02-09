<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia|Audiowide&effect=neon">
    <title>LEON Pop Up Page</title>
    <link rel="icon" type="image/x-icon" href="logo.png">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Me</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"> 
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-image: url('bgimg.jpg'); 
            background-size: cover;
            background-repeat: no-repeat;
        }
        header {
            color: black;
            text-align: center;
            padding: 20px;
        }
        .container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.9); 
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        h1, h2, p {
            text-align: center;
            color: #333;
        }
        .social-icons {
            text-align: center;
            margin-top: 20px;
        }
        .social-icons a {
            color: #007bff;
            text-decoration: none;
            margin: 0 15px;
            font-size: 24px;
            transition: color 0.3s ease;
        }
        .social-icons a:hover {
            color: #0056b3;
        }
    
        .link-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            margin-top: 30px;
        }
        /*.link-item {
            font-family: "Sofia", sans-serif;
            color: #fff;
            font-style: oblique;
            font-weight: bolder;
            flex-basis: calc(50% - 20px);
            margin: 10px;
            text-align: center;
            padding: 10px;
            background-color: #00ccff;
            border-radius: 5px;
            text-decoration: none;
            transition: background-color 0.3s ease, color 0.3s ease;
        }
        .link-item:hover {
            background-color: #2000b1;
            color: white;
            text-decoration: none;
        }*/
        .profile-picture {
            text-align: center;
            margin-bottom: 20px;
        }
        .profile-picture img {
            width: 200px; 
            height: 200px; 
            border-radius: 50%; 
        }
      
        #saveContactButton {
            background-color: #007BFF;
            color: #fff;
            border: none;
            padding: 10px 110px;
            font-size: 15px;
            cursor: pointer;
            border-radius: 5px;
            text-align: center;
        }

        #saveContactButton:hover {
            background-color: #2000b1;   
        }

        .center {
            display: block;
            margin-left: auto;
            margin-right: auto;
        }

        .name {
            font-family: 'Times New Roman', Times, serif;
            color: black;
        }

        .button{
            font-size: medium;
            background-color: #00ccff;
            color: #fff;
            text-align: center;
            border-radius: 5px;
            font-family: "Audiowide", sans-serif;
            border: none;
            flex-basis: calc(50% - 20px);
            margin: 10px;
            padding: 10px;
            background-color: #00ccff;
            border-radius: 5px;
            text-decoration: none;
            transition: background-color 0.3s ease, color 0.3s ease;
        }
        .button:hover{
            box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
        }
    </style>
</head>
<body>
    <div class="container">
        <img src="leon logo.png" alt="Logo" class="center" width="150px" height="40px" style="background-color: black; align-items: center; padding: 5px 5px; border-style: double; border-color: black; box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19); border-radius: 5px;">
        <div class="profile-picture">
            <img src="mypic.jpeg" alt="Your Name's Profile Picture" style="padding-top: 50px;"> 
        </div>
        <h2 class="name">Yash Sajda</h2>
        <p style="font-weight: bolder; font-size: larger; font-family: Verdana, Geneva, Tahoma, sans-serif;">Founder of BOSP</p>
        <p style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">Responsibities for overseeing the process of accquiring goods and services primary Role is to ensure the company obtain the necessary materials products or services at the best possible price, quality, and terms</p>
        
        <h2 style="font-weight: bold; font-size: medium;">Contact Information</h2>
         <p>8657379424</p>
         <p>yash.sajda004@gmail.com</p>
     
        <h2>Socials</h2>
        
       
        <div class="social-icons">
            <a href="https://www.facebook.com/yash.sajda.9?mibextid=ZbWKwL" target="_blank"><i class="fab fa-facebook"></i></a>
            <a href="https://twitter.com/i/flow/login?redirect_after_login=%2FYashSajda" target="_blank"><i class="fab fa-twitter"></i></a>
            <a href="https://www.linkedin.com/in/yash-sajda-852a2828a" target="_blank"><i class="fab fa-linkedin"></i></a>
            <a href="https://instagram.com/yash.sajda004?utm_source=qr&igshid=OGIxMTE0OTdkZA==" target="_blank"><i class="fab fa-instagram"></i></a>
        </div>

        
        <div class="link-container">
            <div class="form">
                <form>
                    <button class="button" onclick="window.location.href = 'data:text/x-vcard;charset=utf-8,%EF%BB%BFBEGIN:VCARD%0AVERSION:3.0%0AN:Yash%20Doe%0ATEL:8657379424%0AEMAIL:yash.sajda004@gmail.com%0AEND:VCARD;'" download="contact.vcf">
                        Save Contact
                    </button>
                </form>
            </div>
            <button class="button" onclick="window.location.href = 'https://www.amazon.com/';">
                Shopping Page
            </button>
            <button class="button" onclick="window.location.href = 'http://127.0.0.1:5500/MINI%20PROJECT/index.html'">
                Our Website
            </button>
                <button class="button" onclick="window.location.href = 'mailto:your_email@example.com;'">
                    Email me
                </button>
            </div>
        </div>
        <footer style="text-align: right; padding-top: 50px; font-weight: bolder;">BOSP</footer>
    </div> 
</body>

</html>
