<?php

namespace App\Http\Controllers\Admin;

use Inertia\Inertia;

use Illuminate\Http\Request;

use App\Models\Course;
use App\Models\Lesson;

class TopicController extends Controller
{
    public function index()
    {


        return Inertia::render('Admin/Topic/Index', []);
    }
}