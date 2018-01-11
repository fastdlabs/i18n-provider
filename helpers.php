<?php
/**
 * @author    jan huang <bboyjanhuang@gmail.com>
 * @copyright 2018
 *
 * @see      https://www.github.com/janhuang
 * @see      http://www.fast-d.cn/
 */

use Symfony\Component\Translation\Translator;

/**
 * @return Translator
 */
function i18n()
{
    return app()->get('translator');
}

/**
 * @param $id
 * @param array $parameters
 * @param null $domain
 * @param null $locale
 * @return string
 */
function trans($id, array $parameters = array(), $domain = null, $locale = null)
{
    return i18n()->trans($id, $parameters, $domain, $locale);
}
