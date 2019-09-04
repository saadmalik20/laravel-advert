<?php

namespace Adumskis\LaravelAdvert;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Adumskis\LaravelAdvert\Model\Advert;

use App\Http\Requests;

class AdvertManagerController extends Controller
{

    /**
     * Simple controller method to add clicks count
     *
     *
     * @param $advert_id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function index($advert_id){
        $advert = Advert::findOrFail($advert_id);
        $advert->plusClicks();

        return redirect($advert->url);
    }
}
