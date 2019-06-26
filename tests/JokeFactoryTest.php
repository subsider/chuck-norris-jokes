<?php

namespace Subsider\ChuckNorrisJokes\Tests;

use GuzzleHttp\Client;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Response;
use PHPUnit\Framework\TestCase;
use Subsider\ChuckNorrisJokes\JokeFactory;

class JokeFactoryTest extends TestCase
{
    /** @test */
    public function it_returns_a_random_joke()
    {
        $mock = new MockHandler([
            new Response(
                200,
                [],
                '{"categories":[],"created_at":"2016-05-01 10:51:41.584544","icon_url":"https://assets.chucknorris.host/img/avatar/chuck-norris.png","id":"VvGL-lRHSsOL-jj9IEDWRA","updated_at":"2016-05-01 10:51:41.584544","url":"https://api.chucknorris.io/jokes/VvGL-lRHSsOL-jj9IEDWRA","value":"Chuck norris doesn\'t beat people up he looks at them they get scared and fight their self to the death"}'
            ),
        ]);

        $handler = HandlerStack::create($mock);
        $client = new Client(['handler' => $handler]);
        $jokes = new JokeFactory($client);

        $joke = $jokes->getRandomJoke();

        $this->assertSame(
            'Chuck norris doesn\'t beat people up he looks at them they get scared and fight their self to the death',
            $joke
        );
    }
}
