<?php

namespace Themes\Majestic;

use ClientX\Theme\ThemeInterface;

class MajesticTheme implements ThemeInterface
{

    const DEFINITIONS = __DIR__ . '/config.php';

    public function getName(): string
    {
        return "Majestic";
    }

    public function getVersion(): ?string
    {
        return "1.0";
    }

    public function getAuthor(): ?string
    {
        return "MartinDev";
    }

    public function getScreenshots(): array
    {
        return [];
    }

    public function getViewsPath(): string
    {
        return __DIR__ . DIRECTORY_SEPARATOR . '/Views';
    }

    public function getAssetsPath(): string
    {
        return '/Majestic/assets';
    }

    public function getPluginsPath(): ?string
    {
        return '/Majestic/vendors';
    }

    public function getTemplatesPath(): string
    {
        return __DIR__;
    }

    public function getComponentPath(): ?string
    {
        return null;
    }

    public function getContacts(): ?array
    {
        return [
            'discord' => 'clientxcms.com/discord',
            'email' => 'contact@clientxcms.com',
            'twitter' => "@ClientXCMS",
        ];
    }
}
