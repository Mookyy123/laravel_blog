<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Student;
use App\Models\Country;

class TestController extends Controller
{
    public function oneToMany()
    {
        $user = User::with('posts')->first();
        dd($user->posts);
    }

    public function manyToMany()
    {
        $student = Student::with('courses')->first();
        foreach ($student->courses as $course) {
            echo $course->title . "<br>";
        }
    }


    public function hasManyThrough()
    {
        $country = Country::with('posts')->first();
        dd($country->posts);
    }
}
