<?php

namespace App\Http\Controllers\admin;

use App\Models\Trainer;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use File;
use Illuminate\Support\Facades\Auth;

class TrainerController extends Controller
{


    function __construct()
    {
         $this->middleware('permission:trainer-list|trainer-create|trainer-edit|trainer-delete', ['only' => ['index','store']]);
         $this->middleware('permission:trainer-create', ['only' => ['create','store']]);
         $this->middleware('permission:trainer-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:trainer-delete', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if($request->ajax()){
            $query = Trainer::orderby('id' , 'desc')->where('id' , '>' , 0);
            if($request['search'] != ""){
                $query->where('name' , 'like' , '%' .$request['search'] .'%');
            }
            if($request['status'] != "All"){
                if($request['status']==2){
                    $request['status'] = 0;
                }
                $query->where('status' , $request['status']);
            }
            $trainers=$query->paginate(10);
            return (string) view('admin.trainers.search' , compact('trainers'));
        }

        $page_title ='All Trainers';
        $trainers= Trainer::orderby('id' , 'desc')->paginate(10);
        return view('admin.trainers.index' , compact('trainers' , 'page_title'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $page_title= 'Add Trainer';
        return view('admin.trainers.create' , compact('page_title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = $request->validate([
            'name' => 'required',
            'image' => 'mimes:jpeg,jpg,png,gif|required|max:10000',
            'trainer_type' => 'required',
            'description' => 'required',
            'price' => 'required',
        ]);

        $trainers = new Trainer();

        if(isset($request->image)){
            $photo=date('y-m-d-His').'.'.$request->file('image')->getClientOriginalExtension();
            $request->image->move(public_path('/admin/assets/images/Trainers'), $photo);
            $trainers->image=$photo;
        }

        $trainers->created_by = Auth::user()->id;
        $trainers->name = $request->name; 
        $trainers->trainer_type = $request->trainer_type;
        $trainers->description = $request->description;
        $trainers->price = $request->price;
        $trainers->facebook = $request->facebook;
        $trainers->twitter = $request->twitter;
        $trainers->instagram = $request->instagram;
        $trainers->linkedin = $request->linkedin;
        $trainers->youtube = $request->youtube;
        $trainers->save();

        return redirect()->route('trainer.index')->with('message' , 'Trainer added Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Trainer $trainer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $page_title='Edit Trainer';
        $trainer= Trainer::where('id' , $id)->first();
        return view('admin.trainers.edit' , compact('page_title' , 'trainer'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    { 
        
        $validator = $request->validate([
            'name' => 'required',
            'image' => 'mimes:jpeg,jpg,png,gif|nullable|max:10000',
            'trainer_type' => 'required',
            'description' => 'required',
            'price' => 'required',
        ]);
        
        $updates = Trainer::where('id' , $id)->first();
        if (isset($request->image)) {
            $photo = date('d-m-Y-His').'.'.$request->file('image')->getClientOriginalExtension();
            $Image = $request->image->move(public_path('/admin/assets/images/Trainers'), $photo);
            $updates->image = $photo;
        }

        $updates->created_by = Auth::user()->id;
        $updates->name = $request->name;
        $updates->trainer_type = $request->trainer_type;
        $updates->description = $request->description;
        $updates->price = $request->price; 
        $updates->twitter = $request->twitter;
        $updates->instagram = $request->instagram; 
        $updates->status = $request->status;
        $updates->update();

        return redirect()->route('trainer.index')->with('message' , 'Trainer updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $trainers = Trainer::where('id', $id)->first();
        if ($trainers) {
            $trainers->delete();
            return true;
        } else {
            return response()->json(['message' => 'Failed '], 404);
        }
    }
}
