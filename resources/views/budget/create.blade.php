<form action="{{ route('budget.calculate') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="income">Renda Total:</label>
        <input type="number" class="form-control" id="income" name="income" value="{{ old('income', 5000) }}" required>
    </div>

    <div class="form-group">
        <label for="expenses">Despesas Totais:</label>
        <input type="number" class="form-control" id="expenses" name="expenses" value="{{ old('expenses', 3000) }}" required>
    </div>

    <div class="form-group">
        <label for="strategy">Escolha a Estratégia:</label>
        <select class="form-control" id="strategy" name="strategy" required>
            <option value="moderate" {{ old('strategy') == 'moderate' ? 'selected' : '' }}>Moderada</option>
            <option value="economic" {{ old('strategy') == 'economic' ? 'selected' : '' }}>Econômica</option>
            <option value="luxurious" {{ old('strategy') == 'luxurious' ? 'selected' : '' }}>Luxuosa</option>
        </select>
    </div>

    <button type="submit" class="btn btn-primary">Calcular Orçamento</button>
</form>
