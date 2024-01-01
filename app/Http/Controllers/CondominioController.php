<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CondominioController extends Controller
{
    public function index(){
        return view('home');
    }

    public function showCondominio(){
        return view('condominio');
    }

    public function showNotice(){
        return view('notice');
    }

    public function showMeeting(){
        return view('meeting');
    }

    public function showResident(){
        return view('resident');
    }

    public function showBlock(){
        return view('block');
    }

    public function showComplaint(){
        return view('complaint');
    }

    public function showComplaintLetter(){
        return view('complaint_letter');
    }

    public function showMessage(){
        return view('message');
    }

    public function showMessageLetter(){
        return view('message_letter');
    }

    public function showAdmin(){
        return view('admin');
    }

    public function showHomeResident(){
        return view('resident_home');
    }

    public function showResidentFee(){
        return view('resident_fee');
    }

    public function showValidResidentFee(){
        return view('resident_fee_list');
    }

    public function showBooking(){
        return view('booking');
    }

    public function showPersonForm(){
        return view('person_form');
    }

    public function showCompanyForm(){
        return view('company_form');
    }

    public function showAdminCondominio(){
        return view('admin_condominio');
    }
}
