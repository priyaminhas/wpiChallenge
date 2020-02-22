<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quotes extends Model
{
    //
    protected $table = 'ap_quotes_tv';
    protected $fillable = ['quote', 'season', 'episode'];
    public $timestamps = false;

    public function saveQuote($data)
    {
            $this->quote = $data['quote'];
            $this->season = $data['season'];
            $this->episode = $data['episode'];
            $this->save();
            return 1;
    }
    public function updateQuote($data)
    {
            $quotee = $this->find($data['id']);
            $quotee->quote = $data['quote'];
            $quotee->season = $data['season'];
            $quotee->episode = $data['episode'];
            $quotee->save();
            return 1;
    }
}
