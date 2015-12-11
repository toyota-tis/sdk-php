<?php

use Easir\SDK\Request\GetCompany as GetCompanyRequest;
use \Easir\SDK\Request\Model;
use Easir\SDK\Exception\RequestException;
use \Mockery as m;

class GetRequestTest extends \Codeception\TestCase\Test
{
    /**
     * @var \UnitTester
     */
    protected $tester;

    public function testUrl()
    {
        $faker = \Faker\Factory::create();

        $model = new Model\GetCompany();
        $model->id = $faker->randomNumber(1);
        $request = new GetCompanyRequest($model);
        $this->assertSame('/companies/' . $model->id, $request->getUrl());

        $request = new GetCompanyRequest();
        $this->setExpectedException(RequestException::class, "We can't make a request without a RequestModel", RequestException::MISSING_MODEL);
        $request->getUrl();
    }

}