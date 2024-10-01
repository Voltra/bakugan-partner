<?php

namespace App\Http\Controllers\Web;

use App\Actions\BakuganPartnerAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\BakuganPartnerRequest;
use App\Http\Resources\BakuganResource;
use Illuminate\Contracts\Support\Responsable;
use Spatie\RouteAttributes\Attributes\Get;

class BakuganPartnerController extends Controller
{
    #[Get('/api/bakugan-partner')]
    public function __invoke(BakuganPartnerRequest $request, BakuganPartnerAction $action): Responsable
    {
        $birthday = $request->getBirthday();
        $partner = $action($birthday);

        return new BakuganResource($partner);
    }
}
