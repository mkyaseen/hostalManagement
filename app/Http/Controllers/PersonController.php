<?php

namespace App\Http\Controllers;

use App\Person;
use App\Room;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $per = Person::all();

        //return $per;
        return view('people.index')->with('people', $per);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('people.create')->with('rooms',Room::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $name = $request->name;
        $phone = $request->phone;
        $date= $request->date_of_birth;
        $intitute= $request->institute;
        $cnic= $request->cnic;

        Person::create([ 'room_id'=>$request->room_id , 'name'=>$name, 'phone'=>$phone, 'date_of_birth'=>$date, 'institute'=>$intitute, 'cnic'=>$cnic]);


        // $dept = Person::create($request->all());
       // session()->put('key', '<b>sd</b>');

      return redirect(route('people.index'))->with('status', 'successfully created')->withInput($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Person  $person
     * @return \Illuminate\Http\Response
     */
    public function show(Person $person)
    {


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Person  $person
     * @return \Illuminate\Http\Response
     */
    public function edit(Person $person)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Person  $person
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Person $person)
    {
        $person->update($request->all());
        return redirect(route('departments.index'))->with('status', 'updated successfully')->withInput($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Person  $person
     * @return \Illuminate\Http\Response
     */
    public function destroy(Person $person)
    {
        Person::destroy($person->id);
        return redirect()->route('people.index')->with('status', 'successfully deleted');
    }
}
