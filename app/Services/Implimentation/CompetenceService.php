<?php
namespace App\Services\Implimentation;


use App\Enums\Image;
use App\Models\Competence;
use App\Services\ICompetence;
use App\Repository\Interfaces\CompetenceInterface;

class CompetenceService implements ICompetence
{
    private CompetenceInterface $Competence_repositerie;

    public function __construct(CompetenceInterface $Competence_repositerie)
    {
        $this->Competence_repositerie = $Competence_repositerie;
    }

    public function create($data)
    {
        $CompetenceModel = new Competence();
        $CompetenceModel->name = $data['name'];
        if (isset($data['image']) && $data['image']->isValid()) {

            $path = $data['image']->store('images', 'public');
            $CompetenceModel->icon = $path;
        } else {
            $CompetenceModel->icon = Image::ACTIVE;
        }
      
        
        return $this->Competence_repositerie->create($CompetenceModel);
    }

    public function update($data)
    {

        return $this->Competence_repositerie->update($data); 
    }

    public function delete($id)
    {
        return $this->Competence_repositerie->delete($id); 
    }
    public function show()
    {
        return $this->Competence_repositerie->show();
    }
}
