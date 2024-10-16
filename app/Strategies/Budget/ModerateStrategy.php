<?php
namespace App\Strategies\Budget;

class ModerateStrategy implements BudgetStrategy
{
    public function calculateBudget(float $totalIncome, float $totalExpenses): float
    {
        $savingsRate = 0.2; // Por exemplo, 20% de poupança
        $savings = $totalIncome * $savingsRate;

        // O cálculo do orçamento deve considerar a poupança
        return $totalIncome - ($totalExpenses + $savings);
    }
}

?>: