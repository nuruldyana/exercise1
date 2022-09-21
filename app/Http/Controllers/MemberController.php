<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class MemberController extends Controller
{

    public function create(Request $req)
    {
        
        return view('create');
    }

    public function store(Request $req)
    {
        $req->validate([
            'name' => 'required',
            'email' => 'required',
            'address' => 'required'
        ]);

         //nama object
         $member = new Member;
         $member->name=$req->name;
         $member->email=$req->email;
         $member->address=$req->address;

         $member->save();
 
         return redirect('show');
    }

    public function show()
    {
        $data = Member::all();
        return view('show', ['members'=>$data]);
    }

    public function edit($id){
        
        $data =  Member::find($id);
        return view('edit', ['members'=>$data]);
    }

 
    public function update(Request $req)
    {
        $req->validate([
            'name' => 'required',
            'email' => 'required',
            'address' => 'required'
        ]);

        $data =  Member::find($req->id);
        $data->name=$req->name;
        $data->email=$req->email;
        $data->address=$req->address;
        $data->save();

        //nama url
        return redirect('show');
    }

  
    function delete($id){
        $data = Member::find($id);
        $data->delete();
        return redirect('show');
    }
    
}
