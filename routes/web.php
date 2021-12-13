<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\SearchController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\searchproduitController;
use App\Http\Controllers\AdminManageController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', HomeController::class)->name('acceuil');

Route::view('testac','testac');
//Route::resource('search', [SearchController::class])->name('search');
Route::get('autocomplete', [SearchController::class, 'autocomplete'])->name('autocomplete');
//Route::get('categorie_produit', ['produit' => 'ProduitController@categorie_produit', 'as' => 'liste par categorie']);
Route::get('categorie_produit', [ProduitController::class, 'categorie_produit']);
//Route::get('/', [ProduitController::class, 'test']);

Route::post('searchSelect', [SearchController::class, 'postform']);
Route::get('showcategorie', [SearchController::class, 'showcategorie'])->name('categoriechoix');
//Route::resource('showcategorie', SearchController::class);

Route::get('showcategorietriepdesc', [SearchController::class, 'showcategorietriepdesc'])->name('boutique');


Route::get('trie', [SearchController::class, 'trie'])->name('boutiques');
Route::get('detailsproduit', [SearchController::class, 'detailsproduit'])->name('show_produit');





Route::get('livesearchAccueil',[searchproduitController::class,'livesearchAccueil'])->name('livesearchAccueil');

Route::resource('search', SearchController::class);


/*Route::get('/', function () {
    return view('welcome');
});*/

/*Route::prefix('dashboard')->middleware('auth')->group(function () {
    Route::get('user', function () {
        return view('users.index', ['title' => 'infos compte']);
    })->name('user');
    
});*/
Route::group([
    'middleware' => '\App\Http\Middleware\Authenticate',
], function () {

Route::get('livesearch',[searchproduitController::class,'livesearch'])->name('livesearch');

Route::get('livesearchCat',[searchproduitController::class,'livesearchCat'])->name('livesearchCat');

Route::post('updateusemail',[UserController::class,'updateusemail'])->name('updateusemail');

Route::post('updateprofilimage',[UserController::class,'updateprofilimage'])->name('updateprofilimage');

Route::post('updateusnewemail',[UserController::class,'updateusnewemail'])->name('updateusnewemail');

Route::post('updateusename',[UserController::class,'updateusename'])->name('updateusename');

Route::post('updateusepass',[UserController::class,'updateusepass'])->name('updateusepass');


Route::resource('user', UserController::class);


});

/*
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');
*/




Route::post('produitSearch', [ProduitController::class, 'produitSearch']);
Route::resource('search', SearchController::class);

Route::post('categorieSearch', [CategorieController::class, 'categorieSearch']);


Route::group([
    'middleware' => '\App\Http\Middleware\AdminUser',
], function () {


Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
Route::resource('produits', ProduitController::class);
Route::resource('categorie', CategorieController::class);
Route::resource('usermanage', AdminManageController::class);

Route::post('ajoutimg2', [ProduitController::class, 'ajoutimg2'])->name('ajoutimg2');
Route::post('ajoutimg3', [ProduitController::class, 'ajoutimg3'])->name('ajoutimg3');

Route::post('favories', [ProduitController::class, 'favories'])->name('favories');

Route::post('delproduits', [CategorieController::class, 'delproduits'])->name('delproduits');

});


Route::group([
    'middleware' => '\App\Http\Middleware\ConsultCatPro',
], function () {
Route::resource('categorie', CategorieController::class);


});

Route::group([
    'middleware' => '\App\Http\Middleware\ConsultProduit',
], function () {
Route::resource('produits', ProduitController::class);


});
require __DIR__.'/auth.php';