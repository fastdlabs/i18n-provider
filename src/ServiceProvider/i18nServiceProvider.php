<?php
/**
 * @author    jan huang <bboyjanhuang@gmail.com>
 * @copyright 2018
 *
 * @see      https://www.github.com/janhuang
 * @see      http://www.fast-d.cn/
 */

namespace FastD\i18n\ServiceProvider;


use FastD\Container\Container;
use FastD\Container\ServiceProviderInterface;
use FastD\i18n\Console\i18nConsole;
use Symfony\Component\Translation\Loader\YamlFileLoader;
use Symfony\Component\Translation\Translator;

/**
 * Class ErrorCodeServiceProvider
 * @package FastD\ServiceProvider
 */
class i18nServiceProvider implements ServiceProviderInterface
{
    const DEFAULT_I18N_LOCALE = 'zh_cn';
    const DEFAULT_RESOURCE_DRIVER = 'yaml';

    /**
     * @param Container $container
     * @return mixed
     */
    public function register(Container $container)
    {
        $locale = config()->get('locale', static::DEFAULT_I18N_LOCALE);

        $translator =  new Translator($locale);
        $container->add('translator', $translator);

        $translator->addLoader(static::DEFAULT_RESOURCE_DRIVER, new YamlFileLoader());

        $path = app()->getPath().'/i18n';
        $i18nFile = $path.'/'.$locale.'.yml';
        $translator->addResource(static::DEFAULT_RESOURCE_DRIVER, $i18nFile, $locale);

        config()->merge([
            'consoles' => [
                new i18nConsole()
            ]
        ]);
    }
}