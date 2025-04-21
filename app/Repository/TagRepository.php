<?php 

namespace App\Repository;

use App\Models\Tag;
use App\Repository\Interfaces\TagInterface;


class TagRepository implements TagInterface{




    public function show()
    {
        $tag = Tag::all();

        return $tag;
    }
    public function create(Tag $data){
        $tag = $data->save();
    
    return $tag;
    }

    public function delete($id)
    {
       Tag::where('id', '=', $id)->delete();

        return true;
    }
    public function update($data)
    {
        $tag =  Tag::where('id', '=', $data['id'])->first();

        
       $tag->update($data);
       
        return $tag;
    }
    public function  findByNames($name){

        $tag =  Tag::where('name', '=', $name)->first();

        return $tag;
    }

 public function  findByOne($id){
        
        $tag =  Tag::where('id', '=', $id)->first();

        return $tag;
    }



    
}




















?>