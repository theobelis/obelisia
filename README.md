# Estructura del Proyecto: ObelisIA

```
ObelisIA/
├── .env
├── .gitignore
├── README.md
├── ads.txt
├── convert_img
│   ├── __init__.py
│   ├── admin.py
│   ├── apps.py
│   ├── migrations
│   │   └── __init__.py
│   ├── models.py
│   ├── static
│   │   └── convert_img
│   │       ├── css
│   │       │   └── style.css
│   │       └── js
│   │           ├── app.js
│   │           ├── config.js
│   │           ├── downloadManager.js
│   │           ├── fileHandler.js
│   │           ├── imageProcessing.js
│   │           ├── limitManager.js
│   │           ├── main.js
│   │           ├── state.js
│   │           ├── storage.js
│   │           └── uiUpdater.js
│   ├── templates
│   │   └── convert_img
│   │       └── convert.html
│   ├── tests.py
│   ├── urls.py
│   └── views.py
├── db.sqlite3
├── edit_img
│   ├── __init__.py
│   ├── admin.py
│   ├── apps.py
│   ├── migrations
│   │   └── __init__.py
│   ├── models.py
│   ├── static
│   │   └── edit_img
│   │       ├── css
│   │       │   └── style.css
│   │       └── js
│   │           ├── adjustments
│   │           │   └── colorAdjustments.js
│   │           ├── app.js
│   │           ├── canvas.js
│   │           ├── filters
│   │           │   ├── blurFilter.js
│   │           │   ├── filterManager.js
│   │           │   ├── grayscaleFilter.js
│   │           │   ├── invertFilter.js
│   │           │   ├── sepiaFilter.js
│   │           │   └── sharpenFilter.js
│   │           ├── history.js
│   │           ├── main.js
│   │           ├── tools
│   │           │   ├── brushTool.js
│   │           │   ├── cropTool.js
│   │           │   ├── eraserTool.js
│   │           │   ├── eyedropperTool.js
│   │           │   ├── textTool.js
│   │           │   └── toolManager.js
│   │           ├── ui.js
│   │           └── utils
│   │               └── constants.js
│   ├── templates
│   │   └── edit_img
│   │       └── editor.html
│   ├── tests.py
│   ├── urls.py
│   └── views.py
├── home
│   ├── convert-img
│   │   └── index.html
│   ├── edit-img
│   │   └── index.html
│   ├── ia-audio
│   │   └── index.html
│   ├── ia-img
│   │   └── index.html
│   ├── ia-text
│   │   └── index.html
│   └── index.html
├── ia_audio
│   ├── __init__.py
│   ├── admin.py
│   ├── apps.py
│   ├── migrations
│   │   └── __init__.py
│   ├── models.py
│   ├── static
│   │   └── ia_audio
│   │       ├── css
│   │       │   └── style.css
│   │       └── js
│   │           ├── aiService.js
│   │           ├── app.js
│   │           ├── config.js
│   │           ├── limitManager.js
│   │           ├── main.js
│   │           └── state.js
│   ├── templates
│   │   └── ia_audio
│   │       └── audio.html
│   ├── tests.py
│   ├── urls.py
│   └── views.py
├── ia_img
│   ├── __init__.py
│   ├── admin.py
│   ├── apps.py
│   ├── migrations
│   │   └── __init__.py
│   ├── models.py
│   ├── static
│   │   └── ia_img
│   │       ├── css
│   │       │   └── style.css
│   │       └── js
│   │           ├── aiService.js
│   │           ├── app.js
│   │           ├── config.js
│   │           ├── editorManager.js
│   │           ├── galleryManager.js
│   │           ├── imageProcessor.js
│   │           ├── main.js
│   │           ├── state.js
│   │           └── uiUpdater.js
│   ├── templates
│   │   └── ia_img
│   │       └── generator.html
│   ├── tests.py
│   ├── urls.py
│   └── views.py
├── ia_text
│   ├── __init__.py
│   ├── admin.py
│   ├── apps.py
│   ├── migrations
│   │   └── __init__.py
│   ├── models.py
│   ├── static
│   │   └── ia_text
│   │       ├── css
│   │       │   └── style.css
│   │       └── js
│   │           ├── aiService.js
│   │           ├── app.js
│   │           ├── audioPlayer.js
│   │           ├── clipboardDownload.js
│   │           ├── config.js
│   │           ├── historyManager.js
│   │           ├── limitManager.js
│   │           ├── main.js
│   │           ├── state.js
│   │           ├── storage.js
│   │           ├── textFormatter.js
│   │           └── voiceManager.js
│   ├── templates
│   │   └── ia_text
│   │       └── generator.html
│   ├── tests.py
│   ├── urls.py
│   └── views.py
├── manage.py
├── obelis_project
│   ├── __init__.py
│   ├── asgi.py
│   ├── settings.py
│   ├── urls.py
│   └── wsgi.py
├── package-lock.json
├── package.json
├── pages
│   ├── __init__.py
│   ├── admin.py
│   ├── apps.py
│   ├── migrations
│   │   └── __init__.py
│   ├── models.py
│   ├── templates
│   │   └── pages
│   │       └── home.html
│   ├── tests.py
│   ├── urls.py
│   └── views.py
├── reporte_datos.json
├── requirements.txt
├── static
│   ├── css
│   │   ├── main.css
│   │   ├── style.css
│   │   └── styles
│   │       ├── _about-section.css
│   │       ├── _base.css
│   │       ├── _buttons.css
│   │       ├── _editor.css
│   │       ├── _faq-section.css
│   │       ├── _forms.css
│   │       ├── _global-ad-banner.css
│   │       ├── _global-modals.css
│   │       ├── _navbar.css
│   │       ├── _responsive.css
│   │       └── _utilities.css
│   ├── img
│   │   ├── El Limpiador y el Eco Silencioso.png
│   │   ├── Pocoyo.gif
│   │   ├── banner.webp
│   │   ├── banner2.webp
│   │   ├── favicon.ico
│   │   ├── imagen-generada.png
│   │   ├── logo-1280x720.jpg
│   │   ├── logo.jpg
│   │   ├── logo.webp
│   │   ├── marca_de_agua.jpg
│   │   └── marca_de_agua.webp
│   └── js
│       ├── components
│       │   ├── carousel.js
│       │   ├── faq.js
│       │   ├── modals.js
│       │   └── navbar.js
│       ├── global.js
│       ├── home-app.js
│       └── utils
│           └── helpers.js
├── templates
│   └── base.html
└── venv
    ├── bin
    │   ├── Activate.ps1
    │   ├── activate
    │   ├── activate.csh
    │   ├── activate.fish
    │   ├── django-admin
    │   ├── flask
    │   ├── pip
    │   ├── pip3
    │   ├── pip3.11
    │   ├── python
    │   ├── python3
    │   ├── python3.11
    │   ├── sqlformat
    │   └── watchmedo
    ├── include
    │   └── python3.11
    ├── lib
    │   └── python3.11
    │       └── site-packages
    │           ├── MarkupSafe-3.0.2.dist-info
    │           │   ├── INSTALLER
    │           │   ├── LICENSE.txt
    │           │   ├── METADATA
    │           │   ├── RECORD
    │           │   ├── WHEEL
    │           │   └── top_level.txt
    │           ├── _distutils_hack
    │           │   ├── __init__.py
    │           │   └── override.py
    │           ├── asgiref
    │           │   ├── __init__.py
    │           │   ├── compatibility.py
    │           │   ├── current_thread_executor.py
    │           │   ├── local.py
    │           │   ├── py.typed
    │           │   ├── server.py
    │           │   ├── sync.py
    │           │   ├── testing.py
    │           │   ├── timeout.py
    │           │   ├── typing.py
    │           │   └── wsgi.py
    │           ├── asgiref-3.9.0.dist-info
    │           │   ├── INSTALLER
    │           │   ├── METADATA
    │           │   ├── RECORD
    │           │   ├── WHEEL
    │           │   ├── licenses
    │           │   │   └── LICENSE
    │           │   └── top_level.txt
    │           ├── blinker
    │           │   ├── __init__.py
    │           │   ├── _utilities.py
    │           │   ├── base.py
    │           │   └── py.typed
    │           ├── blinker-1.9.0.dist-info
    │           │   ├── INSTALLER
    │           │   ├── LICENSE.txt
    │           │   ├── METADATA
    │           │   ├── RECORD
    │           │   └── WHEEL
    │           ├── click
    │           │   ├── __init__.py
    │           │   ├── _compat.py
    │           │   ├── _termui_impl.py
    │           │   ├── _textwrap.py
    │           │   ├── _winconsole.py
    │           │   ├── core.py
    │           │   ├── decorators.py
    │           │   ├── exceptions.py
    │           │   ├── formatting.py
    │           │   ├── globals.py
    │           │   ├── parser.py
    │           │   ├── py.typed
    │           │   ├── shell_completion.py
    │           │   ├── termui.py
    │           │   ├── testing.py
    │           │   ├── types.py
    │           │   └── utils.py
    │           ├── click-8.2.1.dist-info
    │           │   ├── INSTALLER
    │           │   ├── METADATA
    │           │   ├── RECORD
    │           │   ├── WHEEL
    │           │   └── licenses
    │           │       └── LICENSE.txt
    │           ├── distutils-precedence.pth
    │           ├── django
    │           │   ├── __init__.py
    │           │   ├── __main__.py
    │           │   ├── apps
    │           │   │   ├── __init__.py
    │           │   │   ├── config.py
    │           │   │   └── registry.py
    │           │   ├── conf
    │           │   │   ├── __init__.py
    │           │   │   ├── app_template
    │           │   │   │   ├── __init__.py-tpl
    │           │   │   │   ├── admin.py-tpl
    │           │   │   │   ├── apps.py-tpl
    │           │   │   │   ├── migrations
    │           │   │   │   │   └── __init__.py-tpl
    │           │   │   │   ├── models.py-tpl
    │           │   │   │   ├── tests.py-tpl
    │           │   │   │   └── views.py-tpl
    │           │   │   ├── global_settings.py
    │           │   │   ├── locale
    │           │   │   │   ├── __init__.py
    │           │   │   │   ├── af
    │           │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │       ├── django.mo
    │           │   │   │   │       └── django.po
    │           │   │   │   ├── ar
    │           │   │   │   │   ├── LC_MESSAGES
    │           │   │   │   │   │   ├── django.mo
    │           │   │   │   │   │   └── django.po
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   └── formats.py
    │           │   │   │   ├── ar_DZ
    │           │   │   │   │   ├── LC_MESSAGES
    │           │   │   │   │   │   ├── django.mo
    │           │   │   │   │   │   └── django.po
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   └── formats.py
    │           │   │   │   ├── ast
    │           │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │       ├── django.mo
    │           │   │   │   │       └── django.po
    │           │   │   │   ├── az
    │           │   │   │   │   ├── LC_MESSAGES
    │           │   │   │   │   │   ├── django.mo
    │           │   │   │   │   │   └── django.po
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   └── formats.py
    │           │   │   │   ├── be
    │           │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │       ├── django.mo
    │           │   │   │   │       └── django.po
    │           │   │   │   ├── bg
    │           │   │   │   │   ├── LC_MESSAGES
    │           │   │   │   │   │   ├── django.mo
    │           │   │   │   │   │   └── django.po
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   └── formats.py
    │           │   │   │   ├── bn
    │           │   │   │   │   ├── LC_MESSAGES
    │           │   │   │   │   │   ├── django.mo
    │           │   │   │   │   │   └── django.po
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   └── formats.py
    │           │   │   │   ├── br
    │           │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │       ├── django.mo
    │           │   │   │   │       └── django.po
    │           │   │   │   ├── bs
    │           │   │   │   │   ├── LC_MESSAGES
    │           │   │   │   │   │   ├── django.mo
    │           │   │   │   │   │   └── django.po
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   └── formats.py
    │           │   │   │   ├── ca
    │           │   │   │   │   ├── LC_MESSAGES
    │           │   │   │   │   │   ├── django.mo
    │           │   │   │   │   │   └── django.po
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   └── formats.py
    │           │   │   │   ├── ckb
    │           │   │   │   │   ├── LC_MESSAGES
    │           │   │   │   │   │   ├── django.mo
    │           │   │   │   │   │   └── django.po
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   └── formats.py
    │           │   │   │   ├── cs
    │           │   │   │   │   ├── LC_MESSAGES
    │           │   │   │   │   │   ├── django.mo
    │           │   │   │   │   │   └── django.po
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   └── formats.py
    │           │   │   │   ├── cy
    │           │   │   │   │   ├── LC_MESSAGES
    │           │   │   │   │   │   ├── django.mo
    │           │   │   │   │   │   └── django.po
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   └── formats.py
    │           │   │   │   ├── da
    │           │   │   │   │   ├── LC_MESSAGES
    │           │   │   │   │   │   ├── django.mo
    │           │   │   │   │   │   └── django.po
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   └── formats.py
    │           │   │   │   ├── de
    │           │   │   │   │   ├── LC_MESSAGES
    │           │   │   │   │   │   ├── django.mo
    │           │   │   │   │   │   └── django.po
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   └── formats.py
    │           │   │   │   ├── de_CH
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   └── formats.py
    │           │   │   │   ├── dsb
    │           │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │       ├── django.mo
    │           │   │   │   │       └── django.po
    │           │   │   │   ├── el
    │           │   │   │   │   ├── LC_MESSAGES
    │           │   │   │   │   │   ├── django.mo
    │           │   │   │   │   │   └── django.po
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   └── formats.py
    │           │   │   │   ├── en
    │           │   │   │   │   ├── LC_MESSAGES
    │           │   │   │   │   │   ├── django.mo
    │           │   │   │   │   │   └── django.po
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   └── formats.py
    │           │   │   │   ├── en_AU
    │           │   │   │   │   ├── LC_MESSAGES
    │           │   │   │   │   │   ├── django.mo
    │           │   │   │   │   │   └── django.po
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   └── formats.py
    │           │   │   │   ├── en_CA
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   └── formats.py
    │           │   │   │   ├── en_GB
    │           │   │   │   │   ├── LC_MESSAGES
    │           │   │   │   │   │   ├── django.mo
    │           │   │   │   │   │   └── django.po
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   └── formats.py
    │           │   │   │   ├── en_IE
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   └── formats.py
    │           │   │   │   ├── eo
    │           │   │   │   │   ├── LC_MESSAGES
    │           │   │   │   │   │   ├── django.mo
    │           │   │   │   │   │   └── django.po
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   └── formats.py
    │           │   │   │   ├── es
    │           │   │   │   │   ├── LC_MESSAGES
    │           │   │   │   │   │   ├── django.mo
    │           │   │   │   │   │   └── django.po
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   └── formats.py
    │           │   │   │   ├── es_AR
    │           │   │   │   │   ├── LC_MESSAGES
    │           │   │   │   │   │   ├── django.mo
    │           │   │   │   │   │   └── django.po
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   └── formats.py
    │           │   │   │   ├── es_CO
    │           │   │   │   │   ├── LC_MESSAGES
    │           │   │   │   │   │   ├── django.mo
    │           │   │   │   │   │   └── django.po
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   └── formats.py
    │           │   │   │   ├── es_MX
    │           │   │   │   │   ├── LC_MESSAGES
    │           │   │   │   │   │   ├── django.mo
    │           │   │   │   │   │   └── django.po
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   └── formats.py
    │           │   │   │   ├── es_NI
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   └── formats.py
    │           │   │   │   ├── es_PR
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   └── formats.py
    │           │   │   │   ├── es_VE
    │           │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │       ├── django.mo
    │           │   │   │   │       └── django.po
    │           │   │   │   ├── et
    │           │   │   │   │   ├── LC_MESSAGES
    │           │   │   │   │   │   ├── django.mo
    │           │   │   │   │   │   └── django.po
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   └── formats.py
    │           │   │   │   ├── eu
    │           │   │   │   │   ├── LC_MESSAGES
    │           │   │   │   │   │   ├── django.mo
    │           │   │   │   │   │   └── django.po
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   └── formats.py
    │           │   │   │   ├── fa
    │           │   │   │   │   ├── LC_MESSAGES
    │           │   │   │   │   │   ├── django.mo
    │           │   │   │   │   │   └── django.po
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   └── formats.py
    │           │   │   │   ├── fi
    │           │   │   │   │   ├── LC_MESSAGES
    │           │   │   │   │   │   ├── django.mo
    │           │   │   │   │   │   └── django.po
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   └── formats.py
    │           │   │   │   ├── fr
    │           │   │   │   │   ├── LC_MESSAGES
    │           │   │   │   │   │   ├── django.mo
    │           │   │   │   │   │   └── django.po
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   └── formats.py
    │           │   │   │   ├── fr_BE
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   └── formats.py
    │           │   │   │   ├── fr_CA
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   └── formats.py
    │           │   │   │   ├── fr_CH
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   └── formats.py
    │           │   │   │   ├── fy
    │           │   │   │   │   ├── LC_MESSAGES
    │           │   │   │   │   │   ├── django.mo
    │           │   │   │   │   │   └── django.po
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   └── formats.py
    │           │   │   │   ├── ga
    │           │   │   │   │   ├── LC_MESSAGES
    │           │   │   │   │   │   ├── django.mo
    │           │   │   │   │   │   └── django.po
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   └── formats.py
    │           │   │   │   ├── gd
    │           │   │   │   │   ├── LC_MESSAGES
    │           │   │   │   │   │   ├── django.mo
    │           │   │   │   │   │   └── django.po
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   └── formats.py
    │           │   │   │   ├── gl
    │           │   │   │   │   ├── LC_MESSAGES
    │           │   │   │   │   │   ├── django.mo
    │           │   │   │   │   │   └── django.po
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   └── formats.py
    │           │   │   │   ├── he
    │           │   │   │   │   ├── LC_MESSAGES
    │           │   │   │   │   │   ├── django.mo
    │           │   │   │   │   │   └── django.po
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   └── formats.py
    │           │   │   │   ├── hi
    │           │   │   │   │   ├── LC_MESSAGES
    │           │   │   │   │   │   ├── django.mo
    │           │   │   │   │   │   └── django.po
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   └── formats.py
    │           │   │   │   ├── hr
    │           │   │   │   │   ├── LC_MESSAGES
    │           │   │   │   │   │   ├── django.mo
    │           │   │   │   │   │   └── django.po
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   └── formats.py
    │           │   │   │   ├── hsb
    │           │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │       ├── django.mo
    │           │   │   │   │       └── django.po
    │           │   │   │   ├── hu
    │           │   │   │   │   ├── LC_MESSAGES
    │           │   │   │   │   │   ├── django.mo
    │           │   │   │   │   │   └── django.po
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   └── formats.py
    │           │   │   │   ├── hy
    │           │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │       ├── django.mo
    │           │   │   │   │       └── django.po
    │           │   │   │   ├── ia
    │           │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │       ├── django.mo
    │           │   │   │   │       └── django.po
    │           │   │   │   ├── id
    │           │   │   │   │   ├── LC_MESSAGES
    │           │   │   │   │   │   ├── django.mo
    │           │   │   │   │   │   └── django.po
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   └── formats.py
    │           │   │   │   ├── ig
    │           │   │   │   │   ├── LC_MESSAGES
    │           │   │   │   │   │   ├── django.mo
    │           │   │   │   │   │   └── django.po
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   └── formats.py
    │           │   │   │   ├── io
    │           │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │       ├── django.mo
    │           │   │   │   │       └── django.po
    │           │   │   │   ├── is
    │           │   │   │   │   ├── LC_MESSAGES
    │           │   │   │   │   │   ├── django.mo
    │           │   │   │   │   │   └── django.po
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   └── formats.py
    │           │   │   │   ├── it
    │           │   │   │   │   ├── LC_MESSAGES
    │           │   │   │   │   │   ├── django.mo
    │           │   │   │   │   │   └── django.po
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   └── formats.py
    │           │   │   │   ├── ja
    │           │   │   │   │   ├── LC_MESSAGES
    │           │   │   │   │   │   ├── django.mo
    │           │   │   │   │   │   └── django.po
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   └── formats.py
    │           │   │   │   ├── ka
    │           │   │   │   │   ├── LC_MESSAGES
    │           │   │   │   │   │   ├── django.mo
    │           │   │   │   │   │   └── django.po
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   └── formats.py
    │           │   │   │   ├── kab
    │           │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │       ├── django.mo
    │           │   │   │   │       └── django.po
    │           │   │   │   ├── kk
    │           │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │       ├── django.mo
    │           │   │   │   │       └── django.po
    │           │   │   │   ├── km
    │           │   │   │   │   ├── LC_MESSAGES
    │           │   │   │   │   │   ├── django.mo
    │           │   │   │   │   │   └── django.po
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   └── formats.py
    │           │   │   │   ├── kn
    │           │   │   │   │   ├── LC_MESSAGES
    │           │   │   │   │   │   ├── django.mo
    │           │   │   │   │   │   └── django.po
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   └── formats.py
    │           │   │   │   ├── ko
    │           │   │   │   │   ├── LC_MESSAGES
    │           │   │   │   │   │   ├── django.mo
    │           │   │   │   │   │   └── django.po
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   └── formats.py
    │           │   │   │   ├── ky
    │           │   │   │   │   ├── LC_MESSAGES
    │           │   │   │   │   │   ├── django.mo
    │           │   │   │   │   │   └── django.po
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   └── formats.py
    │           │   │   │   ├── lb
    │           │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │       ├── django.mo
    │           │   │   │   │       └── django.po
    │           │   │   │   ├── lt
    │           │   │   │   │   ├── LC_MESSAGES
    │           │   │   │   │   │   ├── django.mo
    │           │   │   │   │   │   └── django.po
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   └── formats.py
    │           │   │   │   ├── lv
    │           │   │   │   │   ├── LC_MESSAGES
    │           │   │   │   │   │   ├── django.mo
    │           │   │   │   │   │   └── django.po
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   └── formats.py
    │           │   │   │   ├── mk
    │           │   │   │   │   ├── LC_MESSAGES
    │           │   │   │   │   │   ├── django.mo
    │           │   │   │   │   │   └── django.po
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   └── formats.py
    │           │   │   │   ├── ml
    │           │   │   │   │   ├── LC_MESSAGES
    │           │   │   │   │   │   ├── django.mo
    │           │   │   │   │   │   └── django.po
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   └── formats.py
    │           │   │   │   ├── mn
    │           │   │   │   │   ├── LC_MESSAGES
    │           │   │   │   │   │   ├── django.mo
    │           │   │   │   │   │   └── django.po
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   └── formats.py
    │           │   │   │   ├── mr
    │           │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │       ├── django.mo
    │           │   │   │   │       └── django.po
    │           │   │   │   ├── ms
    │           │   │   │   │   ├── LC_MESSAGES
    │           │   │   │   │   │   ├── django.mo
    │           │   │   │   │   │   └── django.po
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   └── formats.py
    │           │   │   │   ├── my
    │           │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │       ├── django.mo
    │           │   │   │   │       └── django.po
    │           │   │   │   ├── nb
    │           │   │   │   │   ├── LC_MESSAGES
    │           │   │   │   │   │   ├── django.mo
    │           │   │   │   │   │   └── django.po
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   └── formats.py
    │           │   │   │   ├── ne
    │           │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │       ├── django.mo
    │           │   │   │   │       └── django.po
    │           │   │   │   ├── nl
    │           │   │   │   │   ├── LC_MESSAGES
    │           │   │   │   │   │   ├── django.mo
    │           │   │   │   │   │   └── django.po
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   └── formats.py
    │           │   │   │   ├── nn
    │           │   │   │   │   ├── LC_MESSAGES
    │           │   │   │   │   │   ├── django.mo
    │           │   │   │   │   │   └── django.po
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   └── formats.py
    │           │   │   │   ├── os
    │           │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │       ├── django.mo
    │           │   │   │   │       └── django.po
    │           │   │   │   ├── pa
    │           │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │       ├── django.mo
    │           │   │   │   │       └── django.po
    │           │   │   │   ├── pl
    │           │   │   │   │   ├── LC_MESSAGES
    │           │   │   │   │   │   ├── django.mo
    │           │   │   │   │   │   └── django.po
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   └── formats.py
    │           │   │   │   ├── pt
    │           │   │   │   │   ├── LC_MESSAGES
    │           │   │   │   │   │   ├── django.mo
    │           │   │   │   │   │   └── django.po
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   └── formats.py
    │           │   │   │   ├── pt_BR
    │           │   │   │   │   ├── LC_MESSAGES
    │           │   │   │   │   │   ├── django.mo
    │           │   │   │   │   │   └── django.po
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   └── formats.py
    │           │   │   │   ├── ro
    │           │   │   │   │   ├── LC_MESSAGES
    │           │   │   │   │   │   ├── django.mo
    │           │   │   │   │   │   └── django.po
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   └── formats.py
    │           │   │   │   ├── ru
    │           │   │   │   │   ├── LC_MESSAGES
    │           │   │   │   │   │   ├── django.mo
    │           │   │   │   │   │   └── django.po
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   └── formats.py
    │           │   │   │   ├── sk
    │           │   │   │   │   ├── LC_MESSAGES
    │           │   │   │   │   │   ├── django.mo
    │           │   │   │   │   │   └── django.po
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   └── formats.py
    │           │   │   │   ├── sl
    │           │   │   │   │   ├── LC_MESSAGES
    │           │   │   │   │   │   ├── django.mo
    │           │   │   │   │   │   └── django.po
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   └── formats.py
    │           │   │   │   ├── sq
    │           │   │   │   │   ├── LC_MESSAGES
    │           │   │   │   │   │   ├── django.mo
    │           │   │   │   │   │   └── django.po
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   └── formats.py
    │           │   │   │   ├── sr
    │           │   │   │   │   ├── LC_MESSAGES
    │           │   │   │   │   │   ├── django.mo
    │           │   │   │   │   │   └── django.po
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   └── formats.py
    │           │   │   │   ├── sr_Latn
    │           │   │   │   │   ├── LC_MESSAGES
    │           │   │   │   │   │   ├── django.mo
    │           │   │   │   │   │   └── django.po
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   └── formats.py
    │           │   │   │   ├── sv
    │           │   │   │   │   ├── LC_MESSAGES
    │           │   │   │   │   │   ├── django.mo
    │           │   │   │   │   │   └── django.po
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   └── formats.py
    │           │   │   │   ├── sw
    │           │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │       ├── django.mo
    │           │   │   │   │       └── django.po
    │           │   │   │   ├── ta
    │           │   │   │   │   ├── LC_MESSAGES
    │           │   │   │   │   │   ├── django.mo
    │           │   │   │   │   │   └── django.po
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   └── formats.py
    │           │   │   │   ├── te
    │           │   │   │   │   ├── LC_MESSAGES
    │           │   │   │   │   │   ├── django.mo
    │           │   │   │   │   │   └── django.po
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   └── formats.py
    │           │   │   │   ├── tg
    │           │   │   │   │   ├── LC_MESSAGES
    │           │   │   │   │   │   ├── django.mo
    │           │   │   │   │   │   └── django.po
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   └── formats.py
    │           │   │   │   ├── th
    │           │   │   │   │   ├── LC_MESSAGES
    │           │   │   │   │   │   ├── django.mo
    │           │   │   │   │   │   └── django.po
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   └── formats.py
    │           │   │   │   ├── tk
    │           │   │   │   │   ├── LC_MESSAGES
    │           │   │   │   │   │   ├── django.mo
    │           │   │   │   │   │   └── django.po
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   └── formats.py
    │           │   │   │   ├── tr
    │           │   │   │   │   ├── LC_MESSAGES
    │           │   │   │   │   │   ├── django.mo
    │           │   │   │   │   │   └── django.po
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   └── formats.py
    │           │   │   │   ├── tt
    │           │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │       ├── django.mo
    │           │   │   │   │       └── django.po
    │           │   │   │   ├── udm
    │           │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │       ├── django.mo
    │           │   │   │   │       └── django.po
    │           │   │   │   ├── ug
    │           │   │   │   │   ├── LC_MESSAGES
    │           │   │   │   │   │   ├── django.mo
    │           │   │   │   │   │   └── django.po
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   └── formats.py
    │           │   │   │   ├── uk
    │           │   │   │   │   ├── LC_MESSAGES
    │           │   │   │   │   │   ├── django.mo
    │           │   │   │   │   │   └── django.po
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   └── formats.py
    │           │   │   │   ├── ur
    │           │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │       ├── django.mo
    │           │   │   │   │       └── django.po
    │           │   │   │   ├── uz
    │           │   │   │   │   ├── LC_MESSAGES
    │           │   │   │   │   │   ├── django.mo
    │           │   │   │   │   │   └── django.po
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   └── formats.py
    │           │   │   │   ├── vi
    │           │   │   │   │   ├── LC_MESSAGES
    │           │   │   │   │   │   ├── django.mo
    │           │   │   │   │   │   └── django.po
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   └── formats.py
    │           │   │   │   ├── zh_Hans
    │           │   │   │   │   ├── LC_MESSAGES
    │           │   │   │   │   │   ├── django.mo
    │           │   │   │   │   │   └── django.po
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   └── formats.py
    │           │   │   │   └── zh_Hant
    │           │   │   │       ├── LC_MESSAGES
    │           │   │   │       │   ├── django.mo
    │           │   │   │       │   └── django.po
    │           │   │   │       ├── __init__.py
    │           │   │   │       └── formats.py
    │           │   │   ├── project_template
    │           │   │   │   ├── manage.py-tpl
    │           │   │   │   └── project_name
    │           │   │   │       ├── __init__.py-tpl
    │           │   │   │       ├── asgi.py-tpl
    │           │   │   │       ├── settings.py-tpl
    │           │   │   │       ├── urls.py-tpl
    │           │   │   │       └── wsgi.py-tpl
    │           │   │   └── urls
    │           │   │       ├── __init__.py
    │           │   │       ├── i18n.py
    │           │   │       └── static.py
    │           │   ├── contrib
    │           │   │   ├── __init__.py
    │           │   │   ├── admin
    │           │   │   │   ├── __init__.py
    │           │   │   │   ├── actions.py
    │           │   │   │   ├── apps.py
    │           │   │   │   ├── checks.py
    │           │   │   │   ├── decorators.py
    │           │   │   │   ├── exceptions.py
    │           │   │   │   ├── filters.py
    │           │   │   │   ├── forms.py
    │           │   │   │   ├── helpers.py
    │           │   │   │   ├── locale
    │           │   │   │   │   ├── af
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       ├── django.po
    │           │   │   │   │   │       ├── djangojs.mo
    │           │   │   │   │   │       └── djangojs.po
    │           │   │   │   │   ├── am
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ar
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       ├── django.po
    │           │   │   │   │   │       ├── djangojs.mo
    │           │   │   │   │   │       └── djangojs.po
    │           │   │   │   │   ├── ar_DZ
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       ├── django.po
    │           │   │   │   │   │       ├── djangojs.mo
    │           │   │   │   │   │       └── djangojs.po
    │           │   │   │   │   ├── ast
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       ├── django.po
    │           │   │   │   │   │       ├── djangojs.mo
    │           │   │   │   │   │       └── djangojs.po
    │           │   │   │   │   ├── az
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       ├── django.po
    │           │   │   │   │   │       ├── djangojs.mo
    │           │   │   │   │   │       └── djangojs.po
    │           │   │   │   │   ├── be
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       ├── django.po
    │           │   │   │   │   │       ├── djangojs.mo
    │           │   │   │   │   │       └── djangojs.po
    │           │   │   │   │   ├── bg
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       ├── django.po
    │           │   │   │   │   │       ├── djangojs.mo
    │           │   │   │   │   │       └── djangojs.po
    │           │   │   │   │   ├── bn
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       ├── django.po
    │           │   │   │   │   │       ├── djangojs.mo
    │           │   │   │   │   │       └── djangojs.po
    │           │   │   │   │   ├── br
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       ├── django.po
    │           │   │   │   │   │       ├── djangojs.mo
    │           │   │   │   │   │       └── djangojs.po
    │           │   │   │   │   ├── bs
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       ├── django.po
    │           │   │   │   │   │       ├── djangojs.mo
    │           │   │   │   │   │       └── djangojs.po
    │           │   │   │   │   ├── ca
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       ├── django.po
    │           │   │   │   │   │       ├── djangojs.mo
    │           │   │   │   │   │       └── djangojs.po
    │           │   │   │   │   ├── ckb
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       ├── django.po
    │           │   │   │   │   │       ├── djangojs.mo
    │           │   │   │   │   │       └── djangojs.po
    │           │   │   │   │   ├── cs
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       ├── django.po
    │           │   │   │   │   │       ├── djangojs.mo
    │           │   │   │   │   │       └── djangojs.po
    │           │   │   │   │   ├── cy
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       ├── django.po
    │           │   │   │   │   │       ├── djangojs.mo
    │           │   │   │   │   │       └── djangojs.po
    │           │   │   │   │   ├── da
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       ├── django.po
    │           │   │   │   │   │       ├── djangojs.mo
    │           │   │   │   │   │       └── djangojs.po
    │           │   │   │   │   ├── de
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       ├── django.po
    │           │   │   │   │   │       ├── djangojs.mo
    │           │   │   │   │   │       └── djangojs.po
    │           │   │   │   │   ├── dsb
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       ├── django.po
    │           │   │   │   │   │       ├── djangojs.mo
    │           │   │   │   │   │       └── djangojs.po
    │           │   │   │   │   ├── el
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       ├── django.po
    │           │   │   │   │   │       ├── djangojs.mo
    │           │   │   │   │   │       └── djangojs.po
    │           │   │   │   │   ├── en
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       ├── django.po
    │           │   │   │   │   │       ├── djangojs.mo
    │           │   │   │   │   │       └── djangojs.po
    │           │   │   │   │   ├── en_AU
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       ├── django.po
    │           │   │   │   │   │       ├── djangojs.mo
    │           │   │   │   │   │       └── djangojs.po
    │           │   │   │   │   ├── en_GB
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       ├── django.po
    │           │   │   │   │   │       ├── djangojs.mo
    │           │   │   │   │   │       └── djangojs.po
    │           │   │   │   │   ├── eo
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       ├── django.po
    │           │   │   │   │   │       ├── djangojs.mo
    │           │   │   │   │   │       └── djangojs.po
    │           │   │   │   │   ├── es
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       ├── django.po
    │           │   │   │   │   │       ├── djangojs.mo
    │           │   │   │   │   │       └── djangojs.po
    │           │   │   │   │   ├── es_AR
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       ├── django.po
    │           │   │   │   │   │       ├── djangojs.mo
    │           │   │   │   │   │       └── djangojs.po
    │           │   │   │   │   ├── es_CO
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       ├── django.po
    │           │   │   │   │   │       ├── djangojs.mo
    │           │   │   │   │   │       └── djangojs.po
    │           │   │   │   │   ├── es_MX
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       ├── django.po
    │           │   │   │   │   │       ├── djangojs.mo
    │           │   │   │   │   │       └── djangojs.po
    │           │   │   │   │   ├── es_VE
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       ├── django.po
    │           │   │   │   │   │       ├── djangojs.mo
    │           │   │   │   │   │       └── djangojs.po
    │           │   │   │   │   ├── et
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       ├── django.po
    │           │   │   │   │   │       ├── djangojs.mo
    │           │   │   │   │   │       └── djangojs.po
    │           │   │   │   │   ├── eu
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       ├── django.po
    │           │   │   │   │   │       ├── djangojs.mo
    │           │   │   │   │   │       └── djangojs.po
    │           │   │   │   │   ├── fa
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       ├── django.po
    │           │   │   │   │   │       ├── djangojs.mo
    │           │   │   │   │   │       └── djangojs.po
    │           │   │   │   │   ├── fi
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       ├── django.po
    │           │   │   │   │   │       ├── djangojs.mo
    │           │   │   │   │   │       └── djangojs.po
    │           │   │   │   │   ├── fr
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       ├── django.po
    │           │   │   │   │   │       ├── djangojs.mo
    │           │   │   │   │   │       └── djangojs.po
    │           │   │   │   │   ├── fy
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       ├── django.po
    │           │   │   │   │   │       ├── djangojs.mo
    │           │   │   │   │   │       └── djangojs.po
    │           │   │   │   │   ├── ga
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       ├── django.po
    │           │   │   │   │   │       ├── djangojs.mo
    │           │   │   │   │   │       └── djangojs.po
    │           │   │   │   │   ├── gd
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       ├── django.po
    │           │   │   │   │   │       ├── djangojs.mo
    │           │   │   │   │   │       └── djangojs.po
    │           │   │   │   │   ├── gl
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       ├── django.po
    │           │   │   │   │   │       ├── djangojs.mo
    │           │   │   │   │   │       └── djangojs.po
    │           │   │   │   │   ├── he
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       ├── django.po
    │           │   │   │   │   │       ├── djangojs.mo
    │           │   │   │   │   │       └── djangojs.po
    │           │   │   │   │   ├── hi
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       ├── django.po
    │           │   │   │   │   │       ├── djangojs.mo
    │           │   │   │   │   │       └── djangojs.po
    │           │   │   │   │   ├── hr
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       ├── django.po
    │           │   │   │   │   │       ├── djangojs.mo
    │           │   │   │   │   │       └── djangojs.po
    │           │   │   │   │   ├── hsb
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       ├── django.po
    │           │   │   │   │   │       ├── djangojs.mo
    │           │   │   │   │   │       └── djangojs.po
    │           │   │   │   │   ├── hu
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       ├── django.po
    │           │   │   │   │   │       ├── djangojs.mo
    │           │   │   │   │   │       └── djangojs.po
    │           │   │   │   │   ├── hy
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       ├── django.po
    │           │   │   │   │   │       ├── djangojs.mo
    │           │   │   │   │   │       └── djangojs.po
    │           │   │   │   │   ├── ia
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       ├── django.po
    │           │   │   │   │   │       ├── djangojs.mo
    │           │   │   │   │   │       └── djangojs.po
    │           │   │   │   │   ├── id
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       ├── django.po
    │           │   │   │   │   │       ├── djangojs.mo
    │           │   │   │   │   │       └── djangojs.po
    │           │   │   │   │   ├── io
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       ├── django.po
    │           │   │   │   │   │       ├── djangojs.mo
    │           │   │   │   │   │       └── djangojs.po
    │           │   │   │   │   ├── is
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       ├── django.po
    │           │   │   │   │   │       ├── djangojs.mo
    │           │   │   │   │   │       └── djangojs.po
    │           │   │   │   │   ├── it
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       ├── django.po
    │           │   │   │   │   │       ├── djangojs.mo
    │           │   │   │   │   │       └── djangojs.po
    │           │   │   │   │   ├── ja
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       ├── django.po
    │           │   │   │   │   │       ├── djangojs.mo
    │           │   │   │   │   │       └── djangojs.po
    │           │   │   │   │   ├── ka
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       ├── django.po
    │           │   │   │   │   │       ├── djangojs.mo
    │           │   │   │   │   │       └── djangojs.po
    │           │   │   │   │   ├── kab
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       ├── django.po
    │           │   │   │   │   │       ├── djangojs.mo
    │           │   │   │   │   │       └── djangojs.po
    │           │   │   │   │   ├── kk
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       ├── django.po
    │           │   │   │   │   │       ├── djangojs.mo
    │           │   │   │   │   │       └── djangojs.po
    │           │   │   │   │   ├── km
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       ├── django.po
    │           │   │   │   │   │       ├── djangojs.mo
    │           │   │   │   │   │       └── djangojs.po
    │           │   │   │   │   ├── kn
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       ├── django.po
    │           │   │   │   │   │       ├── djangojs.mo
    │           │   │   │   │   │       └── djangojs.po
    │           │   │   │   │   ├── ko
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       ├── django.po
    │           │   │   │   │   │       ├── djangojs.mo
    │           │   │   │   │   │       └── djangojs.po
    │           │   │   │   │   ├── ky
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       ├── django.po
    │           │   │   │   │   │       ├── djangojs.mo
    │           │   │   │   │   │       └── djangojs.po
    │           │   │   │   │   ├── lb
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       ├── django.po
    │           │   │   │   │   │       ├── djangojs.mo
    │           │   │   │   │   │       └── djangojs.po
    │           │   │   │   │   ├── lt
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       ├── django.po
    │           │   │   │   │   │       ├── djangojs.mo
    │           │   │   │   │   │       └── djangojs.po
    │           │   │   │   │   ├── lv
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       ├── django.po
    │           │   │   │   │   │       ├── djangojs.mo
    │           │   │   │   │   │       └── djangojs.po
    │           │   │   │   │   ├── mk
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       ├── django.po
    │           │   │   │   │   │       ├── djangojs.mo
    │           │   │   │   │   │       └── djangojs.po
    │           │   │   │   │   ├── ml
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       ├── django.po
    │           │   │   │   │   │       ├── djangojs.mo
    │           │   │   │   │   │       └── djangojs.po
    │           │   │   │   │   ├── mn
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       ├── django.po
    │           │   │   │   │   │       ├── djangojs.mo
    │           │   │   │   │   │       └── djangojs.po
    │           │   │   │   │   ├── mr
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       ├── django.po
    │           │   │   │   │   │       ├── djangojs.mo
    │           │   │   │   │   │       └── djangojs.po
    │           │   │   │   │   ├── ms
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       ├── django.po
    │           │   │   │   │   │       ├── djangojs.mo
    │           │   │   │   │   │       └── djangojs.po
    │           │   │   │   │   ├── my
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       ├── django.po
    │           │   │   │   │   │       ├── djangojs.mo
    │           │   │   │   │   │       └── djangojs.po
    │           │   │   │   │   ├── nb
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       ├── django.po
    │           │   │   │   │   │       ├── djangojs.mo
    │           │   │   │   │   │       └── djangojs.po
    │           │   │   │   │   ├── ne
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       ├── django.po
    │           │   │   │   │   │       ├── djangojs.mo
    │           │   │   │   │   │       └── djangojs.po
    │           │   │   │   │   ├── nl
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       ├── django.po
    │           │   │   │   │   │       ├── djangojs.mo
    │           │   │   │   │   │       └── djangojs.po
    │           │   │   │   │   ├── nn
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       ├── django.po
    │           │   │   │   │   │       ├── djangojs.mo
    │           │   │   │   │   │       └── djangojs.po
    │           │   │   │   │   ├── os
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       ├── django.po
    │           │   │   │   │   │       ├── djangojs.mo
    │           │   │   │   │   │       └── djangojs.po
    │           │   │   │   │   ├── pa
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       ├── django.po
    │           │   │   │   │   │       ├── djangojs.mo
    │           │   │   │   │   │       └── djangojs.po
    │           │   │   │   │   ├── pl
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       ├── django.po
    │           │   │   │   │   │       ├── djangojs.mo
    │           │   │   │   │   │       └── djangojs.po
    │           │   │   │   │   ├── pt
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       ├── django.po
    │           │   │   │   │   │       ├── djangojs.mo
    │           │   │   │   │   │       └── djangojs.po
    │           │   │   │   │   ├── pt_BR
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       ├── django.po
    │           │   │   │   │   │       ├── djangojs.mo
    │           │   │   │   │   │       └── djangojs.po
    │           │   │   │   │   ├── ro
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       ├── django.po
    │           │   │   │   │   │       ├── djangojs.mo
    │           │   │   │   │   │       └── djangojs.po
    │           │   │   │   │   ├── ru
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       ├── django.po
    │           │   │   │   │   │       ├── djangojs.mo
    │           │   │   │   │   │       └── djangojs.po
    │           │   │   │   │   ├── sk
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       ├── django.po
    │           │   │   │   │   │       ├── djangojs.mo
    │           │   │   │   │   │       └── djangojs.po
    │           │   │   │   │   ├── sl
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       ├── django.po
    │           │   │   │   │   │       ├── djangojs.mo
    │           │   │   │   │   │       └── djangojs.po
    │           │   │   │   │   ├── sq
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       ├── django.po
    │           │   │   │   │   │       ├── djangojs.mo
    │           │   │   │   │   │       └── djangojs.po
    │           │   │   │   │   ├── sr
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       ├── django.po
    │           │   │   │   │   │       ├── djangojs.mo
    │           │   │   │   │   │       └── djangojs.po
    │           │   │   │   │   ├── sr_Latn
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       ├── django.po
    │           │   │   │   │   │       ├── djangojs.mo
    │           │   │   │   │   │       └── djangojs.po
    │           │   │   │   │   ├── sv
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       ├── django.po
    │           │   │   │   │   │       ├── djangojs.mo
    │           │   │   │   │   │       └── djangojs.po
    │           │   │   │   │   ├── sw
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       ├── django.po
    │           │   │   │   │   │       ├── djangojs.mo
    │           │   │   │   │   │       └── djangojs.po
    │           │   │   │   │   ├── ta
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       ├── django.po
    │           │   │   │   │   │       ├── djangojs.mo
    │           │   │   │   │   │       └── djangojs.po
    │           │   │   │   │   ├── te
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       ├── django.po
    │           │   │   │   │   │       ├── djangojs.mo
    │           │   │   │   │   │       └── djangojs.po
    │           │   │   │   │   ├── tg
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       ├── django.po
    │           │   │   │   │   │       ├── djangojs.mo
    │           │   │   │   │   │       └── djangojs.po
    │           │   │   │   │   ├── th
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       ├── django.po
    │           │   │   │   │   │       ├── djangojs.mo
    │           │   │   │   │   │       └── djangojs.po
    │           │   │   │   │   ├── tk
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── tr
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       ├── django.po
    │           │   │   │   │   │       ├── djangojs.mo
    │           │   │   │   │   │       └── djangojs.po
    │           │   │   │   │   ├── tt
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       ├── django.po
    │           │   │   │   │   │       ├── djangojs.mo
    │           │   │   │   │   │       └── djangojs.po
    │           │   │   │   │   ├── udm
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       ├── django.po
    │           │   │   │   │   │       ├── djangojs.mo
    │           │   │   │   │   │       └── djangojs.po
    │           │   │   │   │   ├── ug
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       ├── django.po
    │           │   │   │   │   │       ├── djangojs.mo
    │           │   │   │   │   │       └── djangojs.po
    │           │   │   │   │   ├── uk
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       ├── django.po
    │           │   │   │   │   │       ├── djangojs.mo
    │           │   │   │   │   │       └── djangojs.po
    │           │   │   │   │   ├── ur
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       ├── django.po
    │           │   │   │   │   │       ├── djangojs.mo
    │           │   │   │   │   │       └── djangojs.po
    │           │   │   │   │   ├── uz
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       ├── django.po
    │           │   │   │   │   │       ├── djangojs.mo
    │           │   │   │   │   │       └── djangojs.po
    │           │   │   │   │   ├── vi
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       ├── django.po
    │           │   │   │   │   │       ├── djangojs.mo
    │           │   │   │   │   │       └── djangojs.po
    │           │   │   │   │   ├── zh_Hans
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       ├── django.po
    │           │   │   │   │   │       ├── djangojs.mo
    │           │   │   │   │   │       └── djangojs.po
    │           │   │   │   │   └── zh_Hant
    │           │   │   │   │       └── LC_MESSAGES
    │           │   │   │   │           ├── django.mo
    │           │   │   │   │           ├── django.po
    │           │   │   │   │           ├── djangojs.mo
    │           │   │   │   │           └── djangojs.po
    │           │   │   │   ├── migrations
    │           │   │   │   │   ├── 0001_initial.py
    │           │   │   │   │   ├── 0002_logentry_remove_auto_add.py
    │           │   │   │   │   ├── 0003_logentry_add_action_flag_choices.py
    │           │   │   │   │   └── __init__.py
    │           │   │   │   ├── models.py
    │           │   │   │   ├── options.py
    │           │   │   │   ├── sites.py
    │           │   │   │   ├── static
    │           │   │   │   │   └── admin
    │           │   │   │   │       ├── css
    │           │   │   │   │       │   ├── autocomplete.css
    │           │   │   │   │       │   ├── base.css
    │           │   │   │   │       │   ├── changelists.css
    │           │   │   │   │       │   ├── dark_mode.css
    │           │   │   │   │       │   ├── dashboard.css
    │           │   │   │   │       │   ├── forms.css
    │           │   │   │   │       │   ├── login.css
    │           │   │   │   │       │   ├── nav_sidebar.css
    │           │   │   │   │       │   ├── responsive.css
    │           │   │   │   │       │   ├── responsive_rtl.css
    │           │   │   │   │       │   ├── rtl.css
    │           │   │   │   │       │   ├── unusable_password_field.css
    │           │   │   │   │       │   ├── vendor
    │           │   │   │   │       │   │   └── select2
    │           │   │   │   │       │   │       ├── LICENSE-SELECT2.md
    │           │   │   │   │       │   │       ├── select2.css
    │           │   │   │   │       │   │       └── select2.min.css
    │           │   │   │   │       │   └── widgets.css
    │           │   │   │   │       ├── img
    │           │   │   │   │       │   ├── LICENSE
    │           │   │   │   │       │   ├── README.txt
    │           │   │   │   │       │   ├── calendar-icons.svg
    │           │   │   │   │       │   ├── gis
    │           │   │   │   │       │   │   ├── move_vertex_off.svg
    │           │   │   │   │       │   │   └── move_vertex_on.svg
    │           │   │   │   │       │   ├── icon-addlink.svg
    │           │   │   │   │       │   ├── icon-alert.svg
    │           │   │   │   │       │   ├── icon-calendar.svg
    │           │   │   │   │       │   ├── icon-changelink.svg
    │           │   │   │   │       │   ├── icon-clock.svg
    │           │   │   │   │       │   ├── icon-deletelink.svg
    │           │   │   │   │       │   ├── icon-hidelink.svg
    │           │   │   │   │       │   ├── icon-no.svg
    │           │   │   │   │       │   ├── icon-unknown-alt.svg
    │           │   │   │   │       │   ├── icon-unknown.svg
    │           │   │   │   │       │   ├── icon-viewlink.svg
    │           │   │   │   │       │   ├── icon-yes.svg
    │           │   │   │   │       │   ├── inline-delete.svg
    │           │   │   │   │       │   ├── search.svg
    │           │   │   │   │       │   ├── selector-icons.svg
    │           │   │   │   │       │   ├── sorting-icons.svg
    │           │   │   │   │       │   ├── tooltag-add.svg
    │           │   │   │   │       │   └── tooltag-arrowright.svg
    │           │   │   │   │       └── js
    │           │   │   │   │           ├── SelectBox.js
    │           │   │   │   │           ├── SelectFilter2.js
    │           │   │   │   │           ├── actions.js
    │           │   │   │   │           ├── admin
    │           │   │   │   │           │   ├── DateTimeShortcuts.js
    │           │   │   │   │           │   └── RelatedObjectLookups.js
    │           │   │   │   │           ├── autocomplete.js
    │           │   │   │   │           ├── calendar.js
    │           │   │   │   │           ├── cancel.js
    │           │   │   │   │           ├── change_form.js
    │           │   │   │   │           ├── core.js
    │           │   │   │   │           ├── filters.js
    │           │   │   │   │           ├── inlines.js
    │           │   │   │   │           ├── jquery.init.js
    │           │   │   │   │           ├── nav_sidebar.js
    │           │   │   │   │           ├── popup_response.js
    │           │   │   │   │           ├── prepopulate.js
    │           │   │   │   │           ├── prepopulate_init.js
    │           │   │   │   │           ├── theme.js
    │           │   │   │   │           ├── unusable_password_field.js
    │           │   │   │   │           ├── urlify.js
    │           │   │   │   │           └── vendor
    │           │   │   │   │               ├── jquery
    │           │   │   │   │               │   ├── LICENSE.txt
    │           │   │   │   │               │   ├── jquery.js
    │           │   │   │   │               │   └── jquery.min.js
    │           │   │   │   │               ├── select2
    │           │   │   │   │               │   ├── LICENSE.md
    │           │   │   │   │               │   ├── i18n
    │           │   │   │   │               │   │   ├── af.js
    │           │   │   │   │               │   │   ├── ar.js
    │           │   │   │   │               │   │   ├── az.js
    │           │   │   │   │               │   │   ├── bg.js
    │           │   │   │   │               │   │   ├── bn.js
    │           │   │   │   │               │   │   ├── bs.js
    │           │   │   │   │               │   │   ├── ca.js
    │           │   │   │   │               │   │   ├── cs.js
    │           │   │   │   │               │   │   ├── da.js
    │           │   │   │   │               │   │   ├── de.js
    │           │   │   │   │               │   │   ├── dsb.js
    │           │   │   │   │               │   │   ├── el.js
    │           │   │   │   │               │   │   ├── en.js
    │           │   │   │   │               │   │   ├── es.js
    │           │   │   │   │               │   │   ├── et.js
    │           │   │   │   │               │   │   ├── eu.js
    │           │   │   │   │               │   │   ├── fa.js
    │           │   │   │   │               │   │   ├── fi.js
    │           │   │   │   │               │   │   ├── fr.js
    │           │   │   │   │               │   │   ├── gl.js
    │           │   │   │   │               │   │   ├── he.js
    │           │   │   │   │               │   │   ├── hi.js
    │           │   │   │   │               │   │   ├── hr.js
    │           │   │   │   │               │   │   ├── hsb.js
    │           │   │   │   │               │   │   ├── hu.js
    │           │   │   │   │               │   │   ├── hy.js
    │           │   │   │   │               │   │   ├── id.js
    │           │   │   │   │               │   │   ├── is.js
    │           │   │   │   │               │   │   ├── it.js
    │           │   │   │   │               │   │   ├── ja.js
    │           │   │   │   │               │   │   ├── ka.js
    │           │   │   │   │               │   │   ├── km.js
    │           │   │   │   │               │   │   ├── ko.js
    │           │   │   │   │               │   │   ├── lt.js
    │           │   │   │   │               │   │   ├── lv.js
    │           │   │   │   │               │   │   ├── mk.js
    │           │   │   │   │               │   │   ├── ms.js
    │           │   │   │   │               │   │   ├── nb.js
    │           │   │   │   │               │   │   ├── ne.js
    │           │   │   │   │               │   │   ├── nl.js
    │           │   │   │   │               │   │   ├── pl.js
    │           │   │   │   │               │   │   ├── ps.js
    │           │   │   │   │               │   │   ├── pt-BR.js
    │           │   │   │   │               │   │   ├── pt.js
    │           │   │   │   │               │   │   ├── ro.js
    │           │   │   │   │               │   │   ├── ru.js
    │           │   │   │   │               │   │   ├── sk.js
    │           │   │   │   │               │   │   ├── sl.js
    │           │   │   │   │               │   │   ├── sq.js
    │           │   │   │   │               │   │   ├── sr-Cyrl.js
    │           │   │   │   │               │   │   ├── sr.js
    │           │   │   │   │               │   │   ├── sv.js
    │           │   │   │   │               │   │   ├── th.js
    │           │   │   │   │               │   │   ├── tk.js
    │           │   │   │   │               │   │   ├── tr.js
    │           │   │   │   │               │   │   ├── uk.js
    │           │   │   │   │               │   │   ├── vi.js
    │           │   │   │   │               │   │   ├── zh-CN.js
    │           │   │   │   │               │   │   └── zh-TW.js
    │           │   │   │   │               │   ├── select2.full.js
    │           │   │   │   │               │   └── select2.full.min.js
    │           │   │   │   │               └── xregexp
    │           │   │   │   │                   ├── LICENSE.txt
    │           │   │   │   │                   ├── xregexp.js
    │           │   │   │   │                   └── xregexp.min.js
    │           │   │   │   ├── templates
    │           │   │   │   │   ├── admin
    │           │   │   │   │   │   ├── 404.html
    │           │   │   │   │   │   ├── 500.html
    │           │   │   │   │   │   ├── actions.html
    │           │   │   │   │   │   ├── app_index.html
    │           │   │   │   │   │   ├── app_list.html
    │           │   │   │   │   │   ├── auth
    │           │   │   │   │   │   │   └── user
    │           │   │   │   │   │   │       ├── add_form.html
    │           │   │   │   │   │   │       └── change_password.html
    │           │   │   │   │   │   ├── base.html
    │           │   │   │   │   │   ├── base_site.html
    │           │   │   │   │   │   ├── change_form.html
    │           │   │   │   │   │   ├── change_form_object_tools.html
    │           │   │   │   │   │   ├── change_list.html
    │           │   │   │   │   │   ├── change_list_object_tools.html
    │           │   │   │   │   │   ├── change_list_results.html
    │           │   │   │   │   │   ├── color_theme_toggle.html
    │           │   │   │   │   │   ├── date_hierarchy.html
    │           │   │   │   │   │   ├── delete_confirmation.html
    │           │   │   │   │   │   ├── delete_selected_confirmation.html
    │           │   │   │   │   │   ├── edit_inline
    │           │   │   │   │   │   │   ├── stacked.html
    │           │   │   │   │   │   │   └── tabular.html
    │           │   │   │   │   │   ├── filter.html
    │           │   │   │   │   │   ├── includes
    │           │   │   │   │   │   │   ├── fieldset.html
    │           │   │   │   │   │   │   └── object_delete_summary.html
    │           │   │   │   │   │   ├── index.html
    │           │   │   │   │   │   ├── invalid_setup.html
    │           │   │   │   │   │   ├── login.html
    │           │   │   │   │   │   ├── nav_sidebar.html
    │           │   │   │   │   │   ├── object_history.html
    │           │   │   │   │   │   ├── pagination.html
    │           │   │   │   │   │   ├── popup_response.html
    │           │   │   │   │   │   ├── prepopulated_fields_js.html
    │           │   │   │   │   │   ├── search_form.html
    │           │   │   │   │   │   ├── submit_line.html
    │           │   │   │   │   │   └── widgets
    │           │   │   │   │   │       ├── clearable_file_input.html
    │           │   │   │   │   │       ├── date.html
    │           │   │   │   │   │       ├── foreign_key_raw_id.html
    │           │   │   │   │   │       ├── many_to_many_raw_id.html
    │           │   │   │   │   │       ├── radio.html
    │           │   │   │   │   │       ├── related_widget_wrapper.html
    │           │   │   │   │   │       ├── split_datetime.html
    │           │   │   │   │   │       ├── time.html
    │           │   │   │   │   │       └── url.html
    │           │   │   │   │   └── registration
    │           │   │   │   │       ├── logged_out.html
    │           │   │   │   │       ├── password_change_done.html
    │           │   │   │   │       ├── password_change_form.html
    │           │   │   │   │       ├── password_reset_complete.html
    │           │   │   │   │       ├── password_reset_confirm.html
    │           │   │   │   │       ├── password_reset_done.html
    │           │   │   │   │       ├── password_reset_email.html
    │           │   │   │   │       └── password_reset_form.html
    │           │   │   │   ├── templatetags
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   ├── admin_list.py
    │           │   │   │   │   ├── admin_modify.py
    │           │   │   │   │   ├── admin_urls.py
    │           │   │   │   │   ├── base.py
    │           │   │   │   │   └── log.py
    │           │   │   │   ├── tests.py
    │           │   │   │   ├── utils.py
    │           │   │   │   ├── views
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   ├── autocomplete.py
    │           │   │   │   │   ├── decorators.py
    │           │   │   │   │   └── main.py
    │           │   │   │   └── widgets.py
    │           │   │   ├── admindocs
    │           │   │   │   ├── __init__.py
    │           │   │   │   ├── apps.py
    │           │   │   │   ├── locale
    │           │   │   │   │   ├── af
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ar
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ar_DZ
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ast
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── az
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── be
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── bg
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── bn
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── br
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── bs
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ca
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ckb
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── cs
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── cy
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── da
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── de
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── dsb
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── el
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── en
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── en_AU
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── en_GB
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── eo
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── es
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── es_AR
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── es_CO
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── es_MX
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── es_VE
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── et
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── eu
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── fa
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── fi
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── fr
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── fy
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ga
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── gd
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── gl
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── he
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── hi
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── hr
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── hsb
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── hu
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ia
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── id
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── io
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── is
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── it
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ja
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ka
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── kab
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── kk
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── km
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── kn
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ko
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ky
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── lb
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── lt
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── lv
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── mk
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ml
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── mn
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── mr
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ms
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── my
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── nb
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ne
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── nl
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── nn
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── os
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── pa
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── pl
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── pt
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── pt_BR
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ro
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ru
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── sk
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── sl
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── sq
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── sr
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── sr_Latn
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── sv
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── sw
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ta
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── te
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── tg
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── th
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── tr
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── tt
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── udm
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ug
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── uk
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ur
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── vi
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── zh_Hans
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   └── zh_Hant
    │           │   │   │   │       └── LC_MESSAGES
    │           │   │   │   │           ├── django.mo
    │           │   │   │   │           └── django.po
    │           │   │   │   ├── middleware.py
    │           │   │   │   ├── templates
    │           │   │   │   │   └── admin_doc
    │           │   │   │   │       ├── bookmarklets.html
    │           │   │   │   │       ├── index.html
    │           │   │   │   │       ├── missing_docutils.html
    │           │   │   │   │       ├── model_detail.html
    │           │   │   │   │       ├── model_index.html
    │           │   │   │   │       ├── template_detail.html
    │           │   │   │   │       ├── template_filter_index.html
    │           │   │   │   │       ├── template_tag_index.html
    │           │   │   │   │       ├── view_detail.html
    │           │   │   │   │       └── view_index.html
    │           │   │   │   ├── urls.py
    │           │   │   │   ├── utils.py
    │           │   │   │   └── views.py
    │           │   │   ├── auth
    │           │   │   │   ├── __init__.py
    │           │   │   │   ├── admin.py
    │           │   │   │   ├── apps.py
    │           │   │   │   ├── backends.py
    │           │   │   │   ├── base_user.py
    │           │   │   │   ├── checks.py
    │           │   │   │   ├── common-passwords.txt.gz
    │           │   │   │   ├── context_processors.py
    │           │   │   │   ├── decorators.py
    │           │   │   │   ├── forms.py
    │           │   │   │   ├── handlers
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   └── modwsgi.py
    │           │   │   │   ├── hashers.py
    │           │   │   │   ├── locale
    │           │   │   │   │   ├── af
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ar
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ar_DZ
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ast
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── az
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── be
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── bg
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── bn
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── br
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── bs
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ca
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ckb
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── cs
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── cy
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── da
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── de
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── dsb
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── el
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── en
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── en_AU
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── en_GB
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── eo
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── es
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── es_AR
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── es_CO
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── es_MX
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── es_VE
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── et
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── eu
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── fa
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── fi
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── fr
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── fy
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ga
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── gd
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── gl
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── he
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── hi
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── hr
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── hsb
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── hu
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── hy
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ia
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── id
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── io
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── is
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── it
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ja
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ka
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── kab
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── kk
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── km
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── kn
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ko
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ky
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── lb
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── lt
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── lv
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── mk
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ml
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── mn
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── mr
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ms
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── my
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── nb
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ne
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── nl
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── nn
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── os
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── pa
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── pl
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── pt
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── pt_BR
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ro
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ru
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── sk
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── sl
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── sq
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── sr
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── sr_Latn
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── sv
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── sw
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ta
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── te
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── tg
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── th
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── tk
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── tr
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── tt
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── udm
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ug
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── uk
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ur
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── uz
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── vi
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── zh_Hans
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   └── zh_Hant
    │           │   │   │   │       └── LC_MESSAGES
    │           │   │   │   │           ├── django.mo
    │           │   │   │   │           └── django.po
    │           │   │   │   ├── management
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   └── commands
    │           │   │   │   │       ├── __init__.py
    │           │   │   │   │       ├── changepassword.py
    │           │   │   │   │       └── createsuperuser.py
    │           │   │   │   ├── middleware.py
    │           │   │   │   ├── migrations
    │           │   │   │   │   ├── 0001_initial.py
    │           │   │   │   │   ├── 0002_alter_permission_name_max_length.py
    │           │   │   │   │   ├── 0003_alter_user_email_max_length.py
    │           │   │   │   │   ├── 0004_alter_user_username_opts.py
    │           │   │   │   │   ├── 0005_alter_user_last_login_null.py
    │           │   │   │   │   ├── 0006_require_contenttypes_0002.py
    │           │   │   │   │   ├── 0007_alter_validators_add_error_messages.py
    │           │   │   │   │   ├── 0008_alter_user_username_max_length.py
    │           │   │   │   │   ├── 0009_alter_user_last_name_max_length.py
    │           │   │   │   │   ├── 0010_alter_group_name_max_length.py
    │           │   │   │   │   ├── 0011_update_proxy_permissions.py
    │           │   │   │   │   ├── 0012_alter_user_first_name_max_length.py
    │           │   │   │   │   └── __init__.py
    │           │   │   │   ├── mixins.py
    │           │   │   │   ├── models.py
    │           │   │   │   ├── password_validation.py
    │           │   │   │   ├── signals.py
    │           │   │   │   ├── templates
    │           │   │   │   │   ├── auth
    │           │   │   │   │   │   └── widgets
    │           │   │   │   │   │       └── read_only_password_hash.html
    │           │   │   │   │   └── registration
    │           │   │   │   │       └── password_reset_subject.txt
    │           │   │   │   ├── tokens.py
    │           │   │   │   ├── urls.py
    │           │   │   │   ├── validators.py
    │           │   │   │   └── views.py
    │           │   │   ├── contenttypes
    │           │   │   │   ├── __init__.py
    │           │   │   │   ├── admin.py
    │           │   │   │   ├── apps.py
    │           │   │   │   ├── checks.py
    │           │   │   │   ├── fields.py
    │           │   │   │   ├── forms.py
    │           │   │   │   ├── locale
    │           │   │   │   │   ├── af
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ar
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ar_DZ
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ast
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── az
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── be
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── bg
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── bn
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── br
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── bs
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ca
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ckb
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── cs
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── cy
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── da
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── de
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── dsb
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── el
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── en
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── en_AU
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── en_GB
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── eo
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── es
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── es_AR
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── es_CO
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── es_MX
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── es_VE
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── et
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── eu
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── fa
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── fi
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── fr
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── fy
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ga
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── gd
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── gl
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── he
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── hi
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── hr
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── hsb
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── hu
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── hy
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ia
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── id
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── io
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── is
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── it
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ja
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ka
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── kk
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── km
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── kn
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ko
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ky
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── lb
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── lt
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── lv
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── mk
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ml
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── mn
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── mr
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ms
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── my
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── nb
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ne
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── nl
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── nn
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── os
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── pa
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── pl
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── pt
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── pt_BR
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ro
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ru
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── sk
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── sl
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── sq
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── sr
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── sr_Latn
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── sv
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── sw
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ta
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── te
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── tg
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── th
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── tk
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── tr
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── tt
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── udm
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ug
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── uk
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ur
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── vi
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── zh_Hans
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   └── zh_Hant
    │           │   │   │   │       └── LC_MESSAGES
    │           │   │   │   │           ├── django.mo
    │           │   │   │   │           └── django.po
    │           │   │   │   ├── management
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   └── commands
    │           │   │   │   │       ├── __init__.py
    │           │   │   │   │       └── remove_stale_contenttypes.py
    │           │   │   │   ├── migrations
    │           │   │   │   │   ├── 0001_initial.py
    │           │   │   │   │   ├── 0002_remove_content_type_name.py
    │           │   │   │   │   └── __init__.py
    │           │   │   │   ├── models.py
    │           │   │   │   ├── prefetch.py
    │           │   │   │   └── views.py
    │           │   │   ├── flatpages
    │           │   │   │   ├── __init__.py
    │           │   │   │   ├── admin.py
    │           │   │   │   ├── apps.py
    │           │   │   │   ├── forms.py
    │           │   │   │   ├── locale
    │           │   │   │   │   ├── af
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ar
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ar_DZ
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ast
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── az
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── be
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── bg
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── bn
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── br
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── bs
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ca
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ckb
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── cs
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── cy
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── da
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── de
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── dsb
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── el
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── en
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── en_AU
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── en_GB
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── eo
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── es
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── es_AR
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── es_CO
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── es_MX
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── es_VE
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── et
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── eu
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── fa
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── fi
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── fr
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── fy
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ga
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── gd
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── gl
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── he
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── hi
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── hr
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── hsb
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── hu
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── hy
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ia
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── id
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── io
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── is
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── it
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ja
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ka
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── kk
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── km
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── kn
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ko
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ky
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── lb
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── lt
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── lv
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── mk
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ml
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── mn
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── mr
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ms
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── my
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── nb
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ne
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── nl
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── nn
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── os
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── pa
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── pl
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── pt
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── pt_BR
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ro
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ru
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── sk
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── sl
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── sq
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── sr
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── sr_Latn
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── sv
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── sw
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ta
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── te
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── tg
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── th
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── tk
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── tr
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── tt
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── udm
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ug
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── uk
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ur
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── vi
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── zh_Hans
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   └── zh_Hant
    │           │   │   │   │       └── LC_MESSAGES
    │           │   │   │   │           ├── django.mo
    │           │   │   │   │           └── django.po
    │           │   │   │   ├── middleware.py
    │           │   │   │   ├── migrations
    │           │   │   │   │   ├── 0001_initial.py
    │           │   │   │   │   └── __init__.py
    │           │   │   │   ├── models.py
    │           │   │   │   ├── sitemaps.py
    │           │   │   │   ├── templatetags
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   └── flatpages.py
    │           │   │   │   ├── urls.py
    │           │   │   │   └── views.py
    │           │   │   ├── gis
    │           │   │   │   ├── __init__.py
    │           │   │   │   ├── admin
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   └── options.py
    │           │   │   │   ├── apps.py
    │           │   │   │   ├── db
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   ├── backends
    │           │   │   │   │   │   ├── __init__.py
    │           │   │   │   │   │   ├── base
    │           │   │   │   │   │   │   ├── __init__.py
    │           │   │   │   │   │   │   ├── adapter.py
    │           │   │   │   │   │   │   ├── features.py
    │           │   │   │   │   │   │   ├── models.py
    │           │   │   │   │   │   │   └── operations.py
    │           │   │   │   │   │   ├── mysql
    │           │   │   │   │   │   │   ├── __init__.py
    │           │   │   │   │   │   │   ├── base.py
    │           │   │   │   │   │   │   ├── features.py
    │           │   │   │   │   │   │   ├── introspection.py
    │           │   │   │   │   │   │   ├── operations.py
    │           │   │   │   │   │   │   └── schema.py
    │           │   │   │   │   │   ├── oracle
    │           │   │   │   │   │   │   ├── __init__.py
    │           │   │   │   │   │   │   ├── adapter.py
    │           │   │   │   │   │   │   ├── base.py
    │           │   │   │   │   │   │   ├── features.py
    │           │   │   │   │   │   │   ├── introspection.py
    │           │   │   │   │   │   │   ├── models.py
    │           │   │   │   │   │   │   ├── operations.py
    │           │   │   │   │   │   │   └── schema.py
    │           │   │   │   │   │   ├── postgis
    │           │   │   │   │   │   │   ├── __init__.py
    │           │   │   │   │   │   │   ├── adapter.py
    │           │   │   │   │   │   │   ├── base.py
    │           │   │   │   │   │   │   ├── const.py
    │           │   │   │   │   │   │   ├── features.py
    │           │   │   │   │   │   │   ├── introspection.py
    │           │   │   │   │   │   │   ├── models.py
    │           │   │   │   │   │   │   ├── operations.py
    │           │   │   │   │   │   │   ├── pgraster.py
    │           │   │   │   │   │   │   └── schema.py
    │           │   │   │   │   │   ├── spatialite
    │           │   │   │   │   │   │   ├── __init__.py
    │           │   │   │   │   │   │   ├── adapter.py
    │           │   │   │   │   │   │   ├── base.py
    │           │   │   │   │   │   │   ├── client.py
    │           │   │   │   │   │   │   ├── features.py
    │           │   │   │   │   │   │   ├── introspection.py
    │           │   │   │   │   │   │   ├── models.py
    │           │   │   │   │   │   │   ├── operations.py
    │           │   │   │   │   │   │   └── schema.py
    │           │   │   │   │   │   └── utils.py
    │           │   │   │   │   └── models
    │           │   │   │   │       ├── __init__.py
    │           │   │   │   │       ├── aggregates.py
    │           │   │   │   │       ├── fields.py
    │           │   │   │   │       ├── functions.py
    │           │   │   │   │       ├── lookups.py
    │           │   │   │   │       ├── proxy.py
    │           │   │   │   │       └── sql
    │           │   │   │   │           ├── __init__.py
    │           │   │   │   │           └── conversion.py
    │           │   │   │   ├── feeds.py
    │           │   │   │   ├── forms
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   ├── fields.py
    │           │   │   │   │   └── widgets.py
    │           │   │   │   ├── gdal
    │           │   │   │   │   ├── LICENSE
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   ├── base.py
    │           │   │   │   │   ├── datasource.py
    │           │   │   │   │   ├── driver.py
    │           │   │   │   │   ├── envelope.py
    │           │   │   │   │   ├── error.py
    │           │   │   │   │   ├── feature.py
    │           │   │   │   │   ├── field.py
    │           │   │   │   │   ├── geometries.py
    │           │   │   │   │   ├── geomtype.py
    │           │   │   │   │   ├── layer.py
    │           │   │   │   │   ├── libgdal.py
    │           │   │   │   │   ├── prototypes
    │           │   │   │   │   │   ├── __init__.py
    │           │   │   │   │   │   ├── ds.py
    │           │   │   │   │   │   ├── errcheck.py
    │           │   │   │   │   │   ├── generation.py
    │           │   │   │   │   │   ├── geom.py
    │           │   │   │   │   │   ├── raster.py
    │           │   │   │   │   │   └── srs.py
    │           │   │   │   │   ├── raster
    │           │   │   │   │   │   ├── __init__.py
    │           │   │   │   │   │   ├── band.py
    │           │   │   │   │   │   ├── base.py
    │           │   │   │   │   │   ├── const.py
    │           │   │   │   │   │   └── source.py
    │           │   │   │   │   └── srs.py
    │           │   │   │   ├── geoip2.py
    │           │   │   │   ├── geometry.py
    │           │   │   │   ├── geos
    │           │   │   │   │   ├── LICENSE
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   ├── base.py
    │           │   │   │   │   ├── collections.py
    │           │   │   │   │   ├── coordseq.py
    │           │   │   │   │   ├── error.py
    │           │   │   │   │   ├── factory.py
    │           │   │   │   │   ├── geometry.py
    │           │   │   │   │   ├── io.py
    │           │   │   │   │   ├── libgeos.py
    │           │   │   │   │   ├── linestring.py
    │           │   │   │   │   ├── mutable_list.py
    │           │   │   │   │   ├── point.py
    │           │   │   │   │   ├── polygon.py
    │           │   │   │   │   ├── prepared.py
    │           │   │   │   │   └── prototypes
    │           │   │   │   │       ├── __init__.py
    │           │   │   │   │       ├── coordseq.py
    │           │   │   │   │       ├── errcheck.py
    │           │   │   │   │       ├── geom.py
    │           │   │   │   │       ├── io.py
    │           │   │   │   │       ├── misc.py
    │           │   │   │   │       ├── predicates.py
    │           │   │   │   │       ├── prepared.py
    │           │   │   │   │       ├── threadsafe.py
    │           │   │   │   │       └── topology.py
    │           │   │   │   ├── locale
    │           │   │   │   │   ├── af
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ar
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ar_DZ
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ast
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── az
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── be
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── bg
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── bn
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── br
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── bs
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ca
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ckb
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── cs
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── cy
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── da
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── de
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── dsb
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── el
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── en
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── en_AU
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── en_GB
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── eo
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── es
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── es_AR
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── es_CO
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── es_MX
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── es_VE
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── et
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── eu
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── fa
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── fi
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── fr
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── fy
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ga
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── gd
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── gl
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── he
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── hi
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── hr
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── hsb
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── hu
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── hy
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ia
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── id
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── io
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── is
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── it
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ja
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ka
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── kk
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── km
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── kn
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ko
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ky
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── lb
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── lt
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── lv
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── mk
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ml
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── mn
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── mr
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ms
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── my
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── nb
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ne
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── nl
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── nn
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── os
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── pa
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── pl
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── pt
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── pt_BR
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ro
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ru
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── sk
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── sl
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── sq
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── sr
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── sr_Latn
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── sv
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── sw
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ta
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── te
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── tg
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── th
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── tr
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── tt
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── udm
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ug
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── uk
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ur
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── vi
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── zh_Hans
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   └── zh_Hant
    │           │   │   │   │       └── LC_MESSAGES
    │           │   │   │   │           ├── django.mo
    │           │   │   │   │           └── django.po
    │           │   │   │   ├── management
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   └── commands
    │           │   │   │   │       ├── __init__.py
    │           │   │   │   │       ├── inspectdb.py
    │           │   │   │   │       └── ogrinspect.py
    │           │   │   │   ├── measure.py
    │           │   │   │   ├── ptr.py
    │           │   │   │   ├── serializers
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   └── geojson.py
    │           │   │   │   ├── shortcuts.py
    │           │   │   │   ├── sitemaps
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   ├── kml.py
    │           │   │   │   │   └── views.py
    │           │   │   │   ├── static
    │           │   │   │   │   └── gis
    │           │   │   │   │       ├── css
    │           │   │   │   │       │   └── ol3.css
    │           │   │   │   │       ├── img
    │           │   │   │   │       │   ├── draw_line_off.svg
    │           │   │   │   │       │   ├── draw_line_on.svg
    │           │   │   │   │       │   ├── draw_point_off.svg
    │           │   │   │   │       │   ├── draw_point_on.svg
    │           │   │   │   │       │   ├── draw_polygon_off.svg
    │           │   │   │   │       │   └── draw_polygon_on.svg
    │           │   │   │   │       └── js
    │           │   │   │   │           └── OLMapWidget.js
    │           │   │   │   ├── templates
    │           │   │   │   │   └── gis
    │           │   │   │   │       ├── kml
    │           │   │   │   │       │   ├── base.kml
    │           │   │   │   │       │   └── placemarks.kml
    │           │   │   │   │       ├── openlayers-osm.html
    │           │   │   │   │       └── openlayers.html
    │           │   │   │   ├── utils
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   ├── layermapping.py
    │           │   │   │   │   ├── ogrinfo.py
    │           │   │   │   │   ├── ogrinspect.py
    │           │   │   │   │   └── srs.py
    │           │   │   │   └── views.py
    │           │   │   ├── humanize
    │           │   │   │   ├── __init__.py
    │           │   │   │   ├── apps.py
    │           │   │   │   ├── locale
    │           │   │   │   │   ├── af
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ar
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ar_DZ
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ast
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── az
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── be
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── bg
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── bn
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── br
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── bs
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ca
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ckb
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── cs
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── cy
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── da
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── de
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── dsb
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── el
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── en
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── en_AU
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── en_GB
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── eo
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── es
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── es_AR
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── es_CO
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── es_MX
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── es_VE
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── et
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── eu
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── fa
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── fi
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── fr
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── fy
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ga
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── gd
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── gl
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── he
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── hi
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── hr
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── hsb
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── hu
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── hy
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ia
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── id
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── io
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── is
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── it
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ja
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ka
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── kk
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── km
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── kn
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ko
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ky
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── lb
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── lt
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── lv
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── mk
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ml
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── mn
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── mr
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ms
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── my
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── nb
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ne
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── nl
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── nn
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── os
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── pa
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── pl
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── pt
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── pt_BR
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ro
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ru
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── sk
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── sl
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── sq
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── sr
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── sr_Latn
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── sv
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── sw
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ta
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── te
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── tg
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── th
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── tk
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── tr
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── tt
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── udm
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ug
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── uk
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ur
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── uz
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── vi
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── zh_Hans
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   └── zh_Hant
    │           │   │   │   │       └── LC_MESSAGES
    │           │   │   │   │           ├── django.mo
    │           │   │   │   │           └── django.po
    │           │   │   │   └── templatetags
    │           │   │   │       ├── __init__.py
    │           │   │   │       └── humanize.py
    │           │   │   ├── messages
    │           │   │   │   ├── __init__.py
    │           │   │   │   ├── api.py
    │           │   │   │   ├── apps.py
    │           │   │   │   ├── constants.py
    │           │   │   │   ├── context_processors.py
    │           │   │   │   ├── middleware.py
    │           │   │   │   ├── storage
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   ├── base.py
    │           │   │   │   │   ├── cookie.py
    │           │   │   │   │   ├── fallback.py
    │           │   │   │   │   └── session.py
    │           │   │   │   ├── test.py
    │           │   │   │   ├── utils.py
    │           │   │   │   └── views.py
    │           │   │   ├── postgres
    │           │   │   │   ├── __init__.py
    │           │   │   │   ├── aggregates
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   ├── general.py
    │           │   │   │   │   ├── mixins.py
    │           │   │   │   │   └── statistics.py
    │           │   │   │   ├── apps.py
    │           │   │   │   ├── constraints.py
    │           │   │   │   ├── expressions.py
    │           │   │   │   ├── fields
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   ├── array.py
    │           │   │   │   │   ├── citext.py
    │           │   │   │   │   ├── hstore.py
    │           │   │   │   │   ├── jsonb.py
    │           │   │   │   │   ├── ranges.py
    │           │   │   │   │   └── utils.py
    │           │   │   │   ├── forms
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   ├── array.py
    │           │   │   │   │   ├── hstore.py
    │           │   │   │   │   └── ranges.py
    │           │   │   │   ├── functions.py
    │           │   │   │   ├── indexes.py
    │           │   │   │   ├── jinja2
    │           │   │   │   │   └── postgres
    │           │   │   │   │       └── widgets
    │           │   │   │   │           └── split_array.html
    │           │   │   │   ├── locale
    │           │   │   │   │   ├── af
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ar
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ar_DZ
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── az
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── be
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── bg
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ca
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ckb
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── cs
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── da
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── de
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── dsb
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── el
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── en
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── en_AU
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── eo
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── es
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── es_AR
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── es_CO
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── es_MX
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── et
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── eu
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── fa
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── fi
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── fr
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ga
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── gd
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── gl
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── he
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── hr
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── hsb
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── hu
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── hy
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ia
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── id
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── is
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── it
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ja
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ka
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── kk
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ko
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ky
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── lt
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── lv
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── mk
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ml
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── mn
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── mr
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ms
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── nb
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ne
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── nl
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── nn
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── pl
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── pt
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── pt_BR
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ro
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ru
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── sk
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── sl
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── sq
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── sr
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── sr_Latn
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── sv
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── tg
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── tk
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── tr
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ug
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── uk
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── uz
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── zh_Hans
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   └── zh_Hant
    │           │   │   │   │       └── LC_MESSAGES
    │           │   │   │   │           ├── django.mo
    │           │   │   │   │           └── django.po
    │           │   │   │   ├── lookups.py
    │           │   │   │   ├── operations.py
    │           │   │   │   ├── search.py
    │           │   │   │   ├── serializers.py
    │           │   │   │   ├── signals.py
    │           │   │   │   ├── templates
    │           │   │   │   │   └── postgres
    │           │   │   │   │       └── widgets
    │           │   │   │   │           └── split_array.html
    │           │   │   │   ├── utils.py
    │           │   │   │   └── validators.py
    │           │   │   ├── redirects
    │           │   │   │   ├── __init__.py
    │           │   │   │   ├── admin.py
    │           │   │   │   ├── apps.py
    │           │   │   │   ├── locale
    │           │   │   │   │   ├── af
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ar
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ar_DZ
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ast
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── az
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── be
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── bg
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── bn
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── br
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── bs
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ca
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ckb
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── cs
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── cy
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── da
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── de
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── dsb
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── el
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── en
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── en_AU
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── en_GB
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── eo
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── es
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── es_AR
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── es_CO
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── es_MX
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── es_VE
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── et
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── eu
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── fa
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── fi
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── fr
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── fy
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ga
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── gd
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── gl
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── he
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── hi
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── hr
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── hsb
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── hu
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── hy
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ia
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── id
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── io
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── is
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── it
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ja
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ka
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── kab
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── kk
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── km
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── kn
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ko
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ky
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── lb
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── lt
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── lv
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── mk
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ml
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── mn
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── mr
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ms
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── my
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── nb
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ne
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── nl
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── nn
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── os
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── pa
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── pl
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── pt
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── pt_BR
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ro
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ru
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── sk
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── sl
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── sq
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── sr
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── sr_Latn
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── sv
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── sw
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ta
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── te
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── tg
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── th
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── tk
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── tr
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── tt
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── udm
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ug
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── uk
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ur
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── uz
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── vi
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── zh_Hans
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   └── zh_Hant
    │           │   │   │   │       └── LC_MESSAGES
    │           │   │   │   │           ├── django.mo
    │           │   │   │   │           └── django.po
    │           │   │   │   ├── middleware.py
    │           │   │   │   ├── migrations
    │           │   │   │   │   ├── 0001_initial.py
    │           │   │   │   │   ├── 0002_alter_redirect_new_path_help_text.py
    │           │   │   │   │   └── __init__.py
    │           │   │   │   └── models.py
    │           │   │   ├── sessions
    │           │   │   │   ├── __init__.py
    │           │   │   │   ├── apps.py
    │           │   │   │   ├── backends
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   ├── base.py
    │           │   │   │   │   ├── cache.py
    │           │   │   │   │   ├── cached_db.py
    │           │   │   │   │   ├── db.py
    │           │   │   │   │   ├── file.py
    │           │   │   │   │   └── signed_cookies.py
    │           │   │   │   ├── base_session.py
    │           │   │   │   ├── exceptions.py
    │           │   │   │   ├── locale
    │           │   │   │   │   ├── af
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ar
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ar_DZ
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ast
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── az
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── be
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── bg
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── bn
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── br
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── bs
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ca
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ckb
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── cs
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── cy
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── da
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── de
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── dsb
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── el
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── en
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── en_AU
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── en_GB
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── eo
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── es
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── es_AR
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── es_CO
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── es_MX
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── es_VE
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── et
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── eu
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── fa
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── fi
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── fr
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── fy
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ga
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── gd
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── gl
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── he
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── hi
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── hr
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── hsb
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── hu
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── hy
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ia
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── id
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── io
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── is
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── it
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ja
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ka
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── kab
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── kk
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── km
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── kn
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ko
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ky
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── lb
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── lt
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── lv
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── mk
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ml
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── mn
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── mr
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ms
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── my
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── nb
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ne
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── nl
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── nn
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── os
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── pa
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── pl
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── pt
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── pt_BR
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ro
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ru
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── sk
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── sl
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── sq
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── sr
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── sr_Latn
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── sv
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── sw
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ta
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── te
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── tg
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── th
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── tk
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── tr
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── tt
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── udm
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ug
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── uk
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ur
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── uz
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── vi
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── zh_Hans
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   └── zh_Hant
    │           │   │   │   │       └── LC_MESSAGES
    │           │   │   │   │           ├── django.mo
    │           │   │   │   │           └── django.po
    │           │   │   │   ├── management
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   └── commands
    │           │   │   │   │       ├── __init__.py
    │           │   │   │   │       └── clearsessions.py
    │           │   │   │   ├── middleware.py
    │           │   │   │   ├── migrations
    │           │   │   │   │   ├── 0001_initial.py
    │           │   │   │   │   └── __init__.py
    │           │   │   │   ├── models.py
    │           │   │   │   └── serializers.py
    │           │   │   ├── sitemaps
    │           │   │   │   ├── __init__.py
    │           │   │   │   ├── apps.py
    │           │   │   │   ├── templates
    │           │   │   │   │   ├── sitemap.xml
    │           │   │   │   │   └── sitemap_index.xml
    │           │   │   │   └── views.py
    │           │   │   ├── sites
    │           │   │   │   ├── __init__.py
    │           │   │   │   ├── admin.py
    │           │   │   │   ├── apps.py
    │           │   │   │   ├── checks.py
    │           │   │   │   ├── locale
    │           │   │   │   │   ├── af
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ar
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ar_DZ
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ast
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── az
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── be
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── bg
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── bn
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── br
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── bs
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ca
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ckb
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── cs
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── cy
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── da
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── de
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── dsb
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── el
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── en
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── en_AU
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── en_GB
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── eo
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── es
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── es_AR
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── es_CO
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── es_MX
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── es_VE
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── et
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── eu
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── fa
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── fi
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── fr
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── fy
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ga
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── gd
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── gl
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── he
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── hi
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── hr
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── hsb
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── hu
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── hy
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ia
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── id
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── io
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── is
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── it
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ja
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ka
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── kab
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── kk
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── km
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── kn
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ko
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ky
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── lb
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── lt
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── lv
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── mk
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ml
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── mn
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── mr
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ms
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── my
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── nb
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ne
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── nl
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── nn
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── os
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── pa
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── pl
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── pt
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── pt_BR
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ro
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ru
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── sk
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── sl
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── sq
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── sr
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── sr_Latn
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── sv
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── sw
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ta
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── te
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── tg
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── th
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── tk
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── tr
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── tt
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── udm
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ug
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── uk
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ur
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── uz
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── vi
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── zh_Hans
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   └── zh_Hant
    │           │   │   │   │       └── LC_MESSAGES
    │           │   │   │   │           ├── django.mo
    │           │   │   │   │           └── django.po
    │           │   │   │   ├── management.py
    │           │   │   │   ├── managers.py
    │           │   │   │   ├── middleware.py
    │           │   │   │   ├── migrations
    │           │   │   │   │   ├── 0001_initial.py
    │           │   │   │   │   ├── 0002_alter_domain_unique.py
    │           │   │   │   │   └── __init__.py
    │           │   │   │   ├── models.py
    │           │   │   │   ├── requests.py
    │           │   │   │   └── shortcuts.py
    │           │   │   ├── staticfiles
    │           │   │   │   ├── __init__.py
    │           │   │   │   ├── apps.py
    │           │   │   │   ├── checks.py
    │           │   │   │   ├── finders.py
    │           │   │   │   ├── handlers.py
    │           │   │   │   ├── management
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   └── commands
    │           │   │   │   │       ├── __init__.py
    │           │   │   │   │       ├── collectstatic.py
    │           │   │   │   │       ├── findstatic.py
    │           │   │   │   │       └── runserver.py
    │           │   │   │   ├── storage.py
    │           │   │   │   ├── testing.py
    │           │   │   │   ├── urls.py
    │           │   │   │   ├── utils.py
    │           │   │   │   └── views.py
    │           │   │   └── syndication
    │           │   │       ├── __init__.py
    │           │   │       ├── apps.py
    │           │   │       └── views.py
    │           │   ├── core
    │           │   │   ├── __init__.py
    │           │   │   ├── asgi.py
    │           │   │   ├── cache
    │           │   │   │   ├── __init__.py
    │           │   │   │   ├── backends
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   ├── base.py
    │           │   │   │   │   ├── db.py
    │           │   │   │   │   ├── dummy.py
    │           │   │   │   │   ├── filebased.py
    │           │   │   │   │   ├── locmem.py
    │           │   │   │   │   ├── memcached.py
    │           │   │   │   │   └── redis.py
    │           │   │   │   └── utils.py
    │           │   │   ├── checks
    │           │   │   │   ├── __init__.py
    │           │   │   │   ├── async_checks.py
    │           │   │   │   ├── caches.py
    │           │   │   │   ├── commands.py
    │           │   │   │   ├── compatibility
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   └── django_4_0.py
    │           │   │   │   ├── database.py
    │           │   │   │   ├── files.py
    │           │   │   │   ├── messages.py
    │           │   │   │   ├── model_checks.py
    │           │   │   │   ├── registry.py
    │           │   │   │   ├── security
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   ├── base.py
    │           │   │   │   │   ├── csrf.py
    │           │   │   │   │   └── sessions.py
    │           │   │   │   ├── templates.py
    │           │   │   │   ├── translation.py
    │           │   │   │   └── urls.py
    │           │   │   ├── exceptions.py
    │           │   │   ├── files
    │           │   │   │   ├── __init__.py
    │           │   │   │   ├── base.py
    │           │   │   │   ├── images.py
    │           │   │   │   ├── locks.py
    │           │   │   │   ├── move.py
    │           │   │   │   ├── storage
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   ├── base.py
    │           │   │   │   │   ├── filesystem.py
    │           │   │   │   │   ├── handler.py
    │           │   │   │   │   ├── memory.py
    │           │   │   │   │   └── mixins.py
    │           │   │   │   ├── temp.py
    │           │   │   │   ├── uploadedfile.py
    │           │   │   │   ├── uploadhandler.py
    │           │   │   │   └── utils.py
    │           │   │   ├── handlers
    │           │   │   │   ├── __init__.py
    │           │   │   │   ├── asgi.py
    │           │   │   │   ├── base.py
    │           │   │   │   ├── exception.py
    │           │   │   │   └── wsgi.py
    │           │   │   ├── mail
    │           │   │   │   ├── __init__.py
    │           │   │   │   ├── backends
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   ├── base.py
    │           │   │   │   │   ├── console.py
    │           │   │   │   │   ├── dummy.py
    │           │   │   │   │   ├── filebased.py
    │           │   │   │   │   ├── locmem.py
    │           │   │   │   │   └── smtp.py
    │           │   │   │   ├── message.py
    │           │   │   │   └── utils.py
    │           │   │   ├── management
    │           │   │   │   ├── __init__.py
    │           │   │   │   ├── base.py
    │           │   │   │   ├── color.py
    │           │   │   │   ├── commands
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   ├── check.py
    │           │   │   │   │   ├── compilemessages.py
    │           │   │   │   │   ├── createcachetable.py
    │           │   │   │   │   ├── dbshell.py
    │           │   │   │   │   ├── diffsettings.py
    │           │   │   │   │   ├── dumpdata.py
    │           │   │   │   │   ├── flush.py
    │           │   │   │   │   ├── inspectdb.py
    │           │   │   │   │   ├── loaddata.py
    │           │   │   │   │   ├── makemessages.py
    │           │   │   │   │   ├── makemigrations.py
    │           │   │   │   │   ├── migrate.py
    │           │   │   │   │   ├── optimizemigration.py
    │           │   │   │   │   ├── runserver.py
    │           │   │   │   │   ├── sendtestemail.py
    │           │   │   │   │   ├── shell.py
    │           │   │   │   │   ├── showmigrations.py
    │           │   │   │   │   ├── sqlflush.py
    │           │   │   │   │   ├── sqlmigrate.py
    │           │   │   │   │   ├── sqlsequencereset.py
    │           │   │   │   │   ├── squashmigrations.py
    │           │   │   │   │   ├── startapp.py
    │           │   │   │   │   ├── startproject.py
    │           │   │   │   │   ├── test.py
    │           │   │   │   │   └── testserver.py
    │           │   │   │   ├── sql.py
    │           │   │   │   ├── templates.py
    │           │   │   │   └── utils.py
    │           │   │   ├── paginator.py
    │           │   │   ├── serializers
    │           │   │   │   ├── __init__.py
    │           │   │   │   ├── base.py
    │           │   │   │   ├── json.py
    │           │   │   │   ├── jsonl.py
    │           │   │   │   ├── python.py
    │           │   │   │   ├── pyyaml.py
    │           │   │   │   └── xml_serializer.py
    │           │   │   ├── servers
    │           │   │   │   ├── __init__.py
    │           │   │   │   └── basehttp.py
    │           │   │   ├── signals.py
    │           │   │   ├── signing.py
    │           │   │   ├── validators.py
    │           │   │   └── wsgi.py
    │           │   ├── db
    │           │   │   ├── __init__.py
    │           │   │   ├── backends
    │           │   │   │   ├── __init__.py
    │           │   │   │   ├── base
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   ├── base.py
    │           │   │   │   │   ├── client.py
    │           │   │   │   │   ├── creation.py
    │           │   │   │   │   ├── features.py
    │           │   │   │   │   ├── introspection.py
    │           │   │   │   │   ├── operations.py
    │           │   │   │   │   ├── schema.py
    │           │   │   │   │   └── validation.py
    │           │   │   │   ├── ddl_references.py
    │           │   │   │   ├── dummy
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   ├── base.py
    │           │   │   │   │   └── features.py
    │           │   │   │   ├── mysql
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   ├── base.py
    │           │   │   │   │   ├── client.py
    │           │   │   │   │   ├── compiler.py
    │           │   │   │   │   ├── creation.py
    │           │   │   │   │   ├── features.py
    │           │   │   │   │   ├── introspection.py
    │           │   │   │   │   ├── operations.py
    │           │   │   │   │   ├── schema.py
    │           │   │   │   │   └── validation.py
    │           │   │   │   ├── oracle
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   ├── base.py
    │           │   │   │   │   ├── client.py
    │           │   │   │   │   ├── creation.py
    │           │   │   │   │   ├── features.py
    │           │   │   │   │   ├── functions.py
    │           │   │   │   │   ├── introspection.py
    │           │   │   │   │   ├── operations.py
    │           │   │   │   │   ├── oracledb_any.py
    │           │   │   │   │   ├── schema.py
    │           │   │   │   │   ├── utils.py
    │           │   │   │   │   └── validation.py
    │           │   │   │   ├── postgresql
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   ├── base.py
    │           │   │   │   │   ├── client.py
    │           │   │   │   │   ├── compiler.py
    │           │   │   │   │   ├── creation.py
    │           │   │   │   │   ├── features.py
    │           │   │   │   │   ├── introspection.py
    │           │   │   │   │   ├── operations.py
    │           │   │   │   │   ├── psycopg_any.py
    │           │   │   │   │   └── schema.py
    │           │   │   │   ├── signals.py
    │           │   │   │   ├── sqlite3
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   ├── _functions.py
    │           │   │   │   │   ├── base.py
    │           │   │   │   │   ├── client.py
    │           │   │   │   │   ├── creation.py
    │           │   │   │   │   ├── features.py
    │           │   │   │   │   ├── introspection.py
    │           │   │   │   │   ├── operations.py
    │           │   │   │   │   └── schema.py
    │           │   │   │   └── utils.py
    │           │   │   ├── migrations
    │           │   │   │   ├── __init__.py
    │           │   │   │   ├── autodetector.py
    │           │   │   │   ├── exceptions.py
    │           │   │   │   ├── executor.py
    │           │   │   │   ├── graph.py
    │           │   │   │   ├── loader.py
    │           │   │   │   ├── migration.py
    │           │   │   │   ├── operations
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   ├── base.py
    │           │   │   │   │   ├── fields.py
    │           │   │   │   │   ├── models.py
    │           │   │   │   │   └── special.py
    │           │   │   │   ├── optimizer.py
    │           │   │   │   ├── questioner.py
    │           │   │   │   ├── recorder.py
    │           │   │   │   ├── serializer.py
    │           │   │   │   ├── state.py
    │           │   │   │   ├── utils.py
    │           │   │   │   └── writer.py
    │           │   │   ├── models
    │           │   │   │   ├── __init__.py
    │           │   │   │   ├── aggregates.py
    │           │   │   │   ├── base.py
    │           │   │   │   ├── constants.py
    │           │   │   │   ├── constraints.py
    │           │   │   │   ├── deletion.py
    │           │   │   │   ├── enums.py
    │           │   │   │   ├── expressions.py
    │           │   │   │   ├── fields
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   ├── composite.py
    │           │   │   │   │   ├── files.py
    │           │   │   │   │   ├── generated.py
    │           │   │   │   │   ├── json.py
    │           │   │   │   │   ├── mixins.py
    │           │   │   │   │   ├── proxy.py
    │           │   │   │   │   ├── related.py
    │           │   │   │   │   ├── related_descriptors.py
    │           │   │   │   │   ├── related_lookups.py
    │           │   │   │   │   ├── reverse_related.py
    │           │   │   │   │   └── tuple_lookups.py
    │           │   │   │   ├── functions
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   ├── comparison.py
    │           │   │   │   │   ├── datetime.py
    │           │   │   │   │   ├── json.py
    │           │   │   │   │   ├── math.py
    │           │   │   │   │   ├── mixins.py
    │           │   │   │   │   ├── text.py
    │           │   │   │   │   └── window.py
    │           │   │   │   ├── indexes.py
    │           │   │   │   ├── lookups.py
    │           │   │   │   ├── manager.py
    │           │   │   │   ├── options.py
    │           │   │   │   ├── query.py
    │           │   │   │   ├── query_utils.py
    │           │   │   │   ├── signals.py
    │           │   │   │   ├── sql
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   ├── compiler.py
    │           │   │   │   │   ├── constants.py
    │           │   │   │   │   ├── datastructures.py
    │           │   │   │   │   ├── query.py
    │           │   │   │   │   ├── subqueries.py
    │           │   │   │   │   └── where.py
    │           │   │   │   └── utils.py
    │           │   │   ├── transaction.py
    │           │   │   └── utils.py
    │           │   ├── dispatch
    │           │   │   ├── __init__.py
    │           │   │   ├── dispatcher.py
    │           │   │   └── license.txt
    │           │   ├── forms
    │           │   │   ├── __init__.py
    │           │   │   ├── boundfield.py
    │           │   │   ├── fields.py
    │           │   │   ├── forms.py
    │           │   │   ├── formsets.py
    │           │   │   ├── jinja2
    │           │   │   │   └── django
    │           │   │   │       └── forms
    │           │   │   │           ├── attrs.html
    │           │   │   │           ├── div.html
    │           │   │   │           ├── errors
    │           │   │   │           │   ├── dict
    │           │   │   │           │   │   ├── default.html
    │           │   │   │           │   │   ├── text.txt
    │           │   │   │           │   │   └── ul.html
    │           │   │   │           │   └── list
    │           │   │   │           │       ├── default.html
    │           │   │   │           │       ├── text.txt
    │           │   │   │           │       └── ul.html
    │           │   │   │           ├── field.html
    │           │   │   │           ├── formsets
    │           │   │   │           │   ├── div.html
    │           │   │   │           │   ├── p.html
    │           │   │   │           │   ├── table.html
    │           │   │   │           │   └── ul.html
    │           │   │   │           ├── label.html
    │           │   │   │           ├── p.html
    │           │   │   │           ├── table.html
    │           │   │   │           ├── ul.html
    │           │   │   │           └── widgets
    │           │   │   │               ├── attrs.html
    │           │   │   │               ├── checkbox.html
    │           │   │   │               ├── checkbox_option.html
    │           │   │   │               ├── checkbox_select.html
    │           │   │   │               ├── clearable_file_input.html
    │           │   │   │               ├── color.html
    │           │   │   │               ├── date.html
    │           │   │   │               ├── datetime.html
    │           │   │   │               ├── email.html
    │           │   │   │               ├── file.html
    │           │   │   │               ├── hidden.html
    │           │   │   │               ├── input.html
    │           │   │   │               ├── input_option.html
    │           │   │   │               ├── multiple_hidden.html
    │           │   │   │               ├── multiple_input.html
    │           │   │   │               ├── multiwidget.html
    │           │   │   │               ├── number.html
    │           │   │   │               ├── password.html
    │           │   │   │               ├── radio.html
    │           │   │   │               ├── radio_option.html
    │           │   │   │               ├── search.html
    │           │   │   │               ├── select.html
    │           │   │   │               ├── select_date.html
    │           │   │   │               ├── select_option.html
    │           │   │   │               ├── splitdatetime.html
    │           │   │   │               ├── splithiddendatetime.html
    │           │   │   │               ├── tel.html
    │           │   │   │               ├── text.html
    │           │   │   │               ├── textarea.html
    │           │   │   │               ├── time.html
    │           │   │   │               └── url.html
    │           │   │   ├── models.py
    │           │   │   ├── renderers.py
    │           │   │   ├── templates
    │           │   │   │   └── django
    │           │   │   │       └── forms
    │           │   │   │           ├── attrs.html
    │           │   │   │           ├── div.html
    │           │   │   │           ├── errors
    │           │   │   │           │   ├── dict
    │           │   │   │           │   │   ├── default.html
    │           │   │   │           │   │   ├── text.txt
    │           │   │   │           │   │   └── ul.html
    │           │   │   │           │   └── list
    │           │   │   │           │       ├── default.html
    │           │   │   │           │       ├── text.txt
    │           │   │   │           │       └── ul.html
    │           │   │   │           ├── field.html
    │           │   │   │           ├── formsets
    │           │   │   │           │   ├── div.html
    │           │   │   │           │   ├── p.html
    │           │   │   │           │   ├── table.html
    │           │   │   │           │   └── ul.html
    │           │   │   │           ├── label.html
    │           │   │   │           ├── p.html
    │           │   │   │           ├── table.html
    │           │   │   │           ├── ul.html
    │           │   │   │           └── widgets
    │           │   │   │               ├── attrs.html
    │           │   │   │               ├── checkbox.html
    │           │   │   │               ├── checkbox_option.html
    │           │   │   │               ├── checkbox_select.html
    │           │   │   │               ├── clearable_file_input.html
    │           │   │   │               ├── color.html
    │           │   │   │               ├── date.html
    │           │   │   │               ├── datetime.html
    │           │   │   │               ├── email.html
    │           │   │   │               ├── file.html
    │           │   │   │               ├── hidden.html
    │           │   │   │               ├── input.html
    │           │   │   │               ├── input_option.html
    │           │   │   │               ├── multiple_hidden.html
    │           │   │   │               ├── multiple_input.html
    │           │   │   │               ├── multiwidget.html
    │           │   │   │               ├── number.html
    │           │   │   │               ├── password.html
    │           │   │   │               ├── radio.html
    │           │   │   │               ├── radio_option.html
    │           │   │   │               ├── search.html
    │           │   │   │               ├── select.html
    │           │   │   │               ├── select_date.html
    │           │   │   │               ├── select_option.html
    │           │   │   │               ├── splitdatetime.html
    │           │   │   │               ├── splithiddendatetime.html
    │           │   │   │               ├── tel.html
    │           │   │   │               ├── text.html
    │           │   │   │               ├── textarea.html
    │           │   │   │               ├── time.html
    │           │   │   │               └── url.html
    │           │   │   ├── utils.py
    │           │   │   └── widgets.py
    │           │   ├── http
    │           │   │   ├── __init__.py
    │           │   │   ├── cookie.py
    │           │   │   ├── multipartparser.py
    │           │   │   ├── request.py
    │           │   │   └── response.py
    │           │   ├── middleware
    │           │   │   ├── __init__.py
    │           │   │   ├── cache.py
    │           │   │   ├── clickjacking.py
    │           │   │   ├── common.py
    │           │   │   ├── csrf.py
    │           │   │   ├── gzip.py
    │           │   │   ├── http.py
    │           │   │   ├── locale.py
    │           │   │   └── security.py
    │           │   ├── shortcuts.py
    │           │   ├── template
    │           │   │   ├── __init__.py
    │           │   │   ├── autoreload.py
    │           │   │   ├── backends
    │           │   │   │   ├── __init__.py
    │           │   │   │   ├── base.py
    │           │   │   │   ├── django.py
    │           │   │   │   ├── dummy.py
    │           │   │   │   ├── jinja2.py
    │           │   │   │   └── utils.py
    │           │   │   ├── base.py
    │           │   │   ├── context.py
    │           │   │   ├── context_processors.py
    │           │   │   ├── defaultfilters.py
    │           │   │   ├── defaulttags.py
    │           │   │   ├── engine.py
    │           │   │   ├── exceptions.py
    │           │   │   ├── library.py
    │           │   │   ├── loader.py
    │           │   │   ├── loader_tags.py
    │           │   │   ├── loaders
    │           │   │   │   ├── __init__.py
    │           │   │   │   ├── app_directories.py
    │           │   │   │   ├── base.py
    │           │   │   │   ├── cached.py
    │           │   │   │   ├── filesystem.py
    │           │   │   │   └── locmem.py
    │           │   │   ├── response.py
    │           │   │   ├── smartif.py
    │           │   │   └── utils.py
    │           │   ├── templatetags
    │           │   │   ├── __init__.py
    │           │   │   ├── cache.py
    │           │   │   ├── i18n.py
    │           │   │   ├── l10n.py
    │           │   │   ├── static.py
    │           │   │   └── tz.py
    │           │   ├── test
    │           │   │   ├── __init__.py
    │           │   │   ├── client.py
    │           │   │   ├── html.py
    │           │   │   ├── runner.py
    │           │   │   ├── selenium.py
    │           │   │   ├── signals.py
    │           │   │   ├── testcases.py
    │           │   │   └── utils.py
    │           │   ├── urls
    │           │   │   ├── __init__.py
    │           │   │   ├── base.py
    │           │   │   ├── conf.py
    │           │   │   ├── converters.py
    │           │   │   ├── exceptions.py
    │           │   │   ├── resolvers.py
    │           │   │   └── utils.py
    │           │   ├── utils
    │           │   │   ├── __init__.py
    │           │   │   ├── _os.py
    │           │   │   ├── archive.py
    │           │   │   ├── asyncio.py
    │           │   │   ├── autoreload.py
    │           │   │   ├── cache.py
    │           │   │   ├── choices.py
    │           │   │   ├── connection.py
    │           │   │   ├── crypto.py
    │           │   │   ├── datastructures.py
    │           │   │   ├── dateformat.py
    │           │   │   ├── dateparse.py
    │           │   │   ├── dates.py
    │           │   │   ├── deconstruct.py
    │           │   │   ├── decorators.py
    │           │   │   ├── deprecation.py
    │           │   │   ├── duration.py
    │           │   │   ├── encoding.py
    │           │   │   ├── feedgenerator.py
    │           │   │   ├── formats.py
    │           │   │   ├── functional.py
    │           │   │   ├── hashable.py
    │           │   │   ├── html.py
    │           │   │   ├── http.py
    │           │   │   ├── inspect.py
    │           │   │   ├── ipv6.py
    │           │   │   ├── itercompat.py
    │           │   │   ├── log.py
    │           │   │   ├── lorem_ipsum.py
    │           │   │   ├── module_loading.py
    │           │   │   ├── numberformat.py
    │           │   │   ├── regex_helper.py
    │           │   │   ├── safestring.py
    │           │   │   ├── termcolors.py
    │           │   │   ├── text.py
    │           │   │   ├── timesince.py
    │           │   │   ├── timezone.py
    │           │   │   ├── translation
    │           │   │   │   ├── __init__.py
    │           │   │   │   ├── reloader.py
    │           │   │   │   ├── template.py
    │           │   │   │   ├── trans_null.py
    │           │   │   │   └── trans_real.py
    │           │   │   ├── tree.py
    │           │   │   ├── version.py
    │           │   │   └── xmlutils.py
    │           │   └── views
    │           │       ├── __init__.py
    │           │       ├── csrf.py
    │           │       ├── debug.py
    │           │       ├── decorators
    │           │       │   ├── __init__.py
    │           │       │   ├── cache.py
    │           │       │   ├── clickjacking.py
    │           │       │   ├── common.py
    │           │       │   ├── csrf.py
    │           │       │   ├── debug.py
    │           │       │   ├── gzip.py
    │           │       │   ├── http.py
    │           │       │   └── vary.py
    │           │       ├── defaults.py
    │           │       ├── generic
    │           │       │   ├── __init__.py
    │           │       │   ├── base.py
    │           │       │   ├── dates.py
    │           │       │   ├── detail.py
    │           │       │   ├── edit.py
    │           │       │   └── list.py
    │           │       ├── i18n.py
    │           │       ├── static.py
    │           │       └── templates
    │           │           ├── csrf_403.html
    │           │           ├── default_urlconf.html
    │           │           ├── directory_index.html
    │           │           ├── i18n_catalog.js
    │           │           ├── technical_404.html
    │           │           ├── technical_500.html
    │           │           └── technical_500.txt
    │           ├── django-5.2.4.dist-info
    │           │   ├── INSTALLER
    │           │   ├── METADATA
    │           │   ├── RECORD
    │           │   ├── REQUESTED
    │           │   ├── WHEEL
    │           │   ├── entry_points.txt
    │           │   ├── licenses
    │           │   │   ├── AUTHORS
    │           │   │   ├── LICENSE
    │           │   │   └── LICENSE.python
    │           │   └── top_level.txt
    │           ├── flask
    │           │   ├── __init__.py
    │           │   ├── __main__.py
    │           │   ├── app.py
    │           │   ├── blueprints.py
    │           │   ├── cli.py
    │           │   ├── config.py
    │           │   ├── ctx.py
    │           │   ├── debughelpers.py
    │           │   ├── globals.py
    │           │   ├── helpers.py
    │           │   ├── json
    │           │   │   ├── __init__.py
    │           │   │   ├── provider.py
    │           │   │   └── tag.py
    │           │   ├── logging.py
    │           │   ├── py.typed
    │           │   ├── sansio
    │           │   │   ├── README.md
    │           │   │   ├── app.py
    │           │   │   ├── blueprints.py
    │           │   │   └── scaffold.py
    │           │   ├── sessions.py
    │           │   ├── signals.py
    │           │   ├── templating.py
    │           │   ├── testing.py
    │           │   ├── typing.py
    │           │   ├── views.py
    │           │   └── wrappers.py
    │           ├── flask-3.1.1.dist-info
    │           │   ├── INSTALLER
    │           │   ├── METADATA
    │           │   ├── RECORD
    │           │   ├── REQUESTED
    │           │   ├── WHEEL
    │           │   ├── entry_points.txt
    │           │   └── licenses
    │           │       └── LICENSE.txt
    │           ├── itsdangerous
    │           │   ├── __init__.py
    │           │   ├── _json.py
    │           │   ├── encoding.py
    │           │   ├── exc.py
    │           │   ├── py.typed
    │           │   ├── serializer.py
    │           │   ├── signer.py
    │           │   ├── timed.py
    │           │   └── url_safe.py
    │           ├── itsdangerous-2.2.0.dist-info
    │           │   ├── INSTALLER
    │           │   ├── LICENSE.txt
    │           │   ├── METADATA
    │           │   ├── RECORD
    │           │   └── WHEEL
    │           ├── jinja2
    │           │   ├── __init__.py
    │           │   ├── _identifier.py
    │           │   ├── async_utils.py
    │           │   ├── bccache.py
    │           │   ├── compiler.py
    │           │   ├── constants.py
    │           │   ├── debug.py
    │           │   ├── defaults.py
    │           │   ├── environment.py
    │           │   ├── exceptions.py
    │           │   ├── ext.py
    │           │   ├── filters.py
    │           │   ├── idtracking.py
    │           │   ├── lexer.py
    │           │   ├── loaders.py
    │           │   ├── meta.py
    │           │   ├── nativetypes.py
    │           │   ├── nodes.py
    │           │   ├── optimizer.py
    │           │   ├── parser.py
    │           │   ├── py.typed
    │           │   ├── runtime.py
    │           │   ├── sandbox.py
    │           │   ├── tests.py
    │           │   ├── utils.py
    │           │   └── visitor.py
    │           ├── jinja2-3.1.6.dist-info
    │           │   ├── INSTALLER
    │           │   ├── METADATA
    │           │   ├── RECORD
    │           │   ├── WHEEL
    │           │   ├── entry_points.txt
    │           │   └── licenses
    │           │       └── LICENSE.txt
    │           ├── markupsafe
    │           │   ├── __init__.py
    │           │   ├── _native.py
    │           │   ├── _speedups.c
    │           │   ├── _speedups.cpython-311-x86_64-linux-gnu.so
    │           │   ├── _speedups.pyi
    │           │   └── py.typed
    │           ├── pip
    │           │   ├── __init__.py
    │           │   ├── __main__.py
    │           │   ├── __pip-runner__.py
    │           │   ├── _internal
    │           │   │   ├── __init__.py
    │           │   │   ├── build_env.py
    │           │   │   ├── cache.py
    │           │   │   ├── cli
    │           │   │   │   ├── __init__.py
    │           │   │   │   ├── autocompletion.py
    │           │   │   │   ├── base_command.py
    │           │   │   │   ├── cmdoptions.py
    │           │   │   │   ├── command_context.py
    │           │   │   │   ├── main.py
    │           │   │   │   ├── main_parser.py
    │           │   │   │   ├── parser.py
    │           │   │   │   ├── progress_bars.py
    │           │   │   │   ├── req_command.py
    │           │   │   │   ├── spinners.py
    │           │   │   │   └── status_codes.py
    │           │   │   ├── commands
    │           │   │   │   ├── __init__.py
    │           │   │   │   ├── cache.py
    │           │   │   │   ├── check.py
    │           │   │   │   ├── completion.py
    │           │   │   │   ├── configuration.py
    │           │   │   │   ├── debug.py
    │           │   │   │   ├── download.py
    │           │   │   │   ├── freeze.py
    │           │   │   │   ├── hash.py
    │           │   │   │   ├── help.py
    │           │   │   │   ├── index.py
    │           │   │   │   ├── inspect.py
    │           │   │   │   ├── install.py
    │           │   │   │   ├── list.py
    │           │   │   │   ├── search.py
    │           │   │   │   ├── show.py
    │           │   │   │   ├── uninstall.py
    │           │   │   │   └── wheel.py
    │           │   │   ├── configuration.py
    │           │   │   ├── distributions
    │           │   │   │   ├── __init__.py
    │           │   │   │   ├── base.py
    │           │   │   │   ├── installed.py
    │           │   │   │   ├── sdist.py
    │           │   │   │   └── wheel.py
    │           │   │   ├── exceptions.py
    │           │   │   ├── index
    │           │   │   │   ├── __init__.py
    │           │   │   │   ├── collector.py
    │           │   │   │   ├── package_finder.py
    │           │   │   │   └── sources.py
    │           │   │   ├── locations
    │           │   │   │   ├── __init__.py
    │           │   │   │   ├── _distutils.py
    │           │   │   │   ├── _sysconfig.py
    │           │   │   │   └── base.py
    │           │   │   ├── main.py
    │           │   │   ├── metadata
    │           │   │   │   ├── __init__.py
    │           │   │   │   ├── _json.py
    │           │   │   │   ├── base.py
    │           │   │   │   ├── importlib
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   ├── _compat.py
    │           │   │   │   │   ├── _dists.py
    │           │   │   │   │   └── _envs.py
    │           │   │   │   └── pkg_resources.py
    │           │   │   ├── models
    │           │   │   │   ├── __init__.py
    │           │   │   │   ├── candidate.py
    │           │   │   │   ├── direct_url.py
    │           │   │   │   ├── format_control.py
    │           │   │   │   ├── index.py
    │           │   │   │   ├── installation_report.py
    │           │   │   │   ├── link.py
    │           │   │   │   ├── scheme.py
    │           │   │   │   ├── search_scope.py
    │           │   │   │   ├── selection_prefs.py
    │           │   │   │   ├── target_python.py
    │           │   │   │   └── wheel.py
    │           │   │   ├── network
    │           │   │   │   ├── __init__.py
    │           │   │   │   ├── auth.py
    │           │   │   │   ├── cache.py
    │           │   │   │   ├── download.py
    │           │   │   │   ├── lazy_wheel.py
    │           │   │   │   ├── session.py
    │           │   │   │   ├── utils.py
    │           │   │   │   └── xmlrpc.py
    │           │   │   ├── operations
    │           │   │   │   ├── __init__.py
    │           │   │   │   ├── build
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   ├── build_tracker.py
    │           │   │   │   │   ├── metadata.py
    │           │   │   │   │   ├── metadata_editable.py
    │           │   │   │   │   ├── metadata_legacy.py
    │           │   │   │   │   ├── wheel.py
    │           │   │   │   │   ├── wheel_editable.py
    │           │   │   │   │   └── wheel_legacy.py
    │           │   │   │   ├── check.py
    │           │   │   │   ├── freeze.py
    │           │   │   │   ├── install
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   ├── editable_legacy.py
    │           │   │   │   │   ├── legacy.py
    │           │   │   │   │   └── wheel.py
    │           │   │   │   └── prepare.py
    │           │   │   ├── pyproject.py
    │           │   │   ├── req
    │           │   │   │   ├── __init__.py
    │           │   │   │   ├── constructors.py
    │           │   │   │   ├── req_file.py
    │           │   │   │   ├── req_install.py
    │           │   │   │   ├── req_set.py
    │           │   │   │   └── req_uninstall.py
    │           │   │   ├── resolution
    │           │   │   │   ├── __init__.py
    │           │   │   │   ├── base.py
    │           │   │   │   ├── legacy
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   └── resolver.py
    │           │   │   │   └── resolvelib
    │           │   │   │       ├── __init__.py
    │           │   │   │       ├── base.py
    │           │   │   │       ├── candidates.py
    │           │   │   │       ├── factory.py
    │           │   │   │       ├── found_candidates.py
    │           │   │   │       ├── provider.py
    │           │   │   │       ├── reporter.py
    │           │   │   │       ├── requirements.py
    │           │   │   │       └── resolver.py
    │           │   │   ├── self_outdated_check.py
    │           │   │   ├── utils
    │           │   │   │   ├── __init__.py
    │           │   │   │   ├── _log.py
    │           │   │   │   ├── appdirs.py
    │           │   │   │   ├── compat.py
    │           │   │   │   ├── compatibility_tags.py
    │           │   │   │   ├── datetime.py
    │           │   │   │   ├── deprecation.py
    │           │   │   │   ├── direct_url_helpers.py
    │           │   │   │   ├── distutils_args.py
    │           │   │   │   ├── egg_link.py
    │           │   │   │   ├── encoding.py
    │           │   │   │   ├── entrypoints.py
    │           │   │   │   ├── filesystem.py
    │           │   │   │   ├── filetypes.py
    │           │   │   │   ├── glibc.py
    │           │   │   │   ├── hashes.py
    │           │   │   │   ├── inject_securetransport.py
    │           │   │   │   ├── logging.py
    │           │   │   │   ├── misc.py
    │           │   │   │   ├── models.py
    │           │   │   │   ├── packaging.py
    │           │   │   │   ├── setuptools_build.py
    │           │   │   │   ├── subprocess.py
    │           │   │   │   ├── temp_dir.py
    │           │   │   │   ├── unpacking.py
    │           │   │   │   ├── urls.py
    │           │   │   │   ├── virtualenv.py
    │           │   │   │   └── wheel.py
    │           │   │   ├── vcs
    │           │   │   │   ├── __init__.py
    │           │   │   │   ├── bazaar.py
    │           │   │   │   ├── git.py
    │           │   │   │   ├── mercurial.py
    │           │   │   │   ├── subversion.py
    │           │   │   │   └── versioncontrol.py
    │           │   │   └── wheel_builder.py
    │           │   ├── _vendor
    │           │   │   ├── __init__.py
    │           │   │   ├── cachecontrol
    │           │   │   │   ├── __init__.py
    │           │   │   │   ├── _cmd.py
    │           │   │   │   ├── adapter.py
    │           │   │   │   ├── cache.py
    │           │   │   │   ├── caches
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   ├── file_cache.py
    │           │   │   │   │   └── redis_cache.py
    │           │   │   │   ├── compat.py
    │           │   │   │   ├── controller.py
    │           │   │   │   ├── filewrapper.py
    │           │   │   │   ├── heuristics.py
    │           │   │   │   ├── serialize.py
    │           │   │   │   └── wrapper.py
    │           │   │   ├── certifi
    │           │   │   │   ├── __init__.py
    │           │   │   │   ├── __main__.py
    │           │   │   │   ├── cacert.pem
    │           │   │   │   └── core.py
    │           │   │   ├── chardet
    │           │   │   │   ├── __init__.py
    │           │   │   │   ├── big5freq.py
    │           │   │   │   ├── big5prober.py
    │           │   │   │   ├── chardistribution.py
    │           │   │   │   ├── charsetgroupprober.py
    │           │   │   │   ├── charsetprober.py
    │           │   │   │   ├── cli
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   └── chardetect.py
    │           │   │   │   ├── codingstatemachine.py
    │           │   │   │   ├── codingstatemachinedict.py
    │           │   │   │   ├── cp949prober.py
    │           │   │   │   ├── enums.py
    │           │   │   │   ├── escprober.py
    │           │   │   │   ├── escsm.py
    │           │   │   │   ├── eucjpprober.py
    │           │   │   │   ├── euckrfreq.py
    │           │   │   │   ├── euckrprober.py
    │           │   │   │   ├── euctwfreq.py
    │           │   │   │   ├── euctwprober.py
    │           │   │   │   ├── gb2312freq.py
    │           │   │   │   ├── gb2312prober.py
    │           │   │   │   ├── hebrewprober.py
    │           │   │   │   ├── jisfreq.py
    │           │   │   │   ├── johabfreq.py
    │           │   │   │   ├── johabprober.py
    │           │   │   │   ├── jpcntx.py
    │           │   │   │   ├── langbulgarianmodel.py
    │           │   │   │   ├── langgreekmodel.py
    │           │   │   │   ├── langhebrewmodel.py
    │           │   │   │   ├── langhungarianmodel.py
    │           │   │   │   ├── langrussianmodel.py
    │           │   │   │   ├── langthaimodel.py
    │           │   │   │   ├── langturkishmodel.py
    │           │   │   │   ├── latin1prober.py
    │           │   │   │   ├── macromanprober.py
    │           │   │   │   ├── mbcharsetprober.py
    │           │   │   │   ├── mbcsgroupprober.py
    │           │   │   │   ├── mbcssm.py
    │           │   │   │   ├── metadata
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   └── languages.py
    │           │   │   │   ├── resultdict.py
    │           │   │   │   ├── sbcharsetprober.py
    │           │   │   │   ├── sbcsgroupprober.py
    │           │   │   │   ├── sjisprober.py
    │           │   │   │   ├── universaldetector.py
    │           │   │   │   ├── utf1632prober.py
    │           │   │   │   ├── utf8prober.py
    │           │   │   │   └── version.py
    │           │   │   ├── colorama
    │           │   │   │   ├── __init__.py
    │           │   │   │   ├── ansi.py
    │           │   │   │   ├── ansitowin32.py
    │           │   │   │   ├── initialise.py
    │           │   │   │   ├── tests
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   ├── ansi_test.py
    │           │   │   │   │   ├── ansitowin32_test.py
    │           │   │   │   │   ├── initialise_test.py
    │           │   │   │   │   ├── isatty_test.py
    │           │   │   │   │   ├── utils.py
    │           │   │   │   │   └── winterm_test.py
    │           │   │   │   ├── win32.py
    │           │   │   │   └── winterm.py
    │           │   │   ├── distlib
    │           │   │   │   ├── __init__.py
    │           │   │   │   ├── compat.py
    │           │   │   │   ├── database.py
    │           │   │   │   ├── index.py
    │           │   │   │   ├── locators.py
    │           │   │   │   ├── manifest.py
    │           │   │   │   ├── markers.py
    │           │   │   │   ├── metadata.py
    │           │   │   │   ├── resources.py
    │           │   │   │   ├── scripts.py
    │           │   │   │   ├── util.py
    │           │   │   │   ├── version.py
    │           │   │   │   └── wheel.py
    │           │   │   ├── distro
    │           │   │   │   ├── __init__.py
    │           │   │   │   ├── __main__.py
    │           │   │   │   └── distro.py
    │           │   │   ├── idna
    │           │   │   │   ├── __init__.py
    │           │   │   │   ├── codec.py
    │           │   │   │   ├── compat.py
    │           │   │   │   ├── core.py
    │           │   │   │   ├── idnadata.py
    │           │   │   │   ├── intranges.py
    │           │   │   │   ├── package_data.py
    │           │   │   │   └── uts46data.py
    │           │   │   ├── msgpack
    │           │   │   │   ├── __init__.py
    │           │   │   │   ├── exceptions.py
    │           │   │   │   ├── ext.py
    │           │   │   │   └── fallback.py
    │           │   │   ├── packaging
    │           │   │   │   ├── __about__.py
    │           │   │   │   ├── __init__.py
    │           │   │   │   ├── _manylinux.py
    │           │   │   │   ├── _musllinux.py
    │           │   │   │   ├── _structures.py
    │           │   │   │   ├── markers.py
    │           │   │   │   ├── requirements.py
    │           │   │   │   ├── specifiers.py
    │           │   │   │   ├── tags.py
    │           │   │   │   ├── utils.py
    │           │   │   │   └── version.py
    │           │   │   ├── pkg_resources
    │           │   │   │   ├── __init__.py
    │           │   │   │   └── py31compat.py
    │           │   │   ├── platformdirs
    │           │   │   │   ├── __init__.py
    │           │   │   │   ├── __main__.py
    │           │   │   │   ├── android.py
    │           │   │   │   ├── api.py
    │           │   │   │   ├── macos.py
    │           │   │   │   ├── unix.py
    │           │   │   │   ├── version.py
    │           │   │   │   └── windows.py
    │           │   │   ├── pygments
    │           │   │   │   ├── __init__.py
    │           │   │   │   ├── __main__.py
    │           │   │   │   ├── cmdline.py
    │           │   │   │   ├── console.py
    │           │   │   │   ├── filter.py
    │           │   │   │   ├── filters
    │           │   │   │   │   └── __init__.py
    │           │   │   │   ├── formatter.py
    │           │   │   │   ├── formatters
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   ├── _mapping.py
    │           │   │   │   │   ├── bbcode.py
    │           │   │   │   │   ├── groff.py
    │           │   │   │   │   ├── html.py
    │           │   │   │   │   ├── img.py
    │           │   │   │   │   ├── irc.py
    │           │   │   │   │   ├── latex.py
    │           │   │   │   │   ├── other.py
    │           │   │   │   │   ├── pangomarkup.py
    │           │   │   │   │   ├── rtf.py
    │           │   │   │   │   ├── svg.py
    │           │   │   │   │   ├── terminal.py
    │           │   │   │   │   └── terminal256.py
    │           │   │   │   ├── lexer.py
    │           │   │   │   ├── lexers
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   ├── _mapping.py
    │           │   │   │   │   └── python.py
    │           │   │   │   ├── modeline.py
    │           │   │   │   ├── plugin.py
    │           │   │   │   ├── regexopt.py
    │           │   │   │   ├── scanner.py
    │           │   │   │   ├── sphinxext.py
    │           │   │   │   ├── style.py
    │           │   │   │   ├── styles
    │           │   │   │   │   └── __init__.py
    │           │   │   │   ├── token.py
    │           │   │   │   ├── unistring.py
    │           │   │   │   └── util.py
    │           │   │   ├── pyparsing
    │           │   │   │   ├── __init__.py
    │           │   │   │   ├── actions.py
    │           │   │   │   ├── common.py
    │           │   │   │   ├── core.py
    │           │   │   │   ├── diagram
    │           │   │   │   │   └── __init__.py
    │           │   │   │   ├── exceptions.py
    │           │   │   │   ├── helpers.py
    │           │   │   │   ├── results.py
    │           │   │   │   ├── testing.py
    │           │   │   │   ├── unicode.py
    │           │   │   │   └── util.py
    │           │   │   ├── pyproject_hooks
    │           │   │   │   ├── __init__.py
    │           │   │   │   ├── _compat.py
    │           │   │   │   ├── _impl.py
    │           │   │   │   └── _in_process
    │           │   │   │       ├── __init__.py
    │           │   │   │       └── _in_process.py
    │           │   │   ├── requests
    │           │   │   │   ├── __init__.py
    │           │   │   │   ├── __version__.py
    │           │   │   │   ├── _internal_utils.py
    │           │   │   │   ├── adapters.py
    │           │   │   │   ├── api.py
    │           │   │   │   ├── auth.py
    │           │   │   │   ├── certs.py
    │           │   │   │   ├── compat.py
    │           │   │   │   ├── cookies.py
    │           │   │   │   ├── exceptions.py
    │           │   │   │   ├── help.py
    │           │   │   │   ├── hooks.py
    │           │   │   │   ├── models.py
    │           │   │   │   ├── packages.py
    │           │   │   │   ├── sessions.py
    │           │   │   │   ├── status_codes.py
    │           │   │   │   ├── structures.py
    │           │   │   │   └── utils.py
    │           │   │   ├── resolvelib
    │           │   │   │   ├── __init__.py
    │           │   │   │   ├── compat
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   └── collections_abc.py
    │           │   │   │   ├── providers.py
    │           │   │   │   ├── reporters.py
    │           │   │   │   ├── resolvers.py
    │           │   │   │   └── structs.py
    │           │   │   ├── rich
    │           │   │   │   ├── __init__.py
    │           │   │   │   ├── __main__.py
    │           │   │   │   ├── _cell_widths.py
    │           │   │   │   ├── _emoji_codes.py
    │           │   │   │   ├── _emoji_replace.py
    │           │   │   │   ├── _export_format.py
    │           │   │   │   ├── _extension.py
    │           │   │   │   ├── _inspect.py
    │           │   │   │   ├── _log_render.py
    │           │   │   │   ├── _loop.py
    │           │   │   │   ├── _null_file.py
    │           │   │   │   ├── _palettes.py
    │           │   │   │   ├── _pick.py
    │           │   │   │   ├── _ratio.py
    │           │   │   │   ├── _spinners.py
    │           │   │   │   ├── _stack.py
    │           │   │   │   ├── _timer.py
    │           │   │   │   ├── _win32_console.py
    │           │   │   │   ├── _windows.py
    │           │   │   │   ├── _windows_renderer.py
    │           │   │   │   ├── _wrap.py
    │           │   │   │   ├── abc.py
    │           │   │   │   ├── align.py
    │           │   │   │   ├── ansi.py
    │           │   │   │   ├── bar.py
    │           │   │   │   ├── box.py
    │           │   │   │   ├── cells.py
    │           │   │   │   ├── color.py
    │           │   │   │   ├── color_triplet.py
    │           │   │   │   ├── columns.py
    │           │   │   │   ├── console.py
    │           │   │   │   ├── constrain.py
    │           │   │   │   ├── containers.py
    │           │   │   │   ├── control.py
    │           │   │   │   ├── default_styles.py
    │           │   │   │   ├── diagnose.py
    │           │   │   │   ├── emoji.py
    │           │   │   │   ├── errors.py
    │           │   │   │   ├── file_proxy.py
    │           │   │   │   ├── filesize.py
    │           │   │   │   ├── highlighter.py
    │           │   │   │   ├── json.py
    │           │   │   │   ├── jupyter.py
    │           │   │   │   ├── layout.py
    │           │   │   │   ├── live.py
    │           │   │   │   ├── live_render.py
    │           │   │   │   ├── logging.py
    │           │   │   │   ├── markup.py
    │           │   │   │   ├── measure.py
    │           │   │   │   ├── padding.py
    │           │   │   │   ├── pager.py
    │           │   │   │   ├── palette.py
    │           │   │   │   ├── panel.py
    │           │   │   │   ├── pretty.py
    │           │   │   │   ├── progress.py
    │           │   │   │   ├── progress_bar.py
    │           │   │   │   ├── prompt.py
    │           │   │   │   ├── protocol.py
    │           │   │   │   ├── region.py
    │           │   │   │   ├── repr.py
    │           │   │   │   ├── rule.py
    │           │   │   │   ├── scope.py
    │           │   │   │   ├── screen.py
    │           │   │   │   ├── segment.py
    │           │   │   │   ├── spinner.py
    │           │   │   │   ├── status.py
    │           │   │   │   ├── style.py
    │           │   │   │   ├── styled.py
    │           │   │   │   ├── syntax.py
    │           │   │   │   ├── table.py
    │           │   │   │   ├── terminal_theme.py
    │           │   │   │   ├── text.py
    │           │   │   │   ├── theme.py
    │           │   │   │   ├── themes.py
    │           │   │   │   ├── traceback.py
    │           │   │   │   └── tree.py
    │           │   │   ├── six.py
    │           │   │   ├── tenacity
    │           │   │   │   ├── __init__.py
    │           │   │   │   ├── _asyncio.py
    │           │   │   │   ├── _utils.py
    │           │   │   │   ├── after.py
    │           │   │   │   ├── before.py
    │           │   │   │   ├── before_sleep.py
    │           │   │   │   ├── nap.py
    │           │   │   │   ├── retry.py
    │           │   │   │   ├── stop.py
    │           │   │   │   ├── tornadoweb.py
    │           │   │   │   └── wait.py
    │           │   │   ├── tomli
    │           │   │   │   ├── __init__.py
    │           │   │   │   ├── _parser.py
    │           │   │   │   ├── _re.py
    │           │   │   │   └── _types.py
    │           │   │   ├── typing_extensions.py
    │           │   │   ├── urllib3
    │           │   │   │   ├── __init__.py
    │           │   │   │   ├── _collections.py
    │           │   │   │   ├── _version.py
    │           │   │   │   ├── connection.py
    │           │   │   │   ├── connectionpool.py
    │           │   │   │   ├── contrib
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   ├── _appengine_environ.py
    │           │   │   │   │   ├── _securetransport
    │           │   │   │   │   │   ├── __init__.py
    │           │   │   │   │   │   ├── bindings.py
    │           │   │   │   │   │   └── low_level.py
    │           │   │   │   │   ├── appengine.py
    │           │   │   │   │   ├── ntlmpool.py
    │           │   │   │   │   ├── pyopenssl.py
    │           │   │   │   │   ├── securetransport.py
    │           │   │   │   │   └── socks.py
    │           │   │   │   ├── exceptions.py
    │           │   │   │   ├── fields.py
    │           │   │   │   ├── filepost.py
    │           │   │   │   ├── packages
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   ├── backports
    │           │   │   │   │   │   ├── __init__.py
    │           │   │   │   │   │   └── makefile.py
    │           │   │   │   │   └── six.py
    │           │   │   │   ├── poolmanager.py
    │           │   │   │   ├── request.py
    │           │   │   │   ├── response.py
    │           │   │   │   └── util
    │           │   │   │       ├── __init__.py
    │           │   │   │       ├── connection.py
    │           │   │   │       ├── proxy.py
    │           │   │   │       ├── queue.py
    │           │   │   │       ├── request.py
    │           │   │   │       ├── response.py
    │           │   │   │       ├── retry.py
    │           │   │   │       ├── ssl_.py
    │           │   │   │       ├── ssl_match_hostname.py
    │           │   │   │       ├── ssltransport.py
    │           │   │   │       ├── timeout.py
    │           │   │   │       ├── url.py
    │           │   │   │       └── wait.py
    │           │   │   ├── vendor.txt
    │           │   │   └── webencodings
    │           │   │       ├── __init__.py
    │           │   │       ├── labels.py
    │           │   │       ├── mklabels.py
    │           │   │       ├── tests.py
    │           │   │       └── x_user_defined.py
    │           │   └── py.typed
    │           ├── pip-23.0.1.dist-info
    │           │   ├── INSTALLER
    │           │   ├── LICENSE.txt
    │           │   ├── METADATA
    │           │   ├── RECORD
    │           │   ├── REQUESTED
    │           │   ├── WHEEL
    │           │   ├── entry_points.txt
    │           │   └── top_level.txt
    │           ├── pkg_resources
    │           │   ├── __init__.py
    │           │   ├── _vendor
    │           │   │   ├── __init__.py
    │           │   │   ├── importlib_resources
    │           │   │   │   ├── __init__.py
    │           │   │   │   ├── _adapters.py
    │           │   │   │   ├── _common.py
    │           │   │   │   ├── _compat.py
    │           │   │   │   ├── _itertools.py
    │           │   │   │   ├── _legacy.py
    │           │   │   │   ├── abc.py
    │           │   │   │   ├── readers.py
    │           │   │   │   └── simple.py
    │           │   │   ├── jaraco
    │           │   │   │   ├── __init__.py
    │           │   │   │   ├── context.py
    │           │   │   │   ├── functools.py
    │           │   │   │   └── text
    │           │   │   │       └── __init__.py
    │           │   │   ├── more_itertools
    │           │   │   │   ├── __init__.py
    │           │   │   │   ├── more.py
    │           │   │   │   └── recipes.py
    │           │   │   ├── packaging
    │           │   │   │   ├── __about__.py
    │           │   │   │   ├── __init__.py
    │           │   │   │   ├── _manylinux.py
    │           │   │   │   ├── _musllinux.py
    │           │   │   │   ├── _structures.py
    │           │   │   │   ├── markers.py
    │           │   │   │   ├── requirements.py
    │           │   │   │   ├── specifiers.py
    │           │   │   │   ├── tags.py
    │           │   │   │   ├── utils.py
    │           │   │   │   └── version.py
    │           │   │   ├── platformdirs
    │           │   │   │   ├── __init__.py
    │           │   │   │   ├── __main__.py
    │           │   │   │   ├── android.py
    │           │   │   │   ├── api.py
    │           │   │   │   ├── macos.py
    │           │   │   │   ├── unix.py
    │           │   │   │   ├── version.py
    │           │   │   │   └── windows.py
    │           │   │   ├── pyparsing
    │           │   │   │   ├── __init__.py
    │           │   │   │   ├── actions.py
    │           │   │   │   ├── common.py
    │           │   │   │   ├── core.py
    │           │   │   │   ├── diagram
    │           │   │   │   │   └── __init__.py
    │           │   │   │   ├── exceptions.py
    │           │   │   │   ├── helpers.py
    │           │   │   │   ├── results.py
    │           │   │   │   ├── testing.py
    │           │   │   │   ├── unicode.py
    │           │   │   │   └── util.py
    │           │   │   ├── typing_extensions.py
    │           │   │   └── zipp.py
    │           │   └── extern
    │           │       └── __init__.py
    │           ├── setuptools
    │           │   ├── __init__.py
    │           │   ├── _deprecation_warning.py
    │           │   ├── _distutils
    │           │   │   ├── __init__.py
    │           │   │   ├── _collections.py
    │           │   │   ├── _functools.py
    │           │   │   ├── _log.py
    │           │   │   ├── _macos_compat.py
    │           │   │   ├── _msvccompiler.py
    │           │   │   ├── archive_util.py
    │           │   │   ├── bcppcompiler.py
    │           │   │   ├── ccompiler.py
    │           │   │   ├── cmd.py
    │           │   │   ├── command
    │           │   │   │   ├── __init__.py
    │           │   │   │   ├── _framework_compat.py
    │           │   │   │   ├── bdist.py
    │           │   │   │   ├── bdist_dumb.py
    │           │   │   │   ├── bdist_rpm.py
    │           │   │   │   ├── build.py
    │           │   │   │   ├── build_clib.py
    │           │   │   │   ├── build_ext.py
    │           │   │   │   ├── build_py.py
    │           │   │   │   ├── build_scripts.py
    │           │   │   │   ├── check.py
    │           │   │   │   ├── clean.py
    │           │   │   │   ├── config.py
    │           │   │   │   ├── install.py
    │           │   │   │   ├── install_data.py
    │           │   │   │   ├── install_egg_info.py
    │           │   │   │   ├── install_headers.py
    │           │   │   │   ├── install_lib.py
    │           │   │   │   ├── install_scripts.py
    │           │   │   │   ├── py37compat.py
    │           │   │   │   ├── register.py
    │           │   │   │   ├── sdist.py
    │           │   │   │   └── upload.py
    │           │   │   ├── config.py
    │           │   │   ├── core.py
    │           │   │   ├── cygwinccompiler.py
    │           │   │   ├── debug.py
    │           │   │   ├── dep_util.py
    │           │   │   ├── dir_util.py
    │           │   │   ├── dist.py
    │           │   │   ├── errors.py
    │           │   │   ├── extension.py
    │           │   │   ├── fancy_getopt.py
    │           │   │   ├── file_util.py
    │           │   │   ├── filelist.py
    │           │   │   ├── log.py
    │           │   │   ├── msvc9compiler.py
    │           │   │   ├── msvccompiler.py
    │           │   │   ├── py38compat.py
    │           │   │   ├── py39compat.py
    │           │   │   ├── spawn.py
    │           │   │   ├── sysconfig.py
    │           │   │   ├── text_file.py
    │           │   │   ├── unixccompiler.py
    │           │   │   ├── util.py
    │           │   │   ├── version.py
    │           │   │   └── versionpredicate.py
    │           │   ├── _entry_points.py
    │           │   ├── _imp.py
    │           │   ├── _importlib.py
    │           │   ├── _itertools.py
    │           │   ├── _path.py
    │           │   ├── _reqs.py
    │           │   ├── _vendor
    │           │   │   ├── __init__.py
    │           │   │   ├── importlib_metadata
    │           │   │   │   ├── __init__.py
    │           │   │   │   ├── _adapters.py
    │           │   │   │   ├── _collections.py
    │           │   │   │   ├── _compat.py
    │           │   │   │   ├── _functools.py
    │           │   │   │   ├── _itertools.py
    │           │   │   │   ├── _meta.py
    │           │   │   │   └── _text.py
    │           │   │   ├── importlib_resources
    │           │   │   │   ├── __init__.py
    │           │   │   │   ├── _adapters.py
    │           │   │   │   ├── _common.py
    │           │   │   │   ├── _compat.py
    │           │   │   │   ├── _itertools.py
    │           │   │   │   ├── _legacy.py
    │           │   │   │   ├── abc.py
    │           │   │   │   ├── readers.py
    │           │   │   │   └── simple.py
    │           │   │   ├── jaraco
    │           │   │   │   ├── __init__.py
    │           │   │   │   ├── context.py
    │           │   │   │   ├── functools.py
    │           │   │   │   └── text
    │           │   │   │       └── __init__.py
    │           │   │   ├── more_itertools
    │           │   │   │   ├── __init__.py
    │           │   │   │   ├── more.py
    │           │   │   │   └── recipes.py
    │           │   │   ├── ordered_set.py
    │           │   │   ├── packaging
    │           │   │   │   ├── __about__.py
    │           │   │   │   ├── __init__.py
    │           │   │   │   ├── _manylinux.py
    │           │   │   │   ├── _musllinux.py
    │           │   │   │   ├── _structures.py
    │           │   │   │   ├── markers.py
    │           │   │   │   ├── requirements.py
    │           │   │   │   ├── specifiers.py
    │           │   │   │   ├── tags.py
    │           │   │   │   ├── utils.py
    │           │   │   │   └── version.py
    │           │   │   ├── pyparsing
    │           │   │   │   ├── __init__.py
    │           │   │   │   ├── actions.py
    │           │   │   │   ├── common.py
    │           │   │   │   ├── core.py
    │           │   │   │   ├── diagram
    │           │   │   │   │   └── __init__.py
    │           │   │   │   ├── exceptions.py
    │           │   │   │   ├── helpers.py
    │           │   │   │   ├── results.py
    │           │   │   │   ├── testing.py
    │           │   │   │   ├── unicode.py
    │           │   │   │   └── util.py
    │           │   │   ├── tomli
    │           │   │   │   ├── __init__.py
    │           │   │   │   ├── _parser.py
    │           │   │   │   ├── _re.py
    │           │   │   │   └── _types.py
    │           │   │   ├── typing_extensions.py
    │           │   │   └── zipp.py
    │           │   ├── archive_util.py
    │           │   ├── build_meta.py
    │           │   ├── cli-32.exe
    │           │   ├── cli-64.exe
    │           │   ├── cli-arm64.exe
    │           │   ├── cli.exe
    │           │   ├── command
    │           │   │   ├── __init__.py
    │           │   │   ├── alias.py
    │           │   │   ├── bdist_egg.py
    │           │   │   ├── bdist_rpm.py
    │           │   │   ├── build.py
    │           │   │   ├── build_clib.py
    │           │   │   ├── build_ext.py
    │           │   │   ├── build_py.py
    │           │   │   ├── develop.py
    │           │   │   ├── dist_info.py
    │           │   │   ├── easy_install.py
    │           │   │   ├── editable_wheel.py
    │           │   │   ├── egg_info.py
    │           │   │   ├── install.py
    │           │   │   ├── install_egg_info.py
    │           │   │   ├── install_lib.py
    │           │   │   ├── install_scripts.py
    │           │   │   ├── launcher manifest.xml
    │           │   │   ├── py36compat.py
    │           │   │   ├── register.py
    │           │   │   ├── rotate.py
    │           │   │   ├── saveopts.py
    │           │   │   ├── sdist.py
    │           │   │   ├── setopt.py
    │           │   │   ├── test.py
    │           │   │   ├── upload.py
    │           │   │   └── upload_docs.py
    │           │   ├── config
    │           │   │   ├── __init__.py
    │           │   │   ├── _apply_pyprojecttoml.py
    │           │   │   ├── _validate_pyproject
    │           │   │   │   ├── __init__.py
    │           │   │   │   ├── error_reporting.py
    │           │   │   │   ├── extra_validations.py
    │           │   │   │   ├── fastjsonschema_exceptions.py
    │           │   │   │   ├── fastjsonschema_validations.py
    │           │   │   │   └── formats.py
    │           │   │   ├── expand.py
    │           │   │   ├── pyprojecttoml.py
    │           │   │   └── setupcfg.py
    │           │   ├── dep_util.py
    │           │   ├── depends.py
    │           │   ├── discovery.py
    │           │   ├── dist.py
    │           │   ├── errors.py
    │           │   ├── extension.py
    │           │   ├── extern
    │           │   │   └── __init__.py
    │           │   ├── glob.py
    │           │   ├── gui-32.exe
    │           │   ├── gui-64.exe
    │           │   ├── gui-arm64.exe
    │           │   ├── gui.exe
    │           │   ├── installer.py
    │           │   ├── launch.py
    │           │   ├── logging.py
    │           │   ├── monkey.py
    │           │   ├── msvc.py
    │           │   ├── namespaces.py
    │           │   ├── package_index.py
    │           │   ├── py34compat.py
    │           │   ├── sandbox.py
    │           │   ├── script (dev).tmpl
    │           │   ├── script.tmpl
    │           │   ├── unicode_utils.py
    │           │   ├── version.py
    │           │   ├── wheel.py
    │           │   └── windows_support.py
    │           ├── setuptools-66.1.1.dist-info
    │           │   ├── INSTALLER
    │           │   ├── LICENSE
    │           │   ├── METADATA
    │           │   ├── RECORD
    │           │   ├── REQUESTED
    │           │   ├── WHEEL
    │           │   ├── entry_points.txt
    │           │   └── top_level.txt
    │           ├── sqlparse
    │           │   ├── __init__.py
    │           │   ├── __main__.py
    │           │   ├── cli.py
    │           │   ├── engine
    │           │   │   ├── __init__.py
    │           │   │   ├── filter_stack.py
    │           │   │   ├── grouping.py
    │           │   │   └── statement_splitter.py
    │           │   ├── exceptions.py
    │           │   ├── filters
    │           │   │   ├── __init__.py
    │           │   │   ├── aligned_indent.py
    │           │   │   ├── others.py
    │           │   │   ├── output.py
    │           │   │   ├── reindent.py
    │           │   │   ├── right_margin.py
    │           │   │   └── tokens.py
    │           │   ├── formatter.py
    │           │   ├── keywords.py
    │           │   ├── lexer.py
    │           │   ├── sql.py
    │           │   ├── tokens.py
    │           │   └── utils.py
    │           ├── sqlparse-0.5.3.dist-info
    │           │   ├── INSTALLER
    │           │   ├── METADATA
    │           │   ├── RECORD
    │           │   ├── WHEEL
    │           │   ├── entry_points.txt
    │           │   └── licenses
    │           │       ├── AUTHORS
    │           │       └── LICENSE
    │           ├── watchdog
    │           │   ├── __init__.py
    │           │   ├── events.py
    │           │   ├── observers
    │           │   │   ├── __init__.py
    │           │   │   ├── api.py
    │           │   │   ├── fsevents.py
    │           │   │   ├── fsevents2.py
    │           │   │   ├── inotify.py
    │           │   │   ├── inotify_buffer.py
    │           │   │   ├── inotify_c.py
    │           │   │   ├── kqueue.py
    │           │   │   ├── polling.py
    │           │   │   ├── read_directory_changes.py
    │           │   │   └── winapi.py
    │           │   ├── py.typed
    │           │   ├── tricks
    │           │   │   └── __init__.py
    │           │   ├── utils
    │           │   │   ├── __init__.py
    │           │   │   ├── bricks.py
    │           │   │   ├── delayed_queue.py
    │           │   │   ├── dirsnapshot.py
    │           │   │   ├── echo.py
    │           │   │   ├── event_debouncer.py
    │           │   │   ├── patterns.py
    │           │   │   ├── platform.py
    │           │   │   └── process_watcher.py
    │           │   ├── version.py
    │           │   └── watchmedo.py
    │           ├── watchdog-6.0.0.dist-info
    │           │   ├── AUTHORS
    │           │   ├── COPYING
    │           │   ├── INSTALLER
    │           │   ├── LICENSE
    │           │   ├── METADATA
    │           │   ├── RECORD
    │           │   ├── REQUESTED
    │           │   ├── WHEEL
    │           │   ├── entry_points.txt
    │           │   └── top_level.txt
    │           ├── werkzeug
    │           │   ├── __init__.py
    │           │   ├── _internal.py
    │           │   ├── _reloader.py
    │           │   ├── datastructures
    │           │   │   ├── __init__.py
    │           │   │   ├── accept.py
    │           │   │   ├── auth.py
    │           │   │   ├── cache_control.py
    │           │   │   ├── csp.py
    │           │   │   ├── etag.py
    │           │   │   ├── file_storage.py
    │           │   │   ├── headers.py
    │           │   │   ├── mixins.py
    │           │   │   ├── range.py
    │           │   │   └── structures.py
    │           │   ├── debug
    │           │   │   ├── __init__.py
    │           │   │   ├── console.py
    │           │   │   ├── repr.py
    │           │   │   ├── shared
    │           │   │   │   ├── ICON_LICENSE.md
    │           │   │   │   ├── console.png
    │           │   │   │   ├── debugger.js
    │           │   │   │   ├── less.png
    │           │   │   │   ├── more.png
    │           │   │   │   └── style.css
    │           │   │   └── tbtools.py
    │           │   ├── exceptions.py
    │           │   ├── formparser.py
    │           │   ├── http.py
    │           │   ├── local.py
    │           │   ├── middleware
    │           │   │   ├── __init__.py
    │           │   │   ├── dispatcher.py
    │           │   │   ├── http_proxy.py
    │           │   │   ├── lint.py
    │           │   │   ├── profiler.py
    │           │   │   ├── proxy_fix.py
    │           │   │   └── shared_data.py
    │           │   ├── py.typed
    │           │   ├── routing
    │           │   │   ├── __init__.py
    │           │   │   ├── converters.py
    │           │   │   ├── exceptions.py
    │           │   │   ├── map.py
    │           │   │   ├── matcher.py
    │           │   │   └── rules.py
    │           │   ├── sansio
    │           │   │   ├── __init__.py
    │           │   │   ├── http.py
    │           │   │   ├── multipart.py
    │           │   │   ├── request.py
    │           │   │   ├── response.py
    │           │   │   └── utils.py
    │           │   ├── security.py
    │           │   ├── serving.py
    │           │   ├── test.py
    │           │   ├── testapp.py
    │           │   ├── urls.py
    │           │   ├── user_agent.py
    │           │   ├── utils.py
    │           │   ├── wrappers
    │           │   │   ├── __init__.py
    │           │   │   ├── request.py
    │           │   │   └── response.py
    │           │   └── wsgi.py
    │           └── werkzeug-3.1.3.dist-info
    │               ├── INSTALLER
    │               ├── LICENSE.txt
    │               ├── METADATA
    │               ├── RECORD
    │               └── WHEEL
    ├── lib64
    │   └── python3.11
    │       └── site-packages
    │           ├── MarkupSafe-3.0.2.dist-info
    │           │   ├── INSTALLER
    │           │   ├── LICENSE.txt
    │           │   ├── METADATA
    │           │   ├── RECORD
    │           │   ├── WHEEL
    │           │   └── top_level.txt
    │           ├── _distutils_hack
    │           │   ├── __init__.py
    │           │   └── override.py
    │           ├── asgiref
    │           │   ├── __init__.py
    │           │   ├── compatibility.py
    │           │   ├── current_thread_executor.py
    │           │   ├── local.py
    │           │   ├── py.typed
    │           │   ├── server.py
    │           │   ├── sync.py
    │           │   ├── testing.py
    │           │   ├── timeout.py
    │           │   ├── typing.py
    │           │   └── wsgi.py
    │           ├── asgiref-3.9.0.dist-info
    │           │   ├── INSTALLER
    │           │   ├── METADATA
    │           │   ├── RECORD
    │           │   ├── WHEEL
    │           │   ├── licenses
    │           │   │   └── LICENSE
    │           │   └── top_level.txt
    │           ├── blinker
    │           │   ├── __init__.py
    │           │   ├── _utilities.py
    │           │   ├── base.py
    │           │   └── py.typed
    │           ├── blinker-1.9.0.dist-info
    │           │   ├── INSTALLER
    │           │   ├── LICENSE.txt
    │           │   ├── METADATA
    │           │   ├── RECORD
    │           │   └── WHEEL
    │           ├── click
    │           │   ├── __init__.py
    │           │   ├── _compat.py
    │           │   ├── _termui_impl.py
    │           │   ├── _textwrap.py
    │           │   ├── _winconsole.py
    │           │   ├── core.py
    │           │   ├── decorators.py
    │           │   ├── exceptions.py
    │           │   ├── formatting.py
    │           │   ├── globals.py
    │           │   ├── parser.py
    │           │   ├── py.typed
    │           │   ├── shell_completion.py
    │           │   ├── termui.py
    │           │   ├── testing.py
    │           │   ├── types.py
    │           │   └── utils.py
    │           ├── click-8.2.1.dist-info
    │           │   ├── INSTALLER
    │           │   ├── METADATA
    │           │   ├── RECORD
    │           │   ├── WHEEL
    │           │   └── licenses
    │           │       └── LICENSE.txt
    │           ├── distutils-precedence.pth
    │           ├── django
    │           │   ├── __init__.py
    │           │   ├── __main__.py
    │           │   ├── apps
    │           │   │   ├── __init__.py
    │           │   │   ├── config.py
    │           │   │   └── registry.py
    │           │   ├── conf
    │           │   │   ├── __init__.py
    │           │   │   ├── app_template
    │           │   │   │   ├── __init__.py-tpl
    │           │   │   │   ├── admin.py-tpl
    │           │   │   │   ├── apps.py-tpl
    │           │   │   │   ├── migrations
    │           │   │   │   │   └── __init__.py-tpl
    │           │   │   │   ├── models.py-tpl
    │           │   │   │   ├── tests.py-tpl
    │           │   │   │   └── views.py-tpl
    │           │   │   ├── global_settings.py
    │           │   │   ├── locale
    │           │   │   │   ├── __init__.py
    │           │   │   │   ├── af
    │           │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │       ├── django.mo
    │           │   │   │   │       └── django.po
    │           │   │   │   ├── ar
    │           │   │   │   │   ├── LC_MESSAGES
    │           │   │   │   │   │   ├── django.mo
    │           │   │   │   │   │   └── django.po
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   └── formats.py
    │           │   │   │   ├── ar_DZ
    │           │   │   │   │   ├── LC_MESSAGES
    │           │   │   │   │   │   ├── django.mo
    │           │   │   │   │   │   └── django.po
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   └── formats.py
    │           │   │   │   ├── ast
    │           │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │       ├── django.mo
    │           │   │   │   │       └── django.po
    │           │   │   │   ├── az
    │           │   │   │   │   ├── LC_MESSAGES
    │           │   │   │   │   │   ├── django.mo
    │           │   │   │   │   │   └── django.po
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   └── formats.py
    │           │   │   │   ├── be
    │           │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │       ├── django.mo
    │           │   │   │   │       └── django.po
    │           │   │   │   ├── bg
    │           │   │   │   │   ├── LC_MESSAGES
    │           │   │   │   │   │   ├── django.mo
    │           │   │   │   │   │   └── django.po
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   └── formats.py
    │           │   │   │   ├── bn
    │           │   │   │   │   ├── LC_MESSAGES
    │           │   │   │   │   │   ├── django.mo
    │           │   │   │   │   │   └── django.po
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   └── formats.py
    │           │   │   │   ├── br
    │           │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │       ├── django.mo
    │           │   │   │   │       └── django.po
    │           │   │   │   ├── bs
    │           │   │   │   │   ├── LC_MESSAGES
    │           │   │   │   │   │   ├── django.mo
    │           │   │   │   │   │   └── django.po
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   └── formats.py
    │           │   │   │   ├── ca
    │           │   │   │   │   ├── LC_MESSAGES
    │           │   │   │   │   │   ├── django.mo
    │           │   │   │   │   │   └── django.po
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   └── formats.py
    │           │   │   │   ├── ckb
    │           │   │   │   │   ├── LC_MESSAGES
    │           │   │   │   │   │   ├── django.mo
    │           │   │   │   │   │   └── django.po
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   └── formats.py
    │           │   │   │   ├── cs
    │           │   │   │   │   ├── LC_MESSAGES
    │           │   │   │   │   │   ├── django.mo
    │           │   │   │   │   │   └── django.po
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   └── formats.py
    │           │   │   │   ├── cy
    │           │   │   │   │   ├── LC_MESSAGES
    │           │   │   │   │   │   ├── django.mo
    │           │   │   │   │   │   └── django.po
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   └── formats.py
    │           │   │   │   ├── da
    │           │   │   │   │   ├── LC_MESSAGES
    │           │   │   │   │   │   ├── django.mo
    │           │   │   │   │   │   └── django.po
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   └── formats.py
    │           │   │   │   ├── de
    │           │   │   │   │   ├── LC_MESSAGES
    │           │   │   │   │   │   ├── django.mo
    │           │   │   │   │   │   └── django.po
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   └── formats.py
    │           │   │   │   ├── de_CH
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   └── formats.py
    │           │   │   │   ├── dsb
    │           │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │       ├── django.mo
    │           │   │   │   │       └── django.po
    │           │   │   │   ├── el
    │           │   │   │   │   ├── LC_MESSAGES
    │           │   │   │   │   │   ├── django.mo
    │           │   │   │   │   │   └── django.po
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   └── formats.py
    │           │   │   │   ├── en
    │           │   │   │   │   ├── LC_MESSAGES
    │           │   │   │   │   │   ├── django.mo
    │           │   │   │   │   │   └── django.po
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   └── formats.py
    │           │   │   │   ├── en_AU
    │           │   │   │   │   ├── LC_MESSAGES
    │           │   │   │   │   │   ├── django.mo
    │           │   │   │   │   │   └── django.po
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   └── formats.py
    │           │   │   │   ├── en_CA
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   └── formats.py
    │           │   │   │   ├── en_GB
    │           │   │   │   │   ├── LC_MESSAGES
    │           │   │   │   │   │   ├── django.mo
    │           │   │   │   │   │   └── django.po
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   └── formats.py
    │           │   │   │   ├── en_IE
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   └── formats.py
    │           │   │   │   ├── eo
    │           │   │   │   │   ├── LC_MESSAGES
    │           │   │   │   │   │   ├── django.mo
    │           │   │   │   │   │   └── django.po
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   └── formats.py
    │           │   │   │   ├── es
    │           │   │   │   │   ├── LC_MESSAGES
    │           │   │   │   │   │   ├── django.mo
    │           │   │   │   │   │   └── django.po
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   └── formats.py
    │           │   │   │   ├── es_AR
    │           │   │   │   │   ├── LC_MESSAGES
    │           │   │   │   │   │   ├── django.mo
    │           │   │   │   │   │   └── django.po
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   └── formats.py
    │           │   │   │   ├── es_CO
    │           │   │   │   │   ├── LC_MESSAGES
    │           │   │   │   │   │   ├── django.mo
    │           │   │   │   │   │   └── django.po
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   └── formats.py
    │           │   │   │   ├── es_MX
    │           │   │   │   │   ├── LC_MESSAGES
    │           │   │   │   │   │   ├── django.mo
    │           │   │   │   │   │   └── django.po
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   └── formats.py
    │           │   │   │   ├── es_NI
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   └── formats.py
    │           │   │   │   ├── es_PR
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   └── formats.py
    │           │   │   │   ├── es_VE
    │           │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │       ├── django.mo
    │           │   │   │   │       └── django.po
    │           │   │   │   ├── et
    │           │   │   │   │   ├── LC_MESSAGES
    │           │   │   │   │   │   ├── django.mo
    │           │   │   │   │   │   └── django.po
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   └── formats.py
    │           │   │   │   ├── eu
    │           │   │   │   │   ├── LC_MESSAGES
    │           │   │   │   │   │   ├── django.mo
    │           │   │   │   │   │   └── django.po
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   └── formats.py
    │           │   │   │   ├── fa
    │           │   │   │   │   ├── LC_MESSAGES
    │           │   │   │   │   │   ├── django.mo
    │           │   │   │   │   │   └── django.po
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   └── formats.py
    │           │   │   │   ├── fi
    │           │   │   │   │   ├── LC_MESSAGES
    │           │   │   │   │   │   ├── django.mo
    │           │   │   │   │   │   └── django.po
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   └── formats.py
    │           │   │   │   ├── fr
    │           │   │   │   │   ├── LC_MESSAGES
    │           │   │   │   │   │   ├── django.mo
    │           │   │   │   │   │   └── django.po
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   └── formats.py
    │           │   │   │   ├── fr_BE
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   └── formats.py
    │           │   │   │   ├── fr_CA
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   └── formats.py
    │           │   │   │   ├── fr_CH
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   └── formats.py
    │           │   │   │   ├── fy
    │           │   │   │   │   ├── LC_MESSAGES
    │           │   │   │   │   │   ├── django.mo
    │           │   │   │   │   │   └── django.po
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   └── formats.py
    │           │   │   │   ├── ga
    │           │   │   │   │   ├── LC_MESSAGES
    │           │   │   │   │   │   ├── django.mo
    │           │   │   │   │   │   └── django.po
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   └── formats.py
    │           │   │   │   ├── gd
    │           │   │   │   │   ├── LC_MESSAGES
    │           │   │   │   │   │   ├── django.mo
    │           │   │   │   │   │   └── django.po
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   └── formats.py
    │           │   │   │   ├── gl
    │           │   │   │   │   ├── LC_MESSAGES
    │           │   │   │   │   │   ├── django.mo
    │           │   │   │   │   │   └── django.po
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   └── formats.py
    │           │   │   │   ├── he
    │           │   │   │   │   ├── LC_MESSAGES
    │           │   │   │   │   │   ├── django.mo
    │           │   │   │   │   │   └── django.po
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   └── formats.py
    │           │   │   │   ├── hi
    │           │   │   │   │   ├── LC_MESSAGES
    │           │   │   │   │   │   ├── django.mo
    │           │   │   │   │   │   └── django.po
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   └── formats.py
    │           │   │   │   ├── hr
    │           │   │   │   │   ├── LC_MESSAGES
    │           │   │   │   │   │   ├── django.mo
    │           │   │   │   │   │   └── django.po
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   └── formats.py
    │           │   │   │   ├── hsb
    │           │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │       ├── django.mo
    │           │   │   │   │       └── django.po
    │           │   │   │   ├── hu
    │           │   │   │   │   ├── LC_MESSAGES
    │           │   │   │   │   │   ├── django.mo
    │           │   │   │   │   │   └── django.po
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   └── formats.py
    │           │   │   │   ├── hy
    │           │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │       ├── django.mo
    │           │   │   │   │       └── django.po
    │           │   │   │   ├── ia
    │           │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │       ├── django.mo
    │           │   │   │   │       └── django.po
    │           │   │   │   ├── id
    │           │   │   │   │   ├── LC_MESSAGES
    │           │   │   │   │   │   ├── django.mo
    │           │   │   │   │   │   └── django.po
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   └── formats.py
    │           │   │   │   ├── ig
    │           │   │   │   │   ├── LC_MESSAGES
    │           │   │   │   │   │   ├── django.mo
    │           │   │   │   │   │   └── django.po
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   └── formats.py
    │           │   │   │   ├── io
    │           │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │       ├── django.mo
    │           │   │   │   │       └── django.po
    │           │   │   │   ├── is
    │           │   │   │   │   ├── LC_MESSAGES
    │           │   │   │   │   │   ├── django.mo
    │           │   │   │   │   │   └── django.po
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   └── formats.py
    │           │   │   │   ├── it
    │           │   │   │   │   ├── LC_MESSAGES
    │           │   │   │   │   │   ├── django.mo
    │           │   │   │   │   │   └── django.po
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   └── formats.py
    │           │   │   │   ├── ja
    │           │   │   │   │   ├── LC_MESSAGES
    │           │   │   │   │   │   ├── django.mo
    │           │   │   │   │   │   └── django.po
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   └── formats.py
    │           │   │   │   ├── ka
    │           │   │   │   │   ├── LC_MESSAGES
    │           │   │   │   │   │   ├── django.mo
    │           │   │   │   │   │   └── django.po
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   └── formats.py
    │           │   │   │   ├── kab
    │           │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │       ├── django.mo
    │           │   │   │   │       └── django.po
    │           │   │   │   ├── kk
    │           │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │       ├── django.mo
    │           │   │   │   │       └── django.po
    │           │   │   │   ├── km
    │           │   │   │   │   ├── LC_MESSAGES
    │           │   │   │   │   │   ├── django.mo
    │           │   │   │   │   │   └── django.po
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   └── formats.py
    │           │   │   │   ├── kn
    │           │   │   │   │   ├── LC_MESSAGES
    │           │   │   │   │   │   ├── django.mo
    │           │   │   │   │   │   └── django.po
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   └── formats.py
    │           │   │   │   ├── ko
    │           │   │   │   │   ├── LC_MESSAGES
    │           │   │   │   │   │   ├── django.mo
    │           │   │   │   │   │   └── django.po
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   └── formats.py
    │           │   │   │   ├── ky
    │           │   │   │   │   ├── LC_MESSAGES
    │           │   │   │   │   │   ├── django.mo
    │           │   │   │   │   │   └── django.po
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   └── formats.py
    │           │   │   │   ├── lb
    │           │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │       ├── django.mo
    │           │   │   │   │       └── django.po
    │           │   │   │   ├── lt
    │           │   │   │   │   ├── LC_MESSAGES
    │           │   │   │   │   │   ├── django.mo
    │           │   │   │   │   │   └── django.po
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   └── formats.py
    │           │   │   │   ├── lv
    │           │   │   │   │   ├── LC_MESSAGES
    │           │   │   │   │   │   ├── django.mo
    │           │   │   │   │   │   └── django.po
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   └── formats.py
    │           │   │   │   ├── mk
    │           │   │   │   │   ├── LC_MESSAGES
    │           │   │   │   │   │   ├── django.mo
    │           │   │   │   │   │   └── django.po
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   └── formats.py
    │           │   │   │   ├── ml
    │           │   │   │   │   ├── LC_MESSAGES
    │           │   │   │   │   │   ├── django.mo
    │           │   │   │   │   │   └── django.po
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   └── formats.py
    │           │   │   │   ├── mn
    │           │   │   │   │   ├── LC_MESSAGES
    │           │   │   │   │   │   ├── django.mo
    │           │   │   │   │   │   └── django.po
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   └── formats.py
    │           │   │   │   ├── mr
    │           │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │       ├── django.mo
    │           │   │   │   │       └── django.po
    │           │   │   │   ├── ms
    │           │   │   │   │   ├── LC_MESSAGES
    │           │   │   │   │   │   ├── django.mo
    │           │   │   │   │   │   └── django.po
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   └── formats.py
    │           │   │   │   ├── my
    │           │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │       ├── django.mo
    │           │   │   │   │       └── django.po
    │           │   │   │   ├── nb
    │           │   │   │   │   ├── LC_MESSAGES
    │           │   │   │   │   │   ├── django.mo
    │           │   │   │   │   │   └── django.po
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   └── formats.py
    │           │   │   │   ├── ne
    │           │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │       ├── django.mo
    │           │   │   │   │       └── django.po
    │           │   │   │   ├── nl
    │           │   │   │   │   ├── LC_MESSAGES
    │           │   │   │   │   │   ├── django.mo
    │           │   │   │   │   │   └── django.po
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   └── formats.py
    │           │   │   │   ├── nn
    │           │   │   │   │   ├── LC_MESSAGES
    │           │   │   │   │   │   ├── django.mo
    │           │   │   │   │   │   └── django.po
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   └── formats.py
    │           │   │   │   ├── os
    │           │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │       ├── django.mo
    │           │   │   │   │       └── django.po
    │           │   │   │   ├── pa
    │           │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │       ├── django.mo
    │           │   │   │   │       └── django.po
    │           │   │   │   ├── pl
    │           │   │   │   │   ├── LC_MESSAGES
    │           │   │   │   │   │   ├── django.mo
    │           │   │   │   │   │   └── django.po
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   └── formats.py
    │           │   │   │   ├── pt
    │           │   │   │   │   ├── LC_MESSAGES
    │           │   │   │   │   │   ├── django.mo
    │           │   │   │   │   │   └── django.po
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   └── formats.py
    │           │   │   │   ├── pt_BR
    │           │   │   │   │   ├── LC_MESSAGES
    │           │   │   │   │   │   ├── django.mo
    │           │   │   │   │   │   └── django.po
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   └── formats.py
    │           │   │   │   ├── ro
    │           │   │   │   │   ├── LC_MESSAGES
    │           │   │   │   │   │   ├── django.mo
    │           │   │   │   │   │   └── django.po
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   └── formats.py
    │           │   │   │   ├── ru
    │           │   │   │   │   ├── LC_MESSAGES
    │           │   │   │   │   │   ├── django.mo
    │           │   │   │   │   │   └── django.po
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   └── formats.py
    │           │   │   │   ├── sk
    │           │   │   │   │   ├── LC_MESSAGES
    │           │   │   │   │   │   ├── django.mo
    │           │   │   │   │   │   └── django.po
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   └── formats.py
    │           │   │   │   ├── sl
    │           │   │   │   │   ├── LC_MESSAGES
    │           │   │   │   │   │   ├── django.mo
    │           │   │   │   │   │   └── django.po
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   └── formats.py
    │           │   │   │   ├── sq
    │           │   │   │   │   ├── LC_MESSAGES
    │           │   │   │   │   │   ├── django.mo
    │           │   │   │   │   │   └── django.po
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   └── formats.py
    │           │   │   │   ├── sr
    │           │   │   │   │   ├── LC_MESSAGES
    │           │   │   │   │   │   ├── django.mo
    │           │   │   │   │   │   └── django.po
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   └── formats.py
    │           │   │   │   ├── sr_Latn
    │           │   │   │   │   ├── LC_MESSAGES
    │           │   │   │   │   │   ├── django.mo
    │           │   │   │   │   │   └── django.po
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   └── formats.py
    │           │   │   │   ├── sv
    │           │   │   │   │   ├── LC_MESSAGES
    │           │   │   │   │   │   ├── django.mo
    │           │   │   │   │   │   └── django.po
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   └── formats.py
    │           │   │   │   ├── sw
    │           │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │       ├── django.mo
    │           │   │   │   │       └── django.po
    │           │   │   │   ├── ta
    │           │   │   │   │   ├── LC_MESSAGES
    │           │   │   │   │   │   ├── django.mo
    │           │   │   │   │   │   └── django.po
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   └── formats.py
    │           │   │   │   ├── te
    │           │   │   │   │   ├── LC_MESSAGES
    │           │   │   │   │   │   ├── django.mo
    │           │   │   │   │   │   └── django.po
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   └── formats.py
    │           │   │   │   ├── tg
    │           │   │   │   │   ├── LC_MESSAGES
    │           │   │   │   │   │   ├── django.mo
    │           │   │   │   │   │   └── django.po
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   └── formats.py
    │           │   │   │   ├── th
    │           │   │   │   │   ├── LC_MESSAGES
    │           │   │   │   │   │   ├── django.mo
    │           │   │   │   │   │   └── django.po
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   └── formats.py
    │           │   │   │   ├── tk
    │           │   │   │   │   ├── LC_MESSAGES
    │           │   │   │   │   │   ├── django.mo
    │           │   │   │   │   │   └── django.po
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   └── formats.py
    │           │   │   │   ├── tr
    │           │   │   │   │   ├── LC_MESSAGES
    │           │   │   │   │   │   ├── django.mo
    │           │   │   │   │   │   └── django.po
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   └── formats.py
    │           │   │   │   ├── tt
    │           │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │       ├── django.mo
    │           │   │   │   │       └── django.po
    │           │   │   │   ├── udm
    │           │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │       ├── django.mo
    │           │   │   │   │       └── django.po
    │           │   │   │   ├── ug
    │           │   │   │   │   ├── LC_MESSAGES
    │           │   │   │   │   │   ├── django.mo
    │           │   │   │   │   │   └── django.po
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   └── formats.py
    │           │   │   │   ├── uk
    │           │   │   │   │   ├── LC_MESSAGES
    │           │   │   │   │   │   ├── django.mo
    │           │   │   │   │   │   └── django.po
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   └── formats.py
    │           │   │   │   ├── ur
    │           │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │       ├── django.mo
    │           │   │   │   │       └── django.po
    │           │   │   │   ├── uz
    │           │   │   │   │   ├── LC_MESSAGES
    │           │   │   │   │   │   ├── django.mo
    │           │   │   │   │   │   └── django.po
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   └── formats.py
    │           │   │   │   ├── vi
    │           │   │   │   │   ├── LC_MESSAGES
    │           │   │   │   │   │   ├── django.mo
    │           │   │   │   │   │   └── django.po
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   └── formats.py
    │           │   │   │   ├── zh_Hans
    │           │   │   │   │   ├── LC_MESSAGES
    │           │   │   │   │   │   ├── django.mo
    │           │   │   │   │   │   └── django.po
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   └── formats.py
    │           │   │   │   └── zh_Hant
    │           │   │   │       ├── LC_MESSAGES
    │           │   │   │       │   ├── django.mo
    │           │   │   │       │   └── django.po
    │           │   │   │       ├── __init__.py
    │           │   │   │       └── formats.py
    │           │   │   ├── project_template
    │           │   │   │   ├── manage.py-tpl
    │           │   │   │   └── project_name
    │           │   │   │       ├── __init__.py-tpl
    │           │   │   │       ├── asgi.py-tpl
    │           │   │   │       ├── settings.py-tpl
    │           │   │   │       ├── urls.py-tpl
    │           │   │   │       └── wsgi.py-tpl
    │           │   │   └── urls
    │           │   │       ├── __init__.py
    │           │   │       ├── i18n.py
    │           │   │       └── static.py
    │           │   ├── contrib
    │           │   │   ├── __init__.py
    │           │   │   ├── admin
    │           │   │   │   ├── __init__.py
    │           │   │   │   ├── actions.py
    │           │   │   │   ├── apps.py
    │           │   │   │   ├── checks.py
    │           │   │   │   ├── decorators.py
    │           │   │   │   ├── exceptions.py
    │           │   │   │   ├── filters.py
    │           │   │   │   ├── forms.py
    │           │   │   │   ├── helpers.py
    │           │   │   │   ├── locale
    │           │   │   │   │   ├── af
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       ├── django.po
    │           │   │   │   │   │       ├── djangojs.mo
    │           │   │   │   │   │       └── djangojs.po
    │           │   │   │   │   ├── am
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ar
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       ├── django.po
    │           │   │   │   │   │       ├── djangojs.mo
    │           │   │   │   │   │       └── djangojs.po
    │           │   │   │   │   ├── ar_DZ
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       ├── django.po
    │           │   │   │   │   │       ├── djangojs.mo
    │           │   │   │   │   │       └── djangojs.po
    │           │   │   │   │   ├── ast
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       ├── django.po
    │           │   │   │   │   │       ├── djangojs.mo
    │           │   │   │   │   │       └── djangojs.po
    │           │   │   │   │   ├── az
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       ├── django.po
    │           │   │   │   │   │       ├── djangojs.mo
    │           │   │   │   │   │       └── djangojs.po
    │           │   │   │   │   ├── be
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       ├── django.po
    │           │   │   │   │   │       ├── djangojs.mo
    │           │   │   │   │   │       └── djangojs.po
    │           │   │   │   │   ├── bg
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       ├── django.po
    │           │   │   │   │   │       ├── djangojs.mo
    │           │   │   │   │   │       └── djangojs.po
    │           │   │   │   │   ├── bn
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       ├── django.po
    │           │   │   │   │   │       ├── djangojs.mo
    │           │   │   │   │   │       └── djangojs.po
    │           │   │   │   │   ├── br
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       ├── django.po
    │           │   │   │   │   │       ├── djangojs.mo
    │           │   │   │   │   │       └── djangojs.po
    │           │   │   │   │   ├── bs
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       ├── django.po
    │           │   │   │   │   │       ├── djangojs.mo
    │           │   │   │   │   │       └── djangojs.po
    │           │   │   │   │   ├── ca
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       ├── django.po
    │           │   │   │   │   │       ├── djangojs.mo
    │           │   │   │   │   │       └── djangojs.po
    │           │   │   │   │   ├── ckb
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       ├── django.po
    │           │   │   │   │   │       ├── djangojs.mo
    │           │   │   │   │   │       └── djangojs.po
    │           │   │   │   │   ├── cs
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       ├── django.po
    │           │   │   │   │   │       ├── djangojs.mo
    │           │   │   │   │   │       └── djangojs.po
    │           │   │   │   │   ├── cy
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       ├── django.po
    │           │   │   │   │   │       ├── djangojs.mo
    │           │   │   │   │   │       └── djangojs.po
    │           │   │   │   │   ├── da
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       ├── django.po
    │           │   │   │   │   │       ├── djangojs.mo
    │           │   │   │   │   │       └── djangojs.po
    │           │   │   │   │   ├── de
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       ├── django.po
    │           │   │   │   │   │       ├── djangojs.mo
    │           │   │   │   │   │       └── djangojs.po
    │           │   │   │   │   ├── dsb
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       ├── django.po
    │           │   │   │   │   │       ├── djangojs.mo
    │           │   │   │   │   │       └── djangojs.po
    │           │   │   │   │   ├── el
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       ├── django.po
    │           │   │   │   │   │       ├── djangojs.mo
    │           │   │   │   │   │       └── djangojs.po
    │           │   │   │   │   ├── en
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       ├── django.po
    │           │   │   │   │   │       ├── djangojs.mo
    │           │   │   │   │   │       └── djangojs.po
    │           │   │   │   │   ├── en_AU
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       ├── django.po
    │           │   │   │   │   │       ├── djangojs.mo
    │           │   │   │   │   │       └── djangojs.po
    │           │   │   │   │   ├── en_GB
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       ├── django.po
    │           │   │   │   │   │       ├── djangojs.mo
    │           │   │   │   │   │       └── djangojs.po
    │           │   │   │   │   ├── eo
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       ├── django.po
    │           │   │   │   │   │       ├── djangojs.mo
    │           │   │   │   │   │       └── djangojs.po
    │           │   │   │   │   ├── es
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       ├── django.po
    │           │   │   │   │   │       ├── djangojs.mo
    │           │   │   │   │   │       └── djangojs.po
    │           │   │   │   │   ├── es_AR
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       ├── django.po
    │           │   │   │   │   │       ├── djangojs.mo
    │           │   │   │   │   │       └── djangojs.po
    │           │   │   │   │   ├── es_CO
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       ├── django.po
    │           │   │   │   │   │       ├── djangojs.mo
    │           │   │   │   │   │       └── djangojs.po
    │           │   │   │   │   ├── es_MX
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       ├── django.po
    │           │   │   │   │   │       ├── djangojs.mo
    │           │   │   │   │   │       └── djangojs.po
    │           │   │   │   │   ├── es_VE
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       ├── django.po
    │           │   │   │   │   │       ├── djangojs.mo
    │           │   │   │   │   │       └── djangojs.po
    │           │   │   │   │   ├── et
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       ├── django.po
    │           │   │   │   │   │       ├── djangojs.mo
    │           │   │   │   │   │       └── djangojs.po
    │           │   │   │   │   ├── eu
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       ├── django.po
    │           │   │   │   │   │       ├── djangojs.mo
    │           │   │   │   │   │       └── djangojs.po
    │           │   │   │   │   ├── fa
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       ├── django.po
    │           │   │   │   │   │       ├── djangojs.mo
    │           │   │   │   │   │       └── djangojs.po
    │           │   │   │   │   ├── fi
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       ├── django.po
    │           │   │   │   │   │       ├── djangojs.mo
    │           │   │   │   │   │       └── djangojs.po
    │           │   │   │   │   ├── fr
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       ├── django.po
    │           │   │   │   │   │       ├── djangojs.mo
    │           │   │   │   │   │       └── djangojs.po
    │           │   │   │   │   ├── fy
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       ├── django.po
    │           │   │   │   │   │       ├── djangojs.mo
    │           │   │   │   │   │       └── djangojs.po
    │           │   │   │   │   ├── ga
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       ├── django.po
    │           │   │   │   │   │       ├── djangojs.mo
    │           │   │   │   │   │       └── djangojs.po
    │           │   │   │   │   ├── gd
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       ├── django.po
    │           │   │   │   │   │       ├── djangojs.mo
    │           │   │   │   │   │       └── djangojs.po
    │           │   │   │   │   ├── gl
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       ├── django.po
    │           │   │   │   │   │       ├── djangojs.mo
    │           │   │   │   │   │       └── djangojs.po
    │           │   │   │   │   ├── he
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       ├── django.po
    │           │   │   │   │   │       ├── djangojs.mo
    │           │   │   │   │   │       └── djangojs.po
    │           │   │   │   │   ├── hi
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       ├── django.po
    │           │   │   │   │   │       ├── djangojs.mo
    │           │   │   │   │   │       └── djangojs.po
    │           │   │   │   │   ├── hr
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       ├── django.po
    │           │   │   │   │   │       ├── djangojs.mo
    │           │   │   │   │   │       └── djangojs.po
    │           │   │   │   │   ├── hsb
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       ├── django.po
    │           │   │   │   │   │       ├── djangojs.mo
    │           │   │   │   │   │       └── djangojs.po
    │           │   │   │   │   ├── hu
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       ├── django.po
    │           │   │   │   │   │       ├── djangojs.mo
    │           │   │   │   │   │       └── djangojs.po
    │           │   │   │   │   ├── hy
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       ├── django.po
    │           │   │   │   │   │       ├── djangojs.mo
    │           │   │   │   │   │       └── djangojs.po
    │           │   │   │   │   ├── ia
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       ├── django.po
    │           │   │   │   │   │       ├── djangojs.mo
    │           │   │   │   │   │       └── djangojs.po
    │           │   │   │   │   ├── id
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       ├── django.po
    │           │   │   │   │   │       ├── djangojs.mo
    │           │   │   │   │   │       └── djangojs.po
    │           │   │   │   │   ├── io
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       ├── django.po
    │           │   │   │   │   │       ├── djangojs.mo
    │           │   │   │   │   │       └── djangojs.po
    │           │   │   │   │   ├── is
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       ├── django.po
    │           │   │   │   │   │       ├── djangojs.mo
    │           │   │   │   │   │       └── djangojs.po
    │           │   │   │   │   ├── it
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       ├── django.po
    │           │   │   │   │   │       ├── djangojs.mo
    │           │   │   │   │   │       └── djangojs.po
    │           │   │   │   │   ├── ja
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       ├── django.po
    │           │   │   │   │   │       ├── djangojs.mo
    │           │   │   │   │   │       └── djangojs.po
    │           │   │   │   │   ├── ka
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       ├── django.po
    │           │   │   │   │   │       ├── djangojs.mo
    │           │   │   │   │   │       └── djangojs.po
    │           │   │   │   │   ├── kab
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       ├── django.po
    │           │   │   │   │   │       ├── djangojs.mo
    │           │   │   │   │   │       └── djangojs.po
    │           │   │   │   │   ├── kk
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       ├── django.po
    │           │   │   │   │   │       ├── djangojs.mo
    │           │   │   │   │   │       └── djangojs.po
    │           │   │   │   │   ├── km
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       ├── django.po
    │           │   │   │   │   │       ├── djangojs.mo
    │           │   │   │   │   │       └── djangojs.po
    │           │   │   │   │   ├── kn
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       ├── django.po
    │           │   │   │   │   │       ├── djangojs.mo
    │           │   │   │   │   │       └── djangojs.po
    │           │   │   │   │   ├── ko
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       ├── django.po
    │           │   │   │   │   │       ├── djangojs.mo
    │           │   │   │   │   │       └── djangojs.po
    │           │   │   │   │   ├── ky
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       ├── django.po
    │           │   │   │   │   │       ├── djangojs.mo
    │           │   │   │   │   │       └── djangojs.po
    │           │   │   │   │   ├── lb
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       ├── django.po
    │           │   │   │   │   │       ├── djangojs.mo
    │           │   │   │   │   │       └── djangojs.po
    │           │   │   │   │   ├── lt
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       ├── django.po
    │           │   │   │   │   │       ├── djangojs.mo
    │           │   │   │   │   │       └── djangojs.po
    │           │   │   │   │   ├── lv
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       ├── django.po
    │           │   │   │   │   │       ├── djangojs.mo
    │           │   │   │   │   │       └── djangojs.po
    │           │   │   │   │   ├── mk
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       ├── django.po
    │           │   │   │   │   │       ├── djangojs.mo
    │           │   │   │   │   │       └── djangojs.po
    │           │   │   │   │   ├── ml
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       ├── django.po
    │           │   │   │   │   │       ├── djangojs.mo
    │           │   │   │   │   │       └── djangojs.po
    │           │   │   │   │   ├── mn
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       ├── django.po
    │           │   │   │   │   │       ├── djangojs.mo
    │           │   │   │   │   │       └── djangojs.po
    │           │   │   │   │   ├── mr
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       ├── django.po
    │           │   │   │   │   │       ├── djangojs.mo
    │           │   │   │   │   │       └── djangojs.po
    │           │   │   │   │   ├── ms
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       ├── django.po
    │           │   │   │   │   │       ├── djangojs.mo
    │           │   │   │   │   │       └── djangojs.po
    │           │   │   │   │   ├── my
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       ├── django.po
    │           │   │   │   │   │       ├── djangojs.mo
    │           │   │   │   │   │       └── djangojs.po
    │           │   │   │   │   ├── nb
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       ├── django.po
    │           │   │   │   │   │       ├── djangojs.mo
    │           │   │   │   │   │       └── djangojs.po
    │           │   │   │   │   ├── ne
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       ├── django.po
    │           │   │   │   │   │       ├── djangojs.mo
    │           │   │   │   │   │       └── djangojs.po
    │           │   │   │   │   ├── nl
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       ├── django.po
    │           │   │   │   │   │       ├── djangojs.mo
    │           │   │   │   │   │       └── djangojs.po
    │           │   │   │   │   ├── nn
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       ├── django.po
    │           │   │   │   │   │       ├── djangojs.mo
    │           │   │   │   │   │       └── djangojs.po
    │           │   │   │   │   ├── os
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       ├── django.po
    │           │   │   │   │   │       ├── djangojs.mo
    │           │   │   │   │   │       └── djangojs.po
    │           │   │   │   │   ├── pa
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       ├── django.po
    │           │   │   │   │   │       ├── djangojs.mo
    │           │   │   │   │   │       └── djangojs.po
    │           │   │   │   │   ├── pl
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       ├── django.po
    │           │   │   │   │   │       ├── djangojs.mo
    │           │   │   │   │   │       └── djangojs.po
    │           │   │   │   │   ├── pt
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       ├── django.po
    │           │   │   │   │   │       ├── djangojs.mo
    │           │   │   │   │   │       └── djangojs.po
    │           │   │   │   │   ├── pt_BR
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       ├── django.po
    │           │   │   │   │   │       ├── djangojs.mo
    │           │   │   │   │   │       └── djangojs.po
    │           │   │   │   │   ├── ro
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       ├── django.po
    │           │   │   │   │   │       ├── djangojs.mo
    │           │   │   │   │   │       └── djangojs.po
    │           │   │   │   │   ├── ru
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       ├── django.po
    │           │   │   │   │   │       ├── djangojs.mo
    │           │   │   │   │   │       └── djangojs.po
    │           │   │   │   │   ├── sk
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       ├── django.po
    │           │   │   │   │   │       ├── djangojs.mo
    │           │   │   │   │   │       └── djangojs.po
    │           │   │   │   │   ├── sl
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       ├── django.po
    │           │   │   │   │   │       ├── djangojs.mo
    │           │   │   │   │   │       └── djangojs.po
    │           │   │   │   │   ├── sq
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       ├── django.po
    │           │   │   │   │   │       ├── djangojs.mo
    │           │   │   │   │   │       └── djangojs.po
    │           │   │   │   │   ├── sr
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       ├── django.po
    │           │   │   │   │   │       ├── djangojs.mo
    │           │   │   │   │   │       └── djangojs.po
    │           │   │   │   │   ├── sr_Latn
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       ├── django.po
    │           │   │   │   │   │       ├── djangojs.mo
    │           │   │   │   │   │       └── djangojs.po
    │           │   │   │   │   ├── sv
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       ├── django.po
    │           │   │   │   │   │       ├── djangojs.mo
    │           │   │   │   │   │       └── djangojs.po
    │           │   │   │   │   ├── sw
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       ├── django.po
    │           │   │   │   │   │       ├── djangojs.mo
    │           │   │   │   │   │       └── djangojs.po
    │           │   │   │   │   ├── ta
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       ├── django.po
    │           │   │   │   │   │       ├── djangojs.mo
    │           │   │   │   │   │       └── djangojs.po
    │           │   │   │   │   ├── te
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       ├── django.po
    │           │   │   │   │   │       ├── djangojs.mo
    │           │   │   │   │   │       └── djangojs.po
    │           │   │   │   │   ├── tg
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       ├── django.po
    │           │   │   │   │   │       ├── djangojs.mo
    │           │   │   │   │   │       └── djangojs.po
    │           │   │   │   │   ├── th
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       ├── django.po
    │           │   │   │   │   │       ├── djangojs.mo
    │           │   │   │   │   │       └── djangojs.po
    │           │   │   │   │   ├── tk
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── tr
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       ├── django.po
    │           │   │   │   │   │       ├── djangojs.mo
    │           │   │   │   │   │       └── djangojs.po
    │           │   │   │   │   ├── tt
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       ├── django.po
    │           │   │   │   │   │       ├── djangojs.mo
    │           │   │   │   │   │       └── djangojs.po
    │           │   │   │   │   ├── udm
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       ├── django.po
    │           │   │   │   │   │       ├── djangojs.mo
    │           │   │   │   │   │       └── djangojs.po
    │           │   │   │   │   ├── ug
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       ├── django.po
    │           │   │   │   │   │       ├── djangojs.mo
    │           │   │   │   │   │       └── djangojs.po
    │           │   │   │   │   ├── uk
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       ├── django.po
    │           │   │   │   │   │       ├── djangojs.mo
    │           │   │   │   │   │       └── djangojs.po
    │           │   │   │   │   ├── ur
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       ├── django.po
    │           │   │   │   │   │       ├── djangojs.mo
    │           │   │   │   │   │       └── djangojs.po
    │           │   │   │   │   ├── uz
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       ├── django.po
    │           │   │   │   │   │       ├── djangojs.mo
    │           │   │   │   │   │       └── djangojs.po
    │           │   │   │   │   ├── vi
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       ├── django.po
    │           │   │   │   │   │       ├── djangojs.mo
    │           │   │   │   │   │       └── djangojs.po
    │           │   │   │   │   ├── zh_Hans
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       ├── django.po
    │           │   │   │   │   │       ├── djangojs.mo
    │           │   │   │   │   │       └── djangojs.po
    │           │   │   │   │   └── zh_Hant
    │           │   │   │   │       └── LC_MESSAGES
    │           │   │   │   │           ├── django.mo
    │           │   │   │   │           ├── django.po
    │           │   │   │   │           ├── djangojs.mo
    │           │   │   │   │           └── djangojs.po
    │           │   │   │   ├── migrations
    │           │   │   │   │   ├── 0001_initial.py
    │           │   │   │   │   ├── 0002_logentry_remove_auto_add.py
    │           │   │   │   │   ├── 0003_logentry_add_action_flag_choices.py
    │           │   │   │   │   └── __init__.py
    │           │   │   │   ├── models.py
    │           │   │   │   ├── options.py
    │           │   │   │   ├── sites.py
    │           │   │   │   ├── static
    │           │   │   │   │   └── admin
    │           │   │   │   │       ├── css
    │           │   │   │   │       │   ├── autocomplete.css
    │           │   │   │   │       │   ├── base.css
    │           │   │   │   │       │   ├── changelists.css
    │           │   │   │   │       │   ├── dark_mode.css
    │           │   │   │   │       │   ├── dashboard.css
    │           │   │   │   │       │   ├── forms.css
    │           │   │   │   │       │   ├── login.css
    │           │   │   │   │       │   ├── nav_sidebar.css
    │           │   │   │   │       │   ├── responsive.css
    │           │   │   │   │       │   ├── responsive_rtl.css
    │           │   │   │   │       │   ├── rtl.css
    │           │   │   │   │       │   ├── unusable_password_field.css
    │           │   │   │   │       │   ├── vendor
    │           │   │   │   │       │   │   └── select2
    │           │   │   │   │       │   │       ├── LICENSE-SELECT2.md
    │           │   │   │   │       │   │       ├── select2.css
    │           │   │   │   │       │   │       └── select2.min.css
    │           │   │   │   │       │   └── widgets.css
    │           │   │   │   │       ├── img
    │           │   │   │   │       │   ├── LICENSE
    │           │   │   │   │       │   ├── README.txt
    │           │   │   │   │       │   ├── calendar-icons.svg
    │           │   │   │   │       │   ├── gis
    │           │   │   │   │       │   │   ├── move_vertex_off.svg
    │           │   │   │   │       │   │   └── move_vertex_on.svg
    │           │   │   │   │       │   ├── icon-addlink.svg
    │           │   │   │   │       │   ├── icon-alert.svg
    │           │   │   │   │       │   ├── icon-calendar.svg
    │           │   │   │   │       │   ├── icon-changelink.svg
    │           │   │   │   │       │   ├── icon-clock.svg
    │           │   │   │   │       │   ├── icon-deletelink.svg
    │           │   │   │   │       │   ├── icon-hidelink.svg
    │           │   │   │   │       │   ├── icon-no.svg
    │           │   │   │   │       │   ├── icon-unknown-alt.svg
    │           │   │   │   │       │   ├── icon-unknown.svg
    │           │   │   │   │       │   ├── icon-viewlink.svg
    │           │   │   │   │       │   ├── icon-yes.svg
    │           │   │   │   │       │   ├── inline-delete.svg
    │           │   │   │   │       │   ├── search.svg
    │           │   │   │   │       │   ├── selector-icons.svg
    │           │   │   │   │       │   ├── sorting-icons.svg
    │           │   │   │   │       │   ├── tooltag-add.svg
    │           │   │   │   │       │   └── tooltag-arrowright.svg
    │           │   │   │   │       └── js
    │           │   │   │   │           ├── SelectBox.js
    │           │   │   │   │           ├── SelectFilter2.js
    │           │   │   │   │           ├── actions.js
    │           │   │   │   │           ├── admin
    │           │   │   │   │           │   ├── DateTimeShortcuts.js
    │           │   │   │   │           │   └── RelatedObjectLookups.js
    │           │   │   │   │           ├── autocomplete.js
    │           │   │   │   │           ├── calendar.js
    │           │   │   │   │           ├── cancel.js
    │           │   │   │   │           ├── change_form.js
    │           │   │   │   │           ├── core.js
    │           │   │   │   │           ├── filters.js
    │           │   │   │   │           ├── inlines.js
    │           │   │   │   │           ├── jquery.init.js
    │           │   │   │   │           ├── nav_sidebar.js
    │           │   │   │   │           ├── popup_response.js
    │           │   │   │   │           ├── prepopulate.js
    │           │   │   │   │           ├── prepopulate_init.js
    │           │   │   │   │           ├── theme.js
    │           │   │   │   │           ├── unusable_password_field.js
    │           │   │   │   │           ├── urlify.js
    │           │   │   │   │           └── vendor
    │           │   │   │   │               ├── jquery
    │           │   │   │   │               │   ├── LICENSE.txt
    │           │   │   │   │               │   ├── jquery.js
    │           │   │   │   │               │   └── jquery.min.js
    │           │   │   │   │               ├── select2
    │           │   │   │   │               │   ├── LICENSE.md
    │           │   │   │   │               │   ├── i18n
    │           │   │   │   │               │   │   ├── af.js
    │           │   │   │   │               │   │   ├── ar.js
    │           │   │   │   │               │   │   ├── az.js
    │           │   │   │   │               │   │   ├── bg.js
    │           │   │   │   │               │   │   ├── bn.js
    │           │   │   │   │               │   │   ├── bs.js
    │           │   │   │   │               │   │   ├── ca.js
    │           │   │   │   │               │   │   ├── cs.js
    │           │   │   │   │               │   │   ├── da.js
    │           │   │   │   │               │   │   ├── de.js
    │           │   │   │   │               │   │   ├── dsb.js
    │           │   │   │   │               │   │   ├── el.js
    │           │   │   │   │               │   │   ├── en.js
    │           │   │   │   │               │   │   ├── es.js
    │           │   │   │   │               │   │   ├── et.js
    │           │   │   │   │               │   │   ├── eu.js
    │           │   │   │   │               │   │   ├── fa.js
    │           │   │   │   │               │   │   ├── fi.js
    │           │   │   │   │               │   │   ├── fr.js
    │           │   │   │   │               │   │   ├── gl.js
    │           │   │   │   │               │   │   ├── he.js
    │           │   │   │   │               │   │   ├── hi.js
    │           │   │   │   │               │   │   ├── hr.js
    │           │   │   │   │               │   │   ├── hsb.js
    │           │   │   │   │               │   │   ├── hu.js
    │           │   │   │   │               │   │   ├── hy.js
    │           │   │   │   │               │   │   ├── id.js
    │           │   │   │   │               │   │   ├── is.js
    │           │   │   │   │               │   │   ├── it.js
    │           │   │   │   │               │   │   ├── ja.js
    │           │   │   │   │               │   │   ├── ka.js
    │           │   │   │   │               │   │   ├── km.js
    │           │   │   │   │               │   │   ├── ko.js
    │           │   │   │   │               │   │   ├── lt.js
    │           │   │   │   │               │   │   ├── lv.js
    │           │   │   │   │               │   │   ├── mk.js
    │           │   │   │   │               │   │   ├── ms.js
    │           │   │   │   │               │   │   ├── nb.js
    │           │   │   │   │               │   │   ├── ne.js
    │           │   │   │   │               │   │   ├── nl.js
    │           │   │   │   │               │   │   ├── pl.js
    │           │   │   │   │               │   │   ├── ps.js
    │           │   │   │   │               │   │   ├── pt-BR.js
    │           │   │   │   │               │   │   ├── pt.js
    │           │   │   │   │               │   │   ├── ro.js
    │           │   │   │   │               │   │   ├── ru.js
    │           │   │   │   │               │   │   ├── sk.js
    │           │   │   │   │               │   │   ├── sl.js
    │           │   │   │   │               │   │   ├── sq.js
    │           │   │   │   │               │   │   ├── sr-Cyrl.js
    │           │   │   │   │               │   │   ├── sr.js
    │           │   │   │   │               │   │   ├── sv.js
    │           │   │   │   │               │   │   ├── th.js
    │           │   │   │   │               │   │   ├── tk.js
    │           │   │   │   │               │   │   ├── tr.js
    │           │   │   │   │               │   │   ├── uk.js
    │           │   │   │   │               │   │   ├── vi.js
    │           │   │   │   │               │   │   ├── zh-CN.js
    │           │   │   │   │               │   │   └── zh-TW.js
    │           │   │   │   │               │   ├── select2.full.js
    │           │   │   │   │               │   └── select2.full.min.js
    │           │   │   │   │               └── xregexp
    │           │   │   │   │                   ├── LICENSE.txt
    │           │   │   │   │                   ├── xregexp.js
    │           │   │   │   │                   └── xregexp.min.js
    │           │   │   │   ├── templates
    │           │   │   │   │   ├── admin
    │           │   │   │   │   │   ├── 404.html
    │           │   │   │   │   │   ├── 500.html
    │           │   │   │   │   │   ├── actions.html
    │           │   │   │   │   │   ├── app_index.html
    │           │   │   │   │   │   ├── app_list.html
    │           │   │   │   │   │   ├── auth
    │           │   │   │   │   │   │   └── user
    │           │   │   │   │   │   │       ├── add_form.html
    │           │   │   │   │   │   │       └── change_password.html
    │           │   │   │   │   │   ├── base.html
    │           │   │   │   │   │   ├── base_site.html
    │           │   │   │   │   │   ├── change_form.html
    │           │   │   │   │   │   ├── change_form_object_tools.html
    │           │   │   │   │   │   ├── change_list.html
    │           │   │   │   │   │   ├── change_list_object_tools.html
    │           │   │   │   │   │   ├── change_list_results.html
    │           │   │   │   │   │   ├── color_theme_toggle.html
    │           │   │   │   │   │   ├── date_hierarchy.html
    │           │   │   │   │   │   ├── delete_confirmation.html
    │           │   │   │   │   │   ├── delete_selected_confirmation.html
    │           │   │   │   │   │   ├── edit_inline
    │           │   │   │   │   │   │   ├── stacked.html
    │           │   │   │   │   │   │   └── tabular.html
    │           │   │   │   │   │   ├── filter.html
    │           │   │   │   │   │   ├── includes
    │           │   │   │   │   │   │   ├── fieldset.html
    │           │   │   │   │   │   │   └── object_delete_summary.html
    │           │   │   │   │   │   ├── index.html
    │           │   │   │   │   │   ├── invalid_setup.html
    │           │   │   │   │   │   ├── login.html
    │           │   │   │   │   │   ├── nav_sidebar.html
    │           │   │   │   │   │   ├── object_history.html
    │           │   │   │   │   │   ├── pagination.html
    │           │   │   │   │   │   ├── popup_response.html
    │           │   │   │   │   │   ├── prepopulated_fields_js.html
    │           │   │   │   │   │   ├── search_form.html
    │           │   │   │   │   │   ├── submit_line.html
    │           │   │   │   │   │   └── widgets
    │           │   │   │   │   │       ├── clearable_file_input.html
    │           │   │   │   │   │       ├── date.html
    │           │   │   │   │   │       ├── foreign_key_raw_id.html
    │           │   │   │   │   │       ├── many_to_many_raw_id.html
    │           │   │   │   │   │       ├── radio.html
    │           │   │   │   │   │       ├── related_widget_wrapper.html
    │           │   │   │   │   │       ├── split_datetime.html
    │           │   │   │   │   │       ├── time.html
    │           │   │   │   │   │       └── url.html
    │           │   │   │   │   └── registration
    │           │   │   │   │       ├── logged_out.html
    │           │   │   │   │       ├── password_change_done.html
    │           │   │   │   │       ├── password_change_form.html
    │           │   │   │   │       ├── password_reset_complete.html
    │           │   │   │   │       ├── password_reset_confirm.html
    │           │   │   │   │       ├── password_reset_done.html
    │           │   │   │   │       ├── password_reset_email.html
    │           │   │   │   │       └── password_reset_form.html
    │           │   │   │   ├── templatetags
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   ├── admin_list.py
    │           │   │   │   │   ├── admin_modify.py
    │           │   │   │   │   ├── admin_urls.py
    │           │   │   │   │   ├── base.py
    │           │   │   │   │   └── log.py
    │           │   │   │   ├── tests.py
    │           │   │   │   ├── utils.py
    │           │   │   │   ├── views
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   ├── autocomplete.py
    │           │   │   │   │   ├── decorators.py
    │           │   │   │   │   └── main.py
    │           │   │   │   └── widgets.py
    │           │   │   ├── admindocs
    │           │   │   │   ├── __init__.py
    │           │   │   │   ├── apps.py
    │           │   │   │   ├── locale
    │           │   │   │   │   ├── af
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ar
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ar_DZ
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ast
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── az
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── be
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── bg
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── bn
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── br
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── bs
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ca
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ckb
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── cs
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── cy
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── da
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── de
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── dsb
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── el
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── en
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── en_AU
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── en_GB
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── eo
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── es
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── es_AR
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── es_CO
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── es_MX
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── es_VE
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── et
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── eu
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── fa
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── fi
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── fr
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── fy
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ga
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── gd
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── gl
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── he
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── hi
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── hr
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── hsb
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── hu
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ia
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── id
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── io
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── is
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── it
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ja
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ka
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── kab
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── kk
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── km
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── kn
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ko
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ky
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── lb
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── lt
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── lv
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── mk
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ml
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── mn
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── mr
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ms
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── my
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── nb
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ne
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── nl
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── nn
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── os
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── pa
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── pl
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── pt
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── pt_BR
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ro
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ru
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── sk
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── sl
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── sq
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── sr
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── sr_Latn
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── sv
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── sw
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ta
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── te
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── tg
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── th
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── tr
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── tt
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── udm
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ug
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── uk
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ur
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── vi
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── zh_Hans
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   └── zh_Hant
    │           │   │   │   │       └── LC_MESSAGES
    │           │   │   │   │           ├── django.mo
    │           │   │   │   │           └── django.po
    │           │   │   │   ├── middleware.py
    │           │   │   │   ├── templates
    │           │   │   │   │   └── admin_doc
    │           │   │   │   │       ├── bookmarklets.html
    │           │   │   │   │       ├── index.html
    │           │   │   │   │       ├── missing_docutils.html
    │           │   │   │   │       ├── model_detail.html
    │           │   │   │   │       ├── model_index.html
    │           │   │   │   │       ├── template_detail.html
    │           │   │   │   │       ├── template_filter_index.html
    │           │   │   │   │       ├── template_tag_index.html
    │           │   │   │   │       ├── view_detail.html
    │           │   │   │   │       └── view_index.html
    │           │   │   │   ├── urls.py
    │           │   │   │   ├── utils.py
    │           │   │   │   └── views.py
    │           │   │   ├── auth
    │           │   │   │   ├── __init__.py
    │           │   │   │   ├── admin.py
    │           │   │   │   ├── apps.py
    │           │   │   │   ├── backends.py
    │           │   │   │   ├── base_user.py
    │           │   │   │   ├── checks.py
    │           │   │   │   ├── common-passwords.txt.gz
    │           │   │   │   ├── context_processors.py
    │           │   │   │   ├── decorators.py
    │           │   │   │   ├── forms.py
    │           │   │   │   ├── handlers
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   └── modwsgi.py
    │           │   │   │   ├── hashers.py
    │           │   │   │   ├── locale
    │           │   │   │   │   ├── af
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ar
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ar_DZ
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ast
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── az
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── be
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── bg
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── bn
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── br
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── bs
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ca
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ckb
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── cs
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── cy
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── da
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── de
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── dsb
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── el
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── en
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── en_AU
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── en_GB
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── eo
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── es
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── es_AR
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── es_CO
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── es_MX
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── es_VE
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── et
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── eu
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── fa
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── fi
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── fr
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── fy
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ga
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── gd
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── gl
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── he
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── hi
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── hr
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── hsb
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── hu
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── hy
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ia
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── id
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── io
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── is
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── it
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ja
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ka
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── kab
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── kk
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── km
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── kn
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ko
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ky
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── lb
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── lt
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── lv
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── mk
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ml
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── mn
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── mr
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ms
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── my
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── nb
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ne
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── nl
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── nn
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── os
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── pa
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── pl
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── pt
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── pt_BR
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ro
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ru
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── sk
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── sl
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── sq
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── sr
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── sr_Latn
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── sv
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── sw
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ta
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── te
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── tg
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── th
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── tk
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── tr
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── tt
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── udm
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ug
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── uk
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ur
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── uz
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── vi
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── zh_Hans
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   └── zh_Hant
    │           │   │   │   │       └── LC_MESSAGES
    │           │   │   │   │           ├── django.mo
    │           │   │   │   │           └── django.po
    │           │   │   │   ├── management
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   └── commands
    │           │   │   │   │       ├── __init__.py
    │           │   │   │   │       ├── changepassword.py
    │           │   │   │   │       └── createsuperuser.py
    │           │   │   │   ├── middleware.py
    │           │   │   │   ├── migrations
    │           │   │   │   │   ├── 0001_initial.py
    │           │   │   │   │   ├── 0002_alter_permission_name_max_length.py
    │           │   │   │   │   ├── 0003_alter_user_email_max_length.py
    │           │   │   │   │   ├── 0004_alter_user_username_opts.py
    │           │   │   │   │   ├── 0005_alter_user_last_login_null.py
    │           │   │   │   │   ├── 0006_require_contenttypes_0002.py
    │           │   │   │   │   ├── 0007_alter_validators_add_error_messages.py
    │           │   │   │   │   ├── 0008_alter_user_username_max_length.py
    │           │   │   │   │   ├── 0009_alter_user_last_name_max_length.py
    │           │   │   │   │   ├── 0010_alter_group_name_max_length.py
    │           │   │   │   │   ├── 0011_update_proxy_permissions.py
    │           │   │   │   │   ├── 0012_alter_user_first_name_max_length.py
    │           │   │   │   │   └── __init__.py
    │           │   │   │   ├── mixins.py
    │           │   │   │   ├── models.py
    │           │   │   │   ├── password_validation.py
    │           │   │   │   ├── signals.py
    │           │   │   │   ├── templates
    │           │   │   │   │   ├── auth
    │           │   │   │   │   │   └── widgets
    │           │   │   │   │   │       └── read_only_password_hash.html
    │           │   │   │   │   └── registration
    │           │   │   │   │       └── password_reset_subject.txt
    │           │   │   │   ├── tokens.py
    │           │   │   │   ├── urls.py
    │           │   │   │   ├── validators.py
    │           │   │   │   └── views.py
    │           │   │   ├── contenttypes
    │           │   │   │   ├── __init__.py
    │           │   │   │   ├── admin.py
    │           │   │   │   ├── apps.py
    │           │   │   │   ├── checks.py
    │           │   │   │   ├── fields.py
    │           │   │   │   ├── forms.py
    │           │   │   │   ├── locale
    │           │   │   │   │   ├── af
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ar
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ar_DZ
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ast
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── az
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── be
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── bg
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── bn
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── br
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── bs
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ca
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ckb
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── cs
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── cy
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── da
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── de
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── dsb
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── el
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── en
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── en_AU
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── en_GB
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── eo
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── es
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── es_AR
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── es_CO
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── es_MX
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── es_VE
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── et
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── eu
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── fa
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── fi
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── fr
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── fy
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ga
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── gd
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── gl
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── he
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── hi
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── hr
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── hsb
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── hu
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── hy
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ia
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── id
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── io
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── is
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── it
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ja
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ka
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── kk
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── km
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── kn
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ko
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ky
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── lb
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── lt
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── lv
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── mk
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ml
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── mn
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── mr
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ms
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── my
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── nb
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ne
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── nl
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── nn
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── os
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── pa
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── pl
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── pt
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── pt_BR
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ro
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ru
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── sk
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── sl
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── sq
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── sr
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── sr_Latn
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── sv
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── sw
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ta
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── te
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── tg
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── th
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── tk
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── tr
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── tt
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── udm
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ug
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── uk
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ur
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── vi
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── zh_Hans
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   └── zh_Hant
    │           │   │   │   │       └── LC_MESSAGES
    │           │   │   │   │           ├── django.mo
    │           │   │   │   │           └── django.po
    │           │   │   │   ├── management
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   └── commands
    │           │   │   │   │       ├── __init__.py
    │           │   │   │   │       └── remove_stale_contenttypes.py
    │           │   │   │   ├── migrations
    │           │   │   │   │   ├── 0001_initial.py
    │           │   │   │   │   ├── 0002_remove_content_type_name.py
    │           │   │   │   │   └── __init__.py
    │           │   │   │   ├── models.py
    │           │   │   │   ├── prefetch.py
    │           │   │   │   └── views.py
    │           │   │   ├── flatpages
    │           │   │   │   ├── __init__.py
    │           │   │   │   ├── admin.py
    │           │   │   │   ├── apps.py
    │           │   │   │   ├── forms.py
    │           │   │   │   ├── locale
    │           │   │   │   │   ├── af
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ar
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ar_DZ
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ast
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── az
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── be
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── bg
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── bn
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── br
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── bs
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ca
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ckb
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── cs
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── cy
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── da
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── de
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── dsb
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── el
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── en
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── en_AU
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── en_GB
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── eo
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── es
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── es_AR
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── es_CO
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── es_MX
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── es_VE
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── et
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── eu
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── fa
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── fi
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── fr
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── fy
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ga
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── gd
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── gl
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── he
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── hi
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── hr
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── hsb
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── hu
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── hy
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ia
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── id
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── io
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── is
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── it
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ja
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ka
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── kk
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── km
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── kn
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ko
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ky
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── lb
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── lt
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── lv
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── mk
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ml
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── mn
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── mr
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ms
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── my
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── nb
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ne
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── nl
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── nn
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── os
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── pa
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── pl
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── pt
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── pt_BR
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ro
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ru
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── sk
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── sl
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── sq
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── sr
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── sr_Latn
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── sv
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── sw
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ta
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── te
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── tg
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── th
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── tk
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── tr
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── tt
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── udm
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ug
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── uk
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ur
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── vi
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── zh_Hans
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   └── zh_Hant
    │           │   │   │   │       └── LC_MESSAGES
    │           │   │   │   │           ├── django.mo
    │           │   │   │   │           └── django.po
    │           │   │   │   ├── middleware.py
    │           │   │   │   ├── migrations
    │           │   │   │   │   ├── 0001_initial.py
    │           │   │   │   │   └── __init__.py
    │           │   │   │   ├── models.py
    │           │   │   │   ├── sitemaps.py
    │           │   │   │   ├── templatetags
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   └── flatpages.py
    │           │   │   │   ├── urls.py
    │           │   │   │   └── views.py
    │           │   │   ├── gis
    │           │   │   │   ├── __init__.py
    │           │   │   │   ├── admin
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   └── options.py
    │           │   │   │   ├── apps.py
    │           │   │   │   ├── db
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   ├── backends
    │           │   │   │   │   │   ├── __init__.py
    │           │   │   │   │   │   ├── base
    │           │   │   │   │   │   │   ├── __init__.py
    │           │   │   │   │   │   │   ├── adapter.py
    │           │   │   │   │   │   │   ├── features.py
    │           │   │   │   │   │   │   ├── models.py
    │           │   │   │   │   │   │   └── operations.py
    │           │   │   │   │   │   ├── mysql
    │           │   │   │   │   │   │   ├── __init__.py
    │           │   │   │   │   │   │   ├── base.py
    │           │   │   │   │   │   │   ├── features.py
    │           │   │   │   │   │   │   ├── introspection.py
    │           │   │   │   │   │   │   ├── operations.py
    │           │   │   │   │   │   │   └── schema.py
    │           │   │   │   │   │   ├── oracle
    │           │   │   │   │   │   │   ├── __init__.py
    │           │   │   │   │   │   │   ├── adapter.py
    │           │   │   │   │   │   │   ├── base.py
    │           │   │   │   │   │   │   ├── features.py
    │           │   │   │   │   │   │   ├── introspection.py
    │           │   │   │   │   │   │   ├── models.py
    │           │   │   │   │   │   │   ├── operations.py
    │           │   │   │   │   │   │   └── schema.py
    │           │   │   │   │   │   ├── postgis
    │           │   │   │   │   │   │   ├── __init__.py
    │           │   │   │   │   │   │   ├── adapter.py
    │           │   │   │   │   │   │   ├── base.py
    │           │   │   │   │   │   │   ├── const.py
    │           │   │   │   │   │   │   ├── features.py
    │           │   │   │   │   │   │   ├── introspection.py
    │           │   │   │   │   │   │   ├── models.py
    │           │   │   │   │   │   │   ├── operations.py
    │           │   │   │   │   │   │   ├── pgraster.py
    │           │   │   │   │   │   │   └── schema.py
    │           │   │   │   │   │   ├── spatialite
    │           │   │   │   │   │   │   ├── __init__.py
    │           │   │   │   │   │   │   ├── adapter.py
    │           │   │   │   │   │   │   ├── base.py
    │           │   │   │   │   │   │   ├── client.py
    │           │   │   │   │   │   │   ├── features.py
    │           │   │   │   │   │   │   ├── introspection.py
    │           │   │   │   │   │   │   ├── models.py
    │           │   │   │   │   │   │   ├── operations.py
    │           │   │   │   │   │   │   └── schema.py
    │           │   │   │   │   │   └── utils.py
    │           │   │   │   │   └── models
    │           │   │   │   │       ├── __init__.py
    │           │   │   │   │       ├── aggregates.py
    │           │   │   │   │       ├── fields.py
    │           │   │   │   │       ├── functions.py
    │           │   │   │   │       ├── lookups.py
    │           │   │   │   │       ├── proxy.py
    │           │   │   │   │       └── sql
    │           │   │   │   │           ├── __init__.py
    │           │   │   │   │           └── conversion.py
    │           │   │   │   ├── feeds.py
    │           │   │   │   ├── forms
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   ├── fields.py
    │           │   │   │   │   └── widgets.py
    │           │   │   │   ├── gdal
    │           │   │   │   │   ├── LICENSE
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   ├── base.py
    │           │   │   │   │   ├── datasource.py
    │           │   │   │   │   ├── driver.py
    │           │   │   │   │   ├── envelope.py
    │           │   │   │   │   ├── error.py
    │           │   │   │   │   ├── feature.py
    │           │   │   │   │   ├── field.py
    │           │   │   │   │   ├── geometries.py
    │           │   │   │   │   ├── geomtype.py
    │           │   │   │   │   ├── layer.py
    │           │   │   │   │   ├── libgdal.py
    │           │   │   │   │   ├── prototypes
    │           │   │   │   │   │   ├── __init__.py
    │           │   │   │   │   │   ├── ds.py
    │           │   │   │   │   │   ├── errcheck.py
    │           │   │   │   │   │   ├── generation.py
    │           │   │   │   │   │   ├── geom.py
    │           │   │   │   │   │   ├── raster.py
    │           │   │   │   │   │   └── srs.py
    │           │   │   │   │   ├── raster
    │           │   │   │   │   │   ├── __init__.py
    │           │   │   │   │   │   ├── band.py
    │           │   │   │   │   │   ├── base.py
    │           │   │   │   │   │   ├── const.py
    │           │   │   │   │   │   └── source.py
    │           │   │   │   │   └── srs.py
    │           │   │   │   ├── geoip2.py
    │           │   │   │   ├── geometry.py
    │           │   │   │   ├── geos
    │           │   │   │   │   ├── LICENSE
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   ├── base.py
    │           │   │   │   │   ├── collections.py
    │           │   │   │   │   ├── coordseq.py
    │           │   │   │   │   ├── error.py
    │           │   │   │   │   ├── factory.py
    │           │   │   │   │   ├── geometry.py
    │           │   │   │   │   ├── io.py
    │           │   │   │   │   ├── libgeos.py
    │           │   │   │   │   ├── linestring.py
    │           │   │   │   │   ├── mutable_list.py
    │           │   │   │   │   ├── point.py
    │           │   │   │   │   ├── polygon.py
    │           │   │   │   │   ├── prepared.py
    │           │   │   │   │   └── prototypes
    │           │   │   │   │       ├── __init__.py
    │           │   │   │   │       ├── coordseq.py
    │           │   │   │   │       ├── errcheck.py
    │           │   │   │   │       ├── geom.py
    │           │   │   │   │       ├── io.py
    │           │   │   │   │       ├── misc.py
    │           │   │   │   │       ├── predicates.py
    │           │   │   │   │       ├── prepared.py
    │           │   │   │   │       ├── threadsafe.py
    │           │   │   │   │       └── topology.py
    │           │   │   │   ├── locale
    │           │   │   │   │   ├── af
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ar
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ar_DZ
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ast
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── az
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── be
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── bg
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── bn
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── br
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── bs
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ca
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ckb
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── cs
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── cy
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── da
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── de
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── dsb
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── el
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── en
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── en_AU
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── en_GB
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── eo
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── es
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── es_AR
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── es_CO
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── es_MX
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── es_VE
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── et
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── eu
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── fa
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── fi
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── fr
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── fy
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ga
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── gd
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── gl
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── he
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── hi
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── hr
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── hsb
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── hu
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── hy
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ia
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── id
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── io
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── is
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── it
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ja
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ka
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── kk
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── km
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── kn
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ko
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ky
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── lb
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── lt
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── lv
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── mk
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ml
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── mn
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── mr
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ms
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── my
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── nb
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ne
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── nl
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── nn
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── os
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── pa
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── pl
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── pt
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── pt_BR
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ro
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ru
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── sk
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── sl
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── sq
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── sr
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── sr_Latn
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── sv
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── sw
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ta
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── te
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── tg
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── th
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── tr
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── tt
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── udm
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ug
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── uk
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ur
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── vi
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── zh_Hans
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   └── zh_Hant
    │           │   │   │   │       └── LC_MESSAGES
    │           │   │   │   │           ├── django.mo
    │           │   │   │   │           └── django.po
    │           │   │   │   ├── management
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   └── commands
    │           │   │   │   │       ├── __init__.py
    │           │   │   │   │       ├── inspectdb.py
    │           │   │   │   │       └── ogrinspect.py
    │           │   │   │   ├── measure.py
    │           │   │   │   ├── ptr.py
    │           │   │   │   ├── serializers
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   └── geojson.py
    │           │   │   │   ├── shortcuts.py
    │           │   │   │   ├── sitemaps
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   ├── kml.py
    │           │   │   │   │   └── views.py
    │           │   │   │   ├── static
    │           │   │   │   │   └── gis
    │           │   │   │   │       ├── css
    │           │   │   │   │       │   └── ol3.css
    │           │   │   │   │       ├── img
    │           │   │   │   │       │   ├── draw_line_off.svg
    │           │   │   │   │       │   ├── draw_line_on.svg
    │           │   │   │   │       │   ├── draw_point_off.svg
    │           │   │   │   │       │   ├── draw_point_on.svg
    │           │   │   │   │       │   ├── draw_polygon_off.svg
    │           │   │   │   │       │   └── draw_polygon_on.svg
    │           │   │   │   │       └── js
    │           │   │   │   │           └── OLMapWidget.js
    │           │   │   │   ├── templates
    │           │   │   │   │   └── gis
    │           │   │   │   │       ├── kml
    │           │   │   │   │       │   ├── base.kml
    │           │   │   │   │       │   └── placemarks.kml
    │           │   │   │   │       ├── openlayers-osm.html
    │           │   │   │   │       └── openlayers.html
    │           │   │   │   ├── utils
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   ├── layermapping.py
    │           │   │   │   │   ├── ogrinfo.py
    │           │   │   │   │   ├── ogrinspect.py
    │           │   │   │   │   └── srs.py
    │           │   │   │   └── views.py
    │           │   │   ├── humanize
    │           │   │   │   ├── __init__.py
    │           │   │   │   ├── apps.py
    │           │   │   │   ├── locale
    │           │   │   │   │   ├── af
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ar
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ar_DZ
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ast
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── az
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── be
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── bg
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── bn
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── br
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── bs
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ca
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ckb
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── cs
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── cy
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── da
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── de
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── dsb
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── el
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── en
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── en_AU
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── en_GB
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── eo
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── es
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── es_AR
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── es_CO
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── es_MX
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── es_VE
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── et
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── eu
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── fa
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── fi
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── fr
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── fy
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ga
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── gd
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── gl
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── he
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── hi
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── hr
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── hsb
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── hu
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── hy
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ia
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── id
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── io
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── is
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── it
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ja
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ka
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── kk
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── km
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── kn
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ko
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ky
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── lb
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── lt
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── lv
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── mk
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ml
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── mn
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── mr
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ms
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── my
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── nb
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ne
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── nl
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── nn
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── os
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── pa
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── pl
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── pt
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── pt_BR
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ro
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ru
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── sk
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── sl
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── sq
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── sr
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── sr_Latn
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── sv
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── sw
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ta
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── te
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── tg
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── th
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── tk
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── tr
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── tt
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── udm
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ug
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── uk
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ur
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── uz
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── vi
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── zh_Hans
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   └── zh_Hant
    │           │   │   │   │       └── LC_MESSAGES
    │           │   │   │   │           ├── django.mo
    │           │   │   │   │           └── django.po
    │           │   │   │   └── templatetags
    │           │   │   │       ├── __init__.py
    │           │   │   │       └── humanize.py
    │           │   │   ├── messages
    │           │   │   │   ├── __init__.py
    │           │   │   │   ├── api.py
    │           │   │   │   ├── apps.py
    │           │   │   │   ├── constants.py
    │           │   │   │   ├── context_processors.py
    │           │   │   │   ├── middleware.py
    │           │   │   │   ├── storage
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   ├── base.py
    │           │   │   │   │   ├── cookie.py
    │           │   │   │   │   ├── fallback.py
    │           │   │   │   │   └── session.py
    │           │   │   │   ├── test.py
    │           │   │   │   ├── utils.py
    │           │   │   │   └── views.py
    │           │   │   ├── postgres
    │           │   │   │   ├── __init__.py
    │           │   │   │   ├── aggregates
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   ├── general.py
    │           │   │   │   │   ├── mixins.py
    │           │   │   │   │   └── statistics.py
    │           │   │   │   ├── apps.py
    │           │   │   │   ├── constraints.py
    │           │   │   │   ├── expressions.py
    │           │   │   │   ├── fields
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   ├── array.py
    │           │   │   │   │   ├── citext.py
    │           │   │   │   │   ├── hstore.py
    │           │   │   │   │   ├── jsonb.py
    │           │   │   │   │   ├── ranges.py
    │           │   │   │   │   └── utils.py
    │           │   │   │   ├── forms
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   ├── array.py
    │           │   │   │   │   ├── hstore.py
    │           │   │   │   │   └── ranges.py
    │           │   │   │   ├── functions.py
    │           │   │   │   ├── indexes.py
    │           │   │   │   ├── jinja2
    │           │   │   │   │   └── postgres
    │           │   │   │   │       └── widgets
    │           │   │   │   │           └── split_array.html
    │           │   │   │   ├── locale
    │           │   │   │   │   ├── af
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ar
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ar_DZ
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── az
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── be
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── bg
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ca
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ckb
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── cs
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── da
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── de
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── dsb
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── el
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── en
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── en_AU
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── eo
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── es
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── es_AR
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── es_CO
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── es_MX
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── et
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── eu
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── fa
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── fi
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── fr
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ga
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── gd
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── gl
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── he
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── hr
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── hsb
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── hu
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── hy
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ia
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── id
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── is
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── it
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ja
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ka
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── kk
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ko
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ky
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── lt
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── lv
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── mk
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ml
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── mn
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── mr
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ms
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── nb
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ne
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── nl
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── nn
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── pl
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── pt
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── pt_BR
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ro
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ru
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── sk
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── sl
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── sq
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── sr
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── sr_Latn
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── sv
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── tg
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── tk
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── tr
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ug
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── uk
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── uz
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── zh_Hans
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   └── zh_Hant
    │           │   │   │   │       └── LC_MESSAGES
    │           │   │   │   │           ├── django.mo
    │           │   │   │   │           └── django.po
    │           │   │   │   ├── lookups.py
    │           │   │   │   ├── operations.py
    │           │   │   │   ├── search.py
    │           │   │   │   ├── serializers.py
    │           │   │   │   ├── signals.py
    │           │   │   │   ├── templates
    │           │   │   │   │   └── postgres
    │           │   │   │   │       └── widgets
    │           │   │   │   │           └── split_array.html
    │           │   │   │   ├── utils.py
    │           │   │   │   └── validators.py
    │           │   │   ├── redirects
    │           │   │   │   ├── __init__.py
    │           │   │   │   ├── admin.py
    │           │   │   │   ├── apps.py
    │           │   │   │   ├── locale
    │           │   │   │   │   ├── af
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ar
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ar_DZ
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ast
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── az
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── be
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── bg
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── bn
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── br
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── bs
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ca
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ckb
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── cs
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── cy
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── da
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── de
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── dsb
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── el
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── en
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── en_AU
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── en_GB
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── eo
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── es
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── es_AR
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── es_CO
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── es_MX
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── es_VE
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── et
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── eu
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── fa
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── fi
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── fr
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── fy
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ga
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── gd
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── gl
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── he
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── hi
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── hr
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── hsb
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── hu
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── hy
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ia
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── id
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── io
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── is
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── it
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ja
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ka
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── kab
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── kk
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── km
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── kn
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ko
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ky
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── lb
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── lt
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── lv
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── mk
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ml
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── mn
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── mr
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ms
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── my
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── nb
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ne
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── nl
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── nn
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── os
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── pa
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── pl
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── pt
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── pt_BR
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ro
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ru
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── sk
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── sl
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── sq
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── sr
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── sr_Latn
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── sv
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── sw
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ta
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── te
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── tg
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── th
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── tk
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── tr
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── tt
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── udm
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ug
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── uk
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ur
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── uz
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── vi
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── zh_Hans
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   └── zh_Hant
    │           │   │   │   │       └── LC_MESSAGES
    │           │   │   │   │           ├── django.mo
    │           │   │   │   │           └── django.po
    │           │   │   │   ├── middleware.py
    │           │   │   │   ├── migrations
    │           │   │   │   │   ├── 0001_initial.py
    │           │   │   │   │   ├── 0002_alter_redirect_new_path_help_text.py
    │           │   │   │   │   └── __init__.py
    │           │   │   │   └── models.py
    │           │   │   ├── sessions
    │           │   │   │   ├── __init__.py
    │           │   │   │   ├── apps.py
    │           │   │   │   ├── backends
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   ├── base.py
    │           │   │   │   │   ├── cache.py
    │           │   │   │   │   ├── cached_db.py
    │           │   │   │   │   ├── db.py
    │           │   │   │   │   ├── file.py
    │           │   │   │   │   └── signed_cookies.py
    │           │   │   │   ├── base_session.py
    │           │   │   │   ├── exceptions.py
    │           │   │   │   ├── locale
    │           │   │   │   │   ├── af
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ar
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ar_DZ
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ast
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── az
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── be
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── bg
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── bn
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── br
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── bs
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ca
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ckb
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── cs
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── cy
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── da
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── de
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── dsb
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── el
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── en
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── en_AU
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── en_GB
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── eo
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── es
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── es_AR
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── es_CO
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── es_MX
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── es_VE
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── et
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── eu
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── fa
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── fi
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── fr
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── fy
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ga
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── gd
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── gl
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── he
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── hi
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── hr
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── hsb
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── hu
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── hy
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ia
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── id
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── io
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── is
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── it
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ja
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ka
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── kab
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── kk
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── km
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── kn
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ko
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ky
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── lb
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── lt
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── lv
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── mk
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ml
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── mn
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── mr
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ms
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── my
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── nb
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ne
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── nl
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── nn
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── os
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── pa
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── pl
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── pt
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── pt_BR
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ro
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ru
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── sk
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── sl
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── sq
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── sr
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── sr_Latn
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── sv
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── sw
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ta
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── te
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── tg
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── th
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── tk
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── tr
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── tt
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── udm
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ug
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── uk
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ur
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── uz
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── vi
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── zh_Hans
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   └── zh_Hant
    │           │   │   │   │       └── LC_MESSAGES
    │           │   │   │   │           ├── django.mo
    │           │   │   │   │           └── django.po
    │           │   │   │   ├── management
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   └── commands
    │           │   │   │   │       ├── __init__.py
    │           │   │   │   │       └── clearsessions.py
    │           │   │   │   ├── middleware.py
    │           │   │   │   ├── migrations
    │           │   │   │   │   ├── 0001_initial.py
    │           │   │   │   │   └── __init__.py
    │           │   │   │   ├── models.py
    │           │   │   │   └── serializers.py
    │           │   │   ├── sitemaps
    │           │   │   │   ├── __init__.py
    │           │   │   │   ├── apps.py
    │           │   │   │   ├── templates
    │           │   │   │   │   ├── sitemap.xml
    │           │   │   │   │   └── sitemap_index.xml
    │           │   │   │   └── views.py
    │           │   │   ├── sites
    │           │   │   │   ├── __init__.py
    │           │   │   │   ├── admin.py
    │           │   │   │   ├── apps.py
    │           │   │   │   ├── checks.py
    │           │   │   │   ├── locale
    │           │   │   │   │   ├── af
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ar
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ar_DZ
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ast
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── az
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── be
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── bg
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── bn
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── br
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── bs
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ca
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ckb
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── cs
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── cy
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── da
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── de
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── dsb
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── el
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── en
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── en_AU
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── en_GB
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── eo
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── es
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── es_AR
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── es_CO
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── es_MX
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── es_VE
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── et
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── eu
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── fa
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── fi
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── fr
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── fy
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ga
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── gd
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── gl
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── he
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── hi
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── hr
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── hsb
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── hu
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── hy
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ia
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── id
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── io
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── is
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── it
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ja
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ka
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── kab
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── kk
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── km
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── kn
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ko
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ky
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── lb
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── lt
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── lv
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── mk
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ml
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── mn
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── mr
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ms
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── my
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── nb
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ne
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── nl
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── nn
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── os
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── pa
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── pl
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── pt
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── pt_BR
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ro
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ru
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── sk
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── sl
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── sq
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── sr
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── sr_Latn
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── sv
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── sw
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ta
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── te
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── tg
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── th
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── tk
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── tr
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── tt
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── udm
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ug
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── uk
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── ur
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── uz
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── vi
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   ├── zh_Hans
    │           │   │   │   │   │   └── LC_MESSAGES
    │           │   │   │   │   │       ├── django.mo
    │           │   │   │   │   │       └── django.po
    │           │   │   │   │   └── zh_Hant
    │           │   │   │   │       └── LC_MESSAGES
    │           │   │   │   │           ├── django.mo
    │           │   │   │   │           └── django.po
    │           │   │   │   ├── management.py
    │           │   │   │   ├── managers.py
    │           │   │   │   ├── middleware.py
    │           │   │   │   ├── migrations
    │           │   │   │   │   ├── 0001_initial.py
    │           │   │   │   │   ├── 0002_alter_domain_unique.py
    │           │   │   │   │   └── __init__.py
    │           │   │   │   ├── models.py
    │           │   │   │   ├── requests.py
    │           │   │   │   └── shortcuts.py
    │           │   │   ├── staticfiles
    │           │   │   │   ├── __init__.py
    │           │   │   │   ├── apps.py
    │           │   │   │   ├── checks.py
    │           │   │   │   ├── finders.py
    │           │   │   │   ├── handlers.py
    │           │   │   │   ├── management
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   └── commands
    │           │   │   │   │       ├── __init__.py
    │           │   │   │   │       ├── collectstatic.py
    │           │   │   │   │       ├── findstatic.py
    │           │   │   │   │       └── runserver.py
    │           │   │   │   ├── storage.py
    │           │   │   │   ├── testing.py
    │           │   │   │   ├── urls.py
    │           │   │   │   ├── utils.py
    │           │   │   │   └── views.py
    │           │   │   └── syndication
    │           │   │       ├── __init__.py
    │           │   │       ├── apps.py
    │           │   │       └── views.py
    │           │   ├── core
    │           │   │   ├── __init__.py
    │           │   │   ├── asgi.py
    │           │   │   ├── cache
    │           │   │   │   ├── __init__.py
    │           │   │   │   ├── backends
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   ├── base.py
    │           │   │   │   │   ├── db.py
    │           │   │   │   │   ├── dummy.py
    │           │   │   │   │   ├── filebased.py
    │           │   │   │   │   ├── locmem.py
    │           │   │   │   │   ├── memcached.py
    │           │   │   │   │   └── redis.py
    │           │   │   │   └── utils.py
    │           │   │   ├── checks
    │           │   │   │   ├── __init__.py
    │           │   │   │   ├── async_checks.py
    │           │   │   │   ├── caches.py
    │           │   │   │   ├── commands.py
    │           │   │   │   ├── compatibility
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   └── django_4_0.py
    │           │   │   │   ├── database.py
    │           │   │   │   ├── files.py
    │           │   │   │   ├── messages.py
    │           │   │   │   ├── model_checks.py
    │           │   │   │   ├── registry.py
    │           │   │   │   ├── security
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   ├── base.py
    │           │   │   │   │   ├── csrf.py
    │           │   │   │   │   └── sessions.py
    │           │   │   │   ├── templates.py
    │           │   │   │   ├── translation.py
    │           │   │   │   └── urls.py
    │           │   │   ├── exceptions.py
    │           │   │   ├── files
    │           │   │   │   ├── __init__.py
    │           │   │   │   ├── base.py
    │           │   │   │   ├── images.py
    │           │   │   │   ├── locks.py
    │           │   │   │   ├── move.py
    │           │   │   │   ├── storage
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   ├── base.py
    │           │   │   │   │   ├── filesystem.py
    │           │   │   │   │   ├── handler.py
    │           │   │   │   │   ├── memory.py
    │           │   │   │   │   └── mixins.py
    │           │   │   │   ├── temp.py
    │           │   │   │   ├── uploadedfile.py
    │           │   │   │   ├── uploadhandler.py
    │           │   │   │   └── utils.py
    │           │   │   ├── handlers
    │           │   │   │   ├── __init__.py
    │           │   │   │   ├── asgi.py
    │           │   │   │   ├── base.py
    │           │   │   │   ├── exception.py
    │           │   │   │   └── wsgi.py
    │           │   │   ├── mail
    │           │   │   │   ├── __init__.py
    │           │   │   │   ├── backends
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   ├── base.py
    │           │   │   │   │   ├── console.py
    │           │   │   │   │   ├── dummy.py
    │           │   │   │   │   ├── filebased.py
    │           │   │   │   │   ├── locmem.py
    │           │   │   │   │   └── smtp.py
    │           │   │   │   ├── message.py
    │           │   │   │   └── utils.py
    │           │   │   ├── management
    │           │   │   │   ├── __init__.py
    │           │   │   │   ├── base.py
    │           │   │   │   ├── color.py
    │           │   │   │   ├── commands
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   ├── check.py
    │           │   │   │   │   ├── compilemessages.py
    │           │   │   │   │   ├── createcachetable.py
    │           │   │   │   │   ├── dbshell.py
    │           │   │   │   │   ├── diffsettings.py
    │           │   │   │   │   ├── dumpdata.py
    │           │   │   │   │   ├── flush.py
    │           │   │   │   │   ├── inspectdb.py
    │           │   │   │   │   ├── loaddata.py
    │           │   │   │   │   ├── makemessages.py
    │           │   │   │   │   ├── makemigrations.py
    │           │   │   │   │   ├── migrate.py
    │           │   │   │   │   ├── optimizemigration.py
    │           │   │   │   │   ├── runserver.py
    │           │   │   │   │   ├── sendtestemail.py
    │           │   │   │   │   ├── shell.py
    │           │   │   │   │   ├── showmigrations.py
    │           │   │   │   │   ├── sqlflush.py
    │           │   │   │   │   ├── sqlmigrate.py
    │           │   │   │   │   ├── sqlsequencereset.py
    │           │   │   │   │   ├── squashmigrations.py
    │           │   │   │   │   ├── startapp.py
    │           │   │   │   │   ├── startproject.py
    │           │   │   │   │   ├── test.py
    │           │   │   │   │   └── testserver.py
    │           │   │   │   ├── sql.py
    │           │   │   │   ├── templates.py
    │           │   │   │   └── utils.py
    │           │   │   ├── paginator.py
    │           │   │   ├── serializers
    │           │   │   │   ├── __init__.py
    │           │   │   │   ├── base.py
    │           │   │   │   ├── json.py
    │           │   │   │   ├── jsonl.py
    │           │   │   │   ├── python.py
    │           │   │   │   ├── pyyaml.py
    │           │   │   │   └── xml_serializer.py
    │           │   │   ├── servers
    │           │   │   │   ├── __init__.py
    │           │   │   │   └── basehttp.py
    │           │   │   ├── signals.py
    │           │   │   ├── signing.py
    │           │   │   ├── validators.py
    │           │   │   └── wsgi.py
    │           │   ├── db
    │           │   │   ├── __init__.py
    │           │   │   ├── backends
    │           │   │   │   ├── __init__.py
    │           │   │   │   ├── base
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   ├── base.py
    │           │   │   │   │   ├── client.py
    │           │   │   │   │   ├── creation.py
    │           │   │   │   │   ├── features.py
    │           │   │   │   │   ├── introspection.py
    │           │   │   │   │   ├── operations.py
    │           │   │   │   │   ├── schema.py
    │           │   │   │   │   └── validation.py
    │           │   │   │   ├── ddl_references.py
    │           │   │   │   ├── dummy
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   ├── base.py
    │           │   │   │   │   └── features.py
    │           │   │   │   ├── mysql
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   ├── base.py
    │           │   │   │   │   ├── client.py
    │           │   │   │   │   ├── compiler.py
    │           │   │   │   │   ├── creation.py
    │           │   │   │   │   ├── features.py
    │           │   │   │   │   ├── introspection.py
    │           │   │   │   │   ├── operations.py
    │           │   │   │   │   ├── schema.py
    │           │   │   │   │   └── validation.py
    │           │   │   │   ├── oracle
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   ├── base.py
    │           │   │   │   │   ├── client.py
    │           │   │   │   │   ├── creation.py
    │           │   │   │   │   ├── features.py
    │           │   │   │   │   ├── functions.py
    │           │   │   │   │   ├── introspection.py
    │           │   │   │   │   ├── operations.py
    │           │   │   │   │   ├── oracledb_any.py
    │           │   │   │   │   ├── schema.py
    │           │   │   │   │   ├── utils.py
    │           │   │   │   │   └── validation.py
    │           │   │   │   ├── postgresql
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   ├── base.py
    │           │   │   │   │   ├── client.py
    │           │   │   │   │   ├── compiler.py
    │           │   │   │   │   ├── creation.py
    │           │   │   │   │   ├── features.py
    │           │   │   │   │   ├── introspection.py
    │           │   │   │   │   ├── operations.py
    │           │   │   │   │   ├── psycopg_any.py
    │           │   │   │   │   └── schema.py
    │           │   │   │   ├── signals.py
    │           │   │   │   ├── sqlite3
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   ├── _functions.py
    │           │   │   │   │   ├── base.py
    │           │   │   │   │   ├── client.py
    │           │   │   │   │   ├── creation.py
    │           │   │   │   │   ├── features.py
    │           │   │   │   │   ├── introspection.py
    │           │   │   │   │   ├── operations.py
    │           │   │   │   │   └── schema.py
    │           │   │   │   └── utils.py
    │           │   │   ├── migrations
    │           │   │   │   ├── __init__.py
    │           │   │   │   ├── autodetector.py
    │           │   │   │   ├── exceptions.py
    │           │   │   │   ├── executor.py
    │           │   │   │   ├── graph.py
    │           │   │   │   ├── loader.py
    │           │   │   │   ├── migration.py
    │           │   │   │   ├── operations
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   ├── base.py
    │           │   │   │   │   ├── fields.py
    │           │   │   │   │   ├── models.py
    │           │   │   │   │   └── special.py
    │           │   │   │   ├── optimizer.py
    │           │   │   │   ├── questioner.py
    │           │   │   │   ├── recorder.py
    │           │   │   │   ├── serializer.py
    │           │   │   │   ├── state.py
    │           │   │   │   ├── utils.py
    │           │   │   │   └── writer.py
    │           │   │   ├── models
    │           │   │   │   ├── __init__.py
    │           │   │   │   ├── aggregates.py
    │           │   │   │   ├── base.py
    │           │   │   │   ├── constants.py
    │           │   │   │   ├── constraints.py
    │           │   │   │   ├── deletion.py
    │           │   │   │   ├── enums.py
    │           │   │   │   ├── expressions.py
    │           │   │   │   ├── fields
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   ├── composite.py
    │           │   │   │   │   ├── files.py
    │           │   │   │   │   ├── generated.py
    │           │   │   │   │   ├── json.py
    │           │   │   │   │   ├── mixins.py
    │           │   │   │   │   ├── proxy.py
    │           │   │   │   │   ├── related.py
    │           │   │   │   │   ├── related_descriptors.py
    │           │   │   │   │   ├── related_lookups.py
    │           │   │   │   │   ├── reverse_related.py
    │           │   │   │   │   └── tuple_lookups.py
    │           │   │   │   ├── functions
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   ├── comparison.py
    │           │   │   │   │   ├── datetime.py
    │           │   │   │   │   ├── json.py
    │           │   │   │   │   ├── math.py
    │           │   │   │   │   ├── mixins.py
    │           │   │   │   │   ├── text.py
    │           │   │   │   │   └── window.py
    │           │   │   │   ├── indexes.py
    │           │   │   │   ├── lookups.py
    │           │   │   │   ├── manager.py
    │           │   │   │   ├── options.py
    │           │   │   │   ├── query.py
    │           │   │   │   ├── query_utils.py
    │           │   │   │   ├── signals.py
    │           │   │   │   ├── sql
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   ├── compiler.py
    │           │   │   │   │   ├── constants.py
    │           │   │   │   │   ├── datastructures.py
    │           │   │   │   │   ├── query.py
    │           │   │   │   │   ├── subqueries.py
    │           │   │   │   │   └── where.py
    │           │   │   │   └── utils.py
    │           │   │   ├── transaction.py
    │           │   │   └── utils.py
    │           │   ├── dispatch
    │           │   │   ├── __init__.py
    │           │   │   ├── dispatcher.py
    │           │   │   └── license.txt
    │           │   ├── forms
    │           │   │   ├── __init__.py
    │           │   │   ├── boundfield.py
    │           │   │   ├── fields.py
    │           │   │   ├── forms.py
    │           │   │   ├── formsets.py
    │           │   │   ├── jinja2
    │           │   │   │   └── django
    │           │   │   │       └── forms
    │           │   │   │           ├── attrs.html
    │           │   │   │           ├── div.html
    │           │   │   │           ├── errors
    │           │   │   │           │   ├── dict
    │           │   │   │           │   │   ├── default.html
    │           │   │   │           │   │   ├── text.txt
    │           │   │   │           │   │   └── ul.html
    │           │   │   │           │   └── list
    │           │   │   │           │       ├── default.html
    │           │   │   │           │       ├── text.txt
    │           │   │   │           │       └── ul.html
    │           │   │   │           ├── field.html
    │           │   │   │           ├── formsets
    │           │   │   │           │   ├── div.html
    │           │   │   │           │   ├── p.html
    │           │   │   │           │   ├── table.html
    │           │   │   │           │   └── ul.html
    │           │   │   │           ├── label.html
    │           │   │   │           ├── p.html
    │           │   │   │           ├── table.html
    │           │   │   │           ├── ul.html
    │           │   │   │           └── widgets
    │           │   │   │               ├── attrs.html
    │           │   │   │               ├── checkbox.html
    │           │   │   │               ├── checkbox_option.html
    │           │   │   │               ├── checkbox_select.html
    │           │   │   │               ├── clearable_file_input.html
    │           │   │   │               ├── color.html
    │           │   │   │               ├── date.html
    │           │   │   │               ├── datetime.html
    │           │   │   │               ├── email.html
    │           │   │   │               ├── file.html
    │           │   │   │               ├── hidden.html
    │           │   │   │               ├── input.html
    │           │   │   │               ├── input_option.html
    │           │   │   │               ├── multiple_hidden.html
    │           │   │   │               ├── multiple_input.html
    │           │   │   │               ├── multiwidget.html
    │           │   │   │               ├── number.html
    │           │   │   │               ├── password.html
    │           │   │   │               ├── radio.html
    │           │   │   │               ├── radio_option.html
    │           │   │   │               ├── search.html
    │           │   │   │               ├── select.html
    │           │   │   │               ├── select_date.html
    │           │   │   │               ├── select_option.html
    │           │   │   │               ├── splitdatetime.html
    │           │   │   │               ├── splithiddendatetime.html
    │           │   │   │               ├── tel.html
    │           │   │   │               ├── text.html
    │           │   │   │               ├── textarea.html
    │           │   │   │               ├── time.html
    │           │   │   │               └── url.html
    │           │   │   ├── models.py
    │           │   │   ├── renderers.py
    │           │   │   ├── templates
    │           │   │   │   └── django
    │           │   │   │       └── forms
    │           │   │   │           ├── attrs.html
    │           │   │   │           ├── div.html
    │           │   │   │           ├── errors
    │           │   │   │           │   ├── dict
    │           │   │   │           │   │   ├── default.html
    │           │   │   │           │   │   ├── text.txt
    │           │   │   │           │   │   └── ul.html
    │           │   │   │           │   └── list
    │           │   │   │           │       ├── default.html
    │           │   │   │           │       ├── text.txt
    │           │   │   │           │       └── ul.html
    │           │   │   │           ├── field.html
    │           │   │   │           ├── formsets
    │           │   │   │           │   ├── div.html
    │           │   │   │           │   ├── p.html
    │           │   │   │           │   ├── table.html
    │           │   │   │           │   └── ul.html
    │           │   │   │           ├── label.html
    │           │   │   │           ├── p.html
    │           │   │   │           ├── table.html
    │           │   │   │           ├── ul.html
    │           │   │   │           └── widgets
    │           │   │   │               ├── attrs.html
    │           │   │   │               ├── checkbox.html
    │           │   │   │               ├── checkbox_option.html
    │           │   │   │               ├── checkbox_select.html
    │           │   │   │               ├── clearable_file_input.html
    │           │   │   │               ├── color.html
    │           │   │   │               ├── date.html
    │           │   │   │               ├── datetime.html
    │           │   │   │               ├── email.html
    │           │   │   │               ├── file.html
    │           │   │   │               ├── hidden.html
    │           │   │   │               ├── input.html
    │           │   │   │               ├── input_option.html
    │           │   │   │               ├── multiple_hidden.html
    │           │   │   │               ├── multiple_input.html
    │           │   │   │               ├── multiwidget.html
    │           │   │   │               ├── number.html
    │           │   │   │               ├── password.html
    │           │   │   │               ├── radio.html
    │           │   │   │               ├── radio_option.html
    │           │   │   │               ├── search.html
    │           │   │   │               ├── select.html
    │           │   │   │               ├── select_date.html
    │           │   │   │               ├── select_option.html
    │           │   │   │               ├── splitdatetime.html
    │           │   │   │               ├── splithiddendatetime.html
    │           │   │   │               ├── tel.html
    │           │   │   │               ├── text.html
    │           │   │   │               ├── textarea.html
    │           │   │   │               ├── time.html
    │           │   │   │               └── url.html
    │           │   │   ├── utils.py
    │           │   │   └── widgets.py
    │           │   ├── http
    │           │   │   ├── __init__.py
    │           │   │   ├── cookie.py
    │           │   │   ├── multipartparser.py
    │           │   │   ├── request.py
    │           │   │   └── response.py
    │           │   ├── middleware
    │           │   │   ├── __init__.py
    │           │   │   ├── cache.py
    │           │   │   ├── clickjacking.py
    │           │   │   ├── common.py
    │           │   │   ├── csrf.py
    │           │   │   ├── gzip.py
    │           │   │   ├── http.py
    │           │   │   ├── locale.py
    │           │   │   └── security.py
    │           │   ├── shortcuts.py
    │           │   ├── template
    │           │   │   ├── __init__.py
    │           │   │   ├── autoreload.py
    │           │   │   ├── backends
    │           │   │   │   ├── __init__.py
    │           │   │   │   ├── base.py
    │           │   │   │   ├── django.py
    │           │   │   │   ├── dummy.py
    │           │   │   │   ├── jinja2.py
    │           │   │   │   └── utils.py
    │           │   │   ├── base.py
    │           │   │   ├── context.py
    │           │   │   ├── context_processors.py
    │           │   │   ├── defaultfilters.py
    │           │   │   ├── defaulttags.py
    │           │   │   ├── engine.py
    │           │   │   ├── exceptions.py
    │           │   │   ├── library.py
    │           │   │   ├── loader.py
    │           │   │   ├── loader_tags.py
    │           │   │   ├── loaders
    │           │   │   │   ├── __init__.py
    │           │   │   │   ├── app_directories.py
    │           │   │   │   ├── base.py
    │           │   │   │   ├── cached.py
    │           │   │   │   ├── filesystem.py
    │           │   │   │   └── locmem.py
    │           │   │   ├── response.py
    │           │   │   ├── smartif.py
    │           │   │   └── utils.py
    │           │   ├── templatetags
    │           │   │   ├── __init__.py
    │           │   │   ├── cache.py
    │           │   │   ├── i18n.py
    │           │   │   ├── l10n.py
    │           │   │   ├── static.py
    │           │   │   └── tz.py
    │           │   ├── test
    │           │   │   ├── __init__.py
    │           │   │   ├── client.py
    │           │   │   ├── html.py
    │           │   │   ├── runner.py
    │           │   │   ├── selenium.py
    │           │   │   ├── signals.py
    │           │   │   ├── testcases.py
    │           │   │   └── utils.py
    │           │   ├── urls
    │           │   │   ├── __init__.py
    │           │   │   ├── base.py
    │           │   │   ├── conf.py
    │           │   │   ├── converters.py
    │           │   │   ├── exceptions.py
    │           │   │   ├── resolvers.py
    │           │   │   └── utils.py
    │           │   ├── utils
    │           │   │   ├── __init__.py
    │           │   │   ├── _os.py
    │           │   │   ├── archive.py
    │           │   │   ├── asyncio.py
    │           │   │   ├── autoreload.py
    │           │   │   ├── cache.py
    │           │   │   ├── choices.py
    │           │   │   ├── connection.py
    │           │   │   ├── crypto.py
    │           │   │   ├── datastructures.py
    │           │   │   ├── dateformat.py
    │           │   │   ├── dateparse.py
    │           │   │   ├── dates.py
    │           │   │   ├── deconstruct.py
    │           │   │   ├── decorators.py
    │           │   │   ├── deprecation.py
    │           │   │   ├── duration.py
    │           │   │   ├── encoding.py
    │           │   │   ├── feedgenerator.py
    │           │   │   ├── formats.py
    │           │   │   ├── functional.py
    │           │   │   ├── hashable.py
    │           │   │   ├── html.py
    │           │   │   ├── http.py
    │           │   │   ├── inspect.py
    │           │   │   ├── ipv6.py
    │           │   │   ├── itercompat.py
    │           │   │   ├── log.py
    │           │   │   ├── lorem_ipsum.py
    │           │   │   ├── module_loading.py
    │           │   │   ├── numberformat.py
    │           │   │   ├── regex_helper.py
    │           │   │   ├── safestring.py
    │           │   │   ├── termcolors.py
    │           │   │   ├── text.py
    │           │   │   ├── timesince.py
    │           │   │   ├── timezone.py
    │           │   │   ├── translation
    │           │   │   │   ├── __init__.py
    │           │   │   │   ├── reloader.py
    │           │   │   │   ├── template.py
    │           │   │   │   ├── trans_null.py
    │           │   │   │   └── trans_real.py
    │           │   │   ├── tree.py
    │           │   │   ├── version.py
    │           │   │   └── xmlutils.py
    │           │   └── views
    │           │       ├── __init__.py
    │           │       ├── csrf.py
    │           │       ├── debug.py
    │           │       ├── decorators
    │           │       │   ├── __init__.py
    │           │       │   ├── cache.py
    │           │       │   ├── clickjacking.py
    │           │       │   ├── common.py
    │           │       │   ├── csrf.py
    │           │       │   ├── debug.py
    │           │       │   ├── gzip.py
    │           │       │   ├── http.py
    │           │       │   └── vary.py
    │           │       ├── defaults.py
    │           │       ├── generic
    │           │       │   ├── __init__.py
    │           │       │   ├── base.py
    │           │       │   ├── dates.py
    │           │       │   ├── detail.py
    │           │       │   ├── edit.py
    │           │       │   └── list.py
    │           │       ├── i18n.py
    │           │       ├── static.py
    │           │       └── templates
    │           │           ├── csrf_403.html
    │           │           ├── default_urlconf.html
    │           │           ├── directory_index.html
    │           │           ├── i18n_catalog.js
    │           │           ├── technical_404.html
    │           │           ├── technical_500.html
    │           │           └── technical_500.txt
    │           ├── django-5.2.4.dist-info
    │           │   ├── INSTALLER
    │           │   ├── METADATA
    │           │   ├── RECORD
    │           │   ├── REQUESTED
    │           │   ├── WHEEL
    │           │   ├── entry_points.txt
    │           │   ├── licenses
    │           │   │   ├── AUTHORS
    │           │   │   ├── LICENSE
    │           │   │   └── LICENSE.python
    │           │   └── top_level.txt
    │           ├── flask
    │           │   ├── __init__.py
    │           │   ├── __main__.py
    │           │   ├── app.py
    │           │   ├── blueprints.py
    │           │   ├── cli.py
    │           │   ├── config.py
    │           │   ├── ctx.py
    │           │   ├── debughelpers.py
    │           │   ├── globals.py
    │           │   ├── helpers.py
    │           │   ├── json
    │           │   │   ├── __init__.py
    │           │   │   ├── provider.py
    │           │   │   └── tag.py
    │           │   ├── logging.py
    │           │   ├── py.typed
    │           │   ├── sansio
    │           │   │   ├── README.md
    │           │   │   ├── app.py
    │           │   │   ├── blueprints.py
    │           │   │   └── scaffold.py
    │           │   ├── sessions.py
    │           │   ├── signals.py
    │           │   ├── templating.py
    │           │   ├── testing.py
    │           │   ├── typing.py
    │           │   ├── views.py
    │           │   └── wrappers.py
    │           ├── flask-3.1.1.dist-info
    │           │   ├── INSTALLER
    │           │   ├── METADATA
    │           │   ├── RECORD
    │           │   ├── REQUESTED
    │           │   ├── WHEEL
    │           │   ├── entry_points.txt
    │           │   └── licenses
    │           │       └── LICENSE.txt
    │           ├── itsdangerous
    │           │   ├── __init__.py
    │           │   ├── _json.py
    │           │   ├── encoding.py
    │           │   ├── exc.py
    │           │   ├── py.typed
    │           │   ├── serializer.py
    │           │   ├── signer.py
    │           │   ├── timed.py
    │           │   └── url_safe.py
    │           ├── itsdangerous-2.2.0.dist-info
    │           │   ├── INSTALLER
    │           │   ├── LICENSE.txt
    │           │   ├── METADATA
    │           │   ├── RECORD
    │           │   └── WHEEL
    │           ├── jinja2
    │           │   ├── __init__.py
    │           │   ├── _identifier.py
    │           │   ├── async_utils.py
    │           │   ├── bccache.py
    │           │   ├── compiler.py
    │           │   ├── constants.py
    │           │   ├── debug.py
    │           │   ├── defaults.py
    │           │   ├── environment.py
    │           │   ├── exceptions.py
    │           │   ├── ext.py
    │           │   ├── filters.py
    │           │   ├── idtracking.py
    │           │   ├── lexer.py
    │           │   ├── loaders.py
    │           │   ├── meta.py
    │           │   ├── nativetypes.py
    │           │   ├── nodes.py
    │           │   ├── optimizer.py
    │           │   ├── parser.py
    │           │   ├── py.typed
    │           │   ├── runtime.py
    │           │   ├── sandbox.py
    │           │   ├── tests.py
    │           │   ├── utils.py
    │           │   └── visitor.py
    │           ├── jinja2-3.1.6.dist-info
    │           │   ├── INSTALLER
    │           │   ├── METADATA
    │           │   ├── RECORD
    │           │   ├── WHEEL
    │           │   ├── entry_points.txt
    │           │   └── licenses
    │           │       └── LICENSE.txt
    │           ├── markupsafe
    │           │   ├── __init__.py
    │           │   ├── _native.py
    │           │   ├── _speedups.c
    │           │   ├── _speedups.cpython-311-x86_64-linux-gnu.so
    │           │   ├── _speedups.pyi
    │           │   └── py.typed
    │           ├── pip
    │           │   ├── __init__.py
    │           │   ├── __main__.py
    │           │   ├── __pip-runner__.py
    │           │   ├── _internal
    │           │   │   ├── __init__.py
    │           │   │   ├── build_env.py
    │           │   │   ├── cache.py
    │           │   │   ├── cli
    │           │   │   │   ├── __init__.py
    │           │   │   │   ├── autocompletion.py
    │           │   │   │   ├── base_command.py
    │           │   │   │   ├── cmdoptions.py
    │           │   │   │   ├── command_context.py
    │           │   │   │   ├── main.py
    │           │   │   │   ├── main_parser.py
    │           │   │   │   ├── parser.py
    │           │   │   │   ├── progress_bars.py
    │           │   │   │   ├── req_command.py
    │           │   │   │   ├── spinners.py
    │           │   │   │   └── status_codes.py
    │           │   │   ├── commands
    │           │   │   │   ├── __init__.py
    │           │   │   │   ├── cache.py
    │           │   │   │   ├── check.py
    │           │   │   │   ├── completion.py
    │           │   │   │   ├── configuration.py
    │           │   │   │   ├── debug.py
    │           │   │   │   ├── download.py
    │           │   │   │   ├── freeze.py
    │           │   │   │   ├── hash.py
    │           │   │   │   ├── help.py
    │           │   │   │   ├── index.py
    │           │   │   │   ├── inspect.py
    │           │   │   │   ├── install.py
    │           │   │   │   ├── list.py
    │           │   │   │   ├── search.py
    │           │   │   │   ├── show.py
    │           │   │   │   ├── uninstall.py
    │           │   │   │   └── wheel.py
    │           │   │   ├── configuration.py
    │           │   │   ├── distributions
    │           │   │   │   ├── __init__.py
    │           │   │   │   ├── base.py
    │           │   │   │   ├── installed.py
    │           │   │   │   ├── sdist.py
    │           │   │   │   └── wheel.py
    │           │   │   ├── exceptions.py
    │           │   │   ├── index
    │           │   │   │   ├── __init__.py
    │           │   │   │   ├── collector.py
    │           │   │   │   ├── package_finder.py
    │           │   │   │   └── sources.py
    │           │   │   ├── locations
    │           │   │   │   ├── __init__.py
    │           │   │   │   ├── _distutils.py
    │           │   │   │   ├── _sysconfig.py
    │           │   │   │   └── base.py
    │           │   │   ├── main.py
    │           │   │   ├── metadata
    │           │   │   │   ├── __init__.py
    │           │   │   │   ├── _json.py
    │           │   │   │   ├── base.py
    │           │   │   │   ├── importlib
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   ├── _compat.py
    │           │   │   │   │   ├── _dists.py
    │           │   │   │   │   └── _envs.py
    │           │   │   │   └── pkg_resources.py
    │           │   │   ├── models
    │           │   │   │   ├── __init__.py
    │           │   │   │   ├── candidate.py
    │           │   │   │   ├── direct_url.py
    │           │   │   │   ├── format_control.py
    │           │   │   │   ├── index.py
    │           │   │   │   ├── installation_report.py
    │           │   │   │   ├── link.py
    │           │   │   │   ├── scheme.py
    │           │   │   │   ├── search_scope.py
    │           │   │   │   ├── selection_prefs.py
    │           │   │   │   ├── target_python.py
    │           │   │   │   └── wheel.py
    │           │   │   ├── network
    │           │   │   │   ├── __init__.py
    │           │   │   │   ├── auth.py
    │           │   │   │   ├── cache.py
    │           │   │   │   ├── download.py
    │           │   │   │   ├── lazy_wheel.py
    │           │   │   │   ├── session.py
    │           │   │   │   ├── utils.py
    │           │   │   │   └── xmlrpc.py
    │           │   │   ├── operations
    │           │   │   │   ├── __init__.py
    │           │   │   │   ├── build
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   ├── build_tracker.py
    │           │   │   │   │   ├── metadata.py
    │           │   │   │   │   ├── metadata_editable.py
    │           │   │   │   │   ├── metadata_legacy.py
    │           │   │   │   │   ├── wheel.py
    │           │   │   │   │   ├── wheel_editable.py
    │           │   │   │   │   └── wheel_legacy.py
    │           │   │   │   ├── check.py
    │           │   │   │   ├── freeze.py
    │           │   │   │   ├── install
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   ├── editable_legacy.py
    │           │   │   │   │   ├── legacy.py
    │           │   │   │   │   └── wheel.py
    │           │   │   │   └── prepare.py
    │           │   │   ├── pyproject.py
    │           │   │   ├── req
    │           │   │   │   ├── __init__.py
    │           │   │   │   ├── constructors.py
    │           │   │   │   ├── req_file.py
    │           │   │   │   ├── req_install.py
    │           │   │   │   ├── req_set.py
    │           │   │   │   └── req_uninstall.py
    │           │   │   ├── resolution
    │           │   │   │   ├── __init__.py
    │           │   │   │   ├── base.py
    │           │   │   │   ├── legacy
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   └── resolver.py
    │           │   │   │   └── resolvelib
    │           │   │   │       ├── __init__.py
    │           │   │   │       ├── base.py
    │           │   │   │       ├── candidates.py
    │           │   │   │       ├── factory.py
    │           │   │   │       ├── found_candidates.py
    │           │   │   │       ├── provider.py
    │           │   │   │       ├── reporter.py
    │           │   │   │       ├── requirements.py
    │           │   │   │       └── resolver.py
    │           │   │   ├── self_outdated_check.py
    │           │   │   ├── utils
    │           │   │   │   ├── __init__.py
    │           │   │   │   ├── _log.py
    │           │   │   │   ├── appdirs.py
    │           │   │   │   ├── compat.py
    │           │   │   │   ├── compatibility_tags.py
    │           │   │   │   ├── datetime.py
    │           │   │   │   ├── deprecation.py
    │           │   │   │   ├── direct_url_helpers.py
    │           │   │   │   ├── distutils_args.py
    │           │   │   │   ├── egg_link.py
    │           │   │   │   ├── encoding.py
    │           │   │   │   ├── entrypoints.py
    │           │   │   │   ├── filesystem.py
    │           │   │   │   ├── filetypes.py
    │           │   │   │   ├── glibc.py
    │           │   │   │   ├── hashes.py
    │           │   │   │   ├── inject_securetransport.py
    │           │   │   │   ├── logging.py
    │           │   │   │   ├── misc.py
    │           │   │   │   ├── models.py
    │           │   │   │   ├── packaging.py
    │           │   │   │   ├── setuptools_build.py
    │           │   │   │   ├── subprocess.py
    │           │   │   │   ├── temp_dir.py
    │           │   │   │   ├── unpacking.py
    │           │   │   │   ├── urls.py
    │           │   │   │   ├── virtualenv.py
    │           │   │   │   └── wheel.py
    │           │   │   ├── vcs
    │           │   │   │   ├── __init__.py
    │           │   │   │   ├── bazaar.py
    │           │   │   │   ├── git.py
    │           │   │   │   ├── mercurial.py
    │           │   │   │   ├── subversion.py
    │           │   │   │   └── versioncontrol.py
    │           │   │   └── wheel_builder.py
    │           │   ├── _vendor
    │           │   │   ├── __init__.py
    │           │   │   ├── cachecontrol
    │           │   │   │   ├── __init__.py
    │           │   │   │   ├── _cmd.py
    │           │   │   │   ├── adapter.py
    │           │   │   │   ├── cache.py
    │           │   │   │   ├── caches
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   ├── file_cache.py
    │           │   │   │   │   └── redis_cache.py
    │           │   │   │   ├── compat.py
    │           │   │   │   ├── controller.py
    │           │   │   │   ├── filewrapper.py
    │           │   │   │   ├── heuristics.py
    │           │   │   │   ├── serialize.py
    │           │   │   │   └── wrapper.py
    │           │   │   ├── certifi
    │           │   │   │   ├── __init__.py
    │           │   │   │   ├── __main__.py
    │           │   │   │   ├── cacert.pem
    │           │   │   │   └── core.py
    │           │   │   ├── chardet
    │           │   │   │   ├── __init__.py
    │           │   │   │   ├── big5freq.py
    │           │   │   │   ├── big5prober.py
    │           │   │   │   ├── chardistribution.py
    │           │   │   │   ├── charsetgroupprober.py
    │           │   │   │   ├── charsetprober.py
    │           │   │   │   ├── cli
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   └── chardetect.py
    │           │   │   │   ├── codingstatemachine.py
    │           │   │   │   ├── codingstatemachinedict.py
    │           │   │   │   ├── cp949prober.py
    │           │   │   │   ├── enums.py
    │           │   │   │   ├── escprober.py
    │           │   │   │   ├── escsm.py
    │           │   │   │   ├── eucjpprober.py
    │           │   │   │   ├── euckrfreq.py
    │           │   │   │   ├── euckrprober.py
    │           │   │   │   ├── euctwfreq.py
    │           │   │   │   ├── euctwprober.py
    │           │   │   │   ├── gb2312freq.py
    │           │   │   │   ├── gb2312prober.py
    │           │   │   │   ├── hebrewprober.py
    │           │   │   │   ├── jisfreq.py
    │           │   │   │   ├── johabfreq.py
    │           │   │   │   ├── johabprober.py
    │           │   │   │   ├── jpcntx.py
    │           │   │   │   ├── langbulgarianmodel.py
    │           │   │   │   ├── langgreekmodel.py
    │           │   │   │   ├── langhebrewmodel.py
    │           │   │   │   ├── langhungarianmodel.py
    │           │   │   │   ├── langrussianmodel.py
    │           │   │   │   ├── langthaimodel.py
    │           │   │   │   ├── langturkishmodel.py
    │           │   │   │   ├── latin1prober.py
    │           │   │   │   ├── macromanprober.py
    │           │   │   │   ├── mbcharsetprober.py
    │           │   │   │   ├── mbcsgroupprober.py
    │           │   │   │   ├── mbcssm.py
    │           │   │   │   ├── metadata
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   └── languages.py
    │           │   │   │   ├── resultdict.py
    │           │   │   │   ├── sbcharsetprober.py
    │           │   │   │   ├── sbcsgroupprober.py
    │           │   │   │   ├── sjisprober.py
    │           │   │   │   ├── universaldetector.py
    │           │   │   │   ├── utf1632prober.py
    │           │   │   │   ├── utf8prober.py
    │           │   │   │   └── version.py
    │           │   │   ├── colorama
    │           │   │   │   ├── __init__.py
    │           │   │   │   ├── ansi.py
    │           │   │   │   ├── ansitowin32.py
    │           │   │   │   ├── initialise.py
    │           │   │   │   ├── tests
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   ├── ansi_test.py
    │           │   │   │   │   ├── ansitowin32_test.py
    │           │   │   │   │   ├── initialise_test.py
    │           │   │   │   │   ├── isatty_test.py
    │           │   │   │   │   ├── utils.py
    │           │   │   │   │   └── winterm_test.py
    │           │   │   │   ├── win32.py
    │           │   │   │   └── winterm.py
    │           │   │   ├── distlib
    │           │   │   │   ├── __init__.py
    │           │   │   │   ├── compat.py
    │           │   │   │   ├── database.py
    │           │   │   │   ├── index.py
    │           │   │   │   ├── locators.py
    │           │   │   │   ├── manifest.py
    │           │   │   │   ├── markers.py
    │           │   │   │   ├── metadata.py
    │           │   │   │   ├── resources.py
    │           │   │   │   ├── scripts.py
    │           │   │   │   ├── util.py
    │           │   │   │   ├── version.py
    │           │   │   │   └── wheel.py
    │           │   │   ├── distro
    │           │   │   │   ├── __init__.py
    │           │   │   │   ├── __main__.py
    │           │   │   │   └── distro.py
    │           │   │   ├── idna
    │           │   │   │   ├── __init__.py
    │           │   │   │   ├── codec.py
    │           │   │   │   ├── compat.py
    │           │   │   │   ├── core.py
    │           │   │   │   ├── idnadata.py
    │           │   │   │   ├── intranges.py
    │           │   │   │   ├── package_data.py
    │           │   │   │   └── uts46data.py
    │           │   │   ├── msgpack
    │           │   │   │   ├── __init__.py
    │           │   │   │   ├── exceptions.py
    │           │   │   │   ├── ext.py
    │           │   │   │   └── fallback.py
    │           │   │   ├── packaging
    │           │   │   │   ├── __about__.py
    │           │   │   │   ├── __init__.py
    │           │   │   │   ├── _manylinux.py
    │           │   │   │   ├── _musllinux.py
    │           │   │   │   ├── _structures.py
    │           │   │   │   ├── markers.py
    │           │   │   │   ├── requirements.py
    │           │   │   │   ├── specifiers.py
    │           │   │   │   ├── tags.py
    │           │   │   │   ├── utils.py
    │           │   │   │   └── version.py
    │           │   │   ├── pkg_resources
    │           │   │   │   ├── __init__.py
    │           │   │   │   └── py31compat.py
    │           │   │   ├── platformdirs
    │           │   │   │   ├── __init__.py
    │           │   │   │   ├── __main__.py
    │           │   │   │   ├── android.py
    │           │   │   │   ├── api.py
    │           │   │   │   ├── macos.py
    │           │   │   │   ├── unix.py
    │           │   │   │   ├── version.py
    │           │   │   │   └── windows.py
    │           │   │   ├── pygments
    │           │   │   │   ├── __init__.py
    │           │   │   │   ├── __main__.py
    │           │   │   │   ├── cmdline.py
    │           │   │   │   ├── console.py
    │           │   │   │   ├── filter.py
    │           │   │   │   ├── filters
    │           │   │   │   │   └── __init__.py
    │           │   │   │   ├── formatter.py
    │           │   │   │   ├── formatters
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   ├── _mapping.py
    │           │   │   │   │   ├── bbcode.py
    │           │   │   │   │   ├── groff.py
    │           │   │   │   │   ├── html.py
    │           │   │   │   │   ├── img.py
    │           │   │   │   │   ├── irc.py
    │           │   │   │   │   ├── latex.py
    │           │   │   │   │   ├── other.py
    │           │   │   │   │   ├── pangomarkup.py
    │           │   │   │   │   ├── rtf.py
    │           │   │   │   │   ├── svg.py
    │           │   │   │   │   ├── terminal.py
    │           │   │   │   │   └── terminal256.py
    │           │   │   │   ├── lexer.py
    │           │   │   │   ├── lexers
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   ├── _mapping.py
    │           │   │   │   │   └── python.py
    │           │   │   │   ├── modeline.py
    │           │   │   │   ├── plugin.py
    │           │   │   │   ├── regexopt.py
    │           │   │   │   ├── scanner.py
    │           │   │   │   ├── sphinxext.py
    │           │   │   │   ├── style.py
    │           │   │   │   ├── styles
    │           │   │   │   │   └── __init__.py
    │           │   │   │   ├── token.py
    │           │   │   │   ├── unistring.py
    │           │   │   │   └── util.py
    │           │   │   ├── pyparsing
    │           │   │   │   ├── __init__.py
    │           │   │   │   ├── actions.py
    │           │   │   │   ├── common.py
    │           │   │   │   ├── core.py
    │           │   │   │   ├── diagram
    │           │   │   │   │   └── __init__.py
    │           │   │   │   ├── exceptions.py
    │           │   │   │   ├── helpers.py
    │           │   │   │   ├── results.py
    │           │   │   │   ├── testing.py
    │           │   │   │   ├── unicode.py
    │           │   │   │   └── util.py
    │           │   │   ├── pyproject_hooks
    │           │   │   │   ├── __init__.py
    │           │   │   │   ├── _compat.py
    │           │   │   │   ├── _impl.py
    │           │   │   │   └── _in_process
    │           │   │   │       ├── __init__.py
    │           │   │   │       └── _in_process.py
    │           │   │   ├── requests
    │           │   │   │   ├── __init__.py
    │           │   │   │   ├── __version__.py
    │           │   │   │   ├── _internal_utils.py
    │           │   │   │   ├── adapters.py
    │           │   │   │   ├── api.py
    │           │   │   │   ├── auth.py
    │           │   │   │   ├── certs.py
    │           │   │   │   ├── compat.py
    │           │   │   │   ├── cookies.py
    │           │   │   │   ├── exceptions.py
    │           │   │   │   ├── help.py
    │           │   │   │   ├── hooks.py
    │           │   │   │   ├── models.py
    │           │   │   │   ├── packages.py
    │           │   │   │   ├── sessions.py
    │           │   │   │   ├── status_codes.py
    │           │   │   │   ├── structures.py
    │           │   │   │   └── utils.py
    │           │   │   ├── resolvelib
    │           │   │   │   ├── __init__.py
    │           │   │   │   ├── compat
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   └── collections_abc.py
    │           │   │   │   ├── providers.py
    │           │   │   │   ├── reporters.py
    │           │   │   │   ├── resolvers.py
    │           │   │   │   └── structs.py
    │           │   │   ├── rich
    │           │   │   │   ├── __init__.py
    │           │   │   │   ├── __main__.py
    │           │   │   │   ├── _cell_widths.py
    │           │   │   │   ├── _emoji_codes.py
    │           │   │   │   ├── _emoji_replace.py
    │           │   │   │   ├── _export_format.py
    │           │   │   │   ├── _extension.py
    │           │   │   │   ├── _inspect.py
    │           │   │   │   ├── _log_render.py
    │           │   │   │   ├── _loop.py
    │           │   │   │   ├── _null_file.py
    │           │   │   │   ├── _palettes.py
    │           │   │   │   ├── _pick.py
    │           │   │   │   ├── _ratio.py
    │           │   │   │   ├── _spinners.py
    │           │   │   │   ├── _stack.py
    │           │   │   │   ├── _timer.py
    │           │   │   │   ├── _win32_console.py
    │           │   │   │   ├── _windows.py
    │           │   │   │   ├── _windows_renderer.py
    │           │   │   │   ├── _wrap.py
    │           │   │   │   ├── abc.py
    │           │   │   │   ├── align.py
    │           │   │   │   ├── ansi.py
    │           │   │   │   ├── bar.py
    │           │   │   │   ├── box.py
    │           │   │   │   ├── cells.py
    │           │   │   │   ├── color.py
    │           │   │   │   ├── color_triplet.py
    │           │   │   │   ├── columns.py
    │           │   │   │   ├── console.py
    │           │   │   │   ├── constrain.py
    │           │   │   │   ├── containers.py
    │           │   │   │   ├── control.py
    │           │   │   │   ├── default_styles.py
    │           │   │   │   ├── diagnose.py
    │           │   │   │   ├── emoji.py
    │           │   │   │   ├── errors.py
    │           │   │   │   ├── file_proxy.py
    │           │   │   │   ├── filesize.py
    │           │   │   │   ├── highlighter.py
    │           │   │   │   ├── json.py
    │           │   │   │   ├── jupyter.py
    │           │   │   │   ├── layout.py
    │           │   │   │   ├── live.py
    │           │   │   │   ├── live_render.py
    │           │   │   │   ├── logging.py
    │           │   │   │   ├── markup.py
    │           │   │   │   ├── measure.py
    │           │   │   │   ├── padding.py
    │           │   │   │   ├── pager.py
    │           │   │   │   ├── palette.py
    │           │   │   │   ├── panel.py
    │           │   │   │   ├── pretty.py
    │           │   │   │   ├── progress.py
    │           │   │   │   ├── progress_bar.py
    │           │   │   │   ├── prompt.py
    │           │   │   │   ├── protocol.py
    │           │   │   │   ├── region.py
    │           │   │   │   ├── repr.py
    │           │   │   │   ├── rule.py
    │           │   │   │   ├── scope.py
    │           │   │   │   ├── screen.py
    │           │   │   │   ├── segment.py
    │           │   │   │   ├── spinner.py
    │           │   │   │   ├── status.py
    │           │   │   │   ├── style.py
    │           │   │   │   ├── styled.py
    │           │   │   │   ├── syntax.py
    │           │   │   │   ├── table.py
    │           │   │   │   ├── terminal_theme.py
    │           │   │   │   ├── text.py
    │           │   │   │   ├── theme.py
    │           │   │   │   ├── themes.py
    │           │   │   │   ├── traceback.py
    │           │   │   │   └── tree.py
    │           │   │   ├── six.py
    │           │   │   ├── tenacity
    │           │   │   │   ├── __init__.py
    │           │   │   │   ├── _asyncio.py
    │           │   │   │   ├── _utils.py
    │           │   │   │   ├── after.py
    │           │   │   │   ├── before.py
    │           │   │   │   ├── before_sleep.py
    │           │   │   │   ├── nap.py
    │           │   │   │   ├── retry.py
    │           │   │   │   ├── stop.py
    │           │   │   │   ├── tornadoweb.py
    │           │   │   │   └── wait.py
    │           │   │   ├── tomli
    │           │   │   │   ├── __init__.py
    │           │   │   │   ├── _parser.py
    │           │   │   │   ├── _re.py
    │           │   │   │   └── _types.py
    │           │   │   ├── typing_extensions.py
    │           │   │   ├── urllib3
    │           │   │   │   ├── __init__.py
    │           │   │   │   ├── _collections.py
    │           │   │   │   ├── _version.py
    │           │   │   │   ├── connection.py
    │           │   │   │   ├── connectionpool.py
    │           │   │   │   ├── contrib
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   ├── _appengine_environ.py
    │           │   │   │   │   ├── _securetransport
    │           │   │   │   │   │   ├── __init__.py
    │           │   │   │   │   │   ├── bindings.py
    │           │   │   │   │   │   └── low_level.py
    │           │   │   │   │   ├── appengine.py
    │           │   │   │   │   ├── ntlmpool.py
    │           │   │   │   │   ├── pyopenssl.py
    │           │   │   │   │   ├── securetransport.py
    │           │   │   │   │   └── socks.py
    │           │   │   │   ├── exceptions.py
    │           │   │   │   ├── fields.py
    │           │   │   │   ├── filepost.py
    │           │   │   │   ├── packages
    │           │   │   │   │   ├── __init__.py
    │           │   │   │   │   ├── backports
    │           │   │   │   │   │   ├── __init__.py
    │           │   │   │   │   │   └── makefile.py
    │           │   │   │   │   └── six.py
    │           │   │   │   ├── poolmanager.py
    │           │   │   │   ├── request.py
    │           │   │   │   ├── response.py
    │           │   │   │   └── util
    │           │   │   │       ├── __init__.py
    │           │   │   │       ├── connection.py
    │           │   │   │       ├── proxy.py
    │           │   │   │       ├── queue.py
    │           │   │   │       ├── request.py
    │           │   │   │       ├── response.py
    │           │   │   │       ├── retry.py
    │           │   │   │       ├── ssl_.py
    │           │   │   │       ├── ssl_match_hostname.py
    │           │   │   │       ├── ssltransport.py
    │           │   │   │       ├── timeout.py
    │           │   │   │       ├── url.py
    │           │   │   │       └── wait.py
    │           │   │   ├── vendor.txt
    │           │   │   └── webencodings
    │           │   │       ├── __init__.py
    │           │   │       ├── labels.py
    │           │   │       ├── mklabels.py
    │           │   │       ├── tests.py
    │           │   │       └── x_user_defined.py
    │           │   └── py.typed
    │           ├── pip-23.0.1.dist-info
    │           │   ├── INSTALLER
    │           │   ├── LICENSE.txt
    │           │   ├── METADATA
    │           │   ├── RECORD
    │           │   ├── REQUESTED
    │           │   ├── WHEEL
    │           │   ├── entry_points.txt
    │           │   └── top_level.txt
    │           ├── pkg_resources
    │           │   ├── __init__.py
    │           │   ├── _vendor
    │           │   │   ├── __init__.py
    │           │   │   ├── importlib_resources
    │           │   │   │   ├── __init__.py
    │           │   │   │   ├── _adapters.py
    │           │   │   │   ├── _common.py
    │           │   │   │   ├── _compat.py
    │           │   │   │   ├── _itertools.py
    │           │   │   │   ├── _legacy.py
    │           │   │   │   ├── abc.py
    │           │   │   │   ├── readers.py
    │           │   │   │   └── simple.py
    │           │   │   ├── jaraco
    │           │   │   │   ├── __init__.py
    │           │   │   │   ├── context.py
    │           │   │   │   ├── functools.py
    │           │   │   │   └── text
    │           │   │   │       └── __init__.py
    │           │   │   ├── more_itertools
    │           │   │   │   ├── __init__.py
    │           │   │   │   ├── more.py
    │           │   │   │   └── recipes.py
    │           │   │   ├── packaging
    │           │   │   │   ├── __about__.py
    │           │   │   │   ├── __init__.py
    │           │   │   │   ├── _manylinux.py
    │           │   │   │   ├── _musllinux.py
    │           │   │   │   ├── _structures.py
    │           │   │   │   ├── markers.py
    │           │   │   │   ├── requirements.py
    │           │   │   │   ├── specifiers.py
    │           │   │   │   ├── tags.py
    │           │   │   │   ├── utils.py
    │           │   │   │   └── version.py
    │           │   │   ├── platformdirs
    │           │   │   │   ├── __init__.py
    │           │   │   │   ├── __main__.py
    │           │   │   │   ├── android.py
    │           │   │   │   ├── api.py
    │           │   │   │   ├── macos.py
    │           │   │   │   ├── unix.py
    │           │   │   │   ├── version.py
    │           │   │   │   └── windows.py
    │           │   │   ├── pyparsing
    │           │   │   │   ├── __init__.py
    │           │   │   │   ├── actions.py
    │           │   │   │   ├── common.py
    │           │   │   │   ├── core.py
    │           │   │   │   ├── diagram
    │           │   │   │   │   └── __init__.py
    │           │   │   │   ├── exceptions.py
    │           │   │   │   ├── helpers.py
    │           │   │   │   ├── results.py
    │           │   │   │   ├── testing.py
    │           │   │   │   ├── unicode.py
    │           │   │   │   └── util.py
    │           │   │   ├── typing_extensions.py
    │           │   │   └── zipp.py
    │           │   └── extern
    │           │       └── __init__.py
    │           ├── setuptools
    │           │   ├── __init__.py
    │           │   ├── _deprecation_warning.py
    │           │   ├── _distutils
    │           │   │   ├── __init__.py
    │           │   │   ├── _collections.py
    │           │   │   ├── _functools.py
    │           │   │   ├── _log.py
    │           │   │   ├── _macos_compat.py
    │           │   │   ├── _msvccompiler.py
    │           │   │   ├── archive_util.py
    │           │   │   ├── bcppcompiler.py
    │           │   │   ├── ccompiler.py
    │           │   │   ├── cmd.py
    │           │   │   ├── command
    │           │   │   │   ├── __init__.py
    │           │   │   │   ├── _framework_compat.py
    │           │   │   │   ├── bdist.py
    │           │   │   │   ├── bdist_dumb.py
    │           │   │   │   ├── bdist_rpm.py
    │           │   │   │   ├── build.py
    │           │   │   │   ├── build_clib.py
    │           │   │   │   ├── build_ext.py
    │           │   │   │   ├── build_py.py
    │           │   │   │   ├── build_scripts.py
    │           │   │   │   ├── check.py
    │           │   │   │   ├── clean.py
    │           │   │   │   ├── config.py
    │           │   │   │   ├── install.py
    │           │   │   │   ├── install_data.py
    │           │   │   │   ├── install_egg_info.py
    │           │   │   │   ├── install_headers.py
    │           │   │   │   ├── install_lib.py
    │           │   │   │   ├── install_scripts.py
    │           │   │   │   ├── py37compat.py
    │           │   │   │   ├── register.py
    │           │   │   │   ├── sdist.py
    │           │   │   │   └── upload.py
    │           │   │   ├── config.py
    │           │   │   ├── core.py
    │           │   │   ├── cygwinccompiler.py
    │           │   │   ├── debug.py
    │           │   │   ├── dep_util.py
    │           │   │   ├── dir_util.py
    │           │   │   ├── dist.py
    │           │   │   ├── errors.py
    │           │   │   ├── extension.py
    │           │   │   ├── fancy_getopt.py
    │           │   │   ├── file_util.py
    │           │   │   ├── filelist.py
    │           │   │   ├── log.py
    │           │   │   ├── msvc9compiler.py
    │           │   │   ├── msvccompiler.py
    │           │   │   ├── py38compat.py
    │           │   │   ├── py39compat.py
    │           │   │   ├── spawn.py
    │           │   │   ├── sysconfig.py
    │           │   │   ├── text_file.py
    │           │   │   ├── unixccompiler.py
    │           │   │   ├── util.py
    │           │   │   ├── version.py
    │           │   │   └── versionpredicate.py
    │           │   ├── _entry_points.py
    │           │   ├── _imp.py
    │           │   ├── _importlib.py
    │           │   ├── _itertools.py
    │           │   ├── _path.py
    │           │   ├── _reqs.py
    │           │   ├── _vendor
    │           │   │   ├── __init__.py
    │           │   │   ├── importlib_metadata
    │           │   │   │   ├── __init__.py
    │           │   │   │   ├── _adapters.py
    │           │   │   │   ├── _collections.py
    │           │   │   │   ├── _compat.py
    │           │   │   │   ├── _functools.py
    │           │   │   │   ├── _itertools.py
    │           │   │   │   ├── _meta.py
    │           │   │   │   └── _text.py
    │           │   │   ├── importlib_resources
    │           │   │   │   ├── __init__.py
    │           │   │   │   ├── _adapters.py
    │           │   │   │   ├── _common.py
    │           │   │   │   ├── _compat.py
    │           │   │   │   ├── _itertools.py
    │           │   │   │   ├── _legacy.py
    │           │   │   │   ├── abc.py
    │           │   │   │   ├── readers.py
    │           │   │   │   └── simple.py
    │           │   │   ├── jaraco
    │           │   │   │   ├── __init__.py
    │           │   │   │   ├── context.py
    │           │   │   │   ├── functools.py
    │           │   │   │   └── text
    │           │   │   │       └── __init__.py
    │           │   │   ├── more_itertools
    │           │   │   │   ├── __init__.py
    │           │   │   │   ├── more.py
    │           │   │   │   └── recipes.py
    │           │   │   ├── ordered_set.py
    │           │   │   ├── packaging
    │           │   │   │   ├── __about__.py
    │           │   │   │   ├── __init__.py
    │           │   │   │   ├── _manylinux.py
    │           │   │   │   ├── _musllinux.py
    │           │   │   │   ├── _structures.py
    │           │   │   │   ├── markers.py
    │           │   │   │   ├── requirements.py
    │           │   │   │   ├── specifiers.py
    │           │   │   │   ├── tags.py
    │           │   │   │   ├── utils.py
    │           │   │   │   └── version.py
    │           │   │   ├── pyparsing
    │           │   │   │   ├── __init__.py
    │           │   │   │   ├── actions.py
    │           │   │   │   ├── common.py
    │           │   │   │   ├── core.py
    │           │   │   │   ├── diagram
    │           │   │   │   │   └── __init__.py
    │           │   │   │   ├── exceptions.py
    │           │   │   │   ├── helpers.py
    │           │   │   │   ├── results.py
    │           │   │   │   ├── testing.py
    │           │   │   │   ├── unicode.py
    │           │   │   │   └── util.py
    │           │   │   ├── tomli
    │           │   │   │   ├── __init__.py
    │           │   │   │   ├── _parser.py
    │           │   │   │   ├── _re.py
    │           │   │   │   └── _types.py
    │           │   │   ├── typing_extensions.py
    │           │   │   └── zipp.py
    │           │   ├── archive_util.py
    │           │   ├── build_meta.py
    │           │   ├── cli-32.exe
    │           │   ├── cli-64.exe
    │           │   ├── cli-arm64.exe
    │           │   ├── cli.exe
    │           │   ├── command
    │           │   │   ├── __init__.py
    │           │   │   ├── alias.py
    │           │   │   ├── bdist_egg.py
    │           │   │   ├── bdist_rpm.py
    │           │   │   ├── build.py
    │           │   │   ├── build_clib.py
    │           │   │   ├── build_ext.py
    │           │   │   ├── build_py.py
    │           │   │   ├── develop.py
    │           │   │   ├── dist_info.py
    │           │   │   ├── easy_install.py
    │           │   │   ├── editable_wheel.py
    │           │   │   ├── egg_info.py
    │           │   │   ├── install.py
    │           │   │   ├── install_egg_info.py
    │           │   │   ├── install_lib.py
    │           │   │   ├── install_scripts.py
    │           │   │   ├── launcher manifest.xml
    │           │   │   ├── py36compat.py
    │           │   │   ├── register.py
    │           │   │   ├── rotate.py
    │           │   │   ├── saveopts.py
    │           │   │   ├── sdist.py
    │           │   │   ├── setopt.py
    │           │   │   ├── test.py
    │           │   │   ├── upload.py
    │           │   │   └── upload_docs.py
    │           │   ├── config
    │           │   │   ├── __init__.py
    │           │   │   ├── _apply_pyprojecttoml.py
    │           │   │   ├── _validate_pyproject
    │           │   │   │   ├── __init__.py
    │           │   │   │   ├── error_reporting.py
    │           │   │   │   ├── extra_validations.py
    │           │   │   │   ├── fastjsonschema_exceptions.py
    │           │   │   │   ├── fastjsonschema_validations.py
    │           │   │   │   └── formats.py
    │           │   │   ├── expand.py
    │           │   │   ├── pyprojecttoml.py
    │           │   │   └── setupcfg.py
    │           │   ├── dep_util.py
    │           │   ├── depends.py
    │           │   ├── discovery.py
    │           │   ├── dist.py
    │           │   ├── errors.py
    │           │   ├── extension.py
    │           │   ├── extern
    │           │   │   └── __init__.py
    │           │   ├── glob.py
    │           │   ├── gui-32.exe
    │           │   ├── gui-64.exe
    │           │   ├── gui-arm64.exe
    │           │   ├── gui.exe
    │           │   ├── installer.py
    │           │   ├── launch.py
    │           │   ├── logging.py
    │           │   ├── monkey.py
    │           │   ├── msvc.py
    │           │   ├── namespaces.py
    │           │   ├── package_index.py
    │           │   ├── py34compat.py
    │           │   ├── sandbox.py
    │           │   ├── script (dev).tmpl
    │           │   ├── script.tmpl
    │           │   ├── unicode_utils.py
    │           │   ├── version.py
    │           │   ├── wheel.py
    │           │   └── windows_support.py
    │           ├── setuptools-66.1.1.dist-info
    │           │   ├── INSTALLER
    │           │   ├── LICENSE
    │           │   ├── METADATA
    │           │   ├── RECORD
    │           │   ├── REQUESTED
    │           │   ├── WHEEL
    │           │   ├── entry_points.txt
    │           │   └── top_level.txt
    │           ├── sqlparse
    │           │   ├── __init__.py
    │           │   ├── __main__.py
    │           │   ├── cli.py
    │           │   ├── engine
    │           │   │   ├── __init__.py
    │           │   │   ├── filter_stack.py
    │           │   │   ├── grouping.py
    │           │   │   └── statement_splitter.py
    │           │   ├── exceptions.py
    │           │   ├── filters
    │           │   │   ├── __init__.py
    │           │   │   ├── aligned_indent.py
    │           │   │   ├── others.py
    │           │   │   ├── output.py
    │           │   │   ├── reindent.py
    │           │   │   ├── right_margin.py
    │           │   │   └── tokens.py
    │           │   ├── formatter.py
    │           │   ├── keywords.py
    │           │   ├── lexer.py
    │           │   ├── sql.py
    │           │   ├── tokens.py
    │           │   └── utils.py
    │           ├── sqlparse-0.5.3.dist-info
    │           │   ├── INSTALLER
    │           │   ├── METADATA
    │           │   ├── RECORD
    │           │   ├── WHEEL
    │           │   ├── entry_points.txt
    │           │   └── licenses
    │           │       ├── AUTHORS
    │           │       └── LICENSE
    │           ├── watchdog
    │           │   ├── __init__.py
    │           │   ├── events.py
    │           │   ├── observers
    │           │   │   ├── __init__.py
    │           │   │   ├── api.py
    │           │   │   ├── fsevents.py
    │           │   │   ├── fsevents2.py
    │           │   │   ├── inotify.py
    │           │   │   ├── inotify_buffer.py
    │           │   │   ├── inotify_c.py
    │           │   │   ├── kqueue.py
    │           │   │   ├── polling.py
    │           │   │   ├── read_directory_changes.py
    │           │   │   └── winapi.py
    │           │   ├── py.typed
    │           │   ├── tricks
    │           │   │   └── __init__.py
    │           │   ├── utils
    │           │   │   ├── __init__.py
    │           │   │   ├── bricks.py
    │           │   │   ├── delayed_queue.py
    │           │   │   ├── dirsnapshot.py
    │           │   │   ├── echo.py
    │           │   │   ├── event_debouncer.py
    │           │   │   ├── patterns.py
    │           │   │   ├── platform.py
    │           │   │   └── process_watcher.py
    │           │   ├── version.py
    │           │   └── watchmedo.py
    │           ├── watchdog-6.0.0.dist-info
    │           │   ├── AUTHORS
    │           │   ├── COPYING
    │           │   ├── INSTALLER
    │           │   ├── LICENSE
    │           │   ├── METADATA
    │           │   ├── RECORD
    │           │   ├── REQUESTED
    │           │   ├── WHEEL
    │           │   ├── entry_points.txt
    │           │   └── top_level.txt
    │           ├── werkzeug
    │           │   ├── __init__.py
    │           │   ├── _internal.py
    │           │   ├── _reloader.py
    │           │   ├── datastructures
    │           │   │   ├── __init__.py
    │           │   │   ├── accept.py
    │           │   │   ├── auth.py
    │           │   │   ├── cache_control.py
    │           │   │   ├── csp.py
    │           │   │   ├── etag.py
    │           │   │   ├── file_storage.py
    │           │   │   ├── headers.py
    │           │   │   ├── mixins.py
    │           │   │   ├── range.py
    │           │   │   └── structures.py
    │           │   ├── debug
    │           │   │   ├── __init__.py
    │           │   │   ├── console.py
    │           │   │   ├── repr.py
    │           │   │   ├── shared
    │           │   │   │   ├── ICON_LICENSE.md
    │           │   │   │   ├── console.png
    │           │   │   │   ├── debugger.js
    │           │   │   │   ├── less.png
    │           │   │   │   ├── more.png
    │           │   │   │   └── style.css
    │           │   │   └── tbtools.py
    │           │   ├── exceptions.py
    │           │   ├── formparser.py
    │           │   ├── http.py
    │           │   ├── local.py
    │           │   ├── middleware
    │           │   │   ├── __init__.py
    │           │   │   ├── dispatcher.py
    │           │   │   ├── http_proxy.py
    │           │   │   ├── lint.py
    │           │   │   ├── profiler.py
    │           │   │   ├── proxy_fix.py
    │           │   │   └── shared_data.py
    │           │   ├── py.typed
    │           │   ├── routing
    │           │   │   ├── __init__.py
    │           │   │   ├── converters.py
    │           │   │   ├── exceptions.py
    │           │   │   ├── map.py
    │           │   │   ├── matcher.py
    │           │   │   └── rules.py
    │           │   ├── sansio
    │           │   │   ├── __init__.py
    │           │   │   ├── http.py
    │           │   │   ├── multipart.py
    │           │   │   ├── request.py
    │           │   │   ├── response.py
    │           │   │   └── utils.py
    │           │   ├── security.py
    │           │   ├── serving.py
    │           │   ├── test.py
    │           │   ├── testapp.py
    │           │   ├── urls.py
    │           │   ├── user_agent.py
    │           │   ├── utils.py
    │           │   ├── wrappers
    │           │   │   ├── __init__.py
    │           │   │   ├── request.py
    │           │   │   └── response.py
    │           │   └── wsgi.py
    │           └── werkzeug-3.1.3.dist-info
    │               ├── INSTALLER
    │               ├── LICENSE.txt
    │               ├── METADATA
    │               ├── RECORD
    │               └── WHEEL
    └── pyvenv.cfg
```
