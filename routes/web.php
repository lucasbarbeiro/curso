<?php

use App\Http\Controllers\Admin\DetailPlanController;
use App\Http\Controllers\Admin\PlanController;
use App\Models\DetailPlan;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')      //inclui admin antes da rota
    //->namespace('Admin')    //inclui a pasta Admin antes da classe
    ->group(function () {

        /**
         * Routes Details
         */
        Route::delete('plans/{url}/details/{idDetail}', [DetailPlanController::class, 'destroy'])->name('details.plan.destroy');
        Route::get('plans/{url}/details/{idDetail}', [DetailPlanController::class, 'show'])->name('details.plan.show');
        Route::put('plans/{url}/details/{idDetail}', [DetailPlanController::class, 'update'])->name('details.plan.update');
        Route::get('plans/{url}/details/{plan_id}/edit', [DetailPlanController::class, 'edit'])->name('details.plan.edit');
        Route::post('plans/{url}/details', [DetailPlanController::class, 'store'])->name('details.plan.store');
        Route::get('plans/{url}/details/create', [DetailPlanController::class, 'create'])->name('details.plan.create');
        Route::get('plans/{url}/details', [DetailPlanController::class, 'index'])->name('details.plan.index');

        /**
         * Routes Plans
         */

        Route::put('plans/{url}', [PlanController::class, 'update'])->name('plans.update');
        Route::get('plans/{url}/edit', [PlanController::class, 'edit'])->name('plans.edit');
        Route::get('plans/create', [PlanController::class, 'create'])->name('plans.create');
        Route::any('plans/search', [PlanController::class, 'search'])->name('plans.search');
        Route::delete('plan/{url}', [PlanController::class, 'destroy'])->name('plans.destroy');
        Route::get('plan/{url}', [PlanController::class, 'show'])->name('plans.show');
        Route::post('plan', [PlanController::class, 'store'])->name('plans.store');
        Route::get('plans', [PlanController::class, 'index'])->name('plans.index');

        /**
         * Home Dashboard
         */
        Route::get('/', [PlanController::class, 'index'])->name('admin.index');
    });



Route::get('/', function () {
    return view('welcome');
});
