<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\galleryAdmin;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ApprovalAdmin;
use App\Http\Controllers\EventController;
use App\Http\Controllers\GalleryPage;
use App\Http\Controllers\JobsCarrer;
use App\Http\Controllers\DashboardAdmin;
use App\Http\Controllers\Setting;
use App\Http\Controllers\Product;
use App\Http\Controllers\Dashboard;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\StatisticController;
use App\Http\Controllers\Work_LP;
use App\Http\Controllers\UserDevice;
use App\Http\Controllers\SendEmailController;
use App\Models\galleryAdminModels;
use App\Models\JobCareer;


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



// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/auth/redirect', [LoginController::class, 'redirectToProvider']);
Route::get('/auth/callback', [LoginController::class, 'handleProviderCallback']);


// Route::get('/', function () {
//     return view('pages.dashboard');
// });
Route::get('/', [UserController::class, 'user'])->name('user');
Route::get('event/list', [EventController::class, 'getEvent'])->name('event.list');
Route::get('/user-detect', [UserDevice::class, 'user_device'])->name('user_device');



Route::get('/career', function () {
    return view('pages.career');
});

// Route::get('/viewjob', function () {
//     return view('pages.view-job');
// });
Route::get('/view-job', [JobsCarrer::class, 'view_job'])->name('view_job');

route::get('/detail-job/{id}', [JobsCarrer::class, 'detail_job'])->name('detail_job');

// Route::get('/jobdetail', function () {
//     return view('pages.job-detail');
// });


// Route::get('/login', function() {
//     return view('pages.login');
// });
Route::get('login', [AuthController::class, 'authenticate'])->name('login');
Route::post('login-action', [AuthController::class, 'store']);
Route::get('logout', [AuthController::class, 'logout'])->name('logout');

// Profile Dropdown
Route::get('/about-us', function () {
    return view('pages.profile.aboutUs');
});

Route::get('/structural', function () {
    return view('pages.profile.structuralCompany');
});

Route::get('/ourPeople', function () {
    return view('pages.profile.ourPeople');
});

Route::get('/commissionare', function () {
    return view('pages.profile.commissionare');
});

Route::get('/2', function () {
    return view('admin.dashboard2');
});
// Work Dropdown
Route::get('/service', function () {
    return view('pages.work.service');
});

Route::get('/software-development', function () {
    return view('pages.work.softwareDevelopment');
});

Route::get('/adtech&marketing', function () {
    return view('pages.work.adtech&marketing');
});

Route::get('/outsource-talent-service', function () {
    return view('pages.work.outsource-talent-service');
});

Route::get('/design&architecture', function () {
    return view('pages.work.design&architecture');
});

Route::get('/media&entertainment', function () {
    return view('pages.work.media&entertainment');
});

// Route::get('/retail-market', function () {
//     return view('pages.work.retail-market');
// });

Route::get('/education', function () {
    return view('pages.work.education');
});

Route::get('/financial', function () {
    return view('pages.work.financial');
});

Route::get('/logistic', function () {
    return view('pages.work.logistic');
});

//product landing page

// Route::get('/product', function () {
//     return view('pages.work.product');
// });
Route::get('/product', [Work_LP::class, 'product_LP'])->name('product_LP');
Route::get('/product-software/{id}', [Work_LP::class, 'software_product'])->name('software_product');
Route::get('/product-design/{id}', [Work_LP::class, 'design_product'])->name('design_product');
Route::get('/product-marketing/{id}', [Work_LP::class, 'marketing_product'])->name('marketing_product');


// Route::get('/product_type1', [Work_LP::class, 'product_type1'])->name('product_type1');

Route::get('/banyumax', function () {
    return view('pages.product.banyumaxproduct');
});

Route::get('/humanusia', function () {
    return view('pages.product.humanusiaproduct');
});

Route::get('/verdant', function () {
    return view('pages.product.verdantproduct');
});

Route::get('/crm', function () {
    return view('pages.product.crmproduct');
});

// Insight Dropdown
Route::get('/news', function () {
    return view('pages.insight.news');
});

// Route::get('/posting/{id}', function () {
//     return view('pages.insight.view-news');
// });

Route::get('/posting/{id}', [ArticleController::class, 'view_news'])->name('view_news');
Route::get('/show/{id}',[ArticleController::class,'show'])->middleware('RecordVisitor');
Route::get('/send-email',[SendEmailController::class,'send_email']);

// Route::get('/gallery', function () {
//     return view('pages.insight.gallery');
// });
Route::get('/news', [ArticleController::class, 'insight_news'])->name('insight_news');
Route::post('/articles-like/{id}/like',[ArticleController::class,'like_news'])->name('like_news');
Route::put('/articles-share/{id}',[ArticleController::class,'share_news'])->name('share_news');
Route::post('/article/share/{id}',[ArticleController::class,'incrementShareStats'])->name('incrementShareStats');
// Route::post('/article/click/{id)',[ArticleController::class,'on_click'])->name('on_click');



Route::get('/gallery', [GalleryPage::class, 'gallery'])->name('gallery');

Route::get('/jobForm', function () {
    return view('pages.form-apply-job');
});

// Admin
// Route::get('/dashboard-admin', function () {
//     return view('admin.dashboard-admin');
// })->middleware(['auth']);

Route::get('/dashboard-admin',[DashboardAdmin::class, 'index'])->name('index.dashboard.admin')->middleware(['auth']);
Route::get('/getArticleLike', [DashboardAdmin::class,'get_article_like'])->name('get_article_like');


Route::get('/statistic',[StatisticController::class, 'index'])->name('index.statistic')->middleware(['auth']);

// Route::get('/statistic', function () {
//     return view('admin.article.statistic-admin');
// });

// Route::get('/article-user', function () {
//     return view('admin.article.article-admin');
// });

//Article Page Route

Route::group(['middleware' => ['auth', 'user.access:1,2,3,4']], function () {

    //home page article
    Route::get('/create-article', [ArticleController::class, 'create_article']);
    Route::get('/detail-article-draft/{slug}', [ArticleController::class, 'draft_article']);
    Route::get('/detail-article-published/{id}', [ArticleController::class, 'published_article']);
    Route::get('/like-statistic-article{id}',[ArticleController::class,'like_stats']);
    Route::get('/detail-article-feedback/{id}', [ArticleController::class, 'feedback_article']);
    Route::get('/detail-article-onReview/{id}', [ArticleController::class, 'onReview_article']);
    Route::post('/articles{id}/like',[ArticleController::class,'like_news'])->name('like_news');


    // EDIT ARTICLE
    Route::get('/detail-article/edit-article/{id}', [ArticleController::class, 'edit_article'])->name('edit.artikel');
    Route::patch('/detail-article/update-article/{id}', [ArticleController::class, 'update_article'])->name('update.artikel');

    // Route::get('/edit-article', function () {
    //     return view('admin.edit-article');
    // });

    // PUBLISHED
    // Route::get('/detail-article-published', function () {
    //     return view('admin.article-status.detail-article');
    // });

    // // DRAFT
    // Route::get('/detail-article-draft', function () {
    //     return view('admin.article-status.detail-article-draft');
    // });

    // // ON REVIEW
    // Route::get('/detail-article-onreview', function () {
    //     return view('admin.article-status.detail-article-onreview');
    // });

    // // FEEDBACK
    // Route::get('/detail-article-feedback', function () {
    //     return view('admin.article-status.detail-article-feedback');
    // });

    //Article Controller
    Route::get('/article-user', [ArticleController::class, 'article'])->name('article');
    //store article
    Route::post('artikel-store', [ArticleController::class, 'store_article'])->name('store_article');
    //create new article
    // Route::get('/article-create', [ArticleController::class,'create_article'])->name('create_article');
    // //edit article
    Route::get('/article-edit', [ArticleController::class, 'edit_article'])->name('edit_article');
    //delete article
    Route::delete('/article-delete/{id}', [ArticleController::class, 'delete_article'])->name('delete.article');
});


Route::group(['middleware' => ['auth', 'user.access:1,2']], function () {

    Route::get('/approve', [ApprovalAdmin::class, 'approve'])->name('approve');
    Route::get('/detail-approve/{id}', [ApprovalAdmin::class, 'detail_approve'])->name('detail.approve');
    Route::patch('/onReview-article/{id}', [ApprovalAdmin::class, 'update_onreview'])->name('update.onreview');

    Route::get('/approve-article/{article}', [ApprovalAdmin::class, 'approve_article'])->name('approve_article');
    Route::get('/rejected-article/{article}', [ApprovalAdmin::class, 'rejected_article'])->name('rejected_article');
    Route::post('/feedback-article/{article}', [ApprovalAdmin::class, 'feedback_article'])->name('feedback_article');
    // Route::get('/reason-article/{article}', [ApprovalAdmin::class, 'reason_feedback'])->name('feedback_article');

    // Route::get('/approval-history/{article}',[ApprovalAdmin::class,'approval_history'])->name('approval_history');
    Route::get('/approval-article', function () {
        return view('admin.article.view-approval-article');
    });

    Route::get('/event', [EventController::class, 'event'])->name('event');
    Route::get('/create-event', [EventController::class, 'create_event'])->name('create_event');
    Route::post('/store-event', [EventController::class, 'store_event'])->name('store.event');
    Route::get('/edit-event/{id}', [EventController::class, 'edit_event'])->name('edit_event');
    Route::post('/update-event/{id}', [EventController::class, 'update_event'])->name('update_event');
    Route::delete('/delete-event/{id}', [EventController::class, 'delete_event'])->name('delete_event');

    //gallery
    Route::get('/gallery-admin', [galleryAdmin::class, 'gallery_admin'])->name('gallery_admin');
    Route::get('/create-galleryAdmin', [galleryAdmin::class, 'create_galleryAdmin'])->name('create_galleryAdmin');
    Route::post('/store-galleryAdmin', [galleryAdmin::class, 'store_galleryAdmin'])->name('store_galleryAdmin');
    Route::get('/edit-galleryAdmin/{id}', [galleryAdmin::class, 'edit_galleryAdmin'])->name('edit_galleryAdmin');
    Route::post('/update-galleryAdmin/{id}', [galleryAdmin::class, 'update_galleryAdmin'])->name('update_galleryAdmin');
    Route::delete('/delete-galleryAdmin/{id}', [galleryAdmin::class, 'delete_galleryAdmin'])->name('delete_galleryAdmin');
});


Route::group(['middleware' => ['auth', 'user.access:1']], function () {
    //page user
    Route::get('/user', [UserController::class, 'user'])->name('user');
    //Store user
    Route::post('/store-user', [UserController::class, 'store_user'])->name('store_user');
    //create User
    Route::get('/create-user/{id}', [UserController::class, 'create_user'])->name('create_user');
    //Edit User
    Route::get('/edit-user/{id}', [UserController::class, 'edit_user'])->name('edit_user');
    //update user
    Route::post('/update-user/{id}', [UserController::class, 'update_user'])->name('update_user');
    //Delete User
    Route::delete('/delete-user/{id}', [UserController::class, 'delete_user'])->name('delete_user');

    // Product Superadmin
    // Route::get('/product-superadmin', function () {
    //     return view('admin.product.product-superadmin');
    // });

    Route::get('/product-superadmin', [Product::class, 'product'])->name('product');
    Route::post('/store-product', [Product::class, 'store_product'])->name('store_product');
    Route::get('/edit-product/{id}', [Product::class, 'edit_product'])->name('edit_product');
    Route::post('/update-product/{id}', [Product::class, 'update_product'])->name('update_product');
    Route::delete('/delete-product/{id}', [Product::class, 'delete_product'])->name('delete_product');




    //Job
    Route::get('/jobs', [JobsCarrer::class, 'jobs'])->name('jobs');
    Route::get('/create-jobs', [JobsCarrer::class, 'create_jobs'])->name('jobs_create');
    // Route::get('/edit-jobs/{id}', [JobsCarrer::class, 'edit_jobs'])->name('edit_jobs');
    // Route::post('/update-jobs{id}', [JobsCarrer::class, 'update_jobs'])->name('update_jobs');
    Route::delete('/delete-jobs/{id}', [JobsCarrer::class, 'delete_jobs'])->name('delete_jobs');


    //Job Post
    Route::get('/job-post', [JobsCarrer::class, 'jobpost'])->name('jobpost');
    Route::post('/store-jobpost', [JobsCarrer::class, 'store_jobpost'])->name('store_jobpost');
    Route::get('/jobpost/{id}/edit', [JobsCarrer::class, 'jobpost_edit'])->name('jobpost_edit');
    Route::put('/jobpost/{id}/update', [JobsCarrer::class, 'jobpost_update'])->name('jobpost_update');

    // Job Post Edit
    // Route::get('/jobpost-superadmin', function () {
    //     return view('admin.jobpost-superadmin');
    // });

    // Applicant
    Route::get('/applicant', function () {
        return view('admin.applicant-superadmin');
    });

    // View Candidate
    Route::get('/candidate', function () {
        return view('admin.view-candidate');
    });

    // Setting
    // Route::get('/profileDashboard', function () {
    //     return view('admin.profileDashboard');
    // });

    // Route::get('/editProfileDashboard', function () {
    //     return view('admin.editProfileDashboard');
    // });
});
Route::get('/profileDashboard', [Setting::class, 'profile_dashboard'])->name('profile.dashboard');
Route::get('/editProfileDashboard/{id}', [Setting::class, 'edit_profileDashboard'])->name('edit_profileDashboard');
Route::patch('/updateProfileDashboard/{id}', [Setting::class, 'update_profileDashboard'])->name('update.profileDashboard');
Route::post('subcat', [Setting::class, 'subCat'])->name('subcat');



// Route::get('/chart', [DashboardAdmin::class, 'chart'])->name('chart');

