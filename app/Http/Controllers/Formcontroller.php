<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Person;


class Formcontroller extends Controller
{
    public function form(){
        $persons = Person::all();
        return view("form", compact('persons'));
    }

    public function add(Request $request){
        
        $person = new Person();
        $person->firstname = $request->firstname;
        $person->lastname = $request->lastname;
        $person->email = $request->email;
        $person->password = $request->password;
        $person->gender = $request->gender;
        $person->contact_no = $request->contact_no;

        $person->save();
    
        return redirect('/form');
    }

    public function list(){
        $persons = Person::all();
        return view('form', ['persons' => $persons]);
    }

    public function edit($id)
   {
      $person = Person::where('id', $id)->first();
      return view('edit', ['person' => $person]);
   }

    public function destroy($id)
   {
      $person = Person::find($id);
         $person->delete();

         return redirect('/form');
      }

      public function update(request $request, $id)
   {
      $person = Person::where('id', $id)->first();

      $person->update($request->all());

      return redirect('/form');
   }

}
