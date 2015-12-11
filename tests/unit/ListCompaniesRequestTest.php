<?php

use Easir\SDK\Request\ListCompanies as ListCompaniesRequest;
use \Easir\SDK\Request\Model;
use \Mockery as m;

class ListCompaniesRequestTest extends \Codeception\TestCase\Test
{
    /**
     * @var \UnitTester
     */
    protected $tester;

    public function testUrl()
    {
        $faker = \Faker\Factory::create();

        $request = new ListCompaniesRequest();
        $this->assertSame('/companies', $request->getUrl());

        $model = new Model\ListCompanies();
        $model->page = $faker->randomNumber(1);
        $model->perPage = $faker->randomNumber(2);
        $model->searchTerm = $faker->words($numWords = 3, $asTest = true);
        $request = new ListCompaniesRequest($model);
        $this->assertSame('/companies' . sprintf('?page=%d&per_page=%d&q=%s', $model->page, $model->perPage, urlencode($model->searchTerm)), $request->getUrl());
    }

}