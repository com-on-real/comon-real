<?php

namespace App\Http\Controllers\manager;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;

class formCreateSite extends Controller
{
    
    public function sendForm(Request $request)
    {
        $ndd = $request->input('ndd');

        $domaine =  Session::get('domaine');
        $sous_domaine =  Session::get('sous_domaine');
        
        // CREATE A NEW SITE
        $req = $this->CheckExistNdd($ndd, $domaine);
        if ($req == 'noexist')
            $this->ssh('create_site '.$ndd.'');

        // CREATE 2 ARRAY WITH UPDATE SUBDOMAINE 
        $i = 0;
        $ext_sub_domaine = '';
        $new_sub = array();
        $delete_sub = array();

        while(isset($ext_sub_domaine))
        {
            $ext_sub_domaine = $request->input('nameSubd'.$i.'');
            $sub_domaine = $ext_sub_domaine .'.'. $ndd;
            
            $exist = array_search($sub_domaine, $sous_domaine);

            if(empty($exist))
                array_push($new_sub, $sub_domaine);
            else
                array_push($delete_sub, $sub_domaine);
    
            $i++;
        }
        array_pop($new_sub);

        // UPDATE SUBDOMAINE
        $this->updateSubDomaine($new_sub, 'create');
        $this->updateSubDomaine($delete_sub, 'delete');

        header('Location: /manager');
    }

    public function updateSubDomaine($ArraySub, $action)
    {
        foreach($ArraySub as $sub)
        {
            if ($action = 'create')
                $this->app('App\Http\Controllers\sshController')->ssh('create_sub '.$sub.'');
            else
                $this->app('App\Http\Controllers\sshController')->ssh('delete_sub '.$sub.'');
        }
    }

    public function CheckExistNdd($ndd, $domaine)
    {
        $exist = array_search($ndd, $domaine);
        if (!empty($exist))
            return 'exist';
        else
            return 'noexist';
    }
}
