@extends('layouts.app')

@section('styles')
<style>
    .card-footer{
        display: flex;
        flex-direction: row;
        justify-content: space-between;
    }
</style>
@endsection

@section('conteudo')

<div class="container m-3">
    <div class="row">
        <div class="col-lg-4 text-left">
            <h1 class="text-left">Produtos</h1>
        </div>
        <div class="col-lg-4">
            <form action="">
                <label for="filtroFavorito">Ordenar por:</label>
                <select name="filtroFavorito" id="">
                    <option value="" disabled selected>Ordenar por...</option>
                    <option value="menorValor">Menor Valor</option>
                    <option value="maiorValor">Maior Valor</option>
                    <option value="maisPopular">Mais Popular</option>
                    <option value="melhorAvaliado">Melhor Avaliado</option>
                </select>
            </form>
        </div>
    </div>
</div>

<hr>

<div class="row">
    <div class="col-lg-3">
        <form action="" method="get">
            <p><br>Categorias</p>
            @foreach($categorias as $categoria)
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="{{$categoria->id}}" id="{{$categoria->descricao}}" name="categorias[]">
                <label class="form-check-label" for="{{$categoria->descricao}}">
                    {{ $categoria->descricao }}
                </label>
            </div>
            @endforeach


            <p><br>Material</p>
            @foreach($materiais as $material)
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="{{$material->id}}" id="{{$material->descricao}}" name="materiais[]">
                <label class="form-check-label" for="{{$material->descricao}}">
                    {{$material->descricao}}
                </label>
            </div>
            @endforeach

            <p><br>Valor</p>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="lowestprice" id="lowestprice" name="filtroValor[]">
                <label class="form-check-label" for="lowestprice">
                    Até R$ 200,00
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="lowprice" id="lowprice" name="filtroValor[]">
                <label class="form-check-label" for="lowprice">
                    De R$ 200,00 até R$ 400,00
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="midprice" id="midprice" name="filtroValor[]">
                <label class="form-check-label" for="midprice">
                    De R$ 400,00 até R$ 600,00
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="highprice" id="highprice" name="filtroValor[]">
                <label class="form-check-label" for="highprice">
                    Acima de R$ 600,00
                </label>
            </div>

            <p><br>Cor</p>
            @foreach($cores as $cor)
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="{{$cor->id}}" id="{{$cor->descricao}}" name="cores[]">
                    <label class="form-check-label" for="{{$cor->descricao}}">
                        {{$cor->descricao}}
                    </label>
                </div>
            @endforeach

        </form>
    </div>

    <div class="col-lg-9">
        <div class="row">
            @foreach($produtos as $produto)

                @include('components.card-produto',['produto' => $produto])

            @endforeach

        </div>

    </div>

</div>



@endsection
