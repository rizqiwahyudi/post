<?php








use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    PostController,
    CommentController
};

Route::get('/', function () {
    return view('welcome');
});

Route::get('/posts',        [PostController::class, 'index']);
Route::get('/posts/create', [PostController::class, 'create']);
Route::post('/posts/store', [PostController::class, 'store']);
Route::get('/posts/edit/{id}',   [PostController::class, 'edit']);
Route::put('/posts/update/{id}', [PostController::class, 'update']);
Route::get('/posts/show/{id}',   [PostController::class, 'show']);
Route::get('/posts/delete/{id}', [PostController::class, 'delete']);

Route::post('/comment/store',[CommentController::class, 'store']);