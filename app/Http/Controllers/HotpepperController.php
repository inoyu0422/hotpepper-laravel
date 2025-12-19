<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class HotpepperController extends Controller
{
    // ーーここから追記ーー
    // HTTPリクエストを送るURL
    private const REQUEST_URL = 'http://webservice.recruit.co.jp/hotpepper/gourmet/v1/';

    // APIキー
    private $api_key;

    public function index(Request $request)
        {
            $restaurants = [
                'results_returned' => 0,
                'shop' => [],
            ];

            if ($request->has('search')) {
                $client = new Client();

                $options = [
                    'query' => [
                        'key'         => config('hotpepper.api_key'),
                        'large_area'  => $request->large_area,
                        'middle_area' => $request->middle_area,
                        'genre'       => $request->genre,
                        'budget'      => $request->budget,
                        'order'       => $request->order,
                        'count'       => 10,
                        'format'      => 'json',
                    ],
                ];

                $response = $client->get(self::REQUEST_URL, $options);
                $restaurants = json_decode($response->getBody(), true)['results'];
            }

            return view('index', compact('restaurants'));
        }

    // public function index()
    // {
    //     // インスタンス生成
    //     $client = new Client();

    //     // HTTPリクエストメソッド
    //     $method = 'GET';

    //     // APIキーを取得
    //     $this->api_key = config('hotpepper.api_key');

    //     // APIキーや検索ワードなどの設定を記述
    //     $options = [
    //         'query' => [
    //             'key' => config('hotpepper.api_key'),
    //             'keyword' => '新宿',
    //             'count' => 10,
    //             'format' => 'json',
    //         ],
    //     ];

    //     // HTTPリクエストを送信
    //     $response = $client->request($method, self::REQUEST_URL, $options);

    //     // 'format' => 'json'としたのでJSON形式でデータが返ってくるので、連想配列型のオブジェクトに変換
    //     $restaurants = json_decode($response->getBody(), true)['results'];

    //     // index.blade.phpを表示する
    //     return view('index', compact('restaurants'));
    // }
    // ーーここまで追記ーー
}
