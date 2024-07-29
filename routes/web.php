<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\Home\HomeController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'dashboard', 'as' => 'dashboard.', 'namespace' => 'App\\Http\\Controllers\\Dashboard'], function () {

    // Index route
    Route::get("/", "HomeController@index")->name("index");

    // Services route
    Route::group(['prefix' => 'services', 'as' => 'services.'], function () {
        Route::get("/", "ServiceController@index")->name("index");
        Route::get("/create", "ServiceController@create")->name("create");
        Route::post("/{id}/store", "ServiceController@store")->name("store");
        Route::get("/{id}/edit", "ServiceController@edit")->name("edit");
        Route::put("/{id}/update", "ServiceController@update")->name("update");
        Route::delete("/{id}/delete", "ServiceController@destroy")->name("destroy");
    });

    // Goals route
    Route::group(['prefix' => 'goals', 'as' => 'goals.'], function () {
        Route::get("/", "GoalsController@index")->name("index");
        Route::get("/create", "GoalsController@create")->name("create");
        Route::post("/{id}/store", "GoalsController@store")->name("store");
        Route::get("/{id}/edit", "GoalsController@edit")->name("edit");
        Route::put("/{id}/update", "GoalsController@update")->name("update");
        Route::delete("/{id}/delete", "GoalsController@destroy")->name("destroy");
    });

    // Articles route
    Route::group(['prefix' => 'articles', 'as' => 'articles.'], function () {
        Route::get("/", "ArticleController@index")->name("index");
        Route::get("/create", "ArticleController@create")->name("create");
        Route::post("/{id}/store", "ArticleController@store")->name("store");
        Route::get("/{id}/edit", "ArticleController@edit")->name("edit");
        Route::put("/{id}/update", "ArticleController@update")->name("update");
        Route::delete("/{id}/delete", "ArticleController@destroy")->name("destroy");
    });

    // FAQs route
    Route::group(['prefix' => 'faqs', 'as' => 'faqs.'], function () {
        Route::get("/", "FAQController@index")->name("index");
        Route::get("/create", "FAQController@create")->name("create");
        Route::post("/{id}/store", "FAQController@store")->name("store");
        Route::get("/{id}/edit", "FAQController@edit")->name("edit");
        Route::put("/{id}/update", "FAQController@update")->name("update");
        Route::delete("/{id}/delete", "FAQController@destroy")->name("destroy");
    });
    // Clients route
    Route::group(['prefix' => 'clients', 'as' => 'clients.'], function () {
        Route::get("/", "ClientController@index")->name("index");
        Route::get("/create", "ClientController@create")->name("create");
        Route::post("/store", "ClientController@store")->name("store");
        Route::get("/{id}/edit", "ClientController@edit")->name("edit");
        Route::put("/{id}/update", "ClientController@update")->name("update");
        Route::delete("/{id}/delete", "ClientController@destroy")->name("destroy");
    });
    // Sliders route
    Route::group(['prefix' => 'sliders', 'as' => 'sliders.'], function () {
        Route::get("/", "SliderController@index")->name("index");
        Route::get("/create", "SliderController@create")->name("create");
        Route::post("/store", "SliderController@store")->name("store");
        Route::get("/{id}/edit", "SliderController@edit")->name("edit");
        Route::put("/{id}/update", "SliderController@update")->name("update");
        Route::delete("/{id}/delete", "SliderController@destroy")->name("destroy");
    });

    // Contacts route
    Route::group(['prefix' => 'contacts', 'as' => 'contacts.'], function () {
        Route::get("/", "ContactController@index")->name("index");
        Route::get("/create", "ContactController@create")->name("create");
        Route::post("/store", "ContactController@store")->name("store");
        Route::get("/{id}/edit", "ContactController@edit")->name("edit");
        Route::put("/{id}/update", "ContactController@update")->name("update");
        Route::delete("/{id}/delete", "ContactController@destroy")->name("destroy");
    });
    Route::group(['prefix' => 'settings', 'as' => 'settings.'], function () {
        Route::get("/", "SettingController@index")->name("index");
        Route::post("/update", "SettingController@update")->name("update");
    });
});

// Home page
Route::get("/", [HomeController::class, "index"]);
