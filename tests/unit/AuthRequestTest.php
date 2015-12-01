<?php

use \Easir\SDK\Request\AuthRequest;
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
}