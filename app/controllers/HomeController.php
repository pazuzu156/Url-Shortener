<?php

namespace App\Controllers;

use App\Models\Url;
use Hash;
use Input;
use Scara\Http\Controller;
use Scara\Http\Request;
use Validator;

class HomeController extends Controller
{
    /**
     * The method loaded from the default home page.
     *
     * @return void
     */
    public function getIndex()
    {
        $this->render('home.index');
    }

    public function postAddUrl(Request $r)
    {
        $valid = Validator::make(Input::all(), [
            'url' => 'required|url',
        ]);

        if ($valid->isValid()) {
            $hash = $this->check($r->url);

            $url = Url::init()->create([
                'urlid' => $hash,
                'url'   => $r->url,
            ]);

            if ($url) {
                $this->flash('smsg', 'Success! Check the box below for the new URL!')->flash('shorturl', 'https://url.kalebklein.com/u/'.$hash)->redirect('/');
            } else {
                $this->flash('emsg', 'There was an issue adding your URL to the database, please try again')->withInput()->redirect('/');
            }
        } else {
            $this->flash('emsg', 'Invalid form submission. Please review the errors on the form')->errors($valid)->withInput()->redirect('/');
        }
    }

    public function getUrl(Request $r)
    {
        $urlcheck = Url::init()->where('urlid', '=', $r->urlid);

        if ($urlcheck->count() > 0) {
            $url = $urlcheck->first();

            $this->redirect($url->url);
        } else {
            $this->flash('emsg', 'This url does not exist! Url ID: ' . $r->urlid)->redirect('/');
        }
    }

    private function check($url)
    {
        $hash = $this->makehash($url);
        $urlcheck = Url::init()->where('urlid', '=', $hash);

        if($urlcheck->count() > 0)
            $this->check($url);

        return $hash;
    }

    private function makehash($url)
    {
        return strtoupper(substr(hash('sha256', Hash::make($url . time())), 3, 6));
    }
}
