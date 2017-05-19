PHP library for the Ucam WebAuth (Raven) protocol
=================================================

The UcamWebauth PHP class provides an application agent for making
authentication requests to a UcamWebauth server (such as Raven) that 
can be called from PHP.
 
This could be useful if you wanted to embed authentication logic within a PHP
web application. If all you want to do is Raven-protect some PHP-processed
pages you'd probably be better using a mixture of container-managed and
application-managed security such as that described [in the main Raven
documentation](http://help.uis.cam.ac.uk/user-accounts-security/accounts-passwords/raven/webmasters). 
There's some additional information [about how authentication information can be accessed from
PHP](https://wiki.cam.ac.uk/raven/Accessing_authentication_information) in the
Raven Wiki.

**This PHP code is not part of the Raven service and is not
recommended or (officially) supported by UIS. It is believed to be
alpha-quality software (at best), it probably contain bugs, and is in
need of further development. However it could be a useful starting
point for anyone wanting to use Raven and PHP.**

Patches to this module are welcome which will be included as and when
time permits. UIS staff also occasionally correct serious bugs. The 
source for this module is available on GitHub at [https://github.com/cambridgeuniversity/ucam-webauth-php](https://github.com/cambridgeuniversity/ucam-webauth-php). Pull requests are welcome.

Note that versions of this library prior to 0.52 contained security
vulnerabilities - see the CHANGES file for details. Note that version
0.51 and later contain an incompatible change against earlier
versions: a securely-obtained host name must be supplied before
invoking the library functions. These problem also affected versions
of this library identified as 0.6, 0.61, and 0.62 that were
distributed only as part of Raven authentication support for phpBB3 in
early 2008.

This module is distributed under the terms of the GNU Lesser General
Public License and is currently minimally maintained by UIS Raven
Support (raven-support@ucs.cam.ac.uk).
