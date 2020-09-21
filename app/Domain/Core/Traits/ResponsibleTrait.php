<?php
namespace QQB\Core\Traits;
use Illuminate\Support\Collection;

trait ResponsibleTrait
{
    public function transform(object $item): array
    {
        $data = [];
        if ($item instanceof Collection) {
            foreach ($item as $i) {
                $data[] = $this->map($i);
            }
        } else {
            $data = $this->map($item);
        }
        return $data;
    }
    public function map(object $item): array
    {
        return ['id' => $item->id];
    }
}