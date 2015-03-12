PHP library for the Ucam WebAuth (Raven) protocol
=================================================

The UcamWebauth PHP class provides an application agent for making
authentication requests to the UcamWebauth server that can be called
from PHP.
 
This could be useful if you wanted to embed authentication logic
within a PHP web application. If all you want to do is Raven-protect
some PHP-processed pages you'd probably be better using a mixture of
container-managed and application-managed security such as that
described [in the main Raven
documentation](http://www.ucs.cam.ac.uk/raven/webmasters). There's
some additional information [about how authentication information can
be accessed from
PHP](https://wiki.cam.ac.uk/raven/Accessing_authentication_information)
in the Raven Wiki.

**This PHP code is not part of the Raven service and is not
recommended or (officially) supported by UIS. It is believed to be
alpha-quality software (at best), it probably contain bugs, and is in
need of further development. However it could be a useful starting
point for anyone wanting to use Raven and PHP.**

Patches to this module are welcome which will be included as and when
time permits. UIS staff also occasionally correct serious bugs.

Note that versions of this library prior to 0.51 contained a security
vulnerability, in that they used the value of the 'Host' header of an
HTTP response to validate 'Authentication response' messages. The Host
header is under the control of a potential attacker and, by altering
it, an attacker might be able to replay an existing Authentication
Response message against a site that relies on the PHP library. This
problem is resolved in version 0.51, at the expense of an incompatible
change: a securely-obtained host name must be supplied before invoking
the library functions.

This problem also affected versions of this library identified as 0.6
and 0.61 that were distributed only as part of Raven authentication
support for phpBB3 in early 2008, but updated phpBB/Raven kits (with
V0.62, which provides the security fix) are available.

[NB Version 0.51 is not suitable as a replacement for 0.6/0.61, as the
phpBB modifications require newly-added functionality that doesn't
exist in 0.51. Conversely, the changes in 0.6/0.61/0.62 broke the old
interface (as provided by 0.51 and earlier), so they cannot be used
with software that uses the old interface. It is hoped that at some
point in the future, a unified version will support both the old and
new functionality.]

This module is distributed under the terms of the GNU Lesser General
Public License and is currently minimally maintained by UIS Raven
Support (raven-support@ucs.cam.ac.uk).
