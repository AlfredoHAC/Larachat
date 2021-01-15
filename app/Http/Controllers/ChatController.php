<?php

namespace App\Http\Controllers;

use App\Chat;
use App\User;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all();
        return view('chat.create')->with('users', $users);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $usrFirstId = $request->input('users_1'); 
        $usrSecondId = $request->input('users_2');
        $txtContent = $request->input('txtContent');
    
        $chat = Chat::create();

        $chat->users()->attach($usrFirstId);
        $chat->users()->attach($usrSecondId);

        $chat->messages()->create([
            'sender'  => $usrFirstId,
            'content' => $txtContent,
        ]);
        
        return redirect()->action('ChatController@show',$chat->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $chat = Chat::find($id);
        $users = $chat->users;
        return view('chat.show')->with([
            'chat' => $chat,
            'messages' => $chat->messages,
            'users' => $users,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
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
        $sender = $request->input('selSender');
        $content = $request->input('txtContent');
        $chat = Chat::find($id);

        $chat->messages()->create([
            'sender' => $sender,
            'content' => $content,
        ]);

        return redirect()->action('ChatController@show', $chat->id);
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
