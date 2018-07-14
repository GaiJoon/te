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
    return view('welcome');
});




/*
*后台路由组
*/

 Route::group([],function(){
		// 友情链接资源路由
		 Route::resource('/admin/friend','admin\friend\FriendController');
		 // 后台用户管理
		 Route::resource('/admin/users','admin\users\UsersController');
		// 后台登陆
		 Route::any('/admin/login/login','admin\LoginController@login');
		 // 执行登陆
		 Route::any('/admin/dologin','admin\LoginController@dologin');
		 // 验证码路由
		 Route::any('/admin/captcha','admin\LoginController@captcha');


		  // 广告路由
		 Route::resource('/admin/poster','admin\poster\PosterController');

 });




// 前台登陆注册路由组
  Route::group([],function(){

		// 前台注册
  	Route::any('/home/sigup','home\sigup\SigupController@regist');
  		// 执行登陆路由
  	Route::any('/home/dosigup','home\sigup\SigupController@doregist');
  			// 激活账号
  	Route::any('/home/jihuo','home\sigup\SigupController@jihuo');
  	// 前台登陆
  	Route::any('/home/login','home\sigup\LoginController@login');
  	// 执行登陆
  	Route::any('/home/dologin','home\sigup\LoginController@dologin');

 });






//轮播图
Route::resource('/admin/lunbo', 'admin\lunbo\LunBoController');
Route::get('/admin/lunbo/shangjia/{id}','admin\lunbo\LunBoController@shangjia');
Route::get('/admin/lunbo/xiajia/{id}','admin\lunbo\LunBoController@xiajia');




/**
 * 购物车
 */

Route::group([], function(){
	//购物车显示
	Route::any('/cart/index','home\goodscar\GoodscarhomeController@index');
	//ajax
	Route::any('/home/ajaxcart','home\goodscar\GoodscarhomeController@delete');
	Route::any('/home/jia','home\goodscar\GoodscarhomeController@jia');
	Route::any('/home/jian','home\goodscar\GoodscarhomeController@jian');
	Route::any('/home/zongjia','home\goodscar\GoodscarhomeController@zongjia');
	Route::any('/home/cun','home\goodscar\GoodscarhomeController@cun');
	//详情页提交购物车
    Route::get('/cart/{id}','home\goodscar\GoodscarhomeController@save');

});
/**
 * 结算
 */
Route::group([],function(){
	//订单结算页
	Route::any('/orders/index','home\account\AccountController@index');
	Route::any('/orders/ajax','home\account\AccountController@ajax');
	Route::any('/orders/dopath','home\account\AccountController@dopath');
	Route::any('/orders/tijiao','home\account\AccountController@path');
	//订单成功页
	Route::any('/orders/jsy','home\account\AccountController@jsy');
});

/**
* 个人中心
*/

Route::group([],function(){
	// 个人信息
	Route::any('/homeuser/index','home\usershome\UsersHomeController@index');
	//个人资料
	Route::any('/homeuser/firstuser','home\usershome\UsersHomeController@firstuser');
	Route::any('/homeuser/dofirstuser/{id}','home\usershome\UsersHomeController@dofirstuser');
	//个人地址
	Route::any('/homeuser/path','home\usershome\UsersHomeController@path');
	Route::any('/homeuser/dopath','home\usershome\UsersHomeController@dopath');
	Route::any('/homeuser/pathajax','home\usershome\UsersHomeController@pathajax');
	Route::any('/homeuser/ajaxdelete','home\usershome\UsersHomeController@ajaxdelete');


});


/**
 * 我的订单
 */
Route::group([],function(){
	//个人订单
	Route::any('/homeorders/orders','home\orders\OrdershomeController@index');
	// 订单详情
	Route::any('/homeorders/ordersinfo','home\orders\OrdershomeController@ordersinfo');
	//我的消息
	Route::any('/homeorders/logistics','home\orders\OrdershomeController@logistics');

});



/**
 * 		前  后  台   首页
 */


Route::get('admin/index','admin\IndexController@index');

Route::get('home/index','home\IndexController@index');





































































/**
 *	丁许峰  后台 路由组
 */

Route::group([],function(){
	//类别管理
	Route::resource('admin/type','admin\goods\GoodscategoryController');
	//商品管理
	Route::resource('admin/goods','admin\goods\GoodsAdminController');


	//上架   下架
	Route::any('admin/ajax','admin\goods\GoodsAdminController@ajax');




});


/**
 * DingXuFeng  前台路由组
 */
Route::group([],function(){
	//前台商品列表管理
	Route::any('home/list','home\goods\GoodsController@index');
	Route::any('home/details/{id}','home\goods\GoodsController@show');


});
