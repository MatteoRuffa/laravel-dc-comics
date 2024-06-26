<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Contracts\View\Factory;
use App\Http\Requests\StoreComicRequest;

class ComicController extends Controller
{
    protected $commonData;

    public function __construct(Factory $view)
    {
        $this->commonData = [
            'dccomics' => Config::get('db_comics.dccomics'),
            'navbarFooter' => Config::get('db_comics.navbarFooter'),
            'navigation' => Config::get('db_comics.navigation'),
            'comics' => Comic::all(),
        ];
    }

    public function index()
    {
        return view('comics.index', $this->commonData);
    }

    public function create()
    {
        return view('comics.create', $this->commonData);
    }

    public function store(StoreComicRequest $request)
    {
        $form_data = $request->validated();
        $new_comic = Comic::create($form_data);
        return redirect()->route('comics.index')->with('message', "New comic created");
    }

    public function show(Comic $comic)
    {
        return view('comics.show', array_merge($this->commonData, ['comic' => $comic]));
    }

    public function edit(Comic $comic)
    {
        return view('comics.update', array_merge($this->commonData, ['comic' => $comic]));
    }

    public function update(StoreComicRequest $request, Comic $comic)
    {
        $form_data = $request->validated();
        $comic->update($form_data);

        return redirect()->route('comics.show', ['comic' => $comic->id])->with('success', 'Comic updated successfully');
    }

    public function destroy(Comic $comic)
    {
        $comic->delete();
        return redirect()->route('comics.index')->with('message', "comic id:  {$comic->id} Deleted");
    }
}
