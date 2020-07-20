<?php

namespace App\Http\Controllers;

use App\Certificate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CertificateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        Certificate::create([
            "certificate" => $request->certificate,
            "issue_by" => $request->issueby,
            "year" => $request->certificate_year,
            "month" => $request->cerfificate_month,
            "lifetime" => $request->lifetime,
            "user_id" => Auth::id()
        ]);
        return redirect('seeker/profile');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Certificate  $certificate
     * @return \Illuminate\Http\Response
     */
    public function show(Certificate $certificate)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Certificate  $certificate
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $certificate = Certificate::findOrFail($request->id);
        return response()->json(["data" => $certificate]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Certificate  $certificate
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $certificate = Certificate::find($request->id);
        $certificate->certificate = $request->certificate;
        $certificate->issue_by = $request->issueby;
        $certificate->year = $request->certificate_year;
        $certificate->month = $request->cerfificate_month;
        $certificate->lifetime = $request->lifetime;
        $certificate->user_id = Auth::id();
        $certificate->save();
        return redirect('seeker/profile');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Certificate  $certificate
     * @return \Illuminate\Http\Response
     */
    public function destroy(Certificate $certificate)
    {
        //
    }
}
