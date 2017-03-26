<?php
namespace App\Http\Controllers;
use App\Classes\Buyer;
use App\Classes\Seller;
use Illuminate\Http\Request;
use App\functions\functions;
use Illuminate\Support\Facades\Auth;
use App\User;
use Hash;


class SellerController extends Controller{


    public function sellerRegister(Request $request)
    {	$this->validate($request,[
        'username' => 'required',
        'email' => 'required',
        'telephone'=>'required',
        'password' => 'required',
        'passwordreenter' => 'required|same:password',
        'g-recaptcha-response' => 'required|captcha',
    ]);

        $username =  $request['username'];
        $email =  $request['email'];
        $telephone = $request['telephone'];
        $password =  $request['password'];

        $user= new User();
        $user->name = $username;
        $user->email= $email;
        $user->password = bcrypt($password);
        $user->emailverified = 0;
        $user->role ="seller";
        $user->save();


        $buyer = new Buyer($username,$email);

        $buyerID=(new functions())->saveBuyer($buyer);

        $seller = new Seller($username,$email,$telephone,$buyerID);
        //echo $seller->getTelephone();

        (new functions())->saveSeller($seller);

        //authenticating the user
        if(Auth::attempt(['email'=>$request['email'],'password'=>$request['password']])){


            return redirect()->route('sellerdashboard');
        }
        else
        {
            return redirect()->back()->withErrors(['authenticationFailed', 'Please re-enter your password']);
        }


    }

}