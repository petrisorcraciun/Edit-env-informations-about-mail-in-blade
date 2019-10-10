<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class MailSettings extends Controller
{

    public function mail()
    {
        return view('admin.mail');
    }
    
    public function editMailInformations(Request $request)
    {

       
      
        $path = base_path('.env');

        $newValue = array(
            $request->get('MAIL_DRIVER'),
            $request->get('MAIL_HOST'), 
            $request->get('MAIL_PORT'), 
            $request->get('MAIL_USERNAME'),  
            $request->get('MAIL_PASSWORD'),  
            $request->get('MAIL_ENCRYPTION') 
        );

       

        $envMails = array("MAIL_DRIVER", "MAIL_HOST", "MAIL_PORT", "MAIL_USERNAME","MAIL_PASSWORD","MAIL_ENCRYPTION");

        $path_to_file = base_path('.env');

        $file_contents = file_get_contents($path_to_file);
 


        foreach($envMails as $key => $envMail)
        {
            if(is_null(env($envMail))){
                $file_contents = str_replace($envMail . "=" . 'null'  , $envMail . "=" . $newValue[$key] ,$file_contents);
            }
            else{
                
                $file_contents = str_replace(env($envMail), $newValue[$key],$file_contents);
            }
                 
        }
        file_put_contents($path_to_file,$file_contents);

      
      
       
        return view('admin.mail')->with('message', 'Modificarile efectuate au fost salvate cu succes.');
    }
}
