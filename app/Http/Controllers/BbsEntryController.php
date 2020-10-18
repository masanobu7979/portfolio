<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BbsEntry;
use Validator;

class BbsEntryController extends Controller
{
    function index(){
		//@TODO 投稿一覧画面を表示
		$item_list = BbsEntry::orderBy("id", "desc")->paginate(5);
		return view("bbs_entry_list", [
			"item_list" => $item_list
		]);
	}
	function create(Request $request){
		$input = $request->only('author', 'title', 'body');
		
		$validator = Validator::make($input, [
			'author' => 'required|string|max:30',
			'title' => 'required|string|max:30',
			'body' => 'required|string|max:100'
			
			]);
			//バリデーション失敗
		if($validator->fails()){
			return redirect('/bbs')
       		->withErrors($validator);
		}
		//バリデーション成功
		$entry = new BbsEntry();
		$entry->author = $input["author"];
		$entry->title = $input["title"];
		$entry->body = $input["body"];
		$entry->save();

	return redirect('/bbs');
	}
}
