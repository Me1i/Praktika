    <?php

    use Illuminate\Support\Facades\Route;
    use Illuminate\Support\Facades\Auth;
    use App\Http\Controllers\TodoController;    
    use App\Http\Controllers\Admin\AdminController;
    use App\Http\Controllers\HomeController;
    use App\Http\Controllers\Admin\ChangePasswordController;
    use App\Http\Controllers\ContactController;// routes/web.php
    use App\Http\Controllers\Auth\LoginController;
    use App\Http\Controllers\NewsletterController;
    use Barryvdh\DomPDF\Facade as PDF;
    
    
    
    


    
    /*
    |--------------------------------------------------------------------------
    | Web Routes
    |--------------------------------------------------------------------------
    |
    | Here is where you can register web routes for your application. These
    | routes are loaded by the RouteServiceProvider and all of them will
    | be assigned to the "web" middleware group. Make something great!
    |
    */

   
    Route::get('/', function () {
        return view('blog.index');
    })->name('home');
    Route::get('/about', function () {
        return view('blog.about');
    })->name('about');
    Route::get('/blog', function () {
        return view('blog.blog');
    })->name('blog');
    Route::get('/features', function () {
        return view('blog.features');
    })->name('features');
    Route::get('/contact', function () {
        return view('blog.contact');
    })->name('contact');


    Route::get('/todos/pdf', [TodoController::class, 'downloadPdf'])->name('todos.pdf');

    
    Route::get('/todos', [TodoController::class, 'index'])->name('todos.index');
   
    Route::post('/todos', [TodoController::class, 'store'])->name('todos.store');
    Route::delete('todos/{todo}', [TodoController::class, 'destroy'])->name('todos.destroy');
    Route::resource('todos', TodoController::class);
    Route::post('todos/toggleComplete', [TodoController::class, 'toggleComplete'])->name('todos.toggleComplete');

    Route::get('admin/change-password', [ChangePasswordController::class, 'showChangePasswordForm'])->name('blog.admin.passwords.change');
    Route::post('admin/change-password', [ChangePasswordController::class, 'changePassword'])->name('password.update');             


    Route::get('/CheckAdmin', function (){})->middleware('CheckAdmin')->name('admin.redirect');
        // This route is used for redirection based on user role 
    
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/home', [HomeController::class, 'index'])->name('home');

    Route::middleware('guest')->group(function () {
        Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
        Route::post('/login', [LoginController::class, 'login']);
    });
    
    Route::middleware('auth')->group(function () {
        Route::get('/home', [HomeController::class, 'index'])->name('home');
    });


   

    Route::get('/contact', [ContactController::class, 'showForm'])->name('contact.show');
    Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');

   
    
    Route::post('/newsletter/subscribe', [NewsletterController::class, 'subscribe'])->name('newsletter.subscribe');


        

    Auth::routes();

    Route::get('/home', [HomeController::class, 'index'])->name('home');

    Route::prefix('admin')->middleware('auth','isAdmin')->group(function (){

        Route::get('/dashboard', [TodoController::class, 'index'])->name('dashboard');
    });



    //Route::get('/admin', [AdminController::class, 'index'])->name('admin');