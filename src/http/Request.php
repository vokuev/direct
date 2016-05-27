<?php

namespace perf2k2\direct\http;

use perf2k2\direct\api\params\ParamsInterface;
use perf2k2\direct\exceptions\HttpException;

class Request
{
    private $login;
    private $token;
    private $lang;
    private $isSandbox;
    private $host = 'https://api.direct.yandex.com/json/v5/';
    private $sandboxHost = 'https://api-sandbox.direct.yandex.com/json/v5/';

    public function __construct(string $login, string $token, string $lang, bool $isSandbox)
    {
        $this->login = $login;
        $this->token = $token;
        $this->lang = $lang;
        $this->isSandbox = $isSandbox;
    }

    private function getUri(string $service): string
    {
        if ($this->isSandbox) {
            return $this->sandboxHost . $service;
        } else {
            return $this->host . $service;
        }
    }

    private function getHeaders(): array
    {
        return [
            'Authorization: Bearer ' . $this->token,
            'Client-Login: ' . $this->login,
            'Accept-Language: ' . $this->lang,
            'Content-Type: application/json; charset=utf-8',
        ];
    }

    private function getBody(string $method, ParamsInterface $params): string
    {
        return json_encode([
            'method' => $method,
            'params' => $params,
        ]);
    }

    public function send(string $service, string $method, ParamsInterface $params)
    {
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $this->getUri($service));
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $this->getHeaders());
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $this->getBody($method, $params));
        $result = curl_exec($ch);

        if(curl_exec($ch) === false) {
            throw new HttpException(curl_error($ch), 404);
        }

        curl_close($ch);

        return $result;
    }
}