<?php

namespace App\Http\Controllers\FrontEnd\Site;

use App\Http\Controllers\Controller;
use App\Models\Site;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('front-end.site.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = [
            'company_id' => $request->user()->id,
            'name' => $request->name,
            'address' => $request->address,
            'postal_code' => $request->postalCode,
            'city' => $request->city,
            'start_date' => $request->startDate,
            'finish_date' => $request->finishDate,
            'longitude' => $request->longitude,
            'latitude' => $request->latitude,
        ];


        try {
            $exists = Site::where('name', $request->name)
                ->where('company_id', $request->user()->id)
                ->exists();

            if ($exists) {
                $response = array('status' => 'error', 'message' => 'Site Already exists');
                return response()->json($response, 403);
            }

            $site = new Site();
            $site->company_id = $request->user()->id;
            $site->name = $request->name;
            $site->address = $request->address;
            $site->postal_code = $request->postalCode;
            $site->city = $request->city;
            $site->start_date = $request->startDate;
            $site->finish_date = $request->finishDate;
            $site->longitude = $request->longitude;
            $site->latitude = $request->latitude;
            $site->save();
            $response = array('status' => 'success', 'message' => 'Data Inserted Successful');
            return response()->json($response, 200);
        }catch (\Exception $exception){

            $response = array('status' => 'error', 'message' => $exception->getMessage());
        }

        return response()->json($response, 403);
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
