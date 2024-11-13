<?php

use App\Http\Controllers\StudentsController;
use Illuminate\Support\Facades\Route;

route::get("/", [StudentsController::class,"index"])->name("students.index");

route::get("/create", [StudentsController::class,"create"])->name("students.create");

route::post("/store", [StudentsController::class,"store"])->name("students.store");

route::get("/{id}", [StudentsController::class,"show"])->name("students.show");

route::get("/{id}/edit", [StudentsController::class,"edit"])->name("students.edit");

route::put("/{id}", [StudentsController::class,"update"])->name("students.update");

route::delete("/{id}", [StudentsController::class,"destroy"])->name("students.destroy");