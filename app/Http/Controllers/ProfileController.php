<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        /**
         * プロフィール登録フォームの表示
         *
         * @return Response
         */
        return view('/profile/index');
    }
     /**
     * プロフィールの保存
     *
     * @param ProfileRequest $request
     * @return Response
     */
    public function store(ProfileRequest $request)
    {
        $request->photo->store('public/profile_images');
        return redirect('/profile/index')->with('success', '新しいプロフィールを登録しました');
    }
}
