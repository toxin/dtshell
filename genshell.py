#! /usr/bin/env python
print('''
     ||  DTShell  ||
 coded by: toxin & d4rk0
''')

import sys
if '-h' in sys.argv or '--help' in sys.argv:
    print('USAGE:  genshell.py [options] output.php')
    print('')
    print('  -h, --help          Show this help text')
    print('  --greetz            Very important stuff')
    print('')

if '--greetz' in sys.argv:
    print('toxin and d4rk0 send greetz to the following:')
    print('  insert, long, list, of, greetz, that, makes, us, look,')
    print('  popular, or something.')
