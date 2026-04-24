<?php

use ZubZet\Framework\Routing\Route;

// Example route:
Route::group("", function () {})
    ->middleware([DashboardController::class, "sidebar"]);


// hier mache ich bei der posts/view auf jeden fall so ein aftermiddleware, was die 
// visits zählt https://zubzet.com/docs/latest/core-features/routing/