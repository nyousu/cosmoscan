<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use App\Cosmoscan;

class UsersController extends Controller
{
    public function index()
    {
        $users = User::all();
      return $users;
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
        $user = new User();
        //phpmyadminのデータを新しく１行分取ってきます宣言
        $user->name = $request->name;
        //->nameは入力フォームのname属性のnameから取ってきます
        $user->age = $request->age;
        $user->address = $request->address;
        $user->skintype = $request->skintype;
        $user->skintrouble = $request->skintrouble;
        $user->buy_place = $request->buy_place;

        $user->save();
        //保存する宣言が必要。削除だとdestry();,更新だとupdate();

        return redirect('/cosmoscan/');
        //送信されました画面。。。（）内はurl(routeのweb.php参照)

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

    //肌情報データページのコントローラー
    public function getSavePage() {

    $saves = Cosmoscan::all(); //指定したテーブル全てを表示
                              //var_dump($cosmoscans);

    return view('cosmoscan.save',['save'=>$saves]);//矢印左側がblade上で表記すると変数を呼び出す
     }
}
