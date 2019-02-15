<?php

 


// main controller
Route::get('/','MainController@index');
Route::post('/','MainController@check');
Route::get('/logout','MainController@logout');
Route::get('/main','MainController@mainPage');


// student controllers 

Route::get('/regst','StudentController@register');
Route::post('/regst','StudentController@store');
Route::get('/select-lecture-st','StudentController@selectLecture');
Route::post('/show-lecture-st','StudentController@showLecture');
Route::get('/select-lecture-marks','StudentController@selectLectureMarks');
Route::post('/show-lecture-marks','StudentController@showLectureMarks');
Route::get('/absence/lectures','StudentController@showAbsenceLectureStudent');
Route::post('/absence/lectures/show-count','StudentController@showAbsenceCount');
Route::get('show/timetable/st','StudentController@showTimetable');
Route::get('/info/s','StudentController@showInfo');

// teacher controllers 
Route::get('/regtch','TeacherController@register');
Route::post('/regtch','TeacherController@store');
 Route::get('/create-lecture','TeacherController@createLecture');
Route::get('/lectures','TeacherController@selectLectureUpDel');
Route::post('/lectures','TeacherController@storeLecture');
Route::post('/lectures/all','TeacherController@showLecture');
Route::patch('/update-lecture/{id}','TeacherController@updateLecture');
Route::get('/delete-lecture/{id}','TeacherController@deleteLecture');
Route::get('/select-lecture-absence','TeacherController@selectLectureAbsence');
Route::post('/edit-absence','TeacherController@editAbsence');
Route::post('/store-absence','TeacherController@storeAbsence');
Route::get('show/timetable/te','TeacherController@showTimetable');
Route::get('/info/t','TeacherController@showInfo');

// admin controllers 
Route::get('/regad','AdminController@register');
Route::post('/regad','AdminController@store');
Route::get('/edit-marks-s-lecture','AdminController@editMarksSelectLecture');
Route::post('/edit-marks-view','AdminController@editMarksView');
Route::post('/store-marks','AdminController@storeMarks');
Route::get('/lectures/create/timetable','AdminController@createTimetable');
Route::post('/lectures/timetable','AdminController@storeTimetable');
Route::get('/lectures/timetables','AdminController@showTimetable');
Route::patch('/lectures/update/timetable/{id}','AdminController@updateTimetable');
Route::get('/lectures/delete/timetable/{id}','AdminController@deleteTimetable');
Route::get('/select/id/te-st','AdminController@selectIdType');
Route::post('/id/number','AdminController@StoreId');
Route::get('/info/a','AdminController@showInfo');

 

