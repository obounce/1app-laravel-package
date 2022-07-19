<?php

/* This file is part of the 1app package.
 *
 * (c) 1app <support@1appgo.com>
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 * @date: 2022-07-15
 * 
 */ 



namespace Oneapp\Oneapp\Facades;

use Illuminate\Support\Facades\Facade;

class Oneapp extends Facade
{
    /**
     * Get the registered name of the component
     * @return string
     */
    
    protected static function getFacadeAccessor()
    {
        return 'oneapp';
    }
}