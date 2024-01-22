<?php

namespace App\Observers;

use App\Models\Node;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Log;

class NodeObserver
{
    protected $request;
    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function created(Node $node)
    {
        Log::alert(App::getLocale());
        if (!empty($this->request->get('locales'))) {
            foreach ($this->request->get('locales') as $locale) {
                $node->title = [$locale => number_to_text($node->id, $locale)];
            }
        } else {
            $node->title = ['es' => number_to_text($node->id, "es"), 'en' => number_to_text($node->id, "en")];
        }
        $node->save();
    }
}
