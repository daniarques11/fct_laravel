<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class AgreementController extends Controller
{
    public function store(Request $request)
    {
        request()->validate(
            [
                'companyName' => 'required|min:3|max:100',
                'companyCif' => 'required|min:3|max:15',
                'companyPhone1' => 'required|min:9|max:15',
                'companyPhone2' => 'min:9|max:15',
                'companyLocation' => 'required|min:5|max:100',
                'companyAddress' => 'required|min:5|max:100',
                'companyCp' => 'required|digits:5',
                'companyEmail' => 'required|email|min:5|max:100',
                'companyOwnership' => 'required|in:public,private',
                'companySector' => 'required|in:primary,secondary,tertiary',
                'representantName' => 'required|min:3|max:50',
                'representantNif' => 'required|min:3|max:15',
                'workCenterName' => 'required|min:3|max:100',
                'workCenterWorkersNum' => 'required|in:<10,11-20,21-50,51-100,100>',
                'workCentrePhone1' => 'required|min:9|max:15',
                'workCentrePhone2' => 'min:9|max:15',
                'workCentreLocation' => 'required|min:5|max:100',
                'workCentreAddress' => 'required|min:5|max:100',
                'workCentreCp' => 'required|digits:5',
                'workCentreEmail' => 'required|email|min:5|max:100',
                'agreementType' => 'required|in:full-time,part-time',
                'agreementPosition' => 'required|min:3|max:150'
            ],
            [
                'companyName.required' => "No s'ha introduït un nom",
                'companyCif.required' => "No s'ha introduït un CIF",
                'companyPhone1.required' => "No s'ha introduït un telèfon",
                'companyLocation.required' => "No s'ha introduït una població",
                'companyAddress.required' => "No s'ha introduït una adreça",
                'companyCp.required' => "No s'ha introduït un codi postal",
                'companyEmail.required' => "No s'ha introduït un e-mail",
                'companyOwnership.required' => "No s'ha introduït una titularitat",
                'companySector.required' => "No s'ha introduït un sector",
                'representantName.required' => "No s'ha introduït el nom del representant",
                'representantNif.required' => "No s'ha introduït el NIF del representant",
                'workCenterName.required' => "No s'ha introduït el nom del centre de treball",
                'workCenterWorkersNum.required' => "No s'ha introduït el nombre de treballadors del centre",
                'workCentrePhone1.required' => "No s'ha introduït un telèfon",
                'workCentreLocation.required' => "No s'ha introduït una població",
                'workCentreAddress.required' => "No s'ha introduït una adreça",
                'workCentreCp.required' => "No s'ha introduït un codi postal",
                'workCentreEmail.required' => "No s'ha introduït un e-mail",
                'agreementType.required' => "No s'ha introduït un tipus de jornada",
                'agreementPosition.required' => "No s'ha introduït un lloc de treball"
            ]
        );
        return $request;
    }
}
