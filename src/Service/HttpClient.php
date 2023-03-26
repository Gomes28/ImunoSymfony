<?php

namespace App\Service;

use Symfony\Contracts\HttpClient\HttpClientInterface;

class HttpClient
{
    /**
     * @var__ HttpClientInterface
     */
    private HttpClientInterface $client;


    public function __construct(HttpClientInterface $client)
    {
        $this->client = $client;
    }
    /**
     * @return HttpClientInterface
     */
    public function getClient(): HttpClientInterface
    {
        return $this->client;
    }


    public function get(string $url,array $data = [],$authorization = null){
        try{
            $response = $this->getClient()->request(
                'GET',
                $url,
                [
                    'auth_bearer' => !is_null($authorization) ? $authorization : '',
                    'query' => $data
                ]
            );
            return $this->returnResponse($response);
        }catch (\Exception $e){
            return $this->returnError($e);
        }
    }

    public function post(string $url,$data,$authorization = null, $header = null){
        try{
            $response = $this->getClient()->request(
                'POST',
                $url,
                [
                    'auth_bearer' => !is_null($authorization) ? $authorization : '',
                    'body' => $data
                ]
            );
            return $this->returnResponse($response);
        }catch (\Exception $e){
            return $this->returnError($e);
        }
    }


    public function delete(string $url,$data = null,$authorization = null, $header = null){
        try{
            $response = $this->getClient()->request(
                'DELETE',
                $url,
                [
                    'auth_bearer' => !is_null($authorization) ? $authorization : '',
                    'body' => $data
                ]
            );
            return $this->returnResponse($response);
        }catch (\Exception $e){
            return $this->returnError($e);
        }
    }


    public function returnResponse($response){
        $array = $response->toArray();
        $array['statusCode'] = $response->getStatusCode();
        return $array;
    }

    private function returnError(\Exception $e){
        return [
            'success' => false,
            'message' => $e->getMessage(),
            'statusCode' => $e->getCode()
        ];
    }
}