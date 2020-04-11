<?php

namespace App\Http\Controllers\manager;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;

use App\Utilities\Server;

class gestionSiteController extends Controller
{
    public function index()
    {
        $domaineExist = Server::ssh('ls /etc/letsencrypt/live');
        $sousDomaineExist = Server::ssh('ls /etc/apache2/sites-available/ | grep -v le-ssl | sed -e \'s/\.conf$//\'');

        $domaine = $this->arrayDomaine($domaineExist);
        array_pop($domaine);
        $sous_domaine = $this->arrayDomaine($sousDomaineExist);

        // ARRAY DOMAINE AND SUBDOMAINE IN SESSION
        Session::put('domaine', $domaine);
        Session::put('sous_domaine', $sous_domaine);

        $sous_domaine = $this->arraySousDomaine($domaine, $sous_domaine);


        return view('manager/gestionsite', ['sous_domaine' => $sous_domaine, 'domaine' => $domaine]);
    }

    public function arrayDomaine($return)
    {
        $array = preg_replace("(\r\n|\n|\r)",'*',$return);
        $array = explode("*", $array);
        return $array;
    }

    // 
    public function arraySousDomaine($domaine, $sous_domaine)
    {
        $sous_domaine_sort = array();

        foreach ($domaine as $ndd)
        {
            $pattern = '/([a-z.-]+' . $ndd . ')/';
            $sous_domaine_preg = preg_grep($pattern, $sous_domaine);

            $sous_domaine_sort = array_merge($sous_domaine_sort, array($ndd => $sous_domaine_preg));
        }

        return $sous_domaine_sort;
    }
}

