<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class HargaProduk extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(public int $nilai, public bool $diskon = true) {}
    public function format(): string
    {
        return 'Rp' . number_format($this->diskon ? $this->nilai / 0.9 : $this->nilai, 0, ',', ',');
    }



    /**
     * Get the view / contents that represent the component.
     */
    public function render()
    {
        return view('components.harga-produk');
    }
}