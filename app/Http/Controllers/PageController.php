<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;
use Inertia\Inertia; 
use Redirect;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = Page::all();

        //return Inertia::render('Pages/EditPageForm', ['data' => $data]);

        return Inertia::render('Page/Pages',['data' => Page::all()->first()]);
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
     * @param  \App\Models\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $page = Page::all()->first();

        return view('home', compact('page'));
        
    }

    public function showContact()
    {
        $page = Page::all()->first();

        return view('contact-us', compact('page'));
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function edit(Page $page)
    {
        //
        return Inertia::render('Page/Edit', $page);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Page $page)
    {
       
        Page::updateOrInsert(
            ['id' => $request->id],
            ['title' => $request->title, 'content' => $request->content]
        );
  
        return Redirect::route('pages.index');
 
    }


        /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function updateMeta(Request $request, Page $page)
    {
       
        Page::where( ['id' => $request->id])->update(            
            ['meta_title_1' => $request->meta_title_1, 'meta_description_1' => $request->meta_description_1,
            'meta_title_2' => $request->meta_title_2, 'meta_description_2' => $request->meta_description_2,
            'no_index_1' => $request->no_index_1, 'no_index_2' => $request->no_index_2,
            'email_1' => $request->email_1,
            ]
        );
  
        return Redirect::route('pages.index');
 
    }


            /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function updateSocial(Request $request, Page $page)
    {
       
        Page::where( ['id' => $request->id])->update(            
            ['ga' => $request->ga, 'fbpixel' => $request->fbpixel,
       
            ]
        );
  
        return Redirect::route('pages.index');
 
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function destroy(Page $page)
    {
        //
    }
}
