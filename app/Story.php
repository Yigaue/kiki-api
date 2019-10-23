<?php

namespace App;


use Illuminate\Database\Eloquent\Model;


class Story extends Model
{
    protected $table = 'stories';
    protected $fillable = ['title', 'content', 'author','image'];
    protected $hidden = ['created_at', 'updated_at'];
    
   public function user(){
       return $this->hasMany(Story::class);
   }
}
//     $rules = [
//     'title' => ['required'],
//     'content' => ['required'],
//     'author' =>['required'],
//     'user_id' => ['required'],
//     'country_id' => ['required'],
//     'image' => ['required'],
//     ];
   
//      $messages = [
//        'title.required' => 'please enter your title',
//        'content.required' => 'You have not entered any content yet',
//        'author.required' => 'please enter  author',
//        'image.required' => 'Please it is recommended to add an image',
       
//    ];
//         $validator = validator()::make($request->all(), $rules, $messages);
//             if ($validator->fails()) {
//              return response()->json([
//                 'status' => 'error',
//                 'messages' => $validator->messages()->toArray(),
//         ]);
//     }
//     return response()->json([
//         'status'=> 201,
//         'success' => $story,
//     ]);


