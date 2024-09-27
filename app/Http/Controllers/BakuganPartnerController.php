<?php

namespace App\Http\Controllers;

use App\Actions\BakuganPartnerAction;
use App\Http\Requests\BakuganPartnerRequest;
use App\Http\Resources\BakuganResource;
use App\Models\Bakugan;
use JetBrains\PhpStorm\ArrayShape;

class BakuganPartnerController extends Controller
{
    #[ArrayShape(['partner' => Bakugan::class])]
    public function __invoke(BakuganPartnerRequest $request, BakuganPartnerAction $action): array
    {
        $birthday = $request->getBirthday();
        $partner = $action($birthday);

        return [
            'partner' => new BakuganResource($partner),
        ];
    }
}
