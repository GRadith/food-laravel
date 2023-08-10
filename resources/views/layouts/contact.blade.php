@extends('layouts.dua')

@section('container')
<html>
<head>
<style>
/* contact */
#contact{
    margin-top: 10px;
    border: 2px solid #ffc800;
}
#h2{
    margin-top: 100px;
    text-align: center;
    font-weight: bold;
    font-family: 'Dancing Script', cursive;
    border-bottom: 2px solid #ffc800;
    text-shadow: 1px 1px 1px black;
}
#contact h3{
    font-weight: bold;
    font-family: 'Dancing Script', cursive;
    border-bottom: 2px solid #ffc800;
    text-shadow: 1px 1px 1px black;
}
#contact p{
    font-family: 'Roboto Slab', serif;
}
#contact input{
    width: 500px;
    height: 42px;
    margin-top: 20px;
    background-color: #ffc800;
    border: none;
    border-radius: 5px;
}
#contact ::placeholder{
    color: black;
    font-family: 'Roboto Slab', serif;
    padding-left: 10px;
    font-weight: bold;
}
#btnmessage{
    margin-top: 20px;
    width: 200px;
    height: 32px;
    background: transparent;
    border: 2px solid #ffc800;
    letter-spacing: 3px;
    font-weight: bold;
    transition: 0.5s ease;
}
#btnmessage:hover{
    background-color: #ffc800;
    color: white;
}
#contact i{
    color: #ffc800;
    font-size: 20px;
    margin-top: 30px;
}
#contact i span{
    font-family: 'Dancing Script', cursive;
}

@media screen and (max-width:1200px){
    #contact input{
        width: 350px;
    }
}
@media screen and (max-width:385px){
    #contact input{
        width: 250px;
    }
}
/* contact */
</style>
</head>
<body>
    <!-- contact -->
    <div class="container">
        <h2 id="h2">CONTACT</h2>
    </div>
        <div class="container">
            <div class="row">
                <div class="col-md-6 py-3 py-md-0">
                    <h3>CONTACT</h3>
                    <p>Kalian bisa mengisi kolom tersebut jika ingin menghubungi resto kami.</p>
                    <input type="text" placeholder="Name"><br>
                    <input type="email" placeholder="Email"><br>
                    <input type="number" placeholder="Phone"><br>
                    <button id="btnmessage">Send</button>
                </div>
                <div class="col-md-6 py-3 py-md-0">
                    <h3>INFO</h3>
                    <p>KIrim email dan no.telepon melalui form berikut.Kami akan menghubungi anda kembali.</p>
                    <i class="fas fa-phone"> <span>(+62)81217590238</span></i><br>
                    <i class="fa-solid fa-envelope"> <span>hamger@gmail.com</span></i><br>
                    <i class="fa-solid fa-location-dot"> <span>Sidoarjo, Surabaya, Malang.</span></i><br>
                </div>
            </div>
        </div>
        <div class="mt-5">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d20618.495425428835!2d112.75246958312988!3d-7.31071235916576!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fbf95bbecceb%3A0x1e82e72847851187!2sBurger%20King%20-%20Merr%20Rungkut!5e0!3m2!1sid!2sid!4v1691244596261!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
    <!-- contact -->
</body>
</html>
@endsection