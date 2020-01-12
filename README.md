# WebFoundations — Astra child theme
This child theme is a somewhat more comprehensive chid theme setup than the basic one provided with the Astra theme, it is used as a basis for new websites built on the Astra theme, and using the Gutenberg editor, no page builders.

It is a work in progress, we're constantly evolving it as and when required.

## Use case
The premise behind the use case for the child theme is as follows;
* The site is being built using the Gutenberg editor, no page builders ( Beaver Builder, Elementor etc. ).
* Any styles or settings that can be changed in the Astra Theme customiser should be changed there.
* Any styles or settings that can be changed in blocks, should be changed in blocks.

## Features
* Javascript, CSS and images processed by Webpack
* Asynchronous loading of our Javascript bundle
* CSS processed through [PostCSS PresetEnv](https://preset-env.cssdb.org/)
* CSS linting using Stylelint using the [@10up/stylelint-config](https://github.com/10up/stylelint-config) rules, mainly due to their use of PostCss PresetEnv.
* php linting using [PHP Code Sniffer](https://github.com/squizlabs/PHP_CodeSniffer) and the WordPress coding standards ( installed by Composer ).
* Custom, easily editable, editor color pallette and color picker ( see includes/editor/editor-colors.php )

## To do
* Create more efficient settings option for webpack