<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaticController;
use App\Http\Controllers\VoituresController;
use App\Http\Controllers\EnregistrementController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PdfController;
use App\Http\Controllers\ReserverController;
use App\Http\Controllers\FilterController;
// use App\Http\Controllers\ppController;




Route::get('/w', function () {
    return view('voitures.welcome');
});

// Route::get('/', function () {
//     return view('home');
// });
    
Route::get('/',[StaticController::class,'home'])->name('home');
// Route::get('/voiture',[StaticController::class,'voiture'])->name('voiture');
Route::get('/condition',[StaticController::class,'condition'])->name('condition');
Route::get('/contact',[StaticController::class,'contact'])->name('contact');

Route::resource('voiture',VoituresController::class);
Route::post("/filter",[FilterController::class,'filter']);
// Route::get('/voiture',[VoituresController::class,'index']);
// Route::get('/tt',[ppController::class,'generatePdf']);



// Route::get('/login', function () {
//     return view('admin.login');
// });

Route::resource('voitures',EnregistrementController::class);
Route::resource('locataire',ClientController::class);
Route::resource('reserver',ReserverController::class);


Route::get('pdf/{id}', [PdfController::class, 'generatePdf']);

Route::get('login', function () {
    return view('admin.login');
});

Route::get('modifier', function () {
    return view('admin.modifier');
});

Route::post('modifier', function () {
    $username = @$_POST['username'];
    $password = @$_POST['password'];
    $password2 = @$_POST['password2'];

    if (isset($_POST['enr']) && $password === $password2) {
        $conn = // Your database connection object or code here

        // Update query with Laravel's DB facade
        DB::table('connexion')
            ->where('id', 1)
            ->update([
                'username' => $username,
                'password' => hash('sha256', $password)
            ]);

        // $mess = "✔ Modifier validée !<a href='Login.php'>Login</a>";
        return redirect('locataire');
    } else {
        $mess = "❌ Impossible de Modifier !";
    }

    // Return response or do further processing
    return response($mess);
});


Route::post('login', function () {
    $mess = '';
    $username = request('username');
    $password = request('password');

    $user = DB::table('connexion')
        ->where('username', $username)
        ->where('password', hash('sha256', $password))
        ->first();

    if ($user) {
        // session(['username' => $username]);
        session_start();
        $_SESSION["username"]=$username;
        return redirect('locataire');
    } else {
        $mess = "❌ Impossible de  Connexion !";
        return view('admin.login', compact('mess'));
    }
});

Route::get('logout', function () {
     // Destroy the session
     session_start();
     session_destroy();
    
     // Redirect to the login page
     return redirect('login');
});

