<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function battle()
    {
        \Slack::send('slackslackslack!!!!');
        return view('battle');
    }

    public function json(Request $request)
    {
        // dd($request->all());
        return response()->json([
            'player' => [
                'name'  => $request->player??'ななし',
                'lv'    => 30,
                'mp'    => 20,
                'maxHP' => 100,
                'speed' => 100,
                'sprit' => 100,
                'skill' => 'ギラ,ベギラマ,ホイミ,ベホイミ,ラリホー,マホトーン,レミーラ,リレミト,ルーラ,トヘロス',
                'atk' => 100,
                'def' => 100,
            ],
            "monster" => [
                'id' => 1,
                'name' => 'モンスター名',
                'max_hp' => 100,
                'skill' => 'ギラ,ベギラマ,ホイミ,ベホイミ,ラリホー,マホトーン,レミーラ,リレミト,ルーラ,トヘロス',
                'atk' => 1,
                'def' => 1,
                'weaknessType1' => 0, // 0~4
                'weaknessType2' => 1, // 0~4
                'weaknessType3' => 1, // 0~4
            ],
            "weapon" => [
                'atk' => 100,
                'def' => 50,
            ],
            "armor" => [
                'atk' => 100,
                'def' => 50,
            ],
            "shield" => [
                'atk' => 100,
                'def' => 50,
            ],
            "useitem" => [
                "len" => 4,
            ]
        ]);
    }
}
