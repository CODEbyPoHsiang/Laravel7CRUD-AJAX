<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Member;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $member = Member::all();
        return view('index')->with('member', $member);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $member = new Member;
        $member->name = strval($request->name);
        $member->ename = strval($request->ename);
        $member->phone = strval($request->phone);
        $member->email = strval($request->email);
        $member->sex = strval($request->sex);
        $member->city = strval($request->city);
        $member->township = strval($request->township);
        $member->postcode = strval($request->postcode);
        $member->address = strval($request->address);
        $member->notes = strval($request->notes);
        $member->save();
        return response()->json($member);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($member_id)
    {
        $member = Member::find($member_id);
        return response()->json($member);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $member_id)
    {
        $member = Member::find($member_id);
        $member->name = strval($request->name);
        $member->ename = strval($request->ename);
        $member->phone = strval($request->phone);
        $member->email = strval($request->email);
        $member->sex = strval($request->sex);
        $member->city = strval($request->city);
        $member->township = strval($request->township);
        $member->postcode = strval($request->postcode);
        $member->address = strval($request->address);
        $member->notes = strval($request->notes);
        $member->save();
        return response()->json($member);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($member_id)
    {
        $member = Member::destroy($member_id);
        return response()->json($member);
    }
}
