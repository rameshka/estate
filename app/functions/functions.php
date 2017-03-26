<?php
namespace App\functions;
use GuzzleHttp\Psr7\Request;
use View, Input, Redirect;
use DB;
use App\ForgotPass;
use App\Classes\Advisor;
use App\Classes\Lender;

class functions {


	function generateRandomString($length ) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
	}
	
	
		function checkUserVerification($mail)
	{
		if ((DB::table('users')->where('email',$mail)->value('emailverified'))===0)
		{
		
	
			return true;
		}
		else
		{
			return false;
		}
	}
	
	function verification ($mail)
	{
			DB::table('users')
            ->where('email', $mail)
            ->update(['emailverified' => 1]);	
			return true;
	}
	
	function addNewPass($email,$pass){
		
			DB::table('users')
            ->where('email', $email)
            ->update(['password' => $pass]);	
			return true;
		
		}
		
		function changeName($email,$username){
			DB::table('users')
            ->where('email', $email)
            ->update(['name' => $username]);	
			return true;
			
			
			}
			
		function getID($email){
			$user = DB::table('users')->where('email',$email)->pluck('id');
			
			return  $user[0];
			
			
			}	
			
		 
		 function checkEmail($email){
		
		$user = DB::table('users')->where('email',$email)->pluck('id');
		
		if($user[0]>0){
			
		/////////////valide user to send email//////////////////	
		
		return true;
			
		}
		
		else{
			
		return false;
			
			}
		
		}	
		
		
		function checkRandom($value){
			
		$user = DB::table('forgot')->where('random',$value)->pluck('id');
		
		if($user[0]>0){
			
		/////////////valide user to send email//////////////////	
		
		return true;
			
		}
		
		else{
			
		return false;
			
		}
		
		}
		
		function addRandom($email,$value){
			
			DB::table('forgot')->insert(
    		['email' => $email, 'random' => $value]
			);
			
			}
			
		function getEmail($value){
			
			$user = DB::table('forgot')->where('random',$value)->pluck('email');
			
			return $user[0];
			}	
			
	/////////////select login view, return role //////////////////
				
		function getLoginView($email){
			
			$role=DB::table('users')->where('email',$email)-> value('role');
			 
			return $role ;
			}	
			
	/////////////save advisor details//////////////////
			function saveAdvisor($advisor,$employeeID){

                DB::table('legaladvising')->insert([
                    ['legalID' => $advisor->getLegalID() , 'name' => $advisor->getName(),'email' => $advisor->getEmail(), 'description' => $advisor->getDescription(),'telephone' => $advisor->getTelephone(),'createdBy' =>$employeeID]
                ]);
				
				}	

	/////////////save Money Lender/////////////////////////////////////

            function saveMoneyLender($lender,$employeeID){

                DB::table('lender')->insert([
                    ['lenderID' => $lender->getLenderID() , 'name' =>$lender->getName(),'email' =>$lender->getEmail(), 'description' => $lender->getDescription(),'telephone' => $lender->getTelephone(),'createdBy' =>$employeeID]
                ]);

            }

    /////////////////////////save city details to the database/////////////////////////////////////////////////
            function saveCitydata($city,$id){

                DB::table('city')->insert([
                    ['cityID' => $id , 'city' =>$city]
                ]);

            }

    /////////////////////////////send Advisor details to the front////////////////////////////////////////////////

            function getAdvisorData(){

                $advisors = DB::table('legaladvising')->select('legalID', 'name','email','telephone','createdBy')->get();


                $result = array();

                foreach ($advisors as $user)
                {

                    $tadvisor = new Advisor($user->legalID,$user->name,$user->email,$user->telephone,"");


                    $tadvisor->setCreatedBy($user->createdBy);

                    array_push($result,$tadvisor);
                }

            return $result;

            }

    ///////////////////////////return editing advisor data to the form/////////////////////////////////////
            function editAdvisorData($id){

                $users = DB::table('legaladvising')->where('legalID', '=', $id)->get();


                foreach ($users as $user)
                {
                    $tadvisor = new Advisor($user->legalID,$user->name,$user->email,$user->telephone,$user->description);

                }


                return $tadvisor;
            }


            ///////////////////////////update advisor data/////////////////////////////////////
            function updateAdvisor($advisor){

                DB::table('legaladvising')->where('legalID', $advisor->getLegalID())->update(['name' =>$advisor->getName(),'email'=> $advisor->getEmail(),'telephone'=>$advisor->getTelephone(),'description'=> $advisor->getDescription()]);


            }

            /////////////////////////////////////////Get Lender Data///////////////////////////////////////////////////////

    function getLenderData(){

        $lenders = DB::table('lender')->select('lenderID', 'name','email','telephone','createdBy')->get();


        $result = array();

        foreach ($lenders as $user)
        {

            $tlender = new Lender($user->lenderID,$user->name,$user->email,$user->telephone,"");


            $tlender->setCreatedBy($user->createdBy);

            array_push($result,$tlender);
        }

        return $result;

    }

    function editLenderData($id){

        $users = DB::table('lender')->where('lenderID', '=', $id)->get();


        foreach ($users as $user)
        {
            $tlender = new Lender($user->lenderID,$user->name,$user->email,$user->telephone,$user->description);

        }


        return $tlender;
    }

    function updateLender($lender){

        DB::table('lender')->where('lenderID', $lender->getLenderID())->update(['name' =>$lender->getName(),'email'=> $lender->getEmail(),'telephone'=>$lender->getTelephone(),'description'=> $lender->getDescription()]);


    }


    ///////////////////////////////////save Message in the database//////////////////////////////////////

    function saveMessage($message){

        DB::table('message')->insert([
            ['content' => $message , 'createdBy' =>123456]
        ]);
    }

    /**
     * *******************************Seller Function
     */


    /**
     * save seller as buyer first
     */
    function saveBuyer($buyer){

        DB::table('buyer')->insert(['name' => $buyer->getName(), 'email' => $buyer->getEmail()]);

         return DB::table('buyer')->where('email',$buyer->getEmail())-> value('buyerID');
    }

    /**
     * save seller as seller
     */

    function saveSeller($seller){



        DB::table('seller')->insert(['name' => $seller->getName(), 'email' => $seller->getEmail(),'telephone'=>$seller->getTelephone(),'buyerID'=>$seller->getBuyerID()]);


    }




}
?>