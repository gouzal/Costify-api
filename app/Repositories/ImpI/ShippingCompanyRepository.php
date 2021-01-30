<?php
namespace App\Repositories\ImpI;

use Illuminate\Http\Request;
use App\Repositories\Interfaces\IShippingCompanyRepository;
use App\Models\ShippingCompany;

class ShippingCompanyRepository implements IShippingCompanyRepository
{

    protected ShippingCompany $shippingCompany;

    public function __construct(ShippingCompany $shippingCompany)
    {
        $this->shippingCompany = $shippingCompany;
    }

    public function all(Request $request)
    {
        return $this->shippingCompany->all();
        // return $this->product::with(['product_medias' => function ($query) {
        //     $query->where('featured', true);
        // }])->with("product_variants")->paginate(8);
    }

    public function store(Request $request)
    {
        // TODO: Implement store() method.
    }

    public function update(Request $request, $id)
    {
        // TODO: Implement update() method.
    }

    public function destroy($id)
    {
        // TODO: Implement destroy() method.
    }

    public function show($id)
    {
        // TODO: Implement show() method.
    }
}
