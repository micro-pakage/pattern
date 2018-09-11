<?php
/**
 * Created by PhpStorm.
 * User: noname
 * Date: 11.09.18
 * Time: 16:31
 */

namespace pattern\cor;

/**
 * Interface Handler
 * @package pattern\cor
 */
interface Handler
{
    /**
     * @param Handler $handler
     * @return Handler
     */
    public function setNext(Handler $handler): Handler;

    /**
     * @param $request
     * @return mixed
     */
    public function handle($request);
}