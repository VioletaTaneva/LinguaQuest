<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $topics = DB::table('topics')
                    //joins the topics and users tables so we can see the username and photo associated with each topic
                    ->join('users', 'users.id', '=', 'topics.user_id')
                    //joins the topic and categories tables so we can see the categories associated with each topic
                    ->join('topic_categories', 'topic_categories.topic_id', '=', 'topics.id')
                    ->join('categories', 'categories.id', '=', 'topic_categories.category_id')
                    //select ewhats displayed
                    ->select('topics.*', 'users.username', 'users.photo', DB::raw('GROUP_CONCAT(categories.name) as categories'))
                    ->groupBy('topics.id',
                                'topics.name',
                                'topics.user_id',
                                'topics.created_on', 'users.username', 'users.photo')
                    ->orderBy('topics.created_on', 'desc')
                    ->paginate(10);

        $categories = DB::table('categories')
                    ->select('*')
                    ->get();

        return view('home', compact('topics', 'categories'));
    }
    
    public function category($category_id)
    {
        $topics = DB::table('topics')
                ->join('users', 'users.id', '=', 'topics.user_id')
                // makes the topic of the categories a filter / tc_filter = topic_categories
                ->join('topic_categories as tc_filter', 'tc_filter.topic_id', '=', 'topics.id')
                // makes it so that when it shows all the categories a topic belongs to
                ->join('categories as c_filter', 'c_filter.id', '=', 'tc_filter.category_id')
                ->join('topic_categories', 'topic_categories.topic_id', '=', 'topics.id')
                ->join('categories', 'categories.id', '=', 'topic_categories.category_id')
                ->where('c_filter.id', '=', $category_id)
                ->select(
                    'topics.id',
                    'topics.name',
                    'topics.user_id',
                    'topics.created_on',
                    'users.username',
                    'users.photo',
                    DB::raw('GROUP_CONCAT(categories.name) as categories')
                )
                ->groupBy(
                    'topics.id',
                    'topics.name',
                    'topics.user_id',
                    'topics.created_on',
                    'users.username',
                    'users.photo'
                )
                ->orderBy('topics.created_on', 'desc')
                ->paginate(10); // how many topics per page

        $selected_category = Category::findOrFail($category_id);

        $categories = DB::table('categories')
        ->select('*')
        ->get();

        return view('home', compact('topics', 'categories', 'selected_category'));
    }
}
