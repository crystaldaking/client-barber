<?php

namespace App\Http\Controllers;

use App\Models\Program;
use App\Models\Quene;
use App\Models\User;
use Illuminate\Http\Request;

class QueneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*$users = User::whereHas('roles', function ($q){
            $q->where('name','like','%Client%');
        })->get();

        $users = $users->sortByDesc(function ($q){
            return $q->programs->first()->rank;
        });*/

        $user = \Auth::user();
        if ($user->roles->first() == 'Client') {

            $program_date = $user->program_date;
            $current_date = now();

            if ($current_date->gt($program_date)) {
                $basic = Program::where('name', 'like', '%Basic%')->get();
                $user->programs()->sync($basic);
                $user->save();
            }

            $math = ['user_id' => $user->id];

            if (Quene::where($math)->get()->isEmpty()) {
                $quene = new Quene();
                $quene->user()->associate($user);
                $quene->status = 'New';
                $quene->save();
            }
        }

        /* TODO: add filter */
        $quenes = Quene::with('user.programs')->get();
        $quenes = $quenes->sortByDesc(function ($q){
            return $q->first()->rank;
        });
        return view('quene.index',['quenes' => $quenes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
