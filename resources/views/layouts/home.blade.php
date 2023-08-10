@extends('layouts.dua')

@section('container')
<html>
<head>
<style>
.home-section{
    width: 100%;
    height: 100vh;
    background: linear-gradient(110deg, white 68%, #ffc800 32%);
}
/* navbar */
#logo{
    font-size: 30px;
    margin-left: 30px;
    color: black;
    font-weight: bold;
    text-shadow: 1px 1px 1px black;
}
#logo img{
    margin-bottom: 10px;
}
#logo span{
    color: #ffc800;
}
.nav-item{
    margin-left: 30px;
}
.nav-item .nav-link{
    color: black;
    font-weight: bold;
    transition: 0.5s ease;
}
#first-child{
    color: #ffc800;
    text-shadow: 1px 1px 1px black;
}
.nav-item .nav-link:hover{
    color: #ffc800;
    text-shadow: 1px 1px 1px black;
}
.icons{
    margin-right: 30px;
}
.icons i{
    margin-left: 10px;
    cursor: pointer;
}
@media screen and (max-width:982px){
    .icons{
        margin-left: 25px;
    }
}
/* navbar */
/* home content */
.home{
    display: flex;
    align-items: center;
    justify-content: center;
    flex-wrap: wrap;
    position: relative;
    z-index: 0;
    font-family: 'Roboto Slab', serif;
}
.home .img{
    flex: 1 1 300px;
}
.home .img img{
    width: 92%;
    animation: c 5s linear infinite;
}
@keyframes c{
    0%, 100%{
        transform: translateY(0px);
    }
    50%{
        transform: translateY(30px);
    }
}
.home .content{
    flex: 1 1 400px;
    margin-top: 30px;
}
.content h1{
    margin-left: 42px;
    font-size: 65px;
    font-weight: bold;
    text-shadow: -1px 0px 0px black;
}
.content h1 span{
    color: #ffc800;
    text-shadow: 1px 1px 1px black;
    font-size: 100px;
    font-weight: bold;
}
.content p{
    margin-left: 42px;
}
#btn{
    margin-left: 42px;
}
#btn button{
    width: 150px;
    height: 32px;
    letter-spacing: 3px;
    background-color: black;
    color: white;
    border-radius: 5px;
    transition: 0.5s ease;
    cursor: pointer;
}
#btn button:hover{
    background-color: #ffc800;
    color: black;
    border: none;
}
#btn span{
    margin-left: 10px;
    font-size: 20px;
    font-weight: bold;
}
@media screen and (max-width:1200px){
    .home-section{
        height: 90vh;
    }
}
@media screen and (max-width:799px){
    .home-section{
        height: 140vh;
    }
}
@media screen and (max-width:550px){
    .home-section{
        height: 110vh;
    }
}
@media screen and (max-width:420px){
    .content h1 span{
        font-size: 80px;
    }
}
@media screen and (max-width:320px){
    .content h1{
        font-size: 50px;
    }
    .content h1 span{
        font-size: 60px;
    }
}
/* home content */
</style>
</head>

    <body>
    <!-- home section -->
    <div class="home-section py-5">
        <section class="home">
            <div class="content">
                <h1>Super Delicious
                <br> <span>Burger</span>
                </h1>
                <p>Resto kami menyajikan berbagai macam burger,dan rasanya sangat delicious, Yuk cobain!</p>
            </div>
            <div class="img">
                <img src="./images/burger.png" alt="">
            </div>
        </section>
    </div>
    <!-- home section -->
    </body>
    </html>
@endsection
