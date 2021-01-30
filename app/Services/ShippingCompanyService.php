<?php
namespace App\Services;

use Illuminate\Http\Request;
use App\Models\ShippingCompany;
use App\Repositories\ImpI\ShippingCompanyRepository;
use App\Repositories\Interfaces\IShippingCompanyRepository;
use App\Http\Resources\ShippingCompanyResource;
class ShippingCompanyService {

    protected IShippingCompanyRepository $iShippingCompanyRepository;

    public function __construct(ShippingCompany $shippingCompany)
    {
        $this->iShippingCompanyRepository = new ShippingCompanyRepository($shippingCompany);
    }

    public function all(Request $request)
    {
      //  return ShippingCompanyCollection::collection($this->iShippingCompanyRepository->all($request));
        return  ShippingCompanyResource::collection($this->iShippingCompanyRepository->all($request));
    }

}
