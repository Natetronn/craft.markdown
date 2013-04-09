<?php
/**
 * A small Twig template filter for parsing text as Markdown within
 * the Craft CMS
 *
 * @link https://github.com/jamierumbelow/blocks.markdown
 * @copyright Copyright (c) 2012, Jamie Rumbelow <http://jamierumbelow.net>
 */

namespace Craft;

class MarkdownPlugin extends BasePlugin
{
	/* --------------------------------------------------------------
	 * PLUGIN INFO
	 * ------------------------------------------------------------ */

	public function getName()
	{
		return Craft::t('Markdown');
	}

	public function getVersion()
	{
		return '1.0.0';
	}

	public function getDeveloper()
	{
		return 'Jamie Rumbelow';
	}

	public function getDeveloperUrl()
	{
		return 'http://jamierumbelow.net';
	}

	/* --------------------------------------------------------------
	 * HOOKS
	 * ------------------------------------------------------------ */

	/**
	 * Load the MarkdownTwigExtension class from our ./twigextensions
	 * directory and return the extension into the template layer
	 */
	public function hookAddTwigExtension()
	{
		Craft::import('plugins.markdown.twigextensions.MarkdownTwigExtension');
		return new MarkdownTwigExtension();
	}
}
