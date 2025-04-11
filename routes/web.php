<?php

use App\Livewire\Menu\MediatorMenuComponent;
use Illuminate\Support\Facades\Route;


Route::get('/', MediatorMenuComponent::class)->name('menu');
Route::get('/nosotros', MediatorMenuComponent::class)->name('menu');
Route::get('/servicios', MediatorMenuComponent::class)->name('menu');
Route::get('/contactanos', MediatorMenuComponent::class)->name('menu');

// Route::get('/landing', MediatorDashboardComponent::class)->name('dashboard');

// Route::get('/galeria', MediatorGalleyComponent::class)->name('gallery');

// Route::get('/contactanos', MediatorContactFormComponent::class)->name('contactform');

// Route::get('/prueba', MediatorTestExamplesComponent::class)->name('testexamples');
