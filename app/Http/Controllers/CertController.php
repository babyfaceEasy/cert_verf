<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Certification as Cert;
use Hash;
class CertController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $certs = Cert::paginate(5);
        return view('cert.index', compact('certs'));
    }

    public function verification($id)
    {
        //this is to verity the user
        try {
            $id = decrypt($id);
        } catch (\DecryptException $e) {
            return 'Not Verified';
        }
        
        $cert = Cert::findOrFail($id);

        $pwd = $cert->matric_no . $cert->class . $cert->year;

        if(Hash::check($pwd, $cert->checker)){
            return 'verified';
        }else{
            return 'Not verified';
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('cert.create');
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
        $this->validate($request, [
            'full_name' => 'required|min:4',
            'matric_no' => 'required|min:4',
            'class' => 'required|min:1',
            'dept' => 'required',
            'year' => 'required|min:4'
        ]);
        //if validation goes thru, get ready to save.
        $input = $request->only('full_name', 'matric_no', 'dept', 'class', 'year');
        $pwd = $input['matric_no'] . $input['class'] . $input['year'];
        $input['checker'] = Hash::make($pwd);

        //store them
        $ret = Cert::create($input);

        if(is_null($ret)){
            return 'error';
        }else{
            return 'success';
        }
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
