<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\BudgetContext;
use App\Strategies\Budget\EconomicStrategy;
use App\Strategies\Budget\ModerateStrategy;
use App\Strategies\Budget\LuxuriousStrategy;

class BudgetController extends Controller
{
    public function index()
    {
        // Exibe o formulário inicial
        return view('budget.index');
    }

    public function calculate(Request $request)
    {
        // Obtém dados do formulário
        $income = $request->input('income', 5000);
        $expenses = $request->input('expenses', 3000);
        $strategyType = $request->input('strategy', 'moderate');

        // Inicializa o contexto
        $context = new BudgetContext();

        // Escolhe a estratégia com base no input
        switch ($strategyType) {
            case 'economic':
                $context->setStrategy(new EconomicStrategy());
                break;
            case 'luxurious':
                $context->setStrategy(new LuxuriousStrategy());
                break;
            default:
                $context->setStrategy(new ModerateStrategy());
                break;
        }

        // Calcula o orçamento
        $remainingBudget = $context->calculate($income, $expenses);

        // Retorna a view com o resultado
        return view('budget.result', [
            'remainingBudget' => $remainingBudget,
            'income' => $income,
            'expenses' => $expenses,
            'strategyType' => $strategyType
        ]);
    }
}
