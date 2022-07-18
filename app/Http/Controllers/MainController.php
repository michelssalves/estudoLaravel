<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ReasonForContact;

class MainController extends Controller
{
    public function main() {

        $reason_for_contact = ReasonForContact::all();

        return view('site.main', ['titulo' => 'Main', 'reason_for_contact' => $reason_for_contact]);
    }
}
