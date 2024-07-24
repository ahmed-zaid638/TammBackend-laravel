<?php

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

});
