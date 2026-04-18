<?php

use ZubZet\Framework\Routing\Route;

// Example route:
Route::get("/hello/world", [ExampleController::class, 'helloWorld']);



// hier mache ich bei der posts/view auf jeden fall so ein aftermiddleware, was die 
// visits zählt https://zubzet.com/docs/latest/core-features/routing/
