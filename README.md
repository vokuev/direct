# direct
[![Build Status](https://travis-ci.org/perf2k2/direct.svg?branch=master)](https://travis-ci.org/perf2k2/direct)

Обертка для работы с API Яндекс.Директа пятой версии. Нестабильная версия, не используйте в продакшене.

## Требования

PHP 7.x и новее

## Установка

Наиболее быстрый и удобный способ установки - используя Composer:
```bash
$ composer require perf2k2/direct:@dev
```

## Реализованные методы

Сервисы | Методы 
--- | ---
Campaigns|add, archive, delete, get, resume, suspend, unarchive, update
AdGroups|add, delete, get, update
Ads|add, archive, delete, get, moderate, resume, suspend, unarchive, update
Keywords|add, delete, get, resume, suspend, update
Bids|get, set, setAuto
BidModifiers|add, delete, get, set, toggle
AudienceTargets|add, delete, get, resume, setBids, suspend
RetargetingLists|add, delete, get, update
VCards|add, get, delete
Sitelinks|add, get, delete
AdImages|add, get, delete
AdExtensions|add, get, delete
DynamicTextAdTargets|add, get, delete, resume, suspend, setBids
Changes|
Dictionaries|
Clients|
AgencyClients|
KeywordsResearch|

## Пример использования

Получим все объявления кампании CampaignsTest::DEFAULT_CAMPAIGN с полями Id и State
```php
$service = Ads::get()
              ->setSelectionCriteria(
                  (new AdsSelectionCriteria())
                      ->setCampaignIds([CampaignsTest::DEFAULT_CAMPAIGN])
              )
              ->setFieldNames([
                  AdFieldEnum::Id,
                  AdFieldEnum::State
              ])
              ->setTextAdFieldNames([
                  TextAdFieldEnum::VCardId,
                  TextAdFieldEnum::Href,
                  TextAdFieldEnum::SitelinkSetId,
              ])

// Доступ к API при помощи реквизитов из конфигурационного файла    
$response = $service->createAndSendRequest(new ConfigFileCredential());

// Получим данные кампаний из ответа
$campaigns = $response->getResult('Campaigns');
```

Так же можно указать реквизиты в теле скрипта:

```php 
$response = $service->createAndSendRequest(new Credential('token', 'login'));
```

## Лицензия

MIT License (полный текст в файле LICENSE.md)