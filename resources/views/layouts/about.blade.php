@extends('layouts.dua')

@section('container')
<html>
<head>
<style>
#about{
    margin-top: 100px;
}
#about h1{
    text-align: center;
    font-weight: bold;
    font-family: 'Dancing Script', cursive;
    border-bottom: 2px solid #ffc800;
    text-shadow: 1px 1px 1px black;
}
#about h2{
    font-weight: bold;
    font-family: 'Dancing Script', cursive;
    border-bottom: 2px solid #ffc800;
    text-shadow: 1px 1px 1px black;
}
#about p{
    font-family: 'Roboto Slab', serif;
}
#readmorebtn button{
    width: 200px;
    height: 32px;
    background: transparent;
    border: 2px solid #ffc800;
    color: #ffc800;
    font-weight: bold;
    letter-spacing: 3px;
    transition: 0.5s ease;
}
#about .card{
    background-color: #ffc800;
}
#readmorebtn button:hover{
    background-color: #ffc800;
    color: white;
}


#cards{
    margin-top: 100px;
    font-family: 'Roboto Slab', serif;
}
#cards .card h3{
    color: #ffc800;
    font-weight: bold;
}
#cards .card p{
    color: #ffc800;
    font-weight: bold;
}
#rn{
    width: 150px;
    height: 32px;
    border: none;
    background: transparent;
    color: #ffc800;
    border: 2px solid #ffc800;
    font-weight: bold;
    text-shadow: 1px 1px 1px black;
    transition: 0.5s ease;
    cursor: pointer;
}
#rn:hover{
    background-color: #ffc800;
    color: white;
}
/* about */
</style>
</head>
<body>
    <!-- about -->
    <div class="container">
        <h1>ABOUT</h1>
        <div class="row">
            <div class="col-md-6 py-3 py-md-0">
            <div class="card">
                <img src="./images/kitchen1.png" alt="">
            </div>
            </div>
            <div class="col-md-6 py-3 py-md-0">
            <h2>Delicious Burger</h2>
            <p>Burger begitu menggugah selera dengan paduan sempurna antara gurihnya daging panggang, kelembutan roti yang renyah di luar dan lembut di dalam, serta sensasi menyegarkan dari beragam tambahan seperti selada, tomat, dan saus istimewa. Setiap gigitan membawa kebahagiaan tak terduga, di mana rasanya yang menggoda mengisi mulut dengan kenikmatan tak terkalahkan. Burger menjadi simbol penuh cita rasa dalam setiap hidangan, menghadirkan kepuasan yang sejati bagi pencinta makanan di seluruh dunia. Tidak ada yang dapat menandingi sensasi kesenangan sederhana dari makanan burger yang tak hanya memuaskan perut, tetapi juga menggugah indera dan mengisi hati dengan kebahagiaan yang tak terlupakan.</p>
            </div>
        </div>
    </div>

    <div class="container" id="cards">
        <div class="row">
        <div class="col-md-6 py-3 py-md-0">
            <div class="card">
            <img src="./images/cards1.png" alt="">
            <div class="card-img-overlay">
                <h3>HamBurger</h3>
                <button id="rn">Order Now</button>
            </div>
            </div>
        </div>
        <div class="col-md-6 py-3 py-md-0">
            <div class="card">
            <img src="./images/cards2.png" alt="">
            <div class="card-img-overlay">
                <h3>Pizza</h3>
                <button id="rn">Order Now</button>
            </div>
            </div>
        </div>
        </div>
        <div class="row" style="margin-top: 30px;">
        <div class="col-md-4 py-3 py-md-0">
            <div class="card">
            <img src="./images/cards3.png" alt="">
            <div class="card-img-overlay">
                <h3>Italian pizza</h3>
                <button id="rn">Order Now</button>
            </div>
            </div>
        </div>
        <div class="col-md-4 py-3 py-md-0">
            <div class="card">
            <img src="./images/cards4.png" alt="">
            <div class="card-img-overlay">
                <h3>Fried Chicken</h3>
                <button id="rn">Order Now</button>
            </div>
            </div>
        </div>
        <div class="col-md-4 py-3 py-md-0">
            <div class="card">
            <img src="./images/cards5.png" alt="">
            <div class="card-img-overlay">
                <h3>Chesse Burger</h3>
                <button id="rn">Order Now</button>
            </div>
            </div>
        </div>
        </div>
    </div>
    <!-- about -->
</body>
</html>
@endsection