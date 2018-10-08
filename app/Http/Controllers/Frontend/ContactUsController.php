<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Redirect;
use App\Models\Contact;
use App\Http\Requests\Frontend\ContactStoreRequest;

class ContactUsController extends FrontendController
{
    protected  $contact;

    public function __construct(Contact $contact){
        $this->contact = $contact;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $route = URL::route('frontend.contact-us.store');
        return view('pages.contact-us.index', compact('route'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ContactStoreRequest $request)
    {
        $year = array('activity_year'=> date('Y'));
        $basket = $request->except('_token');
        $basket = $basket + $year;

        $resolveImoji = $this->resolveImoji($basket);

        $create = $this->contact->create($resolveImoji);

        if($create){
            return Redirect::route('frontend.contact-us.index')->with('success', '感謝您的建議，我們已經收到您的來信，會儘快的回覆你。');
        }else{
            return Redirect::route('frontend.contact-us.index')->with('error', '抱歉，您的建議尚未送出，請重新嘗試！');
        }

    }


    function filter_Emoji($str)
    {
        $str = preg_replace_callback(    //執行一個正則表達式搜索並且使用一個回調進行替換
            '/./u',
            function (array $match) {
                return strlen($match[0]) >= 4 ? '' : $match[0];
            },
            $str
        );

        return $str;
    }


    private function resolveImoji($basket){

            $check_imoji_name = $this->filter_Emoji($basket['name']);
            $check_imoji_subject = $this->filter_Emoji($basket['subject']);
            $check_imoji_content = $this->filter_Emoji($basket['content']);
            $replace = array(
                'name' => $check_imoji_name,
                'subject' => $check_imoji_subject,
                'content' => $check_imoji_content
            );

        $basket = array_replace($basket, $replace);

        return $basket;

    }
}
