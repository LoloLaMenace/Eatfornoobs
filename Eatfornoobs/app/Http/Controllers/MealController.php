<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Xefi\Faker\Faker;

class MealController extends Controller
{
    public function getMeals(Request $request): View
    {
        $name = 'test';
        return view('welcome', ['name' => $name]);
    }
}
