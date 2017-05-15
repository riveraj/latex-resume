# latex-resume
My resume, typeset in LaTeX using [moderncv](https://github.com/xdanaux/moderncv).

This project makes use of PHP and the Twig templating engine to build the resume from the `resume.yml` file.

To build the project, simply run Composer (assuming you have `composer` in your classpath):

```
composer install
```

You can use `robo` to build the PDF:

```
robo build:pdf
```

This obviously assumes that you have `robo` in your path. Alternatively, you can use the executable that Composer installs for you:

```
./vendor/bin/robo build:pdf
```

Thanks!