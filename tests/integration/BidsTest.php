<?php

namespace perf2k2\direct\tests\integration;

use perf2k2\direct\api\entities\bids\BidSetItem;
use perf2k2\direct\api\entities\bids\BidsSelectionCriteria;
use perf2k2\direct\api\enums\bid\BidFieldEnum;
use perf2k2\direct\Bids;
use perf2k2\direct\http\Response;
use perf2k2\direct\tests\stubs\FakeConnection;

class BidsTest extends \PHPUnit_Framework_TestCase
{
    protected static $connection;

    public static function setUpBeforeClass()
    {
        self::$connection = new FakeConnection();
    }

    public function testGet()
    {
        $response = Bids::get()
            ->setSelectionCriteria(
                (new BidsSelectionCriteria())
                    ->setKeywordIds([])
            )
            ->setFieldNames([BidFieldEnum::Bid])
            ->createAndSendRequest(self::$connection);

        $this->assertInstanceOf(Response::class, $response);
    }

    public function testSet()
    {
        $response = Bids::set()
            ->setBids([
                (new BidSetItem())
                    ->setKeywordId(1)
                    ->setBid(1)
            ])
            ->createAndSendRequest(self::$connection);

        $this->assertInstanceOf(Response::class, $response);
    }

    public function testSetAuto()
    {
        $response = Bids::setAuto()
            ->setBids([
                (new BidSetItem())
                    ->setKeywordId(1)
                    ->setBid(1)
            ])
            ->createAndSendRequest(self::$connection);

        $this->assertInstanceOf(Response::class, $response);
    }
}