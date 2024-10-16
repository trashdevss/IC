@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Resultado do Cálculo do Orçamento</h2>
    <p><strong>Renda Total:</strong> R$ {{ number_format($income, 2, ',', '.') }}</p>
    <p><strong>Despesas Totais:</strong> R$ {{ number_format($expenses, 2, ',', '.') }}</p>
    <p><strong>Estratégia Escolhida:</strong> {{ ucfirst($strategyType) }}</p>
    <p><strong>Orçamento Restante:</strong> R$ {{ number_format($remainingBudget, 2, ',', '.') }}</p>
    <a href="{{ route('budget.index') }}" class="btn btn-secondary">Calcular Novamente</a>
</div>
@endsection
