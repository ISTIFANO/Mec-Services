<?php
namespace App\Services\Implimentation;

use App\Models\Tag;
use App\Repository\Interfaces\TagInterface;
use App\Services\ITag;




class TagService implements ITag{

    protected TagInterface $tag_repositery ;
    public function  __construct( TagInterface $tag_repositery )
    {
        $this->tag_repositery = $tag_repositery;
    }

 

    public function create($data)
    {
        $tag = new Tag();
        $tag->name = $data['name'];
      
        return $this->tag_repositery->create($tag);
    }

    public function update($data)
    {

        return $this->tag_repositery->update($data); 
    }

    public function delete($id)
    {
        return $this->tag_repositery->delete($id); 
    }
    public function show()
    {
        return $this->tag_repositery->show();
    }


   
}
