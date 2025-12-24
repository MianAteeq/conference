<?php

use Carbon\Carbon;
use App\Models\User;
use App\Models\RegisterType;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\ConferenceRegister;
use Illuminate\Support\Facades\Hash;
use Rap2hpoutre\FastExcel\FastExcel;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CandidateController;
use App\Http\Controllers\AdminLoginController;
use App\Http\Controllers\ConferenceRegisterController;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;

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



    $types = RegisterType::whereDate('start_date', '>=', '2025-12-01')->whereDate('end_date', '<=', '2025-12-31')->where('type', 'Conference')->orderBy('order_no', 'asc')->get();
    $types_shops = RegisterType::whereDate('start_date', '>=', '2025-12-01')->whereDate('end_date', '<=', '2025-12-31')->where('type', 'Workshop')->orderBy('order_no', 'asc')->get();
    $types_packages = RegisterType::where('type', 'Package')->orderBy('order_no', 'desc')->get();
    $types_categories = RegisterType::where('type', 'Category')->orderBy('order_no', 'asc')->get();
    $types_awards = RegisterType::where('type', 'Awards')->orderBy('order_no', 'asc')->get();

    return view('index', get_defined_vars());
})->name('home.page');

Route::get('/register', function () {



    $types = RegisterType::whereDate('start_date', '>=', '2025-12-01')->whereDate('end_date', '<=', '2025-12-31')->where('type', 'Conference')->orderBy('order_no', 'asc')->get();
    $types_shops = RegisterType::whereDate('start_date', '>=', '2025-12-01')->whereDate('end_date', '<=', '2025-12-31')->where('type', 'Workshop')->orderBy('order_no', 'asc')->get();
    $types_packages = RegisterType::where('type', 'Package')->orderBy('order_no', 'desc')->get();
    $types_categories = RegisterType::where('type', 'Category')->orderBy('order_no', 'asc')->get();
    $types_awards = RegisterType::where('type', 'Awards')->orderBy('order_no', 'asc')->get();

    return view('registration', get_defined_vars());
})->name('register.page');
Route::get('/register/test', function () {



    $types = RegisterType::whereDate('start_date', '>=', '2025-8-01')->whereDate('end_date', '<=', '2025-12-31')->where('type', 'Conference')->orderBy('order_no', 'asc')->get();
    $types_shops = RegisterType::whereDate('start_date', '>=', '2025-8-01')->whereDate('end_date', '<=', '2025-12-31')->where('type', 'Workshop')->orderBy('order_no', 'asc')->get();
    $types_packages = RegisterType::where('type', 'Package')->orderBy('order_no', 'desc')->get();
    $types_categories = RegisterType::where('type', 'Category')->orderBy('order_no', 'asc')->get();
    $types_awards = RegisterType::where('type', 'Awards')->orderBy('order_no', 'asc')->get();

    return view('registration', get_defined_vars());
})->name('register.test.page');

Route::get('/success/page', function () {


    return view('success', get_defined_vars());
})->name('success.page');
Route::get('/quiz/competitions', function () {


    return view('quiz', get_defined_vars());
})->name('quiz.page');

Route::get('/registration/form', function () {



    $types = RegisterType::whereDate('start_date', '>=', '2024-02-01')->whereDate('end_date', '<=', '2024-03-14')->where('type', 'Conference')->get();
    $types_shops = RegisterType::whereDate('start_date', '>=', '2024-02-01')->whereDate('end_date', '<=', '2024-03-14')->where('type', 'Workshop')->get();

    return view('form-reg', get_defined_vars());
});
Route::get('/upload/data', function () {

    return  Storage::disk('backups')->files('directory');




    return view('upload', get_defined_vars());
})->name('upload.data');
Route::post('/upload/data', function (Request $request) {

    $users = (new FastExcel)->import($request['file'], function ($line) {


        ConferenceRegister::create([
            'email' => $line['email'],
            'cnic_passport' => $line['cnic'] ?? 'N/A',
            'name' => $line['name'],
            'registration_no' => $line['pmdc_no'] ?? 'N/A',
            'receipt_no' => $line['receipt_no'],
            'registration_type' => 'Conference',
            'phone_number' => $line['phone_no'] ?? 'N/A',
            'qualifications' => $line['r_id'],
            'payment_method' => 'Cash',

        ]);
    });


    return $request;
})->name('upload.data.submit');

Route::post('conference/register', [ConferenceRegisterController::class, 'submit'])->name('register')->middleware('throttle:5,1');;
Route::post('/subscribe', [ConferenceRegisterController::class, 'store'])
    ->name('subscribe.store');

Route::post('/contact', [ConferenceRegisterController::class, 'contactStore'])->name('contact.submit');


Route::get('our_backup_database', [ConferenceRegisterController::class, 'our_backup_database'])->name('our_backup_database');

Route::middleware('guest:web')->group(function () {

    Route::get('/login', [AdminLoginController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AdminLoginController::class, 'loginSubmit'])->name('admin.login.submit');
});

Route::middleware('auth:web')->prefix('admin')->name('admin.')->group(function () {
    Route::get('/logout', [AdminLoginController::class, 'logout'])->name('logout');

    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::get('/all/conference/candidate', [CandidateController::class, 'allCandidate'])->name('all.candidate');
    Route::get('/candidate/edit/{id}', [CandidateController::class, 'allCandidateEdit'])->name('all.candidate.edit');
    Route::get('/candidate/view/{id}', [CandidateController::class, 'allCandidateView'])->name('all.candidate.view');
    Route::get('/candidate/delete/{id}', [CandidateController::class, 'allCandidatedelete'])->name('all.candidate.delete');
    Route::post('/candidates/updates', [CandidateController::class, 'allCandidateUpdate'])->name('all.candidate.update');
    Route::get('/pending/conference/candidate', [CandidateController::class, 'pendingCandidate'])->name('pending.candidate');
    Route::get('/approve/conference/candidate', [CandidateController::class, 'approveCandidate'])->name('approve.candidate');
    Route::get('/rejected/conference/candidate', [CandidateController::class, 'rejectedCandidate'])->name('rejected.candidate');


    Route::get('/approve/workshop/candidate', [CandidateController::class, 'approveWorkshopCandidate'])->name('approve.workshop.candidate');
    Route::get('/rejected/workshop/candidate', [CandidateController::class, 'rejectedWorkShopCandidate'])->name('rejected.workshop.candidate');
    Route::get('/pending/workshop/candidate', [CandidateController::class, 'pendingWorkshopCandidate'])->name('pending.workshop.candidate');
    Route::get('/all/workshop/candidate', [CandidateController::class, 'allWorkshopCandidate'])->name('all.workshop.candidate');



    Route::get('/approve/candidate/{id}', [CandidateController::class, 'approveCandidates'])->name('approve.candidates');
    Route::get('/approve/candidate/payment/{id}', [CandidateController::class, 'approveCandidatePayment'])->name('approve.candidates.payment');
    Route::get('/pending/move/candidate/{id}', [CandidateController::class, 'moveToPending'])->name('move.to.pending');
    Route::get('/reject/candidate/{id}', [CandidateController::class, 'rejectCandidates'])->name('reject.candidates');
    Route::get('/conference/type', [CandidateController::class, 'conferenceType'])->name('conference.type');
    Route::get('/conference/type/create', [CandidateController::class, 'create'])->name('conference.type.create');
    Route::get('/conference/type/{id}', [CandidateController::class, 'conferenceEdit'])->name('conference.edit');
    Route::post('/conference/update', [CandidateController::class, 'conferenceUpdate'])->name('conference.update');
    Route::post('/conference/store', [CandidateController::class, 'conferenceStore'])->name('conference.store');

    Route::get('/send/email', [CandidateController::class, 'sendEmail'])->name('send.email');
    Route::post('/send/email', [CandidateController::class, 'sendEmailSubmit'])->name('send.email.submit');
    Route::get('/download/pdf/{id}', [CandidateController::class, 'download'])->name('send.download');
});


Route::get('/test', function () {



    return $data = ConferenceRegister::all();

    dd($data); // dump the response
})->name('home.test');

Route::get('/update/discount/{id}', function ($id) {



    $conference = ConferenceRegister::find($id);

    $mailData = [
        'first_name'    => $conference->name,
        'father_name'    => $conference->father_name,
        'email'         => $conference->email,
        'phone_number'  => $conference->phone_number,
    ];

    Mail::send('mail.conference_thankyou', $mailData, function ($message) use ($conference) {
        $message->to('ateeqadrees83@gmail.com')
            ->subject('Thank You for Registering – PDA Conference');
    });
})->name('home.test.update.discount');
