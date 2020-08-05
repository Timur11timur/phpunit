<?php

namespace stats\tests;

use stats\Baseball;

class BaseballTest extends \PHPUnit\Framework\TestCase
{
  public function testCalcAvgEquals()
  {
    $atbats = 389;
    $hits = 129;
    $baseball = new Baseball();
    $result = $baseball->calc_avg($atbats, $hits);
    //$expectedresults = $hits/$atbats;

    //$this->assertEquals($expectedresults, $result);

    $formatexpectedresults = number_format($hits/$atbats, 3);

    $this->assertEquals($formatexpectedresults, $result);
  }

    public function testCalcHitsreStrings()
    {
        $atbats = 389;
        $hits = "jkbjbbm";
        $baseball = new Baseball();
        $result = $baseball->calc_avg($atbats, $hits);

        $formatexpectedresults = 0.000;

        $this->assertEquals($formatexpectedresults, $result);
    }
}
