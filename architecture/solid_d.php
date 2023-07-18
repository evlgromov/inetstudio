<?php

interface XMLHTTPServiceInterface {}

class XMLHttpService extends XMLHTTPRequestService implements XMLHTTPServiceInterface {}

class Http {
    private $service;

    public function __construct(XMLHTTPServiceInterface $service) { }

    public function get(string $url, array $options) {
        $this->service->request($url, 'GET', $options);
    }

    public function post(string $url) {
        $this->service->request($url, 'GET');
    }
}