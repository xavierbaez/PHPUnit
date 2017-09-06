Brandastic PHPUnit Example
author: Xavier Baez

------------------------------------------------------------------
HOW TO USE:

cd /vendor/bin/
php phpunit --verbose ../../tests/ConfigRepositoryTest.php

------------------------------------------------------------------
FILES:

/Brandastic/Unit/src/ConfigRepository.php
/Brandastic/Unit/tests/ConfigRepositoryTest.php

------------------------------------------------------------------
OBJECTIVE:

Create a configuration repository which can be used to hold an application's config variables.
The class is already created with the required methods in the src directory.  Build each method
and run vendor/bin/phpunit from the command line to test.

REQUIREMENTS:
Configuration values must be able to be optionally set through the constructor when the class
is instantiated.

Configuration values must be accessible through array access

An unlimited number of configuration values should be able to be set

The set and remove methods must be chainable

Explanations of what method is used for is included within the commentaries.


------------------------------------------------------------------
FRAMEWORKS USED:

1. PHPUnit 5.7.17 by Sebastian Bergmann and contributors.

Copyright (c) 2001-2017, Sebastian Bergmann <sebastian@phpunit.de>.
All rights reserved.

Redistribution and use in source and binary forms, with or without
modification, are permitted provided that the following conditions
are met:

 * Redistributions of source code must retain the above copyright
   notice, this list of conditions and the following disclaimer.

 * Redistributions in binary form must reproduce the above copyright
   notice, this list of conditions and the following disclaimer in
   the documentation and/or other materials provided with the
   distribution.

 * Neither the name of Sebastian Bergmann nor the names of his
   contributors may be used to endorse or promote products derived
   from this software without specific prior written permission.

2. Composer

Copyright (c) 2015 Nils Adermann, Jordi Boggiano

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software.