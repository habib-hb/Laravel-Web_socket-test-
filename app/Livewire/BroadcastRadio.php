<?php

namespace App\Livewire;

use Livewire\Attributes\On;
use Livewire\Component;

class BroadcastRadio extends Component
{


    public $radio;

    #[On('echo:delivery,PackageSent')]
    public function onPackageSent($event)
    {
        $this->radio = $event['status'];
    }

    public function render()
    {
        return view('livewire.broadcast-radio');
    }
}
