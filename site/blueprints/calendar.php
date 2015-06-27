<?php if(!defined('KIRBY')) exit ?>

title: Calendar
pages: false
fields:
  title:
    label: Title
    type:  text
    width: 1/2
  subtitle:
    label: Subtitle (this is what we put in the H2)
    type:  text
    width: 1/2
  text:
    label: Text
    type:  wysiwyg
  mysnippet:
    label: Override the default snippet
    type:  text
    width: 1/2
	calendar:
		label: Calendar
		type: structure
		entry: >
			<strong>{{summary}}</strong><br />
			{{description}}<br />
			Beginning: {{_begin_date}} {{_begin_time}}<br />
			End: {{_end_date}} {{_end_time}}<br />
			Category: {{category}}
		fields:
			summary:
				label: Summary
				type: text
			description:
				label: Description
				type: textarea
				size: small
			category:
				label: Category
				type: radio
				options:
					concerts: Concerts
					arts: Art and Architecture
					literary: Interactive literary program
			_begin_date:
				label: Beginning date
				type: date
				format: MM/DD/YYYY
			_begin_time:
				label: Beginning time
				type: time
				interval: 60
			_end_date:
				label: Ending date
				type: date
				format: MM/DD/YYYY
			_end_time:
				label: Ending time
				type: time
				interval: 60
