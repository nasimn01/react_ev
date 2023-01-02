<?php

namespace App\Http\Controllers;

use App\Models\HeaderSection;
use Illuminate\Http\Request;
use App\Http\Traits\ResponseTrait;
use App\Http\Traits\ImageHandleTraits;
use Exception;

class HeaderSectionController extends Controller
{
    use ResponseTrait,ImageHandleTraits;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $header = HeaderSection::all();
        return view('Header.index',compact('header'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\HeaderSection  $headerSection
     * @return \Illuminate\Http\Response
     */
    public function show(HeaderSection $headerSection)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HeaderSection  $headerSection
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $header=HeaderSection::findOrFail(encryptor('decrypt',$id));
        return view('Header.edit',compact('header'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\HeaderSection  $headerSection
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       
        try{
            $cat= HeaderSection::findOrFail(encryptor('decrypt',$id));
            $cat->menu_1=$request->menu_1;
            $cat->menu_2=$request->menu_2;
            $cat->menu_3=$request->menu_3;
            $cat->menu_4=$request->menu_4;
            $cat->menu_5=$request->menu_5;
            $cat->title=$request->title;
            $cat->short_text=$request->short_text;
            $path='logo/logo/'.company()['company_id'];
            if($request->has('logo') && $request->logo)
                if($this->deleteImage($cat->logo,$path))
                    $cat->logo=$this->resizeImage($request->logo,$path,true,200,200,false);
                
            if($cat->save())
                return redirect()->route(currentUser().'.header.index')->with($this->resMessageHtml(true,null,'Successfully updated'));
            else
                return redirect()->back()->withInput()->with($this->resMessageHtml(false,'error','Please try again'));
        }catch(Exception $e){
            //dd($e);
            return redirect()->back()->withInput()->with($this->resMessageHtml(false,'error','Please try again'));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HeaderSection  $headerSection
     * @return \Illuminate\Http\Response
     */
    public function destroy(HeaderSection $headerSection)
    {
        //
    }
}
