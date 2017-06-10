# Easy Markdown All Languages

> TLDR; Write posts in WordPress using github flavored markdown the easy way. Now including all Prism supported languages!

Blogging about code is normally a **massive** headache, unless you happen to use one of the less feature-rich CMS options that implement markdown by default.

WordPress' editor garbles your code, and escaping your code while you write it is just unrealistic. Meanwhile, JetPack makes for a lot of bloat (and a required connection to WordPress.com) if all you want is to use markdown.

David Wells put together a plugin for his own plugin to support GitHub flavored markdown and Prism syntax highlighting.

[David Wells' Easy Markdown Plugin](https://github.com/davidwells/easy-markdown)

He made it with a focus on JavaScript, and it supports ES6 javascript syntax highlighting and JSX for React code snippets.

I needed more languages supported. Since Prism's so lightweight and I'm often adding new languages to my arsenal, I tweaked this to support all the languages currently supported by Prism.

This modified plugin uses the [Coy Prism Theme](http://prismjs.com/index.html?theme=prism-coy), and supports [line numbers](http://prismjs.com/plugins/line-numbers/) and [command line code blocks](http://prismjs.com/plugins/command-line/). It also supports syntax highlighting inline code snippets in addition to the code blocks supported by the original plugin. *It also now supports syntax highlighting code in comments.* :satisfied:

If you want a different theme, make a custom Prism build and replace the `prism.css` [file](https://github.com/chznbaum/easy-markdown-all-languages/blob/master/css/prism.css).

If you want a different selection of features, make a custom Prism build and replace the `prism.js` [file](https://github.com/chznbaum/easy-markdown-all-languages/blob/master/js/prism.js).

## Languages Supported:

- ABAP
- ActionScript
- Ada
- Apache Configuration
- APL
- AppleScript
- AsciiDoc
- ASP.NET
- AutoIt
- AutoHotkey
- Bash
- BASIC
- Batch
- Bison
- Brainfuck
- Bro
- C
- C#
- C++
- CoffeeScript
- Crystal
- CSS
- CSS Extras
- D
- Dart
- Django/Jinja2
- Diff
- Docker
- Eiffel
- Elixir
- Erlang
- F#
- Fortran
- Gherkin
- Git
- GLSL
- Go
- GraphQL
- Groovy
- Haml
- Handlebars
- Haskell
- Haxe
- HTML
- HTTP
- Icon
- Inform 7
- Ini
- J
- Jade
- Java
- JavaScript (including ES6)
- Jolie
- JSON
- Julia
- Keyman
- Kotlin
- LaTeX
- Less
- LiveScript
- LOLCODE
- Lua
- Makefile
- Markdown
- MATLAB
- MEL
- Mizar
- Monkey
- NASM
- nginx
- Nim
- Nix
- NSIS
- Objective-C
- OCaml
- Oz
- PARI/GP
- Parser
- Pascal
- Perl
- PHP
- PHP Extras
- PowerShell
- Processing
- Prolog
- .properties
- Protocol Buffers
- Puppet
- Pure
- Python
- Q
- Qore
- R
- React JSX
- Reason
- reST (reStructuredText)
- Rip
- Roboconf
- Ruby
- Rust
- SAS
- Sass (Sass)
- Sass (SCSS)
- Scala
- Scheme
- Smalltalk
- Smarty
- SQL
- Stylus
- Swift
- Tcl
- Textile
- Twig
- TypeScript
- VB.Net
- Verilog
- VHDL
- vim
- Wiki markup
- Xojo (REALbasic)
- YAML

If you want a different selection of languages (maybe to slim the plugin down), make a custom Prism build and replace the `prism.js` [file](https://github.com/chznbaum/easy-markdown-all-languages/blob/master/js/prism.js).

## Installation

1. [Download](https://github.com/chznbaum/easy-markdown-all-languages)
2. [Install](http://www.wpbeginner.com/beginners-guide/step-by-step-guide-to-install-a-wordpress-plugin-for-beginners/)
3. Visit profile and check 'Disable the visual editor when writing' in the profile page of WP admin `/wp-admin/profile.php`
4. Have multiple users and want to disable the visual editor for everyone? Include this in your `functions.php` or in a site-specific plugin:

```php
add_filter ( 'user_can_richedit', create_function ( '$a', 'return false;' ), 50 );
```

## Usage

### Examples:

```js
// JavaScript!
var greeting = 'What up G'
alert(greeting)

console.log('log');
```

```html
// HTML!
<a href="http://davidwells.io">
  Wowza!!!!
</a>
```

```css
/* CSS! */
.ninja {
 visibility: hidden;
}
```

```php
// PHP!
<?php
  echo 'Derp';
?>
```

```bash
// Bash!
# Bash script
mkdir lololol && cd lololol
```

### Customizing it

I'm not supporting custom use cases and styles.

You can fork the plugin and do this yourself!

To change CSS, edit the `prism.css` [file](https://github.com/chznbaum/easy-markdown-all-languages/blob/master/css/prism.css)

To change/customize prism edit the `prism.js` [file](https://github.com/chznbaum/easy-markdown-all-languages/blob/master/js/prism.js).

To [add support for more custom post types alter these lines](https://github.com/chznbaum/easy-markdown-all-languages/blob/master/includes/wpcom-markdown.php#L356-L360).

### Happy Blogging!

### Troubleshooting

Don't install with JetPack. It will probably cause problems.

## Credits

Syntax highlighting is handled by [Prism](http://prismjs.com/).

The Markdown parser was shamelessly gutted from [JetPack](https://wordpress.org/plugins/jetpack/) and [Evan Solomon](https://github.com/evansolomon)'s GitHub flavored markdown script

This plugin was modified from [David Wells](https://github.com/DavidWells/easy-markdown)

Thanks! :smile:

## Version History

### Version 0.3.0 (Current)
9 June 2017
* Added support for comments

### Version 0.2.0
* Added all Prism supported languages
* Added support for inline code

### Version 0.1.0
Forked from original