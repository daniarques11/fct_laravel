<?php

namespace App\Http\Controllers;

use App\Models\Agreement;
use App\Models\Company;
use App\Models\Person;
use App\Models\WorkingCenter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AgreementController extends Controller
{
    public function store(Request $request)
    {
        request()->validate(
            [
                'companyName' => 'required|min:3|max:100',
                'companyCif' => 'required|min:3|max:15',
                'companyPhone1' => 'required|min:9|max:15',
                'companyPhone2' => 'max:15',
                'companyLocation' => 'required|min:5|max:100',
                'companyAddress' => 'required|min:5|max:100',
                'companyCp' => 'required|digits:5',
                'companyEmail' => 'required|email|min:5|max:100',
                'companyOwnership' => 'required|in:public,private',
                'companySector' => 'required|in:primary,secondary,tertiary',
                'companyMainActivity' => 'required|min:3|max:100',
                'representantName' => 'required|min:3|max:50',
                'representantNif' => 'required|min:3|max:15',
                'workCenterName' => 'required|min:3|max:100',
                'workCenterWorkersNum' => 'required|in:<10,11-20,21-50,51-100,100>',
                'workCentrePhone1' => 'required|min:9|max:15',
                'workCentrePhone2' => 'max:15',
                'workCentreLocation' => 'required|min:5|max:100',
                'workCentreAddress' => 'required|min:5|max:100',
                'workCentreCp' => 'required|digits:5',
                'workCentreEmail' => 'required|email|min:5|max:100',
                'agreementType' => 'required|in:full-time,part-time',
                'agreementSchedule' => 'required',
                'agreementPosition' => 'required|min:3|max:150',
                'agreementCoordinatorName' => 'required|min:3|max:50',
                'agreementCoordinatorNif' => 'required|min:3|max:15',
                'agreementTutorName' => 'required|min:3|max:50',
                'agreementTutorNif' => 'required|min:3|max:15',
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
                'companyMainActivity.required' => "No s'ha introduït una activitat principal",
                'representantName.required' => "No s'ha introduït el nom del representant",
                'representantNif.required' => "No s'ha introduït el NIF del representant",
                'workCenterName.required' => "No s'ha introduït un nom del centre de treball",
                'workCentrePhone1.required' => "No s'ha introduït un telèfon",
                'workCentreLocation.required' => "No s'ha introduït una població",
                'workCentreAddress.required' => "No s'ha introduït una adreça",
                'workCentreCp.required' => "No s'ha introduït un codi postal",
                'workCentreEmail.required' => "No s'ha introduït un e-mail",
                'agreementType.required' => "No s'ha introduït un tipus de jornada",
                'agreementSchedule.required' => "No s'ha introduït un tipus de jornada",
                'agreementPosition.required' => "No s'ha introduït un lloc de treball",
                'agreementCoordinatorName.required' => "No s'ha introduït el nom del coordinador",
                'agreementCoordinatorNif.required' => "No s'ha introduït el NIF del coordinador",
                'agreementTutorName.required' => "No s'ha introduït el nom del tutor",
                'agreementTutorNif.required' => "No s'ha introduït el NIF del tutor",
            ]
        );
        //TODO: Almacenar estado de los save (si alguno da false, petar)
        $companyRepresentant = new Person();
        $companyRepresentant->NIF = $request['representantNif'];
        $companyRepresentant->name = $request['representantName'];
        $companyRepresentant->role = 'Company representant';
        $companyRepresentant->save();

        $fctCoordinator = new Person();
        $fctCoordinator->NIF = $request['agreementCoordinatorNif'];
        $fctCoordinator->name = $request['agreementCoordinatorName'];
        $fctCoordinator->role = 'FCT Coordinator';
        $fctCoordinator->save();

        $tutor = new Person();
        $tutor->NIF = $request['agreementTutorNif'];
        $tutor->name = $request['agreementTutorName'];
        $tutor->role = 'Company tutor';
        $tutor->save();

        $company = new Company();
        $company->CIF = $request['companyCif'];
        $company->name = $request['companyName'];
        $company->address = $request['companyAddress'];
        $company->town = $request['companyLocation'];
        $company->phone_number_1 = $request['companyPhone1'];
        $company->phone_number_2 = $request['companyPhone2'];
        $company->email = $request['companyEmail'];
        $company->production_sector = $request['companySector'];
        $company->main_activity = $request['companyMainActivity'];
        $company->ownership = $request['companyOwnership'];
        $company->representant_NIF = $companyRepresentant->NIF;
        $company->save();

        $workingCenter = new WorkingCenter();
        $workingCenter->name = $request['workCenterName'];
        $workingCenter->company_CIF = $company->CIF;
        $workingCenter->address = $request['workCentreAddress'];
        $workingCenter->town = $request['workCentreLocation'];
        $workingCenter->phone_number_1 = $request['workCentrePhone1'];
        $workingCenter->phone_number_2 = $request['workCentrePhone2'];
        $workingCenter->email = $request['workCentreEmail'];
        $workingCenter->workers_number = $request['workCenterWorkersNum'];
        $workingCenter->save();
        //Fetch the id that has been created for this working center
        $savedWorkingCenterId = DB::table('working_center')
            ->where('name', $workingCenter->name)
            ->where('company_CIF', $workingCenter->company_CIF)
            ->where('address', $workingCenter->address)
            ->where('town', $workingCenter->town)
            ->value('id');


        $agreement = new Agreement();
        $agreement->working_center_id = $savedWorkingCenterId;
        $agreement->FCT_coordinator_NIF = $fctCoordinator->NIF;
        $agreement->company_tutor_NIF = $tutor->NIF;
        $agreement->day_work_type = $request['agreementType'];
        $agreement->schedule = $request['agreementSchedule'];
        $agreement->save();

        return $request;
    }
}
