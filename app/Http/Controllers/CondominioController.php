<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Condominio;
use App\Models\Contract;
use App\Models\PersonalContract;
use App\Models\BusinessContract;

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

    public function showAdminProfile($id){

        $user = User::find($id);

        return view('admin_profile', compact('user'));
    }

    public function login (Request $request) {

        $validator = $request->validate([
            'email' => 'required|email|exists:users,email',
            'password' => 'required|string',
        ], [
            'email.exists' => 'Email or password is incorrect.',
        ]);

        try{
            if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
                $user = Auth::user();
                session(['id' =>$user->id, 'type' => $user->type]);
                $sessionType = session('type');
                switch($sessionType){
                    case 'condominio':
                        return redirect('/condominio')->with('msg', 'Condominio Logado Com Sucesso');
                        break;
                    case 'admin':
                        return redirect('/admin')->with('msg','Admin Logado Com Sucesso');
                        break;
                    default:
                        return view('/login')->with('error', 'Erro ao Fazer Login');
                        break;
                }
            } else {
                return redirect()->back()->withErrors(['password' => 'Password is incorrect']);
            }
        }catch (Exception $e){
            return redirect()->back()->withErrors($validator)->withInput();
        }

    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }

    public function registerCondoPersonalContract(Request $request){
        $validator = $request->validate([
            'name' => 'required|string',
            'email' => 'required|string|unique:users,email',
            'bi' => 'required|string|size:14',
            'birthday' => 'required|date|before:today',
            'gender' => 'required|string',
            'nationality' => 'required|string',
            'address' => 'required|string',
            'contact' => 'required|numeric|digits:9',
            'condo_name' => 'required|string',
            'condo_address' => 'required|string',
            'plot' => 'required|numeric',
            'residency' => 'required|numeric',
            'contract_type' => 'required|string',
            'plan' => 'required|string'
        ]);

        try {
            $user = User::create([
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'type' => $request->input('type')
            ]);

            $userId = null;

            if($user->type === 'condominio'){
                $userId = $user->id;

                PersonalContract::create([
                    'userId' => $userId,
                    'bi' => $request->input('bi'),
                    'birthday' => $request->input('birthday'),
                    'gender' => $request->input('gender'),
                    'nationality' => $request->input('nationality'),
                    'address' => $request->input('address'),
                    'contact' => $request->input('contact')
                ]);

                $condominio = Condominio::create([
                    'condo_name' => $request->input('condo_name'),
                    'user_id' => $userId,
                    'condo_address' => $request->input('condo_address'),
                    'plot' => $request->input('plot'),
                    'residency' => $request->input('residency')
                ]);

                $condoId = $condominio->id;

                Contract::create([
                    'condo_id' => $condoId,
                    'user_id' => $userId,
                    'contract_type' => $request->input('contract_type'),
                    'plan' => $request->input('plan')
                ]);
            }

            return redirect('/admin')->with('msg', 'Condominio Cadastrado Com Sucesso');

        } catch (Exception $e){
            return redirect()->back()->withErrors($validator)->withInput();
        }
    }

    public function registerCondoBusinessContract(Request $request){
        $validator = $request->validate([
            'name' => 'required|string',
            'email' => 'required|string|unique:users,email',
            'nif' => 'required|string|size:14',
            'address' => 'required|string',
            'contact' => 'required|numeric|digits:9',
            'condo_name' => 'required|string',
            'condo_address' => 'required|string',
            'plot' => 'required|numeric',
            'residency' => 'required|numeric',
            'contract_type' => 'required|string',
            'plan' => 'required|string'
        ]);

        try {
            $user = User::create([
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'type' => $request->input('type')
            ]);

            $userId = null;

            if($user->type === 'condominio'){
                $userId = $user->id;

                BusinessContract::create([
                    'userId' => $userId,
                    'nif' => $request->input('nif'),
                    'address' => $request->input('address'),
                    'contact' => $request->input('contact')
                ]);

                $condominio = Condominio::create([
                    'condo_name' => $request->input('condo_name'),
                    'user_id' => $userId,
                    'condo_address' => $request->input('condo_address'),
                    'plot' => $request->input('plot'),
                    'residency' => $request->input('residency')
                ]);

                $condoId = $condominio->id;

                Contract::create([
                    'condo_id' => $condoId,
                    'user_id' => $userId,
                    'contract_type' => $request->input('contract_type'),
                    'plan' => $request->input('plan')
                ]);
            }

            return redirect('/admin')->with('msg', 'Condominio Cadastrado Com Sucesso');

        } catch (Exception $e){
            return redirect()->back()->withErrors($validator)->withInput();
        }
    }
}
