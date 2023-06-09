<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\Category;
use App\Models\Loan;
use App\Models\Message;
use App\Models\Setting;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function index() {
        $settings = Setting::first();
        $books = Book::all();
        $loans = Loan::all();
        $categories = Category::all();
        $users = User::all();
        $messages = Message::/*where('status', 'New')->orderBy('created_at', 'asc')->get();*/all();
        return view('admin.index', [
            'settings' => $settings,
            'books' => $books,
            'loans' => $loans,
            'users' => $users,
            'messages' => $messages,
            'categories' => $categories,
        ]);
    }

    public function login() {
        if (Auth::check())
        {
            return redirect(route('admin'));
        }
        $settings = Setting::first();
        return view('admin.login', [
            'settings' => $settings,
        ]);
    }

    public function check(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended(route('admin'));
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    public function footer() {
        $settings = Setting::first();
        return view('admin.footer', [
            'settings' => $settings,
        ]);
    }

    public function show_images() {
        $images = Storage::files('public/');
        $images = str_replace('public/', '', $images);
        return view('admin.image', compact('images'));
    }
}
