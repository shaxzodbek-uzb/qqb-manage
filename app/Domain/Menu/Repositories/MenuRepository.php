<?php
namespace QQB\Menu\Repositories;

class MenuRepository
{
    public function getMenu(): array
    {
        return (array)nova_get_menus();
    }
    public function getBySlug($slug): array
    {
        return (array)nova_get_menu($slug, app()->getLocale());
    }
}