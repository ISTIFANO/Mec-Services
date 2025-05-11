<?php

namespace App\Services\Implimentation;

use App\Enums\Image;
use App\Models\Contract;
use App\Services\IContract;
use App\Repository\Interfaces\ContracInterface;

class ContractService implements IContract
{
    private ContracInterface $contract_repositery;

    public function __construct( ContracInterface $contract_repositery)
    {
        $this->contract_repositery = $contract_repositery;
    }
    public function create($service)
    {
        $client = $service->user;
        $mechanicien =$service->mechanicien;

        $contract = new Contract();
        $contract->titre = $service->titre ;
        $contract->logo = Image::LOGO;
        $contract->service()->associate($service);
        $contract->mechanicien()->associate($mechanicien);
        $contract->client()->associate($client);
        return $this->contract_repositery->create($contract);
    }
    public function show()
    {
        return $this->contract_repositery->show();
    }

    public function find($id)
    {
        return $this->contract_repositery->findByID($id);
    }


    public function generatePDF($data)
    {
        $contract = $this->contract_repositery->show_pdf_Contract($data);
        $pdf = app('dompdf.wrapper');
        $pdf->loadView('Client.PDF.contract', [
            'title' => 'AlMechanicien Contract',
            'mechanicien' => $contract->service->mechanicien->user->firstname,
            'client' => $contract->service->user->firstname,
            'service_titre' => $contract->service->titre,
            'vehucule_image' => $contract->service->offre->vehicule->image,
            'description' => $contract->service->offre->description,
            'rule' => " text",
            'logo' => Image::LOGO,
            'tampon' => asset("/images/img/tam'pon.png"),
            'footer' => 'by <a href="AlMechanicien">AlMechanicien.ma</a>'
        ]);

        return $pdf;
    }
    public function generatePdfContract($data)
    {
        $contract = $this->contract_repositery->show_pdf_Contract($data);
        $pdf = app('dompdf.wrapper');
        $pdf->loadView('Client.PDF.contract', [
            'title' => 'AlMechanicien Contract',
            'mechanicien' => $contract->service->mechanicien->user->firstname,
            'client' => $contract->service->user->firstname,
            'service_titre' => $contract->service->titre,
            'vehucule_image' => $contract->service->offre->vehicule->image,
            'description' => $contract->service->offre->description,
            'rule' => " text",
            'logo' => Image::LOGO,
            'tampon' => asset("/images/img/tam'pon.png"),
            'footer' => 'by <a href="AlMechanicien">AlMechanicien.ma</a>'
        ]);

        return $pdf;
    }
}
