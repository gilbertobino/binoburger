@section('title','Sistema Post')
@extends('main')

@section('content')

    <section class="slider" id="home">
        <div class="container-fluid">
            <div class="row">
                <div id="carouselHacked" class="carousel slide carousel-fade" data-ride="carousel">
                    <div class="header-backup"></div>
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <img src="images/ServBanner4.png" style alt="">
                                <div class="carousel-caption">
                                    <h1>ServJobs</h1>
                                    <p><h2>Seja bem-vindo</h2></p>
                                    <br>
                                    <button>Leia mais</button>                
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
			</div>
        </div>
    </section>
<hr />
    <div id="msgPesquisa">
       <h1>FAÇA AQUI SUA BUSCA PELA PROFISSÃO DESEJADA</h1>
    </div>
<hr />	
	
<div class="row">
  <?php foreach ($mais_vistos as $key => $value): ?>
    <div class="col-md-4">
      <div class="thumbnail">
        <img src="{!! url($value->imagem) !!}" alt="" />
        <div class="caption">
          <h3>{!! $value->titulo !!}</h3>
          <span class="pull-right"> {!! $value->created_at->diffForHumans() !!}</span>
          <p>
            <a href="{!! url('visualizar-post/'.$value->id) !!}" class="btn btn-success" role="button">Visualizar</a>
            <span>Visualização ({!! $value->total_visualizacao !!})</span>
          </p>
        </div>
      </div>
    </div>
  <?php endforeach; ?>
</div>

<div class="row">
  {!! $ultimos->render() !!}
</div>
@endsection
