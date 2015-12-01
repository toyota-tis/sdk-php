<?php

use \Easir\SDK\Model\Company;
use \Mockery as m;

class CompanyTest extends \Codeception\TestCase\Test
{
    /**
     * @var \UnitTester
     */
    protected $tester;

    public function testPopulateEmpty()
    {
        $model = new Company();
        $model->populateFromApiData(array());

        foreach ($model as $paramName => $paramValue) {
            $this->assertNull($paramValue, "Unexpected not null value for param: " . $paramName);
        }
    }

    public function testPopulateUnknown()
    {
        $faker = Faker\Factory::create();

        $name = $faker->name;

        $model = new Company();
        $model->populateFromApiData(array('name' => $name, 'anotherName' => $faker->name));
        $this->assertSame($name, $model->name, "Given populate value was not correctly populated");

        $this->setExpectedException(PHPUnit_Framework_Exception::class, "Undefined property: Easir\\SDK\\Model\\Company::\$anotherName");
        $model->anotherName;
    }

    public function testPopulateFull()
    {
        $faker = Faker\Factory::create();

        $data = new \stdClass;
        $data->id = $faker->randomNumber();
        $data->name = $faker->name;
        $data->company_name = $faker->lastName;
        $data->phone_number = $faker->phoneNumber;
        $data->website = $faker->url;
        $data->vat = null;
        $data->logo_1 = $faker->imageUrl();
        $data->logo_2 = $faker->imageUrl();
        $data->created_at = $faker->date('Y-m-d H:i:s');
        $data->updated_at = $faker->date('Y-m-d H:i:s');
        $data->billing = new \stdClass;
        $data->billing->invoice_emaigl = $faker->companyEmail;
        $data->billing->address_1 = $faker->streetAddress;
        $data->billing->address_2 = $faker->streetAddress;
        $data->billing->zip_code = $faker->postcode;
        $data->billing->city = $faker->city;
        $data->billing->state = $faker->city;
        $data->billing->country = new \stdClass;
        $data->billing->country->name = $faker->country;
        $data->billing->country->native_name = $faker->country;
        $data->billing->country->code = $faker->countryCode;
        $data->timezone = new \stdClass;
        $data->timezone->name = $faker->timezone;
        $data->timezone->offset = "+1";
        $data->locale = new \stdClass;
        $data->locale->code = $faker->locale;
        $data->locale->language = "Danish";
        $data->locale->country = $faker->country;
        $data->language = new \stdClass;
        $data->language->name = $data->locale->language;
        $data->language->code = $faker->languageCode;
        $data->currency = new \stdClass;
        $data->currency->name = "Danish Krone";
        $data->currency->name_plural = "Danish kroner";
        $data->currency->code = $faker->currencyCode;
        $data->currency->symbol = "Dkr";
        $data->currency->symbol_native = "kr";
        $data->currency->decimal_digits = 2;
        $data->currency->rounding = 0;
        $data->user = new \stdClass;
        $data->user->id = $faker->randomNumber();
        $data->user->id2 = $faker->randomNumber();
        $data->user->first_name = $faker->firstName;
        $data->user->last_name = $faker->lastName;
        $data->user->phone_number = $faker->phoneNumber;
        $data->user->job_title = $faker->text(20);
        $data->user->email = $faker->email;
        $data->user->email_notifications = $faker->boolean();
        $data->user->profile_picture = $faker->imageUrl();
        $data->user->user_type = new \stdClass;
        $data->user->user_type->name = $faker->name;
        $data->user->created_at = $faker->date('Y-m-d H:i:s');
        $data->user->updated_at = $faker->date('Y-m-d H:i:s');

        $model = new Company();
        $model->populateFromApiData($data);

        $this->tester->assertSameContents($data, $model, "The model was not correctly populated from a generic data array");
    }
}