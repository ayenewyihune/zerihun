<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\ProjectController;

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

Route::get('/', [GuestController::class, 'welcome']);

Route::middleware(['auth'])->prefix('dashboard')->group(function () {
    Route::get('/user', [DashboardController::class, 'user'])->name('user');
    Route::put('/update-user', [DashboardController::class, 'update_user'])->name('update_user');
    Route::prefix('projects')->group(function () {
        Route::get('/list', [DashboardController::class, 'projects_list'])->name('projects_list');
        // Route::get('/charts', [DashboardController::class, 'projects_charts'])->name('projects_charts');
        // Route::get('/map', [DashboardController::class, 'projects_map'])->name('projects_map');

        // Project general
        Route::resource('/', ProjectController::class);
        Route::get('/{pid}/charts', [ProjectController::class, 'charts']);
        Route::get('/{pid}/delete-project', [ProjectController::class, 'show_delete']);
        // Members
        Route::resource('/{pid}/members', MemberController::class);
        // Assessments
        Route::resource('/{pid}/assessment-types', AssessmentTypeController::class);
        Route::resource('/{pid}/assessments', AssessmentController::class);
        Route::get('/{pid}/assessments/{id}/download', [AssessmentController::class, 'download']);
        // Reports
        Route::post('/{pid}/total-reports/create', [TotalReportController::class, 'create']);
        Route::post('/{pid}/total-reports/store-2', [TotalReportController::class, 'store_2']);
        Route::resource('/{pid}/total-reports', TotalReportController::class)->except('create');
        Route::resource('/{pid}/daily-reports', DailyReportController::class);
        Route::post('/{pid}/daily-reports/export', [DailyReportController::class, 'export']);
        Route::resource('/{pid}/ipc-reports', IPCReportController::class);
        // Issues
        Route::resource('/{pid}/issues', IssueController::class);
        // Feedbacks
        Route::resource('/{pid}/feedbacks', FeedbackController::class);
        // Documents
        Route::resource('/{pid}/document-types', DocumentTypeController::class);
        Route::resource('/{pid}/documents', DocumentController::class);
        Route::get('/{pid}/documents/{id}/download', [DocumentController::class, 'download']);
        // Assets
        Route::resource('/{pid}/assets', AssetController::class);
        // Design Progress
        Route::resource('/{pid}/design/progress-types', DesignProgressTypeController::class);
        Route::resource('/{pid}/design/statuses', DesignStatusController::class);
        Route::resource('/{pid}/design/progress', DesignProgressController::class);
    });
});

Route::get('/dashboard/projects/list', function () {
    return Inertia::render('Dashboard/Projects/List');
})->middleware(['auth', 'verified'])->name('project.list');

require __DIR__.'/auth.php';
