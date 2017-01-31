<?php

namespace Spatie\ResponseCache;

use Illuminate\Contracts\Config\Repository as Repository;
use Illuminate\Contracts\Foundation\Application;

class ResponseCacheRepository
{
    /**
     * @var \Illuminate\Cache\Repository
     */
    protected $cache;

    /**
     * @var \Spatie\ResponseCache\ResponseSerializer
     */
    protected $responseSerializer;

    /**
     * @var string
     */
    protected $cacheStoreName;

    /**
     * @param \Illuminate\Contracts\Foundation\Application $app
     * @param \Spatie\ResponseCache\ResponseSerializer     $responseSerializer
     */
    public function __construct(Application $app, ResponseSerializer $responseSerializer, Repository $config)
    {
        $this->cache = $app['cache']->store($config->get('laravel-responsecache.cacheStore'));
        $this->responseSerializer = $responseSerializer;
    }

    /**
     * @param string                                     $key
     * @param \Symfony\Component\HttpFoundation\Response $response
     * @param \DateTime|int                              $minutes
     */
    public function put($key, $response, $minutes)
    {
        $this->cache->put($key, $this->responseSerializer->serialize($response), $minutes);
    }

    /**
     * @param string $key
     *
     * @return bool
     */
    public function has($key)
    {
        return $this->cache->has($key);
    }

    /**
     * @param string $key
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function get($key)
    {
        return $this->responseSerializer->unserialize($this->cache->get($key));
    }

    public function flush()
    {
        $this->cache->flush();
    }
}
