<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ApplicationContact;

class ApplicationContactController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return ApplicationContact::find($id);
        
    }
}
