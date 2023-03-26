<?php

namespace App\Service;

use App\Entity\Config;
use App\Entity\Project;
use App\Repository\ConfigRepository;

class ConfigProject
{
    private CacheService $cacheService;
    private ConfigRepository $configRepository;

    public function __construct(CacheService $cacheService, ConfigRepository $configRepository)
    {
        $this->cacheService = $cacheService;
        $this->configRepository = $configRepository;
    }
    public function project(): ?Config
    {
        $cacheName = 'projectDefault';
        $result = $this->cacheService->getCache($cacheName);
        if(!$result){
            $result = $this->configRepository->find(1);
            if(!$result) return null;
            $this->cacheService->putCache($cacheName,$result);
        }
        return $result;
    }

    public function reset()
    {
        $cacheName = 'projectDefault';
        return $this->cacheService->delete($cacheName);
    }
}