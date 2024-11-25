<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    // Hiển thị trang liên hệ
    public function index()
    {
        return view('user.pages.contact');
    }

    // Xử lý form gửi liên hệ
    public function submit(Request $request)
    {
        // Validation dữ liệu
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string|min:10',
        ]);

        // Lưu hoặc xử lý dữ liệu (Ví dụ: gửi email)
        // \Mail::to('admin@example.com')->send(new ContactMail($request->all()));

        return redirect()->route('contact.index')->with('success', 'Cảm ơn bạn đã liên hệ! Chúng tôi sẽ phản hồi sớm.');
    }
}

