<?php

namespace App\Http\Controllers;

use App\Models\Books;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $books = Books::all();
        if ($request->headers->get('Accept') == 'application/xml'){
            $xml = new \SimpleXMLElement('<books />');
            foreach ($books as $value) {
                $item = $xml->addChild('book');
                $item->addChild('id', $value->id);
                $item->addChild('isbn', $value->isbn);
                $item->addChild('title', $value->title);
                $item->addChild('author', $value->author);
                $item->addChild('created_at', $value->created_at);
                $item->addChild('updated_at', $value->updated_at);
            }
            return $xml->asXML();
        }
        else return response()->json($book);

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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
