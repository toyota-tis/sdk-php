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
        $model->populateFromData(array());

        foreach ($model as $paramName => $paramValue) {
            $this->assertNull($paramValue, "Unexpected not null value for param: " . $paramName);
        }
    }

    public function testPopulateUnknown()
    {
        $faker = Faker\Factory::create();

        $name = $faker->name;

        $model = new Company();
        $model->populateFromData(array('name' => $name, 'anotherName' => $faker->name));
        $this->assertSame($name, $model->name, "Given populate value was not correctly populated");

        $this->setExpectedException(PHPUnit_Framework_Exception::class, "Undefined property: Easir\\SDK\\Model\\Company::\$anotherName");
        $model->anotherName;
    }

    public function testPopulateFull()
    {
        $data = $this->getFakeCompanyData();

        $model = new Company();
        $model->populateFromData($data);

        $this->assertInstanceOf(\Easir\SDK\Model\Billing::class, $model->billing);
        $this->assertInstanceOf(\Easir\SDK\Model\Timezone::class, $model->timezone);
        $this->assertInstanceOf(\Easir\SDK\Model\Locale::class, $model->locale);
        $this->assertInstanceOf(\Easir\SDK\Model\Language::class, $model->language);
        $this->assertInstanceOf(\Easir\SDK\Model\Currency::class, $model->currency);

        $this->tester->assertSameContents($data, $model, "The model was not correctly populated from a generic data array");
    }

    private function getFakeCompanyData()
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

        return $data;
    }
}