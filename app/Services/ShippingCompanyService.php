<?php
namespace App\Services;

use Illuminate\Http\Request;
use App\Models\ShippingCompany;
use App\Repositories\ImpI\ShippingCompanyRepository;
use App\Repositories\Interfaces\IShippingCompanyRepository;

class ShippingCompanyService {

    protected IShippingCompanyRepository $iShippingCompanyRepository;

    public function __construct(ShippingCompany $shippingCompany)
    {
        $this->iShippingCompanyRepository = new ShippingCompanyRepository($shippingCompany);
    }

    public function all(Request $request)
    {
        return $this->iShippingCompanyRepository->all($request);
    }

}
