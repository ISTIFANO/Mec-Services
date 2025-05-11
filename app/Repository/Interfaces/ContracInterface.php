<?php  


namespace App\Repository\Interfaces;


interface ContracInterface{









    public function show();
    public function create($date);
    public function show_pdf_Contract($date);

    
    public function update($date);
    public function delete($id);
    public function findByName($name);
    public function findByID($id);
    






}













?>