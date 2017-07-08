<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Widget;

class WidgetsController extends Controller
{
    public function __construct() 
    {
        $this->middleware('admin')->except('show');
    }

    public function index() 
    {
        $widgets = Widget::get();
        return view('widgets.index', compact('widgets'));
    }

    public function create()
    {
    	return view('widgets.create');
    }

    public function store()
    {
    	$this->validate(request(), [
            'title' => 'required',
            'body' => 'required'
            ]);
    	$widget = new Widget;
    	
        auth()->user()->addWidget(new Widget(request(['title', 'body'])));

    	return redirect('/widgets/'.$widget->id);
    }

    public function show(Widget $widget) 
    {
        return view('widgets.show', compact('widget'));
    }

    public function edit(Widget $widget)
    {
        return view('widgets.edit', compact('widget'));
    }

    public function update(Widget $widget)
    {
        if ($widget->title != request()->title) {
            $this->validate(request(), [
                    'title' => 'required'
                ]);
            $widget->title = request()->title;
        }

        if ($widget->body != request()->body) {
            $this->validate(request(), [
                    'body' => 'required'
                ]);
            $widget->body = request()->body;
            
        }
        $widget->save();
        return back();
    }

    public function destroy(Widget $widget)
    {
        $widget->destroy($widget->id);
        return redirect('/widgets');
    }
}
