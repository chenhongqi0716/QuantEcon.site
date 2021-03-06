.. _julia_developers:

.. include:: julia_banner.raw

****************
Julia Developers
****************

We welcome submission of algorithms and high quality code on all topics
concerning quantitative economics. 

Less experienced developers who wish to get involved can help improve
documentation, contribute notebooks or work on smaller enhancements.  

A good place to start is by visiting the `project issue tracker
<https://github.com/QuantEcon/QuantEcon.jl/issues>`__

If you are new to open source development please consider reading :doc:`this
page <developer_resources>` first

General Information
==========================

As a programming language, ``Julia`` is still new and thus some aspects of the
language are still evolving as it matures. As a result there may be some
changes from time to time in styles and conventions. The upside is that it is
fast and quickly being adopted by the broader scientific computing community

The `Julia style guide <http://julia.readthedocs.org/en/latest/manual/style-guide/>`_ is a good
starting point for some Julia programming conventions 

Writing Documentation
======================

Julia is currently undergoing a decision process for standardization with
regards to documentation. `This issue
<https://github.com/JuliaLang/julia/pull/8791>`__ is tracking this discussion.
Once a decision has been made and formalized a QuantEcon style guide will be
updated to assist Julia contributions

Writing Tests
=============

One prerequisite for contributions to QuantEcon is that all functions and
methods should be paired with tests verifying that they are functioning
correctly. This type of `unit testing
<https://en.wikipedia.org/wiki/Unit_testing>`__ is almost universal across a
quality software projects. A guide to writing tests in ``Julia`` is currently
in work
