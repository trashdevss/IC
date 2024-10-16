<?php
namespace App\Strategies\Budget;

class LuxuriousStrategy implements BudgetStrategy
{
    public function calculateBudget(float $totalIncome, float $totalExpenses): float
    {
        // Exemplo: Luxo - gastar menos que a renda
        $savingsRate = 0.1; // 10% de poupança para luxos
        $savings = $totalIncome * $savingsRate;

        // Cálculo do orçamento, considerando as despesas
        return $totalIncome - ($totalExpenses - $savings);
    }
}

?>: