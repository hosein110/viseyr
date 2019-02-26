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

use App\User;
//Route::get('/', function () {
//    $users = User::limit(10)->orderBy('id', 'DESC')->get();
//    return view('welcome', compact('users'));
//})->middleware('auth');


Route::namespace('admin')->group(function () {

    Route::group(['prefix' => '/admin'], function () {

        Route::group(['prefix' => '/home'], function () {
            Route::get('/', 'HomeController@index')->name('home')->middleware('can:dashboard');
            Route::get('/summary', 'HomeController@summary');

            Route::get('/analyzes/analyzes_summary/{site}', 'HomeController@analyzes_summary');

            Route::get('/analyzes', 'HomeController@analyzes')->middleware('can:analyzes');
            Route::get('/analyzes/site', 'HomeController@analyzes')->middleware('can:analyzes');
            Route::get('/analyzes_keywords', 'HomeController@analyzes_keywords')->middleware('can:analyzes');
            Route::get('/analyzes_links', 'HomeController@analyzes_links')->middleware('can:analyzes');

            Route::get('/siteMap', 'HomeController@siteMap');

        });
        Route::group(['prefix' => '/user'], function () {
            Route::patch('admin_modify_profile', 'UsersController@modifyProfile')->name('admin_modify_profile')->middleware('can:modify_profile');
            Route::get('new_user', 'UsersController@showUserForm')->middleware('can:new_user_form');
            Route::get('save', 'UsersController@save')->name('save')->middleware('can:insert_user');
            Route::get('profile', 'UsersController@showProfile')->middleware('can:profile');
            Route::get('users_list', 'UsersController@showUsersList')->middleware('can:users_list');
            Route::get('{id}/edit_user_form', 'UsersController@editForm')->name('edit_user_form')->middleware('can:edit_user_form');
            Route::get('users/{id}/edit_user', 'UsersController@modifyUser')->name('edit_user')->middleware('can:edit_user');
            Route::get('app_report_list', 'UsersController@app_report_list')->middleware('can:app_report_list');
            Route::get('getLogout', 'UsersController@getLogout')->name('getLogout');
        });


        Route::group(['prefix' => '/role'], function () {
            Route::get('new_role', 'RolesController@showNewForm')->name('new_role');
            Route::get('setPermission', 'RolesController@setPermissionForm')->name('setPermission');
            Route::patch('modifyPermissionRole', 'RolesController@modifyPermissionRole')->name('modifyPermissionRole');
            Route::patch('{id}/modifyPermission', 'RolesController@modifyPermission')->name('modifyPermission');
            Route::patch('{id}/modifyRole', 'RolesController@modifyRole')->name('modifyRole');
            Route::get('{id}/deleteRole', 'RolesController@deleteRole')->name('deleteRole');
            Route::get('{id}/deletePermission', 'RolesController@deletePermission')->name('deletePermission');
            Route::get('createRole', 'RolesController@createRole')->name('createRole');
            Route::get('createPermission', 'RolesController@createPermission')->name('createPermission');
            Route::get('{id}/edit_role', 'RolesController@showEditRoleForm')->name('edit_role');
            Route::get('{id}/edit_permission', 'RolesController@showEditPermissionForm')->name('edit_permission');


        });


        Route::group(['prefix' => '/location'], function () {
            Route::get('/list/{type}', 'locationController@index')->name('admin_location_list')->middleware('can:location_list');
            Route::get('/create', 'locationController@create')->name('create_location')->middleware('can:location_create_form');
            Route::get('/store_location', 'locationController@store')->name('store_location')->middleware('can:location_store');
            Route::get('/getCity/{id}', 'locationController@getCity')->middleware('can:location_create_form');

            Route::get('/edit/image_delete/{id}', 'locationController@image_delete')->middleware('can:location_image_delete');

            Route::get('/edit/getCity/{id}', 'locationController@getCity')->middleware('can:location_image_delete');
            Route::get('/edit/{id}/{type}', 'locationController@edit')->name('edit_location')->middleware('can:location_edit_form');
            Route::patch('/update/{id}', 'locationController@update')->name('update_location')->middleware('can:location_modify');


            Route::get('/admin_delete_location/{id}/{type}', 'locationController@delete')->name('admin_delete_location')->middleware('can:location_edit_form');
            Route::get('/location_report_not_correct/{id}/{type}', 'locationController@location_report_not_correct')->name('location_report_not_correct')->middleware('can:location_edit_form');
            Route::get('/admin_confirm_location/{id}/{type}', 'locationController@admin_confirm_location')->name('admin_confirm_location')->middleware('can:location_edit_form');


        });
        Route::group(['prefix' => '/post'], function () {
            Route::get('/list/{type}', 'postController@index')->name('admin_post_list')->middleware('can:post_list');
            Route::get('/confirm/{post_id}', 'postController@confirm')->name('admin_post_confirm')->middleware('can:post_confirm');
            Route::get('/admin_delete_post/{id}', 'postController@delete')->name('admin_delete_post')->middleware('can:post_delete');
            Route::get('/report_not_correct/{id}', 'postController@report_not_correct')->name('report_not_correct')->middleware('can:post_report_not_correct');
        });
        Route::group(['prefix' => '/categories'], function () {
            Route::get('/list', 'categoryController@index')->name('categories_list')->middleware('can:categories');
            Route::get('/store', 'categoryController@store')->name('categories_create')->middleware('can:categories');
            Route::get('/sub_categories/{category}', 'categoryController@sub_category_list')->name('sub_categories')->middleware('can:categories');
            Route::get('/sub_categories/store', 'categoryController@sub_category_store')->name('sub_categories_create')->middleware('can:categories');
            Route::get('/sub_categories/sub_categoriesEdit', 'categoryController@sub_categories_edit')->name('sub_categories_edit');
        });

    });

});


Route::namespace('web')->group(function () {

    Route::get('/', 'ApplicationController@home')->name('home');
    Route::get('/locations', 'locationController@locationsPage')->name('locationsPage');
    Route::get('/location/{id}', 'locationController@locationPage')->name('locationPage');
    Route::get('/addLocation', 'locationController@addLocationPage')->name('addLocationPage');
    Route::post('/addLocationRequest', 'locationController@addLocationRequest')->name('addLocationRequest');
    Route::post('/cityShowRequest', 'locationController@cityShowRequest')->name('cityShowRequest');
    Route::post('/subCategoryShowRequest', 'locationController@subCategoryShowRequest')->name('subCategoryShowRequest');







//    Route::group(['prefix' => '/webApp'], function () {

        Route::group(['prefix' => '/application'], function () {

            Route::get('/{type}/possibilities', 'ApplicationController@possibilities')->name('possibilities');
            Route::get('/app_report', 'ApplicationController@app_report')->name('app_report');

            Route::get('/state_location_list', 'ApplicationController@state_location_list')->name('state_location_list');


            Route::get('/all_state_list', 'ApplicationController@all_state_list')->name('all_state_list');
            Route::get('/all_city_list/{state_id}', 'ApplicationController@all_city_list')->name('all_city_list');


        });
        Route::group(['prefix' => '/category'], function () {


            Route::get('/select_sub_category/{category_id}', 'categoryController@select_sub_category')->name('select_sub_category');

            Route::get('/select_category/{type}/{hasWith}', 'categoryController@select_category')->name('select_category');
            Route::get('/categories_posts/', 'categoryController@categories_posts')->name('categories_posts');


        });


        Route::group(['prefix' => '/user'], function () {

            Route::get('/login','userController@login');

            Route::get('/locations_pin', 'userController@locations_pin')->name('locations_pin');
            Route::get('/post_star_list', 'userController@post_star_list')->name('post_star_list');
            Route::get('/app_logout', 'userController@app_logout')->name('app_logout');
            Route::get('/refresh_token', 'userController@refresh_token')->name('refresh_token');


            Route::get('/get_privacy', 'userController@get_privacy')->name('get_privacy');


            Route::get('/message_setting/update', 'userController@update_message_setting')->name('update_message_setting');
            Route::get('/privacy', 'userController@user_privacy')->name('user_privacy');


            Route::get('/message_setting/{user_id}', 'userController@message_setting')->name('message_setting');
            Route::get('/message_setting/update', 'userController@update_message_setting')->name('update_message_setting');
            Route::get('/privacy', 'userController@user_privacy')->name('user_privacy');

            Route::get('/follower', 'userController@follower')->name('follower');
            Route::get('/follower_other/{user_id}', 'userController@follower_other')->name('follower_other');
            Route::get('/following', 'userController@following')->name('following');
            Route::get('/following_other/{user_id}', 'userController@following_other')->name('following_other');

            Route::get('/follow', 'userController@follow')->name('follow');
            Route::get('/unfollow', 'userController@unfollow')->name('unfollow');
            Route::get('/reject_follow', 'userController@reject_follow')->name('reject_follow');
            Route::get('/accept_follow', 'userController@accept_follow')->name('accept_follow');


            Route::get('/report/{user_id}', 'userController@report')->name('report');

            Route::get('/search', 'userController@search')->name('search');
            Route::get('/change_password', 'userController@change_password')->name('change_password');

            Route::get('/show_field_profile/{user_id}', 'userController@show_field_profile')->name('show_field_profile');
            Route::get('/profile', 'userController@profile')->name('profile');
            Route::get('/my_notifications', 'userController@my_notifications')->name('my_notifications');

            Route::get('/modify_profile', 'userController@modify_profile')->name('modify_profile');
            Route::get('/get_profile/{other_user_id}', 'userController@get_profile')->name('get_profile');


            Route::get('/message_list/{header_id}/{receiver_id}', 'userController@message_list')->name('message_list');
            Route::get('/chat_list/{user_id}', 'userController@chat_list')->name('chat_list');
            Route::get('/send_message', 'userController@send_message')->name('send_message');

            // suggest list
            Route::get('/suggest_list', 'userController@suggest_list')->name('suggest_list');

        });

        Route::group(['prefix' => '/posts'], function () {
            //location like


            Route::get('/home_page/{user_id}', 'postController@home_page')->name('home_page');

            Route::get('/tag_page/{tag_id}', 'postController@tag_page')->name('tag_page');
            Route::get('/category_page/{category_id}', 'postController@category_page')->name('category_page');

            Route::get('/list/{location_id}', 'postController@post_list')->name('post_list');
            Route::get('/related_post/{location_id}', 'postController@related_post')->name('related_post');

            Route::get('/add', 'postController@post_add')->name('post_add');
            Route::get('/like', 'postController@post_like')->name('post_like');
            Route::get('/star', 'postController@post_star')->name('post_star');

            Route::get('/wish_list', 'postController@post_wish_list')->name('post_wish_list');

            Route::get('/rate', 'postController@post_rate')->name('post_rate');
            Route::get('/{user_id}/{post_id}/show', 'postController@post_show')->name('post_show');
            Route::get('/{post_id}/show/price', 'postController@post_price_show')->name('post_price_show');


            Route::get('/{post_id}/comments', 'postController@post_comment')->name('post_comment');
            Route::get('/comments/add', 'postController@post_comment_add')->name('post_comment_add');
            Route::get('/comments/update', 'postController@post_comment_update')->name('post_comment_update');
            Route::get('/comments/reply', 'postController@post_comment_replay')->name('post_comment_replay');

            Route::get('/report', 'postController@post_report')->name('post_report');

        });
        Route::group(['prefix' => '/locations'], function () {

            Route::get('/list/{user_id}', 'locationController@location_list')->name('location_list');
            Route::get('/add', 'locationController@location_add')->name('location_add');
            Route::get('/{user_id}/{location_id}/show', 'locationController@location_show')->name('location_show');
            //location image
            Route::get('/{user_id}/{location_id}/image', 'locationController@location_images')->name('location_image');
            //location comments
            Route::get('/{location_id}/comments', 'locationController@location_comment')->name('location_comment');
            Route::get('/comments/add', 'locationController@location_comment_add')->name('location_comment_add');
            Route::get('/comments/update', 'locationController@location_comment_update')->name('location_comment_update');
            Route::get('/comments/reply', 'locationController@location_comment_replay')->name('location_comment_replay');
            //location like
            Route::get('/like', 'locationController@location_like')->name('location_like');
            //location rate
            Route::get('/rate', 'locationController@location_rate')->name('location_rate');
            //location pin
            Route::get('/pin', 'locationController@location_pin')->name('location_pin');


            Route::get('/{user_id}/{location_id}/possibility', 'locationController@location_possibility')->name('location_possibility');
            //location info
            Route::get('/{user_id}/{location_id}/info', 'locationController@location_info')->name('location_info');
            //location report
            Route::get('/report', 'locationController@location_report')->name('location_report');

            //location location_categories
            Route::get('/location_categories', 'locationController@location_categories')->name('location_categories');

            Route::get('/search/{location_name}', 'locationController@location_search')->name('location_search');
            Route::get('/update', 'locationController@location_update')->name('location_update');


            Route::get('/locationShow/{id}', 'locationController@locationShow')->name('locationShow');
            Route::get('/locations', 'locationController@locations')->name('locations');


        });

//    });
});






Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
