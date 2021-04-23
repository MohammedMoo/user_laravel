<?php
use App\Http\Controllers\PostsController;
use Illuminate\Support\Facades\Route;
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

Route::get('/', function () {
    return view('index');
});

Route::get('/users/create', [PostsController::class, 'createUser'])->name("user.index");
Route::post('/users', [PostsController::class, 'storUser'])->name("user.stor");

Route::get('/posts', [PostsController::class, 'index'])->name("posts.index");

Route::get('/posts/create', [PostsController::class, 'create'])->name("posts.create");/////// logic
Route::post('/posts', [PostsController::class, 'stor'])->name("posts.stor");/////// logic

Route::get('/posts/{pid}/edit', [PostsController::class, 'edit'])->name("posts.edit");/////// logic
Route::put('/posts/{pid}', [PostsController::class, 'update'])->name("posts.update");/////// logic

Route::delete('/posts/{pid}', [PostsController::class, 'destroy'])->name("posts.destroy");/////// logic

Route::get('/posts/{pid}', [PostsController::class, 'show'])->name("posts.show");
/*
1-make a route
3-make a controller to count the opration (returne view)
2-make a view
*/
