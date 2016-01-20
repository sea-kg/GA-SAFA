# GA-SAFA
a genetic algorithm to search for the approximating function signal


# Database

## Table 'signals'
- id (AI INT)
- name (VARCHAR 255)
- data (TEXT)
- size (INT)
- freq (FLOAT)
- dt_created

## Table 'approx_funcs'

- id (AI INT)
- signalid (INT link to signals)
- funcs (TEXT)
- diff_value (INT)
- dt_created


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

	




