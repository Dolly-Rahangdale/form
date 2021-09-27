<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kyc;

class kycController extends Controller
{
        public function form()
        {
            return view('form');

        }
        public function submitform(Request $request)
        { 
            $kyc= new Kyc();
            $kyc->account_no = $request->account_no;
            $kyc->aadhar_no = $request->aadhar_no;
            $kyc->save();
            return redirect('table');
        }
        public function gettable()
        {
            $data= Kyc::all();
            return view('table',compact('data'));
        }
        
        public function editform($id)
        { 
            $data= Kyc::find($id);
            return view('edit',compact('data'));
        }

        public function updateform(Request $request,$id)
        {
            $kyc = Kyc::find($id);
            $kyc->account_no = $request->account_no;
            $kyc->aadhar_no = $request->aadhar_no;
            $kyc->update();
            return redirect('table');
        }

        public function deleteform(Request $request,$id)
        { 
            $kyc= Kyc::find($id);
            $kyc->account_no = $request->account_no;
            $kyc->aadhar_no = $request->aadhar_no;
            $kyc->delete();
            return redirect('table');
        }    
}
