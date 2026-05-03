<?php
namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Article;

class UsersController extends Controller
{
public function users()
{
$totalUsers = User::count();
$totalArticles = Article::count();
return view('admin.users.index', compact(
'totalUsers',
'totalArticles'
));
}
}
