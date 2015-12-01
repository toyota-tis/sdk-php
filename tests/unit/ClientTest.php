<?php

use \Easir\SDK\Client;
use \Easir\SDK\Request;
use \Easir\SDK\Exception\ClientException;
use \Easir\SDK\Exception\RequestException;
use \Mockery as m;

class ClientTest extends \Codeception\TestCase\Test
{
    /**
     * @var \UnitTester
     */
    protected $tester;

    public function testConstruct()
    {
        $faker = Faker\Factory::create();
        $endpoint = $faker->url;
        $accessToken = $faker->sha1;
        $client = new Client($endpoint, $accessToken);

        $this->assertEquals($endpoint, $client->endpoint, "Unexpected endpoint");
        $this->assertEquals($accessToken, $client->accessToken, "Unexpected accessToken");
    }

    public function testMissingEndpoint()
    {
        $client = new Client();

        $this->setExpectedException(ClientException::class, "endpoint is required", ClientException::MISSING_ENDPOINT);
        $client->execute(m::mock(Request::class));
    }

    public function testMissingAuth()
    {
        $faker = Faker\Factory::create();
        $client = new Client($faker->url);

        $request = m::mock(Request::class)
                ->shouldReceive('validate')
                ->andSet('requiresAuth', true)
                ->mock();

        $this->setExpectedException(ClientException::class, "Request requires auth", ClientException::MISSING_AUTH);
        $client->execute($request);
    }

    public function testRequestValidation()
    {
        $faker = Faker\Factory::create();
        $client = new Client($faker->url);

        $request = m::mock(Request::class)
                ->shouldReceive('validate')
                ->andThrow(RequestException::class, "Bad request method", RequestException::BAD_METHOD)
                ->mock();

        $this->setExpectedException(RequestException::class, "Bad request method", RequestException::BAD_METHOD);
        $client->execute($request);
    }
}