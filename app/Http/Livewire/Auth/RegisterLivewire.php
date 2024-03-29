<?php

namespace App\Http\Livewire\Auth;

use App\Http\Livewire\BaseLivewireComponent;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Vehicle;
use App\Models\Vendor;
use App\Models\VendorType;
use App\Traits\VehicleTrait;
use Exception;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Propaganistas\LaravelPhone\PhoneNumber;


class RegisterLivewire extends BaseLivewireComponent
{

    use VehicleTrait;

    public $vendor_name;
    public $vendor_email;
    public $vendor_phone;
    public $vendorTypes;
    public $vendor_type_id;

    public $name;
    public $phone;
    public $email;
    public $referalCode;
    public $password;

    public $agreedDriver;
    public $agreedVendor;

    public $driverDocuments;
    public $vendorDocuments;

    public $driverTypes = ['regular', 'taxi'];
    public $driverType = 'regular';
    public $vehicleRegNo;
    public $vehicleColor;
    public $vehicleType;
    public $vehicleMake;
    public $vehicleModel;
    public $vehicleMakes = [];
    public $vehicleModels = [];


    public function getListeners()
    {
        return $this->listeners + [
            'driverDocumentsUploaded' => 'driverDocumentsUploaded',
            'vendorDocumentsUploaded' => 'vendorDocumentsUploaded',
        ];
    }

    public function driverDocumentsUploaded($documents)
    {
        $this->driverDocuments = $documents;
    }

    public function vendorDocumentsUploaded($documents)
    {
        $this->vendorDocuments = $documents;
    }

    public function driverSignUp()
    {


        if ($this->driverType != "taxi") {
            $this->validate(
                [
                    "agreedDriver" => "accepted",
                    "name" => "required",
                    "email" => "required|email|unique:users",
                    "phone" => "required|phone:" . setting('countryCode', "GH") . "|unique:users",
                    "password" => "required|string|min:6",
                    "driverDocuments" => "required",
                ]
            );
        } else {

            //

            $this->validate(
                [
                    "agreedDriver" => "accepted",
                    "name" => "required",
                    "email" => "required|email|unique:users",
                    "phone" => "required|phone:" . setting('countryCode', "GH") . "|unique:users",
                    "password" => "required|string|min:6",
                    "driverDocuments" => "required",
                    "car_make_id" => "required",
                    "car_model_id" => "required",
                    "vehicle_type_id" => "required",
                    "reg_no" => "required",
                    "color" => "required",
                ]
            );
        }

        //
        try {

            //
            $phone = PhoneNumber::make($this->phone);
            //
            $user = User::where('phone', $phone)->first();
            if (!empty($user)) {
                $this->showErrorAlert(__("Account with phone already exists"), 100000);
                return;
            }


            DB::beginTransaction();
            //
            $user = new User();
            $user->name = $this->name;
            $user->email = $this->email;
            $user->phone = $phone;
            $user->creator_id = Auth::id();
            $user->commission = 0.00;
            $user->password = Hash::make($this->password);
            $user->is_active = false;
            $user->save();
            //assign role
            $user->assignRole('driver');

            //taxi section 
            if ($this->driverType == "taxi") {
                $vehicle = new Vehicle();
                $vehicle->car_model_id = $this->car_model_id;
                $vehicle->driver_id = $user->id;
                $vehicle->vehicle_type_id = $this->vehicle_type_id ?? $this->vehicleTypes->first()->id;
                $vehicle->reg_no = $this->reg_no;
                $vehicle->color = $this->color;
                $vehicle->is_active = false;
                $vehicle->save();

                if ($this->driverDocuments) {
                    $vehicle->clearMediaCollection();
                    foreach ($this->driverDocuments as $driverDocument) {
                        $vehicle->addMedia($driverDocument)->toMediaCollection();
                    }
                    $this->driverDocuments = null;
                }
            } else {

                if ($this->driverDocuments) {

                    $user->clearMediaCollection("documents");
                    foreach ($this->driverDocuments as $driverDocument) {
                        $user->addMedia($driverDocument)->toMediaCollection("documents");
                    }
                    $this->driverDocuments = null;
                }
            }

            //refer system is enabled
            $enableReferSystem = (bool) setting('enableReferSystem', "0");
            $referRewardAmount = (float) setting('referRewardAmount', "0");
            if ($enableReferSystem && !empty($this->referalCode)) {
                //
                $referringUser = User::where('code', $this->referalCode)->first();
                if (!empty($referringUser)) {
                    $referringUser->topupWallet($referRewardAmount);
                } else {
                    $this->showErrorAlert(__("Invalid referral code"), 100000);
                    return;
                }
            }

            DB::commit();
            $this->showSuccessAlert(__("Account Created Successfully. Your account will be reviewed and you will be notified via email/sms when account gets approved. Thank you"), 100000);
            $this->reset();
        } catch (Exception $error) {
            DB::rollback();
            $this->showErrorAlert($error->getMessage() ?? __("An error occurred please try again later"), 100000);
        }
    }

    public function vendorSignUp()
    {


        $this->validate(
            [
                "agreedVendor" => "accepted",
                "vendor_name" => "required",
                "vendor_email" => "required|email|unique:vendors,email",
                "vendor_phone" => "required|phone:" . setting('countryCode', "GH") . "|unique:vendors,phone",
                "name" => "required",
                "email" => "required|email|unique:users",
                "phone" => "required|phone:" . setting('countryCode', "GH") . "|unique:users",
                "password" => "required|string|min:6",
                "vendorDocuments" => "required",
            ]
        );

        //
        try {

            //
            $phone = PhoneNumber::make($this->phone);
            $vendorPhone = PhoneNumber::make($this->vendor_phone);
            //
            $user = User::where('phone', $phone)->first();
            if (!empty($user)) {
                $this->showErrorAlert(__("Account with phone already exists"), 100000);
                return;
            }


            DB::beginTransaction();
            //
            $user = new User();
            $user->name = $this->name;
            $user->email = $this->email;
            $user->phone = $phone;
            $user->creator_id = Auth::id();
            $user->commission = 0.00;
            $user->password = Hash::make($this->password);
            $user->is_active = false;
            $user->save();
            //assign role
            $user->assignRole('manager');

            //create vendor
            $vendor = new Vendor();
            $vendor->name = $this->vendor_name;
            $vendor->email = $this->vendor_email;
            $vendor->phone = $vendorPhone;
            $vendor->is_active = false;
            $vendor->vendor_type_id = $this->vendor_type_id;
            $vendor->save();

            if ($this->vendorDocuments) {

                $vendor->clearMediaCollection("documents");
                foreach ($this->vendorDocuments as $vendorDocument) {
                    $vendor->addMedia($vendorDocument)->toMediaCollection("documents");
                }
                $this->vendorDocuments = null;
            }

            //assign manager to vendor 
            $user->vendor_id = $vendor->id;
            $user->save();

            DB::commit();
            $this->showSuccessAlert(__("Account Created Successfully. Your account will be reviewed and you will be notified via email/sms when account gets approved. Thank you"), 100000);
            $this->reset();
        } catch (Exception $error) {
            DB::rollback();
            $this->showErrorAlert($error->getMessage() ?? __("An error occurred please try again later"), 100000);
        }
    }

    public function render()
    {
        if ($this->vendorTypes == null) {
            $this->vendorTypes = VendorType::active()->inorder()->where('slug', '!=', 'taxi')->get();
        }
        if ($this->vendor_type_id == null) {
            $this->vendor_type_id = $this->vendorTypes->first()->id ?? "";
        }
        return view('livewire.auth.register.register')->layout('layouts.auth');
    }
}
