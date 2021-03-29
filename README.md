# WHMCS Guzzle

This repo is a fork of `guzzle/guzzle` branch `7.0`.

We have had to fork Guzzle to resolve conflicts with the stock Guzzle used in
WHMCS 7.10, which is version 5 (sigh) and the Guzzle used in much of our own
code and that of third-party libraries.

Given we can not change the version used in WHMCS 7.10 as the source code is
encrypted we have forked Guzzle to change its namespace and then re-import it
back into our projects. Doing this means that when the time comes to upgrade
to WHMCS 8.0 we can simply switch the Guzzle code used from our custom
namespace to the version then included with WHMCS.

# Issues with a fork

The main issue with using a fork is lack of support from the main repo. Should
you need to patch the fork with updates from the original Guzzle repo then you
can re-namespace by carrying out a search and replace like this:

`namespace GuzzleHttp` replace with `namespace KrystalGuzzle`

`use GuzzleHttp` replace with `use KrystalGuzzle`
