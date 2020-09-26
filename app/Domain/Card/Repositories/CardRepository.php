<?php
namespace QQB\Card\Repositories;

use QQB\Core\Traits\ResponsibleTrait;
use Illuminate\Support\Collection;
use App\Card;

class CardRepository
{
    use ResponsibleTrait;

    protected $cards;
    public function __construct(Card $cards)
    {
        $this->cards = $cards;
    }
    public function getBestCards(): array
    {
        $cards = $this->cards->all();
        return $this->transform($cards);
    }
    public function getAllCards(): array
    {
        $cards = $this->cards->all();
        return $this->transform($cards);
    }
    public function map(object $item): array
    {
        return [
            'id' => $item->id,
            'name' => $item->name,
            'description' => $item->description,
            'image' => $item->image_file?$item->image_file->url:'',
            'cover_image' => $item->cover_image_file?$item->cover_image_file->url:'',
            'resource_details' => $item->resource_details,
            'advantages' => $item->advantages,
            'documents' => $item->documents,
        ];
    }
}