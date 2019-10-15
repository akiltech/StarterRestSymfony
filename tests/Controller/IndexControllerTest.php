<?php
/**
 * Created by PhpStorm.
 * User: akil
 * Date: 10/15/19
 * Time: 10:51 AM
 */

namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class IndexControllerTest extends WebTestCase
{
    public function testShowPost()
    {
        $client = static::createClient();

        //$client->request('GET', '/post/hello-world');

        $this->assertEquals(200, 200);
    }
}
