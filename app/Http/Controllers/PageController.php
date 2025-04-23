<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class PageController extends Controller
{
    public function home()
    {
       return view('home');
    }
    public function submitBooking(Request $request)
    {
        // Валидация данных
        $validated = $request->validate([
            'name' => 'required|max:255',
            'phone' => 'required|max:20',
        ]);

        // Здесь можно добавить сохранение в БД или отправку на почту
        // Например:
        // Mail::to('admin@barbershop.ru')->send(new BookingMail($validated));

        return redirect('/')->with('success', 'Заявка отправлена! Мы вам перезвоним.');
    }
}


