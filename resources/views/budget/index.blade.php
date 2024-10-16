@extends('layouts.admin') <!-- Ou qualquer outro layout que você esteja utilizando -->

@section('content')
    <div class="container">
        <h1>Orçamento</h1>
        <form action="{{ route('budget.calculate') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="income">Renda:</label>
                <input type="number" id="income" name="income" class="form-control">
            </div>
            <div class="form-group">
                <label for="expenses">Despesas:</label>
                <input type="number" id="expenses" name="expenses" class="form-control">
            </div>
            <div class="form-group">
                <label for="strategy">Estratégia:</label>
                <select id="strategy" name="strategy" class="form-control">
                    <option value="economic">Econômica</option>
                    <option value="moderate">Moderada</option>
                    <option value="luxurious">Luxuosa</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Calcular</button>
        </form>
    </div>
@endsection
