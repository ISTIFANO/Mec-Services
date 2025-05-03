<?php 
namespace App\Repository\Interfaces;

interface MechanicInterface
{
    public function getAll();

    public function find(int $id);

    public function create(array $data);

    public function update(int $id, array $data);

    public function delete(int $id);
    public function getMechanicien($data);

    public function validate($data);
}
?>
