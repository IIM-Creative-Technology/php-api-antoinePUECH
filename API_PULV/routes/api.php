<?php
use App\Models\{Classe, Student, Subject, Teacher, Note, User};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('api_token')->group(function() {
    Route::get('/classes', function() {
        return Classe::all();
    });
    
    Route::get('/classes/{classId}', function($classId) {
        return Classe::findOrFail($classId);
    });
    
    Route::put('/classes/{classId}', function($classId, Request $request) {
        $class = Classe::findOrFail($classId);
        $class->update($request->all());
        return $class;
    });
    
    Route::get('/classes/{promotion}/students', function($promotion) {
        return Classe::wherePromotion($promotion)->firstOrFail();
    });
    
    Route::post('/classes', function(Request $request) {
        return Classe::create($request->all());
    });
    
    Route::get('/students', function() {
        return Student::all();
    });
    
    Route::get('/students/{studentId}', function($studentId) {
        return Student::findOrFail($studentId);
    });
    
    Route::post('/students', function(Request $request) {
        return Student::create($request->all());
    });
    
    Route::put('/students/{studentId}', function($studentId, Request $request) {
        $student = Student::findOrFail($studentId);
        $student->update($request->all());
        return $student;
    });
    
    Route::delete('/students/{studentId}', function($studentId) {
        return Student::findOrFail($studentId)->delete();
    });
    
    Route::get('/subjects', function() {
        return Subject::all();
    });
    
    Route::get('/subjects/{subjectId}', function($subjectId) {
        return Subject::findOrFail($subjectId);
    });
    
    Route::post('/subjects', function(Request $request) {
        return Subject::create($request->all());
    });
    
    Route::put('/subjects/{subjectId}', function($subjectId, Request $request) {
        $subject = Subject::findOrFail($subjectId);
        $subject->update($request->all());
        return $subject;
    });
    
    Route::get('/teachers', function() {
        return Teacher::all();
    });
    
    Route::post('/teachers', function(Request $request) {
        return Teacher::create($request->all());
    });
    
    Route::put('/teachers/{teacherId}', function($teacherId, Request $request) {
        $teacher = Teacher::findOrFail($teacherId);
        $teacher->update($request->all());
        return $teacher;
    });
    
    Route::get('/teachers/{teacherId}', function($teacherId) {
        return Teacher::findOrFail($teacherId);
    });
    
    Route::post('/notes', function(Request $request) {
        return Note::create($request->all());
    });
    
    Route::get('/notes/{noteId}', function($noteId) {
        return Teacher::findOrFail($noteId);
    });
});
