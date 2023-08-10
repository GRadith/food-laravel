<html>
<head>
<style>
        /* footer */
#footer{
    padding: 0 0 30px 0;
    font-family: 'Roboto', sans-serif;
    color: white;
    font-size: 14px;
    background: #ffc800;
    font-weight: bold;
}
#footer .footer-top{
    padding: 60px 030px;
    border: 2px solid #ffc800;
    font-weight: bold;
    background: linear-gradient(110deg, black 67%, #ffc800 32%);
    color: white;
}
#logo2{
    font-size: 30px;
    color: white;
    font-weight: bold;
}
#logo2 img{
    margin-bottom: 10px;
}
#footer .footer-top .footer-contact h4{
    font-size: 22px;
    margin: 0 0 300px 0;
    padding: 2px 0 2px 0;
    line-height: 1;
    font-weight: 700;
}
#footer .footer-top .footer-contact p{
    font-size: 16px;
    margin: 0;
    color: white;
    line-height: 1;
    font-weight: 700;
}
#footer .footer-top h4{
    font-size: 16px;
    font-weight: bold;
    position: relative;
    padding-bottom: 700;
}
#footer .footer-top .footer-links{
    margin-bottom: 30px;
}
#footer .footer-top .footer-links ul{
    list-style: none;
    padding: 0;
    margin: 0;
}
#footer .footer-top .footer-links ul li{
    padding-right: 10px 0;
    display: flex;
    align-items: center;
}
#footer .footer-top .footer-links ul li a{
    text-decoration: none;
    color: white;
    line-height: 2;
    transition: 0.5s ease;
}
#footer .footer-top .footer-links ul li a:hover{
    color: #ffc800;
}
#footer .footer-top .socail-links a{
    font-size: 18px;
    display: inline-block;
    color: white;
    line-height: 1;
    padding-right: 4px;
    text-align: center;
    width: 36px;
    height: 36px;
    transition: 0.5s ease;
    cursor: pointer;
}
#footer .footer-top .socail-links a:hover{
    color: black;
}
#footer .copyright{
    text-align: center;
    float: left;
}
#footer .credits{
    float: right;
    text-align: center;
}
/* footer */
@media screen and (max-width:768px) {
    .footer-top h4{
        text-color: white;
    }
}
    </style>
</head>
<body>
    <!-- footer -->
    <footer id="footer" style="margin-top: 50px;">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                <div class="col-lg-3 col-md-6 footer-contact">
                    <a class="navbar-brand" href="#" id="logo2"><img src="./images/logo.png" alt="" width="30px"> Hamger</a>
                    <p>Hamger kini tersedia di 3 kota.</p><br>
                    <p>
                    Sidoarjo <br><br>
                    Surabaya <br><br>
                    Malang <br><br>
                    </p>
                    <strong><i class="fa-solid fa-phone"></i> Phone: <strong>(+62)81217590238</strong></strong><br>
                    <strong><i class="fa-solid fa-envelope"></i> Email: <strong>hamger@gmail.com</strong></strong>
                </div>
                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Contact</a></li>
                    </ul>
                </div>
                
                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Our Services</h4>
                    <p>Hamger menyediakan beberapa macam menu selain burger.</p>
                    <ul>
                    <li><a href="#">Burger</a></li>
                    <li><a href="#">Pizza</a></li>
                    <li><a href="#">Fries</a></li>
                    <li><a href="#">Fried Chiken</a></li>
                    </ul>
                </div>
                
                <div class="col-lg-3 col-md-6 footer-links">
                    <h4 class="text-dark">Our Socail Links</h4>
                    <p class="text-dark">Hamger mempunyai beberapa akun sosial media yang bisa anda ikuti.</p>
                    <div class="socail-links mt-3 text-dark">
                    <a href="#"><i class="fa-brands fa-twitter"></i></a>
                    <a href="#"><i class="fa-brands fa-facebook"></i></a>
                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                    </div>
                </div>
                </div>
            </div>
        </div>
    <hr>
    </footer>
    <!-- footer -->
</body>
</html>