<?php
$domaine = Config::get('app.url');
// VITRINE
Route::domain($domaine)->group(function () {

    Route::get('/', [
        'as' => 'root_path',
        'uses' => 'Vitrine\HomeController@index'
    ]);

    Route::get('/service', [
        'as' => 'service_path',
        'uses' => 'Vitrine\HomeController@service'
    ]);

    Route::get('/plan', [
        'as' => 'plan_path',
        'uses' => 'Vitrine\HomeController@plan'
    ]);

    Route::get('/equipe', [
        'as' => 'equipe_path',
        'uses' => 'Vitrine\HomeController@equipe'
    ]);

});


// MANAGER
Route::domain('manager.' . $domaine)->group(function () {

        Route::get('/', function () {
            return view('manager/welcome');
        });

        Route::get('/gestionsite', 'manager\gestionSiteController@index');        
        Route::post('/gestionsite/formCreateSite', [
            'as' => 'create_site_path',
            'uses' => 'manager\formCreateSite@sendForm'
            ]);

});

Route::domain('parcours.' . $domaine)->group(function ()
{
    Route::get('{entreprise?}', ['uses' => 'cv\cvController@index']);
});

//API
Route::domain('api.' . $domaine)->group(function ()
{
    Route::get('/', 'manager\api@index');
    Route::resource('users', 'Api\UsersController');
});