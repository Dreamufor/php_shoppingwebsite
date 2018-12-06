<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use App\Jobs\SendVerificationEmail;
use App\Mail\WelcomeMail;
use Illuminate\Support\Facades\Mail;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    public function getRegister()
    {
        return view('auth.register');
    }


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:20',
            'email' => 'required|string|email|max:30|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'address' => 'required|string|max:30',
            'phone' => 'required|string|min:6|max:8',

        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {

        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'address' => $data['address'],
            'phone' => $data['phone'],
            'password' => Hash::make($data['password']),
            'email_verified_at' => base64_encode($data['email']),
        ]);


//        $user = User::create([
//            'name' => $data['name'],
//            'email' => $data['email'],
//            'address' => $data['address'],
//            'phone' => $data['phone'],
//            'password' => Hash::make($data['password']),
//            'email_verified_at' => base64_encode($data['email']),
//        ]);
//
//        Mail::to($data['email'])->send(new WelcomeMail($user));
//
//        return $user;
    }
//
//    public function create(Request $request)
//    {
//
//
//        $validator = Validator::make($request->all(), [
//            'name' => 'required|string|max:20',
//            'email' => 'required|string|email|max:30|unique:users',
//            'password' => 'required|string|min:8|confirmed',
//            'address' => 'required|string|max:30',
//            'phone' => 'required|string|min:6|max:8',
//        ]);
//
//
//        if ($validator->fails()) {
//            return redirect( route('register') )
//                ->withErrors($validator)
//                ->withInput();
//        }
//        $user = new User([
//            'name' => $_POST['name'], 'address' => $_POST['address'],'password' => $_POST['password']
//            , 'phone' => $_POST['phone'],
//        ]);
//        $user->save();
//
//        $user->sendEmail();
//        // $user->nofify(new VerifyEmail($user));
//        return view('auth.verify');
//    }




//    public function register(Request $request)
//    {
//        $this->validator($request->all())->validate();
//        event(new Registered($user = $this->create($request->all())));
//
//        dispatch(new SendVerificationEmail($user));
//
//        return view('mail.verification');
//    }
//
//    public function verify($token)
//    {
//        $user = User::where('email_verified_at', $token)->first();
//        $user->verified = 1;
//
//        if($user->save()){
//            return view('mail.emailconfirm', ['user' => $user]);
//        }
//    }
}
