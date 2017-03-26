<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\functions\functions;
use App\Classes\Advisor;
use App\Classes\Person;
use App\Classes\Lender;


class AdminController extends Controller
{

////////////////////////////////save legal data/////////////////////////////////////////////////////////

    public function savelegal(Request $request)
    {

        $this->validate($request, [
            'name' => 'required',
            'ID' => 'required',
            'telephone' => 'required',
            'email' => 'required',
            'des' => 'required'

        ]);

        $name = $request['name'];
        $ID = $request['ID'];
        $telephone = $request['telephone'];
        $des = $request['des'];
        $email = $request['email'];


        $advisor = new Advisor($ID, $name, $email, $telephone, $des);
        $employeeID = "123456";

        $legalsave = new functions();

        $legalsave->saveAdvisor($advisor, $employeeID);

    }

////////////////////////////////save legal data/////////////////////////////////////////////////////////

    public function savelender(Request $request)
    {

        $this->validate($request, [
            'name' => 'required',
            'ID' => 'required',
            'telephone' => 'required',
            'email' => 'required',
            'des' => 'required'

        ]);

        $name = $request['name'];
        $ID = $request['ID'];
        $telephone = $request['telephone'];
        $des = $request['des'];
        $email = $request['email'];


        $lender = new Lender($ID, $name, $email, $telephone, $des);
        $employeeID = "123456";

        (new functions())->saveMoneyLender($lender, $employeeID);

    }

    ////////////////////////////////save City details data/////////////////////////////////////////////////////////

    public function saveCity(Request $request){

        $this->validate($request, [
            'city' => 'required',
            'ID' => 'required'
        ]);

        (new functions())->saveCitydata($request['city'],$request['ID']);

    }

    public function getAdvisor(){

       $result = (new functions())->getAdvisorData();

       return view ('admin/advisorTable',compact('result'));
    }


    public function editUser($id){

        $advisor = (new functions())->editAdvisorData($id);

        return view ('admin/edit',compact('advisor'));
    }

    public function sendEdit(Request $request){
        $name = $request['name'];
        $ID = $request['ID'];
        $telephone = $request['telephone'];
        $des = $request['des'];
        $email = $request['email'];

        $advisor = new Advisor($ID, $name, $email, $telephone, $des);

        (new functions())->updateAdvisor($advisor);

    }


    //////////////////////////////////////////Money Lender///////////////////////////////////////////////////////////////////////

    public function getLender(){

        $result = (new functions())->getLenderData();

        return view ('admin/lenderTable',compact('result'));
    }


    public function editLender($id){

        $lender = (new functions())->editLenderData($id);

        return view ('admin/editLender',compact('lender'));
    }

    public function sendLender(Request $request){
        $name = $request['name'];
        $ID = $request['ID'];
        $telephone = $request['telephone'];
        $des = $request['des'];
        $email = $request['email'];

        $lender = new Lender($ID, $name, $email, $telephone, $des);

        (new functions())->updateLender($lender);

    }

    public function sendMessage(Request $request){
        $this->validate($request, [
            'role' => 'required',
            'message' => 'required',
        ]);

        (new functions())->saveMessage($request['role']);

    }
}
?>