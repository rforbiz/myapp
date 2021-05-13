<?php


namespace App\Http\Controllers;


class FileDownloadController extends Controller
{

    public function index()
    {
        // レスポンス版
        $headers = ['Content-Type' => 'text/plain'];
        $filename = 'test.txt';
        return response()->download(\Storage::path('public/sample.txt'), $filename, $headers);

        // ストレージの中なら直接ダウンロードできる
//  return Storage::download('public/sample.txt', $filename, $headers);
    }
}
