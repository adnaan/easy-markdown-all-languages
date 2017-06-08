<?php
/*
Plugin Name: Easy Markdown All Languages
Plugin URI: https://github.com/chznbaum/easy-markdown-all-languages
Description: Write in Markdown, publish in WordPress. Supports all languages supported by Prism.
Version: 0.1
Author: @chznbaum
Author URI: http://chazonabaum.com/

Easy Markdown All Languages. Inspired by David's plugin, but modified.

@author David Wells
@author Chazona Baum <chazona@chazonabaum.com>
@link https://github.com/DavidWells/easy-markdown
*/
define('EASY_MARKDOWN_URLPATH', plugins_url('/', __FILE__));
define('EASY_MARKDOWN_PATH',WP_PLUGIN_DIR.'/'.dirname(plugin_basename(__FILE__)).'/');

include_once( EASY_MARKDOWN_PATH . 'load-scripts.php');
include_once( EASY_MARKDOWN_PATH . 'includes/markdown-extra.php');
include_once( EASY_MARKDOWN_PATH . 'includes/github-flavored-markdown.php');
include_once( EASY_MARKDOWN_PATH . 'includes/wpcom-markdown.php');

add_filter('the_content', 'easy_markdown_prism_code_pre_tag');
/**
 * Wraps all pre tags with the language specified
 */
function easy_markdown_prism_code_pre_tag($content) {
  /* TODO: Make this check more robust */
  $content = preg_replace(array('/\<code\>/s', '/\<code class="(.*?)"\>/s'), '<code class="language-$1">', $content);
  // These enable line numbers in prism
  /*$content = preg_replace('/\<pre(.*?)\><code class="(.*?)"\>/s', '<pre class="line-numbers"><code class="language-$2">', $content);
  //$content = preg_replace('/\<\/pre(.*?)\>/s', '</code></pre>', $content);*/
  return $content;
}