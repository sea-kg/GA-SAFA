# GA-SAFA
a genetic algorithm to search for the approximating function signal


# web-site
- subscription
- sign in
- contacts
- description
- plan start


# Database

## Table 'signals'
- id (AI INT)
- name (VARCHAR 255)
- data (TEXT)
- size (INT)
- freq (FLOAT)
- state (varchar) (ok, processing, todo)
- dt_created

## Table 'approx_funcs'

- id (AI INT)
- signalid (INT link to signals)
- funcs (TEXT)
- diff_value (INT)
- state (varchar)
- type (varchar) (init vector, other)
- created

# API

## Original Signal

POST http://host//origsig.php
params:
	id=1

POST http://host//addorigsig.php
params
	name=test
	freq=0,0625
	data=text
	size=2048

## Approx signal

	




