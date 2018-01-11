<?php
/**
 * @author    jan huang <bboyjanhuang@gmail.com>
 * @copyright 2018
 *
 * @see      https://www.github.com/janhuang
 * @see      http://www.fast-d.cn/
 */

namespace FastD\i18n\Console;


use FastD\i18n\ServiceProvider\i18NServiceProvider;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class i18nConsole extends Command
{
    public function configure()
    {
        $this->setName('i18n:init');
    }

    public function execute(InputInterface $input, OutputInterface $output)
    {
        $locale = config()->get('locale', i18NServiceProvider::DEFAULT_I18N_LOCALE);
        $path = app()->getPath().'/i18n';

        if (!is_dir($path)) {
            mkdir($path, 0755, true);
        }

        $i18nFile = $path.'/'.$locale.'.yml';
        if (!file_exists($i18nFile)) {
            touch($i18nFile);
        }

        output()->writeln(sprintf('Locale: %s', $locale));
        output()->writeln(sprintf('Create i18n file: %s', $i18nFile));
        output()->writeln(sprintf('Path: %s', $path));
    }
}