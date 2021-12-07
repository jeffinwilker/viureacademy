<link href="css/inicio.css" rel="stylesheet" type="text/css">

@extends('layouts.app')

@section('content')
<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div> -->
<div>
    <div class="videos container">
        <div class="row">
            <div class="videos col-sm-4">
                <a href="" data-toggle="modal" data-target="#colorimetria">
                    <img src="images/Colorimetria1.png" alt="">
                </a>
            </div>
            <div class="videos  col-sm-4">
                <a href="" data-toggle="modal" data-target="#sucesso">
                    <img src="images/salao1.png" alt="">
                </a>
            </div>
            <div class="videos col-sm-4">
                <a href="" data-toggle="modal" data-target="#mechas">
                    <img  src="images/mechas1.png" alt="">
                </a>
            </div>
        </div>        
    </div>
</div>

<div class="modal fade" id="colorimetria" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="model1 modal-content">
        <div class="modal-header">
            <iframe   width="470" 
                            height="652" src="https://www.youtube.com/embed/A4CvflhEXI0" 
                            title="Colorimetria" 
                            frameborder="0" 
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                            allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="sucesso" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="model1 modal-content">
        <div class="modal-header">
            <iframe 
                            width="470" 
                            height="652" 
                            src="https://www.youtube.com/embed/tElyiFcUz9A" 
                            title="Salão de sucesso" 
                            frameborder="0" 
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                            allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="mechas" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="model1 modal-content">
        <div class="modal-header">
            <iframe 
                            width="470" 
                            height="652" 
                            src="https://www.youtube.com/embed/LOrnJjuLzRA" 
                            title="Mechas no dia a dia" 
                            frameborder="0" 
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen>
                </iframe>
            </div>
        </div>
    </div>
</div>
@endsection
