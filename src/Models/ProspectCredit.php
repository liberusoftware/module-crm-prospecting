<?php

declare(strict_types=1);

namespace Liberu\CRM\Prospecting\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Liberu\Foundation\Organizations\Models\Team;
use Illuminate\Database\Eloquent\Model;

/** @property int $team_id */
final class ProspectCredit extends Model
{
    public function team(): BelongsTo
    {
        return $this->belongsTo(Team::class);
    }

    protected $table = 'crm_prospect_credits';

    protected $guarded = [];

    protected function casts(): array
    {
        return ['revealed_at' => 'datetime'];
    }
}
