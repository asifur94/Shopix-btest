<?php

use App\Http\Controllers\Admin\mobozone\pages\adminBlogController;
use App\Http\Controllers\Admin\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Admin\Auth\LockScreenContoller;
use App\Http\Controllers\Faculty\Auth\AuthenticatedSessionController as FacultyAuthenticatedSessionController;
use App\Http\Controllers\Faculty\HomeController as FacultyHomeController;
use App\Http\Controllers\Faculty\Auth\RegisteredUserController;

use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\mobozone\page\LogisticsContoller;
use App\Http\Controllers\Admin\mobozone\page\ManageProductAsCancalOrderController;
use App\Http\Controllers\admin\mobozone\page\ManageProductAsCanceledController;
use App\Http\Controllers\Admin\mobozone\page\ManageProductAsConframOrderController;
use App\Http\Controllers\admin\mobozone\page\ManageProductAsDeliveredController;
use App\Http\Controllers\Admin\mobozone\page\ManageProductAsFakeOrderController;
use App\Http\Controllers\Admin\mobozone\page\ManageProductAsProssectionOrderController;
use App\Http\Controllers\Admin\mobozone\page\ManageProductAsRejectedOrderController;
use App\Http\Controllers\admin\mobozone\page\ManageProductAsTransitController;
use App\Http\Controllers\Admin\mobozone\page\ManageProductController;
use App\Http\Controllers\admin\mobozone\page\ManageSeepingController;
use App\Http\Controllers\Admin\mobozone\page\ManageShippingCotroller;
use App\Http\Controllers\Admin\mobozone\page\ManageWebsiteContoller;
use App\Http\Controllers\Admin\mobozone\page\ManageWebsiteContoller2;
use App\Http\Controllers\Admin\mobozone\page\ManageWebsiteSmsController;
use App\Http\Controllers\Admin\mobozone\page\ProductListController;
use App\Http\Controllers\Admin\mobozone\page\SmsconfigContoller;
use App\Http\Controllers\Admin\mobozone\page\SmstemplateContoller;
use App\Http\Controllers\admin\mobozone\pages\AdminBolgCatagoryController;
use App\Http\Controllers\admin\mobozone\pages\AdminBrandController;
use App\Http\Controllers\admin\mobozone\pages\AdminCategoryController;
use App\Http\Controllers\Admin\mobozone\pages\AdminContoller;
use App\Http\Controllers\admin\mobozone\pages\AdminProductController;
use App\Http\Controllers\Admin\mobozone\pages\AdminProfileController;
use App\Http\Controllers\Admin\mobozone\pages\EditorBlogCatagoryContorller;
use App\Http\Controllers\Admin\mobozone\pages\EditorBrandContorller;
use App\Http\Controllers\Admin\mobozone\pages\EditorCatatoryContorller;
use App\Http\Controllers\Admin\mobozone\pages\EditorController;
use App\Http\Controllers\Admin\mobozone\pages\EditorProductContorller;
use App\Http\Controllers\Admin\mobozone\pages\EditorProfileController as PagesEditorProfileController;
use App\Http\Controllers\Admin\mobozone\pages\HomePageHeroSliderController;
use App\Http\Controllers\Admin\mobozone\pages\ManuContoller;
use App\Http\Controllers\Admin\mobozone\pages\UserController as PagesUserController;
use App\Http\Controllers\Admin\Pages\CourseController;
use App\Http\Controllers\Admin\Pages\CourseFacultyAssignment;
use App\Http\Controllers\Admin\Pages\DashbordConoller;
use App\Http\Controllers\Admin\Pages\FacultyController;
use App\Http\Controllers\Admin\Pages\ParalalCourseController;
use App\Http\Controllers\Admin\Pages\SectionCOntoller;
use App\Http\Controllers\admin\pages\SemesterDropContoller;
use App\Http\Controllers\admin\pages\SettingContoller;
use App\Http\Controllers\Admin\Pages\TimeSlotContoller;
use App\Http\Controllers\Admin\Pages\UniOtherInforContoller;
use App\Http\Controllers\Admin\Pages\UserController;
use App\Http\Controllers\Admin\shopx\DashbordConoller as ShopxDashbordConoller;
use App\Http\Controllers\editor\mobozone\pages\EditorProfileController;
use App\Http\Controllers\fontend\BlogController;
use App\Http\Controllers\fontend\HomeController as FontendHomeController;
use App\Http\Controllers\fontend\mobozone\BlogCatagoryController;
use App\Http\Controllers\fontend\mobozone\FeaturedCategoryController;
use App\Http\Controllers\fontend\mobozone\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SearchContoller;
use App\Http\Controllers\TempImageFacultyContoller;
use App\Http\Controllers\TempImageUserContoller;
use App\Http\Controllers\user\pages\UserAdvisingController;
use App\Http\Controllers\user\pages\UserAdvisingRulesContoller;
use App\Http\Controllers\user\pages\UserConvocationApplicationController;
use App\Http\Controllers\User\Pages\UserCourseOfferedContoller;
use App\Http\Controllers\user\pages\UserCurriculumnContoller;
use App\Http\Controllers\User\Pages\UserSemesterDropContoller;
use App\Http\Controllers\User\UserDeshbordContoller;
use App\Models\Temp_image_user;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/
   // Lock Scean

   Route::get('/admin/lockscreen', [LockScreenContoller::class, 'locked'])->name('login.locked');
   Route::get('/admin/unlock', [LockScreenContoller::class, 'unlock'])->name('login.unlock');



Route::get('/admin/login', [AuthenticatedSessionController::class, 'create'])
    ->name('admin.login')
    ->middleware('guest:admin');


Route::post('/admin/login/store', [AuthenticatedSessionController::class, 'store'])->name('admin.login.store');

Route::group(['middleware' => 'admin'], function () {
    Route::get('/admin/main', [HomeController::class, 'index'])->name('admin.dashboard');
    Route::post('/admin/logout', [AuthenticatedSessionController::class, 'destroy'])->name('admin.logout');


    Route::get('/admin/dashbord', [ShopxDashbordConoller::class, 'dashbord'])->name('admin.dashbord.index');
    Route::get('/admin/rejectorder', [ShopxDashbordConoller::class, 'rejectorder'])->name('admin.rejectorder.data');






    //HeroSlider backend pages:

    Route::get('/admin/heroslider/create', [HomePageHeroSliderController::class, 'create'])->name('admin.heroslider.create');
    Route::post('/admin/heroslider/temp', [TempImageFacultyContoller::class, 'upload'])->name('admin.heroslider.temp');
    Route::post('/admin/heroslider/save', [HomePageHeroSliderController::class, 'save'])->name('admin.heroslider.save');
    Route::get('/admin/heroslider/list', [HomePageHeroSliderController::class, 'index'])->name('admin.heroslider.index');
    Route::get('/admin/heroslider/edit/{id}', [HomePageHeroSliderController::class, 'edit'])->name('admin.heroslider.edit');
    Route::get('/admin/heroslider/delete/{id}', [HomePageHeroSliderController::class, 'delete'])->name('admin.heroslider.delete');
    Route::post('/admin/heroslider/update/{id}', [HomePageHeroSliderController::class, 'update'])->name('admin.heroslider.update');

    // product pages backend

    Route::get('/admin/product/list', [AdminProductController::class, 'index'])->name('admin.product.index');
    // Route::get('/admin/addproduct', [AdminProductController::class, 'create'])->name('admin.product.create');
    // Route::post('/admin/product/savedata', [AdminProductController::class, 'savedata'])->name('admin.product.savedata');


    Route::get('/admin/addproduct', [AdminProductController::class, 'create'])->name('admin.product.create');
    Route::post('/admin/product/save', [AdminProductController::class, 'save'])->name('admin.product.save');





    Route::get('/admin/product/edit/{id}', [AdminProductController::class, 'edit'])->name('admin.product.edit');
    Route::post('/admin/product/edit/{id}', [AdminProductController::class, 'update'])->name('admin.product.update');
    Route::get('/admin/product/delete/{id}', [AdminProductController::class, 'delete'])->name('admin.product.delete');

    Route::post('/get-catagory-data', [AdminProductController::class, 'getcagorydata']);


    // Manage PlaseOrder

    Route::get('/admin/plaseorder', [ManageProductController::class, 'plaseorder'])->name('admin.plaseorder.index');
    Route::get('/admin/plaseorder/edit/{id}', [ManageProductController::class, 'plaseorderedit'])->name('admin.plaseorder.edit');
    Route::get('/admin/plaseorder/justview/{id}', [ManageProductController::class, 'plaseorderedit'])->name('admin.plaseorder.justview');
    Route::post('/admin/plaseorder/update', [ManageProductController::class, 'update'])->name('admin.plaseorder.save');
    Route::post('/admin/plaseorder/update1', [ManageProductController::class, 'update1'])->name('admin.plaseorder.save1');
    Route::post('/admin/plaseorder/isfack/{id}', [ManageProductController::class, 'isfack'])->name('admin.plaseorder.isfack');


    // Manage Sepping

    Route::get('/admin/shipping', [ManageSeepingController::class, 'shipping'])->name('admin.shipping.create');
    Route::post('/admin/shipping/saveupdate', [ManageSeepingController::class, 'saveupdate'])->name('admin.shipping.saveupdate');






    Route::get('/admin/conframorder', [ManageProductAsConframOrderController::class, 'conframorder'])->name('admin.conframorder.index');
    Route::get('/admin/conframorder/update/{id}', [ManageProductAsConframOrderController::class, 'update'])->name('admin.conframorder.update');

    Route::get('/admin/porssising', [ManageProductAsProssectionOrderController::class, 'porssising'])->name('admin.porssising.index');
    Route::get('/admin/cancaled', [ManageProductAsCancalOrderController::class, 'cancle'])->name('admin.cancaled.index');
    Route::get('/admin/rejected', [ManageProductAsRejectedOrderController::class, 'rejected'])->name('admin.rejected.index');
    Route::get('/admin/fakeorder', [ManageProductAsFakeOrderController::class, 'fakeorder'])->name('admin.fakeorder.index');
    Route::get('/admin/transit', [ManageProductAsTransitController::class, 'transit'])->name('admin.transit.index');
    Route::get('/admin/delevery', [ManageProductAsDeliveredController::class, 'delevery'])->name('admin.delevery.index');
    Route::get('/admin/canceled', [ManageProductAsCanceledController::class, 'canceled'])->name('admin.canceled.index');




    Route::get('/admin/productlist', [ProductListController::class, 'productlist'])->name('admin.productlist.index');
    Route::post('/admin/productlist/addstrok', [ProductListController::class, 'addstrok'])->name('admin.productlist.addstrok');
    Route::get('/admin/productlist/getstrok', [ProductListController::class, 'getstrok'])->name('admin.productlist.getstrok');
    Route::get('/admin/productlist/justview', [ProductListController::class, 'productedit'])->name('admin.productlist.justview');
    Route::post('/admin/productlist/update', [ProductListController::class, 'update'])->name('admin.productlist.save');
    Route::post('/admin/productlist/deleete', [ProductListController::class, 'delete'])->name('admin.productlist.delete');


    Route::get('/admin/logistics', [LogisticsContoller::class, 'index'])->name('admin.logistics.index');
    Route::get('/admin/smsconfig', [SmsconfigContoller::class, 'index'])->name('admin.smsconfig.index');
    Route::get('/admin/smstemplate', [SmstemplateContoller::class, 'index'])->name('admin.smstemplate.index');



    Route::post('/admin/user/temp', [TempImageUserContoller::class, 'upload'])->name('admin.product.temp');


    // Website Edit
    Route::get('/admin/editwebste', [ManageWebsiteContoller::class, 'editindex'])->name('admin.website.editindex');
    Route::post('/admin/editwebste/save', [ManageWebsiteContoller::class, 'save'])->name('admin.website.save');
    Route::post('/admin/editwebste/save1', [ManageWebsiteContoller::class, 'save1'])->name('admin.website.save1');

    // Route::get('/admin/editwebste2', [ManageWebsiteContoller2::class, 'editindex'])->name('admin.website.editindex');
    // Route::post('/admin/editwebste/save2', [ManageWebsiteContoller2::class, 'save'])->name('admin.website.save2');


    // Shipping Area
    // Route::get('/admin/shipping', [ManageShippingCotroller::class, 'shipping'])->name('admin.shipping.index');







    //Admin backend pages:

    Route::get('/admin/create', [AdminContoller::class, 'create'])->name('admin.admin.create');
    Route::post('/admin/save/from', [AdminContoller::class, 'save'])->name('admin.from.save');
    Route::get('/admin/list', [AdminContoller::class, 'index'])->name('admin.admin.index');
    Route::get('/admin/edit/{id}', [AdminContoller::class, 'edit'])->name('admin.admin.edit');
    Route::get('/admin/delete/{id}', [AdminContoller::class, 'delete'])->name('admin.admin.delete');
    Route::post('/admin/update/{id}', [AdminContoller::class, 'update'])->name('admin.admin.update');

    // Admin Profile Pages:
    Route::get('/admin/profile', [AdminProfileController::class, 'index'])->name('admin.profile.index');
    Route::post('/admin/save', [AdminProfileController::class, 'update'])->name('admin.profile.update');

    Route::post('/admin/passwordchnage', [AdminProfileController::class, 'chnagepass'])->name('admin.chnagepass.save');


});











Route::group(['middleware' => 'auth'], function () {
    Route::get('/customer/dashbord', [UserDeshbordContoller::class, 'dashbord'])->name('user.dashbord.index');

});

//Fontend pages

Route::get('/', [FontendHomeController::class, 'index'])->name('fontend.home');
Route::get('/zone', [FontendHomeController::class, 'zone'])->name('fontend.zone');
Route::get('/particularzone', [FontendHomeController::class, 'particularzone'])->name('fontend.particularzone');
Route::post('/order/save', [FontendHomeController::class, 'save'])->name('customer.product.save');

Route::get('/search', [SearchContoller::class, 'index'])->name('fontend.search');


Route::get('/faculty/detail/{id}', [FontendHomeController::class, 'detail'])->name('fontend.faculty.detail');

Route::get('/contact', [ContactController::class, 'index'])->name('fontend.contact');

// Service pages fontend.

Route::get('/service', [ServicesController::class, 'index'])->name('fontend.service');

// Blog pages fontend.

Route::get('/blog', [BlogController::class, 'index'])->name('fontend.blog');
Route::get('/blog/detail/{id}', [BlogController::class, 'detail'])->name('fontend.blog.detail');
Route::post('/blog/savecomment', [BlogController::class, 'savecomment'])->name('fontend.blog.commentsave');
Route::get('/blog/comment/show', [BlogController::class, 'showcomment']);

// Faq pages fontend.

Route::get('/faq', [FaqController::class, 'index'])->name('fontend.faq');

// Manage Pages fontend.
// Route::get('/about',[AboutController::class, 'index'])->name('fontend.about');
Route::get('/about', [ManagePageContorller::class, 'about'])->name('fontend.about');
Route::get('/privacy', [ManagePageContorller::class, 'privacy'])->name('fontend.privacy');
Route::get('/terms', [ManagePageContorller::class, 'terms'])->name('fontend.terms');

// Product pages fontend.

Route::get('/product', [ProductController::class, 'index'])->name('fontend.product');
Route::get('/product/detail/{id}', [ProductController::class, 'detail'])->name('fontend.product.detail');



Route::get('/catagorys/detail/{id}', [FeaturedCategoryController::class, 'index'])->name('fontend.catagorys');

// Route::get('blog/catagorys/detail/{id}', [BlogCatagoryController::class, 'index'])->name('fontend.catagorys');




    // SMS send
    Route::get('/sendsms', [ManageWebsiteSmsController::class, 'sendsms'])->name('sendsms.index');
    Route::get('/getbalance', [ManageWebsiteSmsController::class, 'getbalance'])->name('sendsms.index');


// ..............End fontend...........//
