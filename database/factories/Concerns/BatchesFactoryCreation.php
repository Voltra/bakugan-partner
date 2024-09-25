<?php

namespace Database\Factories\Concerns;

use Arr;
use Illuminate\Database\Eloquent\Collection as EloquentCollection;
use Illuminate\Database\Eloquent\Model;

/**
 * @template T of Model
 * @extends  \Illuminate\Database\Eloquent\Factories\Factory<T>
 */
trait BatchesFactoryCreation
{
    private array $batchData = [];

    public function createMany(int|iterable|null $records = null): EloquentCollection
    {
        $this->batchData = array_merge($this->batchData, Arr::wrap($records));
        return new EloquentCollection();
    }

    public function commitBatch(): void {
        parent::createMany($this->batchData);

        $this->batchData = [];
    }

    public function __destruct() {
        if (!empty($this->batchData)) {
            $this->commitBatch();
        }
    }
}
