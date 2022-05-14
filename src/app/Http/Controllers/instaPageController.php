<?php

namespace App\Http\Controllers;

use App\Http\Requests\instaPageRequest;
use App\Server\Instagram\Page\instaPageService;


class instaPageController extends Controller
{
    public function __construct()
    {
        $this->InstaPageService = new instaPageService();
    }

    public function all(instaPageRequest $request)
    {
        try
        {
            $resposta['success'] = true;
            $resposta['data'] =$this->InstaPageService->requestPage($request->url,  getenv('SESSIONIDINSTAGRAM',false) );
            $resposta['total'] = count($resposta['data']);
            return response()->json($resposta, 200);
        }
        catch (\Exception $e)
        {
            return response()->json(['success'=>false,'error' => 'Erro ao buscar página'], 500);
        }
        
    }

    public function limit($limit, instaPageRequest $request)
    {
        try
        {
            $resposta['success'] = true;
            $resposta['data'] = $this->InstaPageService->requestPage($request->url, getenv('SESSIONIDINSTAGRAM',false) , $limit);
            $resposta['total'] = count($resposta['data']);
            return response()->json($resposta, 200);
        }catch(\Exception $e){
            return response()->json(['success'=>false,'error' => 'Erro ao buscar página'], 500);
        }
    }
}
