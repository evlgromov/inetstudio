<?php

interface SecretKeyRepositoryInterace {
    public function getSecretKey() : string;
}

class RedisSecretKeyRepository implements SecretKeyRepositoryInterace {
    public function getSecretKey()
    {
        return 'redis';
    }
}

class FileSecretKeyRepository implements SecretKeyRepositoryInterace {
    public function getSecretKey()
    {
        return 'file';
    }
}

class Concept {
    private $client;
    private $secretKeyRepository;

    public function __construct(SecretKeyRepositoryInterace $secretKeyRepository) {
        $this->secretKeyRepository = $secretKeyRepository;
        $this->client = new \GuzzleHttp\Client();
    }

    public function getUserData() {
        $params = [
            'auth' => ['user', 'pass'],
            'token' => $this->secretKeyRepository->getSecretKey()
        ];

        $request = new \Request('GET', 'https://api.method', $params);
        $promise = $this->client->sendAsync($request)->then(function ($response) {
            $result = $response->getBody();
        });

        $promise->wait();
    }
}
