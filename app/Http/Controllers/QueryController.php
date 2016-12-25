<?php

namespace eloquent\Http\Controllers;

use Illuminate\Http\Request;
use eloquent\User;
use eloquent\Http\Requests;
use eloquent\Http\Controllers\Controller;


class QueryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    
    public function getAll()
    {
        
        
        $users = User::all();
        $title="todos los usuarios All";
        return view('query.methods', compact('title','users'));
    }
    
    
    public function eloquentGet($gender)
    {
       
        $users = User::where('gender',$gender)
                ->get();
        $title="todos los usuarios Get";
        return view('query.methods', compact('title','users'));
    }
    
    
     public function eloquentGetCustom()
    {
       
        $users = User::where('gender','f')
                ->get(['id','name','biography']);
        $title="todos los usuarios GetCustom-con array";
        return view('query.methods', compact('title','users'));
    }
    
    
     public function eloquentDelete($id)
    {
       
        $user = User::find($id);
        $user->delete();
        return view('pages.delete');
    }
    
    public function eloquentLists()
            {
         $users = User::orderBy('name', 'ASC')
        ->lists('name', 'id');
        
    return view('query.lists', compact('users'));
             }
   

    
    }
    
//    public function index()
//    {
//        //
//    }
//
//    /**
//     * Show the form for creating a new resource.
//     *
//     * @return \Illuminate\Http\Response
//     */
//    public function create()
//    {
//        //
//    }
//
//    /**
//     * Store a newly created resource in storage.
//     *
//     * @param  \Illuminate\Http\Request  $request
//     * @return \Illuminate\Http\Response
//     */
//    public function store(Request $request)
//    {
//        //
//    }
//
//    /**
//     * Display the specified resource.
//     *
//     * @param  int  $id
//     * @return \Illuminate\Http\Response
//     */
//    public function show($id)
//    {
//        //
//    }
//
//    /**
//     * Show the form for editing the specified resource.
//     *
//     * @param  int  $id
//     * @return \Illuminate\Http\Response
//     */
//    public function edit($id)
//    {
//        //
//    }
//
//    /**
//     * Update the specified resource in storage.
//     *
//     * @param  \Illuminate\Http\Request  $request
//     * @param  int  $id
//     * @return \Illuminate\Http\Response
//     */
//    public function update(Request $request, $id)
//    {
//        //
//    }
//
//    /**
//     * Remove the specified resource from storage.
//     *
//     * @param  int  $id
//     * @return \Illuminate\Http\Response
//     */
//    public function destroy($id)
//    {
//        //
//    }
//}
