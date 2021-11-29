<?php

namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ProductControllerTest extends WebTestCase
{
    public function testSomething(): void
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/public/product');

        $this->assertResponseIsSuccessful();
        $this->assertSelectorTextContains('h1', 'Магазин');
    }
}
