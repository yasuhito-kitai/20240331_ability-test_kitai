<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Category;








class ContactController extends Controller
{
  public function index()
  {
    $categories = Category::all();
    return view('index',compact('categories'));
  }

  public function confirm(ContactRequest $request)
  {
    $contact = $request->only(['first_name', 'last_name', 'gender', 'email', 'tel_1', 'tel_2', 'tel_3', 'address', 'building', 'detail', 'content',]);

    $category = Category::where('content', $request->input('content'))->pluck('id')->toArray();

    return view("confirm", compact('contact', 'category'));
  }


  public function store(Request $request)
   {
    $contact = $request->only(['first_name', 'last_name', 'gender', 'email', 'tel_1', 'tel_2', 'tel_3', 'address', 'building','detail']);
    Contact::create($contact);

    $category = $request->only(["content"]);
    Category::create($category);

    return view('thanks');
   }


}
