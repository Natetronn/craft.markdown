# Markdown

Markdown is a very small plugin for the Craft CMS that adds a `markdown` filter into the templating engine.

## Installation

Clone / download the code and place the `markdown` folder inside `craft/plugins`. Install through the Craft CMS CP.

## Usage

Create a _plain text field_ to store the content. **Ensure it supports line breaks**. Then, in your template, pipe the field into the `markdown` filter:

	{% for entry in craft.entries.find({ section: 'Blog' }) %}
		{{ entry.content | markdown }}
	{% endfor %}
