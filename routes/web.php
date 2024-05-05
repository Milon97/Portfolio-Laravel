<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\GeneralSettingController;
use App\Http\Controllers\Admin\SocialMediaController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\CounterController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\PortfolioController;
use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\SkillController;
use App\Http\Controllers\Admin\ExperienceController;
use App\Http\Controllers\Admin\BlogController;

use App\Http\Controllers\FrontEnd\FrontEndController;

Route::get('/', function () {
    return view('welcome');
});

// frontend routes
Route::group(['namespace'=>'FrontEnd'], function(){
    Route::get('/', [FrontEndController::class, 'home'])->name('home');

    Route::post('/contact-save', [FrontEndController::class, 'contact_save'])->name('contact_save');

    Route::get('/about-us', [FrontEndController::class, 'about'])->name('about');

    
});

Auth::routes();

// blogger Validity Check ======
Route::group(['namespace' => 'frontEnd', 'middleware' => ['blogger']], function () {
    // all protected routes here
    Route::get('/blogger/account', [BloggerController::class, 'account'])->name('blogger_account');
    Route::get('/blogger/profile/edit', [BloggerController::class, 'profileEdit'])->name('blogger.editprofile');

    Route::post('/blogger/profile/update', [BloggerController::class, 'profileUpdate'])->name('blogger.profileUpdate');
    
    Route::get('/blogger/payment', [BloggerController::class, 'paymentpage'])->name('payment.page');

    Route::post('/blogger/payment-submit', [BloggerController::class, 'paymentsubmit'])->name('payment.submit');

    Route::get('/blogger/logout', [BloggerController::class, 'logout'])->name('blogger.logout');
});

// unathenticate route
Route::group(['namespace' => 'Admin', 'prefix' => 'admin'], function () {
    Route::get('locked', [DashboardController::class, 'locked'])->name('locked');
    Route::post('unlocked', [DashboardController::class, 'unlocked'])->name('unlocked');
});

// auth route
Route::group(['namespace' => 'Admin', 'middleware' => ['auth', 'lock'], 'prefix' => 'admin'], function () {
    Route::get('dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
    Route::get('change-password', [DashboardController::class, 'changepassword'])->name('change_password');
    Route::post('new-password', [DashboardController::class, 'newpassword'])->name('new_password');

    // users route
    Route::get('users/manage', [UserController::class, 'index'])->name('users.index');
    Route::get('users/create', [UserController::class, 'create'])->name('users.create');
    Route::post('users/save', [UserController::class, 'store'])->name('users.store');
    Route::get('users/{id}/edit', [UserController::class, 'edit'])->name('users.edit');
    Route::post('users/update', [UserController::class, 'update'])->name('users.update');
    Route::post('users/inactive', [UserController::class, 'inactive'])->name('users.inactive');
    Route::post('users/active', [UserController::class, 'active'])->name('users.active');
    Route::post('users/destroy', [UserController::class, 'destroy'])->name('users.destroy');

    // roles
    Route::get('roles/manage', [RoleController::class, 'index'])->name('roles.index');
    Route::get('roles/{id}/show', [RoleController::class, 'show'])->name('roles.show');
    Route::get('roles/create', [RoleController::class, 'create'])->name('roles.create');
    Route::post('roles/save', [RoleController::class, 'store'])->name('roles.store');
    Route::get('roles/{id}/edit', [RoleController::class, 'edit'])->name('roles.edit');
    Route::post('roles/update', [RoleController::class, 'update'])->name('roles.update');
    Route::post('roles/destroy', [RoleController::class, 'destroy'])->name('roles.destroy');

    // permissions
    Route::get('permission/manage', [PermissionController::class, 'index'])->name('permissions.index');
    Route::get('permissions/{id}/show', [PermissionController::class, 'show'])->name('permissions.show');
    Route::get('permissions/create', [PermissionController::class, 'create'])->name('permissions.create');
    Route::post('permissions/save', [PermissionController::class, 'store'])->name('permissions.store');
    Route::get('permissions/{id}/edit', [PermissionController::class, 'edit'])->name('permissions.edit');
    Route::post('permissions/update', [PermissionController::class, 'update'])->name('permissions.update');
    Route::post('permissions/destroy', [PermissionController::class, 'destroy'])->name('permissions.destroy');

    // settings route
    Route::get('settings/manage', [GeneralSettingController::class, 'index'])->name('settings.index');
    Route::get('settings/create', [GeneralSettingController::class, 'create'])->name('settings.create');
    Route::post('settings/save', [GeneralSettingController::class, 'store'])->name('settings.store');
    Route::get('settings/{id}/edit', [GeneralSettingController::class, 'edit'])->name('settings.edit');
    Route::post('settings/update', [GeneralSettingController::class, 'update'])->name('settings.update');
    Route::post('settings/inactive', [GeneralSettingController::class, 'inactive'])->name('settings.inactive');
    Route::post('settings/active', [GeneralSettingController::class, 'active'])->name('settings.active');
    Route::post('settings/destroy', [GeneralSettingController::class, 'destroy'])->name('settings.destroy');

    // social media route
    Route::get('social-media/manage', [SocialMediaController::class, 'index'])->name('socialmedias.index');
    Route::get('social-media/create', [SocialMediaController::class, 'create'])->name('socialmedias.create');
    Route::post('social-media/save', [SocialMediaController::class, 'store'])->name('socialmedias.store');
    Route::get('social-media/{id}/edit', [SocialMediaController::class, 'edit'])->name('socialmedias.edit');
    Route::post('social-media/update', [SocialMediaController::class, 'update'])->name('socialmedias.update');
    Route::post('social-media/inactive', [SocialMediaController::class, 'inactive'])->name('socialmedias.inactive');
    Route::post('social-media/active', [SocialMediaController::class, 'active'])->name('socialmedias.active');
    Route::post('social-media/destroy', [SocialMediaController::class, 'destroy'])->name('socialmedias.destroy');

    // Counter media route
    Route::get('counter/manage', [CounterController::class, 'index'])->name('counter.index');
    Route::get('counter/create', [CounterController::class, 'create'])->name('counter.create');
    Route::post('counter/save', [CounterController::class, 'store'])->name('counter.store');
    Route::get('counter/{id}/edit', [CounterController::class, 'edit'])->name('counter.edit');
    Route::post('counter/update', [CounterController::class, 'update'])->name('counter.update');
    Route::post('counter/inactive', [CounterController::class, 'inactive'])->name('counter.inactive');
    Route::post('counter/active', [CounterController::class, 'active'])->name('counter.active');
    Route::post('counter/destroy', [CounterController::class, 'destroy'])->name('counter.destroy');

    // contact route
    Route::get('contact/manage', [ContactController::class, 'index'])->name('contact.index');
    Route::get('contact/create', [ContactController::class, 'create'])->name('contact.create');
    Route::post('contact/save', [ContactController::class, 'store'])->name('contact.store');
    Route::get('contact/{id}/edit', [ContactController::class, 'edit'])->name('contact.edit');
    Route::post('contact/update', [ContactController::class, 'update'])->name('contact.update');
    Route::post('contact/inactive', [ContactController::class, 'inactive'])->name('contact.inactive');
    Route::post('contact/active', [ContactController::class, 'active'])->name('contact.active');
    Route::post('contact/destroy', [ContactController::class, 'destroy'])->name('contact.destroy');

    // skill route
    Route::get('skill/manage', [SkillController::class, 'index'])->name('skill.index');
    Route::get('skill/create', [SkillController::class, 'create'])->name('skill.create');
    Route::post('skill/save', [SkillController::class, 'store'])->name('skill.store');
    Route::get('skill/{id}/edit', [SkillController::class, 'edit'])->name('skill.edit');
    Route::post('skill/update', [SkillController::class, 'update'])->name('skill.update');
    Route::post('skill/inactive', [SkillController::class, 'inactive'])->name('skill.inactive');
    Route::post('skill/active', [SkillController::class, 'active'])->name('skill.active');
    Route::post('skill/destroy', [SkillController::class, 'destroy'])->name('skill.destroy');

    // Experience route
    Route::get('experience/manage', [ExperienceController::class, 'index'])->name('experience.index');
    Route::get('experience/create', [ExperienceController::class, 'create'])->name('experience.create');
    Route::post('experience/save', [ExperienceController::class, 'store'])->name('experience.store');
    Route::get('experience/{id}/edit', [ExperienceController::class, 'edit'])->name('experience.edit');
    Route::post('experience/update', [ExperienceController::class, 'update'])->name('experience.update');
    Route::post('experience/inactive', [ExperienceController::class, 'inactive'])->name('experience.inactive');
    Route::post('experience/active', [ExperienceController::class, 'active'])->name('experience.active');
    Route::post('experience/destroy', [ExperienceController::class, 'destroy'])->name('experience.destroy');

    // Category route
    Route::get('category/manage', [CategoryController::class, 'index'])->name('categories.index');
    Route::get('category/create', [CategoryController::class, 'create'])->name('categories.create');
    Route::post('category/save', [CategoryController::class, 'store'])->name('categories.store');
    Route::get('category/{id}/edit', [CategoryController::class, 'edit'])->name('categories.edit');
    Route::post('category/update', [CategoryController::class, 'update'])->name('categories.update');
    Route::post('category/inactive', [CategoryController::class, 'inactive'])->name('categories.inactive');
    Route::post('category/active', [CategoryController::class, 'active'])->name('categories.active');
    Route::post('category/destroy', [CategoryController::class, 'destroy'])->name('categories.destroy');

    // Portfolio route
    Route::get('portfolio/manage', [PortfolioController::class, 'index'])->name('portfolio.index');
    Route::get('portfolio/create', [PortfolioController::class, 'create'])->name('portfolio.create');
    Route::post('portfolio/save', [PortfolioController::class, 'store'])->name('portfolio.store');
    Route::get('portfolio/{id}/edit', [PortfolioController::class, 'edit'])->name('portfolio.edit');
    Route::post('portfolio/update', [PortfolioController::class, 'update'])->name('portfolio.update');
    Route::post('portfolio/inactive', [PortfolioController::class, 'inactive'])->name('portfolio.inactive');
    Route::post('portfolio/active', [PortfolioController::class, 'active'])->name('portfolio.active');
    Route::post('portfolio/destroy', [PortfolioController::class, 'destroy'])->name('portfolio.destroy');

    // Blog route
    Route::get('blog/manage', [BlogController::class, 'index'])->name('blog.index');
    Route::get('blog/create', [BlogController::class, 'create'])->name('blog.create');
    Route::post('blog/save', [BlogController::class, 'store'])->name('blog.store');
    Route::get('blog/{id}/edit', [BlogController::class, 'edit'])->name('blog.edit');
    Route::post('blog/update', [BlogController::class, 'update'])->name('blog.update');
    Route::post('blog/inactive', [BlogController::class, 'inactive'])->name('blog.inactive');
    Route::post('blog/active', [BlogController::class, 'active'])->name('blog.active');
    Route::post('blog/destroy', [BlogController::class, 'destroy'])->name('blog.destroy');

   
    // about us routes
    Route::get('about/manage', [AboutController::class, 'index'])->name('abouts.index');
    Route::get('about/create', [AboutController::class, 'create'])->name('abouts.create');
    Route::post('about/save', [AboutController::class, 'store'])->name('abouts.store');
    Route::get('about/{id}/edit', [AboutController::class, 'edit'])->name('abouts.edit');
    Route::post('about/update', [AboutController::class, 'update'])->name('abouts.update');
    Route::post('about/inactive', [AboutController::class, 'inactive'])->name('abouts.inactive');
    Route::post('about/active', [AboutController::class, 'active'])->name('abouts.active');
    Route::post('about/destroy', [AboutController::class, 'destroy'])->name('abouts.destroy');

});
