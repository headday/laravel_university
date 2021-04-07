<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Person;

class IndexController extends Controller
{
    
    public function Index()
    {
        $header = "Резюме и вакансии";
        $persons = Person::select()->get();
        return view('page')->with(['header'=> $header,'persons' =>$persons]);
    }
    public function Show(){
        $data = [
            'sername' => 'Иванов',
            'position' => 'Программист',
            'phone' => '55-55-55',
            'age_position' => '4 года',
            'img' => 'ava1.jpg'
        ];
        return view('resume')->with('data',$data);
    }
    public function Resume(){
        $header = 'Резюме';
        $persons = Person::select()->get();
        return view('res')->with(['persons' => $persons, 'header' => $header]);
        //return view('res'); 
    }
    public function GetPersonsWithAge(){
        $header = 'Запрос ';
        $persons = Person::select()
                            ->where('Stage','>',4)
                            ->where('Stage','<',15)
                            ->get();
        return view('personsAge')->with(['persons'=>$persons,'header' => $header]);
    }
    public function GetPersonsWithPosition(){
        $header = 'Запрос ';
        $persons = Person::select()
                    ->leftjoin('staff','person.Staff','=','staff.id')
                    ->where('staff.staff','=','Программист')
                    ->get();
                ;
        return view('personPosition')->with(['persons'=>$persons,'header'=>$header]);
    }
    
    public function getAllResume(){
        $header = 'Запрос ';
        $person = Person::select()->count();
        return view('resumeCount')->with(['person' => $person,'header' => $header]);
    }
    public function getPositionsInResume(){
        $header = 'Запрос ';
        $positions = Person::select('staff.staff')
                            ->leftjoin('staff','person.Staff','=','staff.id')
                            ->distinct()
                            ->get();
        return view('positionsInResume')->with(['positions'=>$positions, 'header' => $header]);     
    }
    public function add(){
        $header = "Форма для добавления";
        return view('add-content')->with(['header'=>$header]);
        //return view('add-content');
    }
    public function store(Request $request){
        $this->validate($request,['FIO' => 'required|max:255',
        'Phone' => 'required', 'Stage' => 'required',
        'Staff' => 'required',]);
    $data=$request->all();
    $resume=new Person;
    $resume->fill($data);
    $resume->save();
    return redirect('/');
    }
    public function delete_resume($id) {
        $person = Person::find($id);
        $person->delete();
        return redirect('/');
    }
}
