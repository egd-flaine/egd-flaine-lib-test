<?php
/**
 * Created by PhpStorm.
 * User: frede
 * Date: 12/10/2018
 * Time: 11:10
 */

namespace App\Flaine\TestBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class FlaineTestBundle extends Bundle
{
    public function test() {
        return "Hello World";
    }
}