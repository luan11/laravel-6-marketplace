<?php

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
    $helloWorld = 'Hello World';

    return view('welcome', compact('helloWorld'));
})->name('home');

Route::get('/model', function () {
    /* $user = \App\User::create([
        'name' => 'Luan Novais',
        'email' => 'email@email.com',
        'password' => bcrypt('101010')
    ]); */

    /* $user = \App\User::find(41);
    $user->update([
        'name' => 'Luan Novais'
    ]);

    dd($user); */

    /* $user = \App\User::find(4);

    return $user->store;
    return dd($user->store()); */

    /* $store = \App\Store::find(1);

    return $store->products;
    // return $store->products()->where('id', 1)->get(); */

    /* $category = \App\Category::find(1);

	$category->products; */

	/* $user = \App\User::find(10);
	$store = $user->store()->create([
		'name' => 'Loja Teste',
		'description' => 'Loja Teste de produtos de tecnologia',
		'mobile_phone' => '(XX) XXXXX-XXXX',
		'phone' => '(XX) XXXX-XXXX',
		'slug' => 'loja-teste'
	]);

	dd($store); */

	/* $store = \App\Store::find(41);
	$product = $store->products()->create([
        'name' => 'Monitor',
        'description' => '144hz',
        'body' => 'Monitor da marca LG',
        'price' => 1500.90,
        'slug' => 'monitor-lg-144hz'
    ]);

    dd($product); */

    /* \App\Category::create([
        'name' => 'Games',
        'description' => null,
        'slug' => 'games'
    ]);

    \App\Category::create([
        'name' => 'Monitores',
        'description' => null,
        'slug' => 'monitores'
    ]);

    return \App\Category::all(); */

    $product = \App\Product::find(41);

    // dd($product->categories()->attach([1])); // Adiciona
    // dd($product->categories()->detach([1])); // Remove

    // dd($product->categories()->sync([1, 2]));
    dd($product->categories()->sync([2]));

    // return \App\User::all();
});

Route::group([
    'middleware' => ['auth']
], function() {
    Route::prefix('admin')->name('admin.')->namespace('Admin')->group(function() {
        /* Route::prefix('stores')->name('stores.')->group(function() {
            Route::get('/', 'StoreController@index')->name('index');
            Route::get('/create', 'StoreController@create')->name('create');
            Route::post('/store', 'StoreController@store')->name('store');
            Route::get('/{store}/edit', 'StoreController@edit')->name('edit');
            Route::post('/update/{store}', 'StoreController@update')->name('update');
            Route::get('/destroy/{store}', 'StoreController@destroy')->name('destroy');
        }); */

        Route::resource('stores', 'StoreController');
        Route::resource('products', 'ProductController');
        Route::resource('categories', 'CategoryController');
    });
});

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
