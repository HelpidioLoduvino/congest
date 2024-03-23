<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Condominio;
use App\Models\Contract;
use App\Models\PersonalContract;
use App\Models\BusinessContract;
use App\Models\AvailableCondo;
use App\Models\Resident;
use App\Models\Information;
use App\Models\Meeting;
use App\Models\Booking;
use App\Models\Message;
use App\Models\MessageFeedback;



class CondominioController extends Controller
{
    public function index(){
        return view('home');
    }

    public function showCondominio($id){

        $owner = User::select(
                            'users.name', 'users.email', 'condominios.condo_name', 'condominios.residency',
                            'available_condos.available', 'available_condos.occupied')
                            ->join('condominios', 'condominios.user_id', '=', 'users.id')
                            ->join('available_condos', 'available_condos.condoId', '=',
                            'condominios.id')
                            ->where('users.id', '=', $id)
                            ->first();
        if($owner){
            return view('condominio', compact('owner'));
        }
    }

    public function showNotice($id){
        $condoId = Condominio::select('condominios.id')
                                    ->join('users', 'users.id', '=',
                                    'condominios.user_id')
                                    ->where('users.id', '=', $id)
                                    ->first();

        $notices = Information::where('user_id', $id)->get();

        if($condoId){
            if($notices->isNotEmpty()){
                return view('notice', compact('condoId', 'notices'));
            }else {
                return view('notice', compact('condoId'));
            }
        }
    }

    public function showMeeting($id){

        $condoId = Condominio::select('condominios.id')
                                    ->join('users', 'users.id', '=',
                                    'condominios.user_id')
                                    ->where('users.id', '=', $id)
                                    ->first();

        $meetings = Meeting::where('user_id', $id)->get();

        if($condoId){

            if($meetings->isNotEmpty()){
                return view('meeting', compact('condoId', 'meetings'));
            } else {
                return view('meeting', compact('condoId'));
            }
        }
    }

    public function showResident($id){

        $residents = Resident::select(
                                    'residents.*', 'users.name', 'users.email')
                                    ->join('users', 'users.id', '=', 'residents.resident_id')
                                    ->where('residents.owner_id', $id)
                                    ->get();
        if($residents->isNotEmpty()){
            return view('resident', compact('residents'));
        }else {
            $residents = [];
            return view('resident', compact('residents'));
        }

    }

    public function showBlock(){
        return view('block');
    }

    public function showMessage($id){

        $messages = Message::select('users.name', 'condominios.user_id as owner_id',
                                    DB::raw('MAX(messages.user_id) as resident_id'),
                                    DB::raw('MAX(messages.message) as message'))
                            ->join('condominios', 'condominios.id', '=', 'messages.condo_id')
                            ->join('users', 'messages.user_id', '=', 'users.id')
                            ->where('condominios.user_id', $id)
                            ->latest('messages.time')
                            ->groupBy('users.name', 'condominios.user_id')
                            ->get();


        $residents = Resident::select('users.name', 'residents.resident_id', 'residents.owner_id')
                            ->join('users', 'residents.resident_id', '=', 'users.id')
                            ->join('condominios', 'condominios.id', 'residents.condo_id')
                            ->where('condominios.user_id', $id)->get();


        if($messages->isNotEmpty()){
            return view('message', compact('messages', 'residents'));
        }
    }

    public function showBooking($id){

        $bookings = Booking::select('bookings.*', 'users.name',
                            'residents.plot_resident', 'residents.residency_number')
                           ->join('residents', 'residents.resident_id', '=', 'bookings.user_id')
                           ->join('condominios', 'condominios.id', '=', 'bookings.condo_id')
                           ->join('users', 'bookings.user_id', '=', 'users.id')
                           ->where('condominios.user_id', $id)
                           ->get();

        if($bookings->isNotEmpty()){
            return view('booking', compact('bookings'));
        }else {
            $bookings = [];
            return view('booking', compact('bookings'));
        }

    }

    public function showResidentMessage($residentId, $ownerId){

        $chats = Message::select('users.name', 'condominios.user_id as owner_id',
                                    DB::raw('MAX(messages.user_id) as resident_id'),
                                    DB::raw('MAX(messages.message) as message'))
                            ->join('condominios', 'condominios.id', '=', 'messages.condo_id')
                            ->join('users', 'messages.user_id', '=', 'users.id')
                            ->where('condominios.user_id', $ownerId)
                            ->latest('messages.time')
                            ->groupBy('users.name', 'condominios.user_id')
                            ->get();

        $userInfo = Message::select('users.name', 'condominios.id as condo_id')
                            ->join('residents', 'residents.resident_id', '=', 'messages.user_id')
                            ->join('condominios', 'condominios.id', '=', 'messages.condo_id')
                            ->join('users', 'messages.user_id', '=', 'users.id')
                            ->where('messages.user_id', $residentId)
                            ->first();

        $messages = Message::select('messages.*')
                           ->join('residents', 'residents.resident_id', '=', 'messages.user_id')
                           ->join('condominios', 'condominios.id', '=', 'messages.condo_id')
                           ->join('users', 'messages.user_id', '=', 'users.id')
                           ->where('messages.user_id', $residentId)
                           ->get();

        $feedbacks = MessageFeedback::where('resident_id', $residentId)->get();

        $residents = Resident::select('users.name', 'residents.resident_id', 'residents.owner_id')
                            ->join('users', 'residents.resident_id', '=', 'users.id')
                            ->join('condominios', 'condominios.id', 'residents.condo_id')
                            ->where('condominios.user_id', $ownerId)->get();

        $resident_chat = Message::where('user_id', $residentId)->get();

        if($userInfo){
            return view('view_resident_message', compact(
                'messages',
                'userInfo',
                'chats',
                'feedbacks',
                'residents',
                'resident_chat'));
        }
    }

    public function showResidentBooking($id){

        $booking = Booking::select('bookings.*', 'users.name',
                                'residents.plot_resident', 'residents.residency_number')
                            ->join('residents', 'residents.resident_id', '=', 'bookings.user_id')
                            ->join('condominios', 'condominios.id', '=', 'bookings.condo_id')
                            ->join('users', 'bookings.user_id', '=', 'users.id')
                            ->where('bookings.id', $id)
                            ->first();

        if($booking){
            return view('view_resident_booking', compact('booking'));
        }

    }

    public function showMessageResident($residentId){

        $condo_name = Resident::select('condominios.condo_name', 'condominios.id', 'residents.resident_id')
                                ->join('condominios', 'condominios.id', '=', 'residents.condo_id')
                                ->where('residents.resident_id', $residentId)->first();

        $messages = Message::where('user_id', $residentId)->get();

        if($condo_name){
            return view('resident_message', compact('condo_name', 'messages'));
        }
    }

    public function showBookingResident($id){

        $resident = Resident::select('condominios.*', 'residents.*', 'users.name', 'users.email')
        ->join('condominios', 'condominios.id', '=', 'residents.condo_id')
        ->join('users', 'users.id', '=', 'residents.resident_id')
        ->where('residents.resident_id', $id)
        ->first();

        $bookings = Booking::where('user_id', $id)->get();

        if($resident){
            return view('resident_booking', compact('bookings', 'resident'));
        }

    }

    public function showAdmin(){
        return view('admin');
    }

    public function showHomeResident($id){

        $resident = Resident::select('condominios.*', 'residents.*', 'users.name', 'users.email')
                            ->join('condominios', 'condominios.id', '=', 'residents.condo_id')
                            ->join('users', 'users.id', '=', 'residents.resident_id')
                            ->where('residents.resident_id', $id)
                            ->first();



        $condoId = $resident->condo_id;

        $notices = Information::where('condo_id', $condoId)->get();

        $meetings = Meeting::where('condo_id', $condoId)->get();

        $bookings = Booking::where('user_id', $id)->get();

        $messages = Message::where('user_id', $id)->get();

        if($resident){
            return view('resident_home',
            compact(
                'resident',
                'notices',
                'meetings',
                'condoId',
                'bookings',
                'messages',
            ));
        }
    }

    public function showResidentFee(){
        return view('resident_fee');
    }

    public function showValidResidentFee(){
        return view('resident_fee_list');
    }

    public function showPersonForm(){
        return view('person_form');
    }

    public function showCompanyForm(){
        return view('company_form');
    }

    public function showAdminCondominio(){

        $condo_personal_contracts = Condominio::select(
                                                    'condominios.user_id', 'condominios.condo_name',
                                                    'contracts.contract_type', 'contracts.plan',
                                                    'contracts.date')
                                                    ->JOIN('contracts', 'condominios.id', '=',
                                                    'contracts.condo_id')
                                                    ->JOIN('personal_contracts',
                                                    'condominios.user_id', '=',
                                                    'personal_contracts.userId')
                                                    ->get();

        $condo_business_contracts = Condominio::select(
                                                    'condominios.user_id', 'condominios.condo_name',
                                                    'contracts.contract_type',
                                                    'contracts.plan', 'contracts.date')
                                                    ->JOIN('contracts', 'condominios.id', '=',
                                                    'contracts.condo_id')
                                                    ->JOIN('business_contracts', 'condominios.user_id',
                                                    '=', 'business_contracts.userId')
                                                    ->get();

        if($condo_personal_contracts->isNotEmpty() || $condo_business_contracts->isNotEmpty()){
            return view('admin_condominio', compact('condo_personal_contracts', 'condo_business_contracts'));
        } else {
            $condo_personal_contracts = [];
            $condo_business_contracts = [];
            return view('admin_condominio', compact('condo_personal_contracts', 'condo_business_contracts'));
        }


    }

    public function showAdminProfile($id){

        $user = User::find($id);

        return view('admin_profile', compact('user'));
    }

    public function showPersonalContract($id){

        $contract = User::select(
                                'users.name', 'users.email', 'condominios.condo_name',
                                'condominios.condo_address', 'condominios.plot',
                                'condominios.residency', 'contracts.plan',
                                'personal_contracts.bi', 'personal_contracts.birthday',
                                'personal_contracts.gender', 'personal_contracts.nationality',
                                'personal_contracts.address', 'personal_contracts.contact')
                                ->JOIN('condominios', 'condominios.user_id', '=', 'users.id')
                                ->JOIN('contracts', 'condominios.id', '=', 'contracts.condo_id')
                                ->JOIN('personal_contracts', 'condominios.user_id', '=',
                                'personal_contracts.userId')->where('users.id', '=', $id)
                                ->first();

        if($contract){
            return view('view_personal_contract', compact('contract'));
        }

    }

    public function showBusinessContract($id){

        $contract = User::select(
                                'users.name', 'users.email', 'condominios.condo_name',
                                'condominios.condo_address', 'condominios.plot',
                                'condominios.residency', 'contracts.plan',
                                'business_contracts.nif', 'business_contracts.address',
                                'business_contracts.contact')
                                ->JOIN('condominios', 'condominios.user_id', '=', 'users.id')
                                ->JOIN('contracts', 'condominios.id', '=', 'contracts.condo_id')
                                ->JOIN('business_contracts', 'condominios.user_id', '=',
                                'business_contracts.userId')->where('users.id', '=', $id)
                                ->first();

        if($contract){
            return view('view_business_contract', compact('contract'));
        }

    }

    public function showRegisterResident($id){

        $condoId = Condominio::select('condominios.id')
                                    ->join('users', 'users.id', '=',
                                    'condominios.user_id')
                                    ->where('users.id', '=', $id)
                                    ->first();

        if($condoId){
            return view('register_resident', compact('condoId'));
        }
    }

    public function showResidentForm($id){

        $resident = Resident::select('residents.*', 'users.name', 'users.email')
                            ->join('users', 'users.id', '=', 'residents.resident_id')
                            ->where('residents.resident_id', $id)
                            ->first();

        if($resident){
            return view('view_resident_form', compact('resident'));
        }

    }

    public function showCondominioNotice($id){
        $notice = Information::find($id);
        if($notice){
            return view('view_notice', compact('notice'));
        }
    }

    public function showCondominioMeeting($id){
        $meeting = Meeting::find($id);
        if($meeting){
            return view('view_meeting', compact('meeting'));
        }
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
                        return redirect('/condominio/' . session('id'))->with('msg', 'Condominio Logado Com Sucesso');
                        break;
                    case 'admin':
                        return redirect('/admin')->with('msg','Admin Logado Com Sucesso');
                        break;
                    case 'morador':
                        return redirect('/morador/'. session('id'))->with('msg', 'Morador Logado Com Sucesso');
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

                AvailableCondo::create([
                    'condoId' => $condoId,
                    'userId' => $userId,
                    'available' => $request->input('residency')
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

                AvailableCondo::create([
                    'condoId' => $condoId,
                    'userId' => $userId,
                    'available' => $request->input('residency')
                ]);
            }

            return redirect('/admin')->with('msg', 'Condominio Cadastrado Com Sucesso');

        } catch (Exception $e){
            return redirect()->back()->withErrors($validator)->withInput();
        }
    }

    public function registerResident(Request $request){

        $ownerId = $request->input('owner_id');
        $condoId = $request->input('condo_id');

        $validator = $request->validate([
            'name' => 'required|string',
            'email' => 'required|string|unique:users,email',
            'bi' => 'required|string|size:14',
            'birthday' => 'required|date|before:today',
            'gender' => 'required|string',
            'nationality' => 'required|string',
            'contact' => 'required|numeric|digits:9',
            'plot_resident' => 'required|string',
            'residency_number' => 'required|numeric|unique:residents,residency_number,NULL,id,condo_id,' . $condoId,
        ]);

        try {
            $user = User::create([
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'type' => $request->input('type')
            ]);

            $userId = null;

            if($user->type === 'morador'){
                $userId = $user->id;

                Resident::create([
                    'condo_id' => $condoId,
                    'resident_id' => $userId,
                    'owner_id' => $ownerId,
                    'bi' => $request->input('bi'),
                    'birthday' => $request->input('birthday'),
                    'gender' => $request->input('gender'),
                    'nationality' => $request->input('nationality'),
                    'contact' => $request->input('contact'),
                    'plot_resident' => $request->input('plot_resident'),
                    'residency_number' => $request->input('residency_number')
                ]);

                AvailableCondo::where(
                                ['userId' => $userId,
                                'condoId' => $request->input('condo_id')])
                                ->update([
                                    'available' => \DB::raw('available - 1'),
                                    'occupied' => \DB::raw('occupied + 1')
                                ]);


            }

            return redirect('/moradores/'. $ownerId)->with('msg', 'Morador Cadastrado Com Sucesso');

        } catch (Exception $e){
            return redirect()->back()->withErrors($validator)->withInput();
        }
    }

    public function sendNotice(Request $request){
        $validator = $request->validate([
            'subject' => 'required|string',
            'notice' => 'required|string',
            'receiver' => 'required|string'
        ]);

        $userId = $request->input('user_id');
        try {
            Information::create([
                'condo_id' => $request->input('condo_id'),
                'user_id' => $userId,
                'notice' => $request->input('notice'),
                'subject' => $request->input('subject'),
                'receiver' => $request->input('receiver')
            ]);

            return redirect('/avisos/'. $userId)->with('msg', 'Aviso Enviado Com Sucesso');
        } catch (Exception $e){
            return redirect()->back()->withErrors($validator)->withInput();
        }


    }

    public function scheduleMeeting(Request $request){
        $validator = $request->validate([
            'place' => 'required|string',
            'subject' => 'required|string',
            'meeting_date' => 'required'
        ]);

        $userId = $request->input('user_id');

        try {

            Meeting::create([
                'condo_id' => $request->input('condo_id'),
                'user_id' => $userId,
                'subject' => $request->input('subject'),
                'place' => $request->input('place'),
                'meeting_date' => $request->input('meeting_date')
            ]);

            return redirect('/reuniões/' . $userId)->with('msg', 'Reunião Agendada Com Sucesso');

        } catch (Exception $e){
            return redirect()->back()->withErrors($validator)->withInput();
        }
    }

    public function scheduleBooking (Request $request){
        $validator = $request->validate([
            'place' => 'required|string',
            'purpose' => 'required|string',
            'booking_date' => 'required'
        ]);

        $userId = $request->input('user_id');

        try {

            Booking::create([
                'condo_id' => $request->input('condo_id'),
                'user_id' => $userId,
                'place' => $request->input('place'),
                'purpose' => $request->input('purpose'),
                'booking_date' => $request->input('booking_date')
            ]);

            return redirect('/morador/'. $userId)->with('msg', 'Reserva Feita Com Sucesso');

        } catch (Exception $e){
            return redirect()->back()->withErrors($validator)->withInput();
        }
    }

    public function makeComplaint (Request $request){
        $validator = $request->validate([
            'subject' => 'required|string',
            'complaint' => 'required|string',
        ]);

        $userId = $request->input('user_id');

        try {

            Complaint::create([
                'condo_id' => $request->input('condo_id'),
                'user_id' => $userId,
                'subject' => $request->input('subject'),
                'complaint' => $request->input('complaint'),
            ]);

            return redirect('/morador/'. $userId)->with('msg', 'Reclamação Feita Com Sucesso');

        } catch (Exception $e){
            return redirect()->back()->withErrors($validator)->withInput();
        }
    }

    public function sendMessage (Request $request){
        $validator = $request->validate([
            'message' => 'required|string'
        ]);

        $userId = $request->input('user_id');

        try {

            Message::create([
                'condo_id' => $request->input('condo_id'),
                'user_id' => $userId,
                'message' => $request->input('message')
            ]);

            return redirect()->back();

        } catch (Exception $e){
            return redirect()->back()->withErrors($validator)->withInput();
        }
    }

    public function messageFeedback(Request $request){
        $validator = $request->validate([
            'feedback' => 'required|string'
        ]);

        try {

            MessageFeedback::create([
                'resident_id' => $request->input('resident_id'),
                'condo_id' => $request->input('condo_id'),
                'feedback' => $request->input('feedback')
            ]);

            return redirect()->back();

        } catch (Exception $e){
            return redirect()->back()->withErrors($validator)->withInput();
        }
    }

    public function confirmBooking(Request $request){

        $status = $request->input('status');
        $bookingId = $request->input('booking_id');
        $userId = $request->input('user_id');

        if(trim($status) !== trim("Confirmado")){

            Booking::where('id', $bookingId)->update(['status' => 'Confirmado']);

            return redirect('/reservas/' . $userId)->with('msg', 'Reserva Confirmada');
        }

    }

    public function denyBooking(Request $request){

        $status = $request->input('status');
        $bookingId = $request->input('booking_id');
        $userId = $request->input('user_id');

        if(trim($status) !== trim("Negado")){

            Booking::where('id', $bookingId)->update(['status' => 'Negado']);

            return redirect('/reservas/' . $userId)->with('msg', 'Reserva Negada');
        }

    }

    public function searchResident($resident_name){

        $resident = User::where('name', 'like', "%{$resident_name}%" )->get();

        dd($resident);
    }
}
