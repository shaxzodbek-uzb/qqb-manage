<?php 

namespace QQB\Deposit\Repositories;

use QQB\Core\Traits\ResponsibleTrait;
use Illuminate\Support\Collection;
use App\Deposit;

class DepositRepository
{
	use ResponsibleTrait;

    protected $deposits;
    public function __construct(Deposit $deposits)
    {
        $this->deposits = $deposits;
    }

    public function deposits()
    {
    	$deposits = $this->deposits->all();
    	return $this->transform($deposits);

    }

     public function map(object $item): array
    {
        return [
            'id' => $item->id,
            'name' => $item->name,
            'description' => $item->description,
            'image' => $item->image_file?$item->image_file->url:'',
            'content' => $item->content,
            'slug' => $item->slug,
        ];
    }
}