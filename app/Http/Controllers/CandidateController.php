<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CandidateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $sql = 'SELECT c.*, s.statusName as statusN FROM candidates c JOIN status s ON s.statusId = c.statusId';
        $candidates = DB::select($sql);
        return view('candidates',['candidates' => $candidates]);
    }

    public function search()
    {
      $search =$_GET["search"];
      $sql = "SELECT c.*, s.statusName as statusN  FROM candidates c JOIN status s ON s.statusId = c.statusId WHERE name LIKE '%".$search."%' OR surname LIKE '%".$search."%' OR remark LIKE '%".$search."%'";
      $candidates = DB::select($sql);
      return view('candidates',['candidates' => $candidates]);

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
