<link href="css/home.css" rel="stylesheet" type="text/css">

<style type="text/css">
    @font-face {
        font-family: FPRODISPLAYMEDIUM;
        src: url('{{ public_path('font/SFPRODISPLAYMEDIUM.OTF') }}');
    }
</style>

@extends('layouts.app')
<!--<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"> -->
   <!-- <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Viure Academy</title>

         Fonts 
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

                 Styles
        <style>
         
        </style>
    </head> -->
   <!-- <body>-->
          <!--<div class="flex-center position-ref full-height">
       @if (Route::has('login'))
                div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Cadastre-se</a>
                        @endif
                    @endauth
                </div> 
            @endif                 
            </div>-->
            @section('content')
                <div class="container" >
                        <div class="titulo2">
                            <h1 id="titulo">Aprenda com cabeleireiros de referência para ter um salão de sucesso. </h1>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has 
                                been the industry's standard dummy text ever since the 1500s, when an unknown printer took a 
                                galley of type and scrambled it to make a type specimen book. 
                            </p>
                                <button  type="sumit" class="cbtn btn btn-primary "> {{ __('Cadastre-se gratuitamente') }} </button>
                        </div>
                        <div></div> 
                </div>
                <div class="banner"   >
                        <img  src="images/home.jpg">
                </div>    
                <section class="caulas">      
                    <div >
                        <div>
                            <p>Aulas exclusivas desenvolvidas para o seu cresimento, seja mechas, gestão, ou administração de cor.</p>
                        </div>                
                    </div>
                </section>
            @endsection

            
    <!--</body>-->
<!--</html> -->
