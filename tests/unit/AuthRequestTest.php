<?php

use \Easir\SDK\Request\Auth as AuthRequest;
use \Easir\SDK\Request\Model\Auth;
use \Easir\SDK\Request\Model;
use \Easir\SDK\Exception\RequestException;
use \Mockery as m;

class AuthRequestTest extends \Codeception\TestCase\Test
{
    /**
     * @var \UnitTester
     */
    protected $tester;

    public function testToString()
    {
        $model = new Auth();
        $model->client_id = "ID";
        $model->client_secret = "SECRET";

        $request = new AuthRequest($model);
        $this->assertEquals(json_encode($model), (string)$request, "Looks like the request model wasn't json encoded");
    }

    public function testInitWithMissingFields()
    {
        $data = ['client_id' => "ID", "invalid" => "invalidValue"];
        $model = new Auth($data);
        $this->assertEquals($data['client_id'], $model->client_id, "Valid value was not initialised.");
        $this->setExpectedException(PHPUnit_Framework_Exception::class, "Undefined property: Easir\\SDK\\Request\\Model\\Auth::\$invalid");
        $this->assertNotEmpty($model->invalid, "Invalid property was set.");
    }

    public function testInitWithArray()
    {
        $data = ['client_id' => "ID", "client_secret" => "SECRET"];
        $model = new Auth($data);
        $this->assertEquals($data['client_id'], $model->client_id, "Valid value was not initialised.");
        $this->assertEquals($data['client_secret'], $model->client_secret, "Valid value was not initialised.");
    }

    public function testInitWithObject()
    {
        $data = new \stdClass();
        $data->client_id = "ID";
        $data->client_secret = "SECRET";
        $model = new Auth($data);
        $this->assertEquals($data->client_id, $model->client_id, "Valid value was not initialised.");
        $this->assertEquals($data->client_secret, $model->client_secret, "Valid value was not initialised.");
    }

    public function testModelInjection()
    {
        $model = m::mock(Auth::class);
        new AuthRequest($model);
    }

    public function testBadModelInjection()
    {
        $this->setExpectedException(PHPUnit_Framework_Exception::class);
        new AuthRequest(new stdClass());
    }

    public function testBadModelClassInjection()
    {
        $this->setExpectedException(RequestException::class, "", RequestException::BAD_MODEL);
        $model = m::mock(Model::class);
        new AuthRequest($model);
    }

    public function testBadGrantType()
    {
        $model = m::mock(Auth::class);
        $request = new AuthRequest($model);

        $grantType = "invalid";

        $this->setExpectedException(RequestException::class, sprintf("Unsupported grant type: %s", $grantType), RequestException::BAD_GRANT_TYPE);
        $request->setGrantType($grantType);
    }

    public function testGrantType()
    {
        $model = m::mock(Auth::class);
        $request = new AuthRequest($model);

        $defaultGrantType = "client_credentials";

        $this->assertSame($request->options, ['query' => ['grant_type' => $defaultGrantType]], "Unexpected grant type default");
        $grantType = "password";
        $request->setGrantType($grantType);
        $this->assertSame($request->options, ['query' => ['grant_type' => $grantType]], "Grant type was not set as expected");
    }

    public function testPublicUrlInterface()
    {
        $model = m::mock(Auth::class);
        $request = new AuthRequest($model);

        $this->assertSame("/token", $request->getUrl());
    }
}